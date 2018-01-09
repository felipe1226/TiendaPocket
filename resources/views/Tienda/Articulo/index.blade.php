@extends('Tienda.Layout.app')
@section('content')

<link href="../themes/sp_market/css/fonts/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/global.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/autoload/jquery.mCustomScrollbar.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/autoload/uniform.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/spthemeconfigurator/views/css/front/sp-cpanel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/bootstrap/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/spthemeconfigurator/views/css/front/configCss-1.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/theme-2f0033.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/blocktags/blocktags.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/blockwishlist/blockwishlist.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/productcomments/productcomments.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spblockcurrencies/css/spblockcurrencies.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spblocklanguages/css/spblocklanguages.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/smartblog/css/smartblogstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/blockcategories/blockcategories.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spmegamenu/css/spmegamenu.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spextraslider/views/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/spextraslider/views/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/splistingtabs/views/css/sp-listing-tabs.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/splistingtabs/views/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spblockuserinfo/css/spblockuserinfo.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spdeal/views/css/styles.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spverticalmenu/css/spverticalmenu.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spcategories/views/css/sp-categories.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spsearchpro/views/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spblockcart/css/spblockcart.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../js/jquery/plugins/bxslider/jquery.bxslider.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/sphomeslider/css/sphomeslider.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/sphomeslider/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../modules/sphomeslider/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spblocknewsletter/spblocknewsletter.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../themes/sp_market/css/modules/spcustomhtml/views/css/style.css" type="text/css" media="all" />

    <script type="text/javascript">
    var CUSTOMIZE_TEXTFIELD = 1;
    var FancyboxI18nClose = 'Close';
    var FancyboxI18nNext = 'Next';
    var FancyboxI18nPrev = 'Previous';
    var add_compare_item = 'Product successfully added to the product comparison';
    var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
    var ajax_allowed = true;
    var ajaxsearch = true;
    var baseDir = '/';
    var baseUri = '/';
    var blocklayeredSliderName = {"price":"precio","weight":"peso"};
    var comparator_max_item = 3;
    var comparedProductsIds = [22];
    var contentOnly = false;
    var currency = {"id":1,"name":"USD","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
    var currencyBlank = 0;
    var currencyFormat = 1;
    var currencyRate = 1;
    var currencySign = '$';
    var customizationIdMessage = 'Customization #';
    var delete_txt = 'Delete';
    var displayList = false;
    var freeProductTranslation = 'Free!';
    var freeShippingTranslation = 'Free shipping!';
    var generated_date = 1513840724;
    var id_lang = 4;
    var img_dir = 'themes/sp_market/img/';
    var instantsearch = false;
    var isGuest = 0;
    var isLogged = 1;
    var isMobile = false;
    var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
    var max_item = 'You cannot add more than 3 product(s) to the product comparison';
    var min_item = 'Please select at least one product';
    var mywishlist_url = 'http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist';
    var page_name = 'category';
    var param_product_url = '#';
    var priceDisplayMethod = 1;
    var priceDisplayPrecision = 2;
    var quickView = true;
    var remove_compare_item = 'Product successfully removed from the product comparison';
    var removingLinkText = 'remove this product from my cart';
    var request = 'http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty';
    var roundMode = 2;
    var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
    var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
    var usingSecureMode = false;
    var wishlistProductsIds = false;
    </script>


    <script type="text/javascript" src="../js/jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery/plugins/jquery.easing.js"></script>
    <script type="text/javascript" src="../js/tools.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/global.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/autoload/10-bootstrap.min.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/autoload/15-jquery.total-storage.min.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/autoload/15-jquery.uniform-modified.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/autoload/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/autoload/slick.min.js"></script>
    <script type="text/javascript" src="../js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/products-comparison.js"></script>
    <script type="text/javascript" src="../modules/spthemeconfigurator/views/js/front/jquery.miniColors.min.js"></script>
    <script type="text/javascript" src="../modules/spthemeconfigurator/views/js/front/sp-cpanel.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.backtotop.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.global.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/tools/treeManagement.js"></script>
    <script type="text/javascript" src="../modules/spextraslider/views/js/owl.carousel.js"></script>
    <script type="text/javascript" src="../modules/spdeal/views/js/deal.js"></script>
    <script type="text/javascript" src="../modules/spdeal/views/js/jquery.cj-swipe.js"></script>
    <script type="text/javascript" src="../modules/spcategories/views/js/jquery.imagesloaded.js"></script>
    <script type="text/javascript" src="../modules/spcategories/views/js/jquery.sj_accordion.js"></script>
    <script type="text/javascript" src="../modules/spsearchpro/views/js/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/modules/spblockcart/ajax-cart.js"></script>
    <script type="text/javascript" src="../js/jquery/plugins/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="../js/jquery/plugins/jquery.serialScroll.js"></script>
    <script type="text/javascript" src="../js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../modules/sphomeslider/js/owl.carousel.js"></script>
    <script type="text/javascript" src="../modules/spblocknewsletter/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="../themes/sp_market/js/index.js"></script>
    <script type="text/javascript" src="../modules/statsdata/js/plugindetect.js"></script>




  	<div id="layer_cart" class="layer_box">
  		<div class="layer_inner_box">
  			<div class="layer_product clearfix mar_b10">
  						<span class="cross" title="Close window"></span>
  				<div class="product-image-container layer_cart_img">
  				</div>
  				<div class="layer_product_info">
  							<h3 id="layer_cart_product_title" class="product-name"></h3>
  							<span id="layer_cart_product_attributes"></span>
  					<div id="layer_cart_product_quantity_wrap" class="hidden">
  								<span class="layer_cart_label">Quantity</span>
  								<span id="layer_cart_product_quantity"></span>
  					</div>
  					<div id="layer_cart_product_price_wrap" class="hidden">
  								<span class="layer_cart_label">Total</span>
  								<span id="layer_cart_product_price"></span>
  					</div>
  				</div>
  			</div>

  			<div id="pro_added_success" class="alert alert-success">Producto agregado exitosamente a su carrito de compras
  			</div>
  			<div class="layer_details">
  				<div class="layer_cart_row">
  							<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
  								<span class="ajax_cart_product_txt_s  unvisible">
  									Hay <span class="ajax_cart_quantity">0</span> articulos en tu carrito
  								</span>
  							<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
  								<span class="ajax_cart_product_txt ">
  									Hay 1 artículo en su carrito..
  								</span>
  				</div>
  				<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
  								<span class="layer_cart_label">
  									Total productos
  															(tax excl.)
  								</span>
  								<span class="ajax_block_products_total">
  								</span>
  				</div>

  				<div id="layer_cart_ajax_cart_shipping_cost" class="layer_cart_row hidden">
  								<span class="layer_cart_label">
  									Total shipping&nbsp;(tax excl.)
  								</span>
  								<span class="ajax_cart_shipping_cost">
  									Free shipping!
  								</span>
  				</div>
  				<div id="layer_cart_ajax_block_cart_total" class="layer_cart_row">
  								<span class="layer_cart_label">
  									Total
  															(tax excl.)
  								</span>
  								<span class="ajax_block_cart_total price">
  								</span>
  				</div>
  				<div class="button-container clearfix">
  								<span class="continue button pull-left" title="Continue shopping">
  									Continue shopping
  								</span>
  								<a class="button pull-right" href="order.html" title="Proceed to checkout" rel="nofollow">
  									Proceed to checkout
  								</a>
  				</div>
  			</div>
  		</div>
  		<div class="crossseling">
  		</div>
  	</div> <!-- #layer_cart -->
  	<div class="layer_cart_overlay">
  	</div>


<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
		<div class="container">

<!-- Breadcrumb -->
      <div class="breadcrumb clearfix">
	      <ul>
		      <li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio  </a>
          </li>
          <li class="depht1"><a href="#">{{$categoria}}  </a>
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
		<form action="#" id="layered_form">
			<div>
																										<div class="layered_filter">
						                        <div class="layered_subtitle_heading">
                            <span class="layered_subtitle titleFont">Categorías</span>
                            <!--<span class="layered_close">
                            	<a href="#" data-rel="ul_layered_category_0"></a>
                            </span>-->
						</div>
						<ul id="ul_layered_category_0" class="col-lg-12 layered_filter_ul">
																																												<li class="nomargin hiddable col-lg-12">
											<span class="checker">
																							<input type="checkbox" class="checkbox" name="layered_category_167" id="layered_category_167" value="167" />
																						</span>
											<label for="layered_category_167">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-cycling_gear" data-rel="nofollow">Cycling Gear<span> (4)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable col-lg-12">
											<span class="checker">
																							<input type="checkbox" class="checkbox" name="layered_category_168" id="layered_category_168" value="168" />
																						</span>
											<label for="layered_category_168">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-camping_hiking_gear" data-rel="nofollow">Camping &amp; Hiking Gear<span> (6)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable col-lg-12">
											<span class="checker">
																							<input type="checkbox" class="checkbox" name="layered_category_170" id="layered_category_170" value="170" />
																						</span>
											<label for="layered_category_170">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-swim_gear" data-rel="nofollow">Swim Gear<span> (6)</span></a>
																							</label>
										</li>
																																															</ul>
					</div>
																											<div class="layered_price">
						                        <div class="layered_subtitle_heading">
                            <span class="layered_subtitle titleFont">Precio</span>
                            <!--<span class="layered_close">
                            	<a href="#" data-rel="ul_layered_price_0"></a>
                            </span>-->
						</div>
						<ul id="ul_layered_price_0" class="col-lg-12 layered_filter_ul">

									<div class="layered_slider_container">
										<div class="layered_slider" id="layered_price_slider" data-type="price" data-format="1" data-unit="$"></div>
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
																							<input type="checkbox" class="checkbox" name="layered_manufacturer_1" id="layered_manufacturer_1" value="1" />
																						</span>
											<label for="layered_manufacturer_1">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-g_plan" data-rel="nofollow">G Plan<span> (21)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable col-lg-12">
											<span class="checker">
																							<input type="checkbox" class="checkbox" name="layered_manufacturer_3" id="layered_manufacturer_3" value="3" />
																						</span>
											<label for="layered_manufacturer_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-parker_knoll" data-rel="nofollow">Parker Knoll<span> (1)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable col-lg-12">
											<span class="checker">
																							<input type="checkbox" class="checkbox" name="layered_manufacturer_7" id="layered_manufacturer_7" value="7" />
																						</span>
											<label for="layered_manufacturer_7">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-puma" data-rel="nofollow">Puma<span> (1)</span></a>
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
																							<input class="color-option  " type="button" name="layered_id_attribute_group_8" data-rel="8_3" id="layered_id_attribute_group_8"  style="background-color: #ffffff;" />
																																		</span>
											<label for="layered_id_attribute_group_8" name="layered_id_attribute_group_8" class="layered_color" data-rel="8_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#color-white">White<span> (1)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  " type="button" name="layered_id_attribute_group_11" data-rel="11_3" id="layered_id_attribute_group_11"  style="background-color: #434A54;" />
																																		</span>
											<label for="layered_id_attribute_group_11" name="layered_id_attribute_group_11" class="layered_color" data-rel="11_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#color-black">Black<span> (1)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  " type="button" name="layered_id_attribute_group_13" data-rel="13_3" id="layered_id_attribute_group_13"  style="background-color: #F39C11;" />
																																		</span>
											<label for="layered_id_attribute_group_13" name="layered_id_attribute_group_13" class="layered_color" data-rel="13_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#color-orange">Orange<span> (22)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  " type="button" name="layered_id_attribute_group_14" data-rel="14_3" id="layered_id_attribute_group_14"  style="background-color: #5D9CEC;" />
																																		</span>
											<label for="layered_id_attribute_group_14" name="layered_id_attribute_group_14" class="layered_color" data-rel="14_3">
																								<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#color-blue">Blue<span> (21)</span></a>
																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  disable" type="button" name="layered_id_attribute_group_7" data-rel="7_3" id="layered_id_attribute_group_7" disabled="disabled" style="background-color: #f5f5dc;" />
																																		</span>
											<label for="layered_id_attribute_group_7" class="disabled">
																								Beige<span> (0)</span>																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  disable" type="button" name="layered_id_attribute_group_15" data-rel="15_3" id="layered_id_attribute_group_15" disabled="disabled" style="background-color: #A0D468;" />
																																		</span>
											<label for="layered_id_attribute_group_15" class="disabled">
																								Green<span> (0)</span>																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  disable" type="button" name="layered_id_attribute_group_16" data-rel="16_3" id="layered_id_attribute_group_16" disabled="disabled" style="background-color: #F1C40F;" />
																																		</span>
											<label for="layered_id_attribute_group_16" class="disabled">
																								Yellow<span> (0)</span>																							</label>
										</li>
																																							<li class="nomargin hiddable  color col-lg-12">
											<span class="checker">
																							<input class="color-option  disable" type="button" name="layered_id_attribute_group_24" data-rel="24_3" id="layered_id_attribute_group_24" disabled="disabled" style="background-color: #FCCACD;" />
																																		</span>
											<label for="layered_id_attribute_group_24" class="disabled">
																								Pink<span> (0)</span>																							</label>
										</li>
																																															</ul>
					</div>
												</div>
			<input type="hidden" name="id_category_layered" value="153" />
																																																																																																																																		</form>
	</div>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="text-align:center;padding:15px;">
			<img src="http://prestashop.flytheme.net/sp_market/img/loader.gif" alt="" />
			<br />Cargando...
		</p>
	</div>
</div>


<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<h3 class="title_block">
    	MEJOR VENTA
    </h3>
	<div class="block_content products-block">
			 <ul class="products">
						<li class="clearfix">
				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis" class="products-block-image">
					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/11-small_default/blouse.jpg" alt="Aliquam lobortis" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis">
                            Aliquam lobortis
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$27.00</span>

                        </div>

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
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Duis bacon reprehenderit, nostrud cow elit jowl landjaeger sunt sint...</p>-->


                </div>
			</li>
					<li class="clearfix">
				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" class="products-block-image">
					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/16-small_default/printed-dress.jpg" alt="Maecenas Sirloin" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin">
                            Maecenas Sirloin
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$26.00</span>

                        </div>

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
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Filet mignon corned beef laboris ipsum porchetta beef irure dolor...</p>-->


                </div>
			</li>
					<li class="clearfix">
				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" class="products-block-image">
					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/6-small_default/faded-short-sleeves-tshirt.jpg" alt="Aliquam Leberkas" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas">
                            Aliquam Leberkas
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$16.51</span>

                        </div>

						<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "3.5" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">2</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Sausage pancetta frankfurter biltong meatloaf andouille flank porchetta...</p>-->


                </div>
			</li>
				</ul>
		<!--<div class="lnk">
        	<a href="http://prestashop.flytheme.net/sp_market/es/best-sales" title="Los productos más vendidos"  class="btn btn-default button button-small"><span>Los productos más vendidos<i class="fa fa-chevron-right right"></i></span></a>
        </div>-->
		</div>
</div>
<!-- /MODULE Block best sellers -->
<!-- SP Custom Html -->

                        <div class="sp_customhtml_14_1513840724766103838
		block spcustom_html">
                            <h3 class="title_block">
                    Testimonials
                </h3>


                  <div class="testimonials">
<div class="list-items">
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
</div>
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
</div>
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
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
              			<option value="name:asc" >Product Name: A to Z</option>
              			<option value="name:desc" >Product Name: Z to A</option>
              			<option value="price:asc" >Lowest Price</option>
              			<option value="price:desc" >Highest Price</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              			<option value="quantity:desc" >Product In Stock</option>
              			<option value="reference:asc" >Lowest Reference</option>
              			<option value="reference:desc" >Highest Reference</option>
              		</select>
              	</div>
              </form>
  <!-- /Sort products -->

	<!-- Pagination -->
		          <div id="pagination" class="pagination clearfix">
					      <ul class="pagination">
                  <li class="active current">
      							<span><span>1</span></span>
      						</li>
                  <li>
      							<a  href="/sp_market/es/153-healthy-beauty?p=2">
      								<span>2</span>
      							</a>
      						</li>
                  <li>
      							<a  href="/sp_market/es/153-healthy-beauty?p=3">
      								<span>3</span>
      							</a>
      						</li>
                  <li id="pagination_next" class="pagination_next">
        						<a  href="/sp_market/es/153-healthy-beauty?p=2">
        							<i class="fa fa-angle-right" aria-hidden="true"></i>
        						</a>
        					</li>
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
														<span class="new-box">Nuevo</span>
                            @if($articulo->cantidad == 0)
														  <span class="sale-box">Agotado!</span>
                            @endif
													</div>
                          <a class="quick-view" href="{{url('vistaRapida')}}" data-rel="{{url('vistaRapida')}}">Vista rápida
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
                          <i class="fa fa-check"></i>
											    <link itemprop="availability" href="http://schema.org/InStock" />In stock</span>
											</div>
                      {!!Form::open(array('url'=>'Tienda/Carrito','method'=>'POST',))!!}
                        <div class="form-group">
                          <input class="form-control grey" type="hidden" name="vista" value="articulos"/>
                        </div>
                        <div class="form-group">
                          <input class="form-control grey" type="hidden" name="id_articulo" value="{{$articulo->id}}"/>
                        </div>
                        <div class="form-group">
                          <input class="form-control grey" type="hidden" name="categoria" value="{{$articulo->categoria}}" hidden />
                        </div>
                        <div class="button-container">
                          <button  class="cart_button" type="submit">
														Carro
												  </button>
                          <a class="cart_button" type="submit" title="Añadir a la lista de deseos" href="{{url('ListaDeseos')}}">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>
                      {!!Form::close()!!}
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
              			<option value="name:asc" >Product Name: A to Z</option>
              			<option value="name:desc" >Product Name: Z to A</option>
              							<option value="price:asc" >Lowest Price</option>
              				<option value="price:desc" >Highest Price</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              							<option value="quantity:desc" >Product In Stock</option>

              			<option value="reference:asc" >Lowest Reference</option>
              			<option value="reference:desc" >Highest Reference</option>
              		</select>
              	</div>
              </form>
<!-- /Sort products -->
	<!-- Pagination -->
		          <div id="pagination_bottom" class="pagination clearfix">
					      <ul class="pagination">
                  <li class="active current">
							      <span>
      							<span>1</span>
      							</span>
      						</li>
                  <li>
      							<a  href="/sp_market/es/153-healthy-beauty?p=2">
      								<span>2</span>
      							</a>
      						</li>
                  <li>
      							<a  href="/sp_market/es/153-healthy-beauty?p=3">
      								<span>3</span>
      							</a>
      						</li>
                  <li id="pagination_next_bottom" class="pagination_next">
      						  <a  href="/sp_market/es/153-healthy-beauty?p=2">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
      						  </a>
      					  </li>
								</ul>
              </div>
              @endif
            @endif
			    </div>
        </div><!-- #center_column -->
      </div><!-- .row -->
    </div><!-- #columns -->
  </div><!-- .columns-container -->

@endsection
