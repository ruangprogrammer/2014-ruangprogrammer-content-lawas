<?php
if($_GET['content']=="profil"){
?>
	<div class="isi">
	<?php	
		$profil=mysql_query("SELECT nama_halaman,isi FROM static_content WHERE id='2'");
		$tprofil=mysql_fetch_array($profil);
	?>
	<div class="jdul-hlmn"><?php echo "$tprofil[nama_halaman]"; ?></div>
	<br />
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	<a class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
	<!-- AddThis Button END --><br />
	<?php echo "$tprofil[isi]"; ?>
	
	</div>
<?php
}else if($_GET['content']=="artikel"){
?>
	<div class="isi">
	<?php
		$berita=mysql_query("SELECT * FROM berita order by tgl_posting");
		while($tberita=mysql_fetch_array($berita)){
		
		$tgl = tgl_indo2($tberita['tgl_posting']);
		
		$isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tberita["isi"])));
		$isi = substr($isi,0,strrpos(substr($isi,0,400)," "));	
	?>
		<div class="box-berita">
			<a href="artikel-ruang-programmer-software-solution-<?php echo "$tberita[id]-$tberita[judul_seo]"; ?>.html"><img src="images/artikel/<?php echo "$tberita[gambar]"; ?>" class="img-berita" alt="<?php echo "$tberita[judul]"; ?>"></a>
			<div class="judul-berita"><a href="artikel-ruang-programmer-software-solution-<?php echo "$tberita[id]-$tberita[judul_seo]"; ?>.html"><?php echo "$tberita[judul]"; ?></a></div>
			<div class="tanggal-berita"><?php echo "$tgl"; ?> WIB</div>
			<div class="isi-berita"><?php echo "$isi"; ?></div>
			
		</div>
		<?php
		}
		?>
	</div>
<?php
}else if($_GET['content']=="portofolio"){
?>
	<div class="isi">
		<?php
			
			$pket=mysql_query("SELECT * FROM porto ORDER BY id DESC");
			while($tpket=mysql_fetch_array($pket)){
			
			$a_isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tpket['isi'])));	$a_isi = substr($a_isi,0,strrpos(substr($a_isi,0,200)," "));?>

		
			
			<div class="bxyatno">

			 <a href="http://ruangprogrammer.com/demo/demoweb.php?link=<?php echo $tpket['link']; ?>" target="_blank"><img src="images/porto/<?php echo "$tpket[gambar]"; ?>" class="img-yatno" alt="<?php echo "$tpket[keterangan]" ; ?>" title="<?php echo "$tpket[keterangan]";?>"</a>
			<div class="box-berita" style="border-bottom: none;">
			
			<div class="judul-berita"><a href="artikel-jogja-budy-web-<?php //echo "$tpket[id]-$tpket[judul_seo]"; ?>.html"><?php //echo "$tpket[judul]"; ?></a></div>
			<div class="isi-berita"style="color: #777; text-align:center;"><a href="http://ruangprogrammer.com/demo/demoweb.php?link=<?php echo $tpket['link']; ?>" target="_blank"><?php echo "$tpket[keterangan]"; ?></div>
			
		</div>	
			</div>
			<?php
			}
			?>
	</div>	
