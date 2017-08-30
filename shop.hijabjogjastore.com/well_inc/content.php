<?php
if($_GET['mod']=='home'){
	include("well_cont/product.php");
}elseif ($_GET['mod']=='product') {
	include("well_cont/product.php");
}elseif ($_GET['mod']=='product-detail') {
	include("well_cont/product-detail.php");
}elseif ($_GET['mod']=='cart') {
	include("well_cont/cart.php");
}elseif ($_GET['mod']=='login') {
	include("well_cont/login.php");
}elseif ($_GET['mod']=='checkout-address') {
	include("well_cont/checkout-address.php");
}elseif ($_GET['mod']=='checkout-payment') {
	include("well_cont/checkout-payment.php");
}elseif ($_GET['mod']=='checkout-tanks') {
	include("well_cont/checkout-tanks.php");
}
//Category brand
elseif ($_GET['mod']=='category-brand') {
	include("well_cont/category-brand.php");
}
//di bawah HOME
elseif ($_GET['mod']=='product-terlaris') {
	include("well_cont/product-terlaris.php");
}
elseif ($_GET['mod']=='product-promo') {
	include("well_cont/product-promo.php");
}
elseif ($_GET['mod']=='product-diskon') {
	include("well_cont/product-diskon.php");
}
elseif ($_GET['mod']=='product-sold-out') {
	include("well_cont/product-sold-out.php");
}
elseif ($_GET['mod']=='product-ready-stock') {
	include("well_cont/product-ready-stock.php");
}
elseif ($_GET['mod']=='product-all') {
	include("well_cont/product-all.php");
}
// statistik page start
elseif ($_GET['mod']=='cara-pemesanan') {
	include("well_cont/page/cara-pemesanan.php");
}
elseif ($_GET['mod']=='persyaratan-dan-ketentuan') {
	include("well_cont/page/persyaratan-dan-ketentuan.php");
}
elseif ($_GET['mod']=='kebijakan-privasi') {
	include("well_cont/page/kebijakan-privasi.php");
}
elseif ($_GET['mod']=='tentang-kami') {
	include("well_cont/page/tentang-kami.php");
}
elseif ($_GET['mod']=='contact-kami') {
	include("well_cont/page/contact-kami.php");
}
//statistik end
//aksi cart
elseif ($_GET['mod']=='keranjangbelanja') {
	include("well_cont/proses/keranjangbelanja.php");
}
//asi pembayaran 
elseif ($_GET['mod']=='konfirmasi') {
	include("well_cont/konfirmasi.php");
}
//check-status-pesanan
elseif ($_GET['mod']=='lacak-pesanan') {
	include("well_cont/form-lacak-pesanan.php");
}

elseif ($_GET['mod']=='show-lacakpesanan') {
	include("well_cont/hasil-lacak-pesanan.php");
}
elseif ($_GET['mod']=='checkout-tanks') {
	include("well_cont/checkout-tanks.php");
}


