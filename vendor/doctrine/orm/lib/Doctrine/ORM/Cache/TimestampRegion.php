<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Defines the contract for a cache region which will specifically be used to store entity "update timestamps".
 */
interface TimestampRegion extends Region
{
    /**
<<<<<<< HEAD
     * Update an specific key into the cache region.
     *
     * @param CacheKey $key The key of the item to update the timestamp.
=======
     * Update a specific key into the cache region.
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     *
     * @throws LockException Indicates a problem accessing the region.
     */
    public function update(CacheKey $key);
}
