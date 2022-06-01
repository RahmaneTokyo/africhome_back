<?php

namespace ContainerTiD5Li6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        if ($this->valueHolder11d25 === $returnValue = $this->valueHolder11d25->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerbd60c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder11d25) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder11d25 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerbd60c && ($this->initializerbd60c->__invoke($valueHolder11d25, $this, '__get', ['name' => $name], $this->initializerbd60c) || 1) && $this->valueHolder11d25 = $valueHolder11d25;

        if (isset(self::$publicProperties59aa5[$name])) {
            return $this->valueHolder11d25->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
