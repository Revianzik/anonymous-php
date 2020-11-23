<?php

$minimal= 75;
$rapor = [
    ["nama"=>"Susi", "nilai"=> 70],
    ["nama"=>"Andi", "nilai"=> 60],
    ["nama"=>"Ivan", "nilai"=> 75],
    ["nama"=>"Surya", "nilai"=> 80]
];

array_walk($rapor, function($siswa) use ($minimal) {
    echo "Siswa : ". $siswa['nama'] ."\n";
    echo "Nilai : ". $siswa['nilai'] ."\n";
    echo "Status : ";
        if($siswa['nilai'] >= $minimal){
            echo "Anda dinyatakan  lulus \n\n";
        } else {
            echo "Anda dinyatakan tidak lulus \n\n";
        }
});

?>
