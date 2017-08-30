<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="module/mod_ordermasuk/aksi_ordermasuk.php";
switch($_GET[act]){
  // Tampil Modul
  default:
    echo "<h2>ORDER MASUK PRODUK</h2>
          <table id='exampless' class='display' cellspacing='0' width='100%'>
          <thead style='background: #9B9B9B;'>
		  <tr>
			<th>No</th><th>No Order</th>
			<th>Nama Pembeli</th>
			<th>Email</th>
			<th>Status</th>
			<th>Aksi</th>
		  </tr></thead><tbody>";
		  
    $tampil=mysql_query("SELECT * FROM order_online ORDER BY id DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
    
      echo "<tr><td>$no</td>
	  <td>$r[id]</td>
	  <td>$r[nama]</td>
	  <td>$r[email]</td>";
	if($r[status] == 'Completed') {
		echo"<td style='color:#FFA300'>$r[status]</td>";
	}elseif($r[status] == 'Baru') {
		echo"<td style='color:#5ACC00'>$r[status]</td>";
	}else{echo"<td style='color:#CC0008'>$r[status]</td>";}

	 echo "<td><a href=?module=ordermasuk&act=edit_ordermasuk&id=$r[id]>Detail</a> | 
	                  ";?><a onclick="return confirm('Apakah anda yakin menghapus data ini?');" <?php echo"href=$aksi?module=ordermasuk&act=hapus&id=$r[id]>Hapus</a>
		        </tr>";
    $no++;
    }
    echo "</tbody></table>";
    break;
    
	case "edit_ordermasuk":
	
	$order = mysql_query("SELECT * FROM order_online WHERE id='$_GET[id]'");
	$r2    = mysql_fetch_array($order);
	
	echo "<h2>Detail Order Produk</h2>"; ?>
		  
		  <form method='POST' enctype='multipart/form-data' action='<?php echo"$aksi"; ?>?module=ordermasuk&act=update'>
				<input type='hidden' name='id' value='<?php echo"$_GET[id]" ?>'>
				<div class="module_content">
						<table  style="width:100%;">
							<tr>
								<td style="width:30%;"><label>No. Order</label></td>
								<td style="width:70%; margin-bottom:8px;">:<?php echo"$r2[id]" ?></td>
							</tr>
							<tr>
								<td style="width:10%;"><label>Nama</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[nama]" ?></td>
							</tr>
							<tr>
								<td style="width:10%;"><label>Telepon</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[telpon]" ?></td>
							</tr>
							<tr>
								<td style="width:10%;"><label>Alamat</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[alamat]" ?></td>
							</tr>
								<tr>
								<td style="width:10%;"><label>Domain</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[domain]" ?></td>
							</tr>
								<tr>
								<td style="width:10%;"><label>Extension</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[extension]" ?></td>
							</tr>
								<tr>
								<td style="width:10%;"><label>Anggaran</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[anggaran]" ?></td>
							</tr>
								<tr>
								<td style="width:10%;"><label>Catatan</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[catatan]" ?></td>
							</tr>
								<tr>
								<td style="width:10%;"><label>Tanggal Masuk</label></td>
								<td style="width:1000px; margin-bottom:8px;">:<?php echo"$r2[tgl_masuk]" ?></td>
							</tr>
							<tr>
								<td style="width:10%;"><label>Status Order</label></td>
								<td style="width:1000px; margin-bottom:8px;">:
									<select name="status">
										<?php 
										if($r2['status']=='Baru'){
											echo'	<option value="Completed">Completed</option>
													<option value="Canceled">Canceled</option>
													<option value="Baru" selected>Baru</option>';											
										}elseif($r2['status']=='Canceled'){
											echo'	<option value="Completed">Completed</option>
													<option value="Canceled" selected>Canceled</option>
													<option value="Baru">Baru</option>';											
										}else{
											echo'	<option value="Completed" selected>Completed</option>
													<option value="Canceled">Canceled</option>
													<option value="Baru">Baru</option>';			
										}
										?>
									</select>
								</td>
							</tr>
							
						</table>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div><br />
			</footer>
			</form>
			
		  <?php
    break;  
}
}
?>
