<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Batiment extends \App\Entity\Batiment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'entite', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'numeroParcelle', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'typeBatiment', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'titreFoncier', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'dateConstruction', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'batimentOwners'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'entite', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'numeroParcelle', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'typeBatiment', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'titreFoncier', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'dateConstruction', '' . "\0" . 'App\\Entity\\Batiment' . "\0" . 'batimentOwners'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Batiment $proxy) {
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
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact(): ?\App\Entity\Contact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(\App\Entity\Contact $contact): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$contact]);

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalisation(): ?\App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalisation', []);

        return parent::getLocalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalisation(?\App\Entity\Localisation $localisation): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalisation', [$localisation]);

        return parent::setLocalisation($localisation);
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
    public function setEntite(?\App\Entity\Entite $entite): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntite', [$entite]);

        return parent::setEntite($entite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroParcelle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroParcelle', []);

        return parent::getNumeroParcelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroParcelle(string $numeroParcelle): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroParcelle', [$numeroParcelle]);

        return parent::setNumeroParcelle($numeroParcelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeBatiment(): ?\App\Entity\TypeBatiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeBatiment', []);

        return parent::getTypeBatiment();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeBatiment(?\App\Entity\TypeBatiment $typeBatiment): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeBatiment', [$typeBatiment]);

        return parent::setTypeBatiment($typeBatiment);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreFoncier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreFoncier', []);

        return parent::getTitreFoncier();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreFoncier(string $titreFoncier): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreFoncier', [$titreFoncier]);

        return parent::setTitreFoncier($titreFoncier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateConstruction(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateConstruction', []);

        return parent::getDateConstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateConstruction(\DateTimeInterface $dateConstruction): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateConstruction', [$dateConstruction]);

        return parent::setDateConstruction($dateConstruction);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatimentOwners(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatimentOwners', []);

        return parent::getBatimentOwners();
    }

    /**
     * {@inheritDoc}
     */
    public function addBatimentOwner(\App\Entity\BatimentOwner $batimentOwner): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBatimentOwner', [$batimentOwner]);

        return parent::addBatimentOwner($batimentOwner);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBatimentOwner(\App\Entity\BatimentOwner $batimentOwner): \App\Entity\Batiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBatimentOwner', [$batimentOwner]);

        return parent::removeBatimentOwner($batimentOwner);
    }

}