elseif($_GET['mod']=='form_transaksi')
{

		$idkota = cleanInput($_POST['kota']);
		// fungsi untuk mendapatkan isi keranjang belanja
		function isi_keranjang()
		{
			$isikeranjang = array();
			$sid = session_id();
			$sql = mysql_query("SELECT * FROM orders_temp WHERE id_session='$sid'");
			while ($r=mysql_fetch_array($sql)) 
			{
				$isikeranjang[] = $r;
			}
			return $isikeranjang;
		}

		$tgl_skrg = date("Ymd");
		$jam_skrg = date("H:i:s");
		$nama=htmlentities($_POST['nama']);
		$alamat=htmlentities($_POST['alamat']);
		$telepon=htmlentities($_POST['telpon']);
		$email=htmlentities($_POST['email']);
		// simpan data pemesanan 
		mysql_query("INSERT INTO orders(nama_kustomer, alamat, id_kota,telpon, email, tgl_order, jam_order) 
					 VALUES('$nama','$alamat','$idkota', '$telpon','$email','$tgl_skrg','$jam_skrg')");
		  
		// mendapatkan nomor orders
		$id_orders=mysql_insert_id();

		// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
		$isikeranjang = isi_keranjang();
		$jml          = count($isikeranjang);

		// simpan data detail pemesanan  
		for ($i = 0; $i < $jml; $i++)
		{
		  mysql_query("INSERT INTO orders_detail(id_orders, product_id, id_atribut, jumlah) 
		  VALUES('$id_orders',{$isikeranjang[$i]['product_id']},{$isikeranjang[$i]['id_atribut']}, {$isikeranjang[$i]['jumlah']})");
		}
		  
		// setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara (orders_temp)
		for ($i = 0; $i < $jml; $i++) {
		  mysql_query("DELETE FROM orders_temp WHERE id_orders_temp = {$isikeranjang[$i]['id_orders_temp']}");
		}
		//get nama kota
		$kota = mysql_fetch_array(mysql_query("SELECT nama_kota FROM kota WHERE id_kota='$idkota'"));
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format"; 
		}
		?>
      <?php 
		$daftarproduk=mysql_query("SELECT * FROM orders_detail,product
                                 WHERE orders_detail.product_id=product.product_id 
                                 AND id_orders='$id_orders'");
		  
		$pesan="Terimakasih telah melakukan pemesanan online di toko kami<br /><br />  
				Nama: $_POST[nama] <br />
				Alamat: $_POST[alamat] <br/>
				Telpon: $_POST[telpon] <br /><hr />
				
				Nomor Order: $id_orders <br />
				Data order Anda adalah sebagai berikut: <br />
				
				<table class='prodCart' width='100%' border='0' >
				<tr align=left height=23>
					<th>No.</th>
					<th>Nama Produk</th>
					<th>Qty</th>
					<th>Harga</th>
			                <th align=center>Sub Total</th>
				</tr>";
		$no=1;
		while ($d=mysql_fetch_array($daftarproduk))
		{
		   $subtotal    = $d['product_price'] * $d['jumlah'];
		   $total       = $total + $subtotal;
		 
		   $subtotal_rp = format_rupiah($subtotal);    
		   $total_rp    = format_rupiah($total);    
		   $harga       = format_rupiah($d['product_price']);
		    
			//get ongkos kirim
			$ongkir = mysql_query("SELECT * FROM orders,kota WHERE orders.id_orders='$d[id_orders]' AND kota.id_kota=orders.id_kota");
			$o = mysql_fetch_array($ongkir);
			
			$pesan.="<tr>
			<td class='center'>$no.</td>
			<td>$d[product_name] $atribut</td>
			<td class='center'>$d[jumlah]</td>
			<td>Rp. $harga,-</td><td align='right'>Rp. $subtotal_rp,-</td></tr>";
		   //$pesan.="$d[jumlah] $d[nama_produk] -> Rp. $harga -> Subtotal: Rp. $subtotal_rp <br />";
		   $no++;
		}
		
		$grandtotal    = $total + $o['ongkos_kirim']; 
		$grandtotal_rp  = format_rupiah($grandtotal);  
		$ongkos_rp = format_rupiah($o['ongkos_kirim']);
		$pesan.="<tr>
				<td colspan=5 align=right>Total : Rp. </td>
				<td align=right><b>$total_rp</b></td></tr> 
				<tr>
				<td colspan='5' align='right'>Ongkos kirim : Rp. </td>
				<td align=right><b>$ongkos_rp</b></td>
				</tr>  
			  <tr>
				<td colspan=5 align=right>Grand Total : Rp. </td><td align=right><b>$grandtotal_rp</b></td></tr>
			  </table><br /><hr />";
		$pesan.= "<p>Email ini dikirim  sebagai tanda transaksi yang telah dilakukan melalui hijabjogjastore.com 
		dengan menggunakan email <b>$_POST[email]</b>, jika anda merasa tidak pernah melakukan transaksi harap abaikan email ini. </p>";

		$subjek="Pemesanan Online Hijab Jogja Store (hijabjogjastore.com)";
		// Kirim email dalam format HTML
		$dari = "From: hijabjogjastore@gmail.com \n";
		$dari .= "Content-type: text/html \r\n";

		// Kirim email ke customer
		mail($_POST['email'],$subjek,$pesan,$dari);
		// Kirim email ke pengelola toko online
		mail("hijabjogjastore@gmail.com",$subjek,$pesan,$dari);

		?>
<div id="sb-site">
    <div class="overlay-background"></div>
    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-12">
                <h1>Terima Kasih!</h1>
                <p>Nomor Pesanan: <strong><?php echo $id_orders ?></strong></p>
                <p>Silakan lakukan pembayaran dengan mentransfer (pemindahan dana) sejumlah
                    <strong>Rp. <?php echo $subtotal_rp; ?></strong> ke rekening kami sebagai berikut:</p>

                <p class="text-center">
                    <p class="text-center">Bank BCA</p>
                    <p class="text-center">
                        <img class="text-center" src="assets/images/icon-bca.jpg" alt="Bank BCA" />
                    </p>
                    <br>
                    <p class="text-center">Nomor Rekening: </p>
                    <h3 class="text-center">123400191991</h3>
                    <br>
                    <p class="text-center">Atas Nama</p>
                    <h3 class="text-center">Developer cde</h3>
                </p>
                <br/>
                <br/>
                <br/>
                <br/>
                <a href="#" class="btn btn-warning">
                &lt;&lt; Pilih Pembayaran Lain</a>
            </div>
        </div>
    </div>
</div>
		<?php
//	}
}
?>