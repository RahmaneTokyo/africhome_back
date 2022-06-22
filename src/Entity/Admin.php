<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Entite;
use App\Enums\TypeAdminEnum;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"admin:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="admin", cascade={"persist", "remove"})
     * @Groups({"admin:write", "admin:read", "employe_entite", "entites:write", "employes:read"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"admin:read", "admin:write", "entites:write", "employes:read"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"admin:read", "admin:write", "entites:write", "employes:read"})
     */
    private $numeroCarteProf;

    /**
     * @ORM\ManyToMany(targetEntity=Entite::class, mappedBy="admins", cascade={"persist","remove"})
     * @Groups({"admin:read", "admin:write"})
     */
    private $entites;

    public function __construct()
    {
        $this->entites = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Entite>
     */
    public function getEntites(): Collection
    {
        return $this->entites;
    }

    public function addEntite(Entite $entite): self
    {
        if (!$this->entites->contains($entite)) {
            $this->entites[] = $entite;
            $entite->addAdmin($this);
        }

        return $this;
    }

    public function removeEntite(Entite $entite): self
    {
        if ($this->entites->removeElement($entite)) {
            $entite->removeAdmin($this);
        }

        return $this;
    }
}
