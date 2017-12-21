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
var PS_CATALOG_MODE = false;
var add_compare_item = 'Product successfully added to the product comparison';
var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
var ajax_allowed = true;
var ajaxsearch = true;
var allowBuyWhenOutOfStock = false;
var attribute_anchor_separator = '-';
var attributesCombinations = [{"id_attribute":"1","id_attribute_group":"1","attribute":"s","group":"size"},{"id_attribute":"13","id_attribute_group":"3","attribute":"orange","group":"color"},{"id_attribute":"14","id_attribute_group":"3","attribute":"blue","group":"color"},{"id_attribute":"2","id_attribute_group":"1","attribute":"m","group":"size"},{"id_attribute":"3","id_attribute_group":"1","attribute":"l","group":"size"}];
var availableLaterValue = '';
var availableNowValue = 'In stock';
var baseDir = '../';
var baseUri = '../';
var combinationImages = {"1":[{"id_image":"6","id_product_attribute":"1","legend":"Aliquam Leberkas"},{"id_image":"7","id_product_attribute":"1","legend":"Aliquam Leberkas"}],"2":[{"id_image":"8","id_product_attribute":"2","legend":"Aliquam Leberkas"},{"id_image":"9","id_product_attribute":"2","legend":"Aliquam Leberkas"},{"id_image":"10","id_product_attribute":"2","legend":"Aliquam Leberkas"}]};
var combinations = {"2":{"attributes_values":{"1":"S","3":"Blue"},"attributes":[1,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":8,"list":"'1','14'"},"1":{"attributes_values":{"1":"S","3":"Orange"},"attributes":[1,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":296,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":6,"list":"'1','13'"},"3":{"attributes_values":{"1":"M","3":"Orange"},"attributes":[2,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'2','13'"},"4":{"attributes_values":{"1":"M","3":"Blue"},"attributes":[2,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'2','14'"},"6":{"attributes_values":{"1":"L","3":"Blue"},"attributes":[3,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'3','14'"},"5":{"attributes_values":{"1":"L","3":"Orange"},"attributes":[3,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'3','13'"}};
var combinationsFromController = {"2":{"attributes_values":{"1":"S","3":"Blue"},"attributes":[1,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":8,"list":"'1','14'"},"1":{"attributes_values":{"1":"S","3":"Orange"},"attributes":[1,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":296,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":6,"list":"'1','13'"},"3":{"attributes_values":{"1":"M","3":"Orange"},"attributes":[2,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'2','13'"},"4":{"attributes_values":{"1":"M","3":"Blue"},"attributes":[2,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'2','14'"},"6":{"attributes_values":{"1":"L","3":"Blue"},"attributes":[3,14],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'3','14'"},"5":{"attributes_values":{"1":"L","3":"Orange"},"attributes":[3,13],"price":0,"specific_price":false,"ecotax":0,"weight":0,"quantity":300,"reference":null,"unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'3','13'"}};
var comparator_max_item = 3;
var comparedProductsIds = [];
var contentOnly = false;
var currency = {"id":1,"name":"USD","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
var currencyBlank = 0;
var currencyFormat = 1;
var currencyRate = 1;
var currencySign = '$';
var currentDate = '2017-09-23 20:45:39';
var customerGroupWithoutTax = true;
var customizationFields = false;
var customizationIdMessage = 'Customization #';
var default_eco_tax = 0;
var delete_txt = 'Delete';
var displayDiscountPrice = '0';
var displayList = false;
var displayPrice = 1;
var doesntExist = 'This combination does not exist for this product. Please select another combination.';
var doesntExistNoMore = 'This product is no longer in stock';
var doesntExistNoMoreBut = 'with those attributes but is available with others.';
var ecotaxTax_rate = 0;
var fieldRequired = 'Please fill in all the required fields before saving your customization.';
var freeProductTranslation = 'Free!';
var freeShippingTranslation = 'Free shipping!';
var generated_date = 1506213940;
var group_reduction = 0;
var idDefaultImage = 6;
var id_lang = 4;
var id_product = 1;
var img_dir = '../../img/';
var img_prod_dir = 'http://prestashop.flytheme.net/sp_market/img/p/';
var img_ps_dir = '../../img/';
var instantsearch = false;
var isGuest = 0;
var isLogged = 0;
var isMobile = false;
var jqZoomEnabled = false;
var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
var maxQuantityToAllowDisplayOfLastQuantityMessage = 3;
var max_item = 'You cannot add more than 3 product(s) to the product comparison';
var min_item = 'Please select at least one product';
var minimalQuantity = 1;
var mywishlist_url = '../loginf896.html';
var noTaxForThisProduct = true;
var oosHookJsCodeFunctions = [];
var page_name = 'product';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var productAvailableForOrder = true;
var productBasePriceTaxExcl = 16.51;
var productBasePriceTaxExcluded = 16.51;
var productHasAttributes = true;
var productPrice = 16.51;
var productPriceTaxExcluded = 16.51;
var productPriceWithoutReduction = 16.51;
var productReference = 'demo_1';
var productShowPrice = true;
var productUnitPriceRatio = 0;
var product_fileButtonHtml = 'Choose File';
var product_fileDefaultHtml = 'No file selected';
var product_specific_price = [];
var quantitiesDisplayAllowed = true;
var quantityAvailable = 1796;
var quickView = true;
var reduction_percent = 0;
var reduction_price = 0;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var specific_currency = false;
var specific_price = 0;
var static_token = 'c4995744c9bff2e8158c3c8bf59fbd5f';
var stf_msg_error = 'Su email no ha podido ser enviado. Por favor, compruebe la dirección de correo electrónico e inténtelo de nuevo.';
var stf_msg_required = 'No ha rellenado los campos obligatorios';
var stf_msg_success = 'Tu e-mail ha sido enviado con éxito';
var stf_msg_title = 'Enviar a un amigo';
var stf_secure_key = '4792763e910ab6172b2ab16d7d8044df';
var stock_management = 1;
var taxRate = 0;
var token = 'c4995744c9bff2e8158c3c8bf59fbd5f';
var upToTxt = 'Up to';
var uploading_in_progress = 'Uploading in progress, please be patient.';
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


<script type="text/javascript">
    //<![CDATA[
    var listdeal = [];
    //]]>
</script>




<script type="text/javascript">
    //<![CDATA[
    var listdeal = [];
    //]]>
</script>

			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	</div>

		</div>
				</div>
			<div class="columns-container">
			  <div id="columns" class="container">
					<div class="row">

														 <!-- Sidebar -->
								<div id="sidebar" class="column hidden">

								</div>
								 <!-- End of Sidebar -->





						<!-- Center Column -->
						<div id="center_column" class="column col-sm-12">








<div itemscope itemtype="http://schema.org/Product" class="product-wrap">
	<div class="row">
					    				<div class="col-sm-12" id="product_full">
		<div class="row">
									<!-- left infos-->
		<div class="primary_block">
			<div class="pb-left-column col-lg-5 col-md-5 col-sm-12 col-xs-12">

				<!-- product img-->
				<div id="image-block">
											<div class="label-box">
															<span class="new-box">
									<span class="new-label">Nuevo</span>
								</span>
						</div>

					<span id="view_full_size">

								<img id="bigpic" itemprop="image" data-src="url:(../imgArticulos/{{$articulos[0]->imagen}})" data-zoom-image="../imgArticulos/{{$articulos[0]->imagen}}"  src="../imgArticulos/{{$articulos[0]->imagen}}" title="Aliquam Leberkas" alt="Aliquam Leberkas" width="570" height="570"/>


						</span>




				</div> <!-- end image-block -->
				<!-- thumbnails -->
									<div id="views_block" class="clearfix"> </div>
									<!-- end views-block -->
					<!-- end thumbnails -->

									<p class="resetimg clear no-print">
						<span id="wrapResetImages">
							<a href="1-faded-short-sleeves-tshirt.html" name="resetImages">
								<i class="fa fa-repeat"></i>
								Display all pictures
							</a>
						</span>
					</p>
					</div> <!-- end pb-left-column -->
			<!-- end left infos-->

			<!-- Right infos -->
			<div class="pb-right-column col-lg-5 col-md-5 col-sm-8 col-xs-12">

				<div class="product-info">



				<h1 class="product_name" itemprop="name">{{$articulos[0]->nombre}}</h1>

				<!--<div class="product-code">
					<label>Product code : </label>
					<span>demo_1</span>
				</div>
				-->
				<!-- h=displayRightColumnProduct / Product Comments -->
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

						<ul class="comments_advices">
							<li class="nb-comments">
								<a href="#idTab5" class="reviews">
									 <span itemprop="reviewCount">
									  											2 Vistas
									  </span>
								</a>
							</li>
						</ul>
					</div>

				<div class="content_prices">
											<!-- prices -->
						<div class="price">
							<p class="our_price_display" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<link itemprop="availability" href="http://schema.org/InStock"/>																	<span id="our_price_display" itemprop="price">$55.000</span>
									 										Cop.
							  <meta itemprop="priceCurrency" content="USD" />

															</p>

							<p id="reduction_amount"  style="display:none">
								<span id="reduction_amount_display">
																</span>
							</p>
							<p id="old_price" class="hidden">

									<span id="old_price_display"></span>
									 tax excl.
															</p>
							<p id="reduction_percent"  style="display:none;">
								<span id="reduction_percent_display">
																	</span>

													</div>
					</div>
					<p id="availability_statut">
						<span id="availability_label">Disponible:</span>
						<span id="availability_value">Ok</span>
					</p>

					<p class="warning_inline" id="last_quantities" style="display: none" >Warning: Last items in stock!</p>
								<p id="availability_date" style="display: none;">
					<span id="availability_date_label">Availability date:</span>
					<span id="availability_date_value"></span>
				</p>
				<!-- Out of stock hook -->
				<div id="oosHook" style="display: none;">

				</div>
				-->

									<div id="short_description_block">
						<label>DESCRIPCIÓN</label>
													<div id="short_description_content" class="rte align_justify" itemprop="description"><p>Cóctelera en acero inoxidable, profesional de 16 onzas, con medidor y tapa en vidrio, con al cual podras ver el color y densidad de tus mezclas, antes de servir</p></div>


											</div> <!-- end short_description_block -->


				<!--
					<p id="pQuantityAvailable">Availability:
						<span id="quantityAvailable"> 1796</span>
						<span  style="display: none;" id="quantityAvailableTxt">Item</span>
						<span  id="quantityAvailableTxtMultiple">Items</span>
					</p>
								-->

								<!-- COMPRAR form-->
				<form id="buy_block" action="http://prestashop.flytheme.net/sp_market/es/cart" method="post">
					<!-- hidden datas -->
					<p class="hidden">
						<input type="hidden" name="token" value="c4995744c9bff2e8158c3c8bf59fbd5f" />
						<input type="hidden" name="id_product" value="1" id="product_page_product_id" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
					</p>
					<div class="box-info-product"> <!-- end box-cart-bottom -->
					</div> <!-- end box-info-product -->
				</form>


				<!-- h=displayRightColumnProduct / Product Comments -->
									<div class="socials">
						<div class="footer-social">
<h3 class="title">Follow us :</h3>
<div class="socials">
	  <a href="https://www.facebook.com/MagenTech" class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a>	   <a href="https://twitter.com/magentech" class="twitter" target="_blank" ><i class="fa fa-twitter"></i></a>		   <a href="https://plus.google.com/u/0/+SmartAddons-Joomla-Magento-WordPress/posts" class="google" target="_blank"><i class="fa fa-google-plus"></i></a>		   <a href="https://www.pinterest.com/magentech" class="pinterest" target="_blank" ><i class="fa fa-pinterest"></i></a>

</div>
</div>

					</div>

				</div>

			</div>
			<!-- end Center infos-->
										<div class="col-md-2 col-sm-4 col-xs-12 custom-column">
					<div class="block-customize">

<!-- SP Custom Html -->

                        <div class="sp_customhtml_8_1506213939726877670
		 spcustom_html">



					<div class="promotion2">
							<div class="item item1">
							<div class="icon">Icon</div>
							<div class="text">
							<h2><a href="#">SMARTSHOT AHORRAS!</a></h2>
							</div>
							</div>
							<div class="item item2">
							<div class="icon">Icon</div>
							<div class="text">
							<h2><a href="#">RÁPIDO ENVIO</a></h2>
							</div>
							</div>
							<div class="item item3">
							<div class="icon">Icon</div>
							<div class="text">
							<h2><a href="#">DISPONIBLE
							24/7</a></h2>
							</div>
							</div>
							<div class="item item4">
							<div class="icon">Icon</div>
							<div class="text">
							<h2><a href="#">SEGURO</a></h2>
							</div>
							</div>
							</div>

                    </div>
    <!-- /SP Custom Html -->


					</div>
				</div>

		</div> <!-- end primary_block -->
	</div>


		<div class="moreinfo_block clearfix">
			<ul class="nav nav-tabs tab-info page-product-heading">
				<li class="first active"><a data-toggle="tab" href="#idTab1">Descripción</a></li>				<li ><a data-toggle="tab" href="#idTab2">Detalles</a></li>
						<li class=""><a data-toggle="tab" href="#idTab3" >Comentarios</a></li>
						</ul>
			<div class="tab-content">
									<!-- More info -->
					<section id="idTab1" class="page-product-box active">
							<!-- full description -->
							<div  class="rte"><p>Cóctelera en acero inoxidable, profesional de 16 onzas, con medidor y tapa en vidrio, con al cual podras ver el color y densidad de tus mezclas, antes de servir</p></div>
					</section>
					<!--end  More info -->

									<!-- Data sheet -->
					<section id="idTab2" class="page-product-box">
						<table class="table-data-sheet">
														<tr class="odd">
																<td>Material</td>
								<td>Cotton</td>
															</tr>
														<tr class="even">
																<td>Styles</td>
								<td>Casual</td>
															</tr>
														<tr class="odd">
																<td>Properties</td>
								<td>Short Sleeve</td>
															</tr>
													</table>
					</section>
				<!--end Data sheet -->

				<!--HOOK_PRODUCT_TAB -->
					<section id="idTab3" class="page-product-box">

						<script type="text/javascript">
var productcomments_controller_url = '../module/productcomments/default.html';
var confirm_report_message = '¿Seguro que quieres denunciar este comentario?';
var secure_key = 'e52bc577064e334121cf82375ad5fce9';
var productcomments_url_rewrite = '1';
var productcomment_added = '¡Tu comentario ha sido añadido!';
var productcomment_added_moderation = 'Tu comentario ha sido añadido y estará disponible una vez lo apruebe un moderador.';
var productcomment_title = 'Nuevo comentario';
var productcomment_ok = 'ok';
var moderation_active = 1;
</script>

<div id="idTab5">
	<div id="product_comments_block_tab">
									<div class="comment clearfix">
				<div class="comment_author">
					<span>grado&nbsp</span>
					<div class="star_content clearfix">
																		<div class="star star_on"></div>
																								<div class="star star_on"></div>
																								<div class="star star_on"></div>
																								<div class="star star_on"></div>
																								<div class="star"></div>
																</div>
					<div class="comment_author_infos">
						<strong>jjhkjl</strong><br/>
						<em>2015-12-15</em>
					</div>
				</div>
				<div class="comment_details">
					<h4 class="title_block">n,bn,</h4>
					<p>vgjhgjk</p>
					<ul>
																	</ul>
				</div>
			</div>
											<div class="comment clearfix">
				<div class="comment_author">
					<span>grado&nbsp</span>
					<div class="star_content clearfix">
																		<div class="star star_on"></div>
																								<div class="star star_on"></div>
																								<div class="star star_on"></div>
																								<div class="star"></div>
																								<div class="star"></div>
																</div>
					<div class="comment_author_infos">
						<strong>etretert</strong><br/>
						<em>2015-12-15</em>
					</div>
				</div>
				<div class="comment_details">
					<h4 class="title_block">dfsgdfh</h4>
					<p>ssdgsdfgsgsđjhgkjgkluyiytu</p>
					<ul>
																	</ul>
				</div>
			</div>
					        		<p class="align_center">
			<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">Escriba su comentario !</a>
		</p>

	</div>
</div>

<!-- Fancybox -->
<div style="display:none">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#">
			<h2 class="title">Escriba su comentario</h2>
						<div class="product clearfix">
				<img src="../../6-medium_default/faded-short-sleeves-tshirt.jpg" height="150" width="150" alt="" />
				<div class="product_desc">
					<p class="product_name"><strong></strong></p>

				</div>
			</div>
						<div class="new_comment_form_content">
				<h2>Escriba su comentario</h2>
				<div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
					<ul></ul>
				</div>
									<ul id="criterions_list">
											<li>
							<label>Quality</label>
							<div class="star_content">
								<input class="star" type="radio" name="criterion[1]" value="1" />
								<input class="star" type="radio" name="criterion[1]" value="2" />
								<input class="star" type="radio" name="criterion[1]" value="3" />
								<input class="star" type="radio" name="criterion[1]" value="4" />
								<input class="star" type="radio" name="criterion[1]" value="5" checked="checked" />
							</div>
							<div class="clearfix"></div>
						</li>
										</ul>
								<label for="comment_title">Título de su comentario<sup class="required">*</sup></label>
				<input id="comment_title" name="title" type="text" value=""/>

				<label for="content">Su comentario<sup class="required">*</sup></label>
				<textarea id="content" name="content"></textarea>

								<label>Su nombre<sup class="required">*</sup></label>
				<input id="commentCustomerName" name="customer_name" type="text" value=""/>

				<div id="new_comment_form_footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value='1' />
					<p class="fl required"><sup>*</sup> Campos obligatorios</p>
					<p class="fr">
						<button id="submitNewMessage" name="submitMessage" type="submit">Enviar</button>&nbsp;
						total&nbsp;<a href="#" onclick="$.fancybox.close();">Cancelar</a>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->
					</section>
				<!--end HOOK_PRODUCT_TAB -->






											</div>
		</div>




		<!-- h=displayFooterProduct | Products in the same category  -->
		<section class="blockproductscategory block ">
	<h3 class="title_block">Productos Relacionados</h3>
	<div id="productscategory_list" class="clearfix">
		<ul class="related-product product_list grid clearfix">
		 			<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="3-printed-dress.html" title="Maecenas Sirloin">
									<img class="img_1" src="../../16-home_default/printed-dress.jpg"  alt="Maecenas Sirloin" />
										<img
		class="img_0"
		src="../../17-home_default/printed-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="3-printed-dress.html" title="Quick view" data-rel="3-printed-dress.html">
								Vista Rápida
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="3-printed-dress.html" title="Maecenas Sirloin">Maecenas Sirloin</a>
						</h5>

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
									$26.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order8aa3.html?add=1&amp;id_product=3&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="3">
												COMPRAR
											</a>

							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="4-printed-dress.html" title="Nulla tenderloin">
									<img class="img_1" src="../../21-home_default/printed-dress.jpg"  alt="Nulla tenderloin" />
										<img
		class="img_0"
		src="../../22-home_default/printed-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="4-printed-dress.html" title="Quick view" data-rel="4-printed-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="4-printed-dress.html" title="Nulla tenderloin">Nulla tenderloin</a>
						</h5>

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
									$50.99								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../orderc2ff.html?add=1&amp;id_product=4&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="4">
												COMPRAR
											</a>


							</div>
					</div>
			<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="5-printed-summer-dress.html" title="Cauris venenatis">
									<img class="img_1" src="../../28-home_default/printed-summer-dress.jpg"  alt="Cauris venenatis" />
										<img
		class="img_0"
		src="../../26-home_default/printed-summer-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="5-printed-summer-dress.html" title="Quick view" data-rel="5-printed-summer-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="5-printed-summer-dress.html" title="Cauris venenatis">Cauris venenatis</a>
						</h5>

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
									$30.51								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order62d3.html?add=1&amp;id_product=5&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="5">
												COMPRAR
											</a>
																																							</div>
					</div>
										<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="6-printed-summer-dress.html" title="Dullam hendrerit">
									<img class="img_1" src="../../34-home_default/printed-summer-dress.jpg"  alt="Dullam hendrerit" />
										<img
		class="img_0"
		src="../../31-home_default/printed-summer-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="6-printed-summer-dress.html" title="Quick view" data-rel="6-printed-summer-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="6-printed-summer-dress.html" title="Dullam hendrerit">Dullam hendrerit</a>
						</h5>

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
									$30.50								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../ordere327.html?add=1&amp;id_product=6&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="6">
												COMPRAR
											</a>
							</div>
					</div>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="7-printed-chiffon-dress.html" title="Hamburger ribeye">
									<img class="img_1" src="../../40-home_default/printed-chiffon-dress.jpg"  alt="Hamburger ribeye" />
										<img
		class="img_0"
		src="../../36-home_default/printed-chiffon-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

									<span class="sale-box">Sale</span>
																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="7-printed-chiffon-dress.html" title="Quick view" data-rel="7-printed-chiffon-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="7-printed-chiffon-dress.html" title="Hamburger ribeye">Hamburger ribeye</a>
						</h5>

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
									$16.40								</span>
								<meta itemprop="priceCurrency" content="USD" />

									<span class="old-price product-price">
										$20.50
									</span>

									<!--										<span class="price-percent-reduction">-20%</span>
									-->


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order0f19.html?add=1&amp;id_product=7&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="7">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_7" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="7-printed-chiffon-dress.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="7">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="8-printed-dress.html" title="Etiam Andouille">
									<img class="img_1" src="../../41-home_default/printed-dress.jpg"  alt="Etiam Andouille" />
										<img
		class="img_0"
		src="../../42-home_default/printed-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="8-printed-dress.html" title="Quick view" data-rel="8-printed-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="8-printed-dress.html" title="Etiam Andouille">Etiam Andouille</a>
						</h5>

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
									$50.99								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../orderc4c4.html?add=1&amp;id_product=8&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="8">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_8" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="8-printed-dress.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="8">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="9-printed-dress.html" title="Sausage leberkas">
									<img class="img_1" src="../../46-home_default/printed-dress.jpg"  alt="Sausage leberkas" />
										<img
		class="img_0"
		src="../../47-home_default/printed-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="9-printed-dress.html" title="Quick view" data-rel="9-printed-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="9-printed-dress.html" title="Sausage leberkas">Sausage leberkas</a>
						</h5>

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
									$50.99								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../ordere04f.html?add=1&amp;id_product=9&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="9">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_9" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="9-printed-dress.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="9">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="10-printed-chiffon-dress.html" title="Cupim turducken">
									<img class="img_1" src="../../51-home_default/printed-chiffon-dress.jpg"  alt="Cupim turducken" />
										<img
		class="img_0"
		src="../../52-home_default/printed-chiffon-dress.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

									<span class="sale-box">Sale</span>
																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="10-printed-chiffon-dress.html" title="Quick view" data-rel="10-printed-chiffon-dress.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="10-printed-chiffon-dress.html" title="Cupim turducken">Cupim turducken</a>
						</h5>

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
									$16.40								</span>
								<meta itemprop="priceCurrency" content="USD" />

									<span class="old-price product-price">
										$20.50
									</span>

									<!--										<span class="price-percent-reduction">-20%</span>
									-->


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../ordera5cc.html?add=1&amp;id_product=10&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="10">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_10" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="10-printed-chiffon-dress.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="10">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="2-blouse.html" title="Aliquam lobortis">
									<img class="img_1" src="../../11-home_default/blouse.jpg"  alt="Aliquam lobortis" />
										<img
		class="img_0"
		src="../../12-home_default/blouse.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="2-blouse.html" title="Quick view" data-rel="2-blouse.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="2-blouse.html" title="Aliquam lobortis">Aliquam lobortis</a>
						</h5>

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
									$27.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../ordera9c3.html?add=1&amp;id_product=2&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="2">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_2" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="2-blouse.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="2">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="55-faded-short-sleeves-tshirt.html" title="Keatloaf nostrud">
									<img class="img_1" src="../../273-home_default/faded-short-sleeves-tshirt.jpg"  alt="Keatloaf nostrud" />
										<img
		class="img_0"
		src="../../274-home_default/faded-short-sleeves-tshirt.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="55-faded-short-sleeves-tshirt.html" title="Quick view" data-rel="55-faded-short-sleeves-tshirt.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="55-faded-short-sleeves-tshirt.html" title="Keatloaf nostrud">Keatloaf nostrud</a>
						</h5>

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
									$70.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order2e06.html?add=1&amp;id_product=55&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="55">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_55" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '55', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="55-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="55">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="56-faded-short-sleeves-tshirt.html" title="Oausage consectet">
									<img class="img_1" src="../../279-home_default/faded-short-sleeves-tshirt.jpg"  alt="Oausage consectet" />
										<img
		class="img_0"
		src="../../278-home_default/faded-short-sleeves-tshirt.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="56-faded-short-sleeves-tshirt.html" title="Quick view" data-rel="56-faded-short-sleeves-tshirt.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="56-faded-short-sleeves-tshirt.html" title="Oausage consectet">Oausage consectet</a>
						</h5>

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
									$90.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../orderc99b.html?add=1&amp;id_product=56&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="56">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_56" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '56', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a><i class="fa fa-bar-chart"></i></a>

							</div>
					</div>


					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="57-faded-short-sleeves-tshirt.html" title="Piusmod shoulder">
									<img class="img_1" src="../../285-home_default/faded-short-sleeves-tshirt.jpg"  alt="Piusmod shoulder" />
										<img
		class="img_0"
		src="../../283-home_default/faded-short-sleeves-tshirt.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="57-faded-short-sleeves-tshirt.html" title="Quick view" data-rel="57-faded-short-sleeves-tshirt.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="57-faded-short-sleeves-tshirt.html" title="Piusmod shoulder">Piusmod shoulder</a>
						</h5>

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
									$66.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order61d1.html?add=1&amp;id_product=57&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="57">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_57" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '57', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="57-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="57">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="58-faded-short-sleeves-tshirt.html" title="Meatball cowbeef">
									<img class="img_1" src="../../288-home_default/faded-short-sleeves-tshirt.jpg"  alt="Meatball cowbeef" />
										<img
		class="img_0"
		src="../../289-home_default/faded-short-sleeves-tshirt.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="58-faded-short-sleeves-tshirt.html" title="Quick view" data-rel="58-faded-short-sleeves-tshirt.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="58-faded-short-sleeves-tshirt.html" title="Meatball cowbeef">Meatball cowbeef</a>
						</h5>

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
									$89.00								</span>
								<meta itemprop="priceCurrency" content="USD" />


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../orderc321.html?add=1&amp;id_product=58&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="58">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_58" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '58', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



																	<a class="add_to_compare" href="58-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare" title="Add to compare" data-id-product="58">
										<i class="fa fa-bar-chart"></i></a>
									</a>


							</div>
					</div>


			</li>
					<li class="product-box item">
				<div class="product-container">

					<div class="left-block">
						<div class="product-image-container">
							<!--   Slider Images Product   -->
							<div class="product-image">
								<a href="59-faded-short-sleeves-tshirt.html" title="Cillum eiusmod">
									<img class="img_1" src="../../293-home_default/faded-short-sleeves-tshirt.jpg"  alt="Cillum eiusmod" />
										<img
		class="img_0"
		src="../../294-home_default/faded-short-sleeves-tshirt.jpg"
		alt=""
		itemprop="image" />

								</a>
							</div>

															<div class="label-box">
																			<span class="new-box">New</span>

									<span class="sale-box">Sale</span>
																	</div>

							<!--   Enable quick view   -->
							<a class="quick-view" href="59-faded-short-sleeves-tshirt.html" title="Quick view" data-rel="59-faded-short-sleeves-tshirt.html">
								Quick View
							</a>

						</div>


					</div>

					<div class="right-block">


						<!--Product Name-->
						<h5 class="product-name">
							<a href="59-faded-short-sleeves-tshirt.html" title="Cillum eiusmod">Cillum eiusmod</a>
						</h5>

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
									$96.80								</span>
								<meta itemprop="priceCurrency" content="USD" />

									<span class="old-price product-price">
										$110.00
									</span>

									<!--										<span class="price-percent-reduction">-12%</span>
									-->


													</div>


						<!--Product Buttons-->
							<div class="button-container">

																																						<a class=" cart_button ajax_add_to_cart_button" href="../order5101.html?add=1&amp;id_product=59&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Añadir al carrito" data-id-product="59">
												COMPRAR
											</a>


	<a class="addToWishlist wishlistProd_59" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '59', false, 1); return false;">
		<i class="fa fa-heart"></i>

									</a>


							</div>
					</div>
		</ul>
	</div>
</section>

		<!-- Upsell Products-->

                                                            </div>
                                <!-- End item-->

                </div>
                            <script type="text/javascript">
                    //<![CDATA[
                    jQuery(document).ready(function ($) {
						;(function (element) {
							var $element = $(element),
									$extraslider = $(".extraslider-inner", $element),
									_delay = 1000,
									_duration = 1000,
									_effect = "none";

							$extraslider.on("initialized.owl.carousel", function () {
								var $item_active = $(".owl-item.active", $element);
								if ($item_active.length > 1 && _effect != "none") {
									_getAnimate($item_active);
								}
								else {
									var $item = $(".owl-item", $element);

									$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

								}


																	$(".owl-controls", $element).insertBefore($extraslider);
									$(".owl-dots", $element).insertAfter($(".owl-prev", $element));

							});

							$extraslider.owlCarousel({
								margin: 30,
								slideBy: 1,
								autoplay: false,
								autoplay_hover_pause: false,
								autoplay_timeout: 1000,
								autoplaySpeed: 1000,
								smartSpeed: 1000,
								startPosition: 0,
								mouseDrag: true,
								touchDrag:true,
								pullDrag:true,
								autoWidth: false,
								responsive: {
									0: {items: 1},
									480: {items:2},
									768: {items:3},
									992: {items:4},
									1200: {items: 4}
								},
								dotClass: "owl-dot",
								dotsClass: "owl-dots",
								dots: false,
								dotsSpeed:1000,
								nav: true,
								loop: false,
								navSpeed: 1000,
								navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
								navClass: ["owl-prev", "owl-next"]

							});

							$extraslider.on("translate.owl.carousel", function (e) {

								var $item_active = $(".owl-item.active", $element);
								_UngetAnimate($item_active);
								_getAnimate($item_active);
							});

							$extraslider.on("translated.owl.carousel", function (e) {


								var $item_active = $(".owl-item.active", $element);
								var $item = $(".owl-item", $element);

								_UngetAnimate($item);

								if ($item_active.length > 1 && _effect != "none") {
									_getAnimate($item_active);
								} else {

										 $item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

								}
							});

							function _getAnimate($el) {
								if (_effect == "none") return;
								//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
								$extraslider.removeClass("extra-animate");
								$el.each(function (i) {
									var $_el = $(this);
									$(this).css({
										"-webkit-animation": _effect + " " + _duration + "ms ease both",
										"-moz-animation": _effect + " " + _duration + "ms ease both",
										"-o-animation": _effect + " " + _duration + "ms ease both",
										"animation": _effect + " " + _duration + "ms ease both",
										"-webkit-animation-delay": +i * _delay + "ms",
										"-moz-animation-delay": +i * _delay + "ms",
										"-o-animation-delay": +i * _delay + "ms",
										"animation-delay": +i * _delay + "ms",
										"opacity": 1
									}).animate({
										opacity: 1
									});

									if (i == $el.size() - 1) {
										$extraslider.addClass("extra-animate");
									}
								});
							}

							function _UngetAnimate($el) {
								$el.each(function (i) {
									$(this).css({
										"animation": "",
										"-webkit-animation": "",
										"-moz-animation": "",
										"-o-animation": "",
										"opacity": 0
									});
								});
							}

						})("#sp_extra_slider_2_1506213939348183265");
					});
                    //]]>
                </script>
                    </div>

    <!-- /SP Extra Slider -->

		<!-- description & features -->



</div>

<script type="text/javascript">
// <![CDATA[
	$('#thumbs_list').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  vertical: false,
	  infinite: false,
	  arrows: true,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3
		  }
		},
		{
		  breakpoint: 992,
		  settings: {
			slidesToShow: 5,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		}]
	});

// ]]>
</script>

<script type="text/javascript">

	jQuery(document).ready(function($) {
		var slider_post = $(".related-product");
		slider_post.owlCarousel({
			responsive:{
				0:{
					items:1
				},
				480:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:4
				},
				1200:{
					items:4
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
			margin:30,
		});

	});

</script>


<script>
	$('#bigpic').elevateZoom({
		zoomType: "window",
		cursor: "crosshair",
		zoomWindowFadeIn: 500,
		zoomWindowFadeOut: 750
	});
</script>




	</div>
</div> <!-- itemscope product wrapper -->

<script type="text/javascript">
	$(document).ready(function(){
		$('#product ul.tab-info li:first, #product .tab-content section:first').addClass('active');
	});
</script>



					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->


							</div>
						</div>

										@endsection
