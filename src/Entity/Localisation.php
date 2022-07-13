<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LocalisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"local:read"}},
 *     itemOperations={
 *          "get"={"path"="/localisations/{id}"}
 *     }
 * )
 * @ORM\Entity(repositoryClass=LocalisationRepository::class)
 * @ApiFilter(SearchFilter::class, properties={"niveau": "exact"})
 */
class Localisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"local:read","localByType:read", "BatimentGest", "batiment:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"local:read","localByType:read", "BatimentGest", "batiment:read", "user:read"})
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=TypeLocalisation::class, inversedBy="localisations")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"local:read"})
     */
    private $typeLocalisation;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"local:read","localByType:read"})
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class)
     * @Groups({"local:read","localByType:read"})
     */
    private $father;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"local:read","localByType:read"})
     */
    private $zipCode;

    /**
     * @ORM\OneToMany(targetEntity=Batiment::class, mappedBy="localisation")
     */
    private $batiments;

    /**
     * @ORM\OneToMany(targetEntity=Incident::class, mappedBy="localisation", orphanRemoval=true)
     */
    private $incidents;

    public function __construct()
    {
        $this->batiments = new ArrayCollection();
        $this->incidents = new ArrayCollection();
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

    public function getTypeLocalisation(): ?TypeLocalisation
    {
        return $this->typeLocalisation;
    }

    public function setTypeLocalisation(?TypeLocalisation $typeLocalisation): self
    {
        $this->typeLocalisation = $typeLocalisation;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

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

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

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
            $batiment->setLocalisation($this);
        }

        return $this;
    }

    public function removeBatiment(Batiment $batiment): self
    {
        if ($this->batiments->removeElement($batiment)) {
            // set the owning side to null (unless already changed)
            if ($batiment->getLocalisation() === $this) {
                $batiment->setLocalisation(null);
            }
        }

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
            $incident->setLocalisation($this);
        }

        return $this;
    }

    public function removeIncident(Incident $incident): self
    {
        if ($this->incidents->removeElement($incident)) {
            // set the owning side to null (unless already changed)
            if ($incident->getLocalisation() === $this) {
                $incident->setLocalisation(null);
            }
        }

        return $this;
    }
}
