<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";

$sql  = mysql_query("SELECT * FROM daya_tampung LIMIT 1");
$r    = mysql_fetch_object($sql);
?>       
	<div class="content-inner">
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Daya Tampung</h2>
		</div>
	  </header>
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
		  <li class="breadcrumb-item active">Daya Tampung</li>
		</ul>
	  </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Ubah Daya Tampung & Margin Kelulusan</h3>
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
                          <label class="col-sm-3 form-control-label">Daya Tampung</label>
                          <div class="col-sm-1">
                            <input type="text" class="form-control" name="nama_website" value="<?php echo $r->kapasitas;?>" autofocus required onkeypress="return hanyaAngka(event)">
                            <input type="hidden" name="id"  readonly="readonly" value="<?php echo $r->id_daya_tampung;?>" >
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nilai Kelulusan (Minimal)</label>
                          <div class="col-sm-1">
                            <input type="text" name="pembuka" class="form-control" value="<?php echo $r->nilai_minimal;?>" required onkeypress="return hanyaAngka(event)">
                          </div>
                        </div>						
				</div>					
					<div class="form-group row">
					  <div class="col-sm-4 offset-sm-3">
						<button  type="submit" class="btn btn-info">Perbarui</button>
					  </div>
					</div>						
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>