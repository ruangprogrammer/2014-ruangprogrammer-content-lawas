<?php
//start session
ob_start();
//session_start();
error_reporting(0);
//require system files
include "lib/php/koneksi.php";
include "lib/php/class_paging.php";
include "lib/php/fungsi_indotgl.php";
include "lib/php/fungsi_rupiah.php";
?>
<!DOCTYPE html lang="id">

<head>
	<title>RUANG PROGRAMMER</title>	
	<link rel="icon" type="image/x-icon" href="favicon_jasa_pembuatan_website_jogja.png" />
	<meta name="description" content="Ruang Programmer Software Solution Tempatnya Pembuatan Website di Jogja Dengan Harga MURAH">
	<meta name="keywords" content="ruang programmer">
    <meta name="google-site-verification" content="cMGovKWLpWSJtV3WJ7iF3j481o8Sm9f2vuhPgwC7DeU" />
	<meta http-equiv="Copyright" content="ruangprogramer.com">
	<meta name="author" content="Tim RuangProgrammer" "http://ruangprogrammer.com">
	<meta http-equiv="imagetoolbar" content="no">
	<meta name="language" content="Indonesia">
	<meta name="revisit-after" content="7">
	<meta name="webcrawlers" content="all">
	<meta name="rating" content="general">
	<meta name="spiders" content="all">

	<!--<meta property="fb:admins" content="100000874253322"/>
	<meta property="fb:app_id" content="891372647565029" />-->
	
	<meta content="m9+1iqYS/kBLQNPjYCNfq4nhMd2ibDVE6k12lD6AAkQ=" name="verify-v1" />
	<meta name="y_key" content="682ec779e9b30724" />
	<meta content="Tempatnya Pembuatan Website di Jogja Dengan Harga MURAH, Profesional, jasa web desain murah, jasa pembuatan web murah" name="keyphrases" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="ruangprogrammer.com" name="COPYRIGHT" />
	<meta content="index,follow" name="robots" />
	<meta name="robots" content="index, follow" />
	<meta content="index,follow" name="googlebot" />
	<meta content="general" name="rating" />
	<meta content="2 days" name="revisit-after" />
	<meta content="Global" name="Distribution" />
	<meta content="yes" name="allow-search" />
	<meta content="ID" name="geo.country"/>
	<meta content="Indonesia" name="geo.placename"/>
	
	<!-- styles -->
	<link rel="stylesheet" href="lib/menu/menu.css">
	<!--[if lte IE 8]> <link rel="stylesheet" href="stylesheets/ie8.css"> <![endif]-->
	<!-- the all powerful jQuery -->
	<script src="lib/menu/jquery.min.js"></script>  
	<link href="lib/css/style.css" media="screen" rel="stylesheet" type="text/css">	
	<!--slide-->
    <link href="lib/slide/bootstrap.min.css" rel="stylesheet">
	<!--slide-->
<style type="text/css">  
 .antiblock  
 {  
 -webkit-user-select: none;  
 -khtml-user-select: none;  
 -moz-user-select: none;  
 -o-user-select: none;  
 user-select: none;  
 }  
 </style>
</head>

<body ondragstart="return false;" onselectstart="return false;" class="antiblock">
<p style="display: none">Tempat Pembuatan Website Profesional Dengan Harga Murah , jasa bikin WEBSITE MURAH, UNIK, profesional di jogja, website profesional custom khas jogja murah dan langsung ONLINE, jasa pembuatan website murah, jasa pembuatan website profesional, jasa desain website dan Toko Online murah, jasa pembuatan website perusahaan, web development jogja, jasa pembuatan website dinamis,website jogja, toko online MURAH</p>
	<!-- -->
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '36bae815-555e-4be4-aa3f-a2a06c457351', f: true }); done = true; } }; })();</script>


	<div class="p100 bgaris">
	<div id="myAris" class="carousel slide">
			  <div class="carousel-aris">
		<?php include "inc/menu.php"; ?>
	</div>
