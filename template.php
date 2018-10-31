  <?php 
 // Menghindari error cannot modify header information
    ob_start(); // Initiate the output buffer
  ?>
  <!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
	<!-- BEGIN head -->
	<head>
		<title><?php include "imagomedia_title.php"; ?></title>
 
  <meta name="author" content="Muhammad Maulani">
  <meta http-equiv="" content="no">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="css/reset.css" />
		<link type="text/css" rel="stylesheet" href="css/main-stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="css/shortcode.css" />
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="css/retina.css" />
        <link type="text/css" rel="stylesheet" href="css/tinyscrollbar.css" />
		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-transparecy.css" />
		<![endif]-->
		<link type="text/css" id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
		<!-- Scripts -->
        
		<script type="text/javascript" src="jscript/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
			var iPhoneVertical = Array(null,320,"css/responsive/phoneverticald41d.css?"+Date());
			var iPhoneHorizontal = Array(321,767,"css/responsive/phonehorizontald41d.css?"+Date());
			var iPad = Array(768,1000,"css/responsive/ipadd41d.css?"+Date());
			var dekstop = Array(1001,null,"css/responsive/desktopd41d.css?"+Date());
			
			// Legatus Slider Options
			var _legatus_slider_autostart = true;	// Autostart Slider (false / true)
			var _legatus_slider_interval = 5000;	// Autoslide Interval (Def = 5000)
			var _legatus_slider_loading = true;		// Autoslide With Loading Bar (false / true)
		</script>
		<script type="text/javascript" src="jscript/orange-themes-responsive.js"></script>
        <script type="text/javascript" src="jscript/jquery.tinyscrollbar.js"></script>
		<script type="text/javascript" src="jscript/scripts.js"></script>
        <script type="text/javascript" src="jscript/load.js"></script>
		<!-- For Demo Only -->
		<script type="text/javascript" src="jscript/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jscript/iris.min.js"></script>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        
		<script type="text/javascript" src="jscript/jquery.tinyscrollbar"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#scrollbar1').tinyscrollbar();
            });
        </script>

<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
    newwindow=window.open(url,'foobar','height=575,width=950');
    if (window.focus) {newwindow.focus()}
    return false;
}// -->
</script>

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "27b4c0b7-ce98-4d23-b6c7-ae1723b455d5", doNotHash: true, doNotCopy: true, hashAddressBar: true});</script>


<script type="text/javascript">
$(function() {
//More Button
$('.more').live("click",function() 
{
var ID = $(this).attr("id");
if(ID)
{
$("#more"+ID).html('<img src="moreajax.gif" />');

$.ajax({
type: "POST",
url: "modul/mod_berita/ajax_more.php",
data: "lastmsg="+ ID, 
cache: false,
success: function(html){
$("ol#updates").append(html);
$("#more"+ID).remove();
}
});
}
else
{
$(".morebox").html('The End');

}


return false;


});
});

</script>	
	<!-- END head -->
	</head>
	<!-- BEGIN body -->
	<body>
		<!-- BEGIN .boxed -->
		<!-- <div class="boxed active"> -->
		<div class="boxed">
			
			<?php include "header.php";?>
			<!-- BEGIN .content -->
			<div class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					
				       
		<?php	
		 // HUBUNGI KAMI////////////////////////////////////////////
  		if ($_GET['module']=='hubungikami'){
  		include "modul/mod_hubungi/hubungi.php";}
		 // BUKU Tamu///////////////////////////////////////////
  		elseif ($_GET['module']=='bukutamu'){
  		include "modul/mod_bukutamu/bukutamu.php";}
		
		  // SEMUA AGENDA ////////////////////////////////////////////
	  elseif ($_GET['module']=='semuaagenda'){
	  include "modul/mod_agenda/semuaagenda.php";}
  /////////////////////////////////////////////////////////////
  		// SEMUA PENGUMUMNAN ////////////////////////////////////////////
	  elseif ($_GET['module']=='semuapengumuman'){
	  include "modul/mod_pengumuman/pengumuman.php";}
  		/////////////////////////////////////////////////////////////
	  // BLOG SISWA ////////////////////////////////////////////
	  elseif ($_GET['module']=='blogsiswa'){
	  include "modul/mod_daftarblog/blogsiswa.php";}
  		/////////////////////////////////////////////////////////////
	 // Google ////////////////////////////////////////////
	  elseif ($_GET['module']=='google'){
	  include "modul/mod_google/google.php";}
  		/////////////////////////////////////////////////////////////	
	  // HASIL SELEKSI ////////////////////////////////////////////
	  elseif ($_GET['module']=='hasilseleksi'){
	  include "modul/mod_hasilseleksi/hasilseleksi.php";}
  		/////////////////////////////////////////////////////////////	
		// Form Pendaftaran ////////////////////////////////////////////
	  elseif ($_GET['module']=='pendaftaran'){
	  include "modul/mod_formpendaftaran/formpendaftaran.php";}
  		/////////////////////////////////////////////////////////////	
  
		// GALERI////////////////////////////////////////////
  		elseif ($_GET['module']=='galeri'){
  		include "modul/mod_galeri/galeri.php";}
		else {
 		/////////////////////////////////////////////////////////////		
		// Memanggil Bagian Isi 	
		include "modul/mod_content/isi.php";
		// Memanggil Bagian Widget Sidebar
		include "modul/mod_content/sidebar.php";
		}
		?>
					
					<div class="clear-float"></div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- BEGIN .content -->
			</div>
			
			<?php include "footer.php";?>
			
		<!-- END .boxed -->
		</div>
	<!-- END body -->
	</body>
<!-- END html -->
</html>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2I8tFa18UMCUw0b0iFfJUJRVgpDfTcXa';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<?php
    // penutup fungsi ob_start (lihat baris paling atas)
    ob_end_flush(); // Flush the output from the buffer
?>