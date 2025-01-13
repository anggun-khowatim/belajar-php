<?php
$siswa = [
    "siswa1"=>[
        "nama" => "ka_azriel_",
        "kelas" => 12
    ],
    "siswa2"=>[
        "nama" => "azriel",
        "kelas" => 11
    ]
    ];

foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach($santri as $data => $isi){
        echo ucwords($data)." : ". $isi . PHP_EOL;
    }
}
?>