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
					Oleh : <a href="index.php" target="">Jaya Linux</a>
				</center>
			</p>
		</div>
	</div>
	<!-- <p style="margin-bottom:0%">
	<center>Copyright @ 2019 by : <a href="" target="_blank">Jaya Linux</a> All rights reserved.</center>
	</p> -->
</div>

	<table class="table table-bordered" >
		<tr bgcolor="">
			<th>
				No 
			</th>
			<th>
				Nama Rencana
			</th>
			<th>
				Rincian Rencana
			</th>
			<th>
				Durasi Per Menit
			</th>
			<th>
				Tanggal Buat Rencana
			</th>
			<th>
				Tanggal Buat Realisasi
			</th>
			

		<!-- 	<th>
				Opsi
			</th> -->
		</tr>
			<?php
				include"koneksi.php";
				$tgl    =date("Y-m-d");
				date_default_timezone_set('Asia/Jakarta');
				echo date('l, d  M  Y  H:i:s'); // Hasil: 20-01-2017 05:32:15
				$no = 1;
				$data = mysqli_query ($koneksi, " select id_rencana, nama_rencana, rincian_rencana, durasi, tgl_rencana, tgl_realisasi from rencana_belajar order by tgl_rencana desc");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nama_rencana']; ?>
			</td>
			<td>
				<?php echo $row['rincian_rencana'];   ?>
			</td>
			<td>
				<?php echo $row['durasi'];   ?>
			</td>
			<td>
				<?php echo $row['tgl_rencana'];   ?>
			</td>
			<td>
				<?php echo $row['tgl_realisasi']; ?>
			</td>
			<!-- <td>
				<a href="#" id="edit" data-id="<?php echo $row['id_rencana']; ?>">Realisasi</a> |
				<a href="#" id="hapus" data-id="<?php echo $row['id_rencana']; ?>">Hapus</a> 
			</td> -->
		</tr>
		<?php
			}
		?>
	</table></body></html>