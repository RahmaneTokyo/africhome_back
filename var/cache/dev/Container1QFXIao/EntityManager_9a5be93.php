<?php

namespace Container1QFXIao;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder64ad2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer97c16 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8743e = [
        
    ];

    public function getConnection()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getConnection', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getMetadataFactory', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getExpressionBuilder', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'beginTransaction', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getCache', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'transactional', array('func' => $func), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'commit', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->commit();
    }

    public function rollback()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'rollback', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getClassMetadata', array('className' => $className), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'createQuery', array('dql' => $dql), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'createNamedQuery', array('name' => $name), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'createQueryBuilder', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'flush', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'clear', array('entityName' => $entityName), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->clear($entityName);
    }

    public function close()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'close', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->close();
    }

    public function persist($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'persist', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'remove', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'refresh', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'detach', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'merge', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'contains', array('entity' => $entity), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getEventManager', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getConfiguration', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'isOpen', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getUnitOfWork', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getProxyFactory', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'initializeObject', array('obj' => $obj), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'getFilters', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'isFiltersStateClean', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'hasFilters', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return $this->valueHolder64ad2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer97c16 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder64ad2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder64ad2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder64ad2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__get', ['name' => $name], $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        if (isset(self::$publicProperties8743e[$name])) {
            return $this->valueHolder64ad2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ad2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder64ad2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ad2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder64ad2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__isset', array('name' => $name), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ad2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder64ad2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__unset', array('name' => $name), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ad2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder64ad2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__clone', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        $this->valueHolder64ad2 = clone $this->valueHolder64ad2;
    }

    public function __sleep()
    {
        $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, '__sleep', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;

        return array('valueHolder64ad2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer97c16 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer97c16;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer97c16 && ($this->initializer97c16->__invoke($valueHolder64ad2, $this, 'initializeProxy', array(), $this->initializer97c16) || 1) && $this->valueHolder64ad2 = $valueHolder64ad2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder64ad2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder64ad2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
