<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="FAMILLE")
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_FAMILLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_FAMILLE", type="string", length=50, nullable=true)
     */
    private $nomFamille;

    public function getIdFamille(): ?int
    {
        return $this->idFamille;
    }

    public function getNomFamille(): ?string
    {
        return $this->nomFamille;
    }

    public function setNomFamille(?string $nomFamille): self
    {
        $this->nomFamille = $nomFamille;

        return $this;
    }


}
