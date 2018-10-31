<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";

$sql  = mysql_query("SELECT * FROM identitas LIMIT 1");
$r    = mysql_fetch_object($sql);
?>       
	<div class="content-inner">
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Identitas Website</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
		  <li class="breadcrumb-item active">Identitas</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Ubah Identitas Website</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_identitas.php?aksi=e">
<?php
if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
	echo pesan_benar($_SESSION['pesan']);
}
unset($_SESSION['pesan']);
$_SESSION['pesan'] = '';
if (isset($_SESSION['pesan_salah']) && $_SESSION['pesan_salah'] <> '') {
	echo pesan_salah($_SESSION['pesan_salah']);
}
unset($_SESSION['pesan_salah']);
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Website</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_website" value="<?php echo $r->nama_website;?>" autofocus required>
                            <input type="hidden" name="id"  readonly="readonly" value="<?php echo $r->id_identitas;?>" >
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pembuka</label>
                          <div class="col-sm-9">
                            <input type="text" name="pembuka" class="form-control" value="<?php echo $r->pembuka;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Alamat Website</label>
                          <div class="col-sm-9">
                            <input type="text" name="url" class="form-control" value="<?php echo $r->url;?>">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Facebook</label>
                          <div class="col-sm-9">
                            <input type="text" name="facebook" class="form-control" value="<?php echo $r->facebook;?>">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Google Plus</label>
                          <div class="col-sm-9">
                            <input type="text" name="google" class="form-control" value="<?php echo $r->google;?>">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitter</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control" value="<?php echo $r->twitter;?>">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Meta Deskripsi</label>
                          <div class="col-sm-9">
                            <input type="text" name="meta_deskripsi" class="form-control" value="<?php echo $r->meta_deskripsi;?>">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Meta Keyword</label>
                          <div class="col-sm-9">
                            <input type="text" name="meta_keyword" class="form-control" value="<?php echo $r->meta_keyword;?>">
                          </div>
                        </div>	
<?php
if($r->gambar !=''){
?>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Logo</label>
                          <div class="col-sm-9">
                           <div class='controls'><img src="../images/<?php echo $r->gambar;?>" width=270></div>
                          </div>
                        </div>
<?php
}
?>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jika Ganti Logo</label>
                          <div class="col-sm-9">
                            <input name="fupload" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .jpeg, Max ukuran 1 Mb dan ukuran lebar maks: 400 px</small>
                          </div>
                        </div>	
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<button  type="submit" class="btn btn-primary">Perbarui</button>
					  </div>
					</div>						
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>