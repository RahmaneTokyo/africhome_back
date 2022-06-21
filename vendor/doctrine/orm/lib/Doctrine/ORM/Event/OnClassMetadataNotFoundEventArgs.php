<?php

declare(strict_types=1);

namespace Doctrine\ORM\Event;

<<<<<<< HEAD
=======
use Doctrine\ORM\EntityManagerInterface;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use Doctrine\Persistence\Event\ManagerEventArgs;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;

/**
 * Class that holds event arguments for a `onClassMetadataNotFound` event.
 *
 * This object is mutable by design, allowing callbacks having access to it to set the
 * found metadata in it, and therefore "cancelling" a `onClassMetadataNotFound` event
<<<<<<< HEAD
=======
 *
 * @extends ManagerEventArgs<EntityManagerInterface>
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
class OnClassMetadataNotFoundEventArgs extends ManagerEventArgs
{
    /** @var string */
    private $className;

    /** @var ClassMetadata|null */
    private $foundMetadata;

    /**
<<<<<<< HEAD
     * @param string $className
=======
     * @param string                 $className
     * @param EntityManagerInterface $objectManager
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($className, ObjectManager $objectManager)
    {
        $this->className = (string) $className;

        parent::__construct($objectManager);
    }

    /**
     * @return void
     */
    public function setFoundMetadata(?ClassMetadata $classMetadata = null)
    {
        $this->foundMetadata = $classMetadata;
    }

    /**
     * @return ClassMetadata|null
     */
    public function getFoundMetadata()
    {
        return $this->foundMetadata;
    }

    /**
     * Retrieve class name for which a failed metadata fetch attempt was executed
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }
}
