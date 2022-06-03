<?php

namespace ContainerZOQ9kH5;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder9bb85 = null;
    private $initializer86b8a = null;
    private static $publicProperties3d14e = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        if ($this->valueHolder9bb85 === $returnValue = $this->valueHolder9bb85->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer86b8a = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder9bb85) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9bb85 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer86b8a && ($this->initializer86b8a->__invoke($valueHolder9bb85, $this, '__get', ['name' => $name], $this->initializer86b8a) || 1) && $this->valueHolder9bb85 = $valueHolder9bb85;
        if (isset(self::$publicProperties3d14e[$name])) {
            return $this->valueHolder9bb85->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
