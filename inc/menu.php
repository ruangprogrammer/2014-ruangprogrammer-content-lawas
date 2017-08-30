<div class="navbar-wrapper" id="domo-menu">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">Menu
        </button>
        <a class="brand hide-text" href="jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">jogjabudyweb.com</a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <div class="nav-collapse collapse">
          <ul class="nav pull-right" id="menu-utama">
		<li><a href="paket-website-bisnis-murah-di-ruang-programmer-software-solution.html">Paket Bisnis dan Perusahaan</a></li>

<li><a href="paket-website-toko-online-murah-di-ruang-programmer-software-solution.html">Paket Toko Online</a></li>
<li><a href="paket-website-lembaga-atau-instansi-murah-di-ruang-programmer-software-solution.html">Paket Instansi</a></li>
<li><a href="paket-website-unlimited-murah-di-ruang-programmer-software-solution.html">Paket Unlimited</a></li>
  
        
 	
        </ul>
            <ul class="nav pull-right" id="menu-atas">
			<li><a href="jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html"><img src="images/home.png" width="16" height="15" style="height: 23px;width: 24px;margin-top: -11px;margin-bottom: -2px;margin-right: 3px;">Home</a></li>
				    <li><a href="paket-website-ruang-programmer-software-solution-jasa-pembuatan-website-jogja-profesional-dan-harga-murah.html">Paket Web</a></li>
					<li><a href="profil-ruang-programmer-software-solution.html">Profil</a></li>
					<li><a href="promo-buat-website-di-ruang-programmer-software-solution.html">Promo</a></li>
					<!--<li><a href="karir-jogja-budy-web-jasa-bikin-toko-online-di-jogja.html">Karir</a></li>-->
					<li><a href="artikel-ruang-programmer-software-solution.html">Artikel</a></li>
					<li><a href="cara-order-jasa-pembuatan-website-di-ruang-programmer-software-solution.html">Cara Order</a></li>
                    <li><a href="faq-ruang-programmer-software-solution-jasa-pembuatan-web-terpercaya-di-jogja.html">Tanya Jawab</a></li>
					<li><a href="testimonial-jasa-pembuatan-website-jogja.html">Testimonial </a></li>
					<li><a href="kontak-ruang-programmer-software-solution-jasa-bikin-website-murah-di-jogja.html">Kontak</a></li>
					<!--<li class="login"><a href="" >Login</a></li>-->
            </ul><!--#menu-atas-->  
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->  
    </div> <!-- /.container -->
</div>

 	<script>
$('.show-order').click(function(e) {
	$('#myModalLabel').html($(this).attr('title'));
	$('.modal-body').html('Loading...');
    var url = $(this).attr('href');
	$('#myModal').modal();
	$('.modal-body').load(url);
	return false;
});
	$(window).scroll(function(){
		//console.log($(window).scrollTop());
		if($(window).scrollTop()<=115){
			$('#domo-menu').removeClass('navbar-fixed-top boxShadow');
		}else{
			if(!$('#domo-menu').hasClass('navbar-fixed-top')) {
				$('#domo-menu').hide('fast','',function(){
					$('#domo-menu').addClass('navbar-fixed-top boxShadow').fadeIn('fast');
				});
			}
		}
	});
	$(window).load(function() {		
		$('.list-fitur').masonry();
    setTimeout(function () {
      $('#sidebar').affix({
        offset: {
          //top: 135, bottom: function () { return $(".footer-wrapper").height()+176; }
		  top: 135, bottom: 560
        }
      })
    }, 100)

	});
	$('#testimonial').load('https://www.domosquare.com/?domojx=testimonial');
	$('#tab1').load('https://www.domosquare.com/?domojx=berita', function() {
				var maxHeight = Math.max.apply(null, $(".excerpt-body").map(function () { return $(this).height(); }).get());
		$(".excerpt-body").height(maxHeight);
			});
	$('#tab2').load('https://www.domosquare.com/?domojx=promo', function() {
				var maxHeight = Math.max.apply(null, $(".excerpt-body").map(function () { return $(this).height(); }).get());
		$(".excerpt-body").height(maxHeight);
			});

</script>
