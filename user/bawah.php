<footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p></p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Copyright &copy; <?php echo date('Y')?> <a href="#" class="external">'Muhammad Maulani'</a></p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="../assets/tema/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/tema/vendor/jquery.dataTables.min.js"></script>
	<script src="../assets/tema/vendor/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/tema/vendor/bootstrap-datepicker.js"></script>
    <script src="../assets/tema/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../assets/tema/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/tema/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../assets/tema/vendor/chart.js/Chart.min.js"></script>
    <script src="../assets/tema/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../assets/tema/js/charts-home.js"></script>
    <script src="../assets/tema/js/front.js"></script>
	<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
	<script type="text/javascript">
	$(function () {
		$("#modif").DataTable({         
		  "language": {
			"url": "../assets/tema/vendor/Indonesian.json",
			"sEmptyTable": "Tidak ada data di database"
		}
		});
	  
	  });
	$('#tgl,#tgl2').datepicker({format:'yyyy-mm-dd'});
	
	$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
	});
	window.setTimeout(function() { $(".alert-success").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 1500);
	window.setTimeout(function() { $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 1500);
	
	function hanyaAngka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))

	return false;
	return true;
	}
	
	CKEDITOR.replace( 'editor' );
	</script>
  </body>
</html>