<?php
session_start();
ob_start();
// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

$server =  "localhost";
$username = "root";
$password = "";
$database = "ppdb_online";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

// buat variabel untuk validasi dari file fungsi_validasi.php
$val = new validasi;

function cek_sesi()
{
	if((empty($_SESSION['namauser'])) OR (empty($_SESSION['namalengkap'])) OR (empty($_SESSION['passuser'])))
	{
		header('location:404');
	}
}

function pesan_salah($pesan) {
    $pesan = "<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>$pesan</div>";
    return $pesan;
}

function pesan_benar($pesan) {
    $pesan = "<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>$pesan</div>";
    return $pesan;
}

function tgl_indo($tanggal) {
	$thn=substr($tanggal, 0, 4);
	$bln=substr($tanggal, 5, 2);
	$tgl=substr($tanggal, 8, 2);
	switch($bln) {
		case '01': $bln="Januari";break;
		case '02': $bln="Februari";break;
		case '03': $bln="Maret";break;
		case '04': $bln="April";break;
		case '05': $bln="Mei";break;
		case '06': $bln="Juni";break;
		case '07': $bln="Juli";break;
		case '08': $bln="Agustus";break;
		case '09': $bln="September";break;
		case '10': $bln="Oktober";break;
		case '11': $bln="November";break;
		case '12': $bln="Desember";break;
		default: $bln="00";
	}
	$tanggal=$tgl." ".$bln." ".$thn;
	return $tanggal;
}

$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari     = date("w");
$hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia


function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
?>
