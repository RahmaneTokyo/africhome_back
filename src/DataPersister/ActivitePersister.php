<?php

namespace App\DataPersister;


use App\Entity\Activite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Security;


final class ActivitePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->security = $security;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Activite;
    }

    public function persist($data, array $context = [])
    {
//        $newData=json_decode($this->requestStack->getContent());
//        $user = $this->security->getUser();

//        if ((($context['collection_operation_name'] ?? null) === 'post')){
//        }
//        $newData->auteur = $user;

//        if((($context['item_operation_name'] ?? null) === 'put')){
//
//            $user = $data->getUser();
//            $user_update = $newData->user_update;
//
//            $user->setPrenom($user_update->prenom)
//                 ->setNom($user_update->nom)
//                 ->setEmail($user_update->email)
//                 ->setDateDeNaissance(new \DateTime($user_update->dateDeNaissance));
//
//            $data->setUser($user);
//        }
//        $data = $newData;

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