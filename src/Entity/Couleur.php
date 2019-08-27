<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Couleur
 *
 * @ORM\Table(name="COULEUR")
 * @ORM\Entity
 */
class Couleur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_COULEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCouleur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INTITULE_COULEUR", type="string", length=80, nullable=true)
     */
    private $intituleCouleur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HEXA_ROUGE", type="string", length=3, nullable=true)
     */
    private $hexaRouge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HEXA_VERT", type="string", length=3, nullable=true)
     */
    private $hexaVert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HEXA_BLEU", type="string", length=3, nullable=true)
     */
    private $hexaBleu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RVB_ROUGE", type="integer", nullable=true)
     */
    private $rvbRouge;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RVB_VERT", type="integer", nullable=true)
     */
    private $rvbVert;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RVB_BLEU", type="integer", nullable=true)
     */
    private $rvbBleu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REF_HEXA", type="string", length=10, nullable=true)
     */
    private $refHexa;

    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCouleur(): ?int
    {
        return $this->idCouleur;
    }

    public function getIntituleCouleur(): ?string
    {
        return $this->intituleCouleur;
    }

    public function setIntituleCouleur(?string $intituleCouleur): self
    {
        $this->intituleCouleur = $intituleCouleur;

        return $this;
    }

    public function getHexaRouge(): ?string
    {
        return $this->hexaRouge;
    }

    public function setHexaRouge(?string $hexaRouge): self
    {
        $this->hexaRouge = $hexaRouge;

        return $this;
    }

    public function getHexaVert(): ?string
    {
        return $this->hexaVert;
    }

    public function setHexaVert(?string $hexaVert): self
    {
        $this->hexaVert = $hexaVert;

        return $this;
    }

    public function getHexaBleu(): ?string
    {
        return $this->hexaBleu;
    }

    public function setHexaBleu(?string $hexaBleu): self
    {
        $this->hexaBleu = $hexaBleu;

        return $this;
    }

    public function getRvbRouge(): ?int
    {
        return $this->rvbRouge;
    }

    public function setRvbRouge(?int $rvbRouge): self
    {
        $this->rvbRouge = $rvbRouge;

        return $this;
    }

    public function getRvbVert(): ?int
    {
        return $this->rvbVert;
    }

    public function setRvbVert(?int $rvbVert): self
    {
        $this->rvbVert = $rvbVert;

        return $this;
    }

    public function getRvbBleu(): ?int
    {
        return $this->rvbBleu;
    }

    public function setRvbBleu(?int $rvbBleu): self
    {
        $this->rvbBleu = $rvbBleu;

        return $this;
    }

    public function getRefHexa(): ?string
    {
        return $this->refHexa;
    }

    public function setRefHexa(?string $refHexa): self
    {
        $this->refHexa = $refHexa;

        return $this;
    }



    

}
