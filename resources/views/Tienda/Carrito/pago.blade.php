@extends('Tienda.Layout.app')
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
var generated_date = 1515509604;
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
var page_name = 'module-bankwire-payment';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
var usingSecureMode = false;
var wishlistProductsIds = [{"id_product":"2","quantity":"1","product_quantity":"0","name":"Aliquam lobortis","id_product_attribute":"0","priority":"0","link_rewrite":"blouse","category_rewrite":"electronics","attributes_small":""},{"id_product":"8","quantity":"1","product_quantity":"0","name":"Etiam Andouille","id_product_attribute":"0","priority":"1","link_rewrite":"printed-dress","category_rewrite":"electronics","attributes_small":""}];
</script>

<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">
    <!-- Breadcrumb -->
    <div class="breadcrumb clearfix">
      <ul>
		      <li class="home"><a href="{{url('Tienda')}}">Inicio</a></li>
									    <li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/order?step=3" title="Volver al Pedido">Procesos de Pedido</a></li> <li class="depth2">Pago por transferencia bancaria</li>

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




<h1 class="page-heading">
    Resumen del pedido
</h1>





<!-- Steps -->
<ul class="step clearfix" id="order_step">
  <li class="step_done first">
    <a href="{{url('Carrito')}}"><em>01.</em> Resumen</a>
  </li>

  <li class="step_current second">
          <span><em>02.</em> Dirección</span>
      </li>
  <li class="step_todo third">
          <span><em>03.</em> Envio</span>
      </li>
  <li id="step_end" class="step_todo last">
    <span><em>04.</em> Pago</span>
  </li>
</ul>
<!-- /Steps -->


    <form action="http://prestashop.flytheme.net/sp_market/es/module/bankwire/validation" method="post">
        <div class="box cheque-box">
            <h3 class="page-subheading">
                Pago por transferencia bancaria
            </h3>
            <p class="cheque-indent">
                <strong class="dark">
                    Ha elegido pagar por transferencia bancaria. Aquí tiene un resumen de su pedido:
                </strong>
            </p>
            <p>
                - El importe total de su pedido es
                <span id="amount" class="price">$28.00</span>
                                    (impuestos inc.)
                            </p>
            <p>
                -
                                    Aceptamos las siguientes monedas para las transferencias bancarias:&nbsp;<b>USD</b>
                    <input type="hidden" name="currency_payment" value="1" />
                            </p>
            <p>
                - La información para realizar la transferencia bancaria aparecerá en la página siguiente.
                <br />
                - Por favor, confirme su pedido haciendo clic en &quot;Confirmo mi pedido&quot;.
            </p>
        </div><!-- .cheque-box -->
        <p class="cart_navigation clearfix" id="cart_navigation">
            <a class="button-exclusive btn btn-default" href="http://prestashop.flytheme.net/sp_market/es/order?step=3">
                <i class="fa fa-chevron-left left"></i>Otros métodos de pago
            </a>
            <button class="button btn btn-default button-medium" type="submit">
                <span>Confirmo mi pedido<i class="fa fa-chevron-right right"></i></span>
            </button>
        </p>
    </form>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
