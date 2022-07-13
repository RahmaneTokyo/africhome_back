<?php

namespace App\DataPersister;

use App\Entity\BatimentCritere;
use App\Entity\Gestionnaire;
use App\Entity\Incident;
use App\Entity\Paiement;
use App\Repository\TaxeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;


final class PaiementPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $taxeRepo;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, TaxeRepository $taxeRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->taxeRepo = $taxeRepository;
        $this->security = $security;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Paiement;
    }

    public function persist($data, array $context = [])
    {
        $user = $this->security->getUser();

        $montant = $data->getTaxe()->getMontant();

        $data->setDateCreation(new \DateTime('now'))
             ->setUser($user)
             ->setMontant($montant)
             ->setState('en cours');

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