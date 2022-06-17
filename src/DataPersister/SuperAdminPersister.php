<?php

namespace App\DataPersister;


use App\Entity\SuperAdmin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class SuperAdminPersister implements ContextAwareDataPersisterInterface
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
        return $data instanceof SuperAdmin;
    }

    public function persist($data, array $context = [])
    {
        $newData=json_decode($this->requestStack->getContent());
        
        if ((($context['collection_operation_name'] ?? null) === 'post')){
            $data->getUser()->setType('SUPERADMIN');
            $data->getUser()->setCreatedAt(new \DateTime());
            $data->getUser()->setPassword($this->encoder->encodePassword($data->getUser(), $data->getUser()->getPassword()));
        }
        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->flush();
    }
}