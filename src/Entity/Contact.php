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
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write", "gestionnaire:read","gestionnaire:write", "BatimentGest"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read", "entiteSon", "BatimentGest", "batiment:read", "gestionEntite:read"})
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read", "entiteSon", "BatimentGest", "batiment:read", "gestionEntite:read"})
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read","entites:write", "employes:read", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "gestionEntite:read"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "gestionEntite:read"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read", "entiteSon", "batiment:read", "gestionEntite:read"})
     */
    private $ville;

    /**
     * @ORM\OneToOne(targetEntity=Batiment::class, mappedBy="contact", cascade={"persist", "remove"})
     */
    private $batiment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getBatiment(): ?Batiment
    {
        return $this->batiment;
    }

    public function setBatiment(Batiment $batiment): self
    {
        // set the owning side of the relation if necessary
        if ($batiment->getContact() !== $this) {
            $batiment->setContact($this);
        }

        $this->batiment = $batiment;

        return $this;
    }
}
