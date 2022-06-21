<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Persister;

use Doctrine\ORM\Cache\Region;

/**
 * Interface for persister that support second level cache.
 */
interface CachedPersister
{
    /**
     * Perform whatever processing is encapsulated here after completion of the transaction.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function afterTransactionComplete();

    /**
     * Perform whatever processing is encapsulated here after completion of the rolled-back.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function afterTransactionRolledBack();

    /**
     * Gets the The region access.
     *
     * @return Region
     */
    public function getCacheRegion();
}
