<?php

$brand="Gucc";
$prices=0;
$promotion=0;
$tax=0;

if($brand == "Adidas")
{
    $prices=200000;
    $promotion=5;
    $tax=2;
}
elseif($brand == "LV")
{
    $prices=300000;
    $promotion=3;
    $tax=5;   
}
elseif($brand == "Gucci")
{
    $prices=500000;
    $promotion=2;
    $tax=7;
}
else
{
    echo "This brand name is incorrect";
}

function calculate($value,$percent)
{
    return $value-(($percent/100)*$value);
}
function promotionAmount($prices,$promotion)
{
    return calculate($prices,$promotion);
}
function totalAmount($promtoin_amount,$tax)
{
    return calculate($promtoin_amount,$tax);
}
echo totalAmount(promotionAmount($prices,$promotion),$tax);
?>