<?php

namespace App\Entity;

use App\Repository\OfficialDocsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OfficialDocsRepository::class)
 */
class OfficialDocs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=brand::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $piece_identite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conditions_generales;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preuve_enregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $table_capitalisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coordonnees_bancaires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?brand
    {
        return $this->brand;
    }

    public function setBrand(brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPieceIdentite(): ?string
    {
        return $this->piece_identite;
    }

    public function setPieceIdentite(string $piece_identite): self
    {
        $this->piece_identite = $piece_identite;

        return $this;
    }

    public function getConditionsGenerales(): ?string
    {
        return $this->conditions_generales;
    }

    public function setConditionsGenerales(string $conditions_generales): self
    {
        $this->conditions_generales = $conditions_generales;

        return $this;
    }

    public function getPreuveEnregistrement(): ?string
    {
        return $this->preuve_enregistrement;
    }

    public function setPreuveEnregistrement(string $preuve_enregistrement): self
    {
        $this->preuve_enregistrement = $preuve_enregistrement;

        return $this;
    }

    public function getTableCapitalisation(): ?string
    {
        return $this->table_capitalisation;
    }

    public function setTableCapitalisation(string $table_capitalisation): self
    {
        $this->table_capitalisation = $table_capitalisation;

        return $this;
    }

    public function getCoordonneesBancaires(): ?string
    {
        return $this->coordonnees_bancaires;
    }

    public function setCoordonneesBancaires(string $coordonnees_bancaires): self
    {
        $this->coordonnees_bancaires = $coordonnees_bancaires;

        return $this;
    }

}
