<?php

namespace App\Entity;

use App\Repository\DeparementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeparementRepository::class)
 */
class Deparement
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
    private $name_dept;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_dept;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="departement")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=AttachedFile::class, mappedBy="departement")
     */
    private $attachedFiles;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->attachedFiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameDept(): ?string
    {
        return $this->name_dept;
    }

    public function setNameDept(string $name_dept): self
    {
        $this->name_dept = $name_dept;

        return $this;
    }

    public function getEmailDept(): ?string
    {
        return $this->email_dept;
    }

    public function setEmailDept(string $email_dept): self
    {
        $this->email_dept = $email_dept;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setDepartement($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getDepartement() === $this) {
                $user->setDepartement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AttachedFile>
     */
    public function getAttachedFiles(): Collection
    {
        return $this->attachedFiles;
    }

    public function addAttachedFile(AttachedFile $attachedFile): self
    {
        if (!$this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles[] = $attachedFile;
            $attachedFile->setDepartement($this);
        }

        return $this;
    }

    public function removeAttachedFile(AttachedFile $attachedFile): self
    {
        if ($this->attachedFiles->removeElement($attachedFile)) {
            // set the owning side to null (unless already changed)
            if ($attachedFile->getDepartement() === $this) {
                $attachedFile->setDepartement(null);
            }
        }

        return $this;
    }
}
