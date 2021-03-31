<?php

//operator matematika

$a = 2;
$b = 2;

$c = $a + $b;
echo $c . '<br>';


$c = $a - $b;
echo $c . '<br>';


$c = $a * $b;

echo $c . '<br>';


$c = $a / $b;
echo floor($c) . '<br>';



$c = $a % $b;

echo $c . '<br>';



//oprator logika

$c = $a < $b;
echo $c;


$c = $a > $b;
echo $c;


$c = $a == $b;
echo $c;


$c = $a != $b;
echo $c . '<br>';


//increment decrement
$a++;
echo $a . '<br>';


$a--;
echo $a . '<br>';

//operator string

$kata = 'Sura';
$kota = 'Baya';

$hasil = $kata . $kota;

$hasil .= ' KOTA PAHLAWAN';
echo $hasil;