<?php
}else if($_GET['content']=="detail-artikel"){
?>
	<div class="isi">
	<?php	
		$berita=mysql_query("SELECT * FROM berita where id='$_GET[id]' ");
		$tberita=mysql_fetch_array($berita);
		
		$tgl = tgl_indo2($tberita['tgl_posting']);
	?>
		<div class="box-berita">
			<div class="judul-berita" style="font-size: 120%; font-weight: 400;"><?php echo "$tberita[judul]"; ?></div>
			<div class="tanggal-berita">Artikel ini diterbitkan pada <?php echo "$tgl"; ?></div>
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
			<!-- AddThis Button END --><br />
			<div class="images-box"><img src="images/artikel/<?php echo "$tberita[gambar]"; ?>" alt="<?php echo "$tberita[judul]"; ?>"><span class="sumber-box">Image Source : <?php echo "$tberita[sumber_gambar]"; ?></span></div>
			<div class="isi-berita" style="float: left;">
			<?php echo "$tberita[isi]"; ?>
			</div>
			
		</div>
	</div>
<?php
}else if($_GET['content']=="paketweb"){
	include "inc/paket_web1.php";
}else if($_GET['content']=="paketweb1"){
	include "inc/paket_web1.php";
}else if($_GET['content']=="paketweb2"){
	include "inc/paket_web2.php";
}else if($_GET['content']=="paketweb3"){
	include "inc/paket_web3.php";
}else if($_GET['content']=="paketweb4"){
	include "inc/paket_web4.php";
}else if($_GET['content']=="paketweb5"){
	include "inc/paket_web5.php";

}else if($_GET['content']=="testi"){
?>
	<div class="isi">
	<?php	
		$testi=mysql_query("SELECT nama, isi, tanggal FROM testi ORDER BY tanggal DESC");
		while($ttesti=mysql_fetch_array($testi)){
	?>
		<div class="box-berita">
			<div class="judul-berita"><?php echo "$ttesti[nama]"; ?></div>
			<div class="isi-berita"><?php echo "$ttesti[isi]"; ?></div>
		</div>
		<?php
		}
		?>
	</div>
<?php
}else if($_GET['content']=="order_online"){?>
	<div class="isi">
	<?php	
		$profil=mysql_query("SELECT nama_halaman, isi FROM static_content WHERE id='5'");
		$tprofil=mysql_fetch_array($profil);
		
		echo "$tprofil[isi]";
	?>
	</div>
<?php
	include "inc/order_online.php";
}else if($_GET['content']=="cara_order"){
?>
	<div class="isi">
	<?php	
		$profil=mysql_query("SELECT nama_halaman, isi FROM static_content WHERE id='1'");
		$tprofil=mysql_fetch_array($profil);
	?>
	
	<div class="jdul-hlmn"><?php echo "$tprofil[nama_halaman]"; ?></div>
	<br />
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	<a class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
	<!-- AddThis Button END --><br />
	<?php echo "$tprofil[isi]"; ?>
	</div>
<?php
}else if($_GET['content']=="kontak"){
	echo "<div class='isi'>";

	$profil=mysql_query("SELECT * FROM static_content WHERE id='3'");
	$tprofil=mysql_fetch_array($profil);
		
	echo "$tprofil[isi]";

	include "inc/kontak.php";
	echo "</div>";
}else if($_GET['content']=="cek_domain"){
	echo "Silahkan masukkan nama domain yang ingin Anda cari";
	
	echo '<center><div style="width: 100%; float: left; margin-bottom: 20px; margin-top: 20px;"><form method="post" id="domain_home2" class="domain_search" action="cek-domain.html">
				<input name="domain" id="domain_home_text2" placeholder="cth: namadomain.com" type="text">
				<input value="Cek!" id="domain_home_submit2" type="submit">
			</form>
			</div></center>';
			
			
	$nama_domain = "$_POST[domain]";
	$arrHost = @gethostbynamel("$nama_domain");
	if(empty($arrHost)){
	echo "Selamat Domain" ;echo "  $nama_domain "; echo "Tersedia" ; echo "  Silahkan order";
	}else{
	echo "Maaf </br>Domain <b>";echo "  $nama_domain ";echo "</b> tidak tersedia";  echo "  silahkan cari alternatif nama yang lain";
	}
}else if($_GET['content']=="karir"){
?>
	<div class="isi">
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_3"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
		<!-- AddThis Button END --><br />
	<?php
	$karir=mysql_query("SELECT nama_halaman, isi FROM static_content WHERE id='6'");
	$tkarir=mysql_fetch_array($karir);
		
	echo "$tkarir[isi]";
	?>
	</div>
<?php
}else if($_GET['content']=="faq"){
?>
	<div class="isi">
	<?php
	$faq=mysql_query("SELECT nama_halaman, isi FROM static_content WHERE id='7'");
	$tfaq=mysql_fetch_array($faq);
		
	?>
	
	<div class="jdul-hlmn"><?php echo "$tfaq[nama_halaman]"; ?></div>
	<br />
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	<a class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
	<!-- AddThis Button END --><br />
	<?php echo "$tfaq[isi]"; ?><br>

	</div>
<?php
}else{
	echo "<h1>404 Page Not Found</h1><br>
		<h4>The page you requested was not found.</h4>";
}
?>