<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.contacts' rel='stylesheet' type='text/contacts'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];


// Update berita
if ($module=='contact' AND $act=='update'){
  
	//mysql_query(
		$sql="UPDATE static_content SET nama_halaman	= '".$_POST[email]."',
										   isi='".$_POST[no_hp]."',
										   gambar='".$_POST[pin_bbm]."'
                            WHERE id  = '$_POST[id]'";//);
		$result=mysql_query($sql);
	//echo $sql; exit;
	
  header('location:../../page.php?module='.$module);
}
}
?>
