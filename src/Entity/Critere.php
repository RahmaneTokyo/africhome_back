<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CritereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CritereRepository::class)
 */
class Critere
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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"batiment:read"})
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = true;

    /**
     * @ORM\OneToMany(targetEntity=BatimentCritere::class, mappedBy="critere")
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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
            $batimentCritere->setCritere($this);
        }

        return $this;
    }

    public function removeBatimentCritere(BatimentCritere $batimentCritere): self
    {
        if ($this->batimentCriteres->removeElement($batimentCritere)) {
            // set the owning side to null (unless already changed)
            if ($batimentCritere->getCritere() === $this) {
                $batimentCritere->setCritere(null);
            }
        }

        return $this;
    }
}
