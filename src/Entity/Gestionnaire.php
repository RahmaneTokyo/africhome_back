<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Enums\TypeGestionnaireEnum;
use App\Repository\GestionnaireRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(
 *      normalizationContext={"groups"={"gestionnaire:read"}},
 *      denormalizationContext={"groups"={"gestionnaire:write"}},
 * )
 * @ORM\Entity(repositoryClass=GestionnaireRepository::class)
 */
class Gestionnaire
{
    const GESTIONNAIRE_TYPE = [TypeGestionnaireEnum::DIRIGEANT,TypeGestionnaireEnum::EMPLOYE, TypeGestionnaireEnum::INVITE, TypeGestionnaireEnum::AUTRE];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"gestionnaire:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="gestionnaire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"gestionnaire:write", "gestionnaire:read", "employe_entite", "gestionnaire:read", "employes:read"})
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"gestionnaire:read", "employe_entite"})
     * @Assert\Choice(choices=Gestionnaire::GESTIONNAIRE_TYPE, message = "Choissez un type de gestionnaire valide")
     */
    private $typeGestionnaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"gestionnaire:read", "gestionnaire:write", "employes:read"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"gestionnaire:read", "gestionnaire:write", "employes:read"})
     */
    private $numeroCarteProf;

    /**
     * @ORM\ManyToMany(targetEntity=Entite::class, mappedBy="gestionnaires")
     * @Groups({"gestionnaire:read", "gestionnaire:write", "employes:read"})
     */
    private $entites;

    public function __construct()
    {
        $this->entites = new ArrayCollection();
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

    public function getTypeGestionnaire(): ?int
    {
        return $this->typeGestionnaire;
    }

    public function setTypeGestionnaire(int $typeGestionnaire): self
    {
        $this->typeGestionnaire = $typeGestionnaire;

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

    /**
     * @return Collection<int, Entite>
     */
    public function getEntites(): Collection
    {
        return $this->entites;
    }

    public function addEntite(Entite $entite): self
    {
        if (!$this->entites->contains($entite)) {
            $this->entites[] = $entite;
            $entite->addGestionnaire($this);
        }

        return $this;
    }

    public function removeEntite(Entite $entite): self
    {
        if ($this->entites->removeElement($entite)) {
            $entite->removeGestionnaire($this);
        }

        return $this;
    }
}
