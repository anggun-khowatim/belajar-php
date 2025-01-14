<?php
$nama = "azriel_";
$nilai = 80;

function tampilnilai(){
    global $nama, $nilai;
    echo $nama . $nilai;
}

tampilnilai();
?>