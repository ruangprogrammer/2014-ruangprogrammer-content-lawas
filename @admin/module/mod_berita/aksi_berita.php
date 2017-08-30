<?php
error_reporting(0);
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus berita
if ($module=='berita' AND $act=='hapus'){

	$id = $_GET['id'];
	$gbr= $_GET['file'];

	$cek = mysql_fetch_array(mysql_query("SELECT gambar FROM berita WHERE id='$id'"));
	if($cek['gambar']!=''){
	mysql_query("DELETE FROM berita WHERE id='$_GET[id]'");
    unlink("../../../images/artikel/$cek[gambar]");   
  	} else { 
	mysql_query("DELETE FROM berita WHERE id='$id'");
	}
	
	header('location:../../page.php?module='.$module);
}

// Input header
elseif ($module=='berita' AND $act=='input'){
  $judul=$_POST['judul'];
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $web		= "ruang-programmer-";
  $nama_file_unik = $web.$acak.$nama_file; 
  
  $judul_seo      = seo_title($_POST[judul]);

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    UploadArtikel($nama_file_unik);
   	mysql_query("INSERT INTO berita VALUES ('','$judul',
										'".mysql_real_escape_string($_POST[isi])."',
										'$nama_file_unik',
										now(),
										'google.com',
										'$judul_seo',
										'1')");
		//echo $sql; exit;
  }
  else{
    mysql_query("INSERT INTO berita VALUES ('','$judul',
										'".mysql_real_escape_string($_POST[isi])."',
										'',
										now(),
										'google.com',
										'$judul_seo',
										'1')");
  }
  header('location:../../page.php?module='.$module);
}

// Update header
elseif ($module=='berita' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $web		= "ruang-programmer-";
  $nama_file_unik = $web.$acak.$nama_file;
  
  $judul_seo      = seo_title($_POST[judul]);
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM berita WHERE id='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex['gambar'] != ''){
		unlink("../../../images/artikel/$ex[gambar]");
		}
	
	UploadArtikel($nama_file_unik);
  
   	mysql_query("UPDATE berita SET judul 	= '$_POST[judul]',
									isi 	= '".mysql_real_escape_string($_POST['isi'])."',
									gambar	= '$nama_file_unik',
									judul_seo 	= '$judul_seo'
                            WHERE id  = '$_POST[id]'");
	//	echo $sql; exit;
	}
	else{
	mysql_query("UPDATE berita SET judul 	= '$_POST[judul]',
								   isi 	= '".mysql_real_escape_string($_POST['isi'])."'
                            WHERE id  = '$_POST[id]'");
	}
  header('location:../../page.php?module='.$module);
}
?>
