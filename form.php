<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="<?php $_PHP_SELF; ?>" method="POST">
<table>
	<tr>
		<td>Nama</td><td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td><td><input type="date" name="lahir"></td>
	</tr>
</table>


 Pria:<input type="radio" name="gender" value=1>&nbsp;Wanita:<input type="radio" name="gender" value=0><br><br>
 Fakultas:<br>
 <input type="checkbox" name="fakultas" value="FIK">FIK<br><input type="checkbox" name="fakultas" value="FT">FT<br>
 <input type="checkbox" name="fakultas" value="FK">FK<br><br>
 Alamat:<br>
 <textarea style="font-family:arial" cols="50" rows="5" placeholder="Ketik alamat disini" name="alamat"></textarea><br><br>
 <input type="submit" name="daftar" value="Daftar"><input type="reset" value="Reset">

</form>
<?php 
error_reporting(0);
if ($_POST['daftar']) {
 $nama = $_POST['nama'];
 $lahir = date('Y-m-d', strtotime($_POST['lahir']));
 echo "Nama anda $nama <br>";
 echo "Tanggal Lahir anda $lahir";
}
?>
</body>
</html>
