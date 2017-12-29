@extends('Tienda.layout.app')
@section('content')

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
	var generated_date = 1514508711;
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
	var page_name = 'history';
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

								<script type="text/javascript" src="/sp_market/js/jquery/jquery-1.11.0.min.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/jquery-migrate-1.2.1.min.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.easing.js"></script>
								<script type="text/javascript" src="/sp_market/js/tools.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/global.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/10-bootstrap.min.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/15-jquery.total-storage.min.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/15-jquery.uniform-modified.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/jquery.mCustomScrollbar.concat.min.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/slick.min.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/products-comparison.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/history.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.scrollTo.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/footable/jquery.footable.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/footable-sort/jquery.footable-sort.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spthemeconfigurator/views/js/front/jquery.miniColors.min.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spthemeconfigurator/views/js/front/sp-cpanel.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.backtotop.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.global.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.ui.touch-punch.min.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.elevatezoom.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/tools/treeManagement.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spextraslider/views/js/owl.carousel.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spdeal/views/js/deal.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spdeal/views/js/jquery.cj-swipe.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spcategories/views/js/jquery.imagesloaded.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spcategories/views/js/jquery.sj_accordion.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spsearchpro/views/js/jquery.autocomplete.js"></script>
								<script type="text/javascript" src="/sp_market/themes/sp_market/js/modules/spblockcart/ajax-cart.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.serialScroll.js"></script>
								<script type="text/javascript" src="/sp_market/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
								<script type="text/javascript" src="/sp_market/modules/sphomeslider/js/owl.carousel.js"></script>
								<script type="text/javascript" src="/sp_market/modules/spblocknewsletter/jquery.cookie.min.js"></script>

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
		<ul>
			<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
											<li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/my-account">
			My account
		</a></li>

		<li class="depth2"><span class="navigation_page">Order history</span></li>

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




	<h1 class="page-heading bottom-indent">Order history</h1>
	<p class="info-title">Here are the orders you&#039;ve placed since your account was created.</p>
	<div class="block-center" id="block-history">
				<table id="order-list" class="table table-bordered footab">
				<thead>
					<tr>
						<th class="first_item" data-sort-ignore="true">Order reference</th>
						<th class="item">Date</th>
						<th data-hide="phone" class="item">Total price</th>
						<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Payment</th>
						<th class="item">Status</th>
						<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Invoice</th>
						<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
										<tr class="first_item ">
							<td class="history_link bold">
															<a class="color-myaccount" href="javascript:showOrder(1, 22, 'http://prestashop.flytheme.net/sp_market/es/index.php?controller=order-detail');">
									OKXMTAKTF
								</a>
							</td>
							<td data-value="20171228194826" class="history_date bold">
								2017-12-28
							</td>
							<td class="history_price" data-value="162.240000">
								<span class="price">
									$162.24
								</span>
							</td>
							<td class="history_method">Transferencia bancaria</td>
							<td data-value="10" class="history_state">
																<span class="label" style="background-color:#4169E1; border-color:#4169E1;">
										Awaiting bank wire payment
									</span>
														</td>
							<td class="history_invoice">
																-
														</td>
							<td class="history_detail">
								<a class="btn btn-default button button-small" href="javascript:showOrder(1, 22, 'http://prestashop.flytheme.net/sp_market/es/index.php?controller=order-detail');">
									<span>
										Details<i class="fa fa-chevron-right right"></i>
									</span>
								</a>
																<a class="link-button button" href="http://prestashop.flytheme.net/sp_market/es/order?submitReorder=&amp;id_order=22" title="Reorder">
																									<i class="fa fa-refresh left"></i>Reorder
																</a>
							</td>
						</tr>
								</tbody>
			</table>
			<div id="block-order-detail" class="unvisible">&nbsp;</div>
		</div>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/es/my-account">
				<span>
					<i class="fa fa-chevron-left left"></i> Back to Your Account
				</span>
			</a>
		</li>
		<li>
			<a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/">
				<span><i class="fa fa-chevron-left left"></i> Home</span>
			</a>
		</li>
	</ul>
						</div><!-- #center_column -->
						</div><!-- .row -->
					</div><!-- #columns -->



				</div><!-- .columns-container -->

	@endsection
