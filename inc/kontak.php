<?php
	if( ($_GET['content']=='kontak') AND (isset($_GET['aksi'])) ){
				$nama = trim($_POST['nama']);
				$telpon = trim($_POST['telpon']);
				$email	 = trim($_POST['email']);
				$pesan = trim($_POST['pesan']);

				if(empty($pesan)) {
					echo 'Anda belum mengisikan Pesan<br/>';
					$err = TRUE;
				}
				if(isset($err)) {
					echo'<a href="javascript:history.go(-1)"><b>Ulangi Lagi</b><br/>';
				} elseif(empty($err)) {
					if(!empty($_POST['kode'])) {
						//if($_POST['kode']==$_SESSION['captcha_session']) {
						
							$em=mysql_fetch_array(mysql_query("SELECT nama_halaman FROM static_content where id='3' "));
							
							$to = $em['nama_halaman'];
							$subject = "Order Website Runagprogrammer dari ".$_POST['nama'];
							$headers = "From: Pengirim ".$_POST['nama']."<".$_POST['email'].">";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
							$isi = "<html><body>";
							$isi .= "
									<br /><p>Nama 			: $_POST[nama]</p>
									<p>Email 		: $_POST[email]</p>
									<p>No Telp / HP 	: $_POST[telpon]</p>
									<p>Pesan	: $_POST[pesan]</p>
							";
							$isi .= "</body></html>";

							// eksekutor
							mail($to,$subject,$isi,$headers);
							
							mysql_query("INSERT INTO kontak(nama, email, telpon, subjek, pesan, tgl_masuk) 
										 VALUES('$_POST[nama]','$_POST[email]', '$_POST[telpon]', '$_POST[subjek]', '$_POST[pesan]', now())");
							echo "<script>alert('Terimakasih telah menghubungi kami. Kami akan segera meresponnya.'); window.location = 'kontak-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html'</script>";
						} /*else {							
							echo "<script>alert('Kode Capcah anda salah'); window.location = '/kontak-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html'</script>";
						}*/
					} else {
							echo "<script>alert('Anda belum memasukan Kode Capcah'); window.location = '/kontak-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html'</script>";
					}
				}		
	}else{				
				?>
					<form action="send-contact-to-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html" method="POST" id="contactForm" >
						<table border="0">
							<tr>
								<td width="200px">Nama <i style="color: red;">(*)</i></td>
								<td width="300px"><input type="text" name="nama" class="jmw-text" required></td>
							</tr>
							<tr>
								<td>Email <i style="color: red;">(*)</i></td>
								<td><input type="text" name="email" class="jmw-text" required></td>
							</tr>
							<tr>
								<td>No Telp/HP <i style="color: red;">(*)</i></td>
								<td><input type="text" name="telpon" class="jmw-text" required></td>
							</tr>
							<tr>
								<td>Pesan <i style="color: red;">(*)</i></td>
								<td><textarea name="pesan" rows="5" class="jmw-textarea"></textarea></td>
							</tr>
							<tr>
								<td><img class='captcha' src='captcha.php' /></td>
								<td><input name='kode' onclick='this.select()' placeholder='Masukan kode...' type="text" class="jmw-text" required/></td>
							</tr>
							<tr>
								<td colspan="2">
									<center>
									<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit btn btn-primary">
									</center>
								</td>
							</tr>
							<tr>
								<td colspan="2"><i style="color: red;">(*)</i> = Wajib diisi</td>
							</tr>
						</table>
					</form>
			
					
		<?php } ?>				
	