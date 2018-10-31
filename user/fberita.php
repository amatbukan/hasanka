<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";

$aksi=$_GET['aksi'];
if($aksi=='t'){ 
?>       
	<div class="content-inner">
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Tambah Berita</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="berita">Berita</a></li>
		  <li class="breadcrumb-item active">Tambah</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tambah Data Berita</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_berita.php?aksi=t">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Judul Berita</label>
                          <div class="col-sm-9">
                            <input type="text" name="judul" class="form-control" placeholder="Judul Berita Terbaru" autofocus required>
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Video Youtube</label>
                          <div class="col-sm-9">
                            <input type="text" name="youtube"class="form-control" placeholder="Link Video Youtube Terkait Berita">
                          </div>
                        </div>												
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kategori</label>
                          <div class="col-sm-9">
                            <select name="kategori" class="form-control mb-3" required>
                              <option>-- Pilih Kategori --</option>
<?php
	$qO=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
?>
                              <option value="<?=$rO->id_kategori;?>"><?=$rO->nama_kategori;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>   
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Headline (Berita Utama)</label>
                          <div class="col-sm-9">
                           <input type="radio" value="Y" name="headline">Ya
                           <input type="radio" value="N" checked="checked" name="headline">Tidak
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Sekilas Info</label>
                          <div class="col-sm-9">
                           <input type="radio" value="Y" name="breaking_news">Ya
                           <input type="radio" value="N" checked="checked" name="breaking_news">Tidak
                          </div>
                        </div>							
						<div class="form-group row">
						  <label class="col-sm-3 form-control-label">Isi Berita</label>
						  <div class="col-sm-9">
							<textarea id="editor" type="text" name="isi_berita" class="form-control" style='width: 750px; height: 400px'></textarea>
						  </div>
						</div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Gambar</label>
                          <div class="col-sm-9">
                            <input name="fupload" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .jpeg, Max ukuran 1 Mb dan ukuran lebar maks: 400 px</small>
                          </div>
                        </div>	
                      <!--<div class="form-group row">
					  <label class="col-sm-3 form-control-label">Tag</label>
					  <div class="col-sm-9">
					  <?php
					     $tag = mysql_query("SELECT * FROM tag ORDER BY tag_seo"); 
						 while ($t=mysql_fetch_array($tag)){
					  ?>
					   <input type="checkbox" value="<?php $t['tag_seo']?>" name="tag_seo[]"><?php echo $t['nama_tag']; ?>
					   <?php
						 }
						?>
					  </div>
					</div>-->
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<a href="berita" class="btn btn-secondary">Kembali</a>
						<button  type="submit" class="btn btn-primary">Simpan</button>
					  </div>
					</div>						
                      </form>
                    </div>
                  </div>
<?php
}
elseif($aksi=='e'){ 
$id = $_GET['id'];
$q = mysql_query("SELECT * FROM berita WHERE id_berita='$id'");
$r = mysql_fetch_object($q);
?>
	<div class="content-inner">
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Edit Berita</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="berita">Berita</a></li>
		  <li class="breadcrumb-item active">Edit</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Edit Data Berita</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_berita.php?aksi=e">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Judul Berita</label>
                          <div class="col-sm-9">
                            <input type="text" name="judul" class="form-control" placeholder="Judul Berita Terbaru" autofocus required value="<?php echo $r->judul;?>">
                            <input type="hidden" name="id"readonly="readonly" value="<?php echo $r->id_berita;?>">
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Video Youtube</label>
                          <div class="col-sm-9">
                            <input type="text" name="youtube" class="form-control" placeholder="Link Video Youtube Terkait Berita" value="<?php echo $r->youtube;?>">
                          </div>
                        </div>												
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kategori</label>
                          <div class="col-sm-9">
                            <select name="kategori" class="form-control mb-3" required>
                              <option>-- Pilih Kategori --</option>
<?php
	$qO=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
	$sel=($r->id_kategori==$rO->id_kategori)?'selected':'';
?>
                              <option value="<?=$rO->id_kategori;?>" <?=$sel;?>><?=$rO->nama_kategori;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Headline (Berita Utama)</label>
                          <div class="col-sm-9">
							<?php
							if($r->headline=='Y') { $cekY='checked'; $cekN='';}
							else {$cekY=''; $cekN='checked';}
							?>
                           <input type="radio" value="Y" name="headline" <?=$cekY;?>>Ya
                           <input type="radio" value="N" name="headline" <?=$cekN;?>>Tidak
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Sekilas Info</label>
                          <div class="col-sm-9">
							<?php
							if($r->breaking_news=='Y') { $cekY1='checked'; $cekN1='';}
							else {$cekY1=''; $cekN1='checked';}
							?>
                           <input type="radio" value="Y" name="breaking_news" <?=$cekY1;?>>Ya
                           <input type="radio" value="N" name="breaking_news" <?=$cekN1;?>>Tidak
                          </div>
                        </div>							
						<div class="form-group row">
						  <label class="col-sm-3 form-control-label">Isi Berita</label>
						  <div class="col-sm-9">
							<textarea required type="text" id="editor" name="isi_berita" class="form-control" style='width: 750px; height: 400px'><?php echo $r->isi_berita;?></textarea>
						  </div>
						</div>	
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Gambar</label>
                          <div class="col-sm-9">
                            <?php
							 if ($r->gambar !=''){
  							 echo "<span class='field'><img src='../foto_berita/small_$r->gambar'>";}
							 ?>
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Ganti Gambar</label>
                          <div class="col-sm-9">
                            <input id="fileInput" name="fupload" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .jpeg, Max ukuran 1 Mb dan ukuran lebar maks: 400 px</small>
                          </div>
                        </div>	
                      <!--<div class="form-group row">
					  <label class="col-sm-3 form-control-label">Tag</label>
					  <div class="col-sm-9">
					  <?php
					     $tag = mysql_query("SELECT * FROM tag ORDER BY tag_seo"); 
						 while ($t=mysql_fetch_array($tag)){
					  ?>
					   <input type="checkbox" value="<?php $t['tag_seo']?>" name="tag_seo[]"><?php echo $t['nama_tag']; ?>
					   <?php
						 }
						?>
					  </div>
					</div>-->
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<a href="berita" type="submit" class="btn btn-secondary">Kembali</a>
						<button  type="submit" class="btn btn-primary">Perbarui</button>
					  </div>
					</div>						
                      </form>
                    </div>
                  </div>
<?php
}
?>
<?php
include "bawah.php";
?>