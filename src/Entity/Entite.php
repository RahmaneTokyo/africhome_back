<?php

namespace App\Entity;

use App\Entity\Contact;
use App\Enums\TypeEntiteEnum;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EntiteRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *   normalizationContext={"groups":{"entites:read"}},
 *   denormalizationContext={"groups":{"entites:write"}},
 *   collectionOperations={
 *    "get"={"method"="GET", "path"="/entites"},
 *    "post"={"method"="POST", "path"="/entites"}
 *  },
 *   itemOperations={
 *     "get"={"method"="GET", "path"="/entites/{id}"},
 *     "employes_of_one_entite"={"method"="GET", "path"="/entites/{id}/employes", "normalization_context"={"groups"={"employe_entite"}}},
 *     "put"={"method"="PUT", "path"="/entites/{id}"},
 *     "archived"={"method"="PUT", "path"="/entites/{id}/archived"},
 *     "delete"={"method"="DELETE", "path"="/entites/{id}"}
 * }
 * )
 * @ORM\Entity(repositoryClass=EntiteRepository::class)
 */
class Entite
{
    const ENTITES_TYPE = [TypeEntiteEnum::DEPARTEMENT, TypeEntiteEnum::ORGANISME, TypeEntiteEnum::ENTREPRISE, TypeEntiteEnum::AUTRE];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"entites:read", "admin:read","gestionnaire:read", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "BatimentOwner", "EntiteOwner", "gestionEntite:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "BatimentOwner", "EntiteOwner", "gestionEntite:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read", "entiteSon", "BatimentOwner", "EntiteOwner", "gestionEntite:read"})
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Contact::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read", "entiteSon", "gestionEntite:read"})
     */
    private $contact;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read"})
     */
    private $isBloked = false;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="entrepriseSecurite")
     */
    private $agents;

    /**
     * @ORM\OneToMany(targetEntity=ParamTypesDemandes::class, mappedBy="entite", orphanRemoval=true)
     */
    private $paramTypesDemandes;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"entites:read", "entites:write"})
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity=Incident::class, mappedBy="entite")
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $incidents;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEntite::class, inversedBy="entites")
     * @Groups({"entites:read", "employes:read", "EntiteOwner"})
     */
    private $typeEntite;

    /**
     * @ORM\ManyToMany(targetEntity=Admin::class, inversedBy="entites", cascade={"persist","remove"})
     * @Groups({"entites:read", "entites:write", "admin:read", "employes:read"})
     */
    private $admins;

    /**
     * @ORM\ManyToMany(targetEntity=Gestionnaire::class, inversedBy="entites")
     * @Groups({"entites:read", "admin:read", "employes:read"})
     */
    private $gestionnaires;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"entiteSon", "entites:write", "entites:read", "gestionEntite:read"})
     */
    private $isEntreprise = false;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="son")
     */
    private $father;

    /**
     * @ORM\OneToMany(targetEntity=Batiment::class, mappedBy="entite")
     * @Groups({"entites:read"})
     */
    private $batiments;

    /**
     * @ORM\OneToOne(targetEntity=Proprietaire::class, mappedBy="entite", cascade={"persist", "remove"})
     */
    private $proprietaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "BatimentOwner", "EntiteOwner", "gestionEntite:read"})
     */
    private $type;

    public function __construct()
    {
        $this->gestionnaires = new ArrayCollection();
        $this->agents = new ArrayCollection();
        $this->paramTypesDemandes = new ArrayCollection();
        $this->paramTypesAgents = new ArrayCollection();
        $this->createdAt = new DateTime('now');
        $this->typeIncidents = new ArrayCollection();
        $this->incidents = new ArrayCollection();
        $this->admins = new ArrayCollection();
        $this->son = new ArrayCollection();
        $this->batiments = new ArrayCollection();
        if ($this->isEntreprise == false) {
            $this->type = 'COLLECTIVITE';
        }if ($this->isEntreprise == true) {
            $this->type = 'ENTREPRISE';
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(Contact $contact): self
    {
        $this->contact = $contact;

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

    /**
     * @return Collection<int, Agent>
     */
    public function getAgents(): Collection
    {
        return $this->agents;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->agents->contains($agent)) {
            $this->agents[] = $agent;
            $agent->setEntrepriseSecurite($this);
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->agents->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getEntrepriseSecurite() === $this) {
                $agent->setEntrepriseSecurite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ParamTypesDemandes>
     */
    public function getParamTypesDemandes(): Collection
    {
        return $this->paramTypesDemandes;
    }

    public function addParamTypesDemande(ParamTypesDemandes $paramTypesDemande): self
    {
        if (!$this->paramTypesDemandes->contains($paramTypesDemande)) {
            $this->paramTypesDemandes[] = $paramTypesDemande;
            $paramTypesDemande->setEntite($this);
        }

        return $this;
    }

    public function removeParamTypesDemande(ParamTypesDemandes $paramTypesDemande): self
    {
        if ($this->paramTypesDemandes->removeElement($paramTypesDemande)) {
            // set the owning side to null (unless already changed)
            if ($paramTypesDemande->getEntite() === $this) {
                $paramTypesDemande->setEntite(null);
            }
        }

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

    /**
     * @return Collection<int, Incident>
     */
    public function getIncidents(): Collection
    {
        return $this->incidents;
    }

    public function addIncident(Incident $incident): self
    {
        if (!$this->incidents->contains($incident)) {
            $this->incidents[] = $incident;
            $incident->setEntite($this);
        }

        return $this;
    }

    public function removeIncident(Incident $incident): self
    {
        if ($this->incidents->removeElement($incident)) {
            // set the owning side to null (unless already changed)
            if ($incident->getEntite() === $this) {
                $incident->setEntite(null);
            }
        }

        return $this;
    }

    public function getTypeEntite(): ?TypeEntite
    {
        return $this->typeEntite;
    }

    public function setTypeEntite(?TypeEntite $typeEntite): self
    {
        $this->typeEntite = $typeEntite;

        return $this;
    }

    /**
     * @return Collection<int, Admin>
     */
    public function getAdmins(): Collection
    {
        return $this->admins;
    }

    public function addAdmin(Admin $admin): self
    {
        if (!$this->admins->contains($admin)) {
            $this->admins[] = $admin;
        }

        return $this;
    }

    public function removeAdmin(Admin $admin): self
    {
        $this->admins->removeElement($admin);

        return $this;
    }

    /**
     * @return Collection<int, Gestionnaire>
     */
    public function getGestionnaires(): Collection
    {
        return $this->gestionnaires;
    }

    public function addGestionnaire(Gestionnaire $gestionnaire): self
    {
        if (!$this->gestionnaires->contains($gestionnaire)) {
            $this->gestionnaires[] = $gestionnaire;
        }

        return $this;
    }

    public function removeGestionnaire(Gestionnaire $gestionnaire): self
    {
        $this->gestionnaires->removeElement($gestionnaire);

        return $this;
    }

    public function getIsEntreprise(): ?bool
    {
        return $this->isEntreprise;
    }

    public function setIsEntreprise(bool $isEntreprise): self
    {
        $this->isEntreprise = $isEntreprise;

        return $this;
    }

    public function getFather(): ?self
    {
        return $this->father;
    }

    public function setFather(?self $father): self
    {
        $this->father = $father;

        return $this;
    }

    /**
     * @return Collection<int, Batiment>
     */
    public function getBatiments(): Collection
    {
        return $this->batiments;
    }

    public function addBatiment(Batiment $batiment): self
    {
        if (!$this->batiments->contains($batiment)) {
            $this->batiments[] = $batiment;
            $batiment->setEntite($this);
        }

        return $this;
    }

    public function removeBatiment(Batiment $batiment): self
    {
        if ($this->batiments->removeElement($batiment)) {
            // set the owning side to null (unless already changed)
            if ($batiment->getEntite() === $this) {
                $batiment->setEntite(null);
            }
        }

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
            $this->proprietaire->setEntite(null);
        }

        // set the owning side of the relation if necessary
        if ($proprietaire !== null && $proprietaire->getEntite() !== $this) {
            $proprietaire->setEntite($this);
        }

        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
