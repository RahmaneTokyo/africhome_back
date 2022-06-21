<?php

namespace ContainerZOQ9kH5;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9bb85 = null;
    private $initializer86b8a = null;
    private static $publicProperties3d14e = [
        
    ];
    public function getConnection()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getConnection', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getMetadataFactory', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getExpressionBuilder', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'beginTransaction', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getCache', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getCache();
    }
    public function transactional($func)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'transactional', array('func' => $func), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'wrapInTransaction', array('func' => $func), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'commit', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->commit();
    }
    public function rollback()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'rollback', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getClassMetadata', array('className' => $className), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'createQuery', array('dql' => $dql), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'createNamedQuery', array('name' => $name), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'createQueryBuilder', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'flush', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'clear', array('entityName' => $entityName), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->clear($entityName);
    }
    public function close()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'close', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->close();
    }
    public function persist($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'persist', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'remove', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'refresh', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'detach', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'merge', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getRepository', array('entityName' => $entityName), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'contains', array('entity' => $entity), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getEventManager', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getConfiguration', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'isOpen', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getUnitOfWork', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getProxyFactory', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'initializeObject', array('obj' => $obj), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'getFilters', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'isFiltersStateClean', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'hasFilters', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return $this->valueHolder9bb85->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer86b8a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9bb85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9bb85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9bb85->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__get', ['name' => $name], $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        if (isset(self::$publicProperties3d14e[$name])) {
            return $this->valueHolder9bb85->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bb85;
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
        $targetObject = $this->valueHolder9bb85;
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
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bb85;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9bb85;
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
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__isset', array('name' => $name), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bb85;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9bb85;
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
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__unset', array('name' => $name), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bb85;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9bb85;
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
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__clone', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        $this->valueHolder9bb85 = clone $this->valueHolder9bb85;
    }
    public function __sleep()
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__sleep', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        return array('valueHolder9bb85');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer86b8a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer86b8a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'initializeProxy', array(), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9bb85;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9bb85;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
