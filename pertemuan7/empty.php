<?php
$myArray = array();// array kosong
if(empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
    echo "<br>";
} else{
    echo "Array terdefinisi dan tidak kosong.";
    echo "<br>";
}
if(empty($nonExistentVar)) {
    echo "Variabel tidak terdifinisi atau kosong.";
    echo "<br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
    echo "<br>";
}
?>