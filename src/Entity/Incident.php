<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\IncidentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=IncidentRepository::class)
 */
class Incident
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateIncident;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etatIncident;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="incidents")
     */
    private $entite;

    /**
     * @ORM\ManyToOne(targetEntity=TypeIncident::class, inversedBy="incidents")
     */
    private $typeIncident;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateIncident(): ?\DateTimeInterface
    {
        return $this->dateIncident;
    }

    public function setDateIncident(\DateTimeInterface $dateIncident): self
    {
        $this->dateIncident = $dateIncident;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getEtatIncident(): ?string
    {
        return $this->etatIncident;
    }

    public function setEtatIncident(string $etatIncident): self
    {
        $this->etatIncident = $etatIncident;

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

    public function getTypeIncident(): ?TypeIncident
    {
        return $this->typeIncident;
    }

    public function setTypeIncident(?TypeIncident $typeIncident): self
    {
        $this->typeIncident = $typeIncident;

        return $this;
    }
}
