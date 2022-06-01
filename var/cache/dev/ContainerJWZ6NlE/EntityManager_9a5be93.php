<?php

namespace ContainerJWZ6NlE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f7de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8a9a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08e39 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getConnection', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getMetadataFactory', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getExpressionBuilder', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'beginTransaction', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getCache', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'transactional', array('func' => $func), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'commit', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->commit();
    }

    public function rollback()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'rollback', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getClassMetadata', array('className' => $className), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'createQuery', array('dql' => $dql), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'createNamedQuery', array('name' => $name), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'createQueryBuilder', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'flush', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'clear', array('entityName' => $entityName), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->clear($entityName);
    }

    public function close()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'close', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->close();
    }

    public function persist($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'persist', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'remove', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'refresh', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'detach', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'merge', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'contains', array('entity' => $entity), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getEventManager', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getConfiguration', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'isOpen', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getUnitOfWork', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getProxyFactory', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'initializeObject', array('obj' => $obj), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'getFilters', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'isFiltersStateClean', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'hasFilters', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return $this->valueHolder5f7de->hasFilters();
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

        $instance->initializer8a9a4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5f7de) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f7de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f7de->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__get', ['name' => $name], $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        if (isset(self::$publicProperties08e39[$name])) {
            return $this->valueHolder5f7de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7de;

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

        $targetObject = $this->valueHolder5f7de;
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
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f7de;
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
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__isset', array('name' => $name), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f7de;
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
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__unset', array('name' => $name), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f7de;
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
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__clone', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        $this->valueHolder5f7de = clone $this->valueHolder5f7de;
    }

    public function __sleep()
    {
        $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, '__sleep', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;

        return array('valueHolder5f7de');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a9a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a9a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8a9a4 && ($this->initializer8a9a4->__invoke($valueHolder5f7de, $this, 'initializeProxy', array(), $this->initializer8a9a4) || 1) && $this->valueHolder5f7de = $valueHolder5f7de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f7de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f7de;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
