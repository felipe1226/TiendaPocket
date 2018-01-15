@extends('Tienda.Layout.app')
@section('content')

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

							@foreach($pedidosGroup as $pedidoGroup)
								<tr class="first_item ">
									<td class="history_link bold">
										<a class="color-myaccount" href="#">
										{{$pedidoGroup->referencia}}
										</a>
									</td>
									<td data-value="20171221204509" class="history_date bold">
										@if($pedidoGroup->fecha_envio == "0000-00-00")
											-
										@else
  										{{$pedidoGroup->fecha_envio}}
										@endif
									</td>
									<td data-value="20171221204509" class="history_date bold">
  									@if($pedidoGroup->fecha_entrega == "0000-00-00")
										 -
										@else
  										{{$pedidoGroup->fecha_entrega}}
										@endif
									</td>
									<td class="history_price">
										<span class="price">
                      {{$pedidoGroup->costoTotal}}
										</span>
									</td>
									<td class="history_method">{{$pedidoGroup->tipoPago}}</td>
									<td data-value="10" class="history_state">
										<span class="label" style="background-color:#4169E1; border-color:#4169E1;">
											{{$pedidoGroup->estado}}
										</span>
															</td>
								<td class="history_invoice">
																	{{$pedidoGroup->factura}}
															</td>
								<td class="history_detail">
									<a onclick="infoPedido({{$pedidoGroup->referencia}})" class="btn btn-default button button-small" href="javascript:void(0);">
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
        <li><span id="nombre"class="address_firstname"></span></li>
        <li><span id="direccion" class="address_address1"></span></li>
        <li><span id="localidad" class="address_city"></span>
        <li><span id="telefono" class="address_phone"></span></li>
        <li<span id="movil" class="address_phone_mobile"></li>
			</ul>
		</div>
	</div>
</div>

<form action="http://prestashop.flytheme.net/sp_market/es/order-follow" method="post"><div id="order-detail-content" class="table_block table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="first_item">Articulo</th>
				<th class="item">Marca</th>
				<th class="item">Precio unitario</th>
				<th class="item">Cantidad</th>
				<th class="last_item">Total</th>
			</tr>
		</thead>
		<tfoot>
						<tr class="item">
				<td colspan="1">
					<strong>Total articulos</strong>
				</td>
				<td colspan="4">
					<span id="totalArticulos" class="price">$723.00</span>
				</td>
			</tr>
									<tr class="item">
				<td colspan="1">
					<strong>Costo de envio</strong>
				</td>
				<td colspan="4">
					<span class="price-shipping">$2.00</span>
				</td>
			</tr>
			<tr class="totalprice item">
				<td colspan="1">
					<strong>Total del pedido</strong>
				</td>
				<td colspan="4">
					<span id="costoTotal" class="price"></span>
				</td>
			</tr>
		</tfoot>
		<tbody id="pedidos">
			<!-- Customized products -->
			<!-- Classic products -->
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
				var costoArticulo = 0 ;
				var totalArticulos = 0 ;

        $('#block-order-detail').fadeOut('slow', function() {
              $.scrollTo(this, 2000);

          $('#pedidos').empty();
					$('#articulos').empty();
          $('#articulos').append($('<option>', {
                value: 0,
                text: 'Elija un articulo'
            }));

            JSONPedidos = eval(<?php echo json_encode($pedidos);?>);
            JSONPedidos.forEach(function(currentValue,index,arr) {
              if(currentValue.referencia == ref){

  							$('#referenciaDireccion').html(currentValue.referencia_direccion);
								$('#nombre').html(currentValue.nombre);
								$('#direccion').html(currentValue.direccion);
								$('#localidad').html(currentValue.localidad);
								$('#telefono').html(currentValue.telefono);
								$('#movil').html(currentValue.movil);

                $('#referencia').html(currentValue.referencia);
                $('#created').html(currentValue.created_at);
                $('#estado').html(currentValue.estado);
                $('#costoTotal').html("$"+currentValue.costoTotal);


                $('#comentario').html(currentValue.comentario);

								costoArticulo = eval(currentValue.cantidad_articulo*currentValue.precio_articulo);
								totalArticulos = eval(totalArticulos + costoArticulo);

								$('#pedidos').append('<tr class="item"><td><label>'+currentValue.nombre_articulo+'</label></td><td class="bold"><label>'+currentValue.proveedor+'</label></td><td class="price"><label>$'+currentValue.precio_articulo+'</label></td><td class="return_quantity"><span>'+currentValue.cantidad_articulo+'</span></td><td class="price"><label>$'+costoArticulo+'</label></td></tr>');



                $('#articulos').append($('<option>', {
                  value: currentValue.id_articulo,
                  text: currentValue.nombre_articulo
              }));
              }
          	});
						$('#totalArticulos').html("$"+totalArticulos);

          });


          $('#block-order-detail').fadeIn('slow', function() {
                $.scrollTo(this, 2000);
          });

        }

      </script>


@endsection
