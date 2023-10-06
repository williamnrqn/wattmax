<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueRepository::class)]
class Marque
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_image = null;

    #[ORM\Column(length: 255)]
    private ?string $lien = null;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: Moto::class)]
    private Collection $moto;

    #[ORM\OneToMany(mappedBy: 'marque', targetEntity: Scooter::class)]
    private Collection $scooter;

    public function __construct()
    {
        $this->moto = new ArrayCollection();
        $this->scooter = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getNameImage(): ?string
    {
        return $this->name_image;
    }

    public function setNameImage(string $name_image = null): static
    {
        $this->name_image = $name_image;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): static
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return Collection<int, moto>
     */
    public function getMoto(): Collection
    {
        return $this->moto;
    }

    public function addMoto(moto $moto): static
    {
        if (!$this->moto->contains($moto)) {
            $this->moto->add($moto);
            $moto->setMarque($this);
        }

        return $this;
    }

    public function removeMoto(moto $moto): static
    {
        if ($this->moto->removeElement($moto)) {
            // set the owning side to null (unless already changed)
            if ($moto->getMarque() === $this) {
                $moto->setMarque(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, scooter>
     */
    public function getScooter(): Collection
    {
        return $this->scooter;
    }

    public function addScooter(scooter $scooter): static
    {
        if (!$this->scooter->contains($scooter)) {
            $this->scooter->add($scooter);
            $scooter->setMarque($this);
        }

        return $this;
    }

    public function removeScooter(scooter $scooter): static
    {
        if ($this->scooter->removeElement($scooter)) {
            // set the owning side to null (unless already changed)
            if ($scooter->getMarque() === $this) {
                $scooter->setMarque(null);
            }
        }

        return $this;
    }
}
