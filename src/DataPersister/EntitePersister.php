<?php

namespace App\DataPersister;


use App\Entity\Entite;
use App\Repository\EntiteRepository;
use App\Repository\TypeEntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;


final class EntitePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $localisationRepository;
    private $requestStack;
    private $typeEntiteRepository;
    private $encoder;

    public function __construct(EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, RequestStack $requestStack, EntiteRepository $localisationRepository, TypeEntiteRepository $typeEntiteRepository) {
        $this->entityManager = $manager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->localisationRepository = $localisationRepository;
        $this->typeEntiteRepository = $typeEntiteRepository;
        $this->encoder = $encoder;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Entite;
    }

    public function persist($data, array $context = [])
    {
        // TODO: Implement persist() method.
        $newData = json_decode($this->requestStack->getContent());

        $data->getAdmins()[0]->getUser()->setPassword($this->encoder->encodePassword($data->getAdmins()[0]->getUser(), $newData->admins[0]->user->password));
//        dd($data->getAdmins()[0]->getUser()->getPassword());

        $typeEntite = $this->typeEntiteRepository->findOneBy(['titre' => $newData->typeEntite]);
        $data->setTypeEntite($typeEntite);

        if ($newData->isEntreprise === true) {
            $data->setType('ENTREPRISE');
        }else {
            $data->setType('COLLECTIVITE');
        }
        $father = $this->localisationRepository->findOneBy(['id' => $newData->fathers]);
        if ($father !== null) {
            $entreprise = $newData->isEntreprise;
            if($entreprise === $father->getIsEntreprise()) {
                $data->setFather($father);
            }else {
                return new JsonResponse('Les deux entites doivent etre du meme type', Response::HTTP_UNAUTHORIZED);
            }
        }

        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->remove($data->getContact() ?? null);
        $this->entityManager->flush();
    }
}