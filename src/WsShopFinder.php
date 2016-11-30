<?php

namespace GLS;

/**
 * Class WsShopFinder
 *
 * @package GLS
 */
class WsShopFinder extends \SoapClient
{
	const	WSDLUrl			= 'http://www.gls.dk/webservices_v4/wsShopFinder.asmx?WSDL';
	const   API_SoapOptions	= [
				'trace'        => true,
				'exceptions'   => true,
				'soap_version' => SOAP_1_2,
				'encoding'     => 'UTF-8'
			];

	/**
	 * @return static
	 */
	public static function Create()
	{
		$oService	= new static(static::API_SoapOptions, static::WSDLUrl);

		return $oService;
	}

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
      'GetOneParcelShop' => 'GLS\\GetOneParcelShop',
      'GetOneParcelShopResponse' => 'GLS\\GetOneParcelShopResponse',
      'PakkeshopData' => 'GLS\\PakkeshopData',
      'ArrayOfWeekday' => 'GLS\\ArrayOfWeekday',
      'Weekday' => 'GLS\\Weekday',
      'Hour' => 'GLS\\Hour',
      'ArrayOfBreak' => 'GLS\\ArrayOfBreak',
      'Break' => 'GLS\\BreakCustom',
      'GetAllParcelShops' => 'GLS\\GetAllParcelShops',
      'GetAllParcelShopsResponse' => 'GLS\\GetAllParcelShopsResponse',
      'ArrayOfPakkeshopData' => 'GLS\\ArrayOfPakkeshopData',
      'GetParcelShopsInZipcode' => 'GLS\\GetParcelShopsInZipcode',
      'GetParcelShopsInZipcodeResponse' => 'GLS\\GetParcelShopsInZipcodeResponse',
      'SearchNearestParcelShops' => 'GLS\\SearchNearestParcelShops',
      'SearchNearestParcelShopsResponse' => 'GLS\\SearchNearestParcelShopsResponse',
      'ParcelShopSearchResult' => 'GLS\\ParcelShopSearchResult',
      'GetParcelShopDropPoint' => 'GLS\\GetParcelShopDropPoint',
      'GetParcelShopDropPointResponse' => 'GLS\\GetParcelShopDropPointResponse',
    ];

	/**
	 * @param array  $options A array of config values
	 * @param string $wsdl    The wsdl file to use
	 *
	 * @throws \Exception
	 */
    public function __construct(array $options = [], $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge([
      'features' => 1,
    ], $options);
      if (!$wsdl) {
		  throw new \Exception('Missing WSDL!');
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get one ParcelShop
     *
     * @param GetOneParcelShop $parameters
     * @return GetOneParcelShopResponse
     */
    public function GetOneParcelShop(GetOneParcelShop $parameters)
    {
      return $this->__soapCall('GetOneParcelShop', [$parameters]);
    }

    /**
     * Returns all ParcelShops in a given country
     *
     * @param GetAllParcelShops $parameters
     * @return GetAllParcelShopsResponse
     */
    public function GetAllParcelShops(GetAllParcelShops $parameters)
    {
      return $this->__soapCall('GetAllParcelShops', [$parameters]);
    }

    /**
     * Returns all ParcelShops in a zipcode - or the 3 nearest in other zipcodes
     *
     * @param GetParcelShopsInZipcode $parameters
     * @return GetParcelShopsInZipcodeResponse
     */
    public function GetParcelShopsInZipcode(GetParcelShopsInZipcode $parameters)
    {
      return $this->__soapCall('GetParcelShopsInZipcode', [$parameters]);
    }

    /**
     * Search for nearest ParcelShops to an address
     *
     * @param SearchNearestParcelShops $parameters
     * @return SearchNearestParcelShopsResponse
     */
    public function SearchNearestParcelShops(SearchNearestParcelShops $parameters)
    {
      return $this->__soapCall('SearchNearestParcelShops', [$parameters]);
    }

    /**
     * Get ParcelShop droppoint close to an address
     *
     * @param GetParcelShopDropPoint $parameters
     * @return GetParcelShopDropPointResponse
     */
    public function GetParcelShopDropPoint(GetParcelShopDropPoint $parameters)
    {
      return $this->__soapCall('GetParcelShopDropPoint', [$parameters]);
    }

}
