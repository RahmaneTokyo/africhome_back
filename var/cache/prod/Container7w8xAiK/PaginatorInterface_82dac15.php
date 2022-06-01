<?php

namespace Container7w8xAiK;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder814f3 = null;
    private $initializer9fb5c = null;
    private static $publicProperties4da3b = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        if ($this->valueHolder814f3 === $returnValue = $this->valueHolder814f3->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer9fb5c = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder814f3) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder814f3 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer9fb5c && ($this->initializer9fb5c->__invoke($valueHolder814f3, $this, '__get', ['name' => $name], $this->initializer9fb5c) || 1) && $this->valueHolder814f3 = $valueHolder814f3;
        if (isset(self::$publicProperties4da3b[$name])) {
            return $this->valueHolder814f3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
