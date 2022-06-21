<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\Util;

use ReflectionClass;
use ReflectionProperty;

use function array_map;
use function assert;
use function implode;
use function reset;
use function sprintf;
use function var_export;

/**
 * Generates code necessary to unset all the given properties from a particular given instance string name
 */
final class UnsetPropertiesGenerator
{
    private const CLOSURE_TEMPLATE = <<<'PHP'
\Closure::bind(function (\%s $instance) {
    %s
}, $%s, %s)->__invoke($%s);
PHP;

    public static function generateSnippet(Properties $properties, string $instanceName): string
    {
<<<<<<< HEAD
        return self::generateUnsetAccessiblePropertiesCode($properties, $instanceName)
            . self::generateUnsetPrivatePropertiesCode($properties, $instanceName);
    }

    private static function generateUnsetAccessiblePropertiesCode(Properties $properties, string $instanceName): string
    {
        $accessibleProperties = $properties->getAccessibleProperties();

        if (! $accessibleProperties) {
            return '';
        }

        return self::generateUnsetStatement($accessibleProperties, $instanceName) . "\n\n";
    }

    private static function generateUnsetPrivatePropertiesCode(Properties $properties, string $instanceName): string
    {
        $groups = $properties->getGroupedPrivateProperties();

        if (! $groups) {
=======
        $scopedPropertyGroups = [];
        $nonScopedProperties  = [];

        foreach ($properties->getInstanceProperties() as $propertyInternalName => $property) {
            if ($property->isPrivate() || (\PHP_VERSION_ID >= 80100 && $property->isReadOnly())) {
                $scopedPropertyGroups[$property->getDeclaringClass()->getName()][$property->getName()] = $property;
            } else {
                $nonScopedProperties[$propertyInternalName] = $property;
            }
        }

        return self::generateUnsetNonScopedPropertiesCode($nonScopedProperties, $instanceName)
            . self::generateUnsetScopedPropertiesCode($scopedPropertyGroups, $instanceName);
    }

    /** @param array<string, ReflectionProperty> $nonScopedProperties */
    private static function generateUnsetNonScopedPropertiesCode(array $nonScopedProperties, string $instanceName): string
    {
        if (! $nonScopedProperties) {
            return '';
        }

        return self::generateUnsetStatement($nonScopedProperties, $instanceName) . "\n\n";
    }

    /** @param array<class-string, array<string, ReflectionProperty>> $scopedPropertyGroups */
    private static function generateUnsetScopedPropertiesCode(array $scopedPropertyGroups, string $instanceName): string
    {
        if (! $scopedPropertyGroups) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            return '';
        }

        $unsetClosureCalls = [];

<<<<<<< HEAD
        foreach ($groups as $privateProperties) {
            $firstProperty = reset($privateProperties);
            assert($firstProperty instanceof ReflectionProperty);

            $unsetClosureCalls[] = self::generateUnsetClassPrivatePropertiesBlock(
                $firstProperty->getDeclaringClass(),
                $privateProperties,
=======
        foreach ($scopedPropertyGroups as $scopedProperties) {
            $firstProperty = reset($scopedProperties);
            assert($firstProperty instanceof ReflectionProperty);

            $unsetClosureCalls[] = self::generateUnsetClassScopedPropertiesBlock(
                $firstProperty->getDeclaringClass(),
                $scopedProperties,
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
                $instanceName
            );
        }

        return implode("\n\n", $unsetClosureCalls) . "\n\n";
    }

    /** @param array<string, ReflectionProperty> $properties */
<<<<<<< HEAD
    private static function generateUnsetClassPrivatePropertiesBlock(
=======
    private static function generateUnsetClassScopedPropertiesBlock(
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        ReflectionClass $declaringClass,
        array $properties,
        string $instanceName
    ): string {
        $declaringClassName = $declaringClass->getName();

        return sprintf(
            self::CLOSURE_TEMPLATE,
            $declaringClassName,
            self::generateUnsetStatement($properties, 'instance'),
            $instanceName,
            var_export($declaringClassName, true),
            $instanceName
        );
    }

    /** @param array<string, ReflectionProperty> $properties */
    private static function generateUnsetStatement(array $properties, string $instanceName): string
    {
        return 'unset('
            . implode(
                ', ',
                array_map(
                    static function (ReflectionProperty $property) use ($instanceName): string {
                        return '$' . $instanceName . '->' . $property->getName();
                    },
                    $properties
                )
            )
            . ');';
    }
}
