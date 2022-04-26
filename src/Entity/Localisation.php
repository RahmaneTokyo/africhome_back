<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LocalisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"local:read"}},
 *     itemOperations={
 *          "get"={"path"="/localisations/{id}"}
 *     }
 * )
 * @ORM\Entity(repositoryClass=LocalisationRepository::class)
 * @ApiFilter(SearchFilter::class, properties={"niveau": "exact"})
 */
class Localisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"local:read","localByType:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"local:read","localByType:read"})
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=TypeLocalisation::class, inversedBy="localisations")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"local:read"})
     */
    private $typeLocalisation;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"local:read","localByType:read"})
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class)
     * @Groups({"local:read","localByType:read"})
     */
    private $father;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"local:read","localByType:read"})
     */
    private $zipCode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypeLocalisation(): ?TypeLocalisation
    {
        return $this->typeLocalisation;
    }

    public function setTypeLocalisation(?TypeLocalisation $typeLocalisation): self
    {
        $this->typeLocalisation = $typeLocalisation;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getFather(): ?self
    {
        return $this->father;
    }

    public function setFather(?self $father): self
    {
        $this->father = $father;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
