<?php

namespace ContainerQYHrB6q;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder01679 = null;
    private $initializerec932 = null;
    private static $publicPropertiesa21e7 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        if ($this->valueHolder01679 === $returnValue = $this->valueHolder01679->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializerec932 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder01679) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder01679 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerec932 && ($this->initializerec932->__invoke($valueHolder01679, $this, '__get', ['name' => $name], $this->initializerec932) || 1) && $this->valueHolder01679 = $valueHolder01679;
        if (isset(self::$publicPropertiesa21e7[$name])) {
            return $this->valueHolder01679->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
