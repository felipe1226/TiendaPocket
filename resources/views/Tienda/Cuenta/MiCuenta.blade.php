
@section('content')

<!DOCTYPE HTML>

<!--<html lang="es">
	<head>
		<title>My account - SP Market</title>

		<meta charset="utf-8" />
        <meta name="generator" content="PrestaShop" />
		<meta name="format-detection" content="telephone=no">
		<meta name="robots" content="index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="/sp_market/img/favicon.ico?1474943838" />
		<link rel="shortcut icon" type="image/x-icon" href="/sp_market/img/favicon.ico?1474943838" />

				 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

		<meta name="apple-mobile-web-app-capable" content="YES" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />-->

				<link href="http://prestashop.flytheme.net/sp_market/themes/sp_market/css/fonts/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/css/global.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/css/autoload/jquery.mCustomScrollbar.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/css/autoload/uniform.default.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/modules/spthemeconfigurator/views/css/front/sp-cpanel.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/css/bootstrap/bootstrap.min.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/modules/spthemeconfigurator/views/css/front/configCss-1.css" type="text/css" media="all" />
							<link rel="stylesheet" href="../themes/sp_market/css/theme-f4a137.css" type="text/css" media="all" />
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
var baseDir = 'http://prestashop.flytheme.net/sp_market/';
var baseUri = 'http://prestashop.flytheme.net/sp_market/';
var comparator_max_item = 3;
var comparedProductsIds = [];
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
var generated_date = 1513797153;
var id_lang = 4;
var img_dir = 'http://prestashop.flytheme.net/sp_market/themes/sp_market/img/';
var instantsearch = false;
var isGuest = 0;
var isLogged = 1;
var isMobile = false;
var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
var max_item = 'You cannot add more than 3 product(s) to the product comparison';
var min_item = 'Please select at least one product';
var mywishlist_url = 'http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist';
var page_name = 'my-account';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var static_token = '4c1dda483cbe490e55a9528eee9305f5';
var token = 'd52f0cf278efb5700adb0175c47ad4fe';
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
        <!--[if IE]> <link rel="stylesheet" href="http://prestashop.flytheme.net/sp_market/themes/sp_market/css/ie9.css" type="text/css" media="all" /><![endif]-->
		<!-- ADD RTL CLASSS -->
	</head>

	<body id="my-account"   itemscope itemtype="http://schema.org/WebPage" class="blog-small_image content-v1  my-account   lang_es patternnone layout-full slider-imgpr-0  secondImage-0" data-content="content-v1">

		<div id="wrapper" >
			 <!-- Header -->
			 <div class="header-container">
									<header id="header" class="header_v1">
	<div class="header-top clearfix">
		<div class="container">
			<div class="row">
				<div id="block_left" class="col-sm-6 col-xs-6">
					<!-- Block languages module -->
	<div id="languages-block-top" class="languages-block">
																								<div class="current">
					<img src="http://prestashop.flytheme.net/sp_market/img/l/4.jpg" alt="es" />
					<span>Español</span>
				</div>
							<ul id="first-languages" class="languages-block_ul toogle_content">
							<li >
																				<a href="http://prestashop.flytheme.net/sp_market/en/my-account" title="English">
															<span><img src="http://prestashop.flytheme.net/sp_market/img/l/1.jpg" alt="en"  />
						English</span>
									</a>
								</li>
							<li >
																				<a href="http://prestashop.flytheme.net/sp_market/ar/my-account" title="Arabic">
															<span><img src="http://prestashop.flytheme.net/sp_market/img/l/2.jpg" alt="ar"  />
						Arabic</span>
									</a>
								</li>
							<li >
																				<a href="http://prestashop.flytheme.net/sp_market/fr/my-account" title="Français">
															<span><img src="http://prestashop.flytheme.net/sp_market/img/l/3.jpg" alt="fr"  />
						Français</span>
									</a>
								</li>
							<li class="selected">
										<span><img src="http://prestashop.flytheme.net/sp_market/img/l/4.jpg" alt="es"  />
						Español</span>
								</li>
					</ul>
	</div>
<!-- /Block languages module -->

<!-- Block currencies module -->
	<div id="currencies-block-top">
		<form id="setCurrency" action="/sp_market/es/my-account" method="post">
			<div class="current">
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
				<!--<span class="cur-label">Currency :</span>-->
																		<span><!--$--> USD</span>							</div>
			<ul id="first-currencies" class="currencies_ul toogle_content">
															<li>
							<a href="javascript:setCurrency(2);" rel="nofollow" title="EUR">
								EUR
							</a>
						</li>

															<li class="selected">
							<span>
								USD
							</span>
						</li>

							</ul>
		</form>
	</div>
<!-- /Block currencies module -->
				</div>

				<div id="block_right" class="col-sm-6 col-xs-6">
					<!-- SP Block user information module NAV  -->

<div id="user_infoblock-top" class="header_user_info">
	<ul>
		<li class="account">
			<a href="http://prestashop.flytheme.net/sp_market/es/my-account" title="Mi cuenta" rel="nofollow">
				<span>Mi cuenta</span>
			</a>
		</li>

		<li class="wishlist">
			<a href="http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist" title="Mi deseos" rel="nofollow">
				<span>Mi deseos</span>
			</a>
		</li>

		<li class="checkout">
			<a href="http://prestashop.flytheme.net/sp_market/es/order" title="Revisa" >
				<span>Revisa</span>
			</a>
		</li>

					<li class="logout">
				<a href="http://prestashop.flytheme.net/sp_market/es/?mylogout=" rel="nofollow" title="Cerrar sesión">
					<span>Desconectar</span>
				</a>
			</li>
			</ul>
</div>

