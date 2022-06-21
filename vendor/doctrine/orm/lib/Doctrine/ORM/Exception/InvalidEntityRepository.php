<?php

declare(strict_types=1);

namespace Doctrine\ORM\Exception;

<<<<<<< HEAD
use Doctrine\Persistence\ObjectRepository;
=======
use Doctrine\ORM\EntityRepository;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

final class InvalidEntityRepository extends ORMException implements ConfigurationException
{
    public static function fromClassName(string $className): self
    {
        return new self(
<<<<<<< HEAD
            "Invalid repository class '" . $className . "'. It must be a " . ObjectRepository::class . '.'
=======
            "Invalid repository class '" . $className . "'. It must be a " . EntityRepository::class . '.'
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        );
    }
}
