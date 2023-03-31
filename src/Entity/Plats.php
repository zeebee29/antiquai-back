<?php

namespace App\Entity;

use App\Repository\PlatsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatsRepository::class)]
class Plats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $price = null;

    #[ORM\Column]
    private ?bool $inCarte = null;

    #[ORM\ManyToOne(targetEntity: Categories::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categories $category = null;

    #[ORM\ManyToMany(targetEntity: Menus::class, mappedBy: 'plats')]
    private Collection $menus;

    public function __construct()
    {
        $this->menus = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function isInCarte(): ?bool
    {
        return $this->inCarte;
    }

    public function setInCarte(bool $inCarte): self
    {
        $this->inCarte = $inCarte;

        return $this;
    }

    public function getCategory(): ?Categories
    {
        return $this->category;
    }

    public function setCategory(Categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Menus>
     */
    public function getMenus(): Collection
    {
        return $this->menus;
    }

    public function addMenu(Menus $menu): self
    {
        if (!$this->menus->contains($menu)) {
            $this->menus->add($menu);
            $menu->addPlat($this);
        }

        return $this;
    }

    public function removeMenu(Menus $menu): self
    {
        if ($this->menus->removeElement($menu)) {
            $menu->removePlat($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
