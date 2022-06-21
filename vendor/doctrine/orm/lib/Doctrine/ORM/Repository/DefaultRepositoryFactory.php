<?php

declare(strict_types=1);

namespace Doctrine\ORM\Repository;

<<<<<<< HEAD
use Doctrine\ORM\EntityManagerInterface;
=======
use Doctrine\Deprecations\Deprecation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use Doctrine\Persistence\ObjectRepository;

use function spl_object_id;

/**
 * This factory is used to create default repository objects for entities at runtime.
 */
final class DefaultRepositoryFactory implements RepositoryFactory
{
    /**
     * The list of EntityRepository instances.
     *
     * @var ObjectRepository[]
<<<<<<< HEAD
=======
     * @psalm-var array<string, ObjectRepository>
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    private $repositoryList = [];

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface $entityManager, $entityName): ObjectRepository
    {
        $repositoryHash = $entityManager->getClassMetadata($entityName)->getName() . spl_object_id($entityManager);

        if (isset($this->repositoryList[$repositoryHash])) {
            return $this->repositoryList[$repositoryHash];
        }

        return $this->repositoryList[$repositoryHash] = $this->createRepository($entityManager, $entityName);
    }

    /**
     * Create a new repository instance for an entity class.
     *
     * @param EntityManagerInterface $entityManager The EntityManager instance.
     * @param string                 $entityName    The name of the entity.
     */
    private function createRepository(
        EntityManagerInterface $entityManager,
        string $entityName
    ): ObjectRepository {
        $metadata            = $entityManager->getClassMetadata($entityName);
        $repositoryClassName = $metadata->customRepositoryClassName
            ?: $entityManager->getConfiguration()->getDefaultRepositoryClassName();

<<<<<<< HEAD
        return new $repositoryClassName($entityManager, $metadata);
=======
        $repository = new $repositoryClassName($entityManager, $metadata);
        if (! $repository instanceof EntityRepository) {
            Deprecation::trigger(
                'doctrine/orm',
                'https://github.com/doctrine/orm/pull/9533',
                'Configuring %s as repository class is deprecated because it does not extend %s.',
                $repositoryClassName,
                EntityRepository::class
            );
        }

        return $repository;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
