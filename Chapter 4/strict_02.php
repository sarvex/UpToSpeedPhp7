<?php
//declare(strict_types=1);

require_once './strict_01.php';

$num = [18.6, 21.2, 16.5];

$avg = roundedAverage($num);
echo $avg . '<br>';

//$total = addIntegers($avg, 12345);
//echo strrev($total);