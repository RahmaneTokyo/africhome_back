<?php

namespace App\DataPersister;


use App\Entity\Admin;
use App\Enums\TypeAdminEnum;
use Doctrine\ORM\EntityManagerInterface;
<<<<<<< HEAD
use phpDocumentor\Reflection\Element;
=======
>>>>>>> 56189700547e60d919a925278748b27a6e4236d7
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class AdminPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $encoder;

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
            $data->getUser()->setType('ADMIN');
            if (!$newData->entites) {
                return new Response(json_encode(['message'=>'Selectionnez une entite  !!!']), 403,
                    ['content-type' => 'application/json']);
            }
        }

        if((($context['item_operation_name'] ?? null) === 'put')){
           
            $user = $data->getUser();
            $user_update = $newData->user_update;

            $user->setPrenom($user_update->prenom)
                 ->setNom($user_update->nom)
                 ->setEmail($user_update->email)
                 ->setDateDeNaissance(new \DateTime($user_update->dateDeNaissance));

            $data->setUser($user);
        }

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