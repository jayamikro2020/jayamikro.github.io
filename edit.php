
<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_rencana,
											nama_rencana
											
									  from 
									  rencana_belajar 
									  where id_rencana = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<label>Nama Rencana</label>
		<input type="hidden" name="id_rencana" value="<?php echo $row['id_rencana'] ; ?>">
		<input class="form-control" name="nama_rencana" value="<?php echo $row['nama_rencana'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	
	<div class="form-group">
		<label>Realisasi</label>
		<input class="form-control" name="rincian_rencana" >
		<p style="color:red" id="error_edit_rincian"></p>
	</div>
	<div class="form-group">
		<label>Durasi Per Menit</label>
		<input class="form-control" name="durasi">
		<p style="color:red" id="error_edit_durasi"></p>
	</div>
	 
</form>