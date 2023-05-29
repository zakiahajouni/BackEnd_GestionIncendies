<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
#[ApiResource]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comment = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Publication $postid = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Utilisateur $pubuser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPostid(): ?Publication
    {
        return $this->postid;
    }

    public function setPostid(?Publication $postid): self
    {
        $this->postid = $postid;

        return $this;
    }

    public function getPubuser(): ?Utilisateur
    {
        return $this->pubuser;
    }

    public function setPubuser(?Utilisateur $pubuser): self
    {
        $this->pubuser = $pubuser;

        return $this;
    }
}
