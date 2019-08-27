<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 * @ORM\Entity(repositoryClass="App\Repository\CatalogueRepository")
 * @ORM\Table(name="CATALOGUE")
 */
class Catalogue
{
    
/**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
	  *
     */
    private $id;



    /**
	  *
     * @ORM\Column(name="PRIX_UNITAIRE", type="float", nullable=true)
     */
    private $prixUnitaire;

    /**
     * @ORM\Column(name="STOCK", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @ORM\Id
     * @ORM\Column(name="ID_COULEUR", type="integer", nullable=true)
	  *
     * @ORM\OneToMany(targetEntity="App\Entity\Couleur", mappedBy="ID_COULEUR")
     */
    private $idColor;

    /**
     * @ORM\Id
     * @ORM\Column(name="ID_PRODUIT", type="integer", nullable=true)
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="ID_PRODUIT")
     */
    private $idProduit;
    

    public function __construct()
    {
        $this->id = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(?float $prixUnitaire): self
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    
    public function getIdColor(): ?int
    {
        return $this->idColor;
    }

   public function setIdColor(?Couleur $idCouleur): self
    {
        $this->idCouleur = $idCouleur;

        return $this;
    }

   
    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }
  
    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    
}
