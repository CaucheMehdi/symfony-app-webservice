<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ssfamille
 *
 * @ORM\Table(name="SSFAMILLE")
 * @ORM\Entity
 */
class Ssfamille
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_SSFAMILLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSsfamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_SSFAMILLE", type="string", length=50, nullable=true)
     */
    private $nomSsfamille;

    public function getIdSsfamille(): ?int
    {
        return $this->idSsfamille;
    }

    public function getNomSsfamille(): ?string
    {
        return $this->nomSsfamille;
    }

    public function setNomSsfamille(?string $nomSsfamille): self
    {
        $this->nomSsfamille = $nomSsfamille;

        return $this;
    }


}
