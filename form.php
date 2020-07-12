<a href="form.html">kembali ke form</a>
<<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";

$eror = false;

if ($_POST)['nama']=='' {
	echo "nama tidak boleh kosong<br/>";
	$error = true;
}
if ($_POST)['nim']=='' {
	echo "nama tidak boleh kosong<br/>";
	$error = true;
}
if ($_POST)['prodi']=='' {
	echo "nama tidak boleh kosong<br/>";
	$error = true;
}
if ($_POST)['fakultas']=='' {
	echo "nama tidak boleh kosong<br/>";
	$error = true;
}
if ($_POST)['alamat']=='' {
	echo "nama tidak boleh kosong<br/>";
	$error = true;
}
if ($_POST)['no.tlp']=='' {
	echo "nomor telepon harus lebih dari 9 digit<br/>";
	$error = true;
}

if (!error){
	echo "terimaksih data telah benar;
}

?>