<?php
include "../../../josys/koneksi.php";
include "../../../josys/library.php";
include "../../../josys/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus header
if ($module=='header' AND $act=='hapus'){
 $data=mysql_fetch_array(mysql_query("SELECT gambar FROM mod_header WHERE id_slider='$_GET[id]'"));
  if ($data['gambar']!=''){
       //hapus foto di folder
	  unlink("../../../joimg/slides/$_GET[namafile]"); 
	  unlink("../../../joimg/slides/s_$_GET[namafile]");   	  
	  mysql_query("DELETE FROM mod_header WHERE id_slider='$_GET[id]'");
  }
  else{
     mysql_query("DELETE FROM mod_header WHERE id_slider='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input header
elseif ($module=='header' AND $act=='input'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    UploadHeader($nama_file_unik);
    mysql_query("INSERT INTO mod_header(judul,tgl_posting,gambar) 
                            VALUES('$_POST[judul]', '$tgl_sekarang',
                                   '$nama_file_unik')");
  }
  else{
    mysql_query("INSERT INTO mod_header(judul) 
                            VALUES('$_POST[judul]'");
  }
  header('location:../../media.php?module='.$module);
}

// Update header
elseif ($module=='header' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE mod_header SET judul     = '$_POST[judul]'
                             WHERE id_slider = '$_POST[id]'");
  }
  else{
	  $file=mysql_fetch_array(mysql_query("SELECT gambar FROM mod_header WHERE id_slider='$_POST[id]'"));
	  //hapus foto dari folder
	  unlink("../../../joimg/slides/$file[gambar]");   
	  unlink("../../../joimg/slides/s_$file[gambar]"); 	  
    UploadHeader($nama_file_unik);
    mysql_query("UPDATE mod_header SET judul     = '$_POST[judul]',
                                   gambar    = '$nama_file_unik'   
                             WHERE id_slider = '$_POST[id]'");
  }
  header('location:../../media.php?module='.$module);
}
?>
