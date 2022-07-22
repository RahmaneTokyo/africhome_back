<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 * @ApiResource(
 *     normalizationContext={"groups"={"activites"}},
 *     denormalizationContext={"groups"={"activiteWrite"}},
 *     collectionOperations={
 *          "get"={"path"="/activites"},
 *          "post"={"path"="/activites", "security"="is_granted('ROLE_SUPERADMIN')", "securityMessage"="Access denied"}
 *     },
 *     itemOperations={
 *          "get"={"path"="/activites/{id}"}
 *     }
 * )
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"activites"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"activites", "activiteWrite"})
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"activites", "activiteWrite"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"activites", "activiteWrite"})
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     * @Groups({"activites"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"activites"})
     */
    private $dateModification;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"activites"})
     */
    private $isActive = true;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="activites")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"activites", "activiteWrite"})
     */
    private $auteur;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $media;

    public function __construct() {
        $this->dateCreation = new \DateTime('now');
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(?\DateTimeInterface $dateModification): self
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media): self
    {
        $this->media = $media;

        return $this;
    }
}
