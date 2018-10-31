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
              <h2 class="no-margin-bottom">Menu</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ul>
          </div>
          <section>   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Berita</h3>
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
					<a href="fberita?aksi=t" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah</a>
					</span>
                      <div class="box-body table-responsive">
                        <table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>#</th>
                              <th>Nama Menu</th>
							  <th>Link</th>
                              <th>Jenis Menu</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
$no=1;
$tampil = mysql_query("SELECT * FROM menu ORDER BY id_menu DESC");
while($r=mysql_fetch_object($tampil)){
?>
                            <tr>
							  <td align="center"><?=$no;?></td>
                              <td width="350"><?=$r->nama_menu;?></td>
                              <td align="center" width="200"><?=$r->link;?></td>
							  <?php
							    if ($r->parent=='Y'){
									echo" <td align='center' width=220>Menu Induk</td>";
								}else{
									echo"<td align='center' width=220>Single Menu</td>";
								}
							  ?>
                              <td align="center"><?=$r->aktif;?></td>
							  <td align="center" width="100">
								<a href="fwebmenu?id=<?=$r->id_menu;?>&aksi=e" class="btn btn-sm btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ubah Berita"><span class="fa fa-edit"></span></a></span></a>
								<a href="aksi_webmenu?id=<?=$r->id_menu;?>&aksi=h" class="btn btn-sm btn-danger" onclick="return confirm('Data berita akan dihapus?')" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Hapus Berita"><span class="fa fa-trash"></span></a>
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