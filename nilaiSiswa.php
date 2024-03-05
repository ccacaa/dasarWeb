<?php

$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
foreach($daftarNilai as $nilai){
    $totalNilai += $nilai / 10;
}

echo "Daftar nilai: 85,92,78,64,90,75,88,79,70,96 <br>";
echo "Rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai";
?>