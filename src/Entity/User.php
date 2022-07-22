<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"user:read"}}
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"user:read","superadmin:read","admin:read","gestionnaire:read","user:read", "employes:read", "BatimentOwner", "UserOwner"})
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user:read","superadmin:write", "superadmin:read","admin:write", "admin:read","gestionnaire:write", "gestionnaire:read", "employe_entite", "entites:write", "employes:read", "BatimentOwner", "UserOwner"})
     */
    private $email;


    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups({"superadmin:write","admin:write", "gestionnaire:write", "entites:write"})
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user:read","superadmin:write", "superadmin:read", "admin:write", "admin:read","gestionnaire:write", "gestionnaire:read", "employe_entite", "entites:write", "employes:read", "BatimentOwner", "UserOwner", "activites"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user:read","superadmin:write", "superadmin:read", "admin:write", "admin:read","gestionnaire:write", "gestionnaire:read", "employe_entite", "entites:write", "employes:read", "BatimentOwner", "UserOwner", "activites"})
     */
    private $nom;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"user:read","superadmin:write", "superadmin:read", "admin:write", "admin:read","gestionnaire:write", "gestionnaire:read", "employe_entite", "entites:write", "employes:read", "BatimentOwner", "UserOwner", "activites"})
     */
    private $dateDeNaissance;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"user:read","superadmin:write", "superadmin:read", "admin:write", "admin:read","gestionnaire:write", "gestionnaire:read"})
     */
    private $isBloked = false;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"user:read","superadmin:read", "admin:read","gestionnaire:read","user:read"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read","superadmin:read", "admin:read","gestionnaire:read","user:read", "employe_entite", "entites:write", "employes:read", "BatimentOwner", "UserOwner"})
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=SuperAdmin::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $superAdmin;

    /**
     * @ORM\OneToOne(targetEntity=Admin::class, mappedBy="user", cascade={"persist", "remove"})
     * @Groups({"entites:write"})
     */
    private $admin;

    /**
     * @ORM\OneToOne(targetEntity=Gestionnaire::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $gestionnaire;

    /**
     * @ORM\OneToOne(targetEntity=Agent::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $agent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tokenConfirm;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $tokenUpdatedAt;

    /**
     * @ORM\OneToOne(targetEntity=Proprietaire::class, mappedBy="user", cascade={"persist", "remove"})
     * @Groups({"user:read"})
     */
    private $proprietaire;

    /**
     * @ORM\OneToMany(targetEntity=Paiement::class, mappedBy="user")
     */
    private $paiements;

    /**
     * @ORM\OneToMany(targetEntity=Activite::class, mappedBy="auteur")
     */
    private $activites;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->paiements = new ArrayCollection();
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.strtoupper($this->type);

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getIsBloked(): ?bool
    {
        return $this->isBloked;
    }

    public function setIsBloked(?bool $isBloked): self
    {
        $this->isBloked = $isBloked;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSuperAdmin(): ?SuperAdmin
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(SuperAdmin $superAdmin): self
    {
        // set the owning side of the relation if necessary
        if ($superAdmin->getUser() !== $this) {
            $superAdmin->setUser($this);
        }

        $this->superAdmin = $superAdmin;

        return $this;
    }

    public function getAdmin(): ?Admin
    {
        return $this->admin;
    }

    public function setAdmin(Admin $admin): self
    {
        // set the owning side of the relation if necessary
        if ($admin->getUser() !== $this) {
            $admin->setUser($this);
        }

        $this->admin = $admin;

        return $this;
    }

    public function getGestionnaire(): ?Gestionnaire
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(Gestionnaire $gestionnaire): self
    {
        // set the owning side of the relation if necessary
        if ($gestionnaire->getUser() !== $this) {
            $gestionnaire->setUser($this);
        }

        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(Agent $agent): self
    {
        // set the owning side of the relation if necessary
        if ($agent->getUser() !== $this) {
            $agent->setUser($this);
        }

        $this->agent = $agent;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getTokenConfirm(): ?bool
    {
        return $this->tokenConfirm;
    }

    public function setTokenConfirm(?bool $tokenConfirm): self
    {
        $this->tokenConfirm = $tokenConfirm;

        return $this;
    }

    public function getTokenUpdatedAt(): ?\DateTimeInterface
    {
        return $this->tokenUpdatedAt;
    }

    public function setTokenUpdatedAt(?\DateTimeInterface $tokenUpdatedAt): self
    {
        $this->tokenUpdatedAt = $tokenUpdatedAt;

        return $this;
    }


    public function getProprietaire(): ?Proprietaire
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Proprietaire $proprietaire): self
    {
        // unset the owning side of the relation if necessary
        if ($proprietaire === null && $this->proprietaire !== null) {
            $this->proprietaire->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($proprietaire !== null && $proprietaire->getUser() !== $this) {
            $proprietaire->setUser($this);
        }

        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * @return Collection<int, Paiement>
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements[] = $paiement;
            $paiement->setUser($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getUser() === $this) {
                $paiement->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Activite>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setAuteur($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getAuteur() === $this) {
                $activite->setAuteur(null);
            }
        }

        return $this;
    }
}
