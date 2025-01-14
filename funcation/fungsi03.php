<?php
function sapa($nama){
    echo "selamat pagi $nama".PHP_EOL;
}

echo "masukkan nama : ";
$nama = trim(fgets(STDIN));
sapa($nama);
?>