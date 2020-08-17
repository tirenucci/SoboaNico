<?php

namespace App\Entity;

use App\Repository\AccueilRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=AccueilRepository::class)
 * @Vich\Uploadable
 */
class Accueil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageAccueil;

    /**
     * @Vich\UploadableField(mapping="imagesAccueil", fileNameProperty="ImageAccueilFile")
     * @var File
     */
    private $ImageAccueilFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageAccueil(): ?string
    {
        return $this->ImageAccueil;
    }

    public function setImageAccueil(string $ImageAccueil): self
    {
        $this->ImageAccueil = $ImageAccueil;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageAccueilFile(): ?File
    {
        return $this->ImageAccueilFile;
    }

    /**
     * @param File|null $ImageAccueilFile
     */
    public function setImageAccueilFile(?File $ImageAccueilFile=null)
    {
        $this->ImageAccueilFile = $ImageAccueilFile;
    }
}
