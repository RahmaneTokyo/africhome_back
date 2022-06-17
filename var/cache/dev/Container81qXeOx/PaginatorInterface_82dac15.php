<?php

namespace Container81qXeOx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        if ($this->valueHolder3bbce === $returnValue = $this->valueHolder3bbce->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerbf273 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3bbce) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3bbce = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerbf273 && ($this->initializerbf273->__invoke($valueHolder3bbce, $this, '__get', ['name' => $name], $this->initializerbf273) || 1) && $this->valueHolder3bbce = $valueHolder3bbce;

        if (isset(self::$publicProperties7296f[$name])) {
            return $this->valueHolder3bbce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
