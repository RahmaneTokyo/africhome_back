<?php

namespace Container81qXeOx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3bbce = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf273 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7296f = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getConnection', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getMetadataFactory', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getExpressionBuilder', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'beginTransaction', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getCache', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'transactional', array('func' => $func), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'commit', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->commit();
    }

    public function rollback()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'rollback', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'createQuery', array('dql' => $dql), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'createQueryBuilder', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'flush', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'clear', array('entityName' => $entityName), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'close', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->close();
    }

    public function persist($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'persist', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'remove', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'refresh', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'detach', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'merge', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'contains', array('entity' => $entity), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getEventManager', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getConfiguration', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'isOpen', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getUnitOfWork', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getProxyFactory', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'getFilters', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'isFiltersStateClean', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'hasFilters', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return $this->valueHolder3bbce->hasFilters();
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

        $instance->initializerbf273 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3bbce) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3bbce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3bbce->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__get', ['name' => $name], $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        if (isset(self::$publicProperties7296f[$name])) {
            return $this->valueHolder3bbce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bbce;

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

        $targetObject = $this->valueHolder3bbce;
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
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bbce;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3bbce;
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
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__isset', array('name' => $name), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bbce;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3bbce;
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
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__unset', array('name' => $name), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bbce;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3bbce;
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
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__clone', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        $this->valueHolder3bbce = clone $this->valueHolder3bbce;
    }

    public function __sleep()
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__sleep', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        return array('valueHolder3bbce');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf273 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf273;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'initializeProxy', array(), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3bbce;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3bbce;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
