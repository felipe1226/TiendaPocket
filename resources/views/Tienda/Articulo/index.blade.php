@extends('Tienda.Layout.app')
@section('content')

<div id="layer_cart" class="layer_box" style="display: 'none'; position:fixed; top: 50px;">
	<div class="layer_inner_box">
		<div class="layer_product clearfix mar_b10">
			<a onclick="cerrarCompra()" rel="nofollow" href="javascript:void(0)"><span class="cross" title="Close window"></span>
			</a>
			<div class="product-image-container layer_cart_img"><img class="layer_cart_img img-responsive" src="http://prestashop.flytheme.net/sp_market/11-home_default/blouse.jpg" alt="Aliquam lobortis" title="Aliquam lobortis"></div>
			<div class="layer_product_info">
				<h3 id="layer_cart_product_title" class="product-name">Aliquam lobortis</h3>
				<span id="layer_cart_product_attributes">S, Black</span>
				<div id="layer_cart_product_quantity_wrap" class="hidden">
					<span class="layer_cart_label">Quantity</span>
					<span id="layer_cart_product_quantity">3</span>
				</div>
				<div id="layer_cart_product_price_wrap" class="hidden">
					<span class="layer_cart_label">Total</span>
					<span id="layer_cart_product_price">$81.00</span>
				</div>
			</div>
		</div>

		<div id="pro_added_success" class="alert alert-success">Product successfully added to your shopping cart</div>
		<div class="layer_details">
			<div class="layer_cart_row">
				<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
				<span class="ajax_cart_product_txt_s ">
					There are <span class="ajax_cart_quantity">5</span> items in your cart.
				</span>
				<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
				<span class="ajax_cart_product_txt  unvisible" style="display: none;">
					There is 1 item in your cart.
				</span>
			</div>

			<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
				<span class="layer_cart_label">
					Total products
												(tax excl.)
										</span>
				<span class="ajax_block_products_total">$114.02</span>
			</div>

							<div id="layer_cart_ajax_cart_shipping_cost" class="layer_cart_row hidden">
				<span class="layer_cart_label">
					Total shipping&nbsp;(tax excl.)
				</span>
				<span class="ajax_cart_shipping_cost">$2.00</span>
			</div>
							<div id="layer_cart_ajax_block_cart_total" class="layer_cart_row">
				<span class="layer_cart_label">
					Total
												(tax excl.)
										</span>
				<span class="ajax_block_cart_total price">$116.02</span>
			</div>
			<div class="button-container clearfix">
				<span class="continue button pull-left" title="Continue shopping">
					Continue shopping
				</span>
				<a class="button pull-right" href="http://prestashop.flytheme.net/sp_market/es/order" title="Proceed to checkout" rel="nofollow">
					Proceed to checkout
				</a>
			</div>
		</div>
	</div>
	<div class="crossseling"></div>
</div>
<div class="layer_cart_overlay" style="display: none; width: 100%; height: 100%; overflow:auto;"></div>

<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
		<div class="container">

<!-- Breadcrumb -->
      <div class="breadcrumb clearfix">
	      <ul>
		      <li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio  </a>
          </li>
          <li class="depht1"><a href="#">{{$articulos[0]->categoria}}  </a>
          </li>
				</ul>
      </div>
<!-- /Breadcrumb -->
    </div>
</div>
						<!-- End Breadcrumb Column -->

			<!-- Columns -->
