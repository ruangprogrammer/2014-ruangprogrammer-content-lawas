<?php
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus partner
if ($module=='pesan' AND $act=='hapus'){

	$id = $_GET['id'];

	mysql_query("DELETE FROM kontak WHERE id='$id'");
	
	header('location:../../page.php?module='.$module);
}

// Update header
elseif ($module=='ordermasuk' AND $act=='update'){
    mysql_query("UPDATE orders SET status_order = '$_POST[status]' WHERE id_orders = '$_POST[ide]'");
	
	header('location:../../page.php?module='.$module);
  
}
?>
