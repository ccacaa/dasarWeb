<?php
// Jumlah total kursi di restoran
$totalKursi = 45;

// Jumlah kursi yang sudah ditempati oleh pelanggan
$kursiTerisi = 28;

// Menghitung jumlah kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi yang masih kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "Total kursi: $totalKursi <br>";
echo  "Kursi terisi: $kursiTerisi <br>";

echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKosong, 2) . "%";
?>