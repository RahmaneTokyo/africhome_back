<?php

namespace App\Entity;

use App\Entity\Batiment;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BatimentOwnerRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=BatimentOwnerRepository::class)
 */
class BatimentOwner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"UserOwner","EntiteOwner", "user:read"})
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Proprietaire::class, mappedBy="batimentOwner", orphanRemoval=true, cascade={"persist"})
     */
    private $proprietaires;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateVente;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"EntiteOwner", "UserOwner"})
     */
    private $active = true;

    /**
     * @ORM\ManyToOne(targetEntity=Batiment::class, inversedBy="batimentOwners")
     * @Groups({"user:read"})
     */
    private $batiment;

    public function __construct()
    {
        $this->proprietaires = new ArrayCollection();
        $this->batiments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Proprietaire>
     */
    public function getProprietaires(): Collection
    {
        return $this->proprietaires;
    }

    public function addProprietaire(Proprietaire $proprietaire): self
    {
        if (!$this->proprietaires->contains($proprietaire)) {
            $this->proprietaires[] = $proprietaire;
            $proprietaire->setBatimentOwner($this);
        }

        return $this;
    }

    public function removeProprietaire(Proprietaire $proprietaire): self
    {
        if ($this->proprietaires->removeElement($proprietaire)) {
            // set the owning side to null (unless already changed)
            if ($proprietaire->getBatimentOwner() === $this) {
                $proprietaire->setBatimentOwner(null);
            }
        }

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

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateVente(): ?\DateTimeInterface
    {
        return $this->dateVente;
    }

    public function setDateVente(?\DateTimeInterface $dateVente): self
    {
        $this->dateVente = $dateVente;

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

    public function getBatiment(): ?Batiment
    {
        return $this->batiment;
    }

    public function setBatiment(?Batiment $batiment): self
    {
        $this->batiment = $batiment;

        return $this;
    }
}
