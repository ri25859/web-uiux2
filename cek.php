<?php
    $nama = $_POST['nama'];

    if($nama == ""){
        header("location:php2.php");
    }else{
        echo "Nama adalah ".$nama;
    }
?>