<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TaxeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TaxeRepository::class)
 * @ApiResource()
 */
class Taxe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read", "user:read"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Batiment::class, inversedBy="taxes")
     */
    private $batiment;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read", "user:read"})
     */
    private $montant;

    /**
     * @ORM\Column(type="date")
     * @Groups({"batiment:read", "user:read"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"batiment:read", "user:read"})
     */
    private $dateModif;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"batiment:read", "user:read"})
     */
    private $active = true;

    /**
     * @ORM\OneToOne(targetEntity=Paiement::class, mappedBy="taxe", cascade={"persist", "remove"})
     */
    private $paiement;

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

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(?Paiement $paiement): self
    {
        // unset the owning side of the relation if necessary
        if ($paiement === null && $this->paiement !== null) {
            $this->paiement->setTaxe(null);
        }

        // set the owning side of the relation if necessary
        if ($paiement !== null && $paiement->getTaxe() !== $this) {
            $paiement->setTaxe($this);
        }

        $this->paiement = $paiement;

        return $this;
    }
}
