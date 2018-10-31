<?php

include "../config/koneksi.php";
$nik = $_GET['nik'];

$q = mysql_query("SELECT * FROM guru WHERE nik_guru='$nik'");
while ($r = mysql_fetch_object ($q)) {
    if (file_exists("$r->foto")) {
        unlink("$r->foto");
    }    
	if (file_exists("$r->foto_ktp")) {
        unlink("$r->foto_ktp");
    }
}
mysql_query("DELETE FROM guru WHERE nik_guru='$nik'");
$_SESSION['pesan'] = "Data guru dengan NIK $nik, Berhasil Dihapus...";
header('Location:guru');
?>