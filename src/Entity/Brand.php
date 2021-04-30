<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrandRepository::class)
 */
class Brand
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
    private $name;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $business_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $market_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $speciality;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $district;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tva_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $volume_prevu;

    /**
     * @ORM\Column(type="integer")
     */
    private $volume_reel;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getBusinessType(): ?string
    {
        return $this->business_type;
    }

    public function setBusinessType(string $business_type): self
    {
        $this->business_type = $business_type;

        return $this;
    }

    public function getCompanyType(): ?string
    {
        return $this->company_type;
    }

    public function setCompanyType(string $company_type): self
    {
        $this->company_type = $company_type;

        return $this;
    }

    public function getMarketType(): ?string
    {
        return $this->market_type;
    }

    public function setMarketType(string $market_type): self
    {
        $this->market_type = $market_type;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): self
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(int $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getTvaNumber(): ?string
    {
        return $this->tva_number;
    }

    public function setTvaNumber(string $tva_number): self
    {
        $this->tva_number = $tva_number;

        return $this;
    }

    public function getVolumePrevu(): ?int
    {
        return $this->volume_prevu;
    }

    public function setVolumePrevu(int $volume_prevu): self
    {
        $this->volume_prevu = $volume_prevu;

        return $this;
    }

    public function getVolumeReel(): ?int
    {
        return $this->volume_reel;
    }

    public function setVolumeReel(int $volume_reel): self
    {
        $this->volume_reel = $volume_reel;

        return $this;
    }
}
