<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmpt = $_POST['tmpt'];
    $sex = $_POST['sex'];
    $usia = $_POST['usia'];
    $submit = $_POST['submit'];

    if($submit == ""){
        header("location:php3.php");
    }else{
        echo "Nama anda adalah ".$nama . "<br>";
        echo "Beralamat di ".$alamat . "<br>";
        echo "Dengan tempat ".$tmpt . "<br>";
        echo "Jenis Kelamin ".$sex . "<br>";
        echo "Berusia ".$usia;
    }
?>