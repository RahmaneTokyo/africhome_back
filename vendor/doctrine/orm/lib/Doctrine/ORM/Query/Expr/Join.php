<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Expr;

use function strtoupper;

/**
 * Expression class for DQL join.
 *
 * @link    www.doctrine-project.org
 */
class Join
{
    public const INNER_JOIN = 'INNER';
    public const LEFT_JOIN  = 'LEFT';

    public const ON   = 'ON';
    public const WITH = 'WITH';

<<<<<<< HEAD
    /** @var string */
=======
    /**
     * @var string
     * @psalm-var self::INNER_JOIN|self::LEFT_JOIN
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    protected $joinType;

    /** @var string */
    protected $join;

    /** @var string|null */
    protected $alias;

<<<<<<< HEAD
    /** @var string|null */
=======
    /**
     * @var string|null
     * @psalm-var self::ON|self::WITH|null
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    protected $conditionType;

    /** @var string|Comparison|Composite|null */
    protected $condition;

    /** @var string|null */
    protected $indexBy;

    /**
     * @param string                           $joinType      The condition type constant. Either INNER_JOIN or LEFT_JOIN.
     * @param string                           $join          The relationship to join.
     * @param string|null                      $alias         The alias of the join.
     * @param string|null                      $conditionType The condition type constant. Either ON or WITH.
     * @param string|Comparison|Composite|null $condition     The condition for the join.
     * @param string|null                      $indexBy       The index for the join.
<<<<<<< HEAD
=======
     * @psalm-param self::INNER_JOIN|self::LEFT_JOIN $joinType
     * @psalm-param self::ON|self::WITH|null $conditionType
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($joinType, $join, $alias = null, $conditionType = null, $condition = null, $indexBy = null)
    {
        $this->joinType      = $joinType;
        $this->join          = $join;
        $this->alias         = $alias;
        $this->conditionType = $conditionType;
        $this->condition     = $condition;
        $this->indexBy       = $indexBy;
    }

    /**
     * @return string
<<<<<<< HEAD
=======
     * @psalm-return self::INNER_JOIN|self::LEFT_JOIN
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function getJoinType()
    {
        return $this->joinType;
    }

    /**
     * @return string
     */
    public function getJoin()
    {
        return $this->join;
    }

    /**
     * @return string|null
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return string|null
<<<<<<< HEAD
=======
     * @psalm-return self::ON|self::WITH|null
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function getConditionType()
    {
        return $this->conditionType;
    }

    /**
     * @return string|Comparison|Composite|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return string|null
     */
    public function getIndexBy()
    {
        return $this->indexBy;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return strtoupper($this->joinType) . ' JOIN ' . $this->join
             . ($this->alias ? ' ' . $this->alias : '')
             . ($this->indexBy ? ' INDEX BY ' . $this->indexBy : '')
             . ($this->condition ? ' ' . strtoupper($this->conditionType) . ' ' . $this->condition : '');
    }
}
