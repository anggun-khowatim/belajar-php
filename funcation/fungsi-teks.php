<?php
$file = fopen("halo.txt","w");

$teks = "halo \n";
fwrite($file,$teks);

$teks = "saya sedang beljar PHP.";
fwrite($file,$teks);

fclose($file);
?>