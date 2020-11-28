<?php

namespace App\Entity;

use App\Repository\EnergyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnergyRepository::class)
 */
class Energy
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
    private $energyName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnergyName(): ?string
    {
        return $this->energyName;
    }

    public function setEnergyName(string $energyName): self
    {
        $this->energyName = $energyName;

        return $this;
    }
}
