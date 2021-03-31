<?php

// array dimensi

$nama = array("joni", "tejo", "budi", "siti", 100, 2.5);

// var_dump($nama);

// echo "<br>";

// echo $nama[3];

// echo "<br>";

// for ($i=6; $i < 6 ; $i++) { 
//     echo $i;
//     echo $nama[$i]."<br>";
// }


// foreach ($nama as $k) {
//     echo $k . '<br>';
// }

// array asosiatif

// $nama = array(
//     "joni" => "surabaya",
//     "budi" => "malang raya",
//     "tejo" => "jakarta",
//     "siti" => "sidoarjo"
// );

$nama["joni"] = "surabaya";
$nama["budi"] = "malang rawa";
$nama["tejo"] = "jakarta";
$nama["siti"] = "sidoarjo";
$nama["edi"] = "semarang";




var_dump($nama);

echo "<br>";

// echo $nama['budi'];

foreach ($nama as $k => $v) {
    echo $k . " => " . $v;

    echo "<br>";
}
