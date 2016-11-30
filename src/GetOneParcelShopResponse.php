<?php

namespace GLS;

class GetOneParcelShopResponse
{

    /**
     * @var PakkeshopData $GetOneParcelShopResult
     */
    protected $GetOneParcelShopResult = null;

    /**
     * @param PakkeshopData $GetOneParcelShopResult
     */
    public function __construct($GetOneParcelShopResult)
    {
      $this->GetOneParcelShopResult = $GetOneParcelShopResult;
    }

    /**
     * @return PakkeshopData
     */
    public function getGetOneParcelShopResult()
    {
      return $this->GetOneParcelShopResult;
    }

    /**
     * @param PakkeshopData $GetOneParcelShopResult
     * @return \GLS\GetOneParcelShopResponse
     */
    public function setGetOneParcelShopResult($GetOneParcelShopResult)
    {
      $this->GetOneParcelShopResult = $GetOneParcelShopResult;
      return $this;
    }

}
