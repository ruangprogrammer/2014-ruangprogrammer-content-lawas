<?php
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus partner
if ($module=='product' AND $act=='hapus'){

	$id = $_GET['id'];
	$gbr= $_GET['file'];

	$cek = mysql_fetch_array(mysql_query("SELECT * FROM porto WHERE id='$id'"));
	if($cek['gambar']!=''){
	mysql_query("DELETE FROM porto WHERE id='$_GET[id]'");
    unlink("../../../images/porto/$cek[gambar]");   
	
  } else { 
	mysql_query("DELETE FROM porto WHERE id='$id'");   

	}
	
	header('location:../../page.php?module='.$module);
}

// Input header
elseif ($module=='product' AND $act=='input'){
	
	$lokasi_file    	= $_FILES['fupload']['tmp_name'];
	$tipe_file     		= $_FILES['fupload']['type'];
	$nama_file      	= $_FILES['fupload']['name'];
	$acak				= rand(000000,999999);
	$web					= "ruang-programmer-";
	$nama_file_unik 	= $web.$acak.$nama_file; 
  
	//$judul_seo      = seo_title($_POST['nama']);
	
	$now = date("Y-m-d H:i:s");
  
   if(!empty($lokasi_file)){
  
	UploadPorto($nama_file_unik);
	mysql_query("INSERT INTO porto(
									keterangan,
									gambar,
									link,
									tgl_update,
									tgl_posting) 
                            VALUES(
									'$_POST[keterangan]',
									'$nama_file_unik',
									'$_POST[link]',
									 now(),
									 now())");		
	}else{
	mysql_query("INSERT INTO porto(
									keterangan,
									link,
									tgl_update) 
								VALUES(
									'$_POST[keterangan]',
									'$nama_file_unik',
									'$_POST[link]',
									 now()");	

	}
  
  header('location:../../page.php?module='.$module);
}

// Update header
elseif ($module=='product' AND $act=='update'){
    $lokasi_file    = $_FILES['fupload']['tmp_name'];
	$tipe_file      = $_FILES['fupload']['type'];
	$nama_file      = $_FILES['fupload']['name'];
	$acak           = rand(000000,999999);
	$web					= "ruang-porgrammer-";
	$nama_file_unik 	= $web.$acak.$nama_file; 
	//echo $nama_file_unik; exit;
  
	if(!empty($lokasi_file)){
	$tampil=mysql_query("SELECT * FROM porto WHERE id='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../images/porto/$ex[gambar]");
		}
	
	UploadPorto($nama_file_unik);
	mysql_query("UPDATE porto SET 
								keterangan	 = '$_POST[keterangan]',
								gambar			= '$nama_file_unik',
								link ='$_POST[link]',
								tgl_update =now()
                            WHERE id  = '$_POST[id]'");
		//echo $sql; exit;
										
		
	}else{
	mysql_query("UPDATE porto SET 
								keterangan = '$_POST[keterangan]',
								link = '$_POST[link]',
								tgl_update=now()
                            WHERE id  = '$_POST[id]'");
	//echo $sql; exit;
			
		
	}
  header('location:../../page.php?module='.$module);

	}
?>
