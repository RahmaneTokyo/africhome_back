<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

use function microtime;

/**
 * Query cache entry
 */
class QueryCacheEntry implements CacheEntry
{
    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var array<string, mixed> List of entity identifiers
=======
     * List of entity identifiers
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var array<string, mixed>
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $result;

    /**
<<<<<<< HEAD
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var float Time creation of this cache entry
=======
     * Time creation of this cache entry
     *
     * @readonly Public only for performance reasons, it should be considered immutable.
     * @var float
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $time;

    /**
     * @param array<string, mixed> $result
<<<<<<< HEAD
     * @param float                $time
=======
     * @param float|null           $time
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($result, $time = null)
    {
        $this->result = $result;
        $this->time   = $time ?: microtime(true);
    }

    /**
     * @param array<string, mixed> $values
     *
     * @return QueryCacheEntry
     */
    public static function __set_state(array $values)
    {
        return new self($values['result'], $values['time']);
    }
}
