<?php
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus partner
if ($module=='ordermasuk' AND $act=='hapus'){

	$id = $_GET['id'];

	mysql_query("DELETE FROM order_online WHERE id='$id'");
		//echo $sql; exit;
	
	header('location:../../page.php?module='.$module);
}

// Update header
elseif ($module=='ordermasuk' AND $act=='update'){
    mysql_query("UPDATE order_online SET status = '$_POST[status]' WHERE id = '$_POST[id]'");
	
	header('location:../../page.php?module='.$module);
  
}
?>
