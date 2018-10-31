<?php
include "../config/koneksi.php";
$nik               = $_POST['nik_guru'];
$nama              = $_POST['nama_guru'];
$gaji			   = $_POST['gaji'];
$bulan_transfer	   = $_POST['bulan_transfer'];
$tgl_transfer	   = $_POST['tgl_transfer'];
$jam_transfer	   = $_POST['jam_transfer'];

$query = mysql_query("INSERT INTO gaji (id_gaji, 
                                        nik, 
                                        nama, 
										gaji_pokok, 
										bulan_transfer, 
										tgl_transfer, 
										jam_transfer) 
								VALUES ('', 
								        '$nik', 
								        '$nama', 
										'$gaji', 
										'$bulan_transfer', 
										'$tgl_transfer', 
										'$jam_transfer')");
	if($query){
		echo $_SESSION['pesan'] = 'Gaji Berhasil Ditransfer/Disimpan';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
	}	
	header('location:dgaji');
?>