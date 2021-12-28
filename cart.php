<?php
session_start();

include('registration/config/config.php');


?>
<!DOCTYPE html>
<html lang="zxx">
<!-- 
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<head>
	<title>Kokan Crunchy - Top quality Dry-Fruits Products| Home</title>
	<!--/tags -->
	
	<?php include('links.php'); ?>
	
</head>

<body>
	<?php include('header.php')?>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="#">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="#">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="#">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="#">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<?php
							$query = "SELECT image, name, 250KG, price_250KG, 500KG, price_500KG, 1KG, price_1KG  FROM kokancrunchy_cart order by id ASC  ";

							$fire = mysqli_query($con, $query);

							$num = mysqli_num_rows($fire);

							if($num > 0){
								while($product = mysqli_fetch_array($fire)){
						?>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo $product['image']; ?>" alt="">
									<!--div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div-->
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#" id="item"><?php echo $product['name']; ?></a>
									</h4>
									<select id="select_weight_kaju" name="select_weight_kaju">
										<option data-price="0" name="250GM" value="250GM"><?php echo $product['250KG']; ?></option>
										<option data-price="200" name="500GM" value="500GM"><?php echo $product['500KG']; ?></option>
										<option data-price="600" name="1KG" value="1KG" selected><?php echo $product['1KG']; ?></option>
									</select>
									
									<div class="info-product-price">
										<span class="item_price" itemprop="price" id="dynamic_price_kaju">₹800.00</span>
										
										<!--del>₹750.00</del-->
									</div>
                                   <div class="snipcart-details">
									   <input id="kaju" type="submit" name="submit" class="snipcart-add-item button" value="Add to Cart">
									</div>
                                    <script>
									const button = document.querySelector('#kaju')
									const select = document.querySelector('#select_weight_kaju');
									select.addEventListener('change', () => {
  									// Sets the default frame color when adding the item
  									button.setAttribute("data-item-custom1-value", select.value)
									});
                                    </script>
                                    
									
									<script>
										var basePriceKaju = 200.00;

										$("#select_weight_kaju").change(function() {
											newPrice = basePriceKaju;
											$("#select_weight_kaju option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_kaju").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<?php
								}
							}
						
						?>
						
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/badam.jpg" alt="">
									<!--div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div-->
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Badam</a>
									</h4>
									<select id="select_weight_badam">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="187" value="500GM">500 GM</option>
										<option data-price="562" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" itemprop="price" id="dynamic_price_badam">₹750.00</span>
										<!--del>$420.00</del-->
									</div>
                                    <div class="snipcart-details">
                                    	<input id="badam" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="2"
                                        data-item-price="188"
                                        data-item-url="/"
                                        data-item-image="images/badam.jpg"
                                        data-item-name="Badam"
                                        data-item-custom2-name="Weight"
                                        data-item-custom2-options="1KG[+562.00]|500GM[+187.00]|250GM">
                                    </div>
                                    <script>
									const button1 = document.querySelector('#badam')
									const select1 = document.querySelector('#select_weight_badam');
									select1.addEventListener('change', () => {
  									button1.setAttribute("data-item-custom2-value", select1.value)
									});
                                    </script>
									<script>
										var basePriceBadam = 188.00;

										$("#select_weight_badam").change(function() {
											newPrice = basePriceBadam;
											$("#select_weight_badam option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_badam").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/yellow-kishmish.jpg" alt="">
									<!--div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div-->
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Yellow Kishmish</a>
									</h4>
									<select id="select_weight_yelkish">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" itemprop="price" id="dynamic_price_yelkish">₹400.00</span>
										<!--del>$600.99</del-->
									</div>
                                    <div class="snipcart-details">
                                    	<input id="yelkish" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="3"
                                        data-item-price="100"
                                        data-item-url="/"
                                        data-item-image="images/yellow-kishmish.jpg"
                                        data-item-name="Yellow Kishmish"
                                        data-item-custom3-name="Weight"
                                        data-item-custom3-options="1KG[+300.00]|500GM[+100.00]|250GM">
                                    </div>
                                    <script>
									const button2 = document.querySelector('#yelkish')
									const select2 = document.querySelector('#select_weight_yelkish');
									select2.addEventListener('change', () => {
  									button2.setAttribute("data-item-custom3-value", select2.value)
									});
                                    </script>
									<script>
										var basePriceYKish = 100.00;

										$("#select_weight_yelkish").change(function() {
											newPrice = basePriceYKish;
											$("#select_weight_yelkish option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_yelkish").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/black-kishmish.jpg" alt="">
									<!--div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div-->
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Black Ksihmish</a>
									</h4>
									<select id="select_weight_blkish">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="112" value="500GM">500 GM</option>
										<option data-price="337" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" id="dynamic_price_blkish">₹450.00</span>
										<!--del>$110.00</del-->
									</div>
									<div class="snipcart-details">
                                    	<input id="blkish" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="4"
                                        data-item-price="113"
                                        data-item-url="/"
                                        data-item-image="images/black-kishmish.jpg"
                                        data-item-name="Black Ksihmish"
                                        data-item-custom4-name="Weight"
                                        data-item-custom4-options="1KG[+337.00]|500GM[+112.00]|250GM">
                                    </div>
                                    <script>
									const button3 = document.querySelector('#blkish');
									const select3 = document.querySelector('#select_weight_blkish');
									select3.addEventListener('change', () => {
  										button3.setAttribute("data-item-custom4-value", select3.value);
									});
                                    </script>
									<script>
										var basePriceBKish = 113.00;

										$("#select_weight_blkish").change(function() {
											newPrice = basePriceBKish;
											$("#select_weight_blkish option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_blkish").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Premium Dry-Fruits </h3>
							<h6>@ Reasonable Price</h6>
							<p><i class="fa fa-phone"> &nbsp;</i>9821236048 / 9821235972</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<!--h3 class="heading-tittle">Oils</h3-->
						
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/salted-pista.jpg" alt="">
									<!--div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div-->
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Salted Pista</a>
									</h4>
									<select id="select_weight_salpis">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="287" value="500GM">500 GM</option>
										<option data-price="862" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" id="dynamic_price_salpis">₹1150.00</span>
										<!--del>$150.00</del-->
									</div>
									<div class="snipcart-details">
                                    	<input id="salpis" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="5"
                                        data-item-price="288"
                                        data-item-url="/"
                                        data-item-image="images/salted-pista.jpg"
                                        data-item-name="Salted Pista"
                                        data-item-custom5-name="Weight"
                                        data-item-custom5-options="1KG[+862.00]|500GM[+287.00]|250GM">
                                    </div>
                                    <script>
									const button4 = document.querySelector('#salpis')
									const select4 = document.querySelector('#select_weight_salpis');
									select4.addEventListener('change', () => {
  									button4.setAttribute("data-item-custom5-value", select4.value)
									});
                                    </script>
									<script>
										var basePriceSalPis = 288.00;

										$("#select_weight_salpis").change(function() {
											newPrice = basePriceSalPis;
											$("#select_weight_salpis option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_salpis").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/plain-pista.jpg" alt="">
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Plain Pista</a>
									</h4>
									<select id="select_weight_plapis">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="325" value="500GM">500 GM</option>
										<option data-price="975" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" id="dynamic_price_plapis">₹1300.00</span>
									</div>
									<div class="snipcart-details">
                                    	<input id="plapis" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="6"
                                        data-item-price="325"
                                        data-item-url="/"
                                        data-item-image="images/plain-pista.jpg"
                                        data-item-name="Plain Pista"
                                        data-item-custom6-name="Weight"
                                        data-item-custom6-options="1KG[+975.00]|500GM[+325.00]|250GM">
                                    </div>
                                    <script>
									const button5 = document.querySelector('#plapis')
									const select5 = document.querySelector('#select_weight_plapis');
									select5.addEventListener('change', () => {
  									button5.setAttribute("data-item-custom6-value", select5.value)
									});
                                    </script>
									<script>
										var basePricePlaPis = 325.00;

										$("#select_weight_plapis").change(function() {
											newPrice = basePricePlaPis;
											$("#select_weight_plapis option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_plapis").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/broken-walnut.jpg" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Broken Walnut (Akrot)</a>
										
									</h4>
									<select id="select_weight_akrot">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="337" value="500GM">500 GM</option>
										<option data-price="1012" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" id="dynamic_price_akrot">₹1350.00</span>
									</div>
									<div class="snipcart-details">
                                    	<input id="akrot" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="7"
                                        data-item-price="338"
                                        data-item-url="/"
                                        data-item-image="images/broken-walnut.jpg"
                                        data-item-name="Broken Walnut (Akrot)"
                                        data-item-custom7-name="Weight"
                                        data-item-custom7-options="1KG[+1012.00]|500GM[+337.00]|250GM">
                                    </div>
                                    <script>
									const button6 = document.querySelector('#akrot')
									const select6 = document.querySelector('#select_weight_akrot');
									select6.addEventListener('change', () => {
  									button6.setAttribute("data-item-custom7-value", select6.value)
									});
                                    </script>
									<script>
										var basePriceAkrot = 338.00;

										$("#select_weight_akrot").change(function() {
											newPrice = basePriceAkrot;
											$("#select_weight_akrot option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_akrot").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/anjeer.jpg" alt="">
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Anjeer</a><br>
										
									</h4>
									<select id="select_weight_anjeer">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="287" value="500GM">500 GM</option>
										<option data-price="862" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price" id="dynamic_price_anjeer">₹1150.00</span>
									</div>
									<div class="snipcart-details">
                                    	<input id="anjeer" type="submit" name="submit" value="Add to Cart" 
                                        class="snipcart-add-item button" 
                                        data-item-id="8"
                                        data-item-price="288"
                                        data-item-url="/"
                                        data-item-image="images/anjeer.jpg"
                                        data-item-name="Anjeer"
                                        data-item-custom8-name="Weight"
                                        data-item-custom8-options="1KG[+862.00]|500GM[+287.00]|250GM">
                                    </div>
                                    <script>
									const button7 = document.querySelector('#anjeer')
									const select7 = document.querySelector('#select_weight_anjeer');
									select7.addEventListener('change', () => {
  									button7.setAttribute("data-item-custom8-value", select7.value)
									});
                                    </script>
									<script>
										var basePriceYKish = 288.00;

										$("#select_weight_anjeer").change(function() {
											newPrice = basePriceYKish;
											$("#select_weight_anjeer option:selected").each(function() {
												newPrice += $(this).data('price')
											});
											$("#dynamic_price_anjeer").html("₹" + newPrice + ".00");
										});
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Jardalu</a>
									</h4>
									<select id="select_weight_jardalu">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹650.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Jardalu" />
												<input type="hidden" name="amount" value="650.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Masala Kaju</a>
									</h4>
									<select id="select_weight_masakaju">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹900.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Masala Kaju" />
												<input type="hidden" name="amount" value="900.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Pudina Kaju</a>
									</h4>
									<select id="select_weight_pukaju">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹900.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Pudina Kaju" />
												<input type="hidden" name="amount" value="900.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Black Paper Kaju</a>
									</h4>
									<select id="select_weight_blpakaju">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹900.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Black Paper Kaju" />
												<input type="hidden" name="amount" value="900.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<!--h3 class="heading-tittle">Pasta & Noodles</h3-->
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk7.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Salted Kaju</a>
									</h4>
									<select id="select_weight_saltkaju">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹900.00</span>
										<!--del>$25.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Salted Kaju" />
												<input type="hidden" name="amount" value="900.00" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk8.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Tukada Kaju (2 Pakali)</a>
									</h4>
									<select id="select_weight_tukdakaju">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹700.00</span>
										<!--del>$120.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Tukada Kaju (2 Pakali)" />
												<input type="hidden" name="amount" value="700.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Dates (Khajur)</a>
									</h4>
									<select id="select_weight_dates">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹500.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Dates (Khajur)" />
												<input type="hidden" name="amount" value="500.00" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Mix Dry-Fruits</a>
									</h4>
									<select id="select_weight_mixdryfruit">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹1000.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Mix Dry-Fruits" />
												<input type="hidden" name="amount" value="1000.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Konkani Kokum</a>
									</h4>
									<select id="select_weight_konkkokum">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">230.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Konkani Kokum" />
												<input type="hidden" name="amount" value="230.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Dates Ladu (Khajur Laddu)</a>
									</h4>
									<select id="select_weight_datesladu">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹600.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Dates Ladu (Khajur Laddu)" />
												<input type="hidden" name="amount" value="600.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">White Kharik (Dry Khajur)</a>
									</h4>
									<select id="select_weight_whitekharik">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹450.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="White Kharik (Dry Khajur)" />
												<input type="hidden" name="amount" value="450.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="#">Black Kharik (Dry Khajur)</a>
									</h4>
									<select id="select_weight_blackkharik">
										<option data-price="0" value="250GM">250 GM</option>
										<option data-price="100" value="500GM">500 GM</option>
										<option data-price="300" value="1KG" selected>1 KG</option>
									</select>
									<div class="info-product-price">
										<span class="item_price">₹500.00</span>
										<!--del>$15.00</del-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Black Kharik (Dry Khajur)" />
												<input type="hidden" name="amount" value="500.00" />
												<input type="hidden" name="discount_amount" value="00.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	
	<?php include('footer.php'); ?>

</body>

</html>