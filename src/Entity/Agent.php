<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="agent", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=TypeAgent::class, inversedBy="agents")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="agents")
     */
    private $entrepriseSecurite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroCarteProf;

    public function __construct()
    {
        $this->type = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, TypeAgent>
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(TypeAgent $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
        }

        return $this;
    }

    public function removeType(TypeAgent $type): self
    {
        $this->type->removeElement($type);

        return $this;
    }

    public function getEntrepriseSecurite(): ?Entite
    {
        return $this->entrepriseSecurite;
    }

    public function setEntrepriseSecurite(?Entite $entrepriseSecurite): self
    {
        $this->entrepriseSecurite = $entrepriseSecurite;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNumeroCarteProf(): ?string
    {
        return $this->numeroCarteProf;
    }

    public function setNumeroCarteProf(?string $numeroCarteProf): self
    {
        $this->numeroCarteProf = $numeroCarteProf;

        return $this;
    }
}
