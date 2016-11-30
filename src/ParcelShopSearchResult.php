<?php

namespace GLS;

class ParcelShopSearchResult
{

    /**
     * @var AccuracyLevel $accuracylevel
     */
    protected $accuracylevel = null;

    /**
     * @var ArrayOfPakkeshopData $parcelshops
     */
    protected $parcelshops = null;

    /**
     * @param AccuracyLevel $accuracylevel
     */
    public function __construct($accuracylevel)
    {
      $this->accuracylevel = $accuracylevel;
    }

    /**
     * @return AccuracyLevel
     */
    public function getAccuracylevel()
    {
      return $this->accuracylevel;
    }

    /**
     * @param AccuracyLevel $accuracylevel
     * @return \GLS\ParcelShopSearchResult
     */
    public function setAccuracylevel($accuracylevel)
    {
      $this->accuracylevel = $accuracylevel;
      return $this;
    }

    /**
     * @return ArrayOfPakkeshopData
     */
    public function getParcelshops()
    {
      return $this->parcelshops;
    }

    /**
     * @param ArrayOfPakkeshopData $parcelshops
     * @return \GLS\ParcelShopSearchResult
     */
    public function setParcelshops($parcelshops)
    {
      $this->parcelshops = $parcelshops;
      return $this;
    }

}
