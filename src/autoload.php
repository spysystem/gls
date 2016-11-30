<?php


 function autoload_776dc3f671325359f4cb9b8ccb6293e6($class)
{
    $classes = array(
        'GLS\WsShopFinder' => __DIR__ .'/WsShopFinder.php',
        'GLS\GetOneParcelShop' => __DIR__ .'/GetOneParcelShop.php',
        'GLS\GetOneParcelShopResponse' => __DIR__ .'/GetOneParcelShopResponse.php',
        'GLS\PakkeshopData' => __DIR__ .'/PakkeshopData.php',
        'GLS\ArrayOfWeekday' => __DIR__ .'/ArrayOfWeekday.php',
        'GLS\Weekday' => __DIR__ .'/Weekday.php',
        'GLS\Day' => __DIR__ .'/Day.php',
        'GLS\Hour' => __DIR__ .'/Hour.php',
        'GLS\ArrayOfBreak' => __DIR__ .'/ArrayOfBreak.php',
        'GLS\BreakCustom' => __DIR__ .'/BreakCustom.php',
        'GLS\GetAllParcelShops' => __DIR__ .'/GetAllParcelShops.php',
        'GLS\GetAllParcelShopsResponse' => __DIR__ .'/GetAllParcelShopsResponse.php',
        'GLS\ArrayOfPakkeshopData' => __DIR__ .'/ArrayOfPakkeshopData.php',
        'GLS\GetParcelShopsInZipcode' => __DIR__ .'/GetParcelShopsInZipcode.php',
        'GLS\GetParcelShopsInZipcodeResponse' => __DIR__ .'/GetParcelShopsInZipcodeResponse.php',
        'GLS\SearchNearestParcelShops' => __DIR__ .'/SearchNearestParcelShops.php',
        'GLS\SearchNearestParcelShopsResponse' => __DIR__ .'/SearchNearestParcelShopsResponse.php',
        'GLS\ParcelShopSearchResult' => __DIR__ .'/ParcelShopSearchResult.php',
        'GLS\AccuracyLevel' => __DIR__ .'/AccuracyLevel.php',
        'GLS\GetParcelShopDropPoint' => __DIR__ .'/GetParcelShopDropPoint.php',
        'GLS\GetParcelShopDropPointResponse' => __DIR__ .'/GetParcelShopDropPointResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_776dc3f671325359f4cb9b8ccb6293e6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
