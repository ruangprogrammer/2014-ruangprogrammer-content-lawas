<?php
/*include "../../../well_sys/koneksi.php";
include "../../../well_sys/library.php";
include "../../../well_sys/fungsi_thumb.php";
include "../../../well_sys/fungsi_seo.php";
include "../../../well_sys/watermark.php";*/
include "../../../lib/php/koneksi.php";
//include "../../../lib/php/library.php";
include "../../../lib/php/fungsi_thumb.php";
include "../../../lib/php/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus slide
if ($module=='slide' AND $act=='hapus'){

	$id = $_GET['id'];

	$cek = mysql_fetch_array(mysql_query("SELECT gambar FROM slide WHERE id='$id'"));
	if($cek['gambar']!=''){
	mysql_query("DELETE FROM slide WHERE id='$_GET[id]'");
    unlink("../../../images/slider/$cek[gambar]");   
  } else { 
	mysql_query("DELETE FROM slide WHERE id='$id'");
	}
	
	header('location:../../page.php?module='.$module);
}

// Input header
elseif ($module=='slide' AND $act=='input'){
	$lokasi_file    = $_FILES['fupload']['tmp_name'];
	$tipe_file      = $_FILES['fupload']['type'];
	$nama_file      = $_FILES['fupload']['name'];
	$acak           = rand(000000,999999);
	$nama		= "ruang-programmer-";
	$nama_file_unik = $nama.$acak.$nama_file; 
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    UploadSlide($nama_file_unik);
    mysql_query("INSERT INTO slide(link,
									gambar,
									tanggal) 
                            VALUES('$_POST[link]',
									'$nama_file_unik',
									now())");
	//	echo $sql; exit;
  }
  else{
    mysql_query("INSERT INTO slide(link,
								   tanggal) 
                            VALUES('$_POST[link]',
									now())");
  }
  header('location:../../page.php?module='.$module);
}

// Update header
elseif ($module=='slide' AND $act=='update'){
	$lokasi_file    = $_FILES['fupload']['tmp_name'];
	$tipe_file      = $_FILES['fupload']['type'];
	$nama_file      = $_FILES['fupload']['name'];
	$acak           = rand(000000,999999);
	$nama		= "ruang-programmer-";
	$nama_file_unik = $nama.$acak.$nama_file; 
  
  $judul_seo      = seo_title($_POST[judul]);
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM slide WHERE id='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex['gambar'] != ''){
		unlink("../../../images/slider/$ex[gambar]");
		}
	
	UploadSlide($nama_file_unik);
  
    mysql_query("UPDATE slide SET 	link 	= '$_POST[link]',
									gambar	= '$nama_file_unik'
                            WHERE id  = '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE slide SET 	link 	= '$_POST[link]'
                            WHERE id  = '$_POST[id]'");
	}
  header('location:../../page.php?module='.$module);
}
?>
