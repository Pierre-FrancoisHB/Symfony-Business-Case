<?php

namespace App\Entity;

use App\Repository\ProfessionnalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfessionnalRepository::class)
 */
class Professionnal
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
    private $professionnalName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $SIRET;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $personnalTel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $accountValid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfessionnalName(): ?string
    {
        return $this->professionnalName;
    }

    public function setProfessionnalName(string $professionnalName): self
    {
        $this->professionnalName = $professionnalName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSIRET(): ?int
    {
        return $this->SIRET;
    }

    public function setSIRET(int $SIRET): self
    {
        $this->SIRET = $SIRET;

        return $this;
    }

    public function getPersonnalTel(): ?int
    {
        return $this->personnalTel;
    }

    public function setPersonnalTel(?int $personnalTel): self
    {
        $this->personnalTel = $personnalTel;

        return $this;
    }

    public function getAccountValid(): ?bool
    {
        return $this->accountValid;
    }

    public function setAccountValid(bool $accountValid): self
    {
        $this->accountValid = $accountValid;

        return $this;
    }
}
