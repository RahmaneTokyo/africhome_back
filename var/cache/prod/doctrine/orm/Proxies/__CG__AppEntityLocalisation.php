<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Localisation extends \App\Entity\Localisation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'typeLocalisation', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'father', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'zipCode', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'batiments'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'typeLocalisation', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'father', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'zipCode', '' . "\0" . 'App\\Entity\\Localisation' . "\0" . 'batiments'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Localisation $proxy) {
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeLocalisation(): ?\App\Entity\TypeLocalisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeLocalisation', []);

        return parent::getTypeLocalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeLocalisation(?\App\Entity\TypeLocalisation $typeLocalisation): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeLocalisation', [$typeLocalisation]);

        return parent::setTypeLocalisation($typeLocalisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau(int $niveau): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getFather(): ?\App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFather', []);

        return parent::getFather();
    }

    /**
     * {@inheritDoc}
     */
    public function setFather(?\App\Entity\Localisation $father): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFather', [$father]);

        return parent::setFather($father);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', []);

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode(string $zipCode): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', [$zipCode]);

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatiments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatiments', []);

        return parent::getBatiments();
    }

    /**
     * {@inheritDoc}
     */
    public function addBatiment(\App\Entity\Batiment $batiment): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBatiment', [$batiment]);

        return parent::addBatiment($batiment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBatiment(\App\Entity\Batiment $batiment): \App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBatiment', [$batiment]);

        return parent::removeBatiment($batiment);
    }

}
