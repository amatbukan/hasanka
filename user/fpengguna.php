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
		  <h2 class="no-margin-bottom">Tambah Pengguna</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="pengguna">Pengguna</a></li>
		  <li class="breadcrumb-item active">Tambah</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tambah Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_pengguna.php?aksi=t">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" placeholder="Username Pengguna" autofocus required>
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Sandi</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Sandi Pengguna" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Pengguna"  required>
                          </div>
                        </div>  	                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="Email Pengguna">
                          </div>
                        </div>  						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telp</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telp Pengguna">
                          </div>
                        </div>  													 						
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<a href="pengguna" class="btn btn-secondary">Kembali</a>
						<button  type="submit" class="btn btn-primary">Simpan</button>
					  </div>
					</div>						
                      </form>
                    </div>
                  </div>
<?php
}
elseif($aksi=='e'){ 
$q = mysql_query("SELECT * FROM users WHERE username='$_GET[username]'");
$r = mysql_fetch_object($q);
?>
		<div class="content-inner">
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Edit Pengguna</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="pengguna">Pengguna</a></li>
		  <li class="breadcrumb-item active">Edit</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Ubah Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_pengguna.php?aksi=t">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" readonly="readonly" value="<?php echo $r->username;?>"><small class="help-block-none">Username tidak bisa diubah</small>

                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Sandi</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Sandi Pengguna" required autofocus><small class="help-block-none">Kosongkan jika tidak diubah</small>

                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Pengguna"  required value="<?php echo $r->nama_lengkap;?>">
                          </div>
                        </div>  	                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="Email Pengguna" value="<?php echo $r->email;?>">
                          </div>
                        </div>  						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telp</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telp Pengguna" value="<?php echo $r->no_telp;?>">
                          </div>
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Foto</label>
                          <div class="col-sm-9">
                           <?php 
							if($r->foto !=''){
  							 echo "<span class='field'><img src='../foto_user/small_$r->foto' width=100></span>";
							 }
							?> 
                          </div>
                        </div>	
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Ganti Foto</label>
                          <div class="col-sm-9">
                            <input id="fileInput" name="fupload" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .jpeg, Max ukuran 1 Mb dan ukuran lebar maks: 100 px</small>
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Blokir</label>
                          <div class="col-sm-9">
							<?php
							if($r->blokir=='Y') { $cekY='checked'; $cekN='';}
							else {$cekY=''; $cekN='checked';}
							?>
                           <input type="radio" value="Y" name="headline" <?=$cekY;?>>Ya
                           <input type="radio" value="N" name="headline" <?=$cekN;?>>Tidak
                          </div>
                        </div>						
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<a href="pengguna" class="btn btn-secondary">Kembali</a>
						<button  type="submit" class="btn btn-primary">Simpan</button>
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