<div class="columns-container">
	<div id="columns" class="container">
		<div class="row">
			<!-- Sidebar -->
			<div id="sidebar" class="column  col-lg-3 col-md-3 col-sm-4 sidebar-left">

				<script type="text/javascript">
				current_friendly_url = '#';
        param_product_url = '#';
				</script>
				<div id="layered_block_left" class="block">
					<h3 class="title_block">Comprar por</h3>
					<div class="block_content">
						<div>
							<div class="layered_filter">
								<div class="layered_subtitle_heading">
									<span class="layered_subtitle titleFont">Categorías</span>
								</div>
								<ul id="ul_layered_category_0" class="col-lg-12 layered_filter_ul">
									<li class="nomargin hiddable col-lg-12">
										<span class="checker">
											<div class="checker" id="uniform-layered_category_4">
												<span><input type="checkbox" class="checkbox" name="layered_category_4" id="layered_category_4" value="4"></span>
											</div></span>
											<label for="layered_category_4">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-smartphones_tablets" data-rel="nofollow">Smartphones &amp; Tablets<span> (15)</span></a></label>
											</li>

											<li class="nomargin hiddable col-lg-12">
												<span class="checker">
													<div class="checker" id="uniform-layered_category_8">
														<span><input type="checkbox" class="checkbox" name="layered_category_8" id="layered_category_8" value="8"></span>
													</div>
												</span>
												<label for="layered_category_8">
													<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-sports_outdoor" data-rel="nofollow">Sports &amp; Outdoor<span> (15)</span></a>
												</label>
											</li>

											<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_12">
													<span><input type="checkbox" class="checkbox" name="layered_category_12" id="layered_category_12" value="12"></span>
												</div>
											</span>
											<label for="layered_category_12">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-automotive_motorcycle" data-rel="nofollow">Automotive &amp; Motorcycle<span> (15)</span></a>
											</label>
										</li>

										<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_13"><span><input type="checkbox" class="checkbox" name="layered_category_13" id="layered_category_13" value="13"></span></div>
											</span>
											<label for="layered_category_13">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-electronics" data-rel="nofollow">Electronics<span> (14)</span></a>
											</label>
										</li>

										<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_40"><span><input type="checkbox" class="checkbox" name="layered_category_40" id="layered_category_40" value="40"></span></div>
											</span>
											<label for="layered_category_40">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-toys_hobbies" data-rel="nofollow">Toys &amp; Hobbies<span> (15)</span></a>
											</label>
										</li>

										<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_65"><span><input type="checkbox" class="checkbox" name="layered_category_65" id="layered_category_65" value="65"></span></div>
											</span>
											<label for="layered_category_65">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-holiday_supplies_gifts" data-rel="nofollow">Holiday Supplies &amp; Gifts<span> (15)</span></a>
											</label>
										</li>

										<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_66"><span><input type="checkbox" class="checkbox" name="layered_category_66" id="layered_category_66" value="66"></span></div>
											</span>
											<label for="layered_category_66">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-health_beauty" data-rel="nofollow">Health &amp; Beauty<span> (15)</span></a>
											</label>
										</li>

										<li class="nomargin hiddable col-lg-12">
											<span class="checker">
												<div class="checker" id="uniform-layered_category_173"><span><input type="checkbox" class="checkbox" name="layered_category_173" id="layered_category_173" value="173"></span></div>
											</span>
											<label for="layered_category_173">
												<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#categorias-jewelry_watches" data-rel="nofollow">Jewelry &amp; Watches<span> (12)</span></a>
											</label>
										</li>
							</div>
							<div class="layered_price" style="">
								<div class="layered_subtitle_heading">
									<span class="layered_subtitle titleFont">Precio</span>
									<!--<span class="layered_close">
									<a href="#" data-rel="ul_layered_price_0"></a>
								</span>-->
							</div>
							<ul id="ul_layered_price_0" class="col-lg-12 layered_filter_ul">

              <div class="layered_slider_container">
                <div class="layered_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="layered_price_slider" data-type="price" data-format="1" data-unit="$" aria-disabled="false">
									<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a>
								</div>
              </div>
									<label for="price">
										Rango:
									</label>
									<span id="layered_price_range"></span>
																												</ul>
					</div>
					<div class="layered_filter">
						<div class="layered_subtitle_heading">
							<span class="layered_subtitle titleFont">Fabricante</span>
							<!--<span class="layered_close">
							<a href="#" data-rel="ul_layered_manufacturer_0"></a>
						</span>-->
					</div>
					<ul id="ul_layered_manufacturer_0" class="col-lg-12 layered_filter_ul">
						<li class="nomargin hiddable col-lg-12">
							<span class="checker">
								<div class="checker" id="uniform-layered_manufacturer_4">
									<span><input type="checkbox" class="checkbox" name="layered_manufacturer_4" id="layered_manufacturer_4" value="4"></span>
								</div>
							</span>
							<label for="layered_manufacturer_4">
								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#fabricante-collins_hayes" data-rel="nofollow">Collins &amp; Hayes <span> (1)</span></a>
							</label>
						</li>
						<li class="nomargin hiddable col-lg-12">
							<span class="checker">
								<div class="checker" id="uniform-layered_manufacturer_2">
									<span><input type="checkbox" class="checkbox" name="layered_manufacturer_2" id="layered_manufacturer_2" value="2"></span>
								</div>
							</span>
							<label for="layered_manufacturer_2">
								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#fabricante-duresta" data-rel="nofollow">Duresta<span> (1)</span></a>
							</label>
						</li>
						<li class="nomargin hiddable col-lg-12">
							<span class="checker">
								<div class="checker" id="uniform-layered_manufacturer_5"><span>
									<input type="checkbox" class="checkbox" name="layered_manufacturer_5" id="layered_manufacturer_5" value="5"></span>
								</div>
							</span>
							<label for="layered_manufacturer_5">
								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#fabricante-ercol" data-rel="nofollow">Ercol<span> (1)</span></a>
							</label>
						</li>
						<li class="nomargin hiddable col-lg-12">
							<span class="checker">
								<div class="checker" id="uniform-layered_manufacturer_1">
									<span><input type="checkbox" class="checkbox" name="layered_manufacturer_1" id="layered_manufacturer_1" value="1"></span>
								</div>
							</span>
							<label for="layered_manufacturer_1">
								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#fabricante-g_plan" data-rel="nofollow">G Plan<span> (11)</span></a>
							</label>
						</li>
						<li class="nomargin hiddable col-lg-12">
							<span class="checker">
								<div class="checker" id="uniform-layered_manufacturer_6">
									<span><input type="checkbox" class="checkbox" name="layered_manufacturer_6" id="layered_manufacturer_6" value="6"></span>
								</div>
							</span>
							<label for="layered_manufacturer_6">
								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#fabricante-nike" data-rel="nofollow">Nike<span> (1)</span></a>
							</label>
						</li>
					</ul>
				</div>
				<div class="layered_filter">
					<div class="layered_subtitle_heading">
						<span class="layered_subtitle titleFont">Color</span>
						<!--<span class="layered_close">
						<a href="#" data-rel="ul_layered_id_attribute_group_3"></a>
					</span>-->
				</div>
				<ul id="ul_layered_id_attribute_group_3" class="col-lg-12 layered_filter_ul color-group">
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_7" data-rel="7_3" id="layered_id_attribute_group_7" style="background-color: #f5f5dc;">
						</span>
						<label for="layered_id_attribute_group_7" name="layered_id_attribute_group_7" class="layered_color" data-rel="7_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-beige">Beige<span> (3)</span></a>
						</label>
					</li>
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_8" data-rel="8_3" id="layered_id_attribute_group_8" style="background-color: #ffffff;">
						</span>
						<label for="layered_id_attribute_group_8" name="layered_id_attribute_group_8" class="layered_color" data-rel="8_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-white">White<span> (2)</span></a>
						</label>
					</li>
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_11" data-rel="11_3" id="layered_id_attribute_group_11" style="background-color: #434A54;">
						</span>
						<label for="layered_id_attribute_group_11" name="layered_id_attribute_group_11" class="layered_color" data-rel="11_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-black">Black<span> (2)</span></a>
						</label>
					</li>
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_13" data-rel="13_3" id="layered_id_attribute_group_13" style="background-color: #F39C11;">
						</span>
						<label for="layered_id_attribute_group_13" name="layered_id_attribute_group_13" class="layered_color" data-rel="13_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-orange">Orange<span> (8)</span></a>
						</label>
					</li>
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_14" data-rel="14_3" id="layered_id_attribute_group_14" style="background-color: #5D9CEC;">
						</span>
						<label for="layered_id_attribute_group_14" name="layered_id_attribute_group_14" class="layered_color" data-rel="14_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-blue">Blue<span> (7)</span></a>
						</label>
					</li>
					<li class="nomargin hiddable  color col-lg-12">
						<span class="checker">
							<input class="color-option  " type="button" name="layered_id_attribute_group_15" data-rel="15_3" id="layered_id_attribute_group_15" style="background-color: #A0D468;">
						</span>
						<label for="layered_id_attribute_group_15" name="layered_id_attribute_group_15" class="layered_color" data-rel="15_3">
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-green">Green<span> (2)</span></a>
						</label>
					</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  " type="button" name="layered_id_attribute_group_16" data-rel="16_3" id="layered_id_attribute_group_16" style="background-color: #F1C40F;">
																																		</span>
											<label for="layered_id_attribute_group_16" name="layered_id_attribute_group_16" class="layered_color" data-rel="16_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-yellow">Yellow<span> (4)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  " type="button" name="layered_id_attribute_group_24" data-rel="24_3" id="layered_id_attribute_group_24" style="background-color: #FCCACD;">
																																		</span>
											<label for="layered_id_attribute_group_24" name="layered_id_attribute_group_24" class="layered_color" data-rel="24_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics#color-pink">Pink<span> (3)</span></a>
																							</label>
										</li>
																																															</ul>
					</div>
												</div>
	</div>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="text-align:center;padding:15px;">
			<img src="http://prestashop.flytheme.net/sp_market/img/loader.gif" alt="">
			<br>Cargando...
		</p>
	</div>
