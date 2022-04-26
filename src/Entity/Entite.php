<?php

namespace App\Entity;

use App\Entity\Entite;
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
     * @Groups({"entites:read", "admin:read","gestionnaire:read", "employes:read", "adminEntite:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read"})
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"entites:read"})
     * @Assert\Choice(choices=Entite::ENTITES_TYPE, message = "Choissez un type d'entité valide")
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=Contact::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"entites:read", "entites:write", "employes:read", "adminEntite:read"})
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
     */
    private $incidents;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEntite::class, inversedBy="entites")
     * @Groups({"entites:read", "employes:read"})
     */
    private $typeEntite;

    /**
     * @ORM\ManyToMany(targetEntity=Admin::class, inversedBy="entites", cascade={"persist","remove"})
     * @Groups({"entites:read", "admin:read", "employes:read"})
     *
     */
    private $admins;

    /**
     * @ORM\ManyToMany(targetEntity=Gestionnaire::class, inversedBy="entites")
     * @Groups({"entites:read", "admin:read", "employes:read"})
     */
    private $gestionnaires;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isEntreprise;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="son")
     */
    private $father;

    /**
     * @ORM\OneToMany(targetEntity=Entite::class, mappedBy="father")
     */
    private $son;

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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        // if((in_array($type,Entite::ENTITES_TYPE))){
            $this->type = $type;
            return $this;
        // }
        // throw new \Exception("Le type d'entité n'est pas valide");
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
     * @return Collection<int, self>
     */
    public function getSon(): Collection
    {
        return $this->son;
    }

    public function addSon(self $son): self
    {
        if (!$this->son->contains($son)) {
            $this->son[] = $son;
            $son->setFather($this);
        }

        return $this;
    }

    public function removeSon(self $son): self
    {
        if ($this->son->removeElement($son)) {
            // set the owning side to null (unless already changed)
            if ($son->getFather() === $this) {
                $son->setFather(null);
            }
        }

        return $this;
    }
}
