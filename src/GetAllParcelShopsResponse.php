<?php

namespace GLS;

class GetAllParcelShopsResponse
{

    /**
     * @var ArrayOfPakkeshopData $GetAllParcelShopsResult
     */
    protected $GetAllParcelShopsResult = null;

    /**
     * @param ArrayOfPakkeshopData $GetAllParcelShopsResult
     */
    public function __construct($GetAllParcelShopsResult)
    {
      $this->GetAllParcelShopsResult = $GetAllParcelShopsResult;
    }

    /**
     * @return ArrayOfPakkeshopData
     */
    public function getGetAllParcelShopsResult()
    {
      return $this->GetAllParcelShopsResult;
    }

    /**
     * @param ArrayOfPakkeshopData $GetAllParcelShopsResult
     * @return \GLS\GetAllParcelShopsResponse
     */
    public function setGetAllParcelShopsResult($GetAllParcelShopsResult)
    {
      $this->GetAllParcelShopsResult = $GetAllParcelShopsResult;
      return $this;
    }

}
