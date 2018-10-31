<?php 
include "../config/koneksi.php";
	$allowed_ext = array('png','jpg');
	$file_name = $_FILES['foto']['name'];
	$file_ext = strtolower(end(explode('.', $file_name)));
	$file_size = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];		
	
	$allowed_ext2 = array('png','jpg');
	$file_name2 = $_FILES['foto_ktp']['name'];
	$file_ext2 = strtolower(end(explode('.', $file_name2)));
	$file_size2 = $_FILES['foto_ktp']['size'];
	$file_tmp2 = $_FILES['foto_ktp']['tmp_name'];		

	$nik_guru=$_POST['nik_guru'];
	$nama_guru=$_POST['nama_guru'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$agama=$_POST['agama'];
	$no_telpon=$_POST['no_telpon'];
	$email=$_POST['email'];
	$nama_ayah=$_POST['nama_ayah'];
	$nama_ibu=$_POST['nama_ibu'];
	$status=$_POST['status'];
	$nama_suami_istri=$_POST['nama_suami_istri'];
	$jumlah_anak=$_POST['jumlah_anak'];
	$pend_terakhir=$_POST['pend_terakhir'];
	$nama_sekolah_univ=$_POST['nama_sekolah_univ'];
	$prodi=$_POST['prodi'];
	$ipk=$_POST['ipk'];
	$kode_jabatan=$_POST['kode_jabatan'];
	$ket=$_POST['ket'];
	$tgl_mulai_bekerja=$_POST['tgl_mulai_bekerja'];
	$gaji=$_POST['gaji'];
	
	$lokasi = 'foto/' . $nik_guru . '.' . $file_ext;
	$lokasi2 = 'foto/' . 'ktp'.$nik_guru . '.' . $file_ext;
	
	if(in_array($file_ext, $allowed_ext) === true && in_array($file_ext2, $allowed_ext2) === true){
		if($file_size > 1044070 || $file_size2 > 1044070){
			echo $_SESSION['pesan_salah'] = 'Ukuran File Terlalu Besar';
		}
		else{
			move_uploaded_file($file_tmp, $lokasi);
			move_uploaded_file($file_tmp2, $lokasi2);
			$query = mysql_query("INSERT INTO guru VALUES ('$nik_guru','$nama_guru','$tempat_lahir','$tanggal_lahir','$jk','$alamat','$agama','$no_telpon','$email','$nama_ayah','$nama_ibu','$status','$nama_suami_istri','$jumlah_anak','$pend_terakhir','$nama_sekolah_univ','$prodi','$ipk','$kode_jabatan','$ket','$gaji','$tgl_mulai_bekerja','$lokasi','$lokasi2')");
			if($query){
				echo $_SESSION['pesan'] = 'Data guru Berhasil Disimpan';
				
			}else{
				 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
			}
		}
	}else{
		 echo $_SESSION['pesan_salah'] = 'Ekstensi File Yang Diupload Tidak Sesuai(Tidak Diperbolehkan)';
	}
header("Location:guru");
?>