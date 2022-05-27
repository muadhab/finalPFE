<?php

namespace App\Entity;

use App\Repository\IncidentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IncidentRepository::class)
 */
class Incident
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
    private $nom_incident;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc_incident;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urgence_incident;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status_incident;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomIncident(): ?string
    {
        return $this->nom_incident;
    }

    public function setNomIncident(string $nom_incident): self
    {
        $this->nom_incident = $nom_incident;

        return $this;
    }

    public function getDescIncident(): ?string
    {
        return $this->desc_incident;
    }

    public function setDescIncident(string $desc_incident): self
    {
        $this->desc_incident = $desc_incident;

        return $this;
    }

    public function getUrgenceIncident(): ?string
    {
        return $this->urgence_incident;
    }

    public function setUrgenceIncident(string $urgence_incident): self
    {
        $this->urgence_incident = $urgence_incident;

        return $this;
    }

    public function getStatusIncident(): ?string
    {
        return $this->status_incident;
    }

    public function setStatusIncident(string $status_incident): self
    {
        $this->status_incident = $status_incident;

        return $this;
    }
}
