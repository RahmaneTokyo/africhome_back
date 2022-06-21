<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping\Driver;

use Attribute;
use Doctrine\ORM\Mapping\Annotation;
<<<<<<< HEAD
=======
use LogicException;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use ReflectionAttribute;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

use function assert;
use function is_string;
use function is_subclass_of;
<<<<<<< HEAD
=======
use function sprintf;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

/**
 * @internal
 */
final class AttributeReader
{
<<<<<<< HEAD
    /** @var array<string,bool> */
    private array $isRepeatableAttribute = [];

    /** @return array<Annotation|RepeatableAttributeCollection> */
=======
    /** @var array<class-string<Annotation>,bool> */
    private array $isRepeatableAttribute = [];

    /**
     * @psalm-return class-string-map<T, T|RepeatableAttributeCollection<T>>
     *
     * @template T of Annotation
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public function getClassAnnotations(ReflectionClass $class): array
    {
        return $this->convertToAttributeInstances($class->getAttributes());
    }

<<<<<<< HEAD
    /** @return Annotation|RepeatableAttributeCollection|null */
    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        return $this->getClassAnnotations($class)[$annotationName]
            ?? ($this->isRepeatable($annotationName) ? new RepeatableAttributeCollection() : null);
    }

    /** @return array<Annotation|RepeatableAttributeCollection> */
=======
    /**
     * @return class-string-map<T, T|RepeatableAttributeCollection<T>>
     *
     * @template T of Annotation
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public function getMethodAnnotations(ReflectionMethod $method): array
    {
        return $this->convertToAttributeInstances($method->getAttributes());
    }

<<<<<<< HEAD
    /** @return Annotation|RepeatableAttributeCollection|null */
    public function getMethodAnnotation(ReflectionMethod $method, $annotationName)
    {
        return $this->getMethodAnnotations($method)[$annotationName]
            ?? ($this->isRepeatable($annotationName) ? new RepeatableAttributeCollection() : null);
    }

    /** @return array<Annotation|RepeatableAttributeCollection> */
=======
    /**
     * @return class-string-map<T, T|RepeatableAttributeCollection<T>>
     *
     * @template T of Annotation
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public function getPropertyAnnotations(ReflectionProperty $property): array
    {
        return $this->convertToAttributeInstances($property->getAttributes());
    }

<<<<<<< HEAD
    /** @return Annotation|RepeatableAttributeCollection|null */
    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
=======
    /**
     * @param class-string<T> $annotationName The name of the annotation.
     *
     * @return T|null
     *
     * @template T of Annotation
     */
    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        if ($this->isRepeatable($annotationName)) {
            throw new LogicException(sprintf(
                'The attribute "%s" is repeatable. Call getPropertyAnnotationCollection() instead.',
                $annotationName
            ));
        }

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        return $this->getPropertyAnnotations($property)[$annotationName]
            ?? ($this->isRepeatable($annotationName) ? new RepeatableAttributeCollection() : null);
    }

    /**
<<<<<<< HEAD
     * @param array<ReflectionAttribute> $attributes
     *
     * @return array<Annotation|RepeatableAttributeCollection>
=======
     * @param class-string<T> $annotationName The name of the annotation.
     *
     * @return RepeatableAttributeCollection<T>
     *
     * @template T of Annotation
     */
    public function getPropertyAnnotationCollection(
        ReflectionProperty $property,
        string $annotationName
    ): RepeatableAttributeCollection {
        if (! $this->isRepeatable($annotationName)) {
            throw new LogicException(sprintf(
                'The attribute "%s" is not repeatable. Call getPropertyAnnotation() instead.',
                $annotationName
            ));
        }

        return $this->getPropertyAnnotations($property)[$annotationName] ?? new RepeatableAttributeCollection();
    }

    /**
     * @param array<ReflectionAttribute> $attributes
     *
     * @return class-string-map<T, T|RepeatableAttributeCollection<T>>
     *
     * @template T of Annotation
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    private function convertToAttributeInstances(array $attributes): array
    {
        $instances = [];

        foreach ($attributes as $attribute) {
            $attributeName = $attribute->getName();
            assert(is_string($attributeName));
            // Make sure we only get Doctrine Annotations
            if (! is_subclass_of($attributeName, Annotation::class)) {
                continue;
            }

            $instance = $attribute->newInstance();
            assert($instance instanceof Annotation);

            if ($this->isRepeatable($attributeName)) {
                if (! isset($instances[$attributeName])) {
                    $instances[$attributeName] = new RepeatableAttributeCollection();
                }

                $collection = $instances[$attributeName];
                assert($collection instanceof RepeatableAttributeCollection);
                $collection[] = $instance;
            } else {
                $instances[$attributeName] = $instance;
            }
        }

        return $instances;
    }

<<<<<<< HEAD
=======
    /**
     * @param class-string<Annotation> $attributeClassName
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    private function isRepeatable(string $attributeClassName): bool
    {
        if (isset($this->isRepeatableAttribute[$attributeClassName])) {
            return $this->isRepeatableAttribute[$attributeClassName];
        }

        $reflectionClass = new ReflectionClass($attributeClassName);
        $attribute       = $reflectionClass->getAttributes()[0]->newInstance();

        return $this->isRepeatableAttribute[$attributeClassName] = ($attribute->flags & Attribute::IS_REPEATABLE) > 0;
    }
}