<!-- /SP Block usmodule NAV -->

				</div>
			</div>
		</div>
	</div>
	<div class="header-center">
		<div class="container">
				<div class="row">
					<div id="header_logo" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<a class="logo" href="http://prestashop.flytheme.net/sp_market/" title="SP Market">
							<img  src="http://prestashop.flytheme.net/sp_market/img/sp-g3shop-logo-1472003784.jpg" alt="SP Market" width="143" height="42"/>
						</a>
					</div>

					<div id="header_search" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 hidden-xs">

                                    <div class="sp_searchpro ">

                <div id="sp_search_pro_1" class="spr-container spr-preload"><!--<![endif]-->


						<form class="sprsearch-form  show-box" method="get" action="http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch">
							<input type="hidden" name="fc" value="module"/>
							<input type="hidden" name="module" value="spsearchpro"/>
							<input type="hidden" name="controller" value="catesearch"/>
							<input type="hidden" name="orderby" value="name"/>
							<input type="hidden" name="orderway" value="ASC"/>


																	<input type="hidden" name="cat_id" value="2,152,3,4,5,6,7,16,8,9,10,11,18,12,20,21,22,23,13,25,26,27,28,40,41,47,53,59,65,136,137,138,139,66,42,43,17,155,173,140,141,142,143,67,72,68,97,98,99,100,101,69,102,103,104,105,106,197,198,199,196,73,82,200,201,202,74,83,84,85,86,87,88,89,203,248,153,167,166,204,205,206,168,169,207,208,209,210,170,171,211,212,213,214,215,216,154,177,239,240,241,245,246,247,242,243,244,178,189,190,191,159,160,161,162,163,164,165,175,176,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,192,193,194,195">

																						<div class="spr_selector">
								<select class="spr_select">


										<option value="2,152,3,4,5,6,7,16,8,9,10,11,18,12,20,21,22,23,13,25,26,27,28,40,41,47,53,59,65,136,137,138,139,66,42,43,17,155,173,140,141,142,143,67,72,68,97,98,99,100,101,69,102,103,104,105,106,197,198,199,196,73,82,200,201,202,74,83,84,85,86,87,88,89,203,248,153,167,166,204,205,206,168,169,207,208,209,210,170,171,211,212,213,214,215,216,154,177,239,240,241,245,246,247,242,243,244,178,189,190,191,159,160,161,162,163,164,165,175,176,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,192,193,194,195">
																							Todas categorias
																					</option>

										<option value="2">
																							 - Home
																					</option>

										<option value="152">
																							 -  - Shop
																					</option>

										<option value="3">
																							 -  -  - Electronics
																					</option>

										<option value="4">
																							 -  -  -  - Smartphones &amp; Tablets
																					</option>

										<option value="5">
																							 -  -  -  -  - Accessories for iPhone
																					</option>

										<option value="6">
																							 -  -  -  -  - Accessories For iPad
																					</option>

										<option value="7">
																							 -  -  -  -  - Accessories for Tablet PC
																					</option>

										<option value="16">
																							 -  -  -  -  - Tablet PC
																					</option>

										<option value="8">
																							 -  -  -  - Sports &amp; Outdoor
																					</option>

										<option value="9">
																							 -  -  -  -  - Golf Supplies
																					</option>

										<option value="10">
																							 -  -  -  -  - Outdoor &amp; Traveling Supplies
																					</option>

										<option value="11">
																							 -  -  -  -  - Camping &amp; Hiking
																					</option>

										<option value="18">
																							 -  -  -  -  - Fishing
																					</option>

										<option value="12">
																							 -  -  -  - Automotive &amp; Motorcycle
																					</option>

										<option value="20">
																							 -  -  -  -  - More Car Accessories
																					</option>

										<option value="21">
																							 -  -  -  -  - Car Alarms and Security
																					</option>

										<option value="22">
																							 -  -  -  -  - Car Audio &amp; Speakers
																					</option>

										<option value="23">
																							 -  -  -  -  - Gadgets &amp; Auto Parts
																					</option>

										<option value="13">
																							 -  -  -  - Electronics
																					</option>

										<option value="25">
																							 -  -  -  -  - Batteries &amp; Chargers
																					</option>

										<option value="26">
																							 -  -  -  -  - Headphones, Headsets
																					</option>

										<option value="27">
																							 -  -  -  -  - Home Audio
																					</option>

										<option value="28">
																							 -  -  -  -  - MP3 Players &amp; Accessories
																					</option>

										<option value="40">
																							 -  -  -  - Toys &amp; Hobbies
																					</option>

										<option value="41">
																							 -  -  -  -  - Walkera
																					</option>

										<option value="47">
																							 -  -  -  -  - FPV system &amp; Parts
																					</option>

										<option value="53">
																							 -  -  -  -  - RC Cars &amp; Parts
																					</option>

										<option value="59">
																							 -  -  -  -  - Helicopters &amp; Parts
																					</option>

										<option value="65">
																							 -  -  -  - Holiday Supplies &amp; Gifts
																					</option>

										<option value="136">
																							 -  -  -  -  - Gift &amp; Lifestyle Gadgets
																					</option>

										<option value="137">
																							 -  -  -  -  - Gift for Man
																					</option>

										<option value="138">
																							 -  -  -  -  - Gift for Woman
																					</option>

										<option value="139">
																							 -  -  -  -  - Lighter &amp; Cigar Supplies
																					</option>

										<option value="66">
																							 -  -  -  - Health &amp; Beauty
																					</option>

										<option value="42">
																							 -  -  -  -  - Bath &amp; Body
																					</option>

										<option value="43">
																							 -  -  -  -  - Shaving &amp; Hair Removal
																					</option>

										<option value="17">
																							 -  -  -  -  - Fragrances
																					</option>

										<option value="155">
																							 -  -  -  -  - Salon &amp; Spa Equipment
																					</option>

										<option value="173">
																							 -  -  -  - Jewelry &amp; Watches
																					</option>

										<option value="140">
																							 -  -  -  -  - Men Watches
																					</option>

										<option value="141">
																							 -  -  -  -  - Wedding Rings
																					</option>

										<option value="142">
																							 -  -  -  -  - Earrings
																					</option>

										<option value="143">
																							 -  -  -  -  - Necklaces
																					</option>

										<option value="67">
																							 -  -  - Smartphones &amp; Tablets
																					</option>

										<option value="72">
																							 -  -  -  - Subcat1
																					</option>

										<option value="68">
																							 -  -  -  -  - Hiking Gear
																					</option>

										<option value="97">
																							 -  -  -  -  -  - Hammock
																					</option>

										<option value="98">
																							 -  -  -  -  -  - Telescope
																					</option>

										<option value="99">
																							 -  -  -  -  -  - Hat
																					</option>

										<option value="100">
																							 -  -  -  -  -  - Tent
																					</option>

										<option value="101">
																							 -  -  -  -  -  - Sleeping Bag
																					</option>

										<option value="69">
																							 -  -  -  -  - Swim Gear
																					</option>

										<option value="102">
																							 -  -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="103">
																							 -  -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="104">
																							 -  -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="105">
																							 -  -  -  -  -  - Swim Accessories
																					</option>

										<option value="106">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="197">
																							 -  -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="198">
																							 -  -  -  -  -  - Camping Lights
																					</option>

										<option value="199">
																							 -  -  -  -  -  - Bicycle Lights
																					</option>

										<option value="196">
																							 -  -  -  - Subcat 2
																					</option>

										<option value="73">
																							 -  -  -  -  - Cycling Gear
																					</option>

										<option value="82">
																							 -  -  -  -  -  - Cycling Protective Gears
																					</option>

										<option value="200">
																							 -  -  -  -  -  - Cycling Accessories
																					</option>

										<option value="201">
																							 -  -  -  -  -  - Cycling Clothing
																					</option>

										<option value="202">
																							 -  -  -  -  -  - Bicycles Frames
																					</option>

										<option value="74">
																							 -  -  -  -  - Swim Gear
																					</option>

										<option value="83">
																							 -  -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="84">
																							 -  -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="85">
																							 -  -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="86">
																							 -  -  -  -  -  - Swim Accessories
																					</option>

										<option value="87">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="88">
																							 -  -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="89">
																							 -  -  -  -  -  - Camping Lights
																					</option>

										<option value="203">
																							 -  -  -  -  -  - Bicycle Lights
																					</option>

										<option value="248">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="153">
																							 -  -  - Healthy &amp; beauty
																					</option>

										<option value="167">
																							 -  -  -  - Cycling Gear
																					</option>

										<option value="166">
																							 -  -  -  -  - Cycling Protective Gears
																					</option>

										<option value="204">
																							 -  -  -  -  - Cycling Accessories
																					</option>

										<option value="205">
																							 -  -  -  -  - Cycling Clothing
																					</option>

										<option value="206">
																							 -  -  -  -  - Bicycles Frames
																					</option>

										<option value="168">
																							 -  -  -  - Camping &amp; Hiking Gear
																					</option>

										<option value="169">
																							 -  -  -  -  - Hammock
																					</option>

										<option value="207">
																							 -  -  -  -  - Telescope
																					</option>

										<option value="208">
																							 -  -  -  -  - Hat
																					</option>

										<option value="209">
																							 -  -  -  -  - Tent
																					</option>

										<option value="210">
																							 -  -  -  -  - Sleeping Bag
																					</option>

										<option value="170">
																							 -  -  -  - Swim Gear
																					</option>

										<option value="171">
																							 -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="211">
																							 -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="212">
																							 -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="213">
																							 -  -  -  -  - Swim Accessories
																					</option>

										<option value="214">
																							 -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="215">
																							 -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="216">
																							 -  -  -  -  - Camping Lights
																					</option>

										<option value="154">
																							 -  -  - Toys &amp; Hobbies
																					</option>

										<option value="177">
																							 -  -  - Computers &amp; Networking
																					</option>

										<option value="239">
																							 -  -  -  - Cycling Clothing
																					</option>

										<option value="240">
																							 -  -  -  - Bicycles Frames
																					</option>

										<option value="241">
																							 -  -  -  - Hammock
																					</option>

										<option value="245">
																							 -  -  -  -  - Scope
																					</option>

										<option value="246">
																							 -  -  -  -  - Bowhunting
																					</option>

										<option value="247">
																							 -  -  -  -  - Decoys
																					</option>

										<option value="242">
																							 -  -  -  - Cycling Accessories
																					</option>

										<option value="243">
																							 -  -  -  - Telescope
																					</option>

										<option value="244">
																							 -  -  -  - Cycling Protective Gears
																					</option>

										<option value="178">
																							 -  -  - Laptops &amp; Accessories
																					</option>

										<option value="189">
																							 -  -  - Jewelry &amp; Watches
																					</option>

										<option value="190">
																							 -  -  - Flashlights &amp; Lamps
																					</option>

										<option value="191">
																							 -  -  - Automotive &amp; Motorcycle
																					</option>

										<option value="159">
																							 -  -  -  - Automobile &amp; Motorcycle
																					</option>

										<option value="160">
																							 -  -  -  -  - Armchairs
																					</option>

										<option value="161">
																							 -  -  -  -  - Motorcycle Fairings
																					</option>

										<option value="162">
																							 -  -  -  -  - Car GPS &amp; Accessories
																					</option>

										<option value="163">
																							 -  -  -  -  - Car DVRs
																					</option>

										<option value="164">
																							 -  -  -  -  - Car Electronics
																					</option>

										<option value="165">
																							 -  -  -  -  - Car Decals &amp; Stickers
																					</option>

										<option value="175">
																							 -  -  -  -  - DoorsCar Lighting
																					</option>

										<option value="176">
																							 -  -  -  -  - Car Parts &amp; Exterior Accessories
																					</option>

										<option value="218">
																							 -  -  -  -  - Motorcycle Helmets
																					</option>

										<option value="219">
																							 -  -  -  -  - Motorcyle Lighting
																					</option>

										<option value="220">
																							 -  -  -  -  - Motorcycle Accessories
																					</option>

										<option value="221">
																							 -  -  -  -  - Car Interior Accessories
																					</option>

										<option value="222">
																							 -  -  -  - Car Accessories
																					</option>

										<option value="223">
																							 -  -  -  -  - Car Chargers &amp; Adapters
																					</option>

										<option value="224">
																							 -  -  -  -  - Car Decorations
																					</option>

										<option value="225">
																							 -  -  -  -  - Car Thermometers
																					</option>

										<option value="226">
																							 -  -  -  - Motorcycle Gadgets
																					</option>

										<option value="227">
																							 -  -  -  -  - Motorcycle Gear
																					</option>

										<option value="228">
																							 -  -  -  -  - Motorcycle Lights
																					</option>

										<option value="229">
																							 -  -  -  -  - Motorcycle Decorations
																					</option>

										<option value="230">
																							 -  -  -  -  - Motorcycle Parts &amp; Accessories
																					</option>

										<option value="231">
																							 -  -  -  -  - Mirrors
																					</option>

										<option value="232">
																							 -  -  -  -  - Other Gadgets
																					</option>

										<option value="233">
																							 -  -  -  - Car Lights
																					</option>

										<option value="234">
																							 -  -  -  -  - Car LED Light Bulbs
																					</option>

										<option value="235">
																							 -  -  -  -  - HID Xenon Kits
																					</option>

										<option value="236">
																							 -  -  -  -  - Car Decoration Lights
																					</option>

										<option value="237">
																							 -  -  -  -  - Car Fog Lights
																					</option>

										<option value="238">
																							 -  -  -  -  - Car Tail Lights
																					</option>

										<option value="192">
																							 -  -  - Sports &amp; Outdoors
																					</option>

										<option value="193">
																							 -  -  - Bags, Shoes &amp; Accessories
																					</option>

										<option value="194">
																							 -  -  - Cameras &amp; Photo
																					</option>

										<option value="195">
																							 -  -  - Holiday Supplies &amp; Gifts
																					</option>
																	</select>
							</div>
							<div class="text-search">
								<input class="spr-query" type="text" name="search_query"
								   value=""
								   placeholder="Introduzca las palabras clave para buscar sus aparatos en toda la tienda aquí ..."/>
							</div>
							<button value="Buscar" class="spr-search-button" type="submit" name="spr_submit_search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
							<input value="9" type="hidden" name="n"/>
						</form>

                </div>

                <script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function ($) {
        ;
        (function (element) {
            var $element = $(element);

            var _timer = 0;
            $(window).on('load', function () {
                setTimeout(function () {
                    //$('.spr-loading', $element).remove();
                    $element.removeClass('spr-preload');
                }, 1000);
            });

            $('.spr_selector .spr_select', $element).on('click',function(){
                var value_select = $('select[class=spr_select]', $element).val();
                $('input[name="cat_id"]').attr('value', value_select);
            });

            // ------------begin schreiben function load ajax ------------- //
            var $input = $('.spr-query', $element);

            loadajax_ein();
            function loadajax_ein() {
                    if (1) {
                        $input.autocomplete(
                                'http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch',
                                {
                                    minChars: 3,
                                    max: 10,
                                    width: 500,
                                    selectFirst: false,
                                    scroll: false,
                                    dataType: "json",
                                    formatItem: function (data, i, max, value, term) {
                                        return value;
                                    },
                                    parse: function (data) {

                                        var mytab = [];
                                        for (var i = 0; i < data.length; i++)
                                            mytab[mytab.length] = {data: data[i], value: '<span class="cname">' + data[i].cname + '</span>' + '<i class="fa fa-angle-right"></i>' + '<span class="cname">' + data[i].pname + '</span>' };
                                        return mytab;

                                    },
                                    extraParams: {
                                        ajaxSearch: 1,
                                        id_lang: 4,
                                        spr_module_id: "1",
                                        cat_id: $('select[class=spr_select]', $element).val(),
                                        orderby: 'name',
                                        orderway: 'ASC',
                                        n: '9'
                                    }
                                })
                                .result(function (event, data, formatted) {

                                    $input.val(data.pname);

                                    document.location.href = data.product_link;
                                });
                    }
            }

            $('.spr_select', $element).on('change', function () {
                $(".ac_results").remove();
                var $input = $('.spr-query', $element);
                if (1) {
                    $input.trigger('unautocomplete');
                    $input.autocomplete(
                            'http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch',
                            {
                                minChars: 3,
                                max: 10,
                                width: 500,
                                selectFirst: false,
                                scroll: false,
                                dataType: "json",
                                formatItem: function (data, i, max, value, term) {
                                    return value;
                                },
                                parse: function (data) {

                                    var mytab = [];
                                    for (var i = 0; i < data.length; i++)
                                        mytab[mytab.length] = {data: data[i], value: data[i].cname + ' > ' + data[i].pname};
                                    return mytab;

                                },
                                extraParams: {
                                    ajaxSearch: 1,
                                    id_lang: 4,
                                    spr_module_id: "1",
                                    cat_id: $('select[class=spr_select]', $element).val(),
                                    orderby: 'name',
                                    orderway: 'ASC',
                                    n: '9'
                                }
                            })
                            .result(function (event, data, formatted) {

                                $input.val(data.pname);

                                document.location.href = data.product_link;
                            });
                }
            });

            // -------end schreiben function load ajax -------------------- //

            // =====begin instal_search begin 4 characters one more======= //
            if (0) {
                function tryToCloseInstantSearch() {
                    var $oldCenterColumn = $('#old_center_column');
                    if ($oldCenterColumn.length > 0) {
                        $('#center_column').remove();
                        $oldCenterColumn.attr('id', 'center_column').show();
                        return false;
                    }
                }

                instantSearchQueries = [];
                function stopInstantSearchQueries() {
                    for (var i = 0; i < instantSearchQueries.length; i++) {
                        instantSearchQueries[i].abort();
                    }
                    instantSearchQueries = [];
                }

                $input.on('keyup', function () {
                    if ($(this).val().length > 3) {
                        stopInstantSearchQueries();
                        instantSearchQuery = $.ajax({
                            url: baseDir + 'modules/spsearchpro/spsearchpro_ajax.php',
                            data: {
                                instantSearch: 0,
                                id_lang: 4,
                                q: $(this).val(),
                                spr_module_id: "1",
                                cat_id: $('select[class=spr_select]', $element).val(),
                                orderby: 'name',
                                orderway: 'ASC',
                                n: '9'
                            },
                            dataType: 'html',
                            type: 'POST',
                            headers: {"cache-control": "no-cache"},
                            async: true,
                            cache: false,
                            success: function (data) {
                                if ($input.val().length > 0) {
                                    tryToCloseInstantSearch();
                                    $('#center_column').attr('id', 'old_center_column');
                                    $('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + '">' + data + '</div>').hide();
                                    $('.sortPagiBar.instant_search').css('display', 'none');
                                    // Button override
                                    ajaxCart.overrideButtonsInThePage();
                                    $("#instant_search_results a.close").on('click', function () {
                                        $input.val('');
                                        return tryToCloseInstantSearch();
                                    });
                                    return false;
                                }
                                else
                                    tryToCloseInstantSearch();
                            }
                        });
                        instantSearchQueries.push(instantSearchQuery);
                    }
                    else
                        tryToCloseInstantSearch();
                });
            }
            // =====end instal_search begin 4 characters one more ======== //

            $(window).on('resize', function(){
                if($(window).width() < 480){
                    $('.spr_select option:first-child', $element).html('Todas categorias');
                }else{
                    $('.spr_select option:first-child', $element).html('Todas categorias');
                }
            });

        })('#sp_search_pro_1');
    });
    //]]>
