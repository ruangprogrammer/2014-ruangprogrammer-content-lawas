<?php
$aksi="module/mod_contact/aksi_contact.php";
switch($_GET[act]){
  // Tampil Komentar
  default:
    $sql  = mysql_query("SELECT * FROM static_content WHERE id='8'");
    $r    = mysql_fetch_array($sql);

		echo "<h2>EDIT CONTACT US</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=contact&act=update>
          <input type=hidden name=id value=$r[id]>
		  
          <table>
			<tr><td>Email</td><td><input type='text' name='email' value=$r[nama_halaman]></td></tr>
      <tr><td>No Handphone</td><td><input type='text' name='no_hp' value=$r[isi]></td></tr>
      <tr><td>PIN BBM</td><td><input type='text' name='pin_bbm' value=$r[gambar]></td></tr>
			<tr><td colspan='2'><input type=submit value=Update></td></tr>";
         echo"</form></table>";
    break;  
}
?>
