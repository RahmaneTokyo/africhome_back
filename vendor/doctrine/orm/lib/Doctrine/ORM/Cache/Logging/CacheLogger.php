<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Logging;

use Doctrine\ORM\Cache\CollectionCacheKey;
use Doctrine\ORM\Cache\EntityCacheKey;
use Doctrine\ORM\Cache\QueryCacheKey;

/**
 * Interface for logging.
 */
interface CacheLogger
{
    /**
     * Log an entity put into second level cache.
     *
     * @param string         $regionName The name of the cache region.
     * @param EntityCacheKey $key        The cache key of the entity.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function entityCachePut($regionName, EntityCacheKey $key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string         $regionName The name of the cache region.
     * @param EntityCacheKey $key        The cache key of the entity.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function entityCacheHit($regionName, EntityCacheKey $key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string         $regionName The name of the cache region.
     * @param EntityCacheKey $key        The cache key of the entity.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function entityCacheMiss($regionName, EntityCacheKey $key);

    /**
     * Log an entity put into second level cache.
     *
     * @param string             $regionName The name of the cache region.
     * @param CollectionCacheKey $key        The cache key of the collection.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function collectionCachePut($regionName, CollectionCacheKey $key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string             $regionName The name of the cache region.
     * @param CollectionCacheKey $key        The cache key of the collection.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function collectionCacheHit($regionName, CollectionCacheKey $key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string             $regionName The name of the cache region.
     * @param CollectionCacheKey $key        The cache key of the collection.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function collectionCacheMiss($regionName, CollectionCacheKey $key);

    /**
     * Log a query put into the query cache.
     *
     * @param string        $regionName The name of the cache region.
     * @param QueryCacheKey $key        The cache key of the query.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function queryCachePut($regionName, QueryCacheKey $key);

    /**
     * Log a query get from the query cache resulted in a hit.
     *
     * @param string        $regionName The name of the cache region.
     * @param QueryCacheKey $key        The cache key of the query.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function queryCacheHit($regionName, QueryCacheKey $key);

    /**
     * Log a query get from the query cache resulted in a miss.
     *
     * @param string        $regionName The name of the cache region.
     * @param QueryCacheKey $key        The cache key of the query.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function queryCacheMiss($regionName, QueryCacheKey $key);
}
