<?php

namespace App\Entity;

use App\Repository\ComparerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComparerRepository::class)
 */
class Comparer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $filename1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename1(): ?string
    {
        return $this->filename1;
    }

    public function setFilename1(?string $filename1): self
    {
        $this->filename1 = $filename1;

        return $this;
    }

    public function getFilename2(): ?string
    {
        return $this->filename2;
    }

    public function setFilename2(string $filename2): self
    {
        $this->filename2 = $filename2;

        return $this;
    }
}
