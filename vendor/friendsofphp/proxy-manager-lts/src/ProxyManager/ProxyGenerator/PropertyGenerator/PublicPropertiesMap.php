<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\PropertyGenerator;

use Laminas\Code\Generator\Exception\InvalidArgumentException;
use Laminas\Code\Generator\PropertyGenerator;
use ProxyManager\Generator\Util\IdentifierSuffixer;
use ProxyManager\ProxyGenerator\Util\Properties;

/**
 * Map of public properties that exist in the class being proxied
 */
class PublicPropertiesMap extends PropertyGenerator
{
    /** @var array<string, bool> */
    private $publicProperties = [];

    /**
     * @throws InvalidArgumentException
     */
<<<<<<< HEAD
    public function __construct(Properties $properties)
=======
    public function __construct(Properties $properties, bool $skipReadOnlyProperties = false)
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('publicProperties'));

        foreach ($properties->getPublicProperties() as $publicProperty) {
<<<<<<< HEAD
=======
            if ($skipReadOnlyProperties && \PHP_VERSION_ID >= 80100 && $publicProperty->isReadOnly()) {
                continue;
            }

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $this->publicProperties[$publicProperty->getName()] = true;
        }

        $this->setDefaultValue($this->publicProperties);
        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setStatic(true);
        $this->setDocBlock('@var bool[] map of public properties of the parent class');
    }

    public function isEmpty(): bool
    {
        return ! $this->publicProperties;
    }
}
