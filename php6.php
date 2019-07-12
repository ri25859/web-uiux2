<?php

function perkenalan ($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan ("Robby", "Hi");

echo "<hr>";
$saya = "Indra";
$ucapansalam = "Selamat Pagi";
perkenalan($saya,$ucapansalam);

function perkenalan2 ($namaku, $salam="Selamat Datang"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$namaku."<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan2 ("Robby", "Hi");

echo "<hr>";
$saya = "Indra";
$ucapansalam = "Selamat Pagi";
perkenalan2($saya,$ucapansalam);
?>