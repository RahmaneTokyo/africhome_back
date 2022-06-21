<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

/**
 * AssociationPathExpression ::= CollectionValuedPathExpression | SingleValuedAssociationPathExpression
 * SingleValuedPathExpression ::= StateFieldPathExpression | SingleValuedAssociationPathExpression
 * StateFieldPathExpression ::= SimpleStateFieldPathExpression | SimpleStateFieldAssociationPathExpression
 * SingleValuedAssociationPathExpression ::= IdentificationVariable "." SingleValuedAssociationField
 * CollectionValuedPathExpression ::= IdentificationVariable "." CollectionValuedAssociationField
 * StateField ::= {EmbeddedClassStateField "."}* SimpleStateField
 * SimpleStateFieldPathExpression ::= IdentificationVariable "." StateField
 */
class PathExpression extends Node
{
    public const TYPE_COLLECTION_VALUED_ASSOCIATION = 2;
    public const TYPE_SINGLE_VALUED_ASSOCIATION     = 4;
    public const TYPE_STATE_FIELD                   = 8;

<<<<<<< HEAD
    /** @var int */
    public $type;

    /** @var int */
=======
    /**
     * @var int|null
     * @psalm-var self::TYPE_*|null
     */
    public $type;

    /**
     * @var int
     * @psalm-var int-mask-of<self::TYPE_*>
     */
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    public $expectedType;

    /** @var string */
    public $identificationVariable;

    /** @var string|null */
    public $field;

    /**
     * @param int         $expectedType
     * @param string      $identificationVariable
     * @param string|null $field
<<<<<<< HEAD
=======
     * @psalm-param int-mask-of<self::TYPE_*> $expectedType
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
     */
    public function __construct($expectedType, $identificationVariable, $field = null)
    {
        $this->expectedType           = $expectedType;
        $this->identificationVariable = $identificationVariable;
        $this->field                  = $field;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($walker)
    {
        return $walker->walkPathExpression($this);
    }
}
