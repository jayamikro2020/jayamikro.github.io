<?php
include"koneksi.php";

$id 			= $_POST['id_rencana'];
$nama_rencana 	= $_POST['nama_rencana'];
$rincian_rencana= $_POST['rincian_rencana']; 
$durasi			= $_POST['durasi'];
$tgl_realisasi  = date("Y-m-d H:i:s", time()+60*60*5);
		if ($nama_rencana == '') {
			$data['error']['edit_nama'] = 'Nama  harap diisi';
		}
		if ($rincian_rencana == '') {
			$data['error']['edit_rincian'] = 'Rincian harap diisi';
		}
		if ($durasi == '') {
			$data['error']['edit_durasi'] = 'Durasi harap diisi';
		}
		

		if (empty($data['error'])) {
			$query = "UPDATE rencana_belajar SET
											nama_rencana = '$nama_rencana', rincian_rencana = '$rincian_rencana', durasi = '$durasi',tgl_realisasi='$tgl_realisasi'
											WHERE id_rencana = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

