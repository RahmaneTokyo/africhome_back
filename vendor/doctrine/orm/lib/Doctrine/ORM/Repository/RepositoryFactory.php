<?php

declare(strict_types=1);

namespace Doctrine\ORM\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Interface for entity repository factory.
 */
interface RepositoryFactory
{
    /**
     * Gets the repository for an entity class.
     *
     * @param EntityManagerInterface $entityManager The EntityManager instance.
<<<<<<< HEAD
     * @param string                 $entityName    The name of the entity.
     *
     * @return ObjectRepository
=======
     * @param class-string<T>        $entityName    The name of the entity.
     *
     * @return ObjectRepository<T> This type will change to {@see EntityRepository} in 3.0.
     *
     * @template T of object
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function getRepository(EntityManagerInterface $entityManager, $entityName);
}
