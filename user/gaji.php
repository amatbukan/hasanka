<!DOCTYPE html>
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
              <h2 class="no-margin-bottom">Gaji</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="beranda">Home</a></li>
              <li class="breadcrumb-item active">Gaji</li>
            </ul>
          </div>
          <section>   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Transfer Gaji Guru</h3>
                    </div>
                    <div class="card-body">
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

                      <div class="box-body table-responsive">
                        <table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>#</th>
                              <th>NIK Guru</th>
                              <th>Nama Guru</th>
                              <th>Gaji Pokok</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
$no=1;
$qO=mysql_query("SELECT * FROM guru ORDER BY nama_guru ASC");
while($rO=mysql_fetch_object($qO)) {
?>
                            <tr>
							  <td align="center"><?=$no;?></td>
                              <td align="center"><?=$rO->nik_guru;?></td>
                              <td ><?=$rO->nama_guru; ?></span></a></td>
                              <?php
							  if ($rO->gaji ==""){
								  $gajian = $rO->gaji;
							  }else{
								  $gajian = rupiah($rO->gaji);
							  }
							  ?>
							  <td ><?=$gajian?></span></a></td>
							  <td align="center">
								<a href="transfer?nik=<?=$rO->nik_guru;?>" class="btn btn-sm btn-danger" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Transfer Gaji"><span class="fa fa-upload"></span></a></span></a>
							</td>
                            </tr>
<?php
$no++;
}
?>	
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>
<?php
include "bawah.php";
?>          