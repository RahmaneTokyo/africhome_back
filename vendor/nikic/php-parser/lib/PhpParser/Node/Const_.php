<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

class Const_ extends NodeAbstract
{
    /** @var Identifier Name */
    public $name;
    /** @var Expr Value */
    public $value;

<<<<<<< HEAD
    /** @var Name Namespaced name (if using NameResolver) */
=======
    /** @var Name|null Namespaced name (if using NameResolver) */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public $namespacedName;

    /**
     * Constructs a const node for use in class const and const statements.
     *
     * @param string|Identifier $name       Name
     * @param Expr              $value      Value
     * @param array             $attributes Additional attributes
     */
    public function __construct($name, Expr $value, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->value = $value;
    }

    public function getSubNodeNames() : array {
        return ['name', 'value'];
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public function getType() : string {
        return 'Const';
    }
}
