<?php

namespace GLS;

class GetParcelShopDropPoint
{

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $zipcode
     */
    protected $zipcode = null;

    /**
     * @var string $countryIso3166A2
     */
    protected $countryIso3166A2 = null;

    /**
     * @var int $Amount
     */
    protected $Amount = null;

    /**
     * @param string $street
     * @param string $zipcode
     * @param string $countryIso3166A2
     * @param int $Amount
     */
    public function __construct($street, $zipcode, $countryIso3166A2, $Amount)
    {
      $this->street = $street;
      $this->zipcode = $zipcode;
      $this->countryIso3166A2 = $countryIso3166A2;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \GLS\GetParcelShopDropPoint
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
      return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return \GLS\GetParcelShopDropPoint
     */
    public function setZipcode($zipcode)
    {
      $this->zipcode = $zipcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryIso3166A2()
    {
      return $this->countryIso3166A2;
    }

    /**
     * @param string $countryIso3166A2
     * @return \GLS\GetParcelShopDropPoint
     */
    public function setCountryIso3166A2($countryIso3166A2)
    {
      $this->countryIso3166A2 = $countryIso3166A2;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param int $Amount
     * @return \GLS\GetParcelShopDropPoint
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
