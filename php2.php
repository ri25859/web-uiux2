<html>
<head>
    <title>Contoh Tabel</title>
</head>
<body>
<form action="cek.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
            <td><input type="submit" name="submit" value="simpan"></td>
        </tr>
    </table>
</form>
    <?php
        echo $_POST['nama'];
        echo "<br>";
        echo $_GET['submit'];
    ?>
</body>
</html>