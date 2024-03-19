<?php
//nomor 15
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

//nomor16
$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ",$pesan);
# ubah setiak kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>

