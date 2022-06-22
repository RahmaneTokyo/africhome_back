<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BatimentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=BatimentRepository::class)
 * @ApiResource(
 *     normalizationContext={"groups"={"batiment:read"}},
 *     denormalizationContext={"groups"={"batiment:write"}}
 * )
 */
class Batiment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read", "BatimentGest"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read", "batiment:write","BatimentGest", "entites:read"})
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"batiment:read", "batiment:write", "BatimentGest", "entites:read"})
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Contact::class, inversedBy="batiment", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Groups({"batiment:read", "BatimentGest", "entites:read"})
     */
    private $contact;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class, inversedBy="batiments")
     * @Groups({"batiment:read", "batiment:write", "BatimentGest"})
     */
    private $localisation;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="batiments")
     * @Groups({"batiment:read", "batiment:write", "BatimentGest"})
     */
    private $entite;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read", "batiment:write", "BatimentGest", "entites:read"})
     */
    private $numeroParcelle;

    /**
     * @ORM\ManyToOne(targetEntity=TypeBatiment::class, inversedBy="batiments")
     * @Groups({"batiment:read", "batiment:write", "BatimentGest"})
     */
    private $typeBatiment;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read", "batiment:write", "BatimentGest", "entites:read"})
     */
    private $titreFoncier;

    /**
     * @ORM\Column(type="date")
     * @Groups({"batiment:read", "batiment:write", "BatimentGest", "entites:read"})
     */
    private $dateConstruction;

    /**
     * @ORM\OneToMany(targetEntity=BatimentOwner::class, mappedBy="batiment")
     */
    private $batimentOwners;

    /**
     * @ORM\OneToMany(targetEntity=BatimentCritere::class, mappedBy="batiment")
     * @Groups({"batiment:read"})
     */
    private $batimentCriteres;

    /**
     * @ORM\OneToMany(targetEntity=Taxe::class, mappedBy="batiment")
     */
    private $taxes;

    public function __construct()
    {
        $this->batimentOwners = new ArrayCollection();
        $this->batimentCriteres = new ArrayCollection();
        $this->taxes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getLocalisation(): ?Localisation
    {
        return $this->localisation;
    }

    public function setLocalisation(?Localisation $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getEntite(): ?Entite
    {
        return $this->entite;
    }

    public function setEntite(?Entite $entite): self
    {
        $this->entite = $entite;

        return $this;
    }

    public function getNumeroParcelle(): ?string
    {
        return $this->numeroParcelle;
    }

    public function setNumeroParcelle(string $numeroParcelle): self
    {
        $this->numeroParcelle = $numeroParcelle;

        return $this;
    }

    public function getTypeBatiment(): ?TypeBatiment
    {
        return $this->typeBatiment;
    }

    public function setTypeBatiment(?TypeBatiment $typeBatiment): self
    {
        $this->typeBatiment = $typeBatiment;

        return $this;
    }

    public function getTitreFoncier(): ?string
    {
        return $this->titreFoncier;
    }

    public function setTitreFoncier(string $titreFoncier): self
    {
        $this->titreFoncier = $titreFoncier;

        return $this;
    }

    public function getDateConstruction(): ?\DateTimeInterface
    {
        return $this->dateConstruction;
    }

    public function setDateConstruction(\DateTimeInterface $dateConstruction): self
    {
        $this->dateConstruction = $dateConstruction;

        return $this;
    }

    /**
     * @return Collection<int, BatimentOwner>
     */
    public function getBatimentOwners(): Collection
    {
        return $this->batimentOwners;
    }

    public function addBatimentOwner(BatimentOwner $batimentOwner): self
    {
        if (!$this->batimentOwners->contains($batimentOwner)) {
            $this->batimentOwners[] = $batimentOwner;
            $batimentOwner->setBatiment($this);
        }

        return $this;
    }

    public function removeBatimentOwner(BatimentOwner $batimentOwner): self
    {
        if ($this->batimentOwners->removeElement($batimentOwner)) {
            // set the owning side to null (unless already changed)
            if ($batimentOwner->getBatiment() === $this) {
                $batimentOwner->setBatiment(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BatimentCritere>
     */
    public function getBatimentCriteres(): Collection
    {
        return $this->batimentCriteres;
    }

    public function addBatimentCritere(BatimentCritere $batimentCritere): self
    {
        if (!$this->batimentCriteres->contains($batimentCritere)) {
            $this->batimentCriteres[] = $batimentCritere;
            $batimentCritere->setBatiment($this);
        }

        return $this;
    }

    public function removeBatimentCritere(BatimentCritere $batimentCritere): self
    {
        if ($this->batimentCriteres->removeElement($batimentCritere)) {
            // set the owning side to null (unless already changed)
            if ($batimentCritere->getBatiment() === $this) {
                $batimentCritere->setBatiment(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Taxe>
     */
    public function getTaxes(): Collection
    {
        return $this->taxes;
    }

    public function addTax(Taxe $tax): self
    {
        if (!$this->taxes->contains($tax)) {
            $this->taxes[] = $tax;
            $tax->setBatiment($this);
        }

        return $this;
    }

    public function removeTax(Taxe $tax): self
    {
        if ($this->taxes->removeElement($tax)) {
            // set the owning side to null (unless already changed)
            if ($tax->getBatiment() === $this) {
                $tax->setBatiment(null);
            }
        }

        return $this;
    }
}