</script>
            </div>


					</div>
					<div id="header_cart" class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
						<!-- MODULE Block cart -->

<div class="blockcart clearfix">
<div class="shopping_cart clearfix">
		<div class="icon-cart"></div>
		<a href="http://prestashop.flytheme.net/sp_market/es/order" title="View my shopping cart" rel="nofollow">
				<span class="text-cart">CARRITO</span>
				<span class="text-cart4">Carrito</span>
				<span class="line line4"> - </span>
				<span class="ajax_cart_empty">0</span>
				<span class="ajax_cart_quantity">1</span>
				<span class="ajax_cart_quantity_text">Artículos</span>
				<span class="line line4 arrow"><i class="fa fa-caret-down"></i></span>
				<span class="line"> - </span>
				<span class="ajax_cart_total">
					$129.00
				</span>

					</a>
					<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list">
							<p class="recent_items ">Tu producto <span>Precio</span></p>
							<p class="cart_block_no_products unvisible">
								No product in shopping cart
							</p>
							<div class="list-products mCustomScrollbar">
								<dl class="products ">
																																															<dt data-id="cart_block_product_29_180_0" class="first_item">
											<a class="cart-images" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/29-faded-short-sleeves-tshirt.html" title="Ligula tortor"><img src="http://prestashop.flytheme.net/sp_market/146-cart_default/faded-short-sleeves-tshirt.jpg" alt="Ligula tortor" /></a>

											<div class="cart-info">

												<div class="product-name titleFont">
													<a class="cart_block_product_name" href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/29-faded-short-sleeves-tshirt.html#/size-s/color-orange" title="Ligula tortor">Ligula tortor</a>
												</div>

												<span class="price">
																											$127.00																									</span>

												<span class="quantity-formated titleFont">Cantidad:1</span>
												<!--													<div class="product-atributes">
														<a href="http://prestashop.flytheme.net/sp_market/es/healthy-beauty/29-faded-short-sleeves-tshirt.html#/size-s/color-orange" title="Product detail">S, Orange</a>
													</div>
												-->

											</div>
											<span class="remove_link">
																									<a class="ajax_cart_block_remove_link" href="http://prestashop.flytheme.net/sp_market/es/cart?delete%3D1%26id_product%3D%7B%24product_id_product%7D%26ipa%3D%7B%24product_id_product_attribute%7D%26id_address_delivery%3D%7B%24product_id_address_delivery%7D%26token%3D%7B%24static_token%7D=" rel="nofollow" title="retirar"><i class="fa fa-trash"></i></a>
																							</span>
										</dt>
																					<dd data-id="cart_block_combination_of_29_180_0" class="first_item">
																				<!-- Customizable datas -->
																				</dd>																									</dl>
							</div>
												<div class="cart-prices">
							<!--<div class="cart-prices-line first-line">
								<span class="price_text">
									Shipping :
								</span>
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
																			$2.00
																	</span>

							</div>

													</div>-->

						<div class="price-total titleFont">
							<span class="price_text">Total : </span>
							<span class="price cart_block_total ajax_block_cart_total">
																																					$127.00
																								</span>
						</div>
						<div class="buttons">
							<a id="button_order_cart" class="btn btn-default button button-small titleFont" href="http://prestashop.flytheme.net/sp_market/es/order" title="View my shopping cart" rel="nofollow">
								Ver carrito
							</a>
							<a id="button_goto_cart" class="btn btn-default button button-small titleFont" href="http://prestashop.flytheme.net/sp_market/es/order" title="View my shopping cart" rel="nofollow">
								Revisa
							</a>
						</div>
					</div>
				</div>
			</div><!-- .cart_block -->


</div>
</div>
</div>

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

			<div id="pro_added_success" class="alert alert-success">Product successfully added to your shopping cart</div>
			<div class="layer_details">
				<div class="layer_cart_row">
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s  unvisible">
						There are <span class="ajax_cart_quantity">1</span> items in your cart.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt ">
						There is 1 item in your cart.
					</span>
				</div>

				<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
					<span class="layer_cart_label">
						Total products
													(tax excl.)
											</span>
					<span class="ajax_block_products_total">
													$127.00
											</span>
				</div>

								<div id="layer_cart_ajax_cart_shipping_cost" class="layer_cart_row hidden">
					<span class="layer_cart_label">
						Total shipping&nbsp;(tax excl.)
					</span>
					<span class="ajax_cart_shipping_cost">
													$2.00
											</span>
				</div>
								<div id="layer_cart_ajax_block_cart_total" class="layer_cart_row">
					<span class="layer_cart_label">
						Total
													(tax excl.)
											</span>
					<span class="ajax_block_cart_total price">
																					$129.00
																		</span>
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
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>

<!-- /MODULE Block cart -->
					</div>
				</div>
		</div>
	</div>

	<div class="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">

	<div class="spverticalmenu ">

		<nav class="navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" id="show-vermegamenu" data-toggle="collapse" data-target="#sp-vermegamenu" class="navbar-toggle">
					Todas categorias
				</button>
				<h2 class="cat-title">Todas categorias</h2>
			</div>
			<div id="sp-vermegamenu" class=" sp-vermegamenu clearfix">
				<span id="remove-vermegamenu" class="fa fa-remove"></span>
				<h2 class="cat-title">Todas categorias</h2>
				<div class="sp-verticalmenu-container">
					<ul class="nav navbar-nav  menu sp_lesp level-1"><li class="item-1 vertical-cat"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/3-electronics" title="Electronics"><i class="icon-v1"></i>Electronics</a></li>
<li class="item-1 mega_type type1 parent group"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" title="Healthy & beauty"><i class="icon-v2"></i>Smartphones &amp; Tablets</a><div class="dropdown-menu" style="width:740px"><ul class="level-2"><li class="item-2 sub-cate group parent" style="width:30%" ><a href="http://prestashop.flytheme.net/sp_market/es/72-subcat1" title="Subcat1">Subcat1</a><div class="dropdown-menu"><ul><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/68-hiking-gear" title="Hiking Gear">Hiking Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/97-hammock" title="Hammock">Hammock</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/98-telescope" title="Telescope">Telescope</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/99-hat" title="Hat">Hat</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/100-tent" title="Tent">Tent</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/101-sleeping-bag" title="Sleeping Bag">Sleeping Bag</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/69-swim-gear" title="Swim Gear">Swim Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/102-women-s-swimwear" title="Women's Swimwear">Women's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/103-men-s-swimwear" title="Men's Swimwear">Men's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/104-kid-s-swimwear" title="Kid's Swimwear">Kid's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/105-swim-accessories" title="Swim Accessories">Swim Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/106-umbrella-raincoat" title="Umbrella & Raincoat">Umbrella & Raincoat</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/197-other-outdoor-gear" title="Other Outdoor Gear">Other Outdoor Gear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/198-camping-lights" title="Camping Lights">Camping Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/199-bicycle-lights" title="Bicycle Lights">Bicycle Lights</a></li></ul></div><span class="grower close"> </span></li></ul></div><span class="grower close"> </span></li><li class="item-2 sub-cate group parent" style="width:30%" ><a href="http://prestashop.flytheme.net/sp_market/es/196-subcat-2" title="Subcat 2">Subcat 2</a><div class="dropdown-menu"><ul><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/73-cycling-gear" title="Cycling Gear">Cycling Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/82-cycling-protective-gears" title="Cycling Protective Gears">Cycling Protective Gears</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/200-cycling-accessories" title="Cycling Accessories">Cycling Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/201-cycling-clothing" title="Cycling Clothing">Cycling Clothing</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/202-bicycles-frames" title="Bicycles Frames">Bicycles Frames</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/74-swim-gear" title="Swim Gear">Swim Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/83-women-s-swimwear" title="Women's Swimwear">Women's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/84-men-s-swimwear" title="Men's Swimwear">Men's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/85-kid-s-swimwear" title="Kid's Swimwear">Kid's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/86-swim-accessories" title="Swim Accessories">Swim Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/87-umbrella-raincoat" title="Umbrella & Raincoat">Umbrella & Raincoat</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/88-other-outdoor-gear" title="Other Outdoor Gear">Other Outdoor Gear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/89-camping-lights" title="Camping Lights">Camping Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/203-bicycle-lights" title="Bicycle Lights">Bicycle Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/248-umbrella-raincoat" title="Umbrella & Raincoat">Umbrella & Raincoat</a></li></ul></div><span class="grower close"> </span></li></ul></div><span class="grower close"> </span></li><li class="item-2 product group" style="width:40%" ><div class="block_content">
						<ul class="products_block product_lists grid">
											<li class="ajax_block_product product_block first_item">
								<div class="product-container" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container">
											<div class="product-image">
												<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" itemprop="url">
													<img class=" img-responsive" src="http://prestashop.flytheme.net/sp_market/16-home_default/printed-dress.jpg" alt="Maecenas Sirloin" title="Maecenas Sirloin" itemprop="image" />
												</a>
											</div>
											<div class="label-box">
																									<span class="new-box">New</span>

																							</div>

										</div>
									</div>
									<div class="right-block">
										<h5 class="product-name" itemprop="name">
																						<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" itemprop="url" >
												Maecenas Sirloin
											</a>
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
													$26.00												</span>
												<meta itemprop="priceCurrency" content="USD" />


																					</div>


										<div class="button-container">

												<a class="cart_button ajax_add_to_cart_button" href="http://prestashop.flytheme.net/sp_market/es/cart?add=1&amp;id_product=3&amp;token=4c1dda483cbe490e55a9528eee9305f5" rel="nofollow"  title="Add to cart" data-id-product="3">
																<span>Add to cart</span>
															</a>


	<a class="addToWishlist wishlistProd_3" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>
																									<a class="add_to_compare" href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" data-tooltip-remove="Remove from compare"  title="Add to compare" data-id-product="3">
														<i class="fa fa-bar-chart"></i>
													</a>

											</div>
									</div>
								</div>
							</li>
							</ul>
		</div>
