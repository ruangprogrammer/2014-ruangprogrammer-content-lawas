<?php
include_once('../lib/php/koneksi.php');
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" type="image/x-icon" href="../favicon_jasa_pembuatan_website_jogja.png" />
<title> Demo Website Ruang Programmer Software Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type='text/javascript'>//<![CDATA[ 
   $(function() {
   	
 $('.web').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/2x2.gif");
    $("#device").attr('style',"margin: 0px auto;text-align: center;");
    $("#hw").attr('class',"web");
     $("#hw").attr('height',"100%");
      $("#hw").attr('width',"100%");
 });
 $('.Ipad-vertical').click(function(e){
     e.preventDefault();
   ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
     $("#device").attr('style',"margin: 1em auto;text-align: center;");
      $("#hw").attr('class',"ipad-frame-land");
    // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
     $("#hw").attr('height',"680");
      $("#hw").attr('width',"1024");
     
 });
$('.Ipad-hori').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"ipad-frame-ver");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"1024");
      $("#hw").attr('width',"768");
        
 });
 
 
 
 $('.Iphone-vertical').click(function(e){
     e.preventDefault();
   ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
     $("#device").attr('style',"margin: 1em auto;text-align: center;");
      $("#hw").attr('class',"smart-frame-var");
    // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
     $("#hw").attr('height',"320");
      $("#hw").attr('width',"480");
     
 });
$('.Iphone-hori').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"smart-frame-land");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"480");
      $("#hw").attr('width',"320");
      });
 
 $('.mobile').click(function(e){
     e.preventDefault();
   //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
      $("#device").attr('style',"margin: 1em auto;text-align: center;");
       //$("#hw").attr('style',"left:50px;top:135px");
       $("#hw").attr('class',"mobile-frame");
      // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
     $("#hw").attr('height',"500");
      $("#hw").attr('width',"240");
        
 });
 
 
});
  
</script>
</head>
<body>


  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '36bae815-555e-4be4-aa3f-a2a06c457351', f: true }); done = true; } }; })();</script>

<div id="wrap" style="margin-top: 0px; position: relative;">
<!-- Navbar -->
<div id="topBar">
	 <div class="wrap">
	<div class="logo"><a href="/"><img src="images/logo.png" alt="mobile website templates"></a></div>
	<div class="right">
		<div class="devices">
		<ul>
		<li><a href="#" class="web"><img src="images/monitor.png" alt=""></a></li>
		<li><a href="#" class="Ipad-hori"><img src="images/ipad-icon.png" alt="" /></a></li>
		<li><a href="#" class="Ipad-vertical"><img src="images/ipad-landscape.png" alt="" /></a></li>
					<li><a href="#" class="Iphone-vertical"><img src="images/iphone-icon.png" alt=""></a></li>
		<li><a href="#" class="Iphone-hori"><img src="images/iphone-landscape.png" alt=""></a></li>
		<li><a href="#" class="mobile"><img src="images/nokia-icon.png" alt=""></a></li>
					</ul>
	</div>
		<!--<div class="social">
			<ul>
			<li>Share on </li>
			<li><a href="mobile_demo.html"><img src="images/fb.png" alt=""></a></li>
			<li><a href="http://w3layouts.com"><img src="images/tw.png" /></a></li>
			<li><a href="mobile_demo.html"><img src="images/gp.png" alt=""></a></li>
			<li><a href="mobile_demo.html"><img src="images/pin.png" alt=""></a></li>
			</ul>
		</div>-->
		<div class="go-back">
		 	<a href="http://ruangprogrammer.com/whatsapp" target="_blank">Order Sekarang</a>
		</div>
		<!--<a id="close-button" title="Remove Frame" class="closeMe" href="https://p.w3layouts.com/demos/may-2016/10-05-2016/buying_and_selling/web" target="_blank"></a> -->
	</div>

	<div class="clear"></div>
		 </div>
</div>
</div>
  <?php
  $sql_demo="select link from porto where link='".$_GET['link']."'";
  $result_demo=mysql_query($sql_demo);
  $data_demo=mysql_fetch_array($result_demo);
  ?>
<div style="" id="device">  <!-- SQL select $_GET['lll'] -->
<iframe id="hw" class="web" src="<?php echo $data_demo['link']; ?>" name="livePreviewFrame" width="100%" height="100%" frameborder="0" noresize="noresize" style=" min-height: 100%;"> </iframe>
</div>
	<script>
  var adjustFrame = function() {
	var headerDimensions = $('#topBar').height();
	$('#livePreviewFrame').height($(window).height() - headerDimensions);
  }
  $(document).ready(function() {
	adjustFrame();
	$('.closeMe').mouseover(function() {
	  $('.closeMe').addClass('active');
	}).mouseout(function() {
	  $('.closeMe').removeClass('active');
	});
  });

  $(window).resize(function() {
	adjustFrame();
  }).load(function() {
	adjustFrame();
  });
</script>
<script type="text/javascript">
//		function to fix height of iframe!
    var calcHeight = function() {
	var headerDimensions = $('#headerlivedemo').height();
	var selector = '#iframelive';
	   if($('#wrap').hasClass('closed')) {
		   $(selector).height($(window).height());
	   } else {
		   $(selector).height($(window).height() - headerDimensions);
	   }
    }
    $(document).ready(function() {
    calcHeight();
    });
    $(window).resize(function() {
    calcHeight();
    }).load(function() {
    calcHeight();
    });
</script>
</body>
</html><script type="text/javascript">
var data = "url=/view_counter.php?action_type=10&template_type=1&pid=21419&uip=120.164.42.218&UA=Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36";             

             $.ajax({
		  url: "/stats.php",
		  data: data,
		  type: "POST",
		  success: function(data, textStatus, jqXHR){
			console.log('Success ' + data);
		  },
		  error: function (jqXHR, textStatus, errorThrown){
			console.log('Error ' + jqXHR);
		  }
		});
		</script>