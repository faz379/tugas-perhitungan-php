<?php

$a = 6;
$b = 1;
$c = 2;
$d = 2.5;
$e = 3;
$f = 4;
$h = 5;

$penjumlahan = $a + $b;
$pegurangan = $a - $b;
$perkalian1 = $a * $c;
$perkalian2 = $a * $d;
$pembagian1 = $a / $f;
$pembagian3 = $a % $h;
$pembagian4 = $a % $f;
$pembagian5 = $a % $e;


echo "Penjumlahan dan Pengurangan : <br>";
echo "$a + $b = $penjumlahan <br>";
echo "$a - $b = $pegurangan";

echo "<br><br>Perkalian : <br>";
echo "$a * $c = $perkalian1 <br>";
echo "$a * $d = $perkalian2";

echo "<br><br>Pembagian : <br>";
echo "$a / $f = $pembagian1 <br>";
echo ("$a / " . number_format($f, 1) . " = $pembagian1 <br>");
echo "$a % $h = $pembagian3 <br>";
echo "$a % $f = $pembagian4 <br>";
echo "$a % $e = $pembagian5";

?>