</div>
           <!-- MODULE Block best sellers -->
           <div id="best-sellers_block_right" class="block products_block">
           	<h3 class="title_block">
               	MEJOR VENTA
               </h3>
           	<div class="block_content products-block" style="">
           			 <ul class="products">
           						<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/11-small_default/blouse.jpg" alt="Aliquam lobortis">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis">
                                       Aliquam lobortis
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$27.00</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="0">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
           	</div>


           					<!--<p class="product-description">Duis bacon reprehenderit, nostrud cow elit jowl landjaeger sunt sint...</p>-->


                           </div>
           			</li>
           					<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/16-small_default/printed-dress.jpg" alt="Maecenas Sirloin">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin">
                                       Maecenas Sirloin
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$26.00</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="0">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
           	</div>


           					<!--<p class="product-description">Filet mignon corned beef laboris ipsum porchetta beef irure dolor...</p>-->


                           </div>
           			</li>
           					<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/6-small_default/faded-short-sleeves-tshirt.jpg" alt="Aliquam Leberkas">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas">
                                       Aliquam Leberkas
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$16.51</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="3.5">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">2</span> Comentario(s)</span>
           	</div>

                           </div>
           			</li>
           				</ul>
           		</div>
           </div>
           <!-- /MODULE Block best sellers -->
           <!-- SP Custom Html -->

                                   <div class="sp_customhtml_14_15161122961891474554
           		block spcustom_html">
                                       <h3 class="title_block">
                               Testimonials
                           </h3>


                             <div class="testimonials">
           <div class="list-items owl-carousel owl-theme owl-loaded">
						 <div class="owl-stage-outer">
							 <div class="owl-stage" style="width: 1197px; transform: translate3d(-342px, 0px, 0px); transition: 0s;">
								 <div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
									 <div class="item">
										 <div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
										 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
										 <div class="name">Aliquam Tellus</div>
										  <div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item active" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											 <div class="name">Aliquam Tellus</div>
											 <div class="job">Vitae Ornare Mauris</div>
										 </div>
									 </div>
									 <div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										 <div class="item">
											 <div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											 <div class="name">Aliquam Tellus</div>
											 <div class="job">Vitae Ornare Mauris</div>
										 </div>
									 </div>
								 </div>
							 </div>
							 <div class="owl-controls">
								 <div class="owl-nav">
									 <div class="owl-prev" style="">prev</div>
									 <div class="owl-next" style="">next</div>
								 </div>
								 <div class="owl-dots" style="display: none;">
								 </div>
							 </div>
						 </div>
           </div>
				 </div>
               <!-- /SP Custom Html -->

           	<script type="text/javascript">
           		jQuery(document).ready(function($) {
           			var slider_post = $(".list-items");
           			slider_post.owlCarousel({
           				responsive:{
           					0:{
           						items:1
           					},
           					480:{
           						items:1
           					},
           					768:{
           						items:1
           					},
           					992:{
           						items:1
           					},
           					1200:{
           						items:1
           					}
           				},

           				autoplay:false,
           				loop:true,
           				nav : true, // Show next and prev buttons
           				dots: false,
           				autoplaySpeed : 500,
           				navSpeed : 500,
           				dotsSpeed : 500,
           				autoplayHoverPause: true,
           				margin:0,
           			});
           		});
           	</script>

           								</div>
								 <!-- End of Sidebar -->
			<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">
		<!-- Subcategories -->
        @if(isset($articulos))
          @if(count($articulos) == 0)
            <p class="alert alert-warning">No hay productos de esta categoria en este momento.</p>
          @else
  					<div class="content_sortPagiBar_top">
  				    <div class="category-view-type hidden-xs">
                <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Cuadricula"></a>
                </div>
                <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="Lista"></a>
                </div>
              </div>
              <form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" class="productsSortForm ">

								<div class="select selector1">
              		<label for="selectProductSort">Ordenar</label>
              		<select id="selectProductSort" class="selectProductSort form-control">
              			<option value="name:asc" >Nombre del producto: A a Z</option>
              			<option value="name:desc" >Nombre del producto: Z a A</option>
              			<option value="price:asc" >Precio mas bajo</option>
              			<option value="price:desc" >Precio mas alto</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              			<option value="quantity:desc" >Productos en existencia</option>
              			<option value="reference:asc" >Referencia mas baja</option>
              			<option value="reference:desc" >Referencia mas alta</option>
              		</select>
              	</div>
              </form>
  <!-- /Sort products -->

	<!-- Pagination -->
		          <div id="pagination" class="pagination clearfix">
					      <ul class="pagination">
                  {!!$articulos->render()!!}
								</ul>
              </div>
    	<!-- /Pagination -->
            </div>
            <div class="content_product_list hide-productdes hide-coloroption hide-stockinfo" data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
	<!-- Products list -->
	            <ul class="product_list row grid">
                @foreach($articulos as $articulo)
              		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
              			<div class="product-container" itemscope itemtype="http://schema.org/Product">
              				<div class="left-block">
                        <div class="product-image-container">
              						<!--   Slider Images Product   -->
              						<div class="product-image">
                            <a href="../Detalles/{{$articulo->id}}">
              							  <img height="220" class="img_1" src="../imgArticulos/{{$articulo->imagen}}"  alt="{{$articulo->nombre}}"/>
            								</a>
            						  </div>
                          <div class="label-box">
														<?php
															$date1 = $articulo->created_at;
															$date2 = new DateTime("now");
															$diff = $date1->diff($date2);
															if($diff->days < 31){echo '<span class="new-box">NUEVO</span>';}

														?>
                            @if($articulo->cantidad == 0)
														  <span class="sale-box">Agotado!</span>
                            @endif
													</div>


                          <a class="quick-view" href="../verArticulo/{{$articulo->id}}" data-rel="../verArticulo/{{$articulo->id}}">Vista rápida
							            </a>
                        </div>
                      </div>
                      <div class="right-block">
					<!--  Show Product title  -->
                      <h4 itemprop="name" class="product-name">
												<a href="../Detalles/{{$articulo->id}}" itemprop="url" >
                          {{$articulo->nombre}}
						            </a>
                      </h4>
                      <h5 itemprop="marca" class="product-name">
												<b>Marca: {{$articulo->marca}}
							          </b>
						          </h5>
            					<!--   Show category description   -->
            					<p class="product-desc" itemprop="description">
            						{{$articulo->descripcion}}
            					</p>
							        <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		                    <div class="star_content">
												    <div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
							              <meta itemprop="worstRating" content = "0" />
                            <meta itemprop="ratingValue" content = "0" />
                            <meta itemprop="bestRating" content = "5" />
                    		</div>
                    		<span class="nb-comments">
                          <span itemprop="reviewCount">0</span> Comentario(s)</span>
                    	</div>
					<!--Product Prices-->
										  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
												<span itemprop="price" class="price product-price">${{$articulo->precio}}</span>
                      </div>


					<!--    Show stock information    -->
                      <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
												<span class="available-now">
                          <i class="fa fa-check">-</i>
											    <link itemprop="availability" href="http://schema.org/InStock" />In stock</span>
											</div>
                          <div class="button-container">
                            <a onclick="addCompra({{$articulo->id}})" class="cart_button ajax_add_to_cart_button" href="javascript:void(0)">
											                   Carro
                                       </a>
                            <a onclick="addDeseo({{$articulo->id}})" class="addToWishlist" title="Añadir a la lista de deseos" href="javascript:void(0)"  >
                              <i class="fa fa-heart"></i>
                            </a>
                          </div>
				            </div>
                  </div><!-- .product-container> -->
                </li>
                @endforeach
              </ul>
            </div>
			      <div class="content_sortPagiBar_bottom">
				      <div class="category-view-type hidden-xs">
                <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a>
                </div>
                <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a>
                </div>
              </div>
              <form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" class="productsSortForm ">

              	<div class="select selector1">
              		<label for="selectProductSort">Ordenar</label>
              		<select id="selectProductSort" class="selectProductSort form-control">
              			<option value="name:asc" >Nombre del producto: A a Z</option>
              			<option value="name:desc" >Nombre del producto: Z a A</option>
              							<option value="price:asc" >Precio mas bajo</option>
              				<option value="price:desc" >Precio mas alto</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              							<option value="quantity:desc" >Productos en existencia</option>

              			<option value="reference:asc" >Referencia mas baja</option>
              			<option value="reference:desc" >Referencia mas alta</option>
              		</select>
              	</div>
              </form>