</div>
</div>	
	<div class="p100 bgblack">
		<div id="header">
			<div id="myCarousel" class="carousel slide">
			  <div class="carousel-inner">
					<?php
					$promo=mysql_query("SELECT id,link, gambar FROM slide ORDER BY id DESC");
					while($tpromo=mysql_fetch_array($promo)){
						if($tpromo["id"]==1){
							echo '<div class="item active"><a href=""><img src="images/slider/'.$tpromo["gambar"].'" alt="'.$tpromo["gambar"].'" style="min-width:100%;"></a></div>';
						}else{
							echo '<div class="item"><a href=""><img src="images/slider/'.$tpromo["gambar"].'" alt="'.$tpromo["gambar"].'" style="min-width:100%;"></a></div>';
						}
					}
					?>
				</div>
				<!-- Controls -->
				<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<!--<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<!--<span class="icon-next"></span>
				</a>-->
			</div>
		</div>
	</div>
	<div class="p100 bgsilver">
	<div id="myBudi" class="carousel slide">
			  <div class="carousel-budi">
	<div class="container content">
  <div class="content-inner">
   <div id="search-domain" class="sdhome">
				<div id="cekdomain">Kesempatan itu hanya sekali, KLAIM saat ini juga sebelum terlambat!</div>
				<form method="post" id="domain_home" class="domain_search" action="cek-domain.html">
					<input name="domain" id="domain_home_text" placeholder="cth: namadomain.com" type="text">
					<input value="Cek!" id="domain_home_submit" type="submit">
				</form>
				
			  <div class="clearfix"></div>
			</div>
			</div>
			</div>
			
    <!--#search-domain-->
    
    <div id="mari-berhosting">
      <h2>~ Selamat Datang Di ruangProgrammer.com ~</h2>
     <p style="
    font-weight: 400;
    font-family: 'Roboto', sans-serif;
    font-size: 17px;
    font-weight: 400;
    color: #FFF;
">Ruang Programmer Software Solution adalah perusahaan jasa pembuatan web yang ada di Jogja dengan mengedepankan pelayanan ke pada klien, kami menawarkan jasa pembuatan web dengan harga murah dan hasil yang berkualitas. ruang Programmmer Software Solution berpusat di Jogja,  walaupun demikian jangkauan layanan kami tidak hanya di Jogja dan sekitarnya, kami melayani jasa pengembangan web  untuk seluruh wilayah nusantara.</p>
    </div>
    <ul class="home-fitur img-rounded">
      <div class="clearfix"></div>
	 
    </ul>
  </div>
  <!--.content-inner--> 
