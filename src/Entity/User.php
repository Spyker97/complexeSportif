<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Date;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *     fields={"email"},
 *     message="L'email que vous avez indiqué est déja utilisé!"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @Assert\Length(min="8",max="8", minMessage="Cin should be with 8 caractaire")
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $genre;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractéres")
     * @Assert\EqualTo(propertyPath="confirm_password", message= "Vous n'avez pas tapé le meme mot de passe")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password" , message= "Vous n'avez pas tapé le meme mot de passe")
     */
    public $confirm_password;





    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Chapms Obligatoire")
     */
    private $adresse;

    public function getCin(): ?int
    {
        return $this->cin;
    }
    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }
}
