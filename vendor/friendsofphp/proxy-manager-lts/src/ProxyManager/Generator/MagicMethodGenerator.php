<?php

declare(strict_types=1);

namespace ProxyManager\Generator;

use Laminas\Code\Generator\ParameterGenerator;
<<<<<<< HEAD
use ReflectionClass;

=======
use LogicException;
use ReflectionClass;
use ReflectionIntersectionType;
use ReflectionNamedType;
use ReflectionUnionType;

use function get_class;
use function implode;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use function strtolower;

/**
 * Method generator for magic methods
 */
class MagicMethodGenerator extends MethodGenerator
{
    /**
     * @param ParameterGenerator[]|array[]|string[] $parameters
     */
    public function __construct(ReflectionClass $originalClass, string $name, array $parameters = [])
    {
        parent::__construct(
            $name,
            $parameters,
            self::FLAG_PUBLIC
        );

        $this->setReturnsReference(strtolower($name) === '__get');

        if (! $originalClass->hasMethod($name)) {
            return;
        }

<<<<<<< HEAD
        $this->setReturnsReference($originalClass->getMethod($name)->returnsReference());
=======
        $originalMethod     = $originalClass->getMethod($name);
        $originalReturnType = $originalMethod->getReturnType();

        $this->setReturnsReference($originalMethod->returnsReference());

        if ($originalReturnType instanceof ReflectionNamedType) {
            $this->setReturnType(($originalReturnType->allowsNull() && $originalReturnType->getName() !== 'mixed' ? '?' : '') . $originalReturnType->getName());
        } elseif ($originalReturnType instanceof ReflectionUnionType || $originalReturnType instanceof ReflectionIntersectionType) {
            $returnType = [];
            foreach ($originalReturnType->getTypes() as $type) {
                $returnType[] = $type->getName();
            }

            $this->setReturnType(implode($originalReturnType instanceof ReflectionIntersectionType ? '&' : '|', $returnType));
        } elseif ($originalReturnType) {
            throw new LogicException('Unexpected ' . get_class($type));
        }
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
