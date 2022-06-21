<?php

namespace Doctrine\Persistence\Event;

use Doctrine\Common\EventArgs;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use Doctrine\Persistence\ObjectManager;

/**
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of entities.
 *
 * @template-covariant TObjectManager of ObjectManager
 */
class LifecycleEventArgs extends EventArgs
{
    /**
     * @var ObjectManager
     * @psalm-var TObjectManager
     */
    private $objectManager;

    /** @var object */
    private $object;

    /**
     * @param object $object
     * @psalm-param TObjectManager $objectManager
     */
    public function __construct($object, ObjectManager $objectManager)
    {
        $this->object        = $object;
        $this->objectManager = $objectManager;
    }

    /**
     * Retrieves the associated entity.
     *
     * @deprecated
     *
     * @return object
     */
    public function getEntity()
    {
<<<<<<< HEAD
=======
        Deprecation::trigger(
            'doctrine/persistence',
            'https://github.com/doctrine/common/pull/222',
            '%s is deprecated and will be removed in 3.0, use getObject() instead',
            __METHOD__
        );

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        return $this->object;
    }

    /**
     * Retrieves the associated object.
     *
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     * @psalm-return TObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}
