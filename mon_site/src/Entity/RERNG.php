<?php

namespace App\Entity;

use App\Repository\RERNGRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RERNGRepository::class)
 */
class RERNG
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Rames;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motrices;

    /**
     * @ORM\Column(type="date")
     */
    private $mise_en_service;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livree;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_caisses;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stf;

    /**
     * @ORM\Column(type="date")
     */
    private $radiation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipements_interieurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lignes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRames(): ?string
    {
        return $this->Rames;
    }

    public function setRames(string $Rames): self
    {
        $this->Rames = $Rames;

        return $this;
    }

    public function getMotrices(): ?string
    {
        return $this->motrices;
    }

    public function setMotrices(string $motrices): self
    {
        $this->motrices = $motrices;

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

    public function getLivree(): ?string
    {
        return $this->livree;
    }

    public function setLivree(string $livree): self
    {
        $this->livree = $livree;

        return $this;
    }

    public function getNombreDeCaisses(): ?int
    {
        return $this->nombre_de_caisses;
    }

    public function setNombreDeCaisses(int $nombre_de_caisses): self
    {
        $this->nombre_de_caisses = $nombre_de_caisses;

        return $this;
    }

    public function getStf(): ?string
    {
        return $this->stf;
    }

    public function setStf(string $stf): self
    {
        $this->stf = $stf;

        return $this;
    }

    public function getRadiation(): ?\DateTimeInterface
    {
        return $this->radiation;
    }

    public function setRadiation(\DateTimeInterface $radiation): self
    {
        $this->radiation = $radiation;

        return $this;
    }

    public function getEquipementsInterieurs(): ?string
    {
        return $this->equipements_interieurs;
    }

    public function setEquipementsInterieurs(string $equipements_interieurs): self
    {
        $this->equipements_interieurs = $equipements_interieurs;

        return $this;
    }

    public function getLignes(): ?string
    {
        return $this->lignes;
    }

    public function setLignes(string $lignes): self
    {
        $this->lignes = $lignes;

        return $this;
    }
}
