<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Enums\TypeGestionnaireEnum;
use App\Repository\GestionnaireRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(
 *      normalizationContext={"groups"={"gestionnaire:read"}},
 *      denormalizationContext={"groups"={"gestionnaire:write"}},
 * )
 * @ORM\Entity(repositoryClass=GestionnaireRepository::class)
 */
class Gestionnaire
{
    const GESTIONNAIRE_TYPE = [TypeGestionnaireEnum::GESTIONNAIRE_DEPARTEMENT,TypeGestionnaireEnum::GESTIONNAIRE_ORGANISME, TypeGestionnaireEnum::GESTIONNAIRE_ENTREPRISE];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"gestionnaire:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="gestionnaire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"gestionnaire:write", "gestionnaire:read"})
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"gestionnaire:read"})
     * @Assert\Choice(choices=Gestionnaire::GESTIONNAIRE_TYPE, message = "Choissez un type de gestionnaire valide")
     */
    private $typeGestionnaire;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="gestionnaires")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"gestionnaire:read", "gestionnaire:write"})
     */
    private $entite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"gestionnaire:read", "gestionnaire:write"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"gestionnaire:read", "gestionnaire:write"})
     */
    private $numeroCarteProf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTypeGestionnaire(): ?int
    {
        return $this->typeGestionnaire;
    }

    public function setTypeGestionnaire(int $typeGestionnaire): self
    {
        $this->typeGestionnaire = $typeGestionnaire;

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

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNumeroCarteProf(): ?string
    {
        return $this->numeroCarteProf;
    }

    public function setNumeroCarteProf(?string $numeroCarteProf): self
    {
        $this->numeroCarteProf = $numeroCarteProf;

        return $this;
    }
}
