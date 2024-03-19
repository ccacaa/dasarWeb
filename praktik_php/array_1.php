<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            // Perulangan for untuk menampilkan isi array
            for ($i = 0; $i < count($Listdosen); $i++) {
            echo $Listdosen[$i] . "<br>";
            }
    ?>
    </body>
</html>