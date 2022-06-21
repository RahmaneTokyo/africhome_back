<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

use function microtime;

/**
 * Timestamp cache entry
 */
class TimestampCacheEntry implements CacheEntry
{
    /**
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var float
     */
    public $time;

    /**
<<<<<<< HEAD
     * @param float $time
=======
     * @param float|null $time
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($time = null)
    {
        $this->time = $time ? (float) $time : microtime(true);
    }

    /**
     * Creates a new TimestampCacheEntry
     *
     * This method allow Doctrine\Common\Cache\PhpFileCache compatibility
     *
     * @param array<string,float> $values array containing property values
     *
     * @return TimestampCacheEntry
     */
    public static function __set_state(array $values)
    {
        return new self($values['time']);
    }
}
