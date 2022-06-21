<?php

declare(strict_types=1);

namespace Doctrine\ORM\Event;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\Event\LoadClassMetadataEventArgs as BaseLoadClassMetadataEventArgs;

/**
 * Class that holds event arguments for a loadMetadata event.
 *
<<<<<<< HEAD
 * @method __construct(ClassMetadata $classMetadata, EntityManagerInterface $objectManager)
 * @method ClassMetadata getClassMetadata()
=======
 * @extends BaseLoadClassMetadataEventArgs<ClassMetadata<object>, EntityManagerInterface>
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
class LoadClassMetadataEventArgs extends BaseLoadClassMetadataEventArgs
{
    /**
     * Retrieve associated EntityManager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager()
    {
        return $this->getObjectManager();
    }
}
