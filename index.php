<?php

include 'autoloader.php';

//var_dump(['1' => '0']);
$teste = '0';
$tes2 = '34';

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->apply(130) . "\n";
