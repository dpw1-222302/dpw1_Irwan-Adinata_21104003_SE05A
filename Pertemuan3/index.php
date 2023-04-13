<?php
    //Variable
    $nama = "Irwan Adinata";
    $nama = "Berubah";
    const no_Telp = 85156897664;

    //Tipe Data
    $string = "huruf";
    $integer = 78;
    $float = 88.8;
    $boolean = false;
    $array = [
        "ayam"
        , "bebek"
    ];
    $null = null;

    //Aritmatika
    $no1 = 50;
    $no2 = 50;

    $oenjumlahan = $no1 + $no2;
    $pengurangan = $no1 - $no2;
    $perkalian = $no1 *  $no2;
    $pembagian = $no1 / $no2;
    $modulus = $no1 % $no2;
    $pangkat = $no1 ** $no2;

    //Penugasan
    $no1 += $no2;
    $no1 -= $no2;
    $no1 *= $no2;
    $no1 /= $no2;
    $no1 %= $no2;
    $no1 **= $no2;

    //Percabangan
    $no3 = 5;
    $no4 = 10;

    if($no3 == 5){
        $no4 = 10;
    }
    if($no3 <= 5){
        $no4 = 10;
    }
    if($no3 >= 5){
        $no4 = 10;
    }
    if($no3 < 5){
        $no4 = 10;
    }
    if($no3 > 5){
        $no4 = 10;
    }

    //logic
    $no5 = 10;
    $no6 = 5;
    if ($no5 > 0 && $no6 > 0) {
        echo "Benar";

    }
    if ($no5 > 0 || $no6 > 0) {
        echo "Benar";
    }



    //Percabangan
    $no7 = 0;
    $no8 = 10;

    $no7++;
    $no8--;

    if($no7 == 0){
        echo "no 7 sama dengan 0";
    }
    else{
        echo "no 7 berarti bukan 0";
    }

    $tanggal1 = 1;
    switch($tanggal1){
        case 1:
            echo "ini tanggal 1";
            break;
        case 2:
            echo "ini tanggal 2";
            break;
        case 3:
            echo "ini tanggal 3";
            break;
        case 4:
            echo "ini tanggal 4";
            break;
    }


    //Perulangan
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "Perulangan ke-", $i;
        echo "<br>";
    }

    $i = 1;
    while ($i <= 10) {
        echo "Perulangan ke-", $i;
        $i++;
        echo "<br>";
    }

    //fungsi
function aritmatika($a, $b, $tipe)
{
    $total = 0;
    if ($tipe == "+") {
        $total = $a + $b;
    }
    else if ($tipe == "-") {
        $total = $a - $b;
    }
    else if ($tipe == "*") {
        $total = $a - $b;
    }
    else {
        $total = "Maaf tipe yang Anda masukan salah";
    }
}

echo "hasil tambah adalah", aritmatika(5, 5, "+");
echo "hasil kurang adalah", aritmatika(5, 5, "+");
echo "hasil kali adalah", aritmatika(5, 5, "+");
echo "hasilnya adalah", aritmatika(5, 5, "saya");



    echo "Hallo nama saya ", $nama;
    echo "<br>";
    echo "No HP saya ", no_Telp;
    
?>