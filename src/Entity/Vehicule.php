<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
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
    private $referenceAnnonce;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreAnnonce;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometer;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $year;

    /**
     * @ORM\ManyToOne(targetEntity=model::class, inversedBy="vehicules")
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity=garage::class, inversedBy="vehicules")
     */
    private $garage;

    /**
     * @ORM\ManyToMany(targetEntity=photo::class, inversedBy="vehicules")
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity=energy::class, inversedBy="vehicules")
     */
    private $energy;

    public function __construct()
    {
        $this->photo = new ArrayCollection();
        $this->energy = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceAnnonce(): ?string
    {
        return $this->referenceAnnonce;
    }

    public function setReferenceAnnonce(string $referenceAnnonce): self
    {
        $this->referenceAnnonce = $referenceAnnonce;

        return $this;
    }

    public function getTitreAnnonce(): ?string
    {
        return $this->titreAnnonce;
    }

    public function setTitreAnnonce(string $titreAnnonce): self
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKilometer(): ?int
    {
        return $this->kilometer;
    }

    public function setKilometer(int $kilometer): self
    {
        $this->kilometer = $kilometer;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(\DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getModel(): ?model
    {
        return $this->model;
    }

    public function setModel(?model $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getGarage(): ?garage
    {
        return $this->garage;
    }

    public function setGarage(?garage $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    /**
     * @return Collection|photo[]
     */
    public function getPhoto(): Collection
    {
        return $this->photo;
    }

    public function addPhoto(photo $photo): self
    {
        if (!$this->photo->contains($photo)) {
            $this->photo[] = $photo;
        }

        return $this;
    }

    public function removePhoto(photo $photo): self
    {
        $this->photo->removeElement($photo);

        return $this;
    }

    /**
     * @return Collection|energy[]
     */
    public function getEnergy(): Collection
    {
        return $this->energy;
    }

    public function addEnergy(energy $energy): self
    {
        if (!$this->energy->contains($energy)) {
            $this->energy[] = $energy;
        }

        return $this;
    }

    public function removeEnergy(energy $energy): self
    {
        $this->energy->removeElement($energy);

        return $this;
    }
}
