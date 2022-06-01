<?php

namespace App\DataPersister;

use App\Entity\Gestionnaire;
use App\Enums\TypeGestionnaireEnum;
use App\Repository\EntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class GestionnairePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $encoder;
    private $entiteRepository;

    const GESTIONNAIRE_TYPE = [TypeGestionnaireEnum::DIRIGEANT,TypeGestionnaireEnum::EMPLOYE, TypeGestionnaireEnum::INVITE, TypeGestionnaireEnum::AUTRE];

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack, UserPasswordEncoderInterface $encoder, EntiteRepository $entiteRepository)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->encoder = $encoder;
        $this->entiteRepository = $entiteRepository;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Gestionnaire;
    }

    public function persist($data, array $context = [])
    {
        $newData=json_decode($this->requestStack->getContent());

        if ((($context['collection_operation_name'] ?? null) === 'post')){
            $data->getUser()->setCreatedAt(new \DateTime());
            $data->getUser()->setPassword($this->encoder->encodePassword($data->getUser(), $data->getUser()->getPassword()));
        }

        $newData->type = $data->getTypeGestionnaire();

        if (in_array($newData->typeGestionnaire, self::GESTIONNAIRE_TYPE)) {

            $data->setTypeGestionnaire(self::GESTIONNAIRE_TYPE[$newData->typeGestionnaire-1]);
            switch ($data->getTypeGestionnaire()) {
                case TypeGestionnaireEnum::DIRIGEANT:
                    $data->getUser()->setType('DIRIGEANT');
                    break;
                case TypeGestionnaireEnum::EMPLOYE:
                    $data->getUser()->setType('EMPLOYE');
                    break;
                case TypeGestionnaireEnum::INVITE:
                    $data->getUser()->setType('INVITE');
                    break;
                default:
                    $data->getUser()->setType('AUTRE');
                    break;
            }
        }else{
            return new Response(json_encode(['message'=>'Le type selectionné n\'existe pas  !!!']), 403,
                ['content-type' => 'application/json']);
        }

        $entite = $data->getEntites();

        foreach($entite as $son) {
            $fathers[] = $son->getFather();
        }

        foreach ($entite as $father) {
            $sons[] = $this->entiteRepository->findBy(['father' => $father]);
        }

        if ($sons !== []) {
            $son = array_merge(...$sons);

            foreach($son as $key=>$value) {
                $son[$key]->addGestionnaire($data);
            }
        }

        $data->getUser()->setType('GESTIONNAIRE');

        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->remove($data->getUser());
        $this->entityManager->flush();
    }
}