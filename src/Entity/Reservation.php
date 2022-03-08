<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     *@Assert\Length(min="8",max="8", minMessage="Cin should be with 8 caractaire")
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    public $discipline;

    /**
     * @ORM\ManyToOne(targetEntity=Terrain::class, inversedBy="reservations")
     */
    public $idterrain;

    /**
     * @CaptchaAssert\ValidCaptcha(
     * message = "CAPTCHA validation failed, try again."
     * )
     */
    protected $captchaCode;



    public function getId(): ?int
    {
        return $this->id;
    }




    /*public function getIdTerrain(): ?int
    {
        return $this->id_terrain;
    }

    public function setIdTerrain(int $id_terrain): self
    {
        $this->id_terrain = $id_terrain;

        return $this;
    }*/

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDiscipline(): ?string
    {
        return $this->discipline;
    }

    public function setDiscipline(string $discipline): self
    {
        $this->discipline = $discipline;

        return $this;
    }
    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }

}
