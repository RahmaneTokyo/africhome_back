<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

<<<<<<< HEAD
/**
 * Description of AggregateExpression.
 *
 * @link    www.doctrine-project.org
 */
=======
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
class AggregateExpression extends Node
{
    /** @var string */
    public $functionName;

    /** @var PathExpression|SimpleArithmeticExpression */
    public $pathExpression;

    /**
     * Some aggregate expressions support distinct, eg COUNT.
     *
     * @var bool
     */
    public $isDistinct = false;

    /**
     * @param string                                    $functionName
     * @param PathExpression|SimpleArithmeticExpression $pathExpression
     * @param bool                                      $isDistinct
     */
    public function __construct($functionName, $pathExpression, $isDistinct)
    {
        $this->functionName   = $functionName;
        $this->pathExpression = $pathExpression;
        $this->isDistinct     = $isDistinct;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($walker)
    {
        return $walker->walkAggregateExpression($this);
    }
}
