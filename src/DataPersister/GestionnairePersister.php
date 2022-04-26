<?php

namespace App\DataPersister;


use App\Entity\Admin;
use App\Entity\Gestionnaire;
use App\Enums\TypeGestionnaireEnum;
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

    const GESTIONNAIRE_TYPE = [TypeGestionnaireEnum::GESTIONNAIRE_DEPARTEMENT,TypeGestionnaireEnum::GESTIONNAIRE_ORGANISME, TypeGestionnaireEnum::GESTIONNAIRE_ENTREPRISE, TypeGestionnaireEnum::GESTIONNAIRE_AUTRE];

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack, UserPasswordEncoderInterface $encoder)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->encoder = $encoder;
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

        $newData->type= $data->getEntite()->getType();
        
        if (in_array($newData->type, self::GESTIONNAIRE_TYPE)) {

            $data->setTypeGestionnaire(self::GESTIONNAIRE_TYPE[$newData->type-1]);
            switch ($data->getTypeGestionnaire()) {
                case TypeGestionnaireEnum::GESTIONNAIRE_DEPARTEMENT:
                    $data->getUser()->setType('GESTIONNAIRE_DEPARTEMENT');
                    break;
                case TypeGestionnaireEnum::GESTIONNAIRE_ORGANISME:
                    $data->getUser()->setType('GESTIONNAIRE_ORGANISME');
                    break;
                case TypeGestionnaireEnum::GESTIONNAIRE_ENTREPRISE:
                    $data->getUser()->setType('GESTIONNAIRE_ENTREPRISE');
                    break;
                default:
                    $data->getUser()->setType('GESTIONNAIRE_AUTRE');
                    break;
            }
        }else{
            return new Response(json_encode(['message'=>'Le type selectionné n\'existe pas  !!!']), 403,
                ['content-type' => 'application/json']);
        }
        
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