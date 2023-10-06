<?php

namespace App\Entity;

use App\Repository\MotoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotoRepository::class)]
class Moto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Permit = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $Autonomie = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Vitesse = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Puissance = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Equivalent = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Batterie_amovible = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Prix_de_base = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Bonus_eco = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $Prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien = null;

    #[ORM\ManyToOne(inversedBy: 'moto')]
    private ?Marque $marque = null;

    #[ORM\Column]
    private ?bool $is_show = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPermit(): ?string
    {
        return $this->Permit;
    }

    public function setPermit(?string $Permit): static
    {
        $this->Permit = $Permit;

        return $this;
    }

    public function getAutonomie(): ?string
    {
        return $this->Autonomie;
    }

    public function setAutonomie(?string $Autonomie): static
    {
        $this->Autonomie = $Autonomie;

        return $this;
    }

    public function getVitesse(): ?string
    {
        return $this->Vitesse;
    }

    public function setVitesse(?string $Vitesse): static
    {
        $this->Vitesse = $Vitesse;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->Puissance;
    }

    public function setPuissance(?string $Puissance): static
    {
        $this->Puissance = $Puissance;

        return $this;
    }

    public function getEquivalent(): ?string
    {
        return $this->Equivalent;
    }

    public function setEquivalent(?string $Equivalent): static
    {
        $this->Equivalent = $Equivalent;

        return $this;
    }

    public function getBatterieAmovible(): ?string
    {
        return $this->Batterie_amovible;
    }

    public function setBatterieAmovible(string $Batterie_amovible): static
    {
        $this->Batterie_amovible = $Batterie_amovible;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getPrixDeBase(): ?string
    {
        return $this->Prix_de_base;
    }

    public function setPrixDeBase(?string $Prix_de_base): static
    {
        $this->Prix_de_base = $Prix_de_base;

        return $this;
    }

    public function getBonusEco(): ?string
    {
        return $this->Bonus_eco;
    }

    public function setBonusEco(?string $Bonus_eco): static
    {
        $this->Bonus_eco = $Bonus_eco;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->Prix;
    }

    public function setPrix(?string $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): static
    {
        $this->lien = $lien;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function isIsShow(): ?bool
    {
        return $this->is_show;
    }

    public function setIsShow(bool $is_show): static
    {
        $this->is_show = $is_show;

        return $this;
    }
}
