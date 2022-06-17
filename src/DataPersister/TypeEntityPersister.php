<?php

namespace App\DataPersister;


use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\TypeAdmin;
use App\Entity\TypeEntite;
use Doctrine\ORM\EntityManagerInterface;

class TypeEntityPersister implements ContextAwareDataPersisterInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    public function __construct(EntityManagerInterface $manager) {
        $this->manager = $manager;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof TypeEntite;
        // TODO: Implement supports() method.
    }

    public function persist($data, array $context = [])
    {
        if ((($context['collection_operation_name'] ?? null) === 'post')) {
            $titre = strtoupper($data->getTitre());
            $data->setTitre($titre);
        }

        $this->manager->persist($data);
        $this->manager->flush();

        // TODO: Implement persist() method.
    }

    public function remove($data, array $context = [])
    {


        return $data;
        // TODO: Implement remove() method.
    }
}