<?php
    $brand="Adidas";
    $prices=20000;
    $discount=7;
    function amount($prices,$discount)
    {
        return $prices-($prices*($discount/100));
    }
    echo"The $brand brand prices is". amount($prices,$discount);
    echo"<br>";
    $pi=3.142;
    $radius=7;
    function area($pi,$radius)
    {
        return $pi*($radius**2);
    }
    echo"The circle of area is". area($pi,$radius);
    echo "<br>";
    $radius=8;
    function volume($pi,$radius)
    {
        return (4/3)*$pi*($radius**3);   
    }
    echo"The circle of volume is". volume($pi,$radius);

    echo"<br>";
    $brands="Adidas";
    var_dump($brands);
    echo"<br>";
    // gettype($brands);

    // code reuseability
    $pri=60000;
    $promotion=5;
    $tax=2;

    function promotionAmount($pri,$promotion)
    {
        return $pri-(($promotion/100)*$pri);
    }

    function totalAmount($tax,$promotion_amount)
    {
        return $promotion_amount-(($tax/100)*$promotion_amount);
    }

    echo totalAmount($tax,promotionAmount($pri,$promotion));
     // code reuseability
?>