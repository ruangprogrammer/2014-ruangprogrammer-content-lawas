			<div class="bx100p">
				<p class="title-grid_aris">Support</p>
	
			<div class="bxart">
<!--
<a href="ymsgr:sendIM?support@ruangprogrammer.com"> 
<img style="width: 139px; height: 107px;" src="http://2.bp.blogspot.com/_T7x8aK1eQVw/TE_3rju61SI/AAAAAAAABK8/TtM8YTwBomo/s1600/online.gif" border="0" />
</a> -->
					<a href="http://ruangprogrammer.com/bbm/" target="_blank"><img style="width: 139px; height: 107px;" src="images/bbm-logo.png" title="Send an invitation to BBM Add by PIN : 7E9B390D" border="0" alt=""></a> 
					<a href="http://ruangprogrammer.com/whatsapp/" target="_blank"><img style="width: 113px; height: 111px;" src="images/whatsapp.png" border="0" title="whatsapp : +6281999758789" alt=""></a> 
				</div>
			</div>
			<div class="bx100p" style="float: left;background: white;padding: 10px;
box-shadow: 0 3px 5px #666; margin-bottom: 20px; margin-top: 20px;">
				<p class="title-grid_aris"><a href="artikel-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-harga-murah-tapi-profesional.html">Artikel</a></p>
				<div class="brt">
					<ul>
						<?php	
							$sid=mysql_query("SELECT id,judul,gambar,judul_seo FROM berita WHERE status=1 ORDER BY tgl_posting LIMIT 4");
							while($tsid=mysql_fetch_array($sid)){
								$tgl = tgl_indo2($tsid['tgl_posting']);
								
								//$judul = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$tsid["judul"])));
								//$judul = substr($judul,0,strrpos(substr($judul,0,80)," "));
						?>
						<li>
								<a href="artikel-ruang-programmer-software-solution-<?php echo "$tsid[id]-$tsid[judul_seo]"; ?>.html" title="<?php echo "$tsid[judul]";?>">
								<div class="brtjdl"><?php echo "$tsid[judul]"; ?></div>
								
								<img title="<?php echo "$tsid[judul]";?>" src="images/artikel/s_<?php echo "$tsid[gambar]"; ?>" alt="<?php echo "$tsid[judul]";?>">
								</a>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>
			
			<div class="bx100p">
				<p class="title-grid_aris"><a href="testimonial-jasa-pembuatan-website-jogja.html" style="
    color: #fff;
">Testimonial</a></p>
				<div class="bxtesti">
							
					<ul id="listticker">
					<?php					
						$testi=mysql_query("SELECT nama, isi, tanggal FROM testi ORDER BY tanggal DESC Limit 7");
						while($ttesti=mysql_fetch_array($testi)){
							$tgl = tgl_indo2($ttesti['tanggal']);
							
							$isi = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$ttesti["isi"])));
							$isi = substr($isi,0,strrpos(substr($isi,0,115)," "));

					?>
						<li>
							<a href="testimonial-jasa-pembuatan-website-jogja.html">
							<div class="namatesti"><?php echo "$ttesti[nama]"; ?></div>
							<p>
							<?php echo "$isi"; ?></p></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>