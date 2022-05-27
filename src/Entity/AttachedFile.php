<?php

namespace App\Entity;

use App\Repository\AttachedFileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttachedFileRepository::class)
 */
class AttachedFile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $oraversion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orahome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orabase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orasid;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ora_score;

    /**
     * @ORM\ManyToOne(targetEntity=Deparement::class, inversedBy="attachedFiles")
     */
    private $departement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOraversion(): ?float
    {
        return $this->oraversion;
    }

    public function setOraversion(float $oraversion): self
    {
        $this->oraversion = $oraversion;

        return $this;
    }

    public function getOrahome(): ?string
    {
        return $this->orahome;
    }

    public function setOrahome(string $orahome): self
    {
        $this->orahome = $orahome;

        return $this;
    }

    public function getOrabase(): ?string
    {
        return $this->orabase;
    }

    public function setOrabase(string $orabase): self
    {
        $this->orabase = $orabase;

        return $this;
    }

    public function getOrasid(): ?string
    {
        return $this->orasid;
    }

    public function setOrasid(string $orasid): self
    {
        $this->orasid = $orasid;

        return $this;
    }

    public function getOraScore(): ?int
    {
        return $this->ora_score;
    }

    public function setOraScore(?int $ora_score): self
    {
        $this->ora_score = $ora_score;

        return $this;
    }

    public function getDepartement(): ?Deparement
    {
        return $this->departement;
    }

    public function setDepartement(?Deparement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
}
