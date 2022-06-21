<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

class Literal extends Node
{
    public const STRING  = 1;
    public const BOOLEAN = 2;
    public const NUMERIC = 3;

<<<<<<< HEAD
    /** @var int */
=======
    /**
     * @var int
     * @psalm-var self::*
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public $type;

    /** @var mixed */
    public $value;

    /**
     * @param int   $type
     * @param mixed $value
<<<<<<< HEAD
=======
     * @psalm-param self::* $type
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($type, $value)
    {
        $this->type  = $type;
        $this->value = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($walker)
    {
        return $walker->walkLiteral($this);
    }
}
