<?php
session_start();
include "../../../josys/koneksi.php";
include "../../../josys/library.php";
include "../../../josys/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus bank
if ($module=='bank' AND $act=='hapus'){

  $gbr = $_GET['file'];
  $id= $_GET['id'];
  
  //cek gambar, jika ada hapus dari folder
  $cek = mysql_fetch_array(mysql_query("SELECT gambar FROM mod_bank WHERE id_bank='$id'"));
  if($cek['gambar']!=''){
	mysql_query("DELETE FROM mod_bank WHERE id_bank='$id'");
    unlink("../../../assets/images/bank/$_gbr");   
    unlink("../../../assets/images/bank/s_$gbr");
  } else { 
	mysql_query("DELETE FROM mod_bank WHERE id_bank='$id'");
	}
	
	header('location:../../media.php?module='.$module);
}

// Input bank
elseif ($module=='bank' AND $act=='input'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    uploadBank($nama_file);
    mysql_query("INSERT INTO mod_bank(nama_bank,
                                    no_rekening,
                                    pemilik,
                                    gambar) 
                            VALUES('$_POST[nama_bank]',
                                   '$_POST[no_rekening]',
                                   '$_POST[pemilik]',
                                   '$nama_file')");
  }
  else{
    mysql_query("INSERT INTO mod_bank(nama_bank,
                                    no_rekening,
                                    pemilik) 
                            VALUES($_POST[nama_bank]',
                                   '$_POST[no_rekening]',
                                   '$_POST[pemilik]')");
  }
  header('location:../../media.php?module='.$module);
}

// Update banner
elseif ($module=='bank' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE mod_bank SET nama_bank     = '$_POST[nama_bank]',
                                   no_rekening       = '$_POST[no_rekening]',
                                   pemilik       = '$_POST[pemilik]'                                   
                             WHERE id_bank = '$_POST[id]'");
  }
  else{
    uploadBank($nama_file);
    mysql_query("UPDATE mod_bank SET nama_bank   = '$_POST[nama_bank]',
                                   no_rekening   = '$_POST[no_rekening]',
                                   pemilik       = '$_POST[pemilik]',
                                   gambar        = '$nama_file'
                             WHERE id_bank = '$_POST[id]'");
  }
  header('location:../../media.php?module='.$module);
}
?>
