<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";

?>       
	<div class="content-inner">
	  <!-- Page Header-->
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Laporan</h2>
		</div>
		
	  </header>
	  <!-- Breadcrumb-->
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="dgaji">Daftar Gaji</a></li>
		  <li class="breadcrumb-item active">Laporan            </li>
		</ul>
	  </div>
	                  <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Print Laporan Gaji (Filter)</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="lap_gaji.php">
<?php
if (isset($_SESSION['pesan_salah']) && $_SESSION['pesan_salah'] <> '') {
	echo pesan_salah($_SESSION['pesan_salah']);
}
unset($_SESSION['pesan_salah']);
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Bulan</label>
                          <div class="col-sm-3">
                            <select name="bulan" class="form-control mb-3" required>
								<option>-- Bulan --</option>
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
							  <label class="col-sm-3 form-control-label">Tahun</label>
							  <div class="col-sm-3">
								<select name="tahun" class="form-control mb-3"  required>
								<option value="">--- Tahun ---</option>
								<?php
									$qO=mysql_query("SELECT distinct(EXTRACT(YEAR FROM tgl_transfer)) as tahun FROM gaji") or die(mysql_error());
									while($rO=mysql_fetch_object($qO)) {
								?>
									<option value="<?=$rO->tahun;?>"><?=$rO->tahun;?></option>
								<?php
								}
								?>
								</select>
							  </div>
							</div>	
						</div>	
                           
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="dgaji" type="submit" class="btn btn-secondary">Kembali</a>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>						  
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>