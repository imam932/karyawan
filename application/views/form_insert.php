<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url().'welcome'?>">Project Imam Nawawi</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          
        </ul>
      </div>
    </div>
  </nav>

	<!-- end Navbar  -->


	<div class="container">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			
		</div>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<form action="" method="POST" role="form" >
				<legend>Form Insert Profil</legend>

				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="NIM" name="nim">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Nama Panggilan" name="panggilan">
				</div>
				<div class="form-group">
					<input type="text" name="tgl_lahir" id="dp1" class="span4 form-control" data-date-format="yyyy-mm-dd" value="<?= date('Y-m-d')?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="alamat" name="alamat">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Hobi" name="hobi">
				</div>
				<button type="submit" class="btn btn-primary" name="ok">Simpan</button>
			</form>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			
		</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dp1').datepicker();
			$('.span4').datepicker();
		});
	</script>
</body>
</html>