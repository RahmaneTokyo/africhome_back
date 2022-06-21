<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\RemoteObject\MethodGenerator;

use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Reflection\MethodReflection;
use ProxyManager\Generator\MethodGenerator;
use ProxyManager\Generator\Util\ProxiedMethodReturnExpression;
<<<<<<< HEAD
use ReflectionClass;

use function count;
=======
use ProxyManager\Generator\ValueGenerator;
use ReflectionClass;

use function sprintf;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use function strtr;
use function var_export;

/**
 * Method decorator for remote objects
 */
class RemoteObjectMethod extends MethodGenerator
{
    private const TEMPLATE
        = <<<'PHP'
<<<<<<< HEAD
$defaultValues = #DEFAULT_VALUES#;
$declaredParameterCount = #PARAMETER_COUNT#;

$args = \func_get_args() + $defaultValues;
=======
$args = \func_get_args();

switch (\func_num_args()) {#DEFAULT_VALUES#
}
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

#PROXIED_RETURN#
PHP;

    /** @return static */
    public static function generateMethod(
        MethodReflection $originalMethod,
        PropertyGenerator $adapterProperty,
        ReflectionClass $originalClass
    ): self {
        $method        = static::fromReflectionWithoutBodyAndDocBlock($originalMethod);
        $proxiedReturn = '$return = $this->' . $adapterProperty->getName()
            . '->call(' . var_export($originalClass->getName(), true)
            . ', ' . var_export($originalMethod->getName(), true) . ', $args);' . "\n\n"
            . ProxiedMethodReturnExpression::generate('$return', $originalMethod);

<<<<<<< HEAD
        $defaultValues          = self::getDefaultValuesForMethod($originalMethod);
        $declaredParameterCount = count($originalMethod->getParameters());
=======
        $defaultValues = self::getDefaultValuesForMethod($originalMethod);
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

        $method->setBody(
            strtr(
                self::TEMPLATE,
                [
                    '#PROXIED_RETURN#' => $proxiedReturn,
<<<<<<< HEAD
                    '#DEFAULT_VALUES#' => var_export($defaultValues, true),
                    '#PARAMETER_COUNT#' => var_export($declaredParameterCount, true),
=======
                    '#DEFAULT_VALUES#' => $defaultValues,
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
                ]
            )
        );

        return $method;
    }

<<<<<<< HEAD
    /** @psalm-return list<int|float|bool|array|string|null> */
    private static function getDefaultValuesForMethod(MethodReflection $originalMethod): array
    {
        $defaultValues = [];
        foreach ($originalMethod->getParameters() as $parameter) {
            if ($parameter->isOptional() && $parameter->isDefaultValueAvailable()) {
                /** @psalm-var int|float|bool|array|string|null */
                $defaultValues[] = $parameter->getDefaultValue();
=======
    private static function getDefaultValuesForMethod(MethodReflection $originalMethod): string
    {
        $defaultValues = '';
        foreach ($originalMethod->getParameters() as $i => $parameter) {
            if ($parameter->isOptional() && $parameter->isDefaultValueAvailable()) {
                $default        = new ValueGenerator($parameter->getDefaultValue(), $parameter);
                $defaultValues .= sprintf("\n    case %d: \$args[] = %s;", $i, $default->generate());
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
                continue;
            }

            if ($parameter->isVariadic()) {
                continue;
            }

<<<<<<< HEAD
            $defaultValues[] = null;
=======
            $defaultValues .= sprintf("\n    case %d: \$args[] = null;", $i);
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        }

        return $defaultValues;
    }
}
