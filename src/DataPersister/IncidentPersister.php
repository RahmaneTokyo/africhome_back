<?php

namespace App\DataPersister;

use App\Entity\Gestionnaire;
use App\Entity\Incident;
use App\Enums\EtatIncidentEnum;
use App\Repository\EntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class IncidentPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $entiteRepository;

    const INCIDENT_TYPE = [EtatIncidentEnum::NOUVEAU,EtatIncidentEnum::ENCOURS, EtatIncidentEnum::PLANIFIE, EtatIncidentEnum::TRAITE, EtatIncidentEnum::CLOTURE];

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack, EntiteRepository $entiteRepository)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->entiteRepository = $entiteRepository;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Incident;
    }

    public function persist($data, array $context = [])
    {
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