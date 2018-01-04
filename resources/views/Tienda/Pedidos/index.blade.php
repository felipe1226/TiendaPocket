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
var baseDir = '/';
var baseUri = '/';
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
var generated_date = 1514909928;
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
var page_name = 'history';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
var usingSecureMode = false;
var wishlistProductsIds = [{"id_product":"2","quantity":"1","product_quantity":"0","name":"Aliquam lobortis","id_product_attribute":"0","priority":"1","link_rewrite":"blouse","category_rewrite":"electronics","attributes_small":""}];
</script>

<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

<!-- Breadcrumb -->
    <div class="breadcrumb clearfix">
    	<ul>
    		<li class="home"><a href="{{url('Tienda')}}" title="Return to Home">Inicio</a></li>
        <li class="depth1"><a href="{{url('Cuenta')}}">Mi cuenta</a></li>
        <li class="depth2"><a href="#">Historial de pedidos</a></li>
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
				<h1 class="page-heading bottom-indent">Historial de pedidos</h1>
				<p class="info-title">Estos son los pedidos que han realizado.</p>
				<div class="block-center" id="block-history">
					<table id="order-list" class="table table-bordered footab">
						<thead>
							<tr>
									<th class="first_item" data-sort-ignore="true">Referencia</th>
									<th class="item">Fecha envio</th>
									<th class="item">Fecha entrega</th>
									<th data-hide="phone" class="item">Costo Total</th>
									<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Metodo de pago</th>
									<th class="item">Estado</th>
									<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Factura</th>
									<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
							</tr>
						</thead>
					<tbody>
					@if(isset($pedidos))
						@if($pedidos == 0)
							<p class="alert alert-warning">No has realizado pedidos!.</p>
						@else
							@foreach($pedidos as $pedido)
								<tr class="first_item ">
									<td class="history_link bold">
										<a class="color-myaccount" href="javascript:showOrder(1, 21, 'http://prestashop.flytheme.net/sp_market/es/index.php?controller=order-detail');">
										LYZPJTFJF
										</a>
									</td>
									<td data-value="20171221204509" class="history_date bold">
									2017-12-21
									</td>
									<td data-value="20171221204509" class="history_date bold">
									2017-12-21
									</td>
									<td class="history_price" data-value="725.000000">
										<span class="price">
										$725.00
										</span>
									</td>
									<td class="history_method">Transferencia bancaria</td>
									<td data-value="10" class="history_state">
										<span class="label" style="background-color:#4169E1; border-color:#4169E1;">
											En espera de pago
										</span>
															</td>
								<td class="history_invoice">
																	-
															</td>
								<td class="history_detail">
									<a class="btn btn-default button button-small" href="javascript:showOrder(1, 21, 'http://prestashop.flytheme.net/sp_market/es/index.php?controller=order-detail');">
										<span>
											Detalles<i class="fa fa-chevron-right right"></i>
										</span>
									</a>
																	<a class="link-button button" href="http://prestashop.flytheme.net/sp_market/es/order?submitReorder=&amp;id_order=21" title="Reorder">
																										<i class="fa fa-refresh left"></i>Re-ordenar
																	</a>
								</td>
								</tr>
							@endforeach
						@endif
					@endif
				</tbody>
		</table>
		<div id="block-order-detail" class="unvisible">&nbsp;</div>
	</div>
<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="{{url('Cuenta')}}">
			<span>
				<i class="fa fa-chevron-left left"></i> Regresar
			</span>
		</a>
	</li>
	<li>
		<a class="btn btn-default button button-small" href="{{url('Tienda')}}">
			<span><i class="fa fa-chevron-left left"></i> Inicio</span>
		</a>
	</li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
@endsection
