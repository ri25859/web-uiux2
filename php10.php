<h3>Hitung Luas Setengah Lingkaran</h3>
 
<p>Masukkan Jari-Jari Lingkaran</p>
<form action="php10.php" method="post">
	Diameter :<input type="text" name="diameter"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$diameter = $_POST['diameter'];
    $jari3 = 1/2 * $diameter;
    $phi = 22/7;
    $luas_lingkaran = $phi * ($jari3 * $jari3);
    $hasil = 1/2 * $luas_lingkaran;
	
	echo "Luas lingkaranan setengah lingkaran yang berdiameter $diameter cm adalah $hasil <br/>";
}
echo "<hr>";
echo "<h3>Luas setengah lingkaran Tanpa Input</h3>";
function luas($p,$d){
    $j2=$d/2;
    $h=($p*$j2*$j2)/2;
    return$h;
}
echo "Luasnya setengah lingkaran yang berdiameter $diameter cm adalah ".luas(3.14, 10);
?>