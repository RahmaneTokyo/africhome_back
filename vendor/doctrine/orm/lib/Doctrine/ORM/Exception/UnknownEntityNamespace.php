<?php

declare(strict_types=1);

namespace Doctrine\ORM\Exception;

use function sprintf;

<<<<<<< HEAD
=======
/**
 * @deprecated No replacement planned.
 */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
final class UnknownEntityNamespace extends ORMException implements ConfigurationException
{
    public static function fromNamespaceAlias(string $entityNamespaceAlias): self
    {
        return new self(sprintf(
            'Unknown Entity namespace alias "%s"',
            $entityNamespaceAlias
        ));
    }
}
