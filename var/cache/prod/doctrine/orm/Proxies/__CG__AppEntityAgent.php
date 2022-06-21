<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agent extends \App\Entity\Agent implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'entrepriseSecurite', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'numeroCarteProf'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'entrepriseSecurite', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'numeroCarteProf'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Agent $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\App\Entity\User $user): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function addType(\App\Entity\TypeAgent $type): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addType', [$type]);

        return parent::addType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeType(\App\Entity\TypeAgent $type): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeType', [$type]);

        return parent::removeType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntrepriseSecurite(): ?\App\Entity\Entite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntrepriseSecurite', []);

        return parent::getEntrepriseSecurite();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntrepriseSecurite(?\App\Entity\Entite $entrepriseSecurite): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntrepriseSecurite', [$entrepriseSecurite]);

        return parent::setEntrepriseSecurite($entrepriseSecurite);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule(?string $matricule): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$matricule]);

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroCarteProf(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroCarteProf', []);

        return parent::getNumeroCarteProf();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroCarteProf(?string $numeroCarteProf): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroCarteProf', [$numeroCarteProf]);

        return parent::setNumeroCarteProf($numeroCarteProf);
    }

}
