<?php

namespace App\Entity;

use App\Repository\GarageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GarageRepository::class)
 */
class Garage
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
    private $garageName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commune;

    /**
     * @ORM\Column(type="integer")
     */
    private $garagePhone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGarageName(): ?string
    {
        return $this->garageName;
    }

    public function setGarageName(string $garageName): self
    {
        $this->garageName = $garageName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getGaragePhone(): ?int
    {
        return $this->garagePhone;
    }

    public function setGaragePhone(int $garagePhone): self
    {
        $this->garagePhone = $garagePhone;

        return $this;
    }
}
