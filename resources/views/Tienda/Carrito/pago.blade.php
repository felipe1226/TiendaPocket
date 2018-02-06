@extends('Tienda.Layout.app')
@section('content')




<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

		<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio</a></li>
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
				<h1 class="page-heading">Metodo de pago</h1>
					<ul class="step clearfix" id="order_step">
						<li class="step_done first">
							<a href="{{url('Carrito')}}"><em>01.</em> Resumen</a>
						</li>
						<li class="step_done second">
							<a href="{{url('Direccion')}}"><em>02.</em> Dirección</a>
						</li>
						<li id='step_end' class="step_current last">
							<span><em>03.</em> Pago</span>
						</li>
					</ul>
					<!-- /Steps -->
					<div class="paiement_block">
						<div id="order-detail-content" class="table_block table-responsive">
                <table id="cart_summary" class="table table-bordered">
									<thead>
										<tr>
											<th class="cart_product first_item">Articulo</th>
											<th class="cart_description item">Descripcion</th>
											<th class="cart_avail item text-center">Disponibilidad</th>
											<th class="cart_unit item text-right">Precio unitario</th>
											<th class="cart_quantity item text-center">Cantidad</th>
											<th class="cart_total item text-right">Total</th>
										</tr>
									</thead>
                    <tfoot>
											<tr class="cart_total_price">
												<td colspan="4" class="text-right">	Costo de articulos</td>
												 <td colspan="2" class="price"><span>$</span><span id="totalArticulos" value="'.$totalArticulos.'">'.$totalArticulos.'</span></td>
                      </tr>
											<tr class="cart_total_voucher" style="display:none">
												<td colspan="4" class="text-right">
													Total gift wrapping cost:
												</td>
                        <td colspan="2" class="price-discount price" id="total_wrapping">
													$0.00
												</td>
											</tr>
											<tr class="cart_total_delivery">
												<td colspan="4" class="text-right">Costo de envio</td>
												<td colspan="2" class="price" id="total_shipping" >$2.00</td>
											</tr>
											<tr class="cart_total_voucher" style="display:none">
                        <td colspan="4" class="text-right">
													Total vouchers
												</td>
                        <td colspan="2" class="price-discount price" id="total_discount">
													$0.00
												</td>
											</tr>
											<tr class="cart_total_price">
                        <td colspan="4" class="total_price_container text-right">
													<span>Total</span>
												</td>
                        <td colspan="2" class="price" id="total_price_container">
                          <span>$</span><span  id="totalCarrito" class="total_price"/>
                        </td>
                      </tr>
										</tfoot>
										<tbody>
											@foreach($carritos as $carrito)
					  						<tr id="carrito{{$carrito->id}}" class="cart_item first_item address_0 odd">
					  							<td class="cart_product">
					  								<a href="Detalles/{{$carrito->id_articulo}}"><img src="imgArticulos/{{$carrito->almacena->imagen1}}" width="110" height="110"  /></a>
					  							</td>
					  							<td class="cart_description">
					  								<h5 class="product-name">
					  									<h3><a href="Detalles/{{$carrito->id_articulo}}'">{{$carrito->almacena->nombre}}</a></h3>

					  								</h5>
					  								<small class="cart_ref">Marca: {{$carrito->almacena->marca}}</small>
					  								<small class="cart_ref">{{$carrito->almacena->categoria}}</small>

					  							</td>
					  							<td class="cart_avail">
					  								<span class="label label-success">Adquirir</span>
					  							</td>
					  							<td class="cart_unit" data-title="Unit price">
					  								<ul class="price text-right" id="cantidad">
					  					        <li class="price">${{$carrito->almacena->precio}}</li>
					  								</ul>
					  							</td>

					  							<td class="cart_quantity text-center" data-title="Quantity">
					  								{{$carrito->cantidad}}
					  							</td>
					  							<td class="cart_total" data-title="Total">
					  								<span>$</span><span id="cantidadTotal{{$carrito->id}}" class="price"></span>
					  							</td>
					  						</tr>
					  						@endforeach
											</tbody>
										</table>
            			</div> <!-- end order-detail-content -->
                  <div id="HOOK_PAYMENT">
            				<div class="row">
											<form action="http://prestashop.flytheme.net/sp_market/es/module/bankwire/validation" method="post">
													<div class="box cheque-box">
															<h3 class="page-subheading">
																	Resumen de pago
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
											</form>


											</div>

										</div>

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_xclick">
											<input type="hidden" name="business" value="tendenciastulua@gmail.com">
											<input type="hidden" name="lc" value="CO">
											<input type="hidden" name="item_name" value="Carrito de compras">
											<input type="hidden" name="item_number" value="CAR002">
											<input type="hidden" name="item_number" value="CAR001">
											<input type="hidden" name="button_subtype" value="services">
											<input type="hidden" name="no_note" value="0">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
											<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
										</form>

                    <p class="cart_navigation clearfix">
        <a href="{{url('Direccion')}}" title="Regresar" class="button-exclusive btn btn-default">
            <i class="fa fa-chevron-left left"></i>
        </a>
            <a class="button btn btn-default button-medium" onclick="confirmarPedido()" href="javascript:void(0)">
                <span>Confirmar pedido<i class="fa fa-chevron-right right"></i></span>
            </a>
    </p>
    </div> <!-- end HOOK_TOP_PAYMENT -->

					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->

		<script>
			$(function() {
					var totalArticulos = 0;
					JSONCarritos = eval(<?php echo json_encode($carritos);?>);
					JSONCarritos.forEach(function(currentValue,index,arr) {
						$('#cantidadTotal'+currentValue.id).html(eval(currentValue.almacena.precio * currentValue.cantidad));
						totalArticulos += eval(currentValue.almacena.precio * currentValue.cantidad);

					});
					$('#totalArticulos').val(totalArticulos);
					$('#totalArticulos').html(totalArticulos);
					$('#totalCarrito').html(totalArticulos + 2);
			 });



			function confirmarPedido(){

		      $.ajax({
		        url: "Pedido/agregar",
		        type: 'GET',
		        data: {
		          proveedor: id,
							costoTotal: id,
							estado: id,
							referencia_direccion: id,
							nombre: id,
							direccion: id,
							localidad: id,
							telefono: id,
							movil: id,
							id_articulo: id,
							nombre_articulo: id,
							precio_articulo: id,
							cantidad_articulo: id,
							tipoPago: id,
							comentario: id
		        },
		        success: function(){
							alert("Agregado");
		        },
		        error: function(data){
		          alert('Error en la compra');
		        }
		      });
		  }
		</script>
@endsection
