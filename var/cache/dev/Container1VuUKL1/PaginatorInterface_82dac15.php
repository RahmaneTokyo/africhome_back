<?php

namespace Container1VuUKL1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        if ($this->valueHolder8a373 === $returnValue = $this->valueHolder8a373->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer13830 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder8a373) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder8a373 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer13830 && ($this->initializer13830->__invoke($valueHolder8a373, $this, '__get', ['name' => $name], $this->initializer13830) || 1) && $this->valueHolder8a373 = $valueHolder8a373;

        if (isset(self::$publicProperties43857[$name])) {
            return $this->valueHolder8a373->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
