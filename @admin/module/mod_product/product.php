<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
	$aksi="module/mod_product/aksi_product.php";
	switch($_GET[act]){
		// Tampil slide
		default:
		echo "<h2>EDIT PRODUK</h2>
					<input type=button  class=butt value='Tambahkan Produk' onclick=location.href='?module=product&act=tambah_produk'>
					<table id='exampless' class='display' cellspacing='0' width='100%'>
						<thead style='background: #9B9B9B;'>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Keterangan</th>
								<th>Link</th>
								<th>Tanggal Update</th>
								<th>Tanggal Posting</th>
								<th class='center'>Aksi</th>
							</tr>
						</thead><tbody>";
						$tampil=mysql_query("SELECT * FROM porto ORDER BY id DESC");
						$no=1;
						while ($r=mysql_fetch_array($tampil)){
							
						  echo "<tr><td>$no</td>
						  			<td>$r[keterangan]</td>
									<td><img height='80px' src='../images/porto/$r[gambar]'></td>
									<td>$r[link]</td>
									<td>$r[tgl_update]</td>
									<td>$r[tgl_posting]</td>
									<td class='center'><a href=?module=product&act=edit_product&id=$r[id]>Edit</a> | 
										";?><a onclick="return confirm('Apakah anda yakin menghapus data ini?');" 
										<?php echo"href=$aksi?module=product&act=hapus&id=$r[id]>Hapus</a>

									</tr>";
						$no++;
						}
				echo "</tbody>
					</table>";
			break;
  
  case "tambah_produk":
    echo "<h2>TAMBAHKAN PRODUK</h2>
			<form method=POST action='$aksi?module=product&act=input' enctype='multipart/form-data'>
			<table>";
	echo "<tr><td>Keterangan</td><td>  : </td><td><input type=text name='keterangan' size=50 placeholder='Keterangan' required></td></tr>
		  <tr><td>Link</td><td>  : </td><td><input type=text name='link' size=50 placeholder='URL'></td></tr>
		  <tr><td>Gambar</td><td>  : </td><td><input type=file name='fupload' size=50></td></tr>";
	echo" <tr><td colspan=3>
			<input type=submit class=butt value=Simpan>
			<input type=button class=butt value=Batal onclick=self.history.back()></td></tr>
		   </table></form><br /><br />";
     break;
    
  case "edit_product":
    $edit = mysql_query("SELECT * FROM porto WHERE id='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>EDIT product PRODUK</h2>
			<form method=POST enctype='multipart/form-data' action=$aksi?module=product&act=update>
			<input type=hidden name=id value=$r[id]>
			<table>";
	echo "<tr><td>Keterangan</td><td>  : </td><td><input type=text name='keterangan' size=50 value='$r[keterangan]' required></td></tr>
		  <tr><td>Link</td><td>  : </td><td><input type=text name='link' size=50 value='$r[link]'></td></tr>
		  <tr><td>Gambar Sekarang</td><td>  : </td><td><img height='300px' src='../images/porto/$r[gambar]'></td></tr>
		  <tr><td>Gambar</td><td>  : </td><td><input type=file name='fupload' size=50></td></tr>";
	echo" <tr><td colspan=3>
			<input type=submit class=butt value=Simpan>
			<input type=button class=butt value=Batal onclick=self.history.back()></td></tr>
		   </table></form><br /><br />";
		break;  
	}
}
?>
