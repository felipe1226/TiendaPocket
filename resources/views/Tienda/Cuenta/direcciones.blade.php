@extends('Tienda.Layout.app')
@section('content')

    <script type="text/javascript">
    var CUSTOMIZE_TEXTFIELD = 1;
    var FancyboxI18nClose = 'Close';
    var FancyboxI18nNext = 'Next';
    var FancyboxI18nPrev = 'Previous';
    var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
    var ajax_allowed = true;
    var ajaxsearch = false;
    var baseDir = '/';
    var baseUri = '/';
    var comparator_max_item = 3;
    var comparedProductsIds = [22];
    var contentOnly = false;
    var currency = {"id":1,"name":"USD","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000",,"format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
    var currencyBlank = 0;
    var currencyFormat = 1;
    var currencyRate = 1;
    var currencySign = '$';
    var customizationIdMessage = 'Customization #';
    var displayList = false;
    var freeProductTranslation = 'Free!';
    var freeShippingTranslation = 'Free shipping!';
    var generated_date = 1513833335;
    var id_lang = 4;
    var img_dir = '../themes/sp_market/img/';
    var instantsearch = false;
    var isGuest = 0;
    var isLogged = 1;
    var isMobile = false;
    var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
    var mywishlist_url = 'http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist';
    var page_name = 'index';
    var priceDisplayMethod = 1;
    var priceDisplayPrecision = 2;
    var quickView = true;
    var roundMode = 2;
    var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
    var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
    var usingSecureMode = false;
    var wishlistProductsIds = false;
    </script>


			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
		<li class="depth1">Mis direcciones</li>
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


	<h1 class="page-heading">My addresses</h1>
<p>Please configure your default billing and delivery addresses when placing an order. You may also add additional addresses, which can be useful for sending gifts or receiving an order at your office.</p>
<div class="addresses">
	<p><strong class="dark">Your addresses are listed below.</strong></p>
	<p class="p-indent">Be sure to update your personal information if it has changed.</p>
		<div class="bloc_adresses row">
	    	<div class="col-xs-12 col-sm-6 address">
			<ul class="last_item item box">
                <li><h3 class="page-subheading">Principal</h3></li>
                                                        <li>
                                            <span  class="address_name">
                            Felipe
                        </span>
                                            <span  class="address_name">
                            Bedoya
                        </span>
                                        </li>
                                                        <li>
                                            <span  class="address_company">
                            Pocket
                        </span>
                                        </li>
                                                        <li>
                                            <span  class="address_address1">
                            tranv 9 #22-42
                        </span>
                                            <span  class="address_address2">
                            diag 23
                        </span>
                                        </li>
                                                        <li>
                                            <span >
                            Tulua,
                        </span>
                                            <span >
                            Washington
                        </span>
                                            <span >
                            12345
                        </span>
                                        </li>
                                                        <li>
                                            <span >
                            United States
                        </span>
                                        </li>
                                                        <li>
                                            <span  class="address_phone">
                            2305539
                        </span>
                                        </li>
                                                        <li>
                                            <span  class="address_phone_mobile">
                            3156624815
                        </span>
                                        </li>
                                <li class="address_update">
                <a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/es/address?id_address=23" title="Update"><span>Update<i class="fa fa-chevron-right right"></i></span></a>
                <a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/es/address?id_address=23&amp;delete=" data-id="addresses_confirm" title="Delete"><span>Delete<i class="fa fa-remove right"></i></span></a></li>
            </ul>
        </div>
			</div>
</div>
<div class="clearfix main-page-indent">
	<a href="{{url('Cuenta/AgregarDireccion')}}" title="Add an address" class="btn btn-default button button-medium"><span>Agregar nueva direccion<i class="fa fa-chevron-right right"></i></span></a>
</div>
<ul class="footer_links clearfix">
	<li><a class="btn btn-default button button-small" href="{{url('Cuenta')}}"><span><i class="fa fa-chevron-left left"></i> Regresar</span></a></li>
	<li><a class="btn btn-default button button-small" href="{{url('Tienda')}}"><span><i class="fa fa-chevron-left left"></i> Inicio</span></a></li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
