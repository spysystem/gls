<?php

namespace GLS;

class PakkeshopData
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $Streetname
     */
    protected $Streetname = null;

    /**
     * @var string $Streetname2
     */
    protected $Streetname2 = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CountryCodeISO3166A2
     */
    protected $CountryCodeISO3166A2 = null;

    /**
     * @var string $Telephone
     */
    protected $Telephone = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var int $DistanceMetersAsTheCrowFlies
     */
    protected $DistanceMetersAsTheCrowFlies = null;

    /**
     * @var ArrayOfWeekday $OpeningHours
     */
    protected $OpeningHours = null;

    /**
     * @param int $DistanceMetersAsTheCrowFlies
     */
    public function __construct($DistanceMetersAsTheCrowFlies)
    {
      $this->DistanceMetersAsTheCrowFlies = $DistanceMetersAsTheCrowFlies;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \GLS\PakkeshopData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \GLS\PakkeshopData
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetname()
    {
      return $this->Streetname;
    }

    /**
     * @param string $Streetname
     * @return \GLS\PakkeshopData
     */
    public function setStreetname($Streetname)
    {
      $this->Streetname = $Streetname;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetname2()
    {
      return $this->Streetname2;
    }

    /**
     * @param string $Streetname2
     * @return \GLS\PakkeshopData
     */
    public function setStreetname2($Streetname2)
    {
      $this->Streetname2 = $Streetname2;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \GLS\PakkeshopData
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return \GLS\PakkeshopData
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \GLS\PakkeshopData
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCodeISO3166A2()
    {
      return $this->CountryCodeISO3166A2;
    }

    /**
     * @param string $CountryCodeISO3166A2
     * @return \GLS\PakkeshopData
     */
    public function setCountryCodeISO3166A2($CountryCodeISO3166A2)
    {
      $this->CountryCodeISO3166A2 = $CountryCodeISO3166A2;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return \GLS\PakkeshopData
     */
    public function setTelephone($Telephone)
    {
      $this->Telephone = $Telephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return \GLS\PakkeshopData
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return \GLS\PakkeshopData
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return int
     */
    public function getDistanceMetersAsTheCrowFlies()
    {
      return $this->DistanceMetersAsTheCrowFlies;
    }

    /**
     * @param int $DistanceMetersAsTheCrowFlies
     * @return \GLS\PakkeshopData
     */
    public function setDistanceMetersAsTheCrowFlies($DistanceMetersAsTheCrowFlies)
    {
      $this->DistanceMetersAsTheCrowFlies = $DistanceMetersAsTheCrowFlies;
      return $this;
    }

    /**
     * @return ArrayOfWeekday
     */
    public function getOpeningHours()
    {
      return $this->OpeningHours;
    }

    /**
     * @param ArrayOfWeekday $OpeningHours
     * @return \GLS\PakkeshopData
     */
    public function setOpeningHours($OpeningHours)
    {
      $this->OpeningHours = $OpeningHours;
      return $this;
    }

}
