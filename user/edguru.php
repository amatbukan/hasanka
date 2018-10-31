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
	
	if(in_array($file_ext, $allowed_ext) === true && in_array($file_ext2, $allowed_ext2) === false){
		if($file_size > 1044070){
			 echo $_SESSION['pesan_salah'] = 'Ukuran File Terlalu Besar';
		}
		else{
			move_uploaded_file($file_tmp, $lokasi);
			$query = mysql_query("UPDATE guru SET nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', alamat='$alamat', agama='$agama', no_telpon='$no_telpon', email='$email', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', status='$status', nama_suami_istri='$nama_suami_istri', jumlah_anak='$jumlah_anak', pend_terakhir='$pend_terakhir', nama_sekolah_univ='$nama_sekolah_univ', prodi='$prodi', ipk='$ipk', kode_jabatan='$kode_jabatan', ket='$ket', tgl_mulai_bekerja='$tgl_mulai_bekerja', foto='$lokasi', gaji='$gaji' WHERE nik_guru='$nik_guru'");
			if($query){
				echo $_SESSION['pesan'] = 'Data Guru Berhasil Disimpan';
			}else{
				 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
			}
		}
	}
	elseif(in_array($file_ext, $allowed_ext) === false && in_array($file_ext2, $allowed_ext2) === true){
		if($file_size2 > 1044070){	
			echo $_SESSION['pesan_salah'] = 'Ukuran File Terlalu Besar';
		}
		else{
			move_uploaded_file($file_tmp2, $lokasi2);
				$query2 = mysql_query("UPDATE guru SET nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', alamat='$alamat', agama='$agama', no_telpon='$no_telpon', email='$email', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', status='$status', nama_suami_istri='$nama_suami_istri', jumlah_anak='$jumlah_anak', pend_terakhir='$pend_terakhir', nama_sekolah_univ='$nama_sekolah_univ', prodi='$prodi', ipk='$ipk', kode_jabatan='$kode_jabatan', ket='$ket', tgl_mulai_bekerja='$tgl_mulai_bekerja', foto_ktp='$lokasi2', gaji='$gaji' WHERE nik_guru='$nik_guru'");
				if($query2){
					echo $_SESSION['pesan'] = 'Data Karyawan Berhasil Disimpan';
				}else{
					echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
				}
		}
	}
	elseif(in_array($file_ext, $allowed_ext) === true && in_array($file_ext2, $allowed_ext2) === true){
		if(($file_size > 1044070) OR ($file_size2 > 1044070)){
			 echo $_SESSION['pesan_salah'] = 'Ukuran File Terlalu Besar';
		}
		else{
			move_uploaded_file($file_tmp, $lokasi);								
			move_uploaded_file($file_tmp2, $lokasi2);
				$query3 = mysql_query("UPDATE guru SET nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', alamat='$alamat', agama='$agama', no_telpon='$no_telpon', email='$email', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', status='$status', nama_suami_istri='$nama_suami_istri', jumlah_anak='$jumlah_anak', pend_terakhir='$pend_terakhir', nama_sekolah_univ='$nama_sekolah_univ', prodi='$prodi', ipk='$ipk', kode_jabatan='$kode_jabatan', ket='$ket', tgl_mulai_bekerja='$tgl_mulai_bekerja', foto='$lokasi', foto_ktp='$lokasi2', gaji='$gaji' WHERE nik_guru='$nik_guru'");
				if($query3){
					echo $_SESSION['pesan'] = 'Data Karyawan Berhasil Disimpan';	
				}else{
					echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
				}
		}
	}	
	elseif(in_array($file_ext, $allowed_ext) === false && in_array($file_ext2, $allowed_ext2) === false){
				$query4 = mysql_query("UPDATE guru SET nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', alamat='$alamat', agama='$agama', no_telpon='$no_telpon', email='$email', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', status='$status', nama_suami_istri='$nama_suami_istri', jumlah_anak='$jumlah_anak', pend_terakhir='$pend_terakhir', nama_sekolah_univ='$nama_sekolah_univ', prodi='$prodi', ipk='$ipk', kode_jabatan='$kode_jabatan', ket='$ket', tgl_mulai_bekerja='$tgl_mulai_bekerja', gaji='$gaji' WHERE nik_guru='$nik_guru'");
				if($query4){
					echo $_SESSION['pesan'] = 'Data Karyawan Berhasil Disimpan';	
				}else{
					echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
				}
		}
	else{
		echo $_SESSION['pesan_salah'] = 'Ekstensi File Yang Diupload Tidak Sesuai(Tidak Diperbolehkan)';
		}
header("Location:guru");
?>