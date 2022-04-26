<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Admin;
use App\Entity\Entite;
use App\Enums\TypeAdminEnum;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdminRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"admin:read"}},
 *      denormalizationContext={"groups"={"admin:write"}},
 *      collectionOperations={
 *         "get"={"method"="GET", "path"="/admins"},
 *        "post"={"method"="POST", "path"="/admins"}
 *     },
 *     itemOperations={
 *        "get"={"method"="GET", "path"="/admins/{id}"},
 *       "put"={"method"="PUT", "path"="/admins/{id}"},
 *     "delete"={"method"="DELETE", "path"="/admins/{id}"}
 *    }
 * )
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
{
    const ADMIN_TYPE = [TypeAdminEnum::ADMIN_DEPARTEMENT,TypeAdminEnum::ADMIN_ORGANISME, TypeAdminEnum::ADMIN_ENTREPRISE];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"admin:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="admin", cascade={"persist", "remove"})
     * @Groups({"admin:write", "admin:read"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice(choices=Admin::ADMIN_TYPE, message = "Choissez un type d'admin valide")
     * @Groups({"admin:read"})
     */
    private $typeAdmin;

    /**
     * @ORM\ManyToOne(targetEntity=Entite::class, inversedBy="admins")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"admin:read", "admin:write"})
     */
    private $entite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"admin:read", "admin:write"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"admin:read", "admin:write"})
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

    public function getTypeAdmin(): ?int
    {
        return $this->typeAdmin;
    }

    public function setTypeAdmin(int $typeAdmin): self
    {
        $this->typeAdmin = $typeAdmin;

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
