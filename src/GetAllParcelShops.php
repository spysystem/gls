<?php

namespace GLS;

class GetAllParcelShops
{

    /**
     * @var string $countryIso3166A2
     */
    protected $countryIso3166A2 = null;

    /**
     * @param string $countryIso3166A2
     */
    public function __construct($countryIso3166A2)
    {
      $this->countryIso3166A2 = $countryIso3166A2;
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
     * @return \GLS\GetAllParcelShops
     */
    public function setCountryIso3166A2($countryIso3166A2)
    {
      $this->countryIso3166A2 = $countryIso3166A2;
      return $this;
    }

}
