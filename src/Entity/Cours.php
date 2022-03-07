<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThanOrEqual("today")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_coach;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 9,
     *      notInRangeMessage = "salle entre 1 et 9",
     * )
     */
    private $Num_salle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_cours;

    /**
     * @ORM\Column(type="time")
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Abonnement::class, mappedBy="cours")
     */
    private $abonnement;

    public function __construct()
    {
        $this->abonnement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getNomCoach(): ?string
    {
        return $this->Nom_coach;
    }

    public function setNomCoach(string $Nom_coach): self
    {
        $this->Nom_coach = $Nom_coach;

        return $this;
    }

    public function getNumSalle(): ?int
    {
        return $this->Num_salle;
    }

    public function setNumSalle(int $Num_salle): self
    {
        $this->Num_salle = $Num_salle;

        return $this;
    }

    public function getTypeCours(): ?string
    {
        return $this->Type_cours;
    }

    public function setTypeCours(string $Type_cours): self
    {
        $this->Type_cours = $Type_cours;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Abonnement>
     */
    public function getAbonnement(): Collection
    {
        return $this->abonnement;
    }

    public function addAbonnement(Abonnement $abonnement): self
    {
        if (!$this->abonnement->contains($abonnement)) {
            $this->abonnement[] = $abonnement;
            $abonnement->setCours($this);
        }

        return $this;
    }

    public function removeAbonnement(Abonnement $abonnement): self
    {
        if ($this->abonnement->removeElement($abonnement)) {
            // set the owning side to null (unless already changed)
            if ($abonnement->getCours() === $this) {
                $abonnement->setCours(null);
            }
        }

        return $this;
    }
}
