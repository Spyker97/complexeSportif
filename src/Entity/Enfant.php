<?php

namespace App\Entity;

use App\Repository\EnfantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

/**
 * @ORM\Entity(repositoryClass=EnfantRepository::class)
 */
class Enfant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(
     *     message ="Il faut mentionner le nom "
     * )

     */
    private $name;

    /**
     * @ORM\Column(type="integer")

     */
    private $age;

    /**

     * @ORM\Column(type="integer")
     */
    private $poids;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length
     * (
     * min = 8,
     * max = 8,
     * minMessage = "Votre cin doit etre au moins 8 chiffres",
     * maxMessage = "Votre cin ne doit pas depasser 8 chiffres",
     * )
     */

    private $cinparent;

    /**
     * @ORM\ManyToOne(targetEntity=Academie::class, inversedBy="enfant")
     */
    private $academie;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCinparent(): ?string
    {
        return $this->cinparent;
    }

    public function setCinparent(string $cinparent): self
    {
        $this->cinparent = $cinparent;

        return $this;
    }

    public function getAcademie(): ?Academie
    {
        return $this->academie;
    }

    public function setAcademie(?Academie $academie): self
    {
        $this->academie = $academie;

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
