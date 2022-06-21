<?php

namespace Container7w8xAiK;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder814f3 = null;
    private $initializer9fb5c = null;
    private static $publicProperties4da3b = [
        
    ];
    public function getConnection()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getConnection', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getMetadataFactory', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getExpressionBuilder', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'beginTransaction', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getCache', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'transactional', array('func' => $func), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'commit', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->commit();
    }
    public function rollback()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'rollback', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getClassMetadata', array('className' => $className), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'createQuery', array('dql' => $dql), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'createNamedQuery', array('name' => $name), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'createQueryBuilder', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'flush', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'clear', array('entityName' => $entityName), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->clear($entityName);
    }
    public function close()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'close', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->close();
    }
    public function persist($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'persist', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'remove', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'refresh', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'detach', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'merge', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'contains', array('entity' => $entity), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getEventManager', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getConfiguration', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'isOpen', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getUnitOfWork', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getProxyFactory', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'initializeObject', array('obj' => $obj), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'getFilters', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'isFiltersStateClean', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'hasFilters', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return $this->valueHolder814f3->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9fb5c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder814f3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder814f3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder814f3->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__get', ['name' => $name], $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        if (isset(self::$publicProperties4da3b[$name])) {
            return $this->valueHolder814f3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder814f3;
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
        $targetObject = $this->valueHolder814f3;
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
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder814f3;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder814f3;
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
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__isset', array('name' => $name), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder814f3;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder814f3;
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
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__unset', array('name' => $name), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder814f3;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder814f3;
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
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__clone', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        $this->valueHolder814f3 = clone $this->valueHolder814f3;
    }
    public function __sleep()
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__sleep', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        return array('valueHolder814f3');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9fb5c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9fb5c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'initializeProxy', array(), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder814f3;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder814f3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
