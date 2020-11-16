<?php

echo "--------------------------------------\n";
echo "Pilih proses yang ingin anda lakukan : \n";
echo "--------------------------------------\n";
echo "1. Menghitung Volume Tabung \n";
echo "2. Menghitung Volume Trapesium\n";
echo "--------------------------------------\n";
echo "Masukan Pilihan Anda : ";
$p = trim(fgets(STDIN));

prosesPemilihan();

function prosesPemilihan() {
    global $p;
    if ($p==1) {
        volumeTabung();
    }
    else if ($p==2) {
        volumeTrapesium();
    }
    else{
        echo "Tidak Ditemukan";
    }
}


function volumeTabung() {

    echo "Masukan tinggi tabung : ";
        $a = trim(fgets(STDIN));

    echo "Masukan jari-jari radius : ";
        $b = trim(fgets(STDIN));
        $c = 3.14;

        $z = $c * $b * $b * $a;

    echo "Hasil = $z \n";
}

 function volumeTrapesium() {

    echo "Masukan panjang alas : ";
        $o = trim(fgets(STDIN));

    echo "Masukan lebar alas : ";
        $u = trim(fgets(STDIN));

    echo "masukan tinggi prisma : ";
        $q = trim(fgets(STDIN));
    
        $i = $o * $q /2 * $u;

        echo "hasil = $i \n";
 }




?>