<!-- /Sort products -->
	<!-- Pagination -->
		          <div id="pagination_bottom" class="pagination clearfix">
					      <ul class="pagination">
                  <div id="pagination" class="pagination clearfix">
    					      <ul class="pagination">
                      {!!$articulos->render()!!}
    								</ul>
                  </div>
								</ul>
              </div>
              @endif
            @endif
			    </div>
        </div><!-- #center_column -->
      </div><!-- .row -->
    </div><!-- #columns -->
  </div><!-- .columns-container -->
</div>



  <div id="layer_cart" class="layer_box" style="display: none">
		<div class="layer_inner_box">
			<div class="layer_product clearfix mar_b10">
				<span class="cross" title="Close window"></span>
				<div class="product-image-container layer_cart_img"><img class="layer_cart_img img-responsive" src="http://prestashop.flytheme.net/sp_market/11-home_default/blouse.jpg" alt="Aliquam lobortis" title="Aliquam lobortis"></div>
				<div class="layer_product_info">
					<h3 id="layer_cart_product_title" class="product-name">Aliquam lobortis</h3>
					<span id="layer_cart_product_attributes">S, Black</span>
					<div id="layer_cart_product_quantity_wrap" class="hidden">
						<span class="layer_cart_label">Quantity</span>
						<span id="layer_cart_product_quantity">3</span>
					</div>
					<div id="layer_cart_product_price_wrap" class="hidden">
						<span class="layer_cart_label">Total</span>
						<span id="layer_cart_product_price">$81.00</span>
					</div>
				</div>
			</div>

			<div id="pro_added_success" class="alert alert-success">Product successfully added to your shopping cart</div>
			<div class="layer_details">
				<div class="layer_cart_row">
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s ">
						There are <span class="ajax_cart_quantity">5</span> items in your cart.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt  unvisible" style="display: none;">
						There is 1 item in your cart.
					</span>
				</div>

				<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
					<span class="layer_cart_label">
						Total products
													(tax excl.)
											</span>
					<span class="ajax_block_products_total">$114.02</span>
				</div>

								<div id="layer_cart_ajax_cart_shipping_cost" class="layer_cart_row hidden">
					<span class="layer_cart_label">
						Total shipping&nbsp;(tax excl.)
					</span>
					<span class="ajax_cart_shipping_cost">$2.00</span>
				</div>
								<div id="layer_cart_ajax_block_cart_total" class="layer_cart_row">
					<span class="layer_cart_label">
						Total
													(tax excl.)
											</span>
					<span class="ajax_block_cart_total price">$116.02</span>
				</div>
				<div class="button-container clearfix">
					<span class="continue button pull-left" title="Continue shopping">
						Continue shopping
					</span>
					<a class="button pull-right" href="http://prestashop.flytheme.net/sp_market/es/order" title="Proceed to checkout" rel="nofollow">
						Proceed to checkout
					</a>
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div>
  <div class="layer_cart_overlay" style="display: none; width: 100%; height: 100%;"></div>

  <div id="msgDeseo" class="fancybox-overlay fancybox-overlay-fixed" style="display:none; width: auto; height: auto;">
    <div class="fancybox-wrap fancybox-desktop fancybox-type-html fancybox-opened" tabindex="-1" style="opacity: 1; overflow: visible; height: auto; width: 384px; position: absolute; top: 286px; left: 400px;">
      <div class="fancybox-skin" style="padding: 0px; width: auto; height: auto;">

        <div class="fancybox-outer"><div class="fancybox-inner" style="overflow: auto; width: 384px; height: auto;">
          <p class="fancybox-error">El producto se ha añadido con éxito a su lista de deseos.</p>
          <a href="{{url('ListaDeseos')}}" class="wishlist_product_view button"> Ver Todo </a>

        </div>
        <a title="Cerrar" class="fancybox-item fancybox-close" onclick="cerrarDeseo()" href="javascript:void(0);"></a>
      </div>
    </div>
  </div>


