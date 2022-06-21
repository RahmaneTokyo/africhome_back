<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query;

<<<<<<< HEAD
use Doctrine\ORM\Mapping\ClassMetadata;
=======
use Doctrine\ORM\AbstractQuery;
use Generator;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

use function array_diff;
use function array_keys;

/**
 * Represents a chain of tree walkers that modify an AST and finally emit output.
 * Only the last walker in the chain can emit output. Any previous walkers can modify
 * the AST to influence the final output produced by the last walker.
<<<<<<< HEAD
=======
 *
 * @psalm-import-type QueryComponent from Parser
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
class TreeWalkerChain implements TreeWalker
{
    /**
     * The tree walkers.
     *
<<<<<<< HEAD
     * @var TreeWalker[]
     * @psalm-var TreeWalkerChainIterator
     */
    private $_walkers;
=======
     * @var string[]
     * @psalm-var list<class-string<TreeWalker>>
     */
    private $walkers = [];

    /** @var AbstractQuery */
    private $query;

    /** @var ParserResult */
    private $parserResult;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

    /**
     * The query components of the original query (the "symbol table") that was produced by the Parser.
     *
     * @var array<string, array<string, mixed>>
<<<<<<< HEAD
     * @psalm-var array<string, array{
     *                metadata: ClassMetadata,
     *                parent: string,
     *                relation: mixed[],
     *                map: mixed,
     *                nestingLevel: int,
     *                token: array
     *            }>
     */
    private $_queryComponents;
=======
     * @psalm-var array<string, QueryComponent>
     */
    private $queryComponents;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

    /**
     * Returns the internal queryComponents array.
     *
     * {@inheritDoc}
     */
    public function getQueryComponents()
    {
<<<<<<< HEAD
        return $this->_queryComponents;
=======
        return $this->queryComponents;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function setQueryComponent($dqlAlias, array $queryComponent)
    {
        $requiredKeys = ['metadata', 'parent', 'relation', 'map', 'nestingLevel', 'token'];

        if (array_diff($requiredKeys, array_keys($queryComponent))) {
            throw QueryException::invalidQueryComponent($dqlAlias);
        }

<<<<<<< HEAD
        $this->_queryComponents[$dqlAlias] = $queryComponent;
=======
        $this->queryComponents[$dqlAlias] = $queryComponent;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     */
    public function __construct($query, $parserResult, array $queryComponents)
    {
<<<<<<< HEAD
        $this->_queryComponents = $queryComponents;
        $this->_walkers         = new TreeWalkerChainIterator($this, $query, $parserResult);
=======
        $this->query           = $query;
        $this->parserResult    = $parserResult;
        $this->queryComponents = $queryComponents;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * Adds a tree walker to the chain.
     *
     * @param string $walkerClass The class of the walker to instantiate.
<<<<<<< HEAD
=======
     * @psalm-param class-string<TreeWalker> $walkerClass
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     *
     * @return void
     */
    public function addTreeWalker($walkerClass)
    {
<<<<<<< HEAD
        $this->_walkers[] = $walkerClass;
=======
        $this->walkers[] = $walkerClass;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSelectStatement(AST\SelectStatement $AST)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
            $walker->walkSelectStatement($AST);

            $this->_queryComponents = $walker->getQueryComponents();
=======
        foreach ($this->getWalkers() as $walker) {
            $walker->walkSelectStatement($AST);

            $this->queryComponents = $walker->getQueryComponents();
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSelectClause($selectClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSelectClause($selectClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkFromClause($fromClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkFromClause($fromClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkFunction($function)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkFunction($function);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkOrderByClause($orderByClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkOrderByClause($orderByClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkOrderByItem($orderByItem)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkOrderByItem($orderByItem);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkHavingClause($havingClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkHavingClause($havingClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkJoin($join)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkJoin($join);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSelectExpression($selectExpression)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSelectExpression($selectExpression);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkQuantifiedExpression($qExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkQuantifiedExpression($qExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSubselect($subselect)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSubselect($subselect);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSubselectFromClause($subselectFromClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSubselectFromClause($subselectFromClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSimpleSelectClause($simpleSelectClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSimpleSelectClause($simpleSelectClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSimpleSelectExpression($simpleSelectExpression)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSimpleSelectExpression($simpleSelectExpression);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkAggregateExpression($aggExpression)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkAggregateExpression($aggExpression);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkGroupByClause($groupByClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkGroupByClause($groupByClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkGroupByItem($groupByItem)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkGroupByItem($groupByItem);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkUpdateStatement(AST\UpdateStatement $AST)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkUpdateStatement($AST);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkDeleteStatement(AST\DeleteStatement $AST)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkDeleteStatement($AST);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkDeleteClause(AST\DeleteClause $deleteClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkDeleteClause($deleteClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkUpdateClause($updateClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkUpdateClause($updateClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkUpdateItem($updateItem)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkUpdateItem($updateItem);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkWhereClause($whereClause)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkWhereClause($whereClause);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkConditionalExpression($condExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkConditionalExpression($condExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkConditionalTerm($condTerm)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkConditionalTerm($condTerm);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkConditionalFactor($factor)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkConditionalFactor($factor);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkConditionalPrimary($condPrimary)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkConditionalPrimary($condPrimary);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkExistsExpression($existsExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkExistsExpression($existsExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkCollectionMemberExpression($collMemberExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkCollectionMemberExpression($collMemberExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkEmptyCollectionComparisonExpression($emptyCollCompExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkEmptyCollectionComparisonExpression($emptyCollCompExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkNullComparisonExpression($nullCompExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkNullComparisonExpression($nullCompExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkInExpression($inExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkInExpression($inExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkInstanceOfExpression($instanceOfExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkInstanceOfExpression($instanceOfExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkLiteral($literal)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkLiteral($literal);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkBetweenExpression($betweenExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkBetweenExpression($betweenExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkLikeExpression($likeExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkLikeExpression($likeExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkStateFieldPathExpression($stateFieldPathExpression)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkStateFieldPathExpression($stateFieldPathExpression);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkComparisonExpression($compExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkComparisonExpression($compExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkInputParameter($inputParam)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkInputParameter($inputParam);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkArithmeticExpression($arithmeticExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkArithmeticExpression($arithmeticExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkArithmeticTerm($term)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkArithmeticTerm($term);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkStringPrimary($stringPrimary)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkStringPrimary($stringPrimary);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkArithmeticFactor($factor)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkArithmeticFactor($factor);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkSimpleArithmeticExpression($simpleArithmeticExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkSimpleArithmeticExpression($simpleArithmeticExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkPathExpression($pathExpr)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkPathExpression($pathExpr);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function walkResultVariable($resultVariable)
    {
<<<<<<< HEAD
        foreach ($this->_walkers as $walker) {
=======
        foreach ($this->getWalkers() as $walker) {
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            $walker->walkResultVariable($resultVariable);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function getExecutor($AST)
    {
    }
<<<<<<< HEAD
=======

    /**
     * @psalm-return Generator<int, TreeWalker>
     */
    private function getWalkers(): Generator
    {
        foreach ($this->walkers as $walkerClass) {
            yield new $walkerClass($this->query, $this->parserResult, $this->queryComponents);
        }
    }
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
}
