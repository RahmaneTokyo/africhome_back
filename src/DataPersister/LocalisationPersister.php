<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\Localisation;
use App\Repository\LocalisationRepository;
use App\Repository\TypeLocalisationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class LocalisationPersister implements ContextAwareDataPersisterInterface
{

    private $entityManager;
    private $localisationRepository;
    private $requestStack;
    private $typeLocalisationRepository;

    public function __construct(EntityManagerInterface $manager, RequestStack $requestStack, LocalisationRepository $localisationRepository, TypeLocalisationRepository $typeLocalisationRepository) {
        $this->entityManager = $manager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->localisationRepository = $localisationRepository;
        $this->typeLocalisationRepository = $typeLocalisationRepository;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Localisation;
    }

    public function persist($data, array $context = [])
    {
        // TODO: Implement persist() method.
        $newData = json_decode($this->requestStack->getContent());

        $father = $this->localisationRepository->findOneBy(['id' => $newData->fathers]);

        if ($father) {
            $niveau = $father->getNiveau() + 1;
            $data->setNiveau($niveau)
                 ->setFather($father);
        }else {
            $data->setNiveau(1);
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