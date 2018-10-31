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
		  <h2 class="no-margin-bottom">Guru</h2>
		</div>
		
	  </header>
	  <!-- Breadcrumb-->
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="beranda">Home</a></li>
		  <li class="breadcrumb-item active">Guru            </li>
		</ul>
	  </div>
	                  <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Edit Data Guru</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="edguru.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">NIK Guru</label>
                          <div class="col-sm-9">
                            <input type="text" name="nik_guru" class="form-control" placeholder="Nomor Induk Guru" readonly="readonly" onkeypress="return hanyaAngka(event)" value="<?php echo $r->nik_guru;?>">
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Guru</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_guru"class="form-control" placeholder="Nama Lengkap Guru" autofocus value="<?php echo $r->nama_guru;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tempat Lahir</label>
                          <div class="col-sm-9">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir Guru" value="<?php echo $r->tempat_lahir;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <input id="tgl" name="tanggal_lahir" type="text" class="form-control" placeholder="Tahun-Bulan-Tanggal" readonly="readonly" value="<?php echo $r->tanggal_lahir;?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select name="jk" class="form-control mb-3" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
							  <option value="">-- Pilih Jenis Kelamin --</option>
                              <option value="Laki-Laki" <?php if ($r->jk== 'Laki-Laki') { echo 'selected'; }?>>Laki-Laki</option>
                              <option value="Perempuan" <?php if ($r->jk== 'Perempuan') { echo 'selected'; }?>>Perempuan</option>
                            </select>
                          </div>
                        </div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $r->alamat;?>">
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Agama</label>
                          <div class="col-sm-9">
                            <select name="agama" class="form-control mb-3" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
                              <option value="">-- Pilih Agama --</option>
                              <option value="Islam" <?php if ($r->agama== 'Islam') { echo 'selected'; }?>>Islam</option>
                              <option value="Kristen" <?php if ($r->agama== 'Kristen') { echo 'selected'; }?>>Kristen</option>
                              <option value="Hindu" <?php if ($r->agama== 'Hindu') { echo 'selected'; }?>>Hindu</option>
                              <option value="Buddha" <?php if ($r->agama== 'Buddha') { echo 'selected'; }?>>Buddha</option>
                              <option value="Katolik" <?php if ($r->agama== 'Katolik') { echo 'selected'; }?>>Katolik</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telpon</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_telpon" class="form-control" placeholder="No Telepon" onkeypress="return hanyaAngka(event)" value="<?php echo $r->no_telpon;?>">
                          </div>
                        </div> 
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">E-Mail</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="E-Mail" value="<?php echo $r->email;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Ayah</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_ayah" required class="form-control" placeholder="Nama Ayah" value="<?php echo $r->nama_ayah;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Ibu</label>
                          <div class="col-sm-9">
                            <input name="nama_ibu" type="text" required class="form-control" placeholder="Nama Ibu" value="<?php echo $r->nama_ibu;?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Status</label>
                          <div class="col-sm-9">
                            <select name="status" class="form-control mb-3" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
                              <option value="">-- Pilih Status --</option>
                              <option value="Kawin" <?php if ($r->status== 'Kawin') { echo 'selected'; }?>>Kawin</option>
                              <option value="Belum Kawin" <?php if ($r->status== 'Belum Kawin') { echo 'selected'; }?>>Belum Kawin</option>
                            </select>
                          </div>
                        </div> 
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Suami/Istri</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_suami_istri"class="form-control" placeholder="Nama Suami Atau Istri" value="<?php echo $r->nama_suami_istri;?>">
                          </div>
                        </div>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jumlah Anak</label>
                          <div class="col-sm-9">
                            <input name="jumlah_anak" type="text" class="form-control" placeholder="Jumlah Anak" maxlength="2" onkeypress="return hanyaAngka(event)" value="<?php echo $r->jumlah_anak;?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pendidikan Terakhir</label>
                          <div class="col-sm-9">
                            <select name="pend_terakhir" class="form-control mb-3" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
                              <option value="">-- Pilih Pendidikan --</option>
                              <option value="SD" <?php if ($r->pend_terakhir== 'SD') { echo 'selected'; }?>>SD</option>
                              <option value="SMP" <?php if ($r->pend_terakhir== 'SMP') { echo 'selected'; }?>>SMP</option>
                              <option value="SMA" <?php if ($r->pend_terakhir== 'SMA') { echo 'selected'; }?>>SMA</option>
                              <option value="D1" <?php if ($r->pend_terakhir== 'D1') { echo 'selected'; }?>>D1</option>
                              <option value="D2" <?php if ($r->pend_terakhir== 'D2') { echo 'selected'; }?>>D2</option>
                              <option value="D3" <?php if ($r->pend_terakhir== 'D3') { echo 'selected'; }?>>D3</option>
                              <option value="S1" <?php if ($r->pend_terakhir== 'S1') { echo 'selected'; }?>>S1</option>
                              <option value="S2" <?php if ($r->pend_terakhir== 'S2') { echo 'selected'; }?>>S2</option>
                              <option value="S3" <?php if ($r->pend_terakhir== 'S3') { echo 'selected'; }?>>S3</option>
                            </select>
                          </div>
                        </div>
  						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Sekolah / Universitas</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_sekolah_univ" class="form-control" placeholder="Nama Sekolah / Universitas" value="<?php echo $r->nama_sekolah_univ;?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Program Studi / Jurusan</label>
                          <div class="col-sm-9">
                            <input type="text" name="prodi" class="form-control" placeholder="Program Studi / Jurusan" value="<?php echo $r->prodi;?>">
                          </div>
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">IPK/NEM</label>
                          <div class="col-sm-9">
                            <input type="text" name="ipk" class="form-control" placeholder="Indeks Prestasi Kumulatif (Contoh : 3.78) Dengan Titik" value="<?php echo $r->ipk;?>">
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jabatan</label>
                          <div class="col-sm-9">
                            <select name="kode_jabatan" class="form-control mb-3" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
                              <option>-- Pilih Jabatan --</option>
