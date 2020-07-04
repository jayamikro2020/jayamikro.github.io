<?php
include"koneksi.php";
$nama_rencana = $_POST['nama_rencana'];
$tgl_rencana = date("Y-m-d H:i:s", time()+60*60*5);
// date_default_timezone_set('Asia/Jakarta');
if ($nama_rencana == '') {
    $data['error']['nama_rencana'] = 'Nama tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO rencana_belajar SET
										nama_rencana = '$nama_rencana',tgl_rencana = '$tgl_rencana'
										
										";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

