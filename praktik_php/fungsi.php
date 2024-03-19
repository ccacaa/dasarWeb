<?php
//membuat fungsi
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam. ", <br>";
        echo "Perkenalan, nama saya ".$nama. "<br>";
        echo "Senang berkernalan dengan Anda <br>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Carieska", "Hallo");

    echo "<hr>";

    $saya = "Caca";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya);
?>
