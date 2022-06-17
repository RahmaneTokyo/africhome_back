<?php

namespace App\Entity;

use App\Enums\EtatIncidentEnum;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\IncidentRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=IncidentRepository::class)
 */
class Incident
{
    const INCIDENT_TYPE = [EtatIncidentEnum::NOUVEAU,EtatIncidentEnum::ENCOURS, EtatIncidentEnum::PLANIFIE, EtatIncidentEnum::TRAITE, EtatIncidentEnum::CLOTURE];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $dateIncident;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\Choice(choices=Incident::INCIDENT_TYPE, message = "Choissez un etat valide")
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $etatIncident = 1;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="incidents")
     */
    private $entite;

    /**
     * @ORM\ManyToOne(targetEntity=TypeIncident::class, inversedBy="incidents")
     */
    private $typeIncident;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"adminEntite:read", "gestionEntite:read"})
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class, inversedBy="incidents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $localisation;

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

    public function getEtatIncident(): ?int
    {
        return $this->etatIncident;
    }

    public function setEtatIncident(int $etatIncident): self
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

    public function getLocalisation(): ?Localisation
    {
        return $this->localisation;
    }

    public function setLocalisation(?Localisation $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }
}
