<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Persister\Collection;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Cache\CollectionCacheKey;
use Doctrine\ORM\Cache\Persister\CachedPersister;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\PersistentCollection;
use Doctrine\ORM\Persisters\Collection\CollectionPersister;

/**
 * Interface for second level cache collection persisters.
 */
interface CachedCollectionPersister extends CachedPersister, CollectionPersister
{
    /**
     * @return ClassMetadata
     */
    public function getSourceEntityMetadata();

    /**
     * @return ClassMetadata
     */
    public function getTargetEntityMetadata();

    /**
     * Loads a collection from cache
     *
<<<<<<< HEAD
     * @return PersistentCollection|null
=======
     * @return mixed[]|null
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function loadCollectionCache(PersistentCollection $collection, CollectionCacheKey $key);

    /**
     * Stores a collection into cache
     *
<<<<<<< HEAD
     * @param array|mixed[]|Collection $elements
=======
     * @param mixed[]|Collection $elements
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     *
     * @return void
     */
    public function storeCollectionCache(CollectionCacheKey $key, $elements);
}
