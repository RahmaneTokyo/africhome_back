<?php

namespace App\DataPersister;


use App\Entity\Admin;
use App\Enums\TypeAdminEnum;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class AdminPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $encoder;

    const ADMIN_TYPE = [TypeAdminEnum::ADMIN_DEPARTEMENT,TypeAdminEnum::ADMIN_ORGANISME, TypeAdminEnum::ADMIN_ENTREPRISE, TypeAdminEnum::ADMIN_AUTRE];

    public function __construct(
            EntityManagerInterface $entityManager,
            RequestStack $requestStack,
            UserPasswordEncoderInterface $encoder)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->encoder = $encoder;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Admin;
    }

    public function persist($data, array $context = [])
    {
        $newData=json_decode($this->requestStack->getContent());

        if ((($context['collection_operation_name'] ?? null) === 'post')){
            $data->getUser()->setCreatedAt(new \DateTime());
            $data->getUser()->setPassword($this->encoder->encodePassword($data->getUser(), $data->getUser()->getPassword()));
        }

        if((($context['item_operation_name'] ?? null) === 'put')){
           
            $user = $data->getUser();
            $user_update = $newData->user_update;

            $user->setPrenom($user_update->prenom)
                ->setNom($user_update->nom)
                ->setEmail($user_update->email)
                ->setDateDeNaissance(new \DateTime($user_update->dateDeNaissance));

            $user->getContact()->setTelephone($user_update->contact->telephone)
                  ->setBoitePostale($user_update->contact->boitePostale);

            $user->getContact()->getVille()->setNomVille($user_update->contact->ville->nomVille)
                  ->setNomPays($user_update->contact->ville->nomPays);

            $data->setUser($user);
        }

        $newData->type= $data->getEntite()->getType();

        if (in_array($newData->type, self::ADMIN_TYPE)) {
            $data->setTypeAdmin(self::ADMIN_TYPE[$newData->type-1]);
       
            switch ($data->getTypeAdmin()) {
                case TypeAdminEnum::ADMIN_DEPARTEMENT:
                    $data->getUser()->setType('ADMIN_DEPARTEMENT');
                    break;
                case TypeAdminEnum::ADMIN_ORGANISME:
                    $data->getUser()->setType('ADMIN_ORGANISME');
                    break;
                case TypeAdminEnum::ADMIN_ENTREPRISE:
                    $data->getUser()->setType('ADMIN_ENTREPRISE');
                    break;
                default:
                    $data->getUser()->setType('ADMIN_AUTRE');
                    break;
            }
        }else{
            return new Response(json_encode(['message'=>'Le type selectionné n\'existe pas  !!!']), 403,
                ['content-type' => 'application/json']);
        }

        // dd($newData,$data);

        $this->entityManager->persist($data);
        $this->entityManager->flush();
        return $data;
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->remove($data->getUser());
        $this->entityManager->flush();
    }
}