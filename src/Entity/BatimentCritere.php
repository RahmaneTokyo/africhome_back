<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BatimentCritereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BatimentCritereRepository::class)
 */
class BatimentCritere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Batiment::class, inversedBy="batimentCriteres")
     */
    private $batiment;

    /**
     * @ORM\Column(type="date")
     * @Groups({"batiment:read"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"batiment:read"})
     */
    private $dateModif;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $poids;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"batiment:read"})
     */
    private $active = true;

    /**
     * @ORM\ManyToOne(targetEntity=Critere::class, inversedBy="batimentCriteres")
     * @Groups({"batiment:read"})
     */
    private $critere;

    /**
     * @ORM\ManyToOne(targetEntity=Montant::class, inversedBy="batimentCriteres")
     * @Groups({"batiment:read"})
     */
    private $montant;

    public function __construct()
    {
        $this->critere = new ArrayCollection();
        $this->montant = new ArrayCollection();
    }

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
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

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

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

    public function getCritere(): ?Critere
    {
        return $this->critere;
    }

    public function setCritere(?Critere $critere): self
    {
        $this->critere = $critere;

        return $this;
    }

    public function getMontant(): ?Montant
    {
        return $this->montant;
    }

    public function setMontant(?Montant $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