<script>
  function addCompra(id){

      $.ajax({
        url: "../Carrito/agregar",
        type: 'GET',
        data: {
          id_articulo: id

        },
        success: function(id){
					$('.layer_cart_overlay').fadeIn('slow', function() {
						$.scrollTo(this, 2000);
					});
          $('#layer_cart').fadeIn('slow', function() {
						$.scrollTo(this, 2000);
            JSONArticulos = eval(<?php echo json_encode($articulos);?>);
            JSONArticulos.forEach(function(currentValue,index,arr) {
              if(currentValue.id == id){
                $('#referenciaDireccion').html(currentValue.referencia_direccion);
                $('#nombre').html(currentValue.nombre);
              }
            });
          });
        },

        error: function(data){
          alert('Error en la compra');
        }
      });
  }

  function addDeseo(id){
      $.ajax({
        url: "../Deseo/agregar",
        type: 'GET',
        data: {
          id_articulo: id

        },
        success: function(){
          $('#msgDeseo').fadeIn('slow', function() {
                $.scrollTo(this, 2000);
          });

        },
        error: function(data){
          alert('Error en la compra');
        }
      });
  }

	function cerrarCompra(){
		$('.layer_cart_overlay').fadeOut('slow', function() {
					$.scrollTo(this, 2000);
		});

	}
  function cerrarDeseo(){
    $('#msgDeseo').fadeOut('slow', function() {
          $.scrollTo(this, 2000);
    });
  }
  </script>


@endsection
