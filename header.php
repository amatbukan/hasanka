<!-- BEGIN .header -->
			<div class="header">				
				<?php
				$identitas = mysql_query("select * from identitas WHERE id_identitas=1");
  				$i = mysql_fetch_array($identitas); 
				echo"<!-- BEGIN .header-very-top -->
				<!-- delete ini -->
				<div class='header-very-top'>
					<div class='wrapper'>
						

						<div class='right'>
							
								<div class='shortcode-content'>

								</div>
						</div>

						<div class='clear-float'></div>
						
					</div>
					<div ></div>
				<!-- END .header-very-top -->
				</div>

				<!-- BEGIN .header-middle -->
				<div class='header-middle'>
					<div class='wrapper'>

						
						<div class='logo-image'>
								<a href='$i[url]'><img class='logo'  alt='' /></a>
						</div>

						<div class='banner'>
							<div class='banner-block'>";
							 	$tagline=mysql_query("SELECT * FROM tagline WHERE id_tagline='1'");
      							while ($t=mysql_fetch_array($tagline)){
								echo"<img src='foto_tagline/$t[gambar]1' alt='' /></a>";
								}
							echo"</div>
							
						</div>

						<div class='clear-float'></div>
						
					</div>
				<!-- END .header-middle -->
				</div>";
				?>
				<!-- BEGIN .header-menu -->
				<div class="header-menu thisisfixed">
					<div class="wrapper">
                    <ul class="main-menu">
						 <?php
							include "menu.php"; 
							?>
                            </ul>
						
						<div class="right menu-search">
							<form action="hasil-pencarian.html" method="post">
								<input type="text" placeholder="Search something.." value="" name="kata" />
								<input type="submit" class="search-button" value="&nbsp;" />
							</form>
						</div>
						
						<div class="clear-float"></div>

					</div>
				<!-- END .header-menu -->
				</div>
				

				
				
			<!-- END .header -->
			</div>
			