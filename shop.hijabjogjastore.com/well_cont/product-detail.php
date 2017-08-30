<div id="sb-site">
    <div class="overlay-background"></div>
    <div class="container marketing">
        <?php
        $product_detail="select * from product where product_id='".$_GET['id']."'";
        $result_product_detail=mysql_query($product_detail);
        $data_product_detail=mysql_fetch_array($result_product_detail);
        $linkBeli   = 'addcart&idp='.$data_product_detail['product_id'];
        $disc        = ($data_product_detail['product_discount']/100)*$data_product_detail['product_price'];
        $hargadisc   = number_format(($data_product_detail['product_price']-$disc),0,",",".");
        $harga       = format_rupiah($data_product_detail['product_price']);
        ?>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <p class="lead"><strong><?php echo $data_product_detail['product_desc']; ?></strong></p>
                <h2 class="product-name"><?php echo $data_product_detail['product_name']; ?></h2>
                <p class="text-muted">Kode: <?php echo $data_product_detail['product_code']; ?></p>
                <?php
                $sql_brand="select * from brand where brand_id='".$data_product_detail['brand_id']."'";
                $result_brand=mysql_query($sql_brand);
                $data_brand=mysql_fetch_array($result_brand);
                ?>
                <p class="brand"><a href="category-brand-<?php echo $data_brand[brand_id]."-".$data_brand[brand_seo].".html";?>"><?php echo $data_brand['brand_name']; ?></a></p>
            </div>
        </div>

      
     <!--   <form method="POST" action="cart.html"> -->
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="thumbnail box-shadow" style="padding: 10px;">
                    <div class="container-badge">
                        <?php
                        if($data_product_detail['product_discount'] == 0){
                        }else{
                        ?>
                        <div class="badge-tag">
                            <?php echo $data_product_detail['product_discount']; ?>%
                        </div>
                        <?php
                        }
                        ?>
                        <div class="badge-tag orange">
                            Baru!
                        </div>
                        <?php
                        if($data_product_detail['product_pre_order']=='Y'){
                        ?>
                        <div class="badge-tag cyan">
                            Pre Order
                        </div>
                        <?php
                        }else{

                        }
                        ?>
                    </div>
                    <img class="featurette-image img-responsive" width="100%" src="assets/images/product/<?php echo $data_product_detail['product_images']; ?>" alt="Spring Floral Maxi">
                    <p class="product-price lead featurette-divider">
                        Harga Khusus PO
                        <?php
                        if($data_product_detail['product_discount'] == '0'){
                        ?>
                         <br>Hanya Rp. <?php echo $harga; ?>
                        <?php
                        }else{
                        ?>
                        <br>Hanya Rp. <?php echo $harga; ?>
                        <br><strike class="text-muted small">Rp. <?php echo $hargadisc; ?></strike>
                        <?php
                        }
                        ?>
                    </p>
                    <p class="lead"></p>
                    <ul class="list-unstyled">
                        <li><strong>Warna:</strong> <?php echo $data_product_detail['product_color']; ?> </li>
                        <li>
                            <strong>Bahan:</strong> <?php echo $data_product_detail['product_bahan']; ?> </li>
                    </ul>
                    <ul class="list-unstyled">
                    </ul>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <span class="glyphicon glyphicon-ok"></span> Produk Harga Spesial, Siap Kirim 1-3 minggu
                            <br/>
                            <span class="glyphicon glyphicon-thumbs-up"></span> Tidak Pas? Bisa ditukar.
                        </div>
                    </div>
                    <label>Jumlah</label>
                    <select class="pecart-add-quantity form-control input-block-level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>
                    <br/>
                 
                <!--    <input type="submit" value="Saya Ingin Pesan" class="btn btn-warning btn-lg btn-block"> -->
                <a href="<?php echo $linkBeli; ?>">  
                  <button type="submit" class="btn btn-warning btn-lg btn-block" value="Saya Ingin Pesan">Saya Ingin Pesan <span class="glyphicon glyphicon-chevron-right"></span></button> 
                </a>
                    <div class="featurette-divider">
                        <label>Warna Lain:</label>
                        <ul class="list-unstyled list-inline">
                            <?php
                            $sql_subimages="select * from subimages where product_id='".$data_product_detail['product_id']."'";
                            $result_subimages=mysql_query($sql_subimages);
                            while($data_subimages=mysql_fetch_array($result_subimages)){
                            //for($i=0;$i<3;$i++){
                            ?>
                            <li>
                                <a href="#">
                                    <img class="thumbnail" src="assets/images/<?php echo $data_subimages['gambar']; ?>" width="84" border="0">
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       <!-- </form> -->
        <!-- Other Photos -->
        <hr class="featurette-divider" />

        <div class="row featurette">
           <?php
            $sql_subimages="select * from subimages where product_id='".$data_product_detail['product_id']."'";
            $result_subimages=mysql_query($sql_subimages);
            while($data_subimages=mysql_fetch_array($result_subimages)){
           ?>
            <div class="col-md-6">
                <div class="thumbnail" style="border: none;">
                    <img class="featurette-image img-responsive" src="assets/images/subimages/<?php echo $data_subimages['gambar']; ?>" alt="Spring Floral Maxi">
                </div>
            </div>
            <?php
            }
            ?>
        </div>


        <div class="row featurette">
            <div class="col-md-12">
                <h1 class="product-name text-center"><span style="font-size:0.6em;font-style:italic;"><?php echo $data_product_detail['product_name']; ?></span></h1>
                <p class="text-muted text-center small">Kode: <?php echo $data_product_detail['product_code']; ?>
                    <br><?php echo $data_brand['brand_name']; ?></p>
                <p class="brand text-center"><a href="#">Koleksi <?php echo $data_brand['brand_name'] ?> lainnya &raquo;</a></p>
                <p class="text-center lead"><b>Bisa juga pesan lewat:</b></p>
                <p class="small text-center">INSTAGRAM: <a href="https:/instagram/hijabjogjastore">hijabjogjastore</a></p>
                <p class="small text-center">Senin - Jumat: 8 pagi - 8 malam
                <br>Sabtu & Minggu: 8 pagi - 4 sore</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 marketing">

                <p class="lead text-center"><b>Busana Muslim &amp; Hijab</b></p>
                <ul class="nav nav-pills nav-justified">
                <?php
                $sql_category="SELECT * FROM category  ORDER BY category_id DESC LIMIT 8";
                $result_category=mysql_query($sql_category);
                while($data_category=mysql_fetch_array($result_category)){
                ?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href=""><?php echo $data_category['category_name']; ?></a></li>
                <?php
                }
                ?>
                </ul>
            </div>
        </div>
        <hr class="featurette-divider" />

        <div class="row">
            <div class="col-lg-12">
                <h3 class="featurette-heading" style="font-size:18px;text-align:center;">Baru Saja Dipesan Member Lain</h3>
                <h4 class="text-center"><mark><small>Stok Tinggal Sedikit Lho!</small></mark></h4>
            </div>

            <?php
            $sql_product="select * from product limit 12";
            $result_product=mysql_query($sql_product);
            while($data_product=mysql_fetch_array($result_product)){
            $disc        = ($data_product['product_discount']/100)*$data_product['product_price'];
            $hargadisc   = number_format(($data_product['product_price']-$disc),0,",",".");
            $harga       = format_rupiah($data_product['product_price']);
            //for($i=0;$i<12;$i++){
            ?>
            <div class="col-xs-4 col-sm-4 col-md-2 col-recently-purchased">
                <div class="thumbnail" style="border: none; min-height: 268px; margin-bottom:0px; padding:0px;">
                    <a href="details-product-<?php echo $data_product[product_id]."-".$data_product[product_seo].".html";?>" onClick="#">
                        <img width="275px" src="assets/images/product/<?php echo $data_product['product_images']; ?>" border="0" class="img-responsive" />
                    </a>
                    <div class="caption">
                        <a href="#" onClick="#">
                            <h4 class="product-name text-center small" title="Leona Turban"><?php echo $data_product['product_name']; ?></h4>
                            <?php
                            if($data_product['product_discount'] == '0'){
                            ?>
                            <h4 class="price text-center">Rp<?php echo $harga; ?><br><strike class="text-muted" style="color: rgb(255, 255, 255);"><small style="color: rgb(255, 255, 255);">Rp50,000</small></strike></h4>
                            <?php
                            }else{
                            ?>
                            <h4 class="price text-center">Rp<?php echo $harga; ?><br><strike class="text-muted"><small>Rp<?php echo $hargadisc; ?></small></strike></h4> 
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="product.html">Lihat Semua Product &raquo;</a>
            </div>
        </div>
    </div>
    <div class="container pre-footer text-center">
        <p class="lead text-center"><b>Sudah Pesan?</b></p>
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a href="konfirmasi.html" role="menuitem">Konfirmasi
                        Pembayaran &raquo;</a></li>
            <li role="presentation"><a href="status_pemesanan.html" role="menuitem">Lacak
                        Pesanan &raquo;</a></li>
        </ul>
    </div>
</div>