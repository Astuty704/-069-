<!DOCTYPE html>
<html>
<head><title>Aplikasi Riwayat Hidup</title>
</head>
<body>
<form name=”riwayat_hidup” action=”” method=”post”>
<table border=”1″ align=”center” bgcolor=”lightgreen”>
<tr>
<td colspan=”3″ align=”center”><h2 align=”center”>Form Daftar Riwayat Hidup</h2></td>
</tr>
<tr>
<th>Data Diri</th>
</tr>
<tr>
<td>id pelamar kerja</td>
<td><input name=”id_pelamar_kerja” type=”hidden”></td>
</tr>
<tr>
<td>nama lengkap</td>
<td><input name=”textnama_lengkap” type=”text” size=”50″ maxlength=”50″></td>
</tr>
<tr>
<td>ttl</td>
<td>tempat lahir <input name=”texttempat_lahir” type=”text” size=”24″ maxlength=”24″><hr>
tanggal lahir <input name=”texttanggal_lahir” type=”text” size=”24″ maxlength=”24″ value=”YYYY-MM-DD”></td>
</tr>
<tr>
<td>jenis kelamin</td>
<td><input name=”radiokelamin” type=”radio” value=”laki-laki”>laki-laki
<input name=”radiokelamin” type=”radio” value=”perempuan”>perempuan</td>
</tr>
<tr>
<td>alamat</td>
<td><textarea name=”textalamat” cols=”30″ rows=”5″></textarea></td>
</tr>
<tr>
<td>agama</td>
<td><input name=”textagama” type=”text” size=”24″ maxlength=”24″></td>
</tr>
<tr>
<td>kebangsaan</td>
<td><input name=”radiokebangsaan” type=”radio” value=”indonesia”>Indonesia
<input name=”radiokebangsaan” type=”radio” value=”asing”>Asing</td>
</tr>
<tr>
<td>suku</td>
<td><input name=”textsuku” type=”text” size=”50″ maxlength=”50″></td>
</tr>
<tr>
<td>status perkawinan</td>
<td><input name=”radiostatus” type=”radio” value=”belum menikah”>Belum Menikah
<input name=”radiostatus” type=”radio” value=”menikah”>Menikah</td>
</tr>
<tr>
<th>Riwayat Pendidikan</th>
</tr>
<tr>
<td>pendidikan formal</td>
<td><textarea name=”textpendidikan_formal” cols=”30″ rows=”5″></textarea></td>
</tr>
<tr>
<td>pendidikan non formal</td>
<td><textarea name=”textpendidikan_nonformal” cols=”30″ rows=”5″></textarea></td>
</tr>
<tr>
<th>Keahlian dan Pengalaman Kerja</th>
</tr>
<tr>
<td>skill dan keahlian</td>
<td><textarea name=”textkeahlian” cols=”30″ rows=”5″></textarea></td>
</tr>
<tr>
<td>pengalaman kerja</td>
<td><textarea name=”textpengalaman_kerja” cols=”30″ rows=”5″></textarea></td>
</tr>
<tr>
<td colspan=”3″ align=”center”>
<input name=”buttonsave” type=”submit” value=”save”>
<input name=”buttoncancel” type=”reset” value=”cancel”>
</td>
</tr>
</table>
</form>
<?php
if($_POST[“buttonsave”]==”save”)
{
$textnama_lengkap=$_POST[‘textnama_lengkap’];
$texttempat_lahir=$_POST[‘texttempat_lahir’];
$texttanggal_lahir=$_POST[‘texttanggal_lahir’];
$radiokelamin=$_POST[‘radiokelamin’];
$textalamat=$_POST[‘textalamat’];
$textagama=$_POST[‘textagama’];
$radiokebangsaan=$_POST[‘radiokebangsaan’];
$textsuku=$_POST[‘textsuku’];
$radiostatus=$_POST[‘radiostatus’];
$textpendidikan_formal=$_POST[‘textpendidikan_formal’];
$textpendidikan_nonformal=$_POST[‘textpendidikan_nonformal’];
$textkeahlian=$_POST[‘textkeahlian’];
$textpengalaman_kerja=$_POST[‘textpengalaman_kerja’];
$server=”localhost”;
$user=”root”;
$password=”root”;
$id_mysql=mysql_connect(“localhost”,”root”,”root”);
$db_riwayat_hidup=mysql_select_db(“riwayat_hidup”, $id_mysql);
$sql = “INSERT INTO `riwayat_hidup`.`daftar_riwayat_hidup` (`nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `kebangsaan`, `suku`, `status_perkawinan`, `pendidikan_formal`, `pendidikan_nonformal`, `skill_dan_keahlian`, `pengalaman_kerja`) VALUES (‘$textnama_lengkap’, ‘$texttempat_lahir’, ‘$texttanggal_lahir’, ‘$radiokelamin’, ‘$textalamat’, ‘$textagama’, ‘$radiokebangsaan’, ‘$textsuku’, ‘$radiostatus’, ‘$textpendidikan_formal’, ‘$textpendidikan_nonformal’, ‘$textkeahlian’, ‘$textpengalaman_kerja’)”;
$hasil = mysql_query($sql, $id_mysql);
if(empty($hasil))
print(“data pelamar kerja dengan nama = ‘$textnama_lengkap’ dan skill pada = ‘$textkeahlian’ belum disimpan”);
else
print(“data pelamar kerja dengan nama = ‘$textnama_lengkap’ dan skill pada = ‘$textkeahlian’ sudah disimpan di database”);
mysql_close($id_mysql);
}
?>
</body>
</html>