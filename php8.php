<?php
    function faktorial ($angka){
        if($angka <2){
            return 1;
        }else{
            //Memanggil dirinya sendiri
            return ($angka * faktorial($angka-1));
        }
    }
    //memanggil fungsi
    echo "Faktorial tersebut adalah " . faktorial(4);
?>