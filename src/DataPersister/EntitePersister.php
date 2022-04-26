<?php

namespace App\DataPersister;


use App\Entity\Entite;
use App\Enums\TypeEntiteEnum;
use App\Repository\TypeEntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


final class EntitePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $encoder;
    private $typeEntiteRepository;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, UserPasswordEncoderInterface $encoder, TypeEntiteRepository $typeEntiteRepository)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->encoder = $encoder;
        $this->typeEntiteRepository = $typeEntiteRepository;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Entite;
    }

    public function persist($data, array $context = [])
    {
        $newData=json_decode($this->requestStack->getContent());

        if (isset($newData->typeEntite)) {
            $typeEntite = $this->typeEntiteRepository->findOneBy(['titre' => $newData->typeEntite]);
            if ($typeEntite) {
                $data->setTypeEntite($typeEntite);
            }else{
                return new Response(json_encode(['message'=>'Le type selectionné n\'existe pas !!!']), 403,
                ['content-type' => 'application/json']);
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