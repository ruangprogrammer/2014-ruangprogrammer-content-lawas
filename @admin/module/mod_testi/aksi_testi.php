<?phpsession_start();include "../../../lib/php/koneksi.php";//include "../../../lib/php/library.php";include "../../../lib/php/fungsi_thumb.php";include "../../../lib/php/fungsi_seo.php";$module=$_GET['module'];$act=$_GET['act'];// Hapusif ($module=='testi' AND $act=='del'){	//echo "hello";	mysql_query("DELETE FROM testi WHERE id='$_GET[id]'");	header('location:../../page.php?module='.$module);}// Inputelseif ($module=='testi' AND $act=='input'){				$isi=mysql_real_escape_string($_POST[isi]);				mysql_query("INSERT INTO testi (nama,									isi,                                    tanggal)                             VALUES('$_POST[nama]',                            		'$isi',now())");				  header('location:../../page.php?module='.$module);}// Update testielseif ($module=='testi' AND $act=='update'){ 	$isi=mysql_real_escape_string($_POST[isi]);		//mysql_query("		$sql="UPDATE testi SET nama 	   = '$_POST[nama]',											  isi = '$isi',											  tanggal=now()                             WHERE id   = '$_POST[id]'";//);	echo $sql; exit;	header('location:../../page.php?module='.$module);}?>