<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="module/mod_testi/aksi_testi.php";
switch($_GET['act']){
 default:
    echo "<h2 class='hLine'>Pengaturan Testi</h2>
          <input type=button class='butt' value='Tambah Testi' onclick=\"window.location.href='?module=testi&act=addTest';\">
          
		  
          <table class='list'>
          <thead>
			  <tr>
				<td class='center'>No.</td>
				<td class='center'>Nama</td>
				<td class='center'>Testimonial</td>
				<td class='center'>Tanggal</td>
				<td class='center' colspan='2'>Aksi</td>
			  </tr>
		  </thead>";
		$sql=mysql_query("SELECT * FROM testi ORDER BY id DESC");
		$no=1;
		while($s=mysql_fetch_array($sql))
		{
			//$tanggal=tgl_indo($s['tanggal']);
			echo "<tr><td width='25'>$no.</td>
                <td class='center'>$s[nama]</td>
                <td class='center'>$s[isi]</td>
                <td class='center'>$s[tanggal]</td>
                <td width='35'>
						<a href=?module=testi&act=editTest&id=$s[id] title='edit'><img src='images/add-icon.gif'></a> 
					</td>
		            <td width='35'><a href=$aksi?module=testi&act=del&id=$s[id]><img src='images/hr.gif' title='Hapus'></a></td>

		        </tr>";
			$no++;
		}
    echo "</table>";
	break;
	
	case "addTest":
	 echo "<h2 class='hLine'>Tambah Testi</h2>
          <form method=POST action='$aksi?module=testi&act=input' enctype='multipart/form-data'>
          <table class='list'>
          <tr>
			<td width=100 class='left'>Nama </td>
			<td class='left'><input type=text name='nama' size=60></td>
		  </tr>
		  <tr>
			<td width=100 class='left'>Testimonial</td>
			<td class='left'><textarea name='isi' style='width: 100%; height: 350px;'></textarea></td>
		  </tr>
          <tr>
			<td colspan=2 class='left'>
			<input type=submit class='butt' value=Simpan>
            <input type=button class='butt' value=Batal onclick=self.history.back()></td>
		  </tr>
          </table></form>";
     break;

     case "editTest":
	$edit = mysql_query("SELECT * FROM testi WHERE id='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2 class='hLine'>Edit Testi &raquo $r[nama]</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=testi&act=update>
          <input type=hidden name=id value=$r[id]>
          <table class='list'>";
	 echo "<tr>
	<td  class='left' valign='middle'>Nama</td> 
	<td class='left'><input type=text name='nama' size=60 value='$r[nama]'> </td>
	</tr>
	 <tr>
			<td width=100 class='left'>Testimonial</td>
			<td class='left'><textarea name='isi' style='width: 100%; height: 350px;'>$r[pesan]</textarea></td>
		 </tr>
		 <tr>";
	echo  "<tr>
			<td class='left' colspan=2>
			<input class='butt' type=submit value=Update>
            <input class='butt' type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form>";
	break;
		
}//end switch

}//end if else
?>
