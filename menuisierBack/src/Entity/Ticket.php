<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $product;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $introductionText;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $conclusionText;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getIntroductionText(): ?string
    {
        return $this->introductionText;
    }

    public function setIntroductionText(?string $introductionText): self
    {
        $this->introductionText = $introductionText;

        return $this;
    }

    public function getConclusionText(): ?string
    {
        return $this->conclusionText;
    }

    public function setConclusionText(?string $conclusionText): self
    {
        $this->conclusionText = $conclusionText;

        return $this;
    }
}