</li></ul></div><span class="grower close"> </span></li>
<li class="item-1 mega_type type2 parent group"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" title="Healthy & beauty"><i class="icon-v3"></i>Health &amp; Beauty</a><div class="dropdown-menu" style="width:610px"><ul class="level-2"><li class="item-2 box-cate group parent" style="width:50%" ><a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" title="Healthy & beauty">Healthy & beauty</a><div class="dropdown-menu"><ul><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/167-cycling-gear" title="Cycling Gear">Cycling Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/166-cycling-protective-gears" title="Cycling Protective Gears">Cycling Protective Gears</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/204-cycling-accessories" title="Cycling Accessories">Cycling Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/205-cycling-clothing" title="Cycling Clothing">Cycling Clothing</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/206-bicycles-frames" title="Bicycles Frames">Bicycles Frames</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/168-camping-hiking-gear" title="Camping & Hiking Gear">Camping & Hiking Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/169-hammock" title="Hammock">Hammock</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/207-telescope" title="Telescope">Telescope</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/208-hat" title="Hat">Hat</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/209-tent" title="Tent">Tent</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/210-sleeping-bag" title="Sleeping Bag">Sleeping Bag</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/170-swim-gear" title="Swim Gear">Swim Gear</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/171-women-s-swimwear" title="Women's Swimwear">Women's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/211-men-s-swimwear" title="Men's Swimwear">Men's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/212-kid-s-swimwear" title="Kid's Swimwear">Kid's Swimwear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/213-swim-accessories" title="Swim Accessories">Swim Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/214-umbrella-raincoat" title="Umbrella & Raincoat">Umbrella & Raincoat</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/215-other-outdoor-gear" title="Other Outdoor Gear">Other Outdoor Gear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/216-camping-lights" title="Camping Lights">Camping Lights</a></li></ul></div><span class="grower close"> </span></li></ul></div><span class="grower close"> </span></li><li class="item-2 banner_menu" style="width:50%" ><div class="menu-content"><div class="banner_menu"><a href="#" class="img"><img src="http://dev.ytcvn.com/ytc_templates/prestashop/sp_market/themes/sp_market/img/cms/banner_menu01.jpg" alt="#" /></a></div></div></li></ul></div><span class="grower close"> </span></li>
<li class="item-1 mega_type type3 parent group"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/191-automotive-motorcycle" title="Automotive & Motorcycle"><i class="icon-v9"></i>Automotive &amp; Motorcycle</a><div class="dropdown-menu" style="width:535px"><ul class="level-2"><li class="item-2  group parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/191-automotive-motorcycle" title="Automotive & Motorcycle">Automotive & Motorcycle</a><div class="dropdown-menu"><ul><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/159-automobile-motorcycle" title="Automobile & Motorcycle">Automobile & Motorcycle</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/160-armchairs" title="Armchairs">Armchairs</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/161-motorcycle-fairings" title="Motorcycle Fairings">Motorcycle Fairings</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/162-car-gps-accessories" title="Car GPS & Accessories">Car GPS & Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/163-car-dvrs" title="Car DVRs">Car DVRs</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/164-car-electronics" title="Car Electronics">Car Electronics</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/165-car-decals-stickers" title="Car Decals & Stickers">Car Decals & Stickers</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/175-doorscar-lighting" title="DoorsCar Lighting">DoorsCar Lighting</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/176-car-parts-exterior-accessories" title="Car Parts & Exterior Accessories">Car Parts & Exterior Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/218-motorcycle-helmets" title="Motorcycle Helmets">Motorcycle Helmets</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/219-motorcyle-lighting" title="Motorcyle Lighting">Motorcyle Lighting</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/220-motorcycle-accessories" title="Motorcycle Accessories">Motorcycle Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/221-car-interior-accessories" title="Car Interior Accessories">Car Interior Accessories</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/222-car-accessories" title="Car Accessories">Car Accessories</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/223-car-chargers-adapters" title="Car Chargers & Adapters">Car Chargers & Adapters</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/224-car-decorations" title="Car Decorations">Car Decorations</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/225-car-thermometers" title="Car Thermometers">Car Thermometers</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/226-motorcycle-gadgets" title="Motorcycle Gadgets">Motorcycle Gadgets</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/227-motorcycle-gear" title="Motorcycle Gear">Motorcycle Gear</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/228-motorcycle-lights" title="Motorcycle Lights">Motorcycle Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/229-motorcycle-decorations" title="Motorcycle Decorations">Motorcycle Decorations</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/230-motorcycle-parts-accessories" title="Motorcycle Parts & Accessories">Motorcycle Parts & Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/231-mirrors" title="Mirrors">Mirrors</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/232-other-gadgets" title="Other Gadgets">Other Gadgets</a></li></ul></div><span class="grower close"> </span></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/233-car-lights" title="Car Lights">Car Lights</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/234-car-led-light-bulbs" title="Car LED Light Bulbs">Car LED Light Bulbs</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/235-hid-xenon-kits" title="HID Xenon Kits">HID Xenon Kits</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/236-car-decoration-lights" title="Car Decoration Lights">Car Decoration Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/237-car-fog-lights" title="Car Fog Lights">Car Fog Lights</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/238-car-tail-lights" title="Car Tail Lights">Car Tail Lights</a></li></ul></div><span class="grower close"> </span></li></ul></div><span class="grower close"> </span></li></ul></div><span class="grower close"> </span></li>
<li class="item-1 css_type"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/154-toys-hobbies" title="Toys & Hobbies"><i class="icon-v3"></i>Toys &amp; Hobbies</a></li>
<li class="item-1 css_type parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/177-computers-networking" title="Computers & Networking"><i class="icon-v4"></i>Computers & Networking</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/239-cycling-clothing" title="Cycling Clothing">Cycling Clothing</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/240-bicycles-frames" title="Bicycles Frames">Bicycles Frames</a></li><li class=" parent"  ><a href="http://prestashop.flytheme.net/sp_market/es/241-hammock" title="Hammock">Hammock</a><div class="dropdown-menu"><ul><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/245-scope" title="Scope">Scope</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/246-bowhunting" title="Bowhunting">Bowhunting</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/247-decoys" title="Decoys">Decoys</a></li></ul></div><span class="grower close"> </span></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/242-cycling-accessories" title="Cycling Accessories">Cycling Accessories</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/243-telescope" title="Telescope">Telescope</a></li><li class=""  ><a href="http://prestashop.flytheme.net/sp_market/es/244-cycling-protective-gears" title="Cycling Protective Gears">Cycling Protective Gears</a></li></ul></div><span class="grower close"> </span></li><li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/178-laptops-accessories" title="Laptops & Accessories"><i class="icon-v6"></i>Laptops &amp; Accessories</a></li>
<li class="item-1 css_type"  >
							<a href="http://prestashop.flytheme.net/sp_market/es/189-jewelry-watches" title="Jewelry & Watches"><i class="icon-v7"></i>Jewelry &amp; Watches</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/190-flashlights-lamps" title="Flashlights & Lamps"><i class="icon-v8"></i>Flashlights &amp; Lamps</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/192-sports-outdoors" title="Sports & Outdoors"><i class="icon-v10"></i>Sports &amp; Outdoors</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/193-bags-shoes-accessories" title="Bags, Shoes & Accessories"><i class="icon-v11"></i>Bags, Shoes &amp; Accessories</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/194-cameras-photo" title="Cameras & Photo"><i class="icon-v12"></i>Cameras &amp; Photo</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/195-holiday-supplies-gifts" title="Holiday Supplies & Gifts"><i class="icon-v13"></i>Holiday Supplies &amp; Gifts</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/12-automotive-motorcycle" title="Automotive & Motorcycle"><i class="icon-v13"></i>Smartphone</a></li>
<li class="item-1 "  >
							<a href="http://prestashop.flytheme.net/sp_market/es/13-electronics" title="Electronics"><i class="icon-v5"></i>Headphone</a></li>
</ul>
				</div>
			</div>
		</nav>
	</div>
<script type="text/javascript">

	$(document).ready(function() {
		var wd_width = $(window).width();
		if(wd_width > 992){
			offtogglevermegamenu();
			renderWidthSubmenu();
		}
		if(wd_width >= 1400)
			var limit = 13 -1 ;
		else if(wd_width >= 1200 && wd_width<1400)
			var limit = 13 -1 ;
		else if(wd_width >= 768 && wd_width<1200)
			var limit = 11 -1 ;

		$('#sp-vermegamenu .sp-verticalmenu-container >ul').append('<div class="more-wrap"><span class="more-view">More Categories</span></div>');
		$('#sp-vermegamenu .item-1').each(function(i){
			if(i>limit)
				$(this).css('display', 'none');
			else
				$(this).css('display', 'block');
		});

		$('#sp-vermegamenu .more-wrap').click(function(){
			if($(this).hasClass('open')){
				$('#sp-vermegamenu .item-1').each(function(i){
					if(i>limit){
						$(this).slideUp(200);
					}
				});
				$(this).removeClass('open');
				$('.more-wrap').html('<span class="more-view">More Categories</span>');
			}else{
				$('#sp-vermegamenu .item-1').each(function(i){
					if(i>limit){
						$(this).slideDown(200);
					}
				});
				$(this).addClass('open');
				$('.more-wrap').html('<span class="more-view">Less Categories</span>');
			}
		});

			$(window).resize(function() {

				var sp_width = $( window ).width();
				if(sp_width >= 1400)
					var sp_limit = 13 -1 ;
				else if(sp_width >= 1200 && sp_width<1400)
					var sp_limit = 13 -1 ;
				else if(sp_width >= 768 && sp_width<1200)
					var sp_limit = 11 -1 ;


				$('#sp-vermegamenu .item-1').each(function(i){
					if(i>sp_limit)
						$(this).css('display', 'none');
					else
						$(this).css('display', 'block');
				});

				if(sp_width > 992){
					offtogglevermegamenu();
					renderWidthSubmenu();
				}

			});

			$("#sp-vermegamenu  li.parent  .grower").click(function(){
					if($(this).hasClass('close'))
						$(this).addClass('open').removeClass('close');
					else
						$(this).addClass('close').removeClass('open');

					$('.dropdown-menu',$(this).parent()).first().toggle(300);

			});

	});

	$('#show-vermegamenu').click(function() {
		if($('.sp-vermegamenu').hasClass('sp-vermegamenu-active'))
			$('.sp-vermegamenu').removeClass('sp-vermegamenu-active');
		else
			$('.sp-vermegamenu').addClass('sp-vermegamenu-active');
        return false;
    });

	$('#remove-vermegamenu').click(function() {
        $('.sp-vermegamenu').removeClass('sp-vermegamenu-active');
        return false;
    });


	function offtogglevermegamenu()
	{
		$('#sp-vermegamenu li.parent .dropdown-menu').css('display','');
		$('#sp-vermegamenu').removeClass('sp-vermegamenu-active');
		$("#sp-vermegamenu  li.parent  .grower").removeClass('open').addClass('close');
	}

	function renderWidthSubmenu()
	{
		$('#sp-vermegamenu  li.parent').each(function(){
			value = $(this).data("subwidth");
			if(value){
				var container_width = $('.container').width();
				var vertical_width = $('#sp-vermegamenu').width();
				var full_width = container_width - vertical_width;
				var width_submenu = (full_width*value)/100;
				$('> .dropdown-menu',this).css('width',width_submenu+'px');
			}
		});
	}

