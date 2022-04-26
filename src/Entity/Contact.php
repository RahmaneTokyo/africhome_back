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
     * @Groups({"superadmin:read","admin:read","superadmin:write","admin:write", "gestionnaire:read","gestionnaire:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read"})
     */
    private $latitude;

    /**
     * @ORM\Column(type="string")
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read"})
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read","entites:write", "employes:read", "employes:read", "adminEntite:read"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read","entites:write", "employes:read", "adminEntite:read"})
     */
    private $ville;

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
}
