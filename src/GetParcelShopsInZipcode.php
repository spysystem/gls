<?php

namespace GLS;

class GetParcelShopsInZipcode
{

    /**
     * @var string $zipcode
     */
    protected $zipcode = null;

    /**
     * @var string $countryIso3166A2
     */
    protected $countryIso3166A2 = null;

    /**
     * @param string $zipcode
     * @param string $countryIso3166A2
     */
    public function __construct($zipcode, $countryIso3166A2)
    {
      $this->zipcode = $zipcode;
      $this->countryIso3166A2 = $countryIso3166A2;
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
     * @return \GLS\GetParcelShopsInZipcode
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
     * @return \GLS\GetParcelShopsInZipcode
     */
    public function setCountryIso3166A2($countryIso3166A2)
    {
      $this->countryIso3166A2 = $countryIso3166A2;
      return $this;
    }

}
