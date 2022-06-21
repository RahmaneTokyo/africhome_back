<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Logging;

use Doctrine\ORM\Cache\CollectionCacheKey;
use Doctrine\ORM\Cache\EntityCacheKey;
use Doctrine\ORM\Cache\QueryCacheKey;

use function array_sum;

/**
 * Provide basic second level cache statistics.
 */
class StatisticsCacheLogger implements CacheLogger
{
<<<<<<< HEAD
    /** @var int[] */
    private $cacheMissCountMap = [];

    /** @var int[] */
    private $cacheHitCountMap = [];

    /** @var int[] */
=======
    /** @var array<string, int> */
    private $cacheMissCountMap = [];

    /** @var array<string, int> */
    private $cacheHitCountMap = [];

    /** @var array<string, int> */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    private $cachePutCountMap = [];

    /**
     * {@inheritdoc}
     */
    public function collectionCacheMiss($regionName, CollectionCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheMissCountMap[$regionName] = isset($this->cacheMissCountMap[$regionName])
            ? $this->cacheMissCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheMissCountMap[$regionName]
            = ($this->cacheMissCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCacheHit($regionName, CollectionCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheHitCountMap[$regionName] = isset($this->cacheHitCountMap[$regionName])
            ? $this->cacheHitCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheHitCountMap[$regionName]
            = ($this->cacheHitCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCachePut($regionName, CollectionCacheKey $key)
    {
<<<<<<< HEAD
        $this->cachePutCountMap[$regionName] = isset($this->cachePutCountMap[$regionName])
            ? $this->cachePutCountMap[$regionName] + 1
            : 1;
=======
        $this->cachePutCountMap[$regionName]
            = ($this->cachePutCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheMiss($regionName, EntityCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheMissCountMap[$regionName] = isset($this->cacheMissCountMap[$regionName])
            ? $this->cacheMissCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheMissCountMap[$regionName]
            = ($this->cacheMissCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheHit($regionName, EntityCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheHitCountMap[$regionName] = isset($this->cacheHitCountMap[$regionName])
            ? $this->cacheHitCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheHitCountMap[$regionName]
            = ($this->cacheHitCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function entityCachePut($regionName, EntityCacheKey $key)
    {
<<<<<<< HEAD
        $this->cachePutCountMap[$regionName] = isset($this->cachePutCountMap[$regionName])
            ? $this->cachePutCountMap[$regionName] + 1
            : 1;
=======
        $this->cachePutCountMap[$regionName]
            = ($this->cachePutCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheHit($regionName, QueryCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheHitCountMap[$regionName] = isset($this->cacheHitCountMap[$regionName])
            ? $this->cacheHitCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheHitCountMap[$regionName]
            = ($this->cacheHitCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheMiss($regionName, QueryCacheKey $key)
    {
<<<<<<< HEAD
        $this->cacheMissCountMap[$regionName] = isset($this->cacheMissCountMap[$regionName])
            ? $this->cacheMissCountMap[$regionName] + 1
            : 1;
=======
        $this->cacheMissCountMap[$regionName]
            = ($this->cacheMissCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function queryCachePut($regionName, QueryCacheKey $key)
    {
<<<<<<< HEAD
        $this->cachePutCountMap[$regionName] = isset($this->cachePutCountMap[$regionName])
            ? $this->cachePutCountMap[$regionName] + 1
            : 1;
=======
        $this->cachePutCountMap[$regionName]
            = ($this->cachePutCountMap[$regionName] ?? 0) + 1;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * Get the number of entries successfully retrieved from cache.
     *
     * @param string $regionName The name of the cache region.
     *
     * @return int
     */
    public function getRegionHitCount($regionName)
    {
        return $this->cacheHitCountMap[$regionName] ?? 0;
    }

    /**
     * Get the number of cached entries *not* found in cache.
     *
     * @param string $regionName The name of the cache region.
     *
     * @return int
     */
    public function getRegionMissCount($regionName)
    {
        return $this->cacheMissCountMap[$regionName] ?? 0;
    }

    /**
     * Get the number of cacheable entries put in cache.
     *
     * @param string $regionName The name of the cache region.
     *
     * @return int
     */
    public function getRegionPutCount($regionName)
    {
        return $this->cachePutCountMap[$regionName] ?? 0;
    }

    /**
     * @return array<string, int>
     */
    public function getRegionsMiss()
    {
        return $this->cacheMissCountMap;
    }

    /**
     * @return array<string, int>
     */
    public function getRegionsHit()
    {
        return $this->cacheHitCountMap;
    }

    /**
     * @return array<string, int>
     */
    public function getRegionsPut()
    {
        return $this->cachePutCountMap;
    }

    /**
     * Clear region statistics
     *
     * @param string $regionName The name of the cache region.
     *
     * @return void
     */
    public function clearRegionStats($regionName)
    {
        $this->cachePutCountMap[$regionName]  = 0;
        $this->cacheHitCountMap[$regionName]  = 0;
        $this->cacheMissCountMap[$regionName] = 0;
    }

    /**
     * Clear all statistics
     *
     * @return void
     */
    public function clearStats()
    {
        $this->cachePutCountMap  = [];
        $this->cacheHitCountMap  = [];
        $this->cacheMissCountMap = [];
    }

    /**
     * Get the total number of put in cache.
     *
     * @return int
     */
    public function getPutCount()
    {
        return array_sum($this->cachePutCountMap);
    }

    /**
     * Get the total number of entries successfully retrieved from cache.
     *
     * @return int
     */
    public function getHitCount()
    {
        return array_sum($this->cacheHitCountMap);
    }

    /**
     * Get the total number of cached entries *not* found in cache.
     *
     * @return int
     */
    public function getMissCount()
    {
        return array_sum($this->cacheMissCountMap);
    }
}
