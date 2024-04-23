<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $n_chambre = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_bat = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column]
    private ?bool $capacite_lit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $handicap = null;

    #[ORM\Column(length: 255)]
    private ?string $formation = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    /**
     * @var Collection<int, Inventory>
     */
    #[ORM\OneToMany(targetEntity: Inventory::class, mappedBy: 'chambre')]
    private Collection $inventories;

    #[ORM\Column(nullable: true)]
    private ?bool $isPMR = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isAbsent = null;

    public function __construct()
    {
        $this->inventories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNChambre(): ?int
    {
        return $this->n_chambre;
    }

    public function setNChambre(int $n_chambre): static
    {
        $this->n_chambre = $n_chambre;

        return $this;
    }

    public function getNomBat(): ?string
    {
        return $this->nom_bat;
    }

    public function setNomBat(string $nom_bat): static
    {
        $this->nom_bat = $nom_bat;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function isCapaciteLit(): ?bool
    {
        return $this->capacite_lit;
    }

    public function setCapaciteLit(bool $capacite_lit): static
    {
        $this->capacite_lit = $capacite_lit;

        return $this;
    }

    public function getHandicap(): ?string
    {
        return $this->handicap;
    }

    public function setHandicap(?string $handicap): static
    {
        $this->handicap = $handicap;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(string $formation): static
    {
        $this->formation = $formation;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, Inventory>
     */
    public function getInventories(): Collection
    {
        return $this->inventories;
    }

    public function addInventory(Inventory $inventory): static
    {
        if (!$this->inventories->contains($inventory)) {
            $this->inventories->add($inventory);
            $inventory->setChambre($this);
        }

        return $this;
    }

    public function removeInventory(Inventory $inventory): static
    {
        if ($this->inventories->removeElement($inventory)) {
            // set the owning side to null (unless already changed)
            if ($inventory->getChambre() === $this) {
                $inventory->setChambre(null);
            }
        }

        return $this;
    }

    public function isPMR(): ?bool
    {
        return $this->isPMR;
    }

    public function setPMR(?bool $isPMR): static
    {
        $this->isPMR = $isPMR;

        return $this;
    }

    public function isAbsent(): ?bool
    {
        return $this->isAbsent;
    }

    public function setAbsent(?bool $isAbsent): static
    {
        $this->isAbsent = $isAbsent;

        return $this;
    }
}
