<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MontantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MontantRepository::class)
 */
class Montant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"batiment:read"})
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $valeur;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"batiment:read"})
     */
    private $devise;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = true;

    /**
     * @ORM\OneToMany(targetEntity=BatimentCritere::class, mappedBy="montant")
     *
     */
    private $batimentCriteres;

    public function __construct()
    {
        $this->batimentCriteres = new ArrayCollection();
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

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDevise(): ?int
    {
        return $this->devise;
    }

    public function setDevise(int $devise): self
    {
        $this->devise = $devise;

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
            $batimentCritere->setMontant($this);
        }

        return $this;
    }

    public function removeBatimentCritere(BatimentCritere $batimentCritere): self
    {
        if ($this->batimentCriteres->removeElement($batimentCritere)) {
            // set the owning side to null (unless already changed)
            if ($batimentCritere->getMontant() === $this) {
                $batimentCritere->setMontant(null);
            }
        }

        return $this;
    }
}
