<?php
	if( ($_GET['content']=='order_online') AND (isset($_GET['aksi'])) ){								
				$nama_domain = "$_POST[domain]"."$_POST[extension]";
				$arrHost = @gethostbynamel("$nama_domain");
				//if(empty($arrHost)){
					if(!empty($_POST['kode'])) {
						if($_POST['kode']==$_SESSION['captcha_session']) {
						
							$em=mysql_fetch_array(mysql_query("SELECT nama_halaman FROM static_content where id='5' "));
							
							$to = $em['nama_halaman'];
							$subject = "Order Website JMW dari ".$_POST['nama'];
							$headers = "From: Pengirim ".$_POST['nama']."<".$_POST['email'].">";
							$headers .= " MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
							$isi = "<html><body>";
							$isi .= "
									<br /><p>Nama 			: $_POST[nama]</p>
									<p>Email 		: $_POST[email]</p>
									<p>No Telp / HP 	: $_POST[telpon]</p>
									<p>Alamat  		: $_POST[alamat]</p>
									<p>Domain 		: $_POST[domain]</p>
									<p>Extension 	: $_POST[extension]</p>
									<p>Anggaran 		: $_POST[anggaran]</p>
									<p>Catatan 		: $_POST[catatan]</p>
							";
							$isi .= "</body></html>";

							// eksekutor
							mail($to,$subject,$isi,$headers);
							
							mysql_query("INSERT INTO order_online(nama, email, telpon, alamat, domain, extension, anggaran, catatan, tgl_masuk) 
										 VALUES('$_POST[nama]','$_POST[email]', '$_POST[telpon]', '$_POST[alamat]', '$_POST[domain]', '$_POST[extension]', '$_POST[anggaran]', '$_POST[catatan]', now())");
									 
							echo "<script>alert('Terimakasih telah Memesan Website kami. Kami akan segera meresponnya.'); window.location = 'jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html'</script>";
							
						} else {							
							echo "<script>alert('Kode Capcah anda salah'); window.location = 'order-jasa-pembuatan-website-online-di-jogja.html'</script>";
						}
					} else {
							echo "<script>alert('Anda belum memasukan Kode Capcah'); window.location = 'order-jasa-pembuatan-website-online-di-jogja.html'</script>";
					}
				//}else{
					//echo'<a href="javascript:history.go(-1)"><b>Maaf Domain yang anda minta Tidak ada / sudah dimiliki orang lain</b><br/>';
				//}
	
				if(isset($err)) {
				}		
	}else{;
				
				?>
					<form  id="contactForm" method="POST" action="order-jasa-pembuatan-web-online-di-jogja.html">
						<table border="0">
							<tr>
								<td width="200px">Nama <i style="color: red;">(*)</i></td>
								<td width="300px"><input type="text" name="nama" class="jmw-text"></td>
							</tr>
							<tr>
								<td>Email <i style="color: red;">(*)</i></td>
								<td><input type="text" name="email" class="jmw-text"></td>
							</tr>
							<tr>
								<td>No Telp / HP <i style="color: red;">(*)</i></td>
								<td><input type="text" name="telpon" class="jmw-text"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><textarea name="alamat" rows="5" class="jmw-textarea"></textarea></td>
							</tr>
							<tr>
								<td>Domain</i></td>
								<td>
									<input type="text" name="domain" class="jmw-text">
								</td>
							</tr>
							<tr>
								<td>Extension</i></td>
								<td>
									<select name="extension" class="jmw-text">
										<option value=".com" selected="">.com</option>
										<option value=".net">.net</option>
										<option value=".org">.org</option>
										<option value=".biz">.biz</option>
										<option value=".info">.info</option>
										<option value=".co">.co</option>
										<option value=".us">.us</option>
										<option value=".name">.name</option>
										<option value=".in">.in</option>
										<option value=".mobi">.mobi</option>
										<option value=".tv">.tv</option>
										<option value=".ws">.ws</option>
										<option value=".cc">.cc</option>
										<option value=".asia">.asia</option>
										<option value=".web.id">.web.id</option>
										<option value=".co.id">.co.id</option>
										<option value=".or.id">.or.id</option>
										<option value=".sch.id">.sch.id</option>
										<option value=".ac.id">.ac.id</option>
										<option value=".net.id">.net.id</option>
										<option value=".my.id">.my.id</option>
										<option value=".biz.id">.biz.id</option>
										<option value=".go.id">.go.id</option>
										<option value=".mil.id">.mil.id</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Anggaran <i style="color: red;">(*)</i></td>
								<td>
									<select name="anggaran" class="jmw-text">
										<option value="-silahkan pilih-" selected="">-silahkan pilih-</option>
										<option value="dibawah Rp.1.000.000">dibawah Rp.1.000.000</option>
										<option value="Rp.1.000.000 - Rp.1.500.000">Rp.1.000.000 - Rp.1.500.000</option>
										<option value="Rp.1.500.000 - Rp.2.000.000">Rp.1.500.000 - Rp.2.000.000</option>
										<option value="Rp.2.000.000 - Rp.2.500.000">Rp.2.000.000 - Rp.2.500.000</option>
										<option value="Rp.2.500.000 - Rp.3.000.000">Rp.2.500.000 - Rp.3.000.000</option>
										<option value="Rp.3.000.000 - Rp.3.500.000">Rp.3.000.000 - Rp.3.500.000</option>
										<option value="Rp.3.500.000 - Rp.4.000.000">Rp.3.500.000 - Rp.4.000.000</option>
										<option value="Rp.4.000.000 - Rp.4.500.000">Rp.4.000.000 - Rp.4.500.000</option>
										<option value="Rp.4.500.000 - Rp.5.000.000">Rp.4.500.000 - Rp.5.000.000</option>
										<option value="Rp.5.000.000 - Rp.7.500.000">Rp.5.000.000 - Rp.7.500.000</option>
										<option value="Rp.7.500.000 - Rp.10.000.000">Rp.7.500.000 - Rp.10.000.000</option>
										<option value="Rp.10.000.000 - Rp.15.000.000">Rp.10.000.000 - Rp.15.000.000</option>
										<option value="Rp.15.000.000 - Rp.20.000.000">Rp.15.000.000 - Rp.20.000.000</option>
										<option value="Rp.20.000.000 - Rp.25.000.000">Rp.20.000.000 - Rp.25.000.000</option>
										<option value="Rp.25.000.000 - Rp.35.000.000">Rp.25.000.000 - Rp.35.000.000</option>
										<option value="Rp.35.000.000 - Rp.50.000.000">Rp.35.000.000 - Rp.50.000.000</option>
										<option value="Rp.50.000.000 - Rp.75.000.000">Rp.50.000.000 - Rp.75.000.000</option>
										<option value="Rp.75.000.000 - Rp.100.000.000">Rp.75.000.000 - Rp.100.000.000</option>
										<option value="diatas Rp.100.000.000">diatas Rp.100.000.000</option>
										<option value="BELUM TAHU">BELUM TAHU</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Catatan</td>
								<td><textarea name="catatan" rows="5" class="jmw-textarea"></textarea></td>
							</tr>
							<tr>
								<td><img class='captcha' src='captcha.php' /></td>
								<td><input name='kode' onclick='this.select()' placeholder='Masukan kode...' type="text" class="jmw-text"/></td>
							</tr>
							<tr>
								<td colspan="2">
									<center>
									<input type="submit" value="Order" class="wpcf7-form-control wpcf7-submit btn btn-primary">
									</center>
								</td>
							</tr>
							<tr>
								<td colspan="2"><i style="color: red;">(*)</i> = Wajib diisi</td>
							</tr>
						</table>
					</form>
			
					
		<?php } ?>				
	