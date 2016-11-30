<?php

namespace GLS;

class GetParcelShopsInZipcodeResponse
{

    /**
     * @var ArrayOfPakkeshopData $GetParcelShopsInZipcodeResult
     */
    protected $GetParcelShopsInZipcodeResult = null;

    /**
     * @param ArrayOfPakkeshopData $GetParcelShopsInZipcodeResult
     */
    public function __construct($GetParcelShopsInZipcodeResult)
    {
      $this->GetParcelShopsInZipcodeResult = $GetParcelShopsInZipcodeResult;
    }

    /**
     * @return ArrayOfPakkeshopData
     */
    public function getGetParcelShopsInZipcodeResult()
    {
      return $this->GetParcelShopsInZipcodeResult;
    }

    /**
     * @param ArrayOfPakkeshopData $GetParcelShopsInZipcodeResult
     * @return \GLS\GetParcelShopsInZipcodeResponse
     */
    public function setGetParcelShopsInZipcodeResult($GetParcelShopsInZipcodeResult)
    {
      $this->GetParcelShopsInZipcodeResult = $GetParcelShopsInZipcodeResult;
      return $this;
    }

}
