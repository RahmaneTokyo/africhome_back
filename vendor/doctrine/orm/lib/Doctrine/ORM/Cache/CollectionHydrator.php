<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\PersistentCollection;

/**
 * Hydrator cache entry for collections
 */
interface CollectionHydrator
{
    /**
<<<<<<< HEAD
     * @param ClassMetadata            $metadata   The entity metadata.
     * @param CollectionCacheKey       $key        The cached collection key.
=======
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     * @param array|mixed[]|Collection $collection The collection.
     *
     * @return CollectionCacheEntry
     */
    public function buildCacheEntry(ClassMetadata $metadata, CollectionCacheKey $key, $collection);

    /**
<<<<<<< HEAD
     * @param ClassMetadata        $metadata   The owning entity metadata.
     * @param CollectionCacheKey   $key        The cached collection key.
     * @param CollectionCacheEntry $entry      The cached collection entry.
     * @param PersistentCollection $collection The collection to load the cache into.
     *
=======
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     * @return mixed[]|null
     */
    public function loadCacheEntry(ClassMetadata $metadata, CollectionCacheKey $key, CollectionCacheEntry $entry, PersistentCollection $collection);
}
