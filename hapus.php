<?php
include"koneksi.php";


$query = "DELETE FROM rencana_belajar 
							WHERE id_rencana ='$_POST[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

