<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateDeNaissance', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isBloked', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'type', '' . "\0" . 'App\\Entity\\User' . "\0" . 'superAdmin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'admin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gestionnaire', '' . "\0" . 'App\\Entity\\User' . "\0" . 'agent', '' . "\0" . 'App\\Entity\\User' . "\0" . 'token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokenConfirm', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokenUpdatedAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\User' . "\0" . 'paiements'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateDeNaissance', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isBloked', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'type', '' . "\0" . 'App\\Entity\\User' . "\0" . 'superAdmin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'admin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gestionnaire', '' . "\0" . 'App\\Entity\\User' . "\0" . 'agent', '' . "\0" . 'App\\Entity\\User' . "\0" . 'token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokenConfirm', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokenUpdatedAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\User' . "\0" . 'paiements'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(?string $prenom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
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
    public function setNom(?string $nom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeNaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeNaissance', []);

        return parent::getDateDeNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeNaissance(?\DateTimeInterface $dateDeNaissance): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeNaissance', [$dateDeNaissance]);

        return parent::setDateDeNaissance($dateDeNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsBloked(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsBloked', []);

        return parent::getIsBloked();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsBloked(?bool $isBloked): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsBloked', [$isBloked]);

        return parent::setIsBloked($isBloked);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuperAdmin(): ?\App\Entity\SuperAdmin
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuperAdmin', []);

        return parent::getSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin(\App\Entity\SuperAdmin $superAdmin): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$superAdmin]);

        return parent::setSuperAdmin($superAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin(): ?\App\Entity\Admin
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin', []);

        return parent::getAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin(\App\Entity\Admin $admin): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin', [$admin]);

        return parent::setAdmin($admin);
    }

    /**
     * {@inheritDoc}
     */
    public function getGestionnaire(): ?\App\Entity\Gestionnaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGestionnaire', []);

        return parent::getGestionnaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setGestionnaire(\App\Entity\Gestionnaire $gestionnaire): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGestionnaire', [$gestionnaire]);

        return parent::setGestionnaire($gestionnaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgent(): ?\App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgent', []);

        return parent::getAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgent(\App\Entity\Agent $agent): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgent', [$agent]);

        return parent::setAgent($agent);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(?string $token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenConfirm(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenConfirm', []);

        return parent::getTokenConfirm();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenConfirm(?bool $tokenConfirm): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenConfirm', [$tokenConfirm]);

        return parent::setTokenConfirm($tokenConfirm);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenUpdatedAt', []);

        return parent::getTokenUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenUpdatedAt(?\DateTimeInterface $tokenUpdatedAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenUpdatedAt', [$tokenUpdatedAt]);

        return parent::setTokenUpdatedAt($tokenUpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getProprietaire(): ?\App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProprietaire', []);

        return parent::getProprietaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setProprietaire(?\App\Entity\Proprietaire $proprietaire): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProprietaire', [$proprietaire]);

        return parent::setProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaiements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaiements', []);

        return parent::getPaiements();
    }

    /**
     * {@inheritDoc}
     */
    public function addPaiement(\App\Entity\Paiement $paiement): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPaiement', [$paiement]);

        return parent::addPaiement($paiement);
    }

    /**
     * {@inheritDoc}
     */
    public function removePaiement(\App\Entity\Paiement $paiement): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePaiement', [$paiement]);

        return parent::removePaiement($paiement);
    }

}
