<?php
echo "Masukkan nama : ";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai anda : ";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat $nama, Anda Lulus";
}else{
    echo "Maaf $nama, Anda belum lulus 😞";
}
?>