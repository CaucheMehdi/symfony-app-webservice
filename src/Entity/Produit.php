<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="PRODUIT", indexes={@ORM\Index(name="FK_FAMILLE", columns={"ID_FAMILLE_PRODUIT"}), @ORM\Index(name="FK_FABRICANT", columns={"ID_FABRICANT_PRODUIT"}), @ORM\Index(name="FK_SSFAMILLE", columns={"ID_SSFAMILLE_PRODUIT"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_PRODUIT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_PRODUIT", type="string", length=100, nullable=true)
     */
    private $nomProduit;

    /**
     * @var \Fabricant
     *
     * @ORM\ManyToOne(targetEntity="Fabricant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FABRICANT_PRODUIT", referencedColumnName="ID_FABRICANT")
     * })
     */
    private $idFabricantProduit;

    /**
     * @var \Famille
     *
     * @ORM\ManyToOne(targetEntity="Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FAMILLE_PRODUIT", referencedColumnName="ID_FAMILLE")
     * })
     */
    private $idFamilleProduit;

    /**
     * @var \Ssfamille
     *
     * @ORM\ManyToOne(targetEntity="Ssfamille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SSFAMILLE_PRODUIT", referencedColumnName="ID_SSFAMILLE")
     * })
     */
    private $idSsfamilleProduit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(?string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getIdFabricantProduit(): ?Fabricant
    {
        return $this->idFabricantProduit;
    }

    public function setIdFabricantProduit(?Fabricant $idFabricantProduit): self
    {
        $this->idFabricantProduit = $idFabricantProduit;

        return $this;
    }

    public function getIdFamilleProduit(): ?Famille
    {
        return $this->idFamilleProduit;
    }

    public function setIdFamilleProduit(?Famille $idFamilleProduit): self
    {
        $this->idFamilleProduit = $idFamilleProduit;

        return $this;
    }

    public function getIdSsfamilleProduit(): ?Ssfamille
    {
        return $this->idSsfamilleProduit;
    }

    public function setIdSsfamilleProduit(?Ssfamille $idSsfamilleProduit): self
    {
        $this->idSsfamilleProduit = $idSsfamilleProduit;

        return $this;
    }

   

}
