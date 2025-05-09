<?php
echo "Menghitung Luas Persegi Dan Menghitung Sisi Miring Segitiga";
echo "<hr>";

//syntax luas persegi
function luaspersegi($panjang,$lebar) {
    return $panjang * $lebar;
}


//syntax sisi miring Segitiga
function sisimiring($a,$b) {
    return sqrt((($a * $a) + ($b * $b)));
}


//nilai dan output luas persegi 
$hasilpersegi = luaspersegi(10,5);
echo "Luas Persegi = " . $hasilpersegi;
echo "<br>";

// nilai dan output sisi miring segitiga
$a = 3;
$b = 4;

$sisiMiringsegitiga = sisimiring($a, $b);

echo "Sisi Miring Segitiga = " . $sisiMiringsegitiga;
?>