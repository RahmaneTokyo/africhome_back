<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Incident extends \App\Entity\Incident implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'dateIncident', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'etatIncident', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'entite', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'typeIncident'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'dateIncident', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'etatIncident', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'entite', '' . "\0" . 'App\\Entity\\Incident' . "\0" . 'typeIncident'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Incident $proxy) {
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
    public function getDateIncident(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateIncident', []);

        return parent::getDateIncident();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateIncident(\DateTimeInterface $dateIncident): \App\Entity\Incident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateIncident', [$dateIncident]);

        return parent::setDateIncident($dateIncident);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentaire(string $commentaire): \App\Entity\Incident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentaire', [$commentaire]);

        return parent::setCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatIncident(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatIncident', []);

        return parent::getEtatIncident();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatIncident(string $etatIncident): \App\Entity\Incident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatIncident', [$etatIncident]);

        return parent::setEtatIncident($etatIncident);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntite(): ?\App\Entity\Entite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntite', []);

        return parent::getEntite();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntite(?\App\Entity\Entite $entite): \App\Entity\Incident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntite', [$entite]);

        return parent::setEntite($entite);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeIncident(): ?\App\Entity\TypeIncident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeIncident', []);

        return parent::getTypeIncident();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeIncident(?\App\Entity\TypeIncident $typeIncident): \App\Entity\Incident
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeIncident', [$typeIncident]);

        return parent::setTypeIncident($typeIncident);
    }

}
