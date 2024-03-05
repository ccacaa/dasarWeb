<?php

$nilaiSiswa =[
    ["Alice",85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90],
];

$jumlahSiswa = count($nilaiSiswa);
$totalNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai[1];
}
$nilaiRataRata = $totalNilai / $jumlahSiswa;

echo "Daftar nilai siswa di atas rata-rata kelas: <br>";
foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $nilaiRataRata) {
        echo $siswa[0] . ": " . $siswa[1] . "<br>";
    }
}

echo"Nilai Rata-rata Kelas: " . $nilaiRataRata;

?>
