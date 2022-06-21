<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

<<<<<<< HEAD
=======
use Doctrine\ORM\Query\AST\Functions\FunctionNode;

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
/**
 * LikeExpression ::= StringExpression ["NOT"] "LIKE" string ["ESCAPE" char]
 *
 * @link    www.doctrine-project.org
 */
class LikeExpression extends Node
{
    /** @var bool */
<<<<<<< HEAD
    public $not;

    /** @var Node */
    public $stringExpression;

    /** @var InputParameter */
=======
    public $not = false;

    /** @var Node|string */
    public $stringExpression;

    /** @var InputParameter|FunctionNode|PathExpression|Literal */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public $stringPattern;

    /** @var Literal|null */
    public $escapeChar;

    /**
<<<<<<< HEAD
     * @param Node           $stringExpression
     * @param InputParameter $stringPattern
     * @param Literal|null   $escapeChar
=======
     * @param Node|string                                        $stringExpression
     * @param InputParameter|FunctionNode|PathExpression|Literal $stringPattern
     * @param Literal|null                                       $escapeChar
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($stringExpression, $stringPattern, $escapeChar = null)
    {
        $this->stringExpression = $stringExpression;
        $this->stringPattern    = $stringPattern;
        $this->escapeChar       = $escapeChar;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($sqlWalker)
    {
        return $sqlWalker->walkLikeExpression($this);
    }
}
