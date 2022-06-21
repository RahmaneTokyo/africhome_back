<?php

declare(strict_types=1);

namespace Doctrine\ORM\Internal\Hydration;

use Doctrine\ORM\Exception\ORMException;

use function implode;
use function sprintf;

class HydrationException extends ORMException
{
    /**
     * @return HydrationException
     */
    public static function nonUniqueResult()
    {
        return new self('The result returned by the query was not unique.');
    }

    /**
     * @param string $alias
     * @param string $parentAlias
     *
     * @return HydrationException
     */
    public static function parentObjectOfRelationNotFound($alias, $parentAlias)
    {
        return new self(sprintf(
            "The parent object of entity result with alias '%s' was not found."
            . " The parent alias is '%s'.",
            $alias,
            $parentAlias
        ));
    }

    /**
     * @param string $dqlAlias
     *
     * @return HydrationException
     */
    public static function emptyDiscriminatorValue($dqlAlias)
    {
        return new self("The DQL alias '" . $dqlAlias . "' contains an entity " .
            'of an inheritance hierarchy with an empty discriminator value. This means ' .
            'that the database contains inconsistent data with an empty ' .
            'discriminator value in a table row.');
    }

    /**
     * @param string $entityName
     * @param string $discrColumnName
     * @param string $dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorColumn($entityName, $discrColumnName, $dqlAlias)
    {
        return new self(sprintf(
            'The discriminator column "%s" is missing for "%s" using the DQL alias "%s".',
            $discrColumnName,
            $entityName,
            $dqlAlias
        ));
    }

    /**
     * @param string $entityName
     * @param string $discrColumnName
     * @param string $dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorMetaMappingColumn($entityName, $discrColumnName, $dqlAlias)
    {
        return new self(sprintf(
            'The meta mapping for the discriminator column "%s" is missing for "%s" using the DQL alias "%s".',
            $discrColumnName,
            $entityName,
            $dqlAlias
        ));
    }

    /**
     * @param string   $discrValue
<<<<<<< HEAD
     * @param string[] $discrMap
     * @psalm-param array<string, string> $discrMap
     *
     * @return HydrationException
     */
    public static function invalidDiscriminatorValue($discrValue, $discrMap)
=======
     * @param string[] $discrValues
     * @psalm-param list<string> $discrValues
     *
     * @return HydrationException
     */
    public static function invalidDiscriminatorValue($discrValue, $discrValues)
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    {
        return new self(sprintf(
            'The discriminator value "%s" is invalid. It must be one of "%s".',
            $discrValue,
<<<<<<< HEAD
            implode('", "', $discrMap)
=======
            implode('", "', $discrValues)
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        ));
    }
}
