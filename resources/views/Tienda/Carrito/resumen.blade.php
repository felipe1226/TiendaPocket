@extends('Tienda.Layout.app')
@section('content')

  <script type="text/javascript" src="themes/sp_market/js/carrito.js"></script>

			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="{{url('Tienda/')}}">Inicio</a></li>
		<li class="depth1"><a href="{{url('Carrito')}}">Carrito</a></li>
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

<h1 id="cart_title" class="page-heading">Resumen de Compras	</h1>

<div class="tab-pane" id="step1">
  <!-- Steps -->
  <ul class="step clearfix" id="order_step">
  	<li class="step_current  first">
  					<span><em>01.</em> Resumen</span>
  			</li>

  	<li class="step_todo second">
  					<span><em>02.</em> Dirección</span>
  			</li>
  	<li id="step_end" class="step_todo last">
  					<span><em>03.</em> Pago</span>
  			</li>
  </ul>

<!-- /Steps -->


  @include('flash::message')
  @if(isset($carritos))
  	@if(count($carritos) == 0)
  		<p class="alert alert-warning">Su carrito de compras está vacio.</p>
  	@else
  		<div id="order-detail-content" class="table_block table-responsive">
  			<table id="cart_summary" class="table table-bordered stock-management-on">
  				<thead>
  					<tr>
  						<th class="cart_product first_item">Articulo</th>
  						<th class="cart_description item">Descripcion</th>
  						<th class="cart_avail item text-center">Disponibilidad</th>
  						<th class="cart_unit item text-right">Precio unitario</th>
  						<th class="cart_quantity item text-center">Cantidad</th>
  						<th class="cart_delete last_item">&nbsp;</th>
  						<th class="cart_total item text-right">Total</th>
  					</tr>
  				</thead>

  				<tbody>
  					@foreach($carritos as $carrito)
  						<tr id="product_17_108_0_0" class="cart_item first_item address_0 odd">
  							<td class="cart_product">
  								<a href="Detalles/{{$carrito->id_articulo}}"><img src="imgArticulos/{{$carrito->almacena->imagen}}" width="110" height="110"  /></a>
  							</td>
  							<td class="cart_description">
  								<h5 class="product-name">
  									<?php
  										echo '<h3><a href="Detalles/'.$carrito->id_articulo.'">'.$carrito->almacena->nombre.'</a></h3';
  									?>
  								</h5>
  								<small class="cart_ref">Marca: {{$carrito->almacena->marca}}</small>
  								<small class="cart_ref">{{$carrito->almacena->categoria}}</small>

  							</td>
  							<td class="cart_avail">
  								<span class="label label-success">In stock</span>
  							</td>
  							<td class="cart_unit" data-title="Unit price">
  								<ul class="price text-right" id="cantidad">
  					        <li class="price">${{$carrito->almacena->precio}}</li>
  								</ul>
  							</td>

  							<td class="cart_quantity text-center" data-title="Quantity">

  								<input type="hidden" value="1" name="quantity_17_108_0_0_hidden" />
  								<input id="cantidad{{$carrito->id}}" size="2"  type="text" autocomplete="off" class="cart_quantity_input form-control grey" value="{{$carrito->cantidad}}" name="quantity_17_108_0_0" onblur="modificarCantidad({{$carrito->id}}, {{$carrito->almacena->precio}}, 3)"/>

  								<div class="cart_quantity_button clearfix">
  									<a class="cart_quantity_down btn btn-default button-minus" href="javascript:void(0);" title="Sustraer" onclick="modificarCantidad({{$carrito->id}}, {{$carrito->almacena->precio}}, 0)">
  										<span>
  											<i class="fa fa-minus"></i>
  										</span>
  									</a>
  									<a  class="cart_quantity_up btn btn-default button-plus" href="javascript:void(0);" title="Agregar" onclick="modificarCantidad({{$carrito->id}}, {{$carrito->almacena->precio}}, 1)"><span><i class="fa fa-plus"></i></span></a>
  								</div>
  							</td>

  							<td class="cart_delete text-center" data-title="Delete">
  								<div>
                    <a onclick="eliminar({{$carrito->id}})" title="Delete" class="cart_quantity_delete" id="33_204_0_23" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
  								</div>
  							</td>
  							<td class="cart_total" data-title="Total">
  								<span>$</span>
  								<?php

                    echo '<div id="cantidadTotal'.$carrito->id.'" class="price" value="'.$carrito->almacena->precio * $carrito->cantidad.'" onchange=""/> </div>';



  									echo '<input id="cantidadTotal'.$carrito->id.'" readonly="readonly" style="border:0" class="price"  value="'.$carrito->almacena->precio * $carrito->cantidad.'" onchange=""/>';
  								 ?>

  							</td>
  						</tr>
  						@endforeach
  				</tbody>
  				<tfoot>
  					<tr class="cart_total_price">
  						<td rowspan="4" colspan="3" id="cart_voucher" class="cart_voucher"></td>
  						<td colspan="3" class="text-right">Total carrito</td>
  							<?php
  								$totalArticulos = 0;
  								foreach($carritos as $carrito){
  									$totalArticulos += $carrito->cantidad * $carrito->almacena->precio;
  								}

  									echo '<td colspan="2" class="price"><span>$</span>
  									<input id="totalArticulos" readonly="readonly" style="border:0" class="price"  value="'.$totalArticulos.'"/>
  									</td>';

  							?>
  					</tr>
  					<tr style="display: none;">
  						<td colspan="3" class="text-right">Total gift-wrapping cost</td>
  						<td colspan="2" class="price-discount price" id="total_wrapping">$0.00</td>
  					</tr>
  					<tr class="cart_total_delivery">
  						<td colspan="3" class="text-right">Costo de envio</td>
  						<td colspan="2" class="price" id="total_shipping" >$2.00</td>
  					</tr>
  					<tr class="cart_total_voucher unvisible">
  						<td colspan="3" class="text-right">Total vouchers</td>
  						<td colspan="2" class="price-discount price" id="total_discount">$0.00</td>
  					</tr>
  					<tr class="cart_total_price">
  						<td colspan="3" class="total_price_container text-right">
  							<span>Total</span>
  	            <div id="hookDisplayProductPriceBlock-price">
  							</div>
  						</td>
  						<td colspan="2" class="price" id="total_price_container">
  							<span>$</span>
  							<?php
  								$totalArticulos = 0;
  								foreach($carritos as $carrito){
  									$totalArticulos += $carrito->cantidad * $carrito->almacena->precio;
  								}
  								$totalArticulos += 2;

  									echo '<input readonly="readonly" style="border:0" class="total_price" id="totalCarrito" value="'.$totalArticulos.'"/>';
  							?>

  						</td>
  					</tr>
  				</tfoot>
  			</table>
  		</div> <!-- end order-detail-content -->
  		@endif
  	@endif

	<p class="cart_navigation clearfix">

		<a class="button" href="{{url('Tienda')}}" title="Inicio"> <i class="fa fa-home"></i></a>
    @if(count($carritos) != 0)
    <a class="button" href="{{url('Direccion')}}"><span>Proceder con la compra<i class="fa fa-chevron-right right"></i></span>
		</a>
    @endif
	</p>

	<div class="clear"></div>

					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->


      <script>
      function modificarCantidad(idCarrito, precio, val){
        var cant = parseInt($("#cantidad"+idCarrito).val());
        if(cant < 1){
          cant = 1;
        }
        if(val == "0"){
          if(cant > 1){
            cant -= 1;
          }
        }
        else{
          if(val == "1"){
            cant += 1;
          }
        }
          var valor = parseInt(precio)*cant;
          $.ajax({
            url: "Carrito/modificar",
            type: 'GET',
            data: {
              id: idCarrito,
              cantidad: cant
            },
            success: function(){
              $("#cantidad"+idCarrito).val(cant);

              $("#cantidadTotal"+idCarrito).html("<span>"+valor+"</span>");

              $("#totalArticulos").val(valor);
              $("#totalCarrito").val(cant);

            },
            error: function(data){
              alert('Error al modificar la cantidad');
            }
          });
      }

      	function eliminar(idCarrito){
      		if(confirm('¿Desea descartar este articulo del carrito?')){
      			$.ajax({
      				url: "Carrito/eliminar",
      				type: 'GET',
      				data: {
      					id: idCarrito
      				},
      				success: function(){
      						location.reload();
      				},
      				error: function(data){
      					alert('No se puede eliminar el articulo del carrito, ya que existe historial de ventas del mismo.');
      				}
      			});
      		}
      	}
      </script>

@endsection
