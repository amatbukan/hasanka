      <div class="page-content d-flex align-items-stretch"> 
        <nav class="side-navbar">
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="../foto_user/<?php echo $_SESSION['foto'] ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h6"><?php echo $_SESSION['namalengkap'] ?></h3>
              <!--<p>Administrator</p>-->
            </div>
          </div>
          <span class="heading">Menu</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="beranda"> <i class="icon-home"></i>Beranda </a></li>
<?php
if($_SESSION['leveluser']=='admin'){
?>
                    <li><a href="#drop" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-pencil"></i>Informasi</a>
                      <ul id="drop" class="collapse list-unstyled ">
                        <li><a href="berita">Berita</a></li>
                        <li><a href="">Pengumuman</a></li>
                        <li><a href="">Agenda</a></li>
                        <li><a href="">Gallery Foto</a></li>
                      </ul>
                    </li>                      
					<li><a href="#ppdb" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-book"></i>PPDB</a>
                      <ul id="ppdb" class="collapse list-unstyled ">
                        <li><a href="daya">Daya Tampung</a></li>
                        <li><a href="">Pendaftaran</a></li>
                        <li><a href="">Hasil Tes</a></li>
                      </ul>
                    </li>
					<li><a href="halaman"> <i class="fa fa-sticky-note"></i>Halaman</a></li>                    
					<li><a href="#hal" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-comments-o"></i>Interaksi</a>
                      <ul id="hal" class="collapse list-unstyled ">
                        <li><a href="bukutamu">Buku Tamu</a></li>
                        <li><a href="">Hubungi</a></li>
                      </ul>
                    </li>
					<li><a href="#con" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cog"></i>Pengaturan</a>
                      <ul id="con" class="collapse list-unstyled ">
                        <li><a href="identitas">Identitas</a></li>
                        <li><a href="webmenu">Menu</a></li>
                        <li><a href="submenu">Sub Menu</a></li>
                      </ul>
                    </li>					
					<li><a href="#lay" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-navicon"></i>Tata Letak</a>
                      <ul id="lay" class="collapse list-unstyled ">
                        <li><a href="sidebar">Sidebar</a></li>
                        <li><a href="content">Content</a></li>
                      </ul>
                    </li>
					<li><a href="pengguna"> <i class="fa fa-users"></i>Pengguna</a></li>
					<li><a href=""> <i class="fa fa-commenting-o"></i>Komentar</a></li>
					<li><a href="#gaji" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-book"></i>Penggajian</a>
                      <ul id="gaji" class="collapse list-unstyled ">
                        <li><a href="guru">Guru</a></li>
                        <!--<li><a href="gaji">Transfer Gaji</a></li>-->
                        <li><a href="dgaji">Daftar Gaji</a></li>
                      </ul>
                    </li>						
 <?php
}else
{
?>
                    <li><a href="#drop" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-pencil"></i>Informasi</a>
                      <ul id="drop" class="collapse list-unstyled ">
                        <li><a href="berita">Berita</a></li>
                        <li><a href="">Pengumuman</a></li>
                        <li><a href="">Agenda</a></li>
                        <li><a href="">Gallery Foto</a></li>
                      </ul>
                    </li>   
					<li><a href="#ppdb" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-book"></i>PPDB</a>
                      <ul id="ppdb" class="collapse list-unstyled ">
                        <li><a href="">Pendaftaran</a></li>
                        <li><a href="">Hasil Tes</a></li>
                      </ul>
                    </li>						
					<li><a href=""> <i class="fa fa-commenting-o"></i>Komentar</a></li>
<?php
}
?>					
          </ul>
        </nav>