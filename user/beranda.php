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
              <h2 class="no-margin-bottom">Beranda</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Berita</span>
                    </div>
					<?php
					$dtampil = mysql_query("SELECT * FROM berita WHERE id_kategori='1'");
					$dtotal = mysql_num_rows($dtampil);
					?>					
                    <div class="number"><strong><?php echo "$dtotal"; ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>Artikel</span>
                    </div>
					<?php
					$dtampil1 = mysql_query("SELECT * FROM berita WHERE id_kategori='2'");
					$dtotal1 = mysql_num_rows($dtampil1);
					?>	
                    <div class="number"><strong><?php echo "$dtotal1"; ?></strong></div>
                  </div>
                </div>
              </div>
            </div>
			<div class="row">
                <div class="col-md-12">
                  <div class="card text-white bg-primary">
                    <div class="card-header card-header-transparent">Pemberitahuan</div>
                    <div class="card-body">
                      <h5 class="card-title">Selamat Datang "<?php echo $_SESSION['namalengkap'] ?>"</h5>
                      <p class="card-text" align="justify">Jaga kerahasiaan akun Anda dengan sebaik-baiknya. Semua aktivitas yang terjadi atas nama akun ini menjadi tanggung jawab Anda. Jangan memberitahukan sandi Anda kepada siapapun. Segera melapor ke IT Hasanka jika mengalami/menemui hal-hal yang mencurigakan pada aktivitas akun Anda.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card text-white bg-red">
                    <div class="card-header card-header-transparent">Pehatian</div>
                    <div class="card-body">
                      <h5 class="card-title">Kepada seluruh Pengurus, WAJIB untuk :</h5>
                      <p class="card-text" align="justify">
					  <ol align="justify">
						<li>Memeriksa dan memperbaiki data diri.</li>
						<li>Menginputkan nomor telepon/ponsel yang aktif dan dapat dihubungi.</li>
						<li>Segera mengganti sandi akun Anda. Buat sandi dengan kombinasi huruf kapital dan kecil serta angka.</li>
						<li>Segera melapor ke Bagian IT Hasanka untuk memperbaiki data yang tidak dapat diubah sendiri.</li>
						<li>Gunakan aplikasi dengan baik.</li>
					</ol>
					  </p>
                    </div>
                  </div>
                </div>
			</div>
          </section>
		  <br>

          <!-- Projects Section-->
        <!--<section class="projects no-padding-top">
            <div class="container-fluid">
              
<?php
$tampil = mysql_query("SELECT * FROM berita,kategori 
                           WHERE berita.id_kategori=kategori.id_kategori ORDER BY berita.id_berita DESC LIMIT 3");
while($r=mysql_fetch_object($tampil)){
?>
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-8 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="../foto_berita/<?php echo $r->gambar?>" alt="..." class="img-fluid"></div>
                      <div class="text">
                        <p><?php echo $r->judul; ?></p>
                      </div>
                    </div>
                   
                  </div>
                  <div class="right-col col-lg-2 d-flex align-items-center">
				   <div class="project-date"><span class="hidden-sm-down"><?php echo tgl_indo($r->tanggal);?></span></div>
                  </div>                  
				  <div class="right-col col-lg-2 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i><?php echo $r->jam;?></div>
                  </div>
                </div>
              </div>
<?php
}
?>
            </div>
          </section>-->
          <!-- Page Footer-->
<?php
include "bawah.php";
?>