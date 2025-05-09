<?php
echo "Menghitung Luas Segitiga, Menghitung Sisi Miring Segitiga Dan Keliling Segitiga";
echo "<hr>";

//syntax luas segitiga
function luassegitiga($alas,$tinggi) {
    return 0.5 * $alas * $tinggi;
}


//syntax sisi miring Segitiga
function sisimiring($a,$b) {
    return sqrt((($a * $a) + ($b * $b)));
}

//syntax keliling segitiga
function kelilingsegitiga($a,$b,$c) {
    return $a + $b + $c;
}


//nilai dan output luas segitiga
$alas = 10;
$tinggi = 6;
$hasilluas = luassegitiga($alas,$tinggi);
echo "Luas Persegi = " . $hasilluas;
echo "<hr>";

// nilai dan output sisi miring segitiga
$a = 3;
$b = 4;

$sisiMiringsegitiga = sisimiring($a, $b);

echo "Sisi Miring Segitiga = " . $sisiMiringsegitiga;
echo "<hr>";

//nilai dan output keliling segitiga
$a = 5;
$b = 8;
$c = 10;
$hasilkeliling = kelilingsegitiga($a,$b,$c);
echo "Keliling Segitiga = " . $hasilkeliling;
?>