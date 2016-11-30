<?php

namespace GLS;

class GetParcelShopDropPointResponse
{

    /**
     * @var ParcelShopSearchResult $GetParcelShopDropPointResult
     */
    protected $GetParcelShopDropPointResult = null;

    /**
     * @param ParcelShopSearchResult $GetParcelShopDropPointResult
     */
    public function __construct($GetParcelShopDropPointResult)
    {
      $this->GetParcelShopDropPointResult = $GetParcelShopDropPointResult;
    }

    /**
     * @return ParcelShopSearchResult
     */
    public function getGetParcelShopDropPointResult()
    {
      return $this->GetParcelShopDropPointResult;
    }

    /**
     * @param ParcelShopSearchResult $GetParcelShopDropPointResult
     * @return \GLS\GetParcelShopDropPointResponse
     */
    public function setGetParcelShopDropPointResult($GetParcelShopDropPointResult)
    {
      $this->GetParcelShopDropPointResult = $GetParcelShopDropPointResult;
      return $this;
    }

}
