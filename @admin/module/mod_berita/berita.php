<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="module/mod_berita/aksi_berita.php";
switch($_GET[act]){
  // Tampil slide
  default:
    echo "<h2>Edit Blog</h2>
          <input type=button  class=butt value='Tambahkan Blog' onclick=location.href='?module=berita&act=tambah_berita'>
          <table>
          <tr><th>No</th><th>Judul</th><th>Thumbnail</th><th>Tanggal</th><th>Aksi</th></tr>";
    $tampil=mysql_query("SELECT * FROM berita  ORDER BY id DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
    
      echo "<tr style='background:#CCC'><td>$no</td>
	  <td>$r[judul]</td>
	  
	  <td width=30% >";
	  if($r['gambar'] != ''){
	  echo "<p align='justify'><img width='100px' src='../images/artikel/$r[gambar]'></p>";
	  }else{echo "<p align='justify'>Belum ada</p>";}
	  echo "</td><td>$r[tgl_posting]</td>
	  <td ><a href=?module=berita&act=edit_berita&id=$r[id]>Edit</a> | 
	                 ";?> <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" <?php echo"href=$aksi?module=berita&act=hapus&id=$r[id]>Hapus</a>
		        </tr>";
    $no++;
    }
    echo "</table>";
    break;
  
  case "tambah_berita":
    echo "<h2>Tambahkan Blog</h2>
          <form method=POST action='$aksi?module=berita&act=input' enctype='multipart/form-data'>
          <table>
          <tr><td>Judul</td><td>  : <input type=text name='judul' size=30></td></tr>
          <tr><td colspan=2><textarea name='isi' id='jogmce'></textarea></td></tr>
		   <tr><td>Gambar</td><td> : <input type=file name='fupload' size=40> (* Ukuran image 545px * 615px) </td></tr>
          <tr><td colspan=2>
		  		  <input type=submit class=butt value=Simpan>
          <input type=button class=butt value=Batal onclick=self.history.back()></td></tr>
          </table></form><br /><br />";
     break;
    
  case "edit_berita":
    $edit = mysql_query("SELECT * FROM berita WHERE id='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Blog</h2>
			
          <form method=POST enctype='multipart/form-data' action=$aksi?module=berita&act=update>
          <input type=hidden name=id value=$r[id]>
		  
          <table>
		   <tr><td>Judul</td><td>     : <input type=text name='judul' size=30 value='$r[judul]'></td></tr>
          <tr><td colspan=2><textarea name='isi' id='jogmce'>$r[isi]</textarea></td></tr>
          <tr style='background:#CCC'><td>Gambar</td><td>    : <img width=200 src='../images/artikel/$r[gambar]'></td></tr>
          <tr><td>Ganti Gambar</td><td> : <input type=file name='fupload' size=30> *)</td></tr>
                    <tr><td colspan=2><input type=submit class=butt value=Update>
                            <input type=button class=butt value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
}
}
?>
