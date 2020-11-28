<?php

namespace App\Entity;

use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 */
class Photo
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
    private $photoLink;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mainPhoto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoLink(): ?string
    {
        return $this->photoLink;
    }

    public function setPhotoLink(string $photoLink): self
    {
        $this->photoLink = $photoLink;

        return $this;
    }

    public function getMainPhoto(): ?bool
    {
        return $this->mainPhoto;
    }

    public function setMainPhoto(bool $mainPhoto): self
    {
        $this->mainPhoto = $mainPhoto;

        return $this;
    }
}
