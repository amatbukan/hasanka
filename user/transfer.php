<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";

$nik = $_GET['nik'];
$q = mysql_query("SELECT * FROM guru WHERE nik_guru='$nik'");
$r = mysql_fetch_object($q);
?>       
	<div class="content-inner">
	  <!-- Page Header-->
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Gaji</h2>
		</div>
		
	  </header>
	  <!-- Breadcrumb-->
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="beranda">Home</a></li>
		  <li class="breadcrumb-item active">Penggajian          </li>
		</ul>
	  </div>
	                  <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Transfer Gaji Guru</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksi_gaji.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">NIK Guru</label>
                          <div class="col-sm-9">
                            <input type="text" name="nik_guru" class="form-control" placeholder="Nomor Induk Guru" readonly="readonly" onkeypress="return hanyaAngka(event)" value="<?php echo $r->nik_guru;?>">
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Guru</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_guru"class="form-control" placeholder="Nama Lengkap Guru" autofocus value="<?php echo $r->nama_guru;?>" readonly="readonly">
                          </div>
                        </div>							
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Gaji Pokok</label>
                          <div class="col-sm-9">
						      <?php
							  if ($r->gaji ==""){
								  $gajian = $r->gaji;
							  }else{
								  $gajian = rupiah($r->gaji);
							  }
							  ?>
                            <input type="text" class="form-control" autofocus value="<?php echo $gajian;?>" readonly="readonly">
                            <input type="hidden" name="gaji"class="form-control" autofocus value="<?php echo $r->gaji;?>" readonly="readonly">
                          </div>
                        </div>	
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Bulan Transfer</label>
                          <div class="col-sm-9">
                            <select name="bulan_transfer" class="form-control mb-3" required>
								<option>-- Pilih Bulan --</option>
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="Oktober">Oktober</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
                            </select>
                          </div>
                        </div>	
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tanggal Transfer</label>
                          <div class="col-sm-9">
                            <input type="text" name="tgl_transfer" class="form-control" readonly="readonly" value="<?php echo "".date("Y-m-d").""; ?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jam Transfer</label>
                          <div class="col-sm-9">
                            <input type="text" name="jam_transfer" class="form-control" readonly="readonly" value="<?php echo "".date("H:i:s").""?>">
                          </div>
                        </div>							
                    </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="gaji" type="submit" class="btn btn-secondary">Kembali</a>
                            <button  type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>