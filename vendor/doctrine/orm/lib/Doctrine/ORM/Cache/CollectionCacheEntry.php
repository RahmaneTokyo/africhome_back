<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Collection cache entry
 */
class CollectionCacheEntry implements CacheEntry
{
    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var CacheKey[] The list of entity identifiers hold by the collection
=======
     * The list of entity identifiers hold by the collection
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var CacheKey[]
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $identifiers;

    /**
     * @param CacheKey[] $identifiers List of entity identifiers hold by the collection
     */
    public function __construct(array $identifiers)
    {
        $this->identifiers = $identifiers;
    }

    /**
     * Creates a new CollectionCacheEntry
     *
     * This method allows for Doctrine\Common\Cache\PhpFileCache compatibility
     *
     * @param array<string, mixed> $values array containing property values
     *
     * @return CollectionCacheEntry
     */
    public static function __set_state(array $values)
    {
        return new self($values['identifiers']);
    }
}
