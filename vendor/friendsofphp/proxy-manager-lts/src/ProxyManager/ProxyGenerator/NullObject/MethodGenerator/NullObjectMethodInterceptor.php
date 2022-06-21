<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\NullObject\MethodGenerator;

use Laminas\Code\Reflection\MethodReflection;
use ProxyManager\Generator\MethodGenerator;
use ProxyManager\Generator\Util\IdentifierSuffixer;
<<<<<<< HEAD
=======
use ReflectionNamedType;

use function in_array;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

/**
 * Method decorator for null objects
 */
class NullObjectMethodInterceptor extends MethodGenerator
{
    /**
     * @return static
     */
    public static function generateMethod(MethodReflection $originalMethod): self
    {
        $method = static::fromReflectionWithoutBodyAndDocBlock($originalMethod);

<<<<<<< HEAD
        if ($originalMethod->returnsReference()) {
            $reference = IdentifierSuffixer::getIdentifier('ref');

            $method->setBody("\$reference = null;\nreturn \$" . $reference . ';');
=======
        $returnType = $originalMethod->getReturnType();
        $nullCast   = $returnType instanceof ReflectionNamedType && ! $returnType->allowsNull() && in_array($returnType->getName(), ['array', 'float', 'int', 'string'], true)  ? '(' . $returnType->getName() . ') ' : '';

        if ($originalMethod->returnsReference() || $nullCast !== '') {
            $reference = IdentifierSuffixer::getIdentifier('ref');

            $method->setBody('$' . $reference . ' = ' . $nullCast . "null;\nreturn \$" . $reference . ';');
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        }

        return $method;
    }
}
