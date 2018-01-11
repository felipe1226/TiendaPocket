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

				@if(isset($pedidos))
					@if(count($pedidos) == 0)
						<p class="alert alert-warning">No has realizado pedidos!.</p>
					@else

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

							@foreach($pedidos as $pedido)
								<tr class="first_item ">
									<td class="history_link bold">
										<a class="color-myaccount" href="#">
										{{$pedido->referencia}}
										</a>
									</td>
									<td data-value="20171221204509" class="history_date bold">
  									{{$pedido->fecha_envio}}
									</td>
									<td data-value="20171221204509" class="history_date bold">
  									{{$pedido->fecha_entrega}}
									</td>
									<td class="history_price">
										<span class="price">
                      {{$pedido->costoTotal}}
										</span>
									</td>
									<td class="history_method">{{$pedido->tipoPago}}</td>
									<td data-value="10" class="history_state">
										<span class="label" style="background-color:#4169E1; border-color:#4169E1;">
											{{$pedido->estado}}
										</span>
															</td>
								<td class="history_invoice">
																	{{$pedido->factura}}
															</td>
								<td class="history_detail">
									<a onclick="infoPedido({{$pedido->referencia}})" class="btn btn-default button button-small" href="javascript:void(0);">
										<span>
											Detalles<i class="fa fa-chevron-right right"></i>
										</span>
									</a>
								</td>
								</tr>
							@endforeach
						@endif
					@endif
				</tbody>
		</table>
    <div id="block-order-detail" class="unvisible" style="display: none"><div class="box box-small clearfix">
		<p class="dark">
		<strong>Referencia de pedido
      <span id="referencia"></span> - creado en <span id="created"></span></strong>
	</p>
</div>

<h1 class="page-heading">Detalles del pedido</h1>
<div class="table_block">
	<table class="detail_step_by_step table table-bordered">
		<thead>
			<tr>
				<th class="first_item">Fecha</th>
				<th class="last_item">Estado</th>
			</tr>
		</thead>
		<tbody>
					<tr class="first_item item">
				<td class="step-by-step-date">2017-12-21</td>
				<td><span id="estado" style="background-color:#4169E1; border-color:#4169E1;" class="label"></span></td>
			</tr>
				</tbody>
	</table>
</div>


<div class="adresses_bloc">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<ul class="address alternate_item box">
				<li><h3 class="page-subheading"><span id="referenciaDireccion"></span></h3></li>
        <li><span id="nombres"class="address_firstname">Felipe</span> <span class="address_lastname">Bedoya</span></li>
        <li class="address_company">Pocket</li>
        <li><span class="address_address1">tranv 9 #22-42</span> <span class="address_address2">diag 23</span></li>
        <li><span class="address_city">Tulua,</span> <span class="address_State:name">Washington</span> <span class="address_postcode">12345</span></li>
        <li><span class="address_Country:name">United States</span></li>
        <li><span class="address_phone">2305539</span></li>
        <li class="address_phone_mobile">3156624815</li>
			</ul>
		</div>
	</div>
</div>

