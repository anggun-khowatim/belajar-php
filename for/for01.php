<?php
echo "masukkan nilai awal :";
$awal = trim(fgets(STDIN));

echo "masukkan nilai akhir :";
$akhir = trim(fgets(STDIN));

for($awal; $awal<=$akhir; $awal++){
    echo "antrian ke-$awal \n";
}
?>