<!DOCTYPE html>
<?php
include "../config/koneksi.php";
cek_sesi();
include "atas.php";
include "menu.php";
$q = mysql_query("SELECT * FROM guru WHERE nik_guru='$_GET[nik]'");
$r = mysql_fetch_object($q);
?>     
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Guru</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="beranda">Home</a></li>
              <li class="breadcrumb-item active">Guru</li>
            </ul>
          </div>
          <section>   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Lengkap Guru</h3>
                    </div>
                    <div class="card-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
						<div class="box-body table-responsive">
							<table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                        <tr>
                            <td>NIK Guru</td>
                            <td><?=$r->nik_guru;?></td>
                        </tr>                        
						<tr>
                            <td>Nama Guru</td>
                            <td><?=$r->nama_guru;?></td>
                        </tr>						
						<tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td><?=$r->tempat_lahir;?>, <?= tgl_indo($r->tanggal_lahir);?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td>
                            <td><?=$r->jk;?></td>
                        </tr>							
						<tr>
                            <td>Alamat</td>
                            <td><?=$r->alamat;?></td>
                        </tr>							
						<tr>
                            <td>Agama</td>
                            <td><?=$r->agama;?></td>
                        </tr>							
						<tr>
                            <td>No Telepon/HP</td>
                            <td><?=$r->no_telpon;?></td>
                        </tr>							
						<tr>
                            <td>Email</td>
                            <td><?=$r->email;?></td>
                        </tr>							
						<tr>
                            <td>Nama Ayah</td>
                            <td><?=$r->nama_ayah;?></td>
                        </tr>						
						<tr>
                            <td>Nama Ibu</td>
                            <td><?=$r->nama_ibu;?></td>
                        </tr>						
						<tr>
                            <td>Status</td>
                            <td><?=$r->status;?></td>
                        </tr>						
						<tr>
                            <td>Nama Suami/Istri</td>
                            <td><?=$r->nama_suami_istri;?></td>
                        </tr>							
						<tr>
                            <td>Jumlah Anak</td>
                            <td><?=$r->jumlah_anak;?></td>
                        </tr>												
						<tr>
                            <td>Pendidikan Terakhir - Prodi/Jurusan</td>
                            <td><?=$r->pend_terakhir;?> - <?=$r->prodi;?></td>
                        </tr>							
						<tr>
                            <td>Nama Universitas/Sekolah</td>
                            <td><?=$r->nama_sekolah_univ;?> </td>
                        </tr>
						<tr>
                            <td>IPK</td>
                            <td><?=$r->ipk;?> </td>
                        </tr>							
						<tr>
                            <td>Jabatan</td>
                            <td>
							<?php
							$q2 = mysql_query("SELECT * FROM jabatan WHERE kode_jabatan='$r->kode_jabatan'");
							$r2 = mysql_fetch_object($q2);
							?>
							<?=$r2->jabatan;?> </td>
                        </tr>
						<tr>
                            <td>Tugas Guru</td>
                            <td><?=$r->ket;?></td>
                        </tr>							
						<tr>
                            <td>Gaji Pokok</td>
                            <td><?=rupiah($r->gaji);?></td>
                        </tr>						
						<tr>
                            <td>Tanggal Mulai Bekerja</td>
                            <td><?=tgl_indo($r->tgl_mulai_bekerja);?> </td>
                        </tr>
						<tr>
                            <td>Foto</td>
                            <td><img src="<?=$r->foto;?>" height="200" width="180"></td>
                        </tr>							
						<tr>
                            <td>Foto/Scan KTP</td>
                            <td><img src="<?=$r->foto_ktp;?>" height="200" width="180"></td>
                        </tr>						
                        </table>
                      </div>
					</div>
				</div>				  
            </div>
				<div class="form-group row">
					<div class="col-sm-2">
						<a href="guru" class="btn btn-secondary">Kembali</a>
					</div>
				</div>
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