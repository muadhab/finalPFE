<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
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
    private $nom_task;

    /**
     * @ORM\Column(type="date")
     */
    private $date_deb_task;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_task;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status_task;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $task_owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTask(): ?string
    {
        return $this->nom_task;
    }

    public function setNomTask(string $nom_task): self
    {
        $this->nom_task = $nom_task;

        return $this;
    }

    public function getDateDebTask(): ?\DateTimeInterface
    {
        return $this->date_deb_task;
    }

    public function setDateDebTask(\DateTimeInterface $date_deb_task): self
    {
        $this->date_deb_task = $date_deb_task;

        return $this;
    }

    public function getDateFinTask(): ?\DateTimeInterface
    {
        return $this->date_fin_task;
    }

    public function setDateFinTask(\DateTimeInterface $date_fin_task): self
    {
        $this->date_fin_task = $date_fin_task;

        return $this;
    }

    public function getStatusTask(): ?string
    {
        return $this->status_task;
    }

    public function setStatusTask(string $status_task): self
    {
        $this->status_task = $status_task;

        return $this;
    }

    public function getTaskOwner(): ?User
    {
        return $this->task_owner;
    }

    public function setTaskOwner(?User $task_owner): self
    {
        $this->task_owner = $task_owner;

        return $this;
    }
}
