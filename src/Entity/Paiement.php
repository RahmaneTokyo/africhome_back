<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 * @ApiResource()
 */
class Paiement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Batiment::class, inversedBy="paiements")
     */
    private $batiment;

    /**
     * @ORM\OneToOne(targetEntity=Taxe::class, inversedBy="paiement", cascade={"persist", "remove"})
     * @Groups({"batiment:read"})
     */
    private $taxe;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paiements")
     * @Groups({"batiment:read"})
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $Montant;

    /**
     * @ORM\Column(type="date")
     * @Groups({"batiment:read"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read"})
     */
    private $paiementType;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read"})
     */
    private $paiementMean;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read"})
     */
    private $paiementCode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read"})
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numCheque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBatiment(): ?Batiment
    {
        return $this->batiment;
    }

    public function setBatiment(?Batiment $batiment): self
    {
        $this->batiment = $batiment;

        return $this;
    }

    public function getTaxe(): ?Taxe
    {
        return $this->taxe;
    }

    public function setTaxe(?Taxe $taxe): self
    {
        $this->taxe = $taxe;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->Montant;
    }

    public function setMontant(int $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getPaiementType(): ?string
    {
        return $this->paiementType;
    }

    public function setPaiementType(string $paiementType): self
    {
        $this->paiementType = $paiementType;

        return $this;
    }

    public function getPaiementMean(): ?string
    {
        return $this->paiementMean;
    }

    public function setPaiementMean(string $paiementMean): self
    {
        $this->paiementMean = $paiementMean;

        return $this;
    }

    public function getPaiementCode(): ?string
    {
        return $this->paiementCode;
    }

    public function setPaiementCode(string $paiementCode): self
    {
        $this->paiementCode = $paiementCode;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getNumCheque(): ?string
    {
        return $this->numCheque;
    }

    public function setNumCheque(?string $numCheque): self
    {
        $this->numCheque = $numCheque;

        return $this;
    }
}