<?php
	$qO=mysql_query("SELECT * FROM jabatan") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
	$sel=($r->kode_jabatan==$rO->kode_jabatan)?'selected':'';
?>
                              <option value="<?=$rO->kode_jabatan;?>" <?=$sel;?>><?=$rO->jabatan;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Keterangan</label>
                          <div class="col-sm-9">
                            <input type="text" name="ket" class="form-control" placeholder="Keterangan Lainnya" value="<?php echo $r->ket;?>">
                          </div>
                        </div>                          
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Gaji Pokok</label>
                          <div class="col-sm-9">
                            <input type="text" name="gaji" class="form-control" placeholder="Gaji Pokok Guru" value="<?php echo $r->gaji;?>" onkeypress="return hanyaAngka(event)" required>
                          </div>
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tanggal Mulai Bekerja</label>
                          <div class="col-sm-9">
                            <input type="text" id="tgl2" name="tgl_mulai_bekerja"class="form-control" placeholder="Tanggal Mulai Bekerja" readonly="readonly" value="<?php echo $r->tgl_mulai_bekerja;?>">
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">File Foto</label>
                          <div class="col-sm-9">
							<img src="<?php echo $r->foto; ?>" class="img-rounded" height="200" width="200" alt="Tidak Ada Foto"/><br><small class="help-block-none">Foto Saat Ini</small><hr>
                            <input id="fileInput" name="foto" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .png dan Max ukuran 1 Mb</small>
                          </div>
                        </div>	                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">File KTP</label>
                          <div class="col-sm-9">
							<img src="<?php echo $r->foto_ktp; ?>" class="img-rounded" height="200" width="200" alt="Tidak Ada Foto"/><br><small class="help-block-none">Foto Saat Ini</small><hr>
                            <input id="fileInput" name="foto_ktp" type="file" class="form-control-file"><small class="help-block-none">Ekstensi harus .jpg atau .png dan Max ukuran 1 Mb</small>
                          </div>
                        </div>		
                    </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="guru" type="submit" class="btn btn-secondary">Kembali</a>
                            <button  type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>