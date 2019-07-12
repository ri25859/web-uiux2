<h3>Luas Persegi Panjang Dengan Input</h3>
 
<form action="php9.php" method="post">
	Panjang : <input type="text" name="panjang"><br>
	Lebar : <input type="text" name="lebar"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		$luas = $panjang * $lebar;
		echo "Luas Persegi panjang dengan panjang : $panjang, dan lebar: $lebar adalah $luas";
    }
    echo "<hr>";
    echo "<h3>Luas Persegi Panjang Tanpa Input</h3>";
    $panjang2=10;
    $lebar2=6.5;
    function hitungLuas($panjang2, $lebar2){
        $luasnya = $panjang2 * $lebar2;
        return $luasnya;
    }
    echo "Luas Persegi panjang dengan panjang : ".$panjang2.", dan lebar: ".$lebar2." adalah ". hitungLuas(10,6.5);
?>