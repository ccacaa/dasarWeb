<?php
$skorPemain = 499;
$totalSkor = "Total skor pemain adalah: " . $skorPemain;
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";

echo "$totalSkor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>