<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Entite;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProprietaireRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProprietaireRepository::class)
 */
class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"EntiteOwner", "UserOwner", "user:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="proprietaire", cascade={"persist", "remove"})
     * @Groups({"UserOwner"})
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=Entite::class, inversedBy="proprietaire", cascade={"persist", "remove"})
     * @Groups({"EntiteOwner"})
     */
    private $entite;

    /**
     * @ORM\ManyToOne(targetEntity=BatimentOwner::class, inversedBy="proprietaires")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"EntiteOwner", "UserOwner", "user:read"})
     */
    private $batimentOwner;

    public function __construct()
    {}

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEntite(): ?Entite
    {
        return $this->entite;
    }

    public function setEntite(?Entite $entite): self
    {
        $this->entite = $entite;

        return $this;
    }

    public function getBatimentOwner(): ?BatimentOwner
    {
        return $this->batimentOwner;
    }

    public function setBatimentOwner(?BatimentOwner $batimentOwner): self
    {
        $this->batimentOwner = $batimentOwner;

        return $this;
    }
}
