<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $sectionTitle = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $sectionDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $Post = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $ManyToMany = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSectionTitle(): ?string
    {
        return $this->sectionTitle;
    }

    public function setSectionTitle(string $sectionTitle): static
    {
        $this->sectionTitle = $sectionTitle;

        return $this;
    }

    public function getSectionDescription(): ?string
    {
        return $this->sectionDescription;
    }

    public function setSectionDescription(?string $sectionDescription): static
    {
        $this->sectionDescription = $sectionDescription;

        return $this;
    }

    public function getPost(): ?string
    {
        return $this->Post;
    }

    public function setPost(string $Post): static
    {
        $this->Post = $Post;

        return $this;
    }

    public function getManyToMany(): ?string
    {
        return $this->ManyToMany;
    }

    public function setManyToMany(?string $ManyToMany): static
    {
        $this->ManyToMany = $ManyToMany;

        return $this;
    }
}
