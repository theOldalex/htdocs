<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\Column(type="date")
     */
    private $date_publication;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity=Auteur::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Auteur;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="article", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="favoris")
     */
    private $favoris;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->favoris = new ArrayCollection();
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->Auteur;
    }

    public function setAuteur(?Auteur $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function __toString(){
        
        return $this->prenom;

    }

    /**
     * @return Collection|Comments[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setArticle($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getArticle() === $this) {
                $comment->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(User $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris[] = $favori;
        }

        return $this;
    }

    public function removeFavori(User $favori): self
    {
        $this->favoris->removeElement($favori);

        return $this;
    }

}