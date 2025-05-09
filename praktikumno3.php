<?php
echo "Kode Program PHP - Luas Persegi";
echo "<hr>";

//syntax 1
function luas1($panjang,$lebar){
    return $panjang * $lebar;
}

//syntax 2
function luas2($panjang,$lebar) {
    echo "Luas Persegi luas2 = " . $panjang * $lebar;
}

$hasil = luas1(10,5);
echo "Luas Persegi luas1 = " . $hasil;
echo "<br>";

luas2(10,2);

?>