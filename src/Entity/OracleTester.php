<?php

namespace App\Entity;

use App\Repository\OracleTesterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OracleTesterRepository::class)
 */
class OracleTester
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
    private $Oraversion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Orahome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Orabase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Orasid;

    /**
     * @ORM\Column(type="integer")
     */
    private $Ora_score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOraversion(): ?float
    {
        return $this->Oraversion;
    }

    public function setOraversion(float $Oraversion): self
    {
        $this->Oraversion = $Oraversion;

        return $this;
    }

    public function getOrahome(): ?string
    {
        return $this->Orahome;
    }

    public function setOrahome(string $Orahome): self
    {
        $this->Orahome = $Orahome;

        return $this;
    }

    public function getOrabase(): ?string
    {
        return $this->Orabase;
    }

    public function setOrabase(string $Orabase): self
    {
        $this->Orabase = $Orabase;

        return $this;
    }

    public function getOrasid(): ?string
    {
        return $this->Orasid;
    }

    public function setOrasid(string $Orasid): self
    {
        $this->Orasid = $Orasid;

        return $this;
    }

    public function getOraScore(): ?int
    {
        return $this->Ora_score;
    }

    public function setOraScore(int $Ora_score): self
    {
        $this->Ora_score = $Ora_score;

        return $this;
    }
}
