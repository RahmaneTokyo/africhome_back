<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use BackedEnum;
use ReflectionProperty;
use ReturnTypeWillChange;
use ValueError;

<<<<<<< HEAD
use function assert;
use function get_class;
use function is_int;
use function is_string;
=======
use function array_map;
use function get_class;
use function is_array;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

class ReflectionEnumProperty extends ReflectionProperty
{
    /** @var ReflectionProperty */
    private $originalReflectionProperty;

    /** @var class-string<BackedEnum> */
    private $enumType;

    /**
     * @param class-string<BackedEnum> $enumType
     */
    public function __construct(ReflectionProperty $originalReflectionProperty, string $enumType)
    {
        $this->originalReflectionProperty = $originalReflectionProperty;
        $this->enumType                   = $enumType;

        parent::__construct(
            $originalReflectionProperty->getDeclaringClass()->getName(),
            $originalReflectionProperty->getName()
        );
    }

    /**
     * {@inheritDoc}
     *
     * @param object|null $object
     *
<<<<<<< HEAD
     * @return int|string|null
=======
     * @return int|string|int[]|string[]|null
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    #[ReturnTypeWillChange]
    public function getValue($object = null)
    {
        if ($object === null) {
            return null;
        }

        $enum = $this->originalReflectionProperty->getValue($object);

        if ($enum === null) {
            return null;
        }

<<<<<<< HEAD
=======
        if (is_array($enum)) {
            return array_map(static function (BackedEnum $item): mixed {
                return $item->value;
            }, $enum);
        }

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        return $enum->value;
    }

    /**
<<<<<<< HEAD
     * @param object $object
     * @param mixed  $value
=======
     * @param object                         $object
     * @param int|string|int[]|string[]|null $value
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function setValue($object, $value = null): void
    {
        if ($value !== null) {
<<<<<<< HEAD
            $enumType = $this->enumType;
            try {
                $value = $enumType::from($value);
            } catch (ValueError $e) {
                assert(is_string($value) || is_int($value));

                throw MappingException::invalidEnumValue(
                    get_class($object),
                    $this->originalReflectionProperty->getName(),
                    (string) $value,
                    $enumType,
                    $e
                );
=======
            if (is_array($value)) {
                $value = array_map(function ($item) use ($object): BackedEnum {
                    return $this->initializeEnumValue($object, $item);
                }, $value);
            } else {
                $value = $this->initializeEnumValue($object, $value);
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            }
        }

        $this->originalReflectionProperty->setValue($object, $value);
    }
<<<<<<< HEAD
=======

    /**
     * @param object     $object
     * @param int|string $value
     */
    private function initializeEnumValue($object, $value): BackedEnum
    {
        $enumType = $this->enumType;

        try {
            return $enumType::from($value);
        } catch (ValueError $e) {
            throw MappingException::invalidEnumValue(
                get_class($object),
                $this->originalReflectionProperty->getName(),
                (string) $value,
                $enumType,
                $e
            );
        }
    }
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
}