</script>

                                    <div class="sp_searchpro searchmobile ">

                <div id="sp_search_pro_2" class="spr-container spr-preload"><!--<![endif]-->

						<div class="icon-search">
							<i class="fa fa-search"></i>
						</div>
						<form class="sprsearch-form  show-box" method="get" action="http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch">
							<input type="hidden" name="fc" value="module"/>
							<input type="hidden" name="module" value="spsearchpro"/>
							<input type="hidden" name="controller" value="catesearch"/>
							<input type="hidden" name="orderby" value="name"/>
							<input type="hidden" name="orderway" value="ASC"/>

																	<input type="hidden" name="cat_id" value="2,152,3,4,5,6,7,16,8,9,10,11,18,12,20,21,22,23,13,25,26,27,28,40,41,47,53,59,65,136,137,138,139,66,42,43,17,155,173,140,141,142,143,67,72,68,97,98,99,100,101,69,102,103,104,105,106,197,198,199,196,73,82,200,201,202,74,83,84,85,86,87,88,89,203,248,153,167,166,204,205,206,168,169,207,208,209,210,170,171,211,212,213,214,215,216,154,177,239,240,241,245,246,247,242,243,244,178,189,190,191,159,160,161,162,163,164,165,175,176,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,192,193,194,195">

																						<div class="spr_selector">
								<select class="spr_select">


										<option value="2,152,3,4,5,6,7,16,8,9,10,11,18,12,20,21,22,23,13,25,26,27,28,40,41,47,53,59,65,136,137,138,139,66,42,43,17,155,173,140,141,142,143,67,72,68,97,98,99,100,101,69,102,103,104,105,106,197,198,199,196,73,82,200,201,202,74,83,84,85,86,87,88,89,203,248,153,167,166,204,205,206,168,169,207,208,209,210,170,171,211,212,213,214,215,216,154,177,239,240,241,245,246,247,242,243,244,178,189,190,191,159,160,161,162,163,164,165,175,176,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,192,193,194,195">
																							All Categories
																					</option>

										<option value="2">
																							 - Home
																					</option>

										<option value="152">
																							 -  - Shop
																					</option>

										<option value="3">
																							 -  -  - Electronics
																					</option>

										<option value="4">
																							 -  -  -  - Smartphones &amp; Tablets
																					</option>

										<option value="5">
																							 -  -  -  -  - Accessories for iPhone
																					</option>

										<option value="6">
																							 -  -  -  -  - Accessories For iPad
																					</option>

										<option value="7">
																							 -  -  -  -  - Accessories for Tablet PC
																					</option>

										<option value="16">
																							 -  -  -  -  - Tablet PC
																					</option>

										<option value="8">
																							 -  -  -  - Sports &amp; Outdoor
																					</option>

										<option value="9">
																							 -  -  -  -  - Golf Supplies
																					</option>

										<option value="10">
																							 -  -  -  -  - Outdoor &amp; Traveling Supplies
																					</option>

										<option value="11">
																							 -  -  -  -  - Camping &amp; Hiking
																					</option>

										<option value="18">
																							 -  -  -  -  - Fishing
																					</option>

										<option value="12">
																							 -  -  -  - Automotive &amp; Motorcycle
																					</option>

										<option value="20">
																							 -  -  -  -  - More Car Accessories
																					</option>

										<option value="21">
																							 -  -  -  -  - Car Alarms and Security
																					</option>

										<option value="22">
																							 -  -  -  -  - Car Audio &amp; Speakers
																					</option>

										<option value="23">
																							 -  -  -  -  - Gadgets &amp; Auto Parts
																					</option>

										<option value="13">
																							 -  -  -  - Electronics
																					</option>

										<option value="25">
																							 -  -  -  -  - Batteries &amp; Chargers
																					</option>

										<option value="26">
																							 -  -  -  -  - Headphones, Headsets
																					</option>

										<option value="27">
																							 -  -  -  -  - Home Audio
																					</option>

										<option value="28">
																							 -  -  -  -  - MP3 Players &amp; Accessories
																					</option>

										<option value="40">
																							 -  -  -  - Toys &amp; Hobbies
																					</option>

										<option value="41">
																							 -  -  -  -  - Walkera
																					</option>

										<option value="47">
																							 -  -  -  -  - FPV system &amp; Parts
																					</option>

										<option value="53">
																							 -  -  -  -  - RC Cars &amp; Parts
																					</option>

										<option value="59">
																							 -  -  -  -  - Helicopters &amp; Parts
																					</option>

										<option value="65">
																							 -  -  -  - Holiday Supplies &amp; Gifts
																					</option>

										<option value="136">
																							 -  -  -  -  - Gift &amp; Lifestyle Gadgets
																					</option>

										<option value="137">
																							 -  -  -  -  - Gift for Man
																					</option>

										<option value="138">
																							 -  -  -  -  - Gift for Woman
																					</option>

										<option value="139">
																							 -  -  -  -  - Lighter &amp; Cigar Supplies
																					</option>

										<option value="66">
																							 -  -  -  - Health &amp; Beauty
																					</option>

										<option value="42">
																							 -  -  -  -  - Bath &amp; Body
																					</option>

										<option value="43">
																							 -  -  -  -  - Shaving &amp; Hair Removal
																					</option>

										<option value="17">
																							 -  -  -  -  - Fragrances
																					</option>

										<option value="155">
																							 -  -  -  -  - Salon &amp; Spa Equipment
																					</option>

										<option value="173">
																							 -  -  -  - Jewelry &amp; Watches
																					</option>

										<option value="140">
																							 -  -  -  -  - Men Watches
																					</option>

										<option value="141">
																							 -  -  -  -  - Wedding Rings
																					</option>

										<option value="142">
																							 -  -  -  -  - Earrings
																					</option>

										<option value="143">
																							 -  -  -  -  - Necklaces
																					</option>

										<option value="67">
																							 -  -  - Smartphones &amp; Tablets
																					</option>

										<option value="72">
																							 -  -  -  - Subcat1
																					</option>

										<option value="68">
																							 -  -  -  -  - Hiking Gear
																					</option>

										<option value="97">
																							 -  -  -  -  -  - Hammock
																					</option>

										<option value="98">
																							 -  -  -  -  -  - Telescope
																					</option>

										<option value="99">
																							 -  -  -  -  -  - Hat
																					</option>

										<option value="100">
																							 -  -  -  -  -  - Tent
																					</option>

										<option value="101">
																							 -  -  -  -  -  - Sleeping Bag
																					</option>

										<option value="69">
																							 -  -  -  -  - Swim Gear
																					</option>

										<option value="102">
																							 -  -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="103">
																							 -  -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="104">
																							 -  -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="105">
																							 -  -  -  -  -  - Swim Accessories
																					</option>

										<option value="106">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="197">
																							 -  -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="198">
																							 -  -  -  -  -  - Camping Lights
																					</option>

										<option value="199">
																							 -  -  -  -  -  - Bicycle Lights
																					</option>

										<option value="196">
																							 -  -  -  - Subcat 2
																					</option>

										<option value="73">
																							 -  -  -  -  - Cycling Gear
																					</option>

										<option value="82">
																							 -  -  -  -  -  - Cycling Protective Gears
																					</option>

										<option value="200">
																							 -  -  -  -  -  - Cycling Accessories
																					</option>

										<option value="201">
																							 -  -  -  -  -  - Cycling Clothing
																					</option>

										<option value="202">
																							 -  -  -  -  -  - Bicycles Frames
																					</option>

										<option value="74">
																							 -  -  -  -  - Swim Gear
																					</option>

										<option value="83">
																							 -  -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="84">
																							 -  -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="85">
																							 -  -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="86">
																							 -  -  -  -  -  - Swim Accessories
																					</option>

										<option value="87">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="88">
																							 -  -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="89">
																							 -  -  -  -  -  - Camping Lights
																					</option>

										<option value="203">
																							 -  -  -  -  -  - Bicycle Lights
																					</option>

										<option value="248">
																							 -  -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="153">
																							 -  -  - Healthy &amp; beauty
																					</option>

										<option value="167">
																							 -  -  -  - Cycling Gear
																					</option>

										<option value="166">
																							 -  -  -  -  - Cycling Protective Gears
																					</option>

										<option value="204">
																							 -  -  -  -  - Cycling Accessories
																					</option>

										<option value="205">
																							 -  -  -  -  - Cycling Clothing
																					</option>

										<option value="206">
																							 -  -  -  -  - Bicycles Frames
																					</option>

										<option value="168">
																							 -  -  -  - Camping &amp; Hiking Gear
																					</option>

										<option value="169">
																							 -  -  -  -  - Hammock
																					</option>

										<option value="207">
																							 -  -  -  -  - Telescope
																					</option>

										<option value="208">
																							 -  -  -  -  - Hat
																					</option>

										<option value="209">
																							 -  -  -  -  - Tent
																					</option>

										<option value="210">
																							 -  -  -  -  - Sleeping Bag
																					</option>

										<option value="170">
																							 -  -  -  - Swim Gear
																					</option>

										<option value="171">
																							 -  -  -  -  - Women&#039;s Swimwear
																					</option>

										<option value="211">
																							 -  -  -  -  - Men&#039;s Swimwear
																					</option>

										<option value="212">
																							 -  -  -  -  - Kid&#039;s Swimwear
																					</option>

										<option value="213">
																							 -  -  -  -  - Swim Accessories
																					</option>

										<option value="214">
																							 -  -  -  -  - Umbrella &amp; Raincoat
																					</option>

										<option value="215">
																							 -  -  -  -  - Other Outdoor Gear
																					</option>

										<option value="216">
																							 -  -  -  -  - Camping Lights
																					</option>

										<option value="154">
																							 -  -  - Toys &amp; Hobbies
																					</option>

										<option value="177">
																							 -  -  - Computers &amp; Networking
																					</option>

										<option value="239">
																							 -  -  -  - Cycling Clothing
																					</option>

										<option value="240">
																							 -  -  -  - Bicycles Frames
																					</option>

										<option value="241">
																							 -  -  -  - Hammock
																					</option>

										<option value="245">
																							 -  -  -  -  - Scope
																					</option>

										<option value="246">
																							 -  -  -  -  - Bowhunting
																					</option>

										<option value="247">
																							 -  -  -  -  - Decoys
																					</option>

										<option value="242">
																							 -  -  -  - Cycling Accessories
																					</option>

										<option value="243">
																							 -  -  -  - Telescope
																					</option>

										<option value="244">
																							 -  -  -  - Cycling Protective Gears
																					</option>

										<option value="178">
																							 -  -  - Laptops &amp; Accessories
																					</option>

										<option value="189">
																							 -  -  - Jewelry &amp; Watches
																					</option>

										<option value="190">
																							 -  -  - Flashlights &amp; Lamps
																					</option>

										<option value="191">
																							 -  -  - Automotive &amp; Motorcycle
																					</option>

										<option value="159">
																							 -  -  -  - Automobile &amp; Motorcycle
																					</option>

										<option value="160">
																							 -  -  -  -  - Armchairs
																					</option>

										<option value="161">
																							 -  -  -  -  - Motorcycle Fairings
																					</option>

										<option value="162">
																							 -  -  -  -  - Car GPS &amp; Accessories
																					</option>

										<option value="163">
																							 -  -  -  -  - Car DVRs
																					</option>

										<option value="164">
																							 -  -  -  -  - Car Electronics
																					</option>

										<option value="165">
																							 -  -  -  -  - Car Decals &amp; Stickers
																					</option>

										<option value="175">
																							 -  -  -  -  - DoorsCar Lighting
																					</option>

										<option value="176">
																							 -  -  -  -  - Car Parts &amp; Exterior Accessories
																					</option>

										<option value="218">
																							 -  -  -  -  - Motorcycle Helmets
																					</option>

										<option value="219">
																							 -  -  -  -  - Motorcyle Lighting
																					</option>

										<option value="220">
																							 -  -  -  -  - Motorcycle Accessories
																					</option>

										<option value="221">
																							 -  -  -  -  - Car Interior Accessories
																					</option>

										<option value="222">
																							 -  -  -  - Car Accessories
																					</option>

										<option value="223">
																							 -  -  -  -  - Car Chargers &amp; Adapters
																					</option>

										<option value="224">
																							 -  -  -  -  - Car Decorations
																					</option>

										<option value="225">
																							 -  -  -  -  - Car Thermometers
																					</option>

										<option value="226">
																							 -  -  -  - Motorcycle Gadgets
																					</option>

										<option value="227">
																							 -  -  -  -  - Motorcycle Gear
																					</option>

										<option value="228">
																							 -  -  -  -  - Motorcycle Lights
																					</option>

										<option value="229">
																							 -  -  -  -  - Motorcycle Decorations
																					</option>

										<option value="230">
																							 -  -  -  -  - Motorcycle Parts &amp; Accessories
																					</option>

										<option value="231">
																							 -  -  -  -  - Mirrors
																					</option>

										<option value="232">
																							 -  -  -  -  - Other Gadgets
																					</option>

										<option value="233">
																							 -  -  -  - Car Lights
																					</option>

										<option value="234">
																							 -  -  -  -  - Car LED Light Bulbs
																					</option>

										<option value="235">
																							 -  -  -  -  - HID Xenon Kits
																					</option>

										<option value="236">
																							 -  -  -  -  - Car Decoration Lights
																					</option>

										<option value="237">
																							 -  -  -  -  - Car Fog Lights
																					</option>

										<option value="238">
																							 -  -  -  -  - Car Tail Lights
																					</option>

										<option value="192">
																							 -  -  - Sports &amp; Outdoors
																					</option>

										<option value="193">
																							 -  -  - Bags, Shoes &amp; Accessories
																					</option>

										<option value="194">
																							 -  -  - Cameras &amp; Photo
																					</option>

										<option value="195">
																							 -  -  - Holiday Supplies &amp; Gifts
																					</option>
																	</select>
							</div>
							<div class="text-search">
								<input class="spr-query" type="text" name="search_query"
								   value=""
								   placeholder="Enter keywords to search your gadgets in entire store here..."/>
							</div>
							<button value="Search" class="spr-search-button" type="submit" name="spr_submit_search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
							<input value="9" type="hidden" name="n"/>
						</form>

                </div>

                <script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function ($) {
        ;
        (function (element) {
            var $element = $(element);

            var _timer = 0;
            $(window).on('load', function () {
                setTimeout(function () {
                    //$('.spr-loading', $element).remove();
                    $element.removeClass('spr-preload');
                }, 1000);
            });

            $('.spr_selector .spr_select', $element).on('click',function(){
                var value_select = $('select[class=spr_select]', $element).val();
                $('input[name="cat_id"]').attr('value', value_select);
            });

            // ------------begin schreiben function load ajax ------------- //
            var $input = $('.spr-query', $element);

            loadajax_ein();
            function loadajax_ein() {
                    if (1) {
                        $input.autocomplete(
                                'http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch',
                                {
                                    minChars: 3,
                                    max: 10,
                                    width: 500,
                                    selectFirst: false,
                                    scroll: false,
                                    dataType: "json",
                                    formatItem: function (data, i, max, value, term) {
                                        return value;
                                    },
                                    parse: function (data) {

                                        var mytab = [];
                                        for (var i = 0; i < data.length; i++)
                                            mytab[mytab.length] = {data: data[i], value: '<span class="cname">' + data[i].cname + '</span>' + '<i class="fa fa-angle-right"></i>' + '<span class="cname">' + data[i].pname + '</span>' };
                                        return mytab;

                                    },
                                    extraParams: {
                                        ajaxSearch: 1,
                                        id_lang: 4,
                                        spr_module_id: "2",
                                        cat_id: $('select[class=spr_select]', $element).val(),
                                        orderby: 'name',
                                        orderway: 'ASC',
                                        n: '9'
                                    }
                                })
                                .result(function (event, data, formatted) {

                                    $input.val(data.pname);

                                    document.location.href = data.product_link;
                                });
                    }
            }

            $('.spr_select', $element).on('change', function () {
                $(".ac_results").remove();
                var $input = $('.spr-query', $element);
                if (1) {
                    $input.trigger('unautocomplete');
                    $input.autocomplete(
                            'http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch',
                            {
                                minChars: 3,
                                max: 10,
                                width: 500,
                                selectFirst: false,
                                scroll: false,
                                dataType: "json",
                                formatItem: function (data, i, max, value, term) {
                                    return value;
                                },
                                parse: function (data) {

                                    var mytab = [];
                                    for (var i = 0; i < data.length; i++)
                                        mytab[mytab.length] = {data: data[i], value: data[i].cname + ' > ' + data[i].pname};
                                    return mytab;

                                },
                                extraParams: {
                                    ajaxSearch: 1,
                                    id_lang: 4,
                                    spr_module_id: "2",
                                    cat_id: $('select[class=spr_select]', $element).val(),
                                    orderby: 'name',
                                    orderway: 'ASC',
                                    n: '9'
                                }
                            })
                            .result(function (event, data, formatted) {

                                $input.val(data.pname);

                                document.location.href = data.product_link;
                            });
                }
            });

            // -------end schreiben function load ajax -------------------- //

            // =====begin instal_search begin 4 characters one more======= //
            if (0) {
                function tryToCloseInstantSearch() {
                    var $oldCenterColumn = $('#old_center_column');
                    if ($oldCenterColumn.length > 0) {
                        $('#center_column').remove();
                        $oldCenterColumn.attr('id', 'center_column').show();
                        return false;
                    }
                }

                instantSearchQueries = [];
                function stopInstantSearchQueries() {
                    for (var i = 0; i < instantSearchQueries.length; i++) {
                        instantSearchQueries[i].abort();
                    }
                    instantSearchQueries = [];
                }

                $input.on('keyup', function () {
                    if ($(this).val().length > 3) {
                        stopInstantSearchQueries();
                        instantSearchQuery = $.ajax({
                            url: baseDir + 'modules/spsearchpro/spsearchpro_ajax.php',
                            data: {
                                instantSearch: 0,
                                id_lang: 4,
                                q: $(this).val(),
                                spr_module_id: "2",
                                cat_id: $('select[class=spr_select]', $element).val(),
                                orderby: 'name',
                                orderway: 'ASC',
                                n: '9'
                            },
                            dataType: 'html',
                            type: 'POST',
                            headers: {"cache-control": "no-cache"},
                            async: true,
                            cache: false,
                            success: function (data) {
                                if ($input.val().length > 0) {
                                    tryToCloseInstantSearch();
                                    $('#center_column').attr('id', 'old_center_column');
                                    $('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + '">' + data + '</div>').hide();
                                    $('.sortPagiBar.instant_search').css('display', 'none');
                                    // Button override
                                    ajaxCart.overrideButtonsInThePage();
                                    $("#instant_search_results a.close").on('click', function () {
                                        $input.val('');
                                        return tryToCloseInstantSearch();
                                    });
                                    return false;
                                }
                                else
                                    tryToCloseInstantSearch();
                            }
                        });
                        instantSearchQueries.push(instantSearchQuery);
                    }
                    else
                        tryToCloseInstantSearch();
                });
            }
            // =====end instal_search begin 4 characters one more ======== //

            $(window).on('resize', function(){
                if($(window).width() < 480){
                    $('.spr_select option:first-child', $element).html('Todas categorias');
                }else{
                    $('.spr_select option:first-child', $element).html('Todas categorias');
                }
            });

        })('#sp_search_pro_2');
    });
    //]]>
