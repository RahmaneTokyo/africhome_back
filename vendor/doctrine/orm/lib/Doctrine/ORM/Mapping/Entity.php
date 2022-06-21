<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Doctrine\ORM\EntityRepository;

/**
 * @Annotation
 * @NamedArgumentConstructor()
 * @Target("CLASS")
<<<<<<< HEAD
=======
 * @template T of object
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
#[Attribute(Attribute::TARGET_CLASS)]
final class Entity implements Annotation
{
    /**
     * @var string|null
<<<<<<< HEAD
     * @psalm-var class-string<EntityRepository>|null
=======
     * @psalm-var class-string<EntityRepository<T>>|null
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public $repositoryClass;

    /** @var bool */
    public $readOnly = false;

    /**
<<<<<<< HEAD
     * @psalm-param class-string<EntityRepository>|null $repositoryClass
=======
     * @psalm-param class-string<EntityRepository<T>>|null $repositoryClass
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct(?string $repositoryClass = null, bool $readOnly = false)
    {
        $this->repositoryClass = $repositoryClass;
        $this->readOnly        = $readOnly;
    }
}
