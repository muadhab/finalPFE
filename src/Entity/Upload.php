<?php

namespace App\Entity;

use App\Repository\UploadRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=UploadRepository::class)
 * @vich\Uploadable
 */
class Upload
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file1;
    /**
     *  @Vich\UploadableField(mapping="Upload",fileNameProperty="file1") 
     *  @var File
     */
    private $file1file;
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
    /**
     * @return File|null
     */
    public function getfile1file (): ?file
    {
        return $this->file1file;
    }
    /**
     *  @param File null $file1file 
     */
    public function setfile1file ( ? File $file1file= null ) 
    {
        $this->file1file = $file1file ;
    } 
    
}
