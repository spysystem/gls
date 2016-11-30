<?php

namespace GLS;

class SearchNearestParcelShopsResponse
{

    /**
     * @var ParcelShopSearchResult $SearchNearestParcelShopsResult
     */
    protected $SearchNearestParcelShopsResult = null;

    /**
     * @param ParcelShopSearchResult $SearchNearestParcelShopsResult
     */
    public function __construct($SearchNearestParcelShopsResult)
    {
      $this->SearchNearestParcelShopsResult = $SearchNearestParcelShopsResult;
    }

    /**
     * @return ParcelShopSearchResult
     */
    public function getSearchNearestParcelShopsResult()
    {
      return $this->SearchNearestParcelShopsResult;
    }

    /**
     * @param ParcelShopSearchResult $SearchNearestParcelShopsResult
     * @return \GLS\SearchNearestParcelShopsResponse
     */
    public function setSearchNearestParcelShopsResult($SearchNearestParcelShopsResult)
    {
      $this->SearchNearestParcelShopsResult = $SearchNearestParcelShopsResult;
      return $this;
    }

}
