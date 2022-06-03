<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\VilleRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"entites:read","admin:read","gestionnaire:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read", "entites:write","admin:read","admin:write","gestionnaire:write","gestionnaire:read"})
     */
    private $nomVille;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"entites:read", "entites:write","admin:read","admin:write","gestionnaire:write","gestionnaire:read"})
     */
    private $nomPays;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"entites:read", "entites:write","admin:read","admin:write","gestionnaire:write","gestionnaire:read"})
     */
    private $archived;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="ville")
     */
    private $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(string $nomPays): self
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * @return Collection<int, Contact>
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setVille($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getVille() === $this) {
                $contact->setVille(null);
            }
        }

        return $this;
    }
}
