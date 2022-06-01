<?php

namespace ContainerTiD5Li6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11d25 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd60c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59aa5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getConnection', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getMetadataFactory', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getExpressionBuilder', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'beginTransaction', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getCache', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'transactional', array('func' => $func), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'commit', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->commit();
    }

    public function rollback()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'rollback', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getClassMetadata', array('className' => $className), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'createQuery', array('dql' => $dql), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'createNamedQuery', array('name' => $name), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'createQueryBuilder', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'flush', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'clear', array('entityName' => $entityName), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->clear($entityName);
    }

    public function close()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'close', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->close();
    }

    public function persist($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'persist', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'remove', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'refresh', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'detach', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'merge', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'contains', array('entity' => $entity), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getEventManager', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getConfiguration', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'isOpen', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getUnitOfWork', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getProxyFactory', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'initializeObject', array('obj' => $obj), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'getFilters', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'isFiltersStateClean', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'hasFilters', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return $this->valueHolder11d25->hasFilters();
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

        $instance->initializerbd60c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11d25) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11d25 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11d25->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__get', ['name' => $name], $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        if (isset(self::$publicProperties59aa5[$name])) {
            return $this->valueHolder11d25->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11d25;

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

        $targetObject = $this->valueHolder11d25;
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
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11d25;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11d25;
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
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__isset', array('name' => $name), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11d25;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11d25;
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
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__unset', array('name' => $name), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11d25;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11d25;
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
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__clone', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        $this->valueHolder11d25 = clone $this->valueHolder11d25;
    }

    public function __sleep()
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__sleep', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        return array('valueHolder11d25');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd60c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd60c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'initializeProxy', array(), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11d25;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11d25;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
