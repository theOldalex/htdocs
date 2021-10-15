<?php

namespace App\Entity;

use App\Repository\LivreeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreeRepository::class)
 */
class Livree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=z5600::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Ile_de_France;

    /**
     * @ORM\OneToOne(targetEntity=z5600::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Transilien;

    /**
     * @ORM\OneToOne(targetEntity=z5600::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Carmillon;

    /**
     * @ORM\OneToOne(targetEntity=z5600::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Ile_de_France_Mobilites;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    public function getIleDeFrance(): ?z5600
    {
        return $this->Ile_de_France;
    }

    public function setIleDeFrance(z5600 $Ile_de_France): self
    {
        $this->Ile_de_France = $Ile_de_France;

        return $this;
    }

    public function getTransilien(): ?z5600
    {
        return $this->Transilien;
    }

    public function setTransilien(z5600 $Transilien): self
    {
        $this->Transilien = $Transilien;

        return $this;
    }

    public function getCarmillon(): ?z5600
    {
        return $this->Carmillon;
    }

    public function setCarmillon(z5600 $Carmillon): self
    {
        $this->Carmillon = $Carmillon;

        return $this;
    }

    public function getIleDeFranceMobilites(): ?z5600
    {
        return $this->Ile_de_France_Mobilites;
    }

    public function setIleDeFranceMobilites(z5600 $Ile_de_France_Mobilites): self
    {
        $this->Ile_de_France_Mobilites = $Ile_de_France_Mobilites;

        return $this;
    }

    public function getRadiation(): ?\DateTimeInterface
    {
        return $this->radiation;
    }

    public function setRadiation(?\DateTimeInterface $radiation): self
    {
        $this->radiation = $radiation;

        return $this;
    }

    public function getMiseEnService(): ?\DateTimeInterface
    {
        return $this->mise_en_service;
    }

    public function setMiseEnService(\DateTimeInterface $mise_en_service): self
    {
        $this->mise_en_service = $mise_en_service;

        return $this;
    }

    
}