</script>
            </div>
            <script type="text/javascript">
// <![CDATA[
	$(document).ready(function($){
		$(".sprsearch-form").addClass('show-form');
		$(".icon-search").click(function(){
			$(this).toggleClass("active").next().slideToggle("medium");

		});
	});
// ]]>
</script>

				</div>
				<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="spmegamenu">
		<nav class="navbar" role="navigation">
			<div class="navbar-button">
				<button type="button" id="show-megamenu" data-toggle="collapse" data-target="#sp-megamenu" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="sp-megamenu" class="mega sp-megamenu clearfix">
				<span id="remove-megamenu" class="fa fa-remove"></span>
				<span class="label-menu">Menu</span>
				<div class="sp-megamenu-container">
					<div class="home">
						<a href="http://prestashop.flytheme.net/sp_market/">Casa</a>
					</div>
					<ul class="nav navbar-nav  menu sp_lesp level-1"><li class="item-1 newarrival" ><a href="../new-products" title="Nuevo"><p><span class="hot">Hot</span></p> Nuevo</a></li>
<li class="item-1 promotions" ><a href="#" title="Promociones"> Promociones</a></li>
<li class="item-1 css_type specials" ><a href="../prices-drop" title="Especiales"> Especiales</a></li>
<li class="item-1 blog" ><a href="index.php?fc=module&amp;module=smartblog&amp;controller=category" title="Blog"> Blog</a></li>
<li class="item-1 contactus" ><a href="index.php?controller=contact" title="Cont&aacute;ctenos"> Cont&aacute;ctenos</a></li>
<li class="item-1 aboutus" ><a href="http://prestashop.flytheme.net/sp_market/es/content/4-about-us" title="Nosotros"> Nosotros</a></li>
</ul>
				</div>

			</div>
		</nav>
	</div>
