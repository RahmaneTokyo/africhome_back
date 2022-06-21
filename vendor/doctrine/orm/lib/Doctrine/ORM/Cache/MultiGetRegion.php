<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Defines a region that supports multi-get reading.
 *
 * With one method call we can get multiple items.
<<<<<<< HEAD
=======
 *
 * @deprecated Implement {@see Region} instead.
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
interface MultiGetRegion
{
    /**
     * Get all items from the cache identified by $keys.
     * It returns NULL if some elements can not be found.
     *
     * @param CollectionCacheEntry $collection The collection of the items to be retrieved.
     *
     * @return CacheEntry[]|null The cached entries or NULL if one or more entries can not be found
     */
    public function getMultiple(CollectionCacheEntry $collection);
}