</div>
</div>
	
	
	<!--<div class="p100 bgsilver mb20px">
		<div class="centerbox">
			<div id="search-domain" class="sdhome">
				<div id="cekdomain">Kesempatan itu hanya sekali, KLAIM saat ini juga sebelum terlambat!</div>
				<form method="post" id="domain_home" class="domain_search" action="cek-domain.html">
					<input name="domain" id="domain_home_text" placeholder="cth: namadomain.com" type="text">
					<input value="Cek!" id="domain_home_submit" type="submit">
				</form>
				
			  <div class="clearfix"></div>
			</div>
		</div>
	</div>-->
		
	<div class="p100 bgbudy">
	<div class="centerbox"style="margin-top: 0px;">
	<div class="paris bgbudy">
	<p class="title-grid_aris">Paket Website</p>
	
	<!--<p style="text-align: center;color: #fff;line-height: 20px;margin-bottom: 16px;">"Paket Website Berlaku hingga 30 April 2016"</p>-->
	
		


		
			<?php
			
			$pket=mysql_query("SELECT * FROM pket_web ORDER BY id ASC");
			while($tpket=mysql_fetch_array($pket)){
			?>
			<div class="bxp">
				<h1><?php echo "$tpket[nama_paket]";?></h1>
				<div class="bxphrga">
					<div class="bxphrga-mulai">Harga Mulai dari</div>
					<?php echo "$tpket[harga]";?>
				</div>
				<div class="bxp-bottom">
					<ul>
						<?php echo "$tpket[isi]";?>
					</ul>
					<div class="bxp-more"><a href="<?php echo "$tpket[link]";?>">INFO SELENGKAPNYA</a></div>
				</div>
			</div>
			<?php
			}
			?>
			</div>
			</div>
			<div class="p100 bgyatno">
			<div class="centerbox_aris">
			<div class="paris bgyatno">
				<p class="title-grid">Website Yang Ditawarkan</p>
					<p style="text-align: center;color: #112A3A;line-height: 20px;margin-bottom: 16px;">berikut adalah contoh website yang kami tawarkan</p>
				<div class="p100">
			
			<?php
			
			$pket=mysql_query("SELECT * FROM porto ORDER BY id DESC LIMIT 8");
			while($tpket=mysql_fetch_array($pket)){
			
			$a_isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tpket['isi'])));	$a_isi = substr($a_isi,0,strrpos(substr($a_isi,0,200)," "));?>

		
			
			<div class="bxbudi">

			 <a href="http://ruangprogrammer.com/demo/demoweb.php?link=<?php echo $tpket['link']; ?>" target="_blank"><img src="images/porto/<?php echo "$tpket[gambar]"; ?>" class="img-portofolio" alt="<?php echo "$tpket[keterangan]" ; ?>" title="<?php echo "$tpket[keterangan]";?>"</a>
			<div class="box-berita" style="border-bottom: none;">
			

			<div class="isi-berita"style="color: #777; text-align:center;"><a href="http://ruangprogrammer.com/demo/demoweb.php?link=<?php echo $tpket['link']; ?>" target="_blank"><?php echo "$tpket[keterangan]"; ?></div>
			
		</div>	
			</div>
			<?php
			}
			?>
		<div class="button orange demo" style="float: right; margin-right: 20px;    margin-bottom: 10px;background: #112A3A;"><a href="portofolio-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-harga-murah-tapi-profesional.html" style="color: #FBC300;">Selengkapnya</a></div>
		</div>
		</div>
		</div>
		
			<!--<h2 style="color: transparent;">coba</h2>-->
			<div class="p100 bgbudiyatno">
			<div class="centerbox">
			<div class="paris bgbudiyatno">
			<p class="title-grid_aris">Artikel Terbaru</p>
			<p style="text-align: center;color: #000;line-height: 20px;margin-bottom: 16px;">"ini adalah artikel yang diambil dari beberapa narasumber"</p>
			<div class="p100">
			
			<?php
			
			$pket=mysql_query("SELECT * FROM berita ORDER BY tgl_posting ASC LIMIT 6");
			while($tpket=mysql_fetch_array($pket)){
			
			$a_isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tpket['isi'])));	$a_isi = substr($a_isi,0,strrpos(substr($a_isi,0,200)," "));?>

		
			
			<div class="bxparis">

			<a href="artikel-ruang-programmer-software-solution-<?php echo "$tpket[id]-$tpket[judul_seo]"; ?>.html"><img src="images/artikel/<?php echo "$tpket[gambar]"; ?>" class="img-berita" alt="<?php echo "$tpket[judul]" ; ?>"></a>
			<div class="box-berita" style="border-bottom: none;">
			
			<div class="judul-berita"><a href="artikel-ruang-programmer-software-solution-<?php echo "$tpket[id]-$tpket[judul_seo]"; ?>.html" style="color : #FBC300";><?php echo "$tpket[judul]"; ?></a></div>
			<div class="isi-berita"style="color: #000;"><?php echo "$a_isi"; ?></div>
			<div class="button orange demo"><a href="artikel-ruang-programmer-software-solution-<?php echo "$tpket[id]-$tpket[judul_seo]"; ?>.html" style="color: #333;">Read More</a></div>
		</div>	
			</div>
			<?php
			}
			?>
		
	
	</div>
	</div>
	</div>
	
<div class="p100 budy">
<div id="footer">
<div class="paris budy">
			<div class="copy"> 
			</div>
			</div>
	</div>		
</div>
	<div class="p100 bgblack2 mt20px" style="padding-bottom: 0px;">
	
	
		<div id="footer">
		<div class="paris bgblack2 mt20px" style="padding-bottom: 0px;">
				<div class="col1" style="margin-right: 20px;">
					<?php
					$profil=mysql_query("SELECT * FROM static_content WHERE id='4'");
					$tprofil=mysql_fetch_array($profil);
					?>
					
					<h3 class="footertitle"><?php echo "$tprofil[nama_halaman]"; ?></h3>
					<p><?php echo "$tprofil[isi]"; ?></p>
					<br>
				
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6649.035051303133!2d110.40342446321554!3d-7.732410629723902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94a2181862cdf44f!2sRuang+Programmer!5e0!3m2!1sen!2s!4v1464594030249" width="340" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>

	
				<!-- 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.89701402939!2d110.39833691442524!3d-7.800726979594869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57673e00d7f9%3A0xc79cc7c6813d7005!2sjogjabudyweb.com!5e0!3m2!1sid!2sid!4v1460025891599" width="340" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
					 -->
					<br><br>
					
				<!--	<i><a href="kontak-jogja-budy-web-jasa-bikin-website-murah-di-jogja.html" style="
    color: #FFF;">Detail Lokasi Kami >> Klik Disini << </a></i> -->
	<br>
			<br>		
				</div>
				<div class="col1" style="margin-right: 20px;">
