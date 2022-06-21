<?php

declare(strict_types=1);

namespace Doctrine\ORM\Id;

use Doctrine\DBAL\Connections\PrimaryReadReplicaConnection;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\Deprecations\Deprecation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\NotSupported;

use function method_exists;
<<<<<<< HEAD
=======
use function sprintf;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

/**
 * Represents an ID generator that uses the database UUID expression
 *
 * @deprecated use an application-side generator instead
 */
class UuidGenerator extends AbstractIdGenerator
{
    public function __construct()
    {
        Deprecation::trigger(
            'doctrine/orm',
            'https://github.com/doctrine/orm/issues/7312',
            '%s is deprecated with no replacement, use an application-side generator instead',
            self::class
        );

        if (! method_exists(AbstractPlatform::class, 'getGuidExpression')) {
<<<<<<< HEAD
            throw NotSupported::createForDbal3();
=======
            throw NotSupported::createForDbal3(sprintf(
                'Using the database to generate a UUID through %s',
                self::class
            ));
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        }
    }

    /**
     * {@inheritDoc}
     *
     * @throws NotSupported
     */
    public function generateId(EntityManagerInterface $em, $entity)
    {
        $connection = $em->getConnection();
        $sql        = 'SELECT ' . $connection->getDatabasePlatform()->getGuidExpression();

        if ($connection instanceof PrimaryReadReplicaConnection) {
            $connection->ensureConnectedToPrimary();
        }

        return $connection->executeQuery($sql)->fetchOne();
    }
}
