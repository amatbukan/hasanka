<?php
include "../config/koneksi.php";
include "../config/fungsi_thumb.php";
include "../config/fungsi_seo.php";
$tgl_sekarang = date('Y-m-d');
$jam_sekarang = date("h:i:s");
$aksi=$_GET['aksi'];

$image_path = "../logo/imagomedia.png";
$font_path = "RIZAL.TTF";
$font_size = 14;       // in pixcels
//$water_mark_text_1 = "9";
$water_mark_text_2 = "Hasanka";

function watermark_image($oldimage_name){
    global $image_path;
    list($owidth,$oheight) = getimagesize($oldimage_name);
    $width = $owidth;
	$height = $oheight;    
    $im = imagecreatetruecolor($width, $height);
    $img_src = imagecreatefromjpeg($oldimage_name);
    imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
    $watermark = imagecreatefrompng($image_path);
    list($w_width, $w_height) = getimagesize($image_path);        
     $pos_x = $width - $w_width -5; 
    $pos_y = $height - $w_height - 5;
    imagecopy($im, $watermark, $pos_x, $pos_y, 0, 0, $w_width, $w_height);
    imagejpeg($im, $oldimage_name, 100);
    imagedestroy($im);
	return true;
}


if($aksi=='h'){
  $data=mysql_fetch_array(mysql_query("SELECT gambar FROM berita WHERE id_berita='$_GET[id]'"));
  if ($data[gambar]!=''){
     mysql_query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
     unlink("../foto_berita/$data[gambar]");   
     unlink("../foto_berita/small_$data[gambar]");   
  }
  else{
     mysql_query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
  }
  $_SESSION['pesan'] = "Data Berita Berhasil Dihapus...";
  header('location:berita');
}
elseif($aksi=='t'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  if (!empty($_POST['tag_seo'])){
    $tag_seo = $_POST['tag_seo'];
    $tag=implode(',',$tag_seo);
  }
  $judul_seo      = seo_title($_POST[judul]);

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    UploadImage($nama_file_unik);
	watermark_image('../foto_berita/'.$nama_file_unik);

   $query = mysql_query("INSERT INTO berita( judul,
                                    sub_judul,
									youtube,
                                    judul_seo,
                                    id_kategori,
                                    headline,
									aktif,
									utama,
								    klik,
                                    username,
                                    isi_berita,
									keterangan_gambar,
                                    jam,
                                    tanggal,
                                    hari,
                                    tag,
									breaking_news, 
                                    gambar) 
                            VALUES('$_POST[judul]',
							  '$_POST[sub_judul]',
							  '$_POST[youtube]',
                                   '$judul_seo',
                                   '$_POST[kategori]',
                                   '$_POST[headline]', 
								   '$_POST[aktif]',
								   '$_POST[utama]', 
								   '$_POST[klik]', 
                                   '$_SESSION[namauser]',
                                   '$_POST[isi_berita]',
								    '$_POST[keterangan_gambar]',
                                   '$jam_sekarang',
                                   '$tgl_sekarang',
                                   '$hari_ini',
                                   '$tag',
								   '$_POST[breaking_news]',
                                   '$nama_file_unik')");
	if($query){
		echo $_SESSION['pesan'] = 'Berita Berhasil Ditambahkan';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
	}								   
  header('location:berita');
  }
  else{
   $query = mysql_query("INSERT INTO berita( judul,
                                    sub_judul,
									youtube,
                                    judul_seo,
                                    id_kategori,
                                    headline,
									aktif,
									utama,
									klik,
                                    username,
                                    isi_berita,
                                    jam,
                                    tanggal,
                                    tag, 
									breaking_news,
                                    hari) 
                            VALUES('$_POST[judul]',
								  '$_POST[sub_judul]',
								  '$_POST[youtube]',
                                   '$judul_seo',
                                   '$_POST[kategori]',
                                   '$_POST[headline]', 
								   '$_POST[aktif]', 
								   '$_POST[utama]', 
								   '$_POST[klik]', 
                                   '$_SESSION[namauser]',
                                   '$_POST[isi_berita]',
                                   '$jam_sekarang',
                                   '$tgl_sekarang',
                                   '$tag',
								   '$_POST[breaking_news]',
                                   '$hari_ini')");	
	if($query){
		echo $_SESSION['pesan'] = 'Berita Berhasil Ditambahkan';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Disimpan';
	}									   
  header('location:berita');
 }
  
  $jml=count($tag_seo);
  for($i=0;$i<$jml;$i++){
    mysql_query("UPDATE tag SET count=count+1 WHERE tag_seo='$tag_seo[$i]'");
  }
}
elseif($aksi=='e'){
$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  
  if (!empty($_POST['tag_seo'])){
    $tag_seo = $_POST['tag_seo'];
    $tag=implode(',',$tag_seo);
  }
  $judul_seo      = seo_title($_POST[judul]);

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    $query = mysql_query("UPDATE berita  berita SET judul       = '$_POST[judul]',
	                                sub_judul  = '$_POST[sub_judul]',
							         youtube   = '$_POST[youtube]',
                                   judul_seo   = '$judul_seo', 
                                 id_kategori   = '$_POST[kategori]',
                                   headline    = '$_POST[headline]',
								     aktif     = '$_POST[aktif]',
							  breaking_news    = '$_POST[breaking_news]',
								     utama     = '$_POST[utama]',
                                   tag         = '$tag',
                                   isi_berita  = '$_POST[isi_berita]',
						 keterangan_gambar     = '$_POST[keterangan_gambar]'  
                             WHERE id_berita   = '$_POST[id]'");
	if($query){
		echo $_SESSION['pesan'] = 'Berita Berhasil Diperbarui';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Diperbarui';
	}	
  header('location:berita');
  }
  else{
    $data_gambar = mysql_query("SELECT gambar FROM berita WHERE id_berita='$_POST[id]'");
	$r    	= mysql_fetch_array($data_gambar);
	unlink('../foto_berita/'.$r['gambar']);
	unlink('../foto_berita/'.'small_'.$r['gambar']);
	 UploadImage($nama_file_unik);
	 watermark_image('../foto_berita/'.$nama_file_unik);
  
     $query = mysql_query("UPDATE berita SET judul       = '$_POST[judul]',
	                           sub_judul       = '$_POST[sub_judul]',
							      youtube      = '$_POST[youtube]',
                                   judul_seo   = '$judul_seo', 
                                   id_kategori = '$_POST[kategori]',
                                   headline    = '$_POST[headline]',
							 	   aktif       = '$_POST[aktif]',
						      breaking_news    = '$_POST[breaking_news]',
								    utama      = '$_POST[utama]',
                                   tag         = '$tag',
                                   isi_berita  = '$_POST[isi_berita]',
						    keterangan_gambar  = '$_POST[keterangan_gambar]',   
                                   gambar      = '$nama_file_unik'     
                             WHERE id_berita   = '$_POST[id]'");
	if($query){
		echo $_SESSION['pesan'] = 'Berita Berhasil Diperbarui';	
	}else{
		 echo $_SESSION['pesan_salah'] = 'Data Gagal Diperbarui';
	}	
    header('location:berita');
  }
}
	
?>