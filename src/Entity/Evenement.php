<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Champs is required")
     */
    private $titre;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Champs is required")
     */
    private $date_start;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Champs is required")
     */
    private $date_end;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank(message="Champs is required")
     */
    private $nombrePar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Champs is required")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Champs is required")
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="id_evenement")
     */
    private $participations;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEvent::class)
     * @Assert\NotBlank(message="Champs is required")
     */
    private $type_id;
    
    

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): self
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getNombrePar(): ?int
    {
        return $this->nombrePar;
    }

    public function setNombrePar(?int $nombrePar): self
    {
        $this->nombrePar = $nombrePar;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|Participation[]
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations[] = $participation;
            $participation->setIdEvenement($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getIdEvenement() === $this) {
                $participation->setIdEvenement(null);
            }
        }

        return $this;
    }

    public function getTypeId(): ?TypeEvent
    {
        return $this->type_id;
    }

    public function setTypeId(?TypeEvent $type_id): self
    {
        $this->type_id = $type_id;

        return $this;
    }
}
