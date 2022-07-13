<?php

namespace App\DataPersister;

use App\Entity\BatimentCritere;
use App\Entity\Gestionnaire;
use App\Entity\Incident;
use App\Entity\Taxe;
use App\Repository\BatimentRepository;
use App\Repository\CritereRepository;
use App\Repository\EntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



final class TaxePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $critereRepo;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, CritereRepository $critereRepository)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->critereRepo = $critereRepository;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Taxe;
    }

    public function persist($data, array $context = [])
    {
        $newData = json_decode($this->requestStack->getContent());

        foreach ($newData->criteres as $value) {
            $critere[] = $this->critereRepo->findOneBy(['id' => $value])->getBatimentCriteres();
        }

        foreach ($critere as $key => $value) {
            foreach ($value as $montant) {
                $valeur[] = $montant->getMontant()->getValeur();
            }
        }

        $sum = array_sum($valeur);

        $data->setDateCreation(new \DateTime('now'))
             ->setMontant($sum);

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