<form action="http://prestashop.flytheme.net/sp_market/es/order-follow" method="post"><div id="order-detail-content" class="table_block table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
								<th class="first_item">Reference</th>
				<th class="item">Product</th>
				<th class="item">Quantity</th>
								<th class="item">Unit price</th>
				<th class="last_item">Total price</th>
			</tr>
		</thead>
		<tfoot>
							<tr class="item">
					<td colspan="1">
						<strong>Items (tax excl.)</strong>
					</td>
					<td colspan="4">
						<span class="price">$723.00</span>
					</td>
				</tr>
						<tr class="item">
				<td colspan="1">
					<strong>Items (tax incl.) </strong>
				</td>
				<td colspan="4">
					<span class="price">$723.00</span>
				</td>
			</tr>
									<tr class="item">
				<td colspan="1">
					<strong>Shipping &amp; handling (tax incl.) </strong>
				</td>
				<td colspan="4">
					<span class="price-shipping">$2.00</span>
				</td>
			</tr>
			<tr class="totalprice item">
				<td colspan="1">
					<strong>Total</strong>
				</td>
				<td colspan="4">
					<span id="costoTotal"class="price"></span>
				</td>
			</tr>
		</tfoot>
		<tbody>
																														<!-- Customized products -->
								<!-- Classic products -->
									<tr class="item">
												<td><label for="cb_58">demo_33</label></td>
						<td class="bold">
							<label for="cb_58">
																	Sapien fermen - Size : S, Color : Orange
															</label>
						</td>
						<td class="return_quantity">
							<input class="order_qte_input form-control grey" name="order_qte_input[58]" type="text" size="2" value="1">
							<div class="clearfix return_quantity_buttons">
								<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="fa fa-minus"></i></span></a>
								<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="fa fa-plus"></i></span></a>
							</div>
							<label for="cb_58"><span class="order_qte_span editable">1</span></label></td>
												<td class="price">
							<label for="cb_58">
															$99.00
														</label>
						</td>
						<td class="price">
							<label for="cb_58">
															$99.00
														</label>
						</td>
					</tr>
																																					<!-- Customized products -->
								<!-- Classic products -->
									<tr class="item">
												<td><label for="cb_59">demo_34</label></td>
						<td class="bold">
							<label for="cb_59">
																	Roccaecat dolore - Size : S, Color : Orange
															</label>
						</td>
						<td class="return_quantity">
							<input class="order_qte_input form-control grey" name="order_qte_input[59]" type="text" size="2" value="4">
							<div class="clearfix return_quantity_buttons">
								<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="fa fa-minus"></i></span></a>
								<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="fa fa-plus"></i></span></a>
							</div>
							<label for="cb_59"><span class="order_qte_span editable">4</span></label></td>
												<td class="price">
							<label for="cb_59">
															$156.00
														</label>
						</td>
						<td class="price">
							<label for="cb_59">
															$624.00
														</label>
						</td>
					</tr>
													</tbody>
	</table>
</div>
</form>
		<h3 class="page-heading">Mensaje</h3>
	 <div class="table_block">
		<table class="detail_step_by_step table table-bordered">
			<thead>
				<tr>
					<th class="first_item" style="width:150px;">De</th>
					<th class="last_item">Comentario</th>
				</tr>
			</thead>
			<tbody>
							<tr class="first_item item">
					<td>
						<strong class="dark">
															Felipe Bedoya
													</strong>
						<br>
						2017-12-21 20:45:09
					</td>
					<td>hola</td>
				</tr>
						</tbody>
		</table>
	</div>
				<form action="http://prestashop.flytheme.net/sp_market/es/index.php?controller=order-detail" method="post" class="std" id="sendOrderMessage">
		<h3 class="page-heading bottom-indent">Agrega un mensaje</h3>
		<p>Si desea agregar un comentario sobre su pedido, escríbalo en el campo a continuación.</p>
		<p class="form-group">
		<label for="id_product">Product</label>
			<select id="articulos" name="id_product" class="form-control">
				<option></option>
							</select>
		</p>
		<p class="form-group">
			<textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
		</p>
		<div class="submit">
			<input type="hidden" name="id_order" value="21">
			<input type="submit" class="unvisible" name="submitMessage" value="Send">
			<button type="submit" name="submitMessage" class="button btn btn-default button-medium"><span>Enviar<i class="fa fa-chevron-right right"></i></span></button>
		</div>
	</form>
</div>
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

      <script>

      function infoPedido(ref){


        $('#block-order-detail').fadeOut('slow', function() {
              $.scrollTo(this, 2000);

          $('#articulos').empty();
          $('#articulos').append($('<option>', {
                value: 0,
                text: 'Elija un articulo'
            }));

            JSONPedidos = eval(<?php echo json_encode($pedidos);?>);
            JSONPedidos.forEach(function(currentValue,index,arr) {
              if(currentValue.referencia == ref){
                $('#referencia').html(currentValue.referencia);
                $('#created').html(currentValue.created_at);

                $('#estado').html(currentValue.estado);


                $('#costoTotal').html(currentValue.costoTotal);
                $('#comentario').html(currentValue.comentario);

                $('#articulos').append($('<option>', {
                  value: currentValue.id_articulo,
                  text: currentValue.nombre_articulo
              }));
              }
          });
          });


          $('#block-order-detail').fadeIn('slow', function() {
                $.scrollTo(this, 2000);
          });

        }



      </script>


@endsection
