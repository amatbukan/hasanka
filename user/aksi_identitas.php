<?php
include "../config/koneksi.php";
include "../config/fungsi_thumb.php";
include "../config/fungsi_seo.php";
$tgl_sekarang = date('Y-m-d');
$jam_sekarang = date("h:i:s");
$aksi=$_GET['aksi'];

if($aksi=='e'){
$lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila ada gambar yang diupload
  if (empty($lokasi_file)){
    $query = mysql_query("UPDATE identitas SET nama_website   = '$_POST[nama_website]',
	                                       pembuka   = '$_POST[pembuka]',
	                                       url       = '$_POST[url]',
										  facebook   = '$_POST[facebook]',
										  	google   = '$_POST[google]',
										 	twitter  = '$_POST[twitter]', 
                                      meta_deskripsi = '$_POST[meta_deskripsi]',
                                      meta_keyword   = '$_POST[meta_keyword]'  
                                WHERE id_identitas   = '$_POST[id]'");
	if($query){
		echo $_SESSION['pesan'] = 'Identitas Berhasil Diperbarui';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
	}
  }
  else{
  UploadFavicon($nama_file);
    $query = mysql_query("UPDATE identitas SET nama_website   = '$_POST[nama_website]',
	                                       pembuka   = '$_POST[pembuka]',
	                                       url       = '$_POST[url]',
										  facebook   = '$_POST[facebook]',
										  	google   = '$_POST[google]',
										 	twitter  = '$_POST[twitter]', 
                                      meta_deskripsi = '$_POST[meta_deskripsi]',
                                      meta_keyword   = '$_POST[meta_keyword]',
                                      	  gambar       = '$nama_file'   
                                WHERE id_identitas   = '$_POST[id]'");
	if($query){
		echo $_SESSION['pesan'] = 'Identitas Berhasil Diperbarui';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
	}								
  }
  header('location:identitas');
}	
	
?>