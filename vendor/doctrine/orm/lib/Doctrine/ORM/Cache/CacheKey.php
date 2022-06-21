<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Defines entity / collection / query key to be stored in the cache region.
 * Allows multiple roles to be stored in the same cache region.
 */
abstract class CacheKey
{
    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var string Unique identifier
=======
     * Unique identifier
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var string
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $hash;
}
