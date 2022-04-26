<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SuperAdminRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *    normalizationContext={"groups"={"superadmin:read"}},
 *    denormalizationContext={"groups"={"superadmin:write"}},
 * )
 * @ORM\Entity(repositoryClass=SuperAdminRepository::class)
 */
class SuperAdmin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"superadmin:read"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="superAdmin", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"superadmin:write", "superadmin:read"})
     */
    private $user;

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
}
