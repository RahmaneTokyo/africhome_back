<?php

namespace App\Entity;

use App\Entity\Entite;
use App\Entity\Contact;
use App\Enums\TypeEntiteEnum;
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
     * @Groups({"entites:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read", "entites:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write"})
     */
    private $numeroEnregistrement;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"entites:read", "entites:write"})
     * @Assert\Choice(choices=Entite::ENTITES_TYPE, message = "Choissez un type d'entité valide")
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=Contact::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"entites:read", "entites:write"})
     */
    private $contact;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read", "entites:write"})
     */
    private $archived;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read", "entites:write"})
     */
    private $isBloked;

    /**
     * @ORM\OneToMany(targetEntity=Admin::class, mappedBy="entite")
     * @Groups({"entites:read"})
     */
    private $admins;

    /**
     * @ORM\OneToMany(targetEntity=Gestionnaire::class, mappedBy="entite")
     * @Groups({"entites:read"})
     */
    private $gestionnaires;

    /**
     * @ORM\OneToMany(targetEntity=Formateur::class, mappedBy="entite")
     */
    private $formateurs;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="entrepriseSecurite")
     */
    private $agents;

    /**
     * @ORM\OneToMany(targetEntity=ParamTypesDemandes::class, mappedBy="entite", orphanRemoval=true)
     */
    private $paramTypesDemandes;

    /**
     * @ORM\OneToMany(targetEntity=ParamTypesAgents::class, mappedBy="entite", orphanRemoval=true)
     */
    private $paramTypesAgents;

    public function __construct()
    {
        $this->admins = new ArrayCollection();
        $this->gestionnaires = new ArrayCollection();
        $this->formateurs = new ArrayCollection();
        $this->agents = new ArrayCollection();
        $this->paramTypesDemandes = new ArrayCollection();
        $this->paramTypesAgents = new ArrayCollection();
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

    public function getNumeroEnregistrement(): ?string
    {
        return $this->numeroEnregistrement;
    }

    public function setNumeroEnregistrement(?string $numeroEnregistrement): self
    {
        $this->numeroEnregistrement = $numeroEnregistrement;

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

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

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
            $admin->setEntite($this);
        }

        return $this;
    }

    public function removeAdmin(Admin $admin): self
    {
        if ($this->admins->removeElement($admin)) {
            // set the owning side to null (unless already changed)
            if ($admin->getEntite() === $this) {
                $admin->setEntite(null);
            }
        }

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
            $gestionnaire->setEntite($this);
        }

        return $this;
    }

    public function removeGestionnaire(Gestionnaire $gestionnaire): self
    {
        if ($this->gestionnaires->removeElement($gestionnaire)) {
            // set the owning side to null (unless already changed)
            if ($gestionnaire->getEntite() === $this) {
                $gestionnaire->setEntite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Formateur>
     */
    public function getFormateurs(): Collection
    {
        return $this->formateurs;
    }

    public function addFormateur(Formateur $formateur): self
    {
        if (!$this->formateurs->contains($formateur)) {
            $this->formateurs[] = $formateur;
            $formateur->setEntite($this);
        }

        return $this;
    }

    public function removeFormateur(Formateur $formateur): self
    {
        if ($this->formateurs->removeElement($formateur)) {
            // set the owning side to null (unless already changed)
            if ($formateur->getEntite() === $this) {
                $formateur->setEntite(null);
            }
        }

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

    /**
     * @return Collection<int, ParamTypesAgents>
     */
    public function getParamTypesAgents(): Collection
    {
        return $this->paramTypesAgents;
    }

    public function addParamTypesAgent(ParamTypesAgents $paramTypesAgent): self
    {
        if (!$this->paramTypesAgents->contains($paramTypesAgent)) {
            $this->paramTypesAgents[] = $paramTypesAgent;
            $paramTypesAgent->setEntite($this);
        }

        return $this;
    }

    public function removeParamTypesAgent(ParamTypesAgents $paramTypesAgent): self
    {
        if ($this->paramTypesAgents->removeElement($paramTypesAgent)) {
            // set the owning side to null (unless already changed)
            if ($paramTypesAgent->getEntite() === $this) {
                $paramTypesAgent->setEntite(null);
            }
        }

        return $this;
    }
}
