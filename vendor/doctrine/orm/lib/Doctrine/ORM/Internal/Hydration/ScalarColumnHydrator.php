<?php

declare(strict_types=1);

namespace Doctrine\ORM\Internal\Hydration;

use Doctrine\DBAL\Driver\Exception;
use Doctrine\ORM\Exception\MultipleSelectorsFoundException;

<<<<<<< HEAD
=======
use function array_column;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use function count;

/**
 * Hydrator that produces one-dimensional array.
 */
final class ScalarColumnHydrator extends AbstractHydrator
{
    /**
     * {@inheritdoc}
     *
     * @throws MultipleSelectorsFoundException
     * @throws Exception
     */
    protected function hydrateAllData(): array
    {
        if (count($this->resultSetMapping()->fieldMappings) > 1) {
            throw MultipleSelectorsFoundException::create($this->resultSetMapping()->fieldMappings);
        }

<<<<<<< HEAD
        $result = [];

        while ($row = $this->statement()->fetchOne()) {
            $result[] = $row;
        }

        return $result;
=======
        $result = $this->statement()->fetchAllNumeric();

        return array_column($result, 0);
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