<?php
					$sql_contact="select * from static_content where id='8'";
					$result_contact=mysql_query($sql_contact);
					$data_contact=mysql_fetch_array($result_contact);
					?>
					<div class="kontak">
						<h3 class="footertitle">Marketing</h3>
						<ul>
							<li>								
								<a target="_blank" href="mailto:support@ruangprogrammer.com">
									<img src="images/system/email-jasa-pembuatan-website-di-jogja-jogja-budy-web.png" alt="Email: " class="gambarsos">
									<p><?php echo $data_contact['nama_halaman']; ?></p>
								</a>
							</li>
							<li>
								<img src="images/system/telpon-jasa-pembuatan-website-murah-di-jogja-jogja-budy-web.png" alt="Telpon : " class="gambarsos">
								<div class="phone"><?php echo $data_contact['isi'] ?><br>
								</div>								
							</li>
							<li>
								<img src="images/system/bbm.png" alt="Telpon : " class="gambarsos">
								<div class="phone"><?php echo $data_contact['gambar'] ?><br>
								</div>								
							</li>
							<li>
			<!-- 					<br>
								<a href="ymsgr:sendIM?jogjabudyweb" title="chat dengan Admin Jogja Budy Web"><img src="http://opi.yahoo.com/online?u=jogjabudyweb&amp;m=g&amp;t=2" border="0"></a>
								<a href="ymsgr:sendIM?jogjabudyweb" title="chat dengan Admin Jogja Budy Web"><img src="http://opi.yahoo.com/online?u=jogjabudyweb&amp;m=g&amp;t=2" border="0"></a> -->
							</li>

						</ul>
					</div>
					<div class="sosmed">
					<h3 class="footertitle">Sosial Media</h3>
						
						
					<ul class="tt-wrapper" style="margin-bottom: 10px;margin-top: 1px;">
						<?php
						$sosmed=mysql_query("SELECT class, link, nama FROM sosmed ORDER BY id ASC ");
						while($tsosmed=mysql_fetch_array($sosmed)){
						?>
							<li><a class="<?php echo "$tsosmed[class]"; ?>" href="<?php echo "$tsosmed[link]"; ?>"><span><?php echo "$tsosmed[nama]"; ?></span></a></li>						
						<?php
						}
						?>
						</ul>
						</div>

						 <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3463039,4,408,270,55,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3463039&101" alt="free counter with statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->

			<!--			
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
</script>
<a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
try {Histats.start(1,3412489,4,408,270,55,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3412489&101" alt="" border="0"></a></noscript>
-->
<!-- Histats.com  END  -->

					

				</div>


				<div class="col1">
					<h3 class="footertitle">Fanspage</h3>
					<div class="fb-page" data-href="https://www.facebook.com/ruangprogrammerdotcom/" data-tabs="timeline" data-width="348" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>

				</div>
		</div>
	</div>
	</div>
	<div class="p100 aris">
	<div id="footer">
	<div class="paris aris">
			<div class="copy"> 
			</div>
			</div>
			</div>
			</div>
			
	<div class="p100 bugang">
	
		<div id="footer">
		<div class="paris bugang">
		
			<div class="copy" style="text-align:left;"> 
			<div class="paris copy" style="text-align:left;"> 
<!-- Histats.com  START  (standard)-->



<!--<?php 
//menentukan tahun
$tahun = date("Y");
echo "2014-". $tahun;
?> -->
<p>ruangprogrammer © 2016 All Rights Reserved, Designed &amp; Developed by: <a href="http://www.ruangprogrammer.com" title="ruangprogrammer.com" target="_blank" style="color:#F37540;">ruangprogrammer.com</a></p>
<!--<?php //include('statistik.php'); ?>--> 
</div>
</div>



		
		
	</div>
	
	</div>
	</div>

	<!-- Bootstrap Core JavaScript -->
	<script src="lib/slide/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
	</script>


	 <!-- Mobile Menu Toggle -->
	<script>
		$=jQuery;
		$("#mobile-menu").click(function(){
			$("#mobile-submenu").toggle();
		});
	</script>
		
	<!-- Included JS Files (Compressed) -->
	<script src="lib/menu/visitor.min.js"></script>
</body>
</html>