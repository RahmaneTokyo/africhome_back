<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\LazyLoadingGhost\PropertyGenerator;

use Laminas\Code\Generator\Exception\InvalidArgumentException;
use Laminas\Code\Generator\PropertyGenerator;
use ProxyManager\Generator\Util\IdentifierSuffixer;
use ProxyManager\ProxyGenerator\Util\Properties;

/**
 * Property that contains the initializer for a lazy object
 */
class PrivatePropertiesMap extends PropertyGenerator
{
    public const KEY_DEFAULT_VALUE = 'defaultValue';

<<<<<<< HEAD
=======
    /** @var list<string> */
    private $readOnlyPropertyNames = [];

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    /**
     * Constructor
     *
     * @throws InvalidArgumentException
     */
    public function __construct(Properties $properties)
    {
        parent::__construct(
            IdentifierSuffixer::getIdentifier('privateProperties')
        );

        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setStatic(true);
        $this->setDocBlock(
            '@var array[][] visibility and default value of defined properties, indexed by property name and class name'
        );
        $this->setDefaultValue($this->getMap($properties));
    }

    /**
<<<<<<< HEAD
=======
     * @return list<string>
     */
    public function getReadOnlyPropertyNames(): array
    {
        return $this->readOnlyPropertyNames;
    }

    /**
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     * @return array<string, array<class-string, bool>>
     */
    private function getMap(Properties $properties): array
    {
        $map = [];

<<<<<<< HEAD
        foreach ($properties->getPrivateProperties() as $property) {
=======
        foreach ($properties->getInstanceProperties() as $property) {
            if (\PHP_VERSION_ID >= 80100 && $property->isReadOnly()) {
                $this->readOnlyPropertyNames[] = $property->getName();
            } elseif (! $property->isPrivate()) {
                continue;
            }

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $map[$property->getName()][$property->getDeclaringClass()->getName()] = true;
        }

        return $map;
    }
}
