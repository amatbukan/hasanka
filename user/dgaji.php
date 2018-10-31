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
                      <h3 class="h4">Daftar Gaji</h3>
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

					<span class="form-group pull-right">
					<a href="printb" class="btn btn-primary btn-sm"><span class="fa fa-print"></span> Laporan</a>
					</span>
                      <div class="box-body table-responsive">
                        <table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>#</th>
                              <th>NIK</th>
                              <th>Nama</th>
                              <th>Gaji Pokok</th>
                              <th>Tanggal Transfer</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
$no=1;
$qO=mysql_query("select * from gaji order by nik DESC");
while($rO=mysql_fetch_object($qO)) {
?>
                            <tr>
							  <td align="center"><?=$no;?></td>
                              <td align="center"><?=$rO->nik;?></td>
                              <td ><?=$rO->nama; ?></span></a></td>
							  <td ><?=rupiah($rO->gaji_pokok)?></span></a></td>
							  <td ><?=$rO->tgl_transfer;?> - <?=$rO->jam_transfer;?></span></a></td>
							  <td align="center">
								<a href="print?id_gaji=<?=$rO->id_gaji;?>" class="btn btn-sm btn-danger" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Print Slip Gaji"><span class="fa fa-print"></span></a></span></a>
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