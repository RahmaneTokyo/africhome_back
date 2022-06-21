<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

use function implode;
use function ksort;
use function str_replace;
use function strtolower;

/**
 * Defines entity classes roles to be stored in the cache region.
 */
class EntityCacheKey extends CacheKey
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
    public $entityClass;

    /**
     * @param string               $entityClass The entity class name. In a inheritance hierarchy it should always be the root entity class.
     * @param array<string, mixed> $identifier  The entity identifier
<<<<<<< HEAD
=======
     * @psalm-param class-string $entityClass
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($entityClass, array $identifier)
    {
        ksort($identifier);

        $this->identifier  = $identifier;
        $this->entityClass = $entityClass;
        $this->hash        = str_replace('\\', '.', strtolower($entityClass) . '_' . implode(' ', $identifier));
    }
}
