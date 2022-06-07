<?php

namespace App\Entity;

use App\Repository\UploadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UploadRepository::class)
 */
class Upload
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
    private $file1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile1(): ?string
    {
        return $this->file1;
    }

    public function setFile1(string $file1): self
    {
        $this->file1 = $file1;

        return $this;
    }

    public function getFile2(): ?string
    {
        return $this->file2;
    }

    public function setFile2(string $file2): self
    {
        $this->file2 = $file2;

        return $this;
    }
}
