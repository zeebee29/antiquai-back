<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Plats::class)]
    private ?Collection $plats = null;

    #[ORM\Column(length: 50)]
    private ?string $nameForMenu = null;

    #[ORM\Column(length: 50)]
    private ?string $nameForCarte = null;

    public function __construct()
    {
        $this->plats = new ArrayCollection();
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

    public function getPlats(): ?Collection
    {
        return $this->plats;
    }

    public function addPlats(Plats $plat): self
    {
        if (!$this->plats->contains($plat)) {
            $this->plats[] = $plat;
            $plat->setCategory($this);
        }

        return $this;
    }

    public function removePlats(Plats $plat): self
    {
        if ($this->plats->removeElement($plat)) {

            if ($plat->getCategory() === $this) {
                $plat->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getNameForMenu(): ?string
    {
        return $this->nameForMenu;
    }

    public function setNameForMenu(string $nameForMenu): self
    {
        $this->nameForMenu = $nameForMenu;

        return $this;
    }

    public function getNameForCarte(): ?string
    {
        return $this->nameForCarte;
    }

    public function setNameForCarte(string $nameForCarte): self
    {
        $this->nameForCarte = $nameForCarte;

        return $this;
    }
}
