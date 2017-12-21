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
    var baseDir = 'sp_market/';
    var baseUri = 'sp_market/';
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


<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
		<div class="container">

<!-- Breadcrumb -->
      <div class="breadcrumb clearfix">
	      <ul>
		      <li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home  </a>
          </li>
									<b>>  {{$categoria}}</b>
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




						<!-- Center Column -->
						<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">







		<!-- Subcategories -->



					<div class="content_sortPagiBar_top">
				<div class="category-view-type hidden-xs">
    <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a></div>
    <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a></div>
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


											<!-- nbr product/page -->
			<form action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
												<label for="nb_item">
					Show
				</label>
																																	<input type="hidden" name="id_category" value="153" />
																			<select name="n" id="nb_item" class="form-control">
																							<option value="9" selected="selected">9</option>
																														<option value="18" >18</option>
																														<option value="45" >45</option>
																					</select>

			</div>
		</form>
		<!-- /nbr product/page -->




	<!-- Pagination -->
		<div id="pagination" class="pagination clearfix">
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
																																			<li id="pagination_next" class="pagination_next">
						<a  href="/sp_market/es/153-healthy-beauty?p=2">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</li>
								</ul>

		 <!--<div class="product-count">
																											Showing 1 - 9 of 23 items
					</div>
		-->

	</div>
    	<!-- /Pagination -->

			</div>



			<div class="content_product_list hide-productdes hide-coloroption hide-stockinfo   "  data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">






	<!-- Products list -->
	<ul class="product_list row grid">




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" title="Peberkas tongue" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/56-home_default/faded-short-sleeves-tshirt.jpg"  alt="Peberkas tongue"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" title="Peberkas tongue" itemprop="url" >
							Peberkas tongue
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Cupidatat sunt velit esse, deserunt filet mignon hamburger excepteur shank ea ball tip. Eiusmod sunt filet mignon venison kevin sint irure exercitation labore cow prosciutto. Consectetur voluptate leberkas qui kielbasa nostrud proident laborum cupim pork belly beef ad. Aliquip hamburger fugiat sed
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_65" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_64" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$30.51							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=11&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="11">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_11" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="11">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html" title="Lround porchetta" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/61-home_default/blouse.jpg"  alt="Lround porchetta"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html" title="Lround porchetta" itemprop="url" >
							Lround porchetta
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Ullamco fugiat prosciutto brisket tail capicola consequat aliquip biltong irure mollit eu pork chop anim. Swine filet mignon turkey tri-tip culpa andouille commodo turducken strip steak. Picanha bresaola boudin aliqua est, ex minim proident pork belly turducken dolore. Biltong leberkas labore non
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html#/size-s/color-white" id="color_70" class="color_pick" style="background:#ffffff;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html#/size-m/color-black" id="color_71" class="color_pick" style="background:#434A54;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$27.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=12&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="12">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_12" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/12-blouse.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="12">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html" title="Porta tenderloin" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/76-home_default/faded-short-sleeves-tshirt.jpg"  alt="Porta tenderloin"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html" title="Porta tenderloin" itemprop="url" >
							Porta tenderloin
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Ut eiusmod swine incididunt qui pig. Pastrami in turkey doner, ullamco cupidatat nostrud est dolore. Spare ribs mollit nostrud anim, pork loin bacon deserunt chuck. Adipisicing tri-tip ullamco kevin non. Incididunt bresaola lorem, tri-tip filet mignon pork loin esse tenderloin beef.
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_92" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_91" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$16.51							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=15&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="15">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_15" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/15-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="15">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html" title="Semper tenderloin" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/106-home_default/faded-short-sleeves-tshirt.jpg"  alt="Semper tenderloin"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html" title="Semper tenderloin" itemprop="url" >
							Semper tenderloin
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Adipisicing pastrami tail pancetta chuck laborum. Ham hock mollit minim shank porchetta pork belly aliqua. Tempor sed turkey, dolor cow ribeye eiusmod rump sirloin bacon. Ipsum qui incididunt minim anim pig chuck in dolor aliquip occaecat beef beef ribs ham nisi.
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_128" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_127" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$78.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=21&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="21">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_21" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '21', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/21-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="21">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html" title="Znterdum nibhing" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/111-home_default/faded-short-sleeves-tshirt.jpg"  alt="Znterdum nibhing"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html" title="Znterdum nibhing" itemprop="url" >
							Znterdum nibhing
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Qui biltong venison consectetur pork, bacon jerky leberkas t-bone incididunt commodo pariatur eiusmod ullamco. Shankle bacon nostrud kevin officia pariatur chuck commodo elit enim ball tip beef do. Doner exercitation shoulder, proident tri-tip dolore est. Deserunt eu velit ribeye do commodo quis. In
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_134" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_133" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$66.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=22&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="22">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_22" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '22', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/22-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="22">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html" title="Cenean congue" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/71-home_default/printed-dress.jpg"  alt="Cenean congue"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html" title="Cenean congue" itemprop="url" >
							Cenean congue
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Ex brisket deserunt laborum drumstick. Porchetta strip steak aliqua andouille chicken duis. Fugiat velit beef ex. Ad cillum pariatur, magna consequat quis ut frankfurter tri-tip pork loin capicola andouille reprehenderit. Frankfurter sed aliqua, sunt velit bacon ipsum. Sed commodo ground round
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html#/size-m/color-orange" id="color_88" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "5" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">2</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$26.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=14&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="14">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_14" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '14', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/14-printed-dress.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="14">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html" title="Sed sollicitudin" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/81-home_default/faded-short-sleeves-tshirt.jpg"  alt="Sed sollicitudin"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html" title="Sed sollicitudin" itemprop="url" >
							Sed sollicitudin
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Chicken pork culpa shank biltong ut. Meatball sint salami et in doner beef ribs ground round reprehenderit pig irure ham hock. Eu tongue aliqua, prosciutto nulla id pig ullamco frankfurter bresaola excepteur beef ribs et beef. Salami reprehenderit minim, beef ribs cupidatat irure landjaeger flank
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_98" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_97" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$90.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=16&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="16">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_16" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/16-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="16">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html" title="Cenean vehicula" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/87-home_default/faded-short-sleeves-tshirt.jpg"  alt="Cenean vehicula"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html" title="Cenean vehicula" itemprop="url" >
							Cenean vehicula
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Est irure prosciutto jerky consectetur in kevin short loin exercitation. Voluptate officia boudin short loin, cupim spare ribs elit cow pastrami brisket bacon laboris labore ut. Pork loin cupidatat laboris tongue aute hamburger. Cupidatat eu proident, chicken ham hock ea sed ex turkey filet mignon
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_104" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_103" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "5" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$30.51							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=17&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="17">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_17" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/smartphones-tablets/17-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="17">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html" title="Zravida Prosciutto" itemprop="url" >
									<img class="img_1" src="http://prestashop.flytheme.net/sp_market/116-home_default/faded-short-sleeves-tshirt.jpg"  alt="Zravida Prosciutto"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html" title="Zravida Prosciutto" itemprop="url" >
							Zravida Prosciutto
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Beef turducken ea sint voluptate. Sirloin cow bresaola quis, kevin strip steak sint. Meatball cow swine in pariatur. Ribeye quis turkey venison flank. Consequat biltong beef ribs cow porchetta salami esse aliquip tail spare ribs meatloaf lorem. Hamburger pork corned beef eiusmod. Anim fatback pork
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_140" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_139" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
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


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$200.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=23&amp;token=37dab0cd8f57363d790bac16e0dd0e45" rel="nofollow"  title="Carro" data-id-product="23">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_23" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '23', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/23-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="23">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>
		</ul>





            </div>


			<div class="content_sortPagiBar_bottom">
				<div class="category-view-type hidden-xs">
    <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a></div>
    <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a></div>
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


											<!-- nbr product/page -->
			<form action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
												<label for="nb_item">
					Show
				</label>
																																	<input type="hidden" name="id_category" value="153" />
																			<select name="n" id="nb_item" class="form-control">
																							<option value="9" selected="selected">9</option>
																														<option value="18" >18</option>
																														<option value="45" >45</option>
																					</select>

			</div>
		</form>
		<!-- /nbr product/page -->




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

		 <!--<div class="product-count">
																											Showing 1 - 9 of 23 items
					</div>
		-->

	</div>
    	<!-- /Pagination -->

			</div>


						</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->


      @endsection
