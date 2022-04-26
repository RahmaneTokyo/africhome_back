<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ContactRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"entites:read"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write","gestionnaire:read","gestionnaire:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write","gestionnaire:read","gestionnaire:write"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read", "entites:write"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write","gestionnaire:read","gestionnaire:write"})
     */
    private $boitePostale;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="contacts", cascade={"persist"})
     * @Groups({"entites:read","entites:write"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write","gestionnaire:read","gestionnaire:write"})
     */
    private $ville;

    /**
     * @ORM\OneToOne(targetEntity=Coordonnees::class, cascade={"persist", "remove"})
     * @Groups({"entites:read", "entites:write"})
     * @Groups({"superadmin:write","admin:write","gestionnaire:write"})
     */
    private $coordonnees;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read", "entites:write"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write"})
     */
    private $coordonneesGiven;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read", "entites:write"})
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write","gestionnaire:read","gestionnaire:write"})
     */
    private $askForUpdateCoordoonnees;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="contact", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getBoitePostale(): ?string
    {
        return $this->boitePostale;
    }

    public function setBoitePostale(?string $boitePostale): self
    {
        $this->boitePostale = $boitePostale;

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCoordonnees(): ?Coordonnees
    {
        return $this->coordonnees;
    }

    public function setCoordonnees(?Coordonnees $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    public function getCoordonneesGiven(): ?bool
    {
        return $this->coordonneesGiven;
    }

    public function setCoordonneesGiven(?bool $coordonneesGiven): self
    {
        $this->coordonneesGiven = $coordonneesGiven;

        return $this;
    }

    public function getAskForUpdateCoordoonnees(): ?bool
    {
        return $this->askForUpdateCoordoonnees;
    }

    public function setAskForUpdateCoordoonnees(?bool $askForUpdateCoordoonnees): self
    {
        $this->askForUpdateCoordoonnees = $askForUpdateCoordoonnees;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setContact(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getContact() !== $this) {
            $user->setContact($this);
        }

        $this->user = $user;

        return $this;
    }
}
