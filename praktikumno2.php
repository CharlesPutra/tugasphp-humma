<?php

$siswa = array(
    array(12231232, 'bima', 'Teknik Kendaraan Ringan'),
    array(12424325, 'nisa', 'teknik kendaraan ringan'),
    array(14252423, 'pandu', 'multipedia'),
    array(15445222, 'niken', 'teknik komputer dan jaringan'),
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Siswa Index ke-$row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$siswa[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
