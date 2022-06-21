<?php

namespace Container1VuUKL1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8a373 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13830 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties43857 = [
        
    ];

    public function getConnection()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getConnection', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getMetadataFactory', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getExpressionBuilder', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'beginTransaction', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getCache', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'transactional', array('func' => $func), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'commit', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->commit();
    }

    public function rollback()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'rollback', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getClassMetadata', array('className' => $className), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'createQuery', array('dql' => $dql), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'createNamedQuery', array('name' => $name), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'createQueryBuilder', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'flush', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'clear', array('entityName' => $entityName), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->clear($entityName);
    }

    public function close()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'close', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->close();
    }

    public function persist($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'persist', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'remove', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'refresh', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'detach', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'merge', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'contains', array('entity' => $entity), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getEventManager', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getConfiguration', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'isOpen', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getUnitOfWork', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getProxyFactory', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'initializeObject', array('obj' => $obj), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'getFilters', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'isFiltersStateClean', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'hasFilters', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return $this->valueHolder8a373->hasFilters();
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

        $instance->initializer13830 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8a373) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8a373 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8a373->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__get', ['name' => $name], $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        if (isset(self::$publicProperties43857[$name])) {
            return $this->valueHolder8a373->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a373;

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

        $targetObject = $this->valueHolder8a373;
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
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a373;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8a373;
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
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__isset', array('name' => $name), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a373;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8a373;
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
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__unset', array('name' => $name), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a373;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8a373;
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
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__clone', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        $this->valueHolder8a373 = clone $this->valueHolder8a373;
    }

    public function __sleep()
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__sleep', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        return array('valueHolder8a373');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13830 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13830;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'initializeProxy', array(), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8a373;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8a373;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
