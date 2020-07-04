<!DOCTYPE html>
<html>
<head>
	<title>CRUD Modal Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">

	 
</head>
<body>


<div class="container" style="margin-top:0%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Rencana Belajar</h2>
					Oleh : <a href="" target="_blank">Jaya Linux</a>
				</center>
			</p>
			<br>
			<p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah Rencana</button>
				<a href="view.php"><button type="button" class="btn btn-success" >View semua data</button></a>
			</p>
				<div id="data-mahasiswa">
				</div>
		</div>
	</div>
	<!-- <p style="margin-bottom:0%">
	<center>Copyright @ 2019 by : <a href="" target="_blank">Jaya Linux</a> All rights reserved.</center>
	</p> -->
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script.js"></script>	
</body>
</html>



	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan Rencana</h4>
				</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label>Nama Rencana</label>
							<input class="form-control" id="nama_rencana" name="nama_rencana">
							<p style="color:red" id="error_nama"></p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div>
	
	
	<div id="modal-edit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-edit" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Realisasi</h4>
				</div>
					<div class="modal-body">
						<div id="data-edit">
						
						</div>				
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div> 