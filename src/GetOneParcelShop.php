<?php

namespace GLS;

class GetOneParcelShop
{

    /**
     * @var string $ParcelShopNumber
     */
    protected $ParcelShopNumber = null;

    /**
     * @param string $ParcelShopNumber
     */
    public function __construct($ParcelShopNumber)
    {
      $this->ParcelShopNumber = $ParcelShopNumber;
    }

    /**
     * @return string
     */
    public function getParcelShopNumber()
    {
      return $this->ParcelShopNumber;
    }

    /**
     * @param string $ParcelShopNumber
     * @return \GLS\GetOneParcelShop
     */
    public function setParcelShopNumber($ParcelShopNumber)
    {
      $this->ParcelShopNumber = $ParcelShopNumber;
      return $this;
    }

}