<script type="text/javascript">

	$(document).ready(function() {

		$("#sp-megamenu  li.parent  .grower").click(function(){
			if($(this).hasClass('close'))
				$(this).addClass('open').removeClass('close');
			else
				$(this).addClass('close').removeClass('open');

			$('.dropdown-menu',$(this).parent()).first().toggle(300);

		});
		$("#sp-megamenu  .home  .grower").click(function(){
			if($(this).hasClass('close'))
				$(this).addClass('open').removeClass('close');
			else
				$(this).addClass('close').removeClass('open');

			$('.dropdown-menu',$(this).parent()).first().toggle(300);
		});

		var wd_width = $(window).width();
		var wd_height = $(window).height();
		if(wd_width > 992)
			offtogglemegamenu();

		$(window).resize(function() {
			var sp_width = $( window ).width();
			if(sp_width > 992)
				offtogglemegamenu();
		});



	});

	$('#show-megamenu').click(function() {
		if($('.sp-megamenu').hasClass('sp-megamenu-active'))
			$('.sp-megamenu').removeClass('sp-megamenu-active');
		else
			$('.sp-megamenu').addClass('sp-megamenu-active');
        return false;
    });
	$('#remove-megamenu').click(function() {
        $('.sp-megamenu').removeClass('sp-megamenu-active');
        return false;
    });


	function offtogglemegamenu()
	{
		$('#sp-megamenu li.parent .dropdown-menu').css('display','');
		$('#sp-megamenu').removeClass('sp-megamenu-active');
		$("#sp-megamenu  li.parent  .grower").removeClass('open').addClass('close');
		$('#sp-megamenu .home .dropdown-menu').css('display','');
		$('#sp-megamenu').removeClass('sp-megamenu-active');
		$("#sp-megamenu .home  .grower").removeClass('open').addClass('close');
	}


</script>
				</div>
			</div>
		</div>
	</div>


	</header>

							 </div>
			 <!-- End of Header -->





			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									My account
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
								<div id="sidebar" class="column hidden">

								</div>
								 <!-- End of Sidebar -->





						<!-- Center Column -->
						<div id="center_column" class="column col-sm-12">

<h1 class="page-heading">My account</h1>
<p class="info-account">Welcome to your account. Here you can manage all of your personal information and orders.</p>
<div class="row addresses-lists">
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<ul class="myaccount-link-list">
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/address" title="Add my first address"><i class="fa fa-building"></i><span>Add my first address</span></a></li>
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/order-history" title="Orders"><i class="fa fa-list-ol"></i><span>Order history and details</span></a></li>
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/credit-slip" title="Credit slips"><i class="fa fa-file-o"></i><span>My credit slips</span></a></li>
            <li><a href="http://prestashop.flytheme.net/sp_market/es/addresses" title="Addresses"><i class="fa fa-building"></i><span>My addresses</span></a></li>
            <li><a href="http://prestashop.flytheme.net/sp_market/es/identity" title="Information"><i class="fa fa-user"></i><span>My personal information</span></a></li>
        </ul>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
        <ul class="myaccount-link-list">

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist" title="Mi lista de regalos">
		<i class="fa fa-heart"></i>
		<span>Mi lista de regalos</span>
	</a>
</li>
<!-- END : MODULE WishList -->
        </ul>
    </div>
</div>
<ul class="footer_links clearfix">
<li><a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/" title="Home"><span><i class="fa fa-chevron-left left"></i> Home</span></a></li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
							<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="footer-content">
							<div class="row">

<!-- SP Custom Html -->

                        <div class="sp_customhtml_4_15137971527521251
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">About Market</div>
								<ul class="links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Market Reviews</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
								</ul>
								</div>

                    </div>

                        <div class="sp_customhtml_5_1513797152614163231
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">Customer Service</div>
								<ul class="links">
								<li><a href="#">Shipping Policy</a></li>
								<li><a href="#">Compensation First</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Contact Us</a></li>
								</ul>
								</div>

                    </div>

                        <div class="sp_customhtml_6_15137971521344208299
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">Payment & Shipping</div>
								<ul class="links">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Shipping Guide</a></li>
								<li><a href="#">Locations We Ship To</a></li>
								<li><a href="#">Estimated Delivery Time</a></li>
								</ul>
								</div>

                    </div>
    <!-- /SP Custom Html -->


<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="contact-infos box-footer col-md-3 col-sm-12">

	<div class="title-box">Contacte con nosotros</div>
	<ul class="list-contact">

					<li class="address">
				<span class="icon"><i class="fa fa-map-marker"></i></span>
				<label>Address: No 40 Baria Sreet 133/2 NewYork City,
NY, United States</label>
			</li>
							<li class="email">
				<span class="icon"><i class="fa fa-envelope"></i></span>
				<label>Email: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%63%6f%6e%74%61%63%74@%6d%61%72%6b%65%74.%63%6f%6d" >&#x63;&#x6f;&#x6e;&#x74;&#x61;&#x63;&#x74;&#x40;&#x6d;&#x61;&#x72;&#x6b;&#x65;&#x74;&#x2e;&#x63;&#x6f;&#x6d;</a></label>
			</li>
							<li class="phone">
				<span class="icon"><i class="fa fa-mobile"></i></span>
				<label>Phone: 0123456789</label>
			</li>
			</ul>

</section>
<!-- /MODULE Block contact infos -->
<script type="text/javascript">
				var time_start;
				$(window).load(
					function() {
						time_start = new Date();
					}
				);
				$(window).unload(
					function() {
						var time_end = new Date();
						var pagetime = new Object;
						pagetime.type = "pagetime";
						pagetime.id_connections = "19866";
						pagetime.id_page = "22";
						pagetime.time_start = "2017-12-20 14:12:32";
						pagetime.token = "b92a23d83bb32dc218e7d01ca7c6a8e305049cc4";
						pagetime.time = time_end-time_start;
						$.post("http://prestashop.flytheme.net/sp_market/es/index.php?controller=statistics", pagetime);
					}
				);
			</script>
							</div>
						</div>
					</footer>

																<div class="footer-middle">
							<div class="container">

<!-- SP Custom Html -->

                        <div class="sp_customhtml_7_15137971531927414261
		 spcustom_html">


                  <div class="footer-toplinks">
								<div class="topstore"><label>Top Stores : </label>
								<ul>
								<li><a href="#">Brand Directory</a></li>
								<li class="last"><a href="#">Store Directory</a></li>
								</ul>
								</div>
								<div class="toplinks">
								<div class="links"><label>MOST SEARCHED FOR ON MARKET:</label>
								<ul>
								<li><a href="#">Xiaomi Mi3</a></li>
								<li><a href="#">Digiflip Pro XT 712 Tablet</a></li>
								<li><a href="#">Mi 3 Phones</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>MOBILES:</label>
								<ul>
								<li><a href="#">Moto E</a></li>
								<li><a href="#">Samsung Mobile</a></li>
								<li><a href="#">Micromax Mobile</a></li>
								<li><a href="#">Nokia Mobile</a></li>
								<li><a href="#">HTC Mobile</a></li>
								<li><a href="#">Sony Mobile</a></li>
								<li><a href="#">Apple Mobile</a></li>
								<li><a href="#">LG Mobile</a></li>
								<li><a href="#">Karbonn Mobile</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>CAMERA:</label>
								<ul>
								<li><a href="#">Nikon Camera</a></li>
								<li><a href="#">Canon Camera</a></li>
								<li><a href="#">Sony Camera</a></li>
								<li><a href="#">Samsung Camera</a></li>
								<li><a href="#">Point shoot camera</a></li>
								<li><a href="#">Camera Lens</a></li>
								<li><a href="#">Camera Tripod</a></li>
								<li><a href="#">Camera Bag</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>LAPTOPS:</label>
								<ul>
								<li><a href="#">Apple Laptop</a></li>
								<li><a href="#">Acer Laptop</a></li>
								<li><a href="#">Samsung Laptop</a></li>
								<li><a href="#">Lenovo Laptop</a></li>
								<li><a href="#">Sony Laptop</a></li>
								<li><a href="#">Dell Laptop</a></li>
								<li><a href="#">Asus Laptop</a></li>
								<li><a href="#">Toshiba Laptop</a></li>
								<li><a href="#">LG Laptop</a></li>
								<li><a href="#">HP Laptop</a></li>
								<li><a href="#">Notebook</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>TVS:</label>
								<ul>
								<li><a href="#">Sony TV</a></li>
								<li><a href="#">Samsung TV</a></li>
								<li><a href="#">LG TV</a></li>
								<li><a href="#">Panasonic TV</a></li>
								<li><a href="#">Onida TV</a></li>
								<li><a href="#">Toshiba TV</a></li>
								<li><a href="#">Philips TV</a></li>
								<li><a href="#">Micromax TV</a></li>
								<li><a href="#">LED TV</a></li>
								<li><a href="#">LCD TV</a></li>
								<li><a href="#">Plasma TV</a></li>
								<li><a href="#">3D TV</a></li>
								<li><a href="#">Smart TV</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>TABLETS:</label>
								<ul>
								<li><a href="#">Micromax Tablets</a></li>
								<li><a href="#">HCL Tablets</a></li>
								<li><a href="#">Samsung Tablets</a></li>
								<li><a href="#">Lenovo Tablets</a></li>
								<li><a href="#">Karbonn Tablets</a></li>
								<li><a href="#">Asus Tablets</a></li>
								<li><a href="#">Apple Tablets</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>WATCHES:</label>
								<ul>
								<li><a href="#">FCUK Watches</a></li>
								<li><a href="#">Titan Watches</a></li>
								<li><a href="#">Casio Watches</a></li>
								<li><a href="#">Fastrack Watches</a></li>
								<li><a href="#">Timex Watches</a></li>
								<li><a href="#">Fossil Watches</a></li>
								<li><a href="#">Diesel Watches</a></li>
								<li><a href="#">Luxury Watches</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>CLOTHING:</label>
								<ul>
								<li><a href="#">Shirts</a></li>
								<li><a href="#">Jeans</a></li>
								<li><a href="#">T shirts</a></li>
								<li><a href="#">Kurtis</a></li>
								<li><a href="#">Sarees</a></li>
								<li><a href="#">Levis Jeans</a></li>
								<li><a href="#">Killer Jeans</a></li>
								<li><a href="#">Pepe Jeans</a></li>
								<li><a href="#">Arrow Shirts</a></li>
								<li><a href="#">Ethnic Wear</a></li>
								<li><a href="#">Formal Shirts</a></li>
								<li><a href="#">Peter England Shirts</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>FOOTWEAR:</label>
								<ul>
								<li><a href="#">Shoes</a></li>
								<li><a href="#">Casual Shoes</a></li>
								<li><a href="#">Sports Shoes</a></li>
								<li><a href="#">Formal Shoes</a></li>
								<li><a href="#">Adidas Shoes</a></li>
								<li><a href="#">Gas Shoes</a></li>
								<li><a href="#">Puma Shoes</a></li>
								<li><a href="#">Reebok Shoes</a></li>
								<li><a href="#">Woodland Shoes</a></li>
								<li><a href="#">Red tape Shoes</a></li>
								<li><a href="#">Nike Shoes </a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								</div>
								</div>

                    </div>
    <!-- /SP Custom Html -->


							</div>
						</div>
										<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-sm-8">
									<div class="copyright">&copy; 2016 Prestashop Themes Demo Store. All Rights Reserved.  Designed By <a target="_blank" title="Visit MagenTech!" href="http://magentech.com/">MagenTech.Com</a></div>								</div>
								<div class="col-sm-4">
									<div class="footer-payment">
