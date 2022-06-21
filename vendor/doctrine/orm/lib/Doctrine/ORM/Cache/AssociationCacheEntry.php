<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Association cache entry
 */
class AssociationCacheEntry implements CacheEntry
{
    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var array<string, mixed> The entity identifier
=======
     * The entity identifier
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var array<string, mixed>
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $identifier;

    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var string The entity class name
=======
     * The entity class name
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var string
     * @psalm-var class-string
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $class;

    /**
     * @param string               $class      The entity class.
     * @param array<string, mixed> $identifier The entity identifier.
<<<<<<< HEAD
=======
     * @psalm-param class-string $class
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($class, array $identifier)
    {
        $this->class      = $class;
        $this->identifier = $identifier;
    }

    /**
     * Creates a new AssociationCacheEntry
     *
     * This method allow Doctrine\Common\Cache\PhpFileCache compatibility
     *
     * @param array<string, mixed> $values array containing property values
     *
     * @return AssociationCacheEntry
     */
    public static function __set_state(array $values)
    {
        return new self($values['class'], $values['identifier']);
    }
}
