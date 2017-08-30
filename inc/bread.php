	<div class="breadcrumb">
		<ul>
			<li style="margin-right: 4px;"><a href="jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Home</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
	<?php
	if($_GET['content']=='home'){
	}else if($_GET['content']=='profil'){
		echo '
			<li style="margin-left: 8px;"><a href="profil-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Profil</a></li>
			';
	}else if($_GET['content']=='kontak'){
		echo '
			<li style="margin-left: 8px;"><a href="kontak-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html">Kontak Kami</a></li>
			';
	}else if($_GET['content']=='cara_order'){
		echo '
			<li style="margin-left: 8px;"><a href="cara-order-pembuatan-website-di-ruang-programmer-software-solution.html">Cara Order</a></li>
			';
	}else if($_GET['content']=='order_online'){
		echo '
			<li style="margin-left: 8px;"><a href="order-jasa-pembuatan-website-online-di-jogja.html">Order Online</a></li>
			';
	}else if($_GET['content']=='cror'){
		echo '
			<li style="margin-left: 8px;"><a href="cara-order-pembuatan-website-di-ruang-programmer-software-solution.html">Cara Order</a></li>
			';
	}else if($_GET['content']=='paketweb'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Website</a></li>
			';
	}else if($_GET['content']=='artikel'){
		echo '
			<li style="margin-left: 8px;"><a href="artikel-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-harga-murah-tapi-profesional.html">Artikel</a></li>
			';
	}else if($_GET['content']=='portofolio'){
		echo '
			<li style="margin-left: 8px;"><a href="portofolio-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-harga-murah-tapi-profesional.html">Detail Portofolio</a></li>
			';		
	}else if($_GET['content']=='karir'){
		echo '
			<li style="margin-left: 8px;"><a href="karir-ruang-programmer-software-solution-jasa-bikin-toko-online-di-jogja.html">Karir</a></li>
			';
	}else if($_GET['content']=='faq'){
		echo '
			<li style="margin-left: 8px;"><a href="faq-ruang-programmer-software-solution-jasa-pembuatan-web-terpercaya-di-jogja.html">Tanya Jawab</a></li>
			';
	}else if($_GET['content']=='detail-artikel'){
	
		$bre2=mysql_query("SELECT judul FROM berita where id='$_GET[id]' ");
		$tbre2=mysql_fetch_array($bre2);
		
		echo '
			<li style="margin-left: 8px;"><a href="artikel-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-harga-murah-tapi-profesional.html">Artikel</a>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="">'.$tbre2['judul'].'</a></li>';
	}else if($_GET['content']=='paketweb'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			';
	}else if($_GET['content']=='paketweb1'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="paket-website-bisnis-murah-di-ruang-programmer-software-solution.html">Paket Website Bisnis dan Perusahaan</a></li>';
	}else if($_GET['content']=='paketweb2'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="paket-website-toko-online-murah-di-ruang-programmer-software-solution.html">Paket Website Toko Online</a></li>';
	}else if($_GET['content']=='paketweb3'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="paket-website-lembaga-atau-instansi-murah-di-ruang-programmer-software-solution.html">Paket Website Lembaga dan Instansi</a></li>';
	}else if($_GET['content']=='paketweb4'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="paket-website-unlimited-murah-di-ruang-programmer-software-solution.html">Paket Website Unlimited</a></li>';
	}else if($_GET['content']=='paketweb5'){
		echo '
			<li style="margin-left: 8px;"><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
			<li class="ph-icon"></li>
			<li class="ph-icon"></li>
			</li><li style="margin-left: 8px;"><a href="promo-buat-website-di-ruang-programmer-software-solution.html">Promo</a></li>';
	}else if($_GET['content']=='testi'){
		echo '
			<li style="margin-left: 8px;"><a href="testimonial-jasa-pembuatan-website-jogja.html">Testimonial</a></li>
			';
	}else if($_GET['content']=='testi'){
		echo '
			<li style="margin-left: 8px;"><a href="cek-domain.html">Cek Domain</a></li>
			';
	}
	?>
		</ul>
	</div>