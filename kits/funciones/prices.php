<?php
// Definir los precios de los productos
$products = array(
    "NOFILA" => array(
        "ARS" => 650,
        "USD" => 1
    ),
    "BUILD+" => array(
        "ARS" => 1300,
        "USD" => 1.50
    ),
    "VIP" => array(
        "ARS" => 1900,
        "USD" => 2
    ),
    "CLAN VIP" => array(
        "ARS" => 2300,
        "USD" => 2.50
    ),
    "VIP+" => array(
        "ARS" => 3500,
        "USD" => 3.50
    ),
    "VIP OPAL" => array(
        "ARS" => 4000,
        "USD" => 4.50
    ),
    // Agrega más productos si es necesario
);

// Aumento en porcentaje
$aumento = 0.00; // 0.10 = 10%

$currency = isset($_GET['currency']) ? $_GET['currency'] : 'ARS';

$finalPriceNOFILA = calculatePrice($products["NOFILA"][$currency], $currency, $aumento);
$finalPriceBUILD_PLUS = calculatePrice($products["BUILD+"][$currency], $currency, $aumento);
$finalPriceVIP = calculatePrice($products["VIP"][$currency], $currency, $aumento);
$finalPriceCLAN_VIP = calculatePrice($products["CLAN VIP"][$currency], $currency, $aumento);
$finalPriceVIP_PLUS = calculatePrice($products["VIP+"][$currency], $currency, $aumento);
$finalPriceVIP_OPAL = calculatePrice($products["VIP OPAL"][$currency], $currency, $aumento);

// Función para calcular el precio final del producto
function calculatePrice($basePrice, $currency, $aumento)
{
    if ($currency === 'USD')
    {
        // Obtener el precio base en USD directamente
        $price = $basePrice;
    }
    else
    {
        $price = $basePrice;
    }

    // Aplicar el aumento si es necesario
    $price *= (1 + $aumento);

    // Redondear el precio a 2 decimales
    $price = round($price, 2);

    return $price;
}