<img src="http://prestashop.flytheme.net/sp_market/modules/spthemeconfigurator/patterns/payments-1-1.png" alt="payment logos" >
</div>

								</div>
							</div>
						</div>
					</div>

					<div class="backtop">
						<a id="sp-totop" class="backtotop" href="#" title="Back to top">
							<i class="fa fa-arrow-up"></i>
						</a>
					</div>

				</div><!-- #footer -->
					</div><!-- #page -->

						<div id="sp-cpanel_btn" class="isDown">
	<i class="fa fa-cog fa-spin"></i>
</div>

<div id="sp-cpanel" class="sp-delay">
	<form action="http://prestashop.flytheme.net/sp_market/" method="get" class="no-margin">
	<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-close"> </i></span></h2>
	<div id="sp-cpanel_settings">

		<div class="panel-group">
			<label class="title">Select Demo </label>
			<div class="group-boxed">
				<div class="demo demo-1">
					<label>Demo 1</label>
					<div class="bg_demo bg_demo1">
						<a href=" ?SP_cplthemesColors=%23f4a137&SP_cpllayoutStyle=layout-full&SP_cplheaderStyle=header-v1&SP_cplcontentStyle=content-v1&SP_cplbody_bg_pattern=none&SP_cplApply=Apply" class="select-demo demo1" title="Demo 1">
							<img src="http://prestashop.flytheme.net/sp_market/themes/sp_market/img/demo1.jpg" alt=""/>
						</a>
					</div>
				</div>
				<div class="demo demo-2">
					<label>Demo 2</label>
					<div class="bg_demo bg_demo2">
						<a href=" ?SP_cplthemesColors=%23f4a137&SP_cpllayoutStyle=layout-full&SP_cplheaderStyle=header-v2&SP_cplcontentStyle=content-v2&SP_cplbody_bg_pattern=none&SP_cplApply=Apply" class="select-demo demo2" title="Demo 2">
							<img src="http://prestashop.flytheme.net/sp_market/themes/sp_market/img/demo2.jpg" alt=""/>
						</a>
					</div>
				</div>
				<div class="demo demo-3">
					<label>Demo 3</label>
					<div class="bg_demo bg_demo3">
						<a href=" ?SP_cplthemesColors=%23f4a137&SP_cpllayoutStyle=layout-full&SP_cplheaderStyle=header-v3&SP_cplcontentStyle=content-v3&SP_cplbody_bg_pattern=none&SP_cplApply=Apply" class="select-demo demo3" title="Demo 3">
							<img src="http://prestashop.flytheme.net/sp_market/themes/sp_market/img/demo3.jpg" alt=""/>
						</a>
					</div>
				</div>
				<div class="demo demo-4">
					<label>Demo 4</label>
					<div class="bg_demo bg_demo4">
						<a href=" ?SP_cplthemesColors=%23f4a137&SP_cpllayoutStyle=layout-full&SP_cplheaderStyle=header-v4&SP_cplcontentStyle=content-v4&SP_cplbody_bg_pattern=none&SP_cplApply=Apply" class="select-demo demo3" title="Demo 4">
							<img src="http://prestashop.flytheme.net/sp_market/themes/sp_market/img/demo4.jpg" alt=""/>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="panel-group ">
			<label class="title">Select Theme Color</label>
			<div class="group-schemes" >
				<input id="spcpl_themesColors" name="SP_cplthemesColors" class="form-control minicolors minicolors-input" type="text" value="#f4a137" />
				<script type="text/javascript">
					(function($){
						$("#spcpl_themesColors").minicolors({
							position: "bottom right",
							changeDelay: 200,
							theme: "bootstrap"
						});
					})(jQuery)
				</script>

			 </div>

		</div>

		<div class="panel-group hidden-device">
			<label class="title">Select Menu</label>
			<div class="group-boxed">
				<div class="selectbox">
					<select name="SP_cplkeepMenuTop">
						<option   selected="selected" value="0">Menu Scroll</option>
						<option value="1">Menu On Top</option>
					</select>
				</div>
			</div>
		</div>

		 <div class="panel-group">
			<label class="title">Select Product Effect</label>
			<div class="group-boxed">
				<div class="selectbox">
					<select name="SP_cplsecondimg">
						<option   selected="selected" value="0">One Image Product</option>
						<option value="1">Two Images Product</option>
					</select>
				</div>
			</div>
		</div>

		<div class="panel-group hidden-device">
			<label class="title">Select Layout Style</label>
			<div class="group-boxed">
				<div class="selectbox">
					<select name="SP_cpllayoutStyle">
						<option    selected="selected" value="layout-full">Full Width</option>
						<option value="layout-boxed">Boxed</option>
						<option value="layout-framed">Framed</option>
						<option value="layout-rounded">Rounded</option>
					</select>
				</div>
			</div>
		</div>

        <div class="panel-group hidden-device">
			<label class="title">Select Body Image</label>
			<div class="group-boxed">
				<input type="hidden" name="SP_cplbody_bg_pattern" value="none" />
				<div data-pattern="none" class="img-pattern pattern_none   active "><span></span></div>
									<div data-pattern="1" class="img-pattern pattern_1 "><span></span></div>
									<div data-pattern="2" class="img-pattern pattern_2 "><span></span></div>
									<div data-pattern="3" class="img-pattern pattern_3 "><span></span></div>
									<div data-pattern="4" class="img-pattern pattern_4 "><span></span></div>
									<div data-pattern="5" class="img-pattern pattern_5 "><span></span></div>
							</div>


		</div>

		<div class="reset-group">
		    <input type="submit" class="btn btn-default" value="Reset" name="SP_cplReset"/>
			<input type="submit" class="btn btn-success" value="Apply" name="SP_cplApply"/>
		</div>



	</div>
	</form>
</div>

<script type="text/javascript">

	(function($){
		$(".img-pattern").each(function(){
			var that = $(this) 	;
			that.on('click', function(){
				var _pattern =  $(this).data('pattern');
				$('input[name="SP_cplbody_bg_pattern"]').val(_pattern);
				if($(this).hasClass('selected'))
					return;
				else{
					$(".img-pattern").removeClass('selected');
					$(".img-pattern").removeClass('active');
					$(this).addClass('selected');
				}
			});
		});

	})(jQuery);

	(function($){
		var _menu = $('select[name="SP_cplkeepMenuTop"]').val();
		var _script = $('<script type="text/javascript" src="http://prestashop.flytheme.net/sp_market/themes/sp_market/js/sp_lib/jquery.keepmenu.js">');
		if( _menu == 1)
			$('head').append(_script);
	})(jQuery);

	 $(document).ready(function($){

		$(".demo-1").on('click',function(){
				if($('.bg_demo1').hasClass('active_form')){
					$('.bg_demo1').removeClass('active_form');
				}else{
					$('.bg_demo1').removeClass('active_form');
					$('.bg_demo1').addClass('active_form');
				}
				if($('.demo-1').hasClass('active')){
					$('.demo-1').removeClass('active');
				}else{
					$('.demo-1').removeClass('active');
					$('.demo-1').addClass('active');
				}

		 });

		$(".demo-2").on('click',function(){
				if($('.bg_demo2').hasClass('active_form')){
					$('.bg_demo2').removeClass('active_form');
				}else{
					$('.bg_demo2').removeClass('active_form');
					$('.bg_demo2').addClass('active_form');
				}
				if($('.demo-2').hasClass('active')){
					$('.demo-2').removeClass('active');
				}else{
					$('.demo-2').removeClass('active');
					$('.demo-2').addClass('active');
				}
		 });
		 $(".demo-3").on('click',function(){
				if($('.bg_demo3').hasClass('active_form')){
					$('.bg_demo3').removeClass('active_form');
				}else{
					$('.bg_demo3').removeClass('active_form');
					$('.bg_demo3').addClass('active_form');
				}
				if($('.demo-3').hasClass('active')){
					$('.demo-3').removeClass('active');
				}else{
					$('.demo-3').removeClass('active');
					$('.demo-3').addClass('active');
				}
		 });

		 $(".demo-4").on('click',function(){
				if($('.bg_demo4').hasClass('active_form')){
					$('.bg_demo4').removeClass('active_form');
				}else{
					$('.bg_demo4').removeClass('active_form');
					$('.bg_demo4').addClass('active_form');
				}
				if($('.demo-4').hasClass('active')){
					$('.demo-4').removeClass('active');
				}else{
					$('.demo-4').removeClass('active');
					$('.demo-4').addClass('active');
				}
		 });

		$('.demo-1').click(function(){
			$('.demo-2').removeClass('active');
			$('.bg_demo2').removeClass('active_form')
		});
		$('.demo-1').click(function(){
			$('.demo-3').removeClass('active');
			$('.bg_demo3').removeClass('active_form')
		});
		$('.demo-1').click(function(){
			$('.demo-4').removeClass('active');
			$('.bg_demo4').removeClass('active_form')
		});

		$('.demo-2').click(function(){
			$('.demo-1').removeClass('active');
			$('.bg_demo1').removeClass('active_form');
		});
		$('.demo-2').click(function(){
			$('.demo-3').removeClass('active');
			$('.bg_demo3').removeClass('active_form')
		});
		$('.demo-2').click(function(){
			$('.demo-4').removeClass('active');
			$('.bg_demo4').removeClass('active_form')
		});

		$('.demo-3').click(function(){
			$('.demo-1').removeClass('active');
			$('.bg_demo1').removeClass('active_form')
		});
		$('.demo-3').click(function(){
			$('.demo-2').removeClass('active');
			$('.bg_demo2').removeClass('active_form')
		});
		$('.demo-3').click(function(){
			$('.demo-4').removeClass('active');
			$('.bg_demo4').removeClass('active_form')
		});
    });

</script>
	<script type="text/javascript">
		jQuery(function(){
				function scroll_to(div){
					$('html, body').animate({
						scrollTop: $(div).offset().top-80
					},800);
				}
				$(".list_diemneo ul li").each(function(){
					$(this).click(function(){
						$('.list_diemneo ul li').removeClass("active");
						$(this).addClass("active");
						var neoindext=$(this).index()+1;
						scroll_to(".title_neo"+neoindext);
						var neodiv = (".title_neo"+neoindext);
						console.log(neodiv);
						var x = $(neodiv).position();
						$(".custom-scoll").css("top",x.top);
						return true;
					});
				});
			});
			jQuery(function(){
				var windowswidth = $(window).width();
				var containerwidth = $('.container').width();
				var widthcss = (windowswidth-containerwidth)/2-70;

				var rtl = jQuery( 'body' ).hasClass( 'rtl' );
				if( !rtl ) {
					jQuery(".custom-scoll").css("left",widthcss);
				}else{
					jQuery(".custom-scoll").css("right",widthcss);
				}
				var x = $(".title_neo3").position();

			});
	</script>
</body></html>
