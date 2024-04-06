<?php
require_once 'prices.php';

// Obtener la moneda seleccionada
$currency = isset($_GET['currency']) ? $_GET['currency'] : 'ARS';

// Devolver los nuevos precios en formato JSON
$response = array(
    'currency' => $currency,
    'finalPriceNOFILA' => $finalPriceNOFILA,
    'finalPriceBUILD_PLUS' => $finalPriceBUILD_PLUS,
    'finalPriceVIP' => $finalPriceVIP,
    'finalPriceCLAN_VIP' => $finalPriceCLAN_VIP,
    'finalPriceVIP_PLUS' => $finalPriceVIP_PLUS,
    'finalPriceVIP_OPAL' => $finalPriceVIP_OPAL
);

echo json_encode($response);
?>