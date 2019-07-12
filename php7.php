<?php
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan2 ($namaku, $salam="Selamat Datang"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$namaku."<br/>";
        echo "Saya berusia ". hitungUmur(1999, 2019) ." tahun<br/>";
        echo "Senang berkenalan dengan anda <br/>";
    }
perkenalan2("Robby");
?>