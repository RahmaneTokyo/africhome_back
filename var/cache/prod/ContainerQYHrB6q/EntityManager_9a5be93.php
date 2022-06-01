<?php

namespace ContainerQYHrB6q;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder01679 = null;
    private $initializerec932 = null;
    private static $publicPropertiesa21e7 = [
        
    ];
    public function getConnection()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getConnection', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getMetadataFactory', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getExpressionBuilder', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'beginTransaction', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getCache', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getCache();
    }
    public function transactional($func)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'transactional', array('func' => $func), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'wrapInTransaction', array('func' => $func), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'commit', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->commit();
    }
    public function rollback()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'rollback', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getClassMetadata', array('className' => $className), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'createQuery', array('dql' => $dql), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'createNamedQuery', array('name' => $name), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'createQueryBuilder', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'flush', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'clear', array('entityName' => $entityName), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->clear($entityName);
    }
    public function close()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'close', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->close();
    }
    public function persist($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'persist', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'remove', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'refresh', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'detach', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'merge', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'contains', array('entity' => $entity), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getEventManager', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getConfiguration', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'isOpen', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getUnitOfWork', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getProxyFactory', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'initializeObject', array('obj' => $obj), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'getFilters', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'isFiltersStateClean', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'hasFilters', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return $this->valueHolder01679->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerec932 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder01679) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01679 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder01679->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__get', ['name' => $name], $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        if (isset(self::$publicPropertiesa21e7[$name])) {
            return $this->valueHolder01679->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01679;
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
        $targetObject = $this->valueHolder01679;
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
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01679;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder01679;
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
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__isset', array('name' => $name), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01679;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder01679;
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
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__unset', array('name' => $name), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01679;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder01679;
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
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__clone', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        $this->valueHolder01679 = clone $this->valueHolder01679;
    }
    public function __sleep()
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__sleep', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        return array('valueHolder01679');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec932 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec932;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'initializeProxy', array(), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01679;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01679;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
