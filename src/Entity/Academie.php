<?php

namespace App\Entity;

use App\Repository\AcademieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass=AcademieRepository::class)
 */
class Academie
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_seances;


    /**
     * @ORM\OneToMany(targetEntity=Enfant::class, mappedBy="academie")
     */
    private $enfant;

    public function __construct()
    {
        $this->enfant = new ArrayCollection();
    }

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

    public function getNbrSeances(): ?int
    {
        return $this->nbr_seances;
    }

    public function setNbrSeances(int $nbr_seances): self
    {
        $this->nbr_seances = $nbr_seances;

        return $this;
    }

    /**
     * @return Collection|Enfant[]
     */
    public function getEnfant(): Collection
    {
        return $this->enfant;
    }

    public function addEnfant(Enfant $enfant): self
    {
        if (!$this->enfant->contains($enfant)) {
            $this->enfant[] = $enfant;
            $enfant->setAcademie($this);
        }

        return $this;
    }

    public function removeEnfant(Enfant $enfant): self
    {
        if ($this->enfant->removeElement($enfant)) {
            // set the owning side to null (unless already changed)
            if ($enfant->getAcademie() === $this) {
                $enfant->setAcademie(null);
            }
        }

        return $this;
    }


}
