@extends('Tienda.layout.app')
@section('content')

<script>
function eliminar(idCarrito){
  if(confirm('¿Desea descartar este articulo de la lista de deseos?')){
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
<!--     --->




<!--       -->
			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									        <li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/my-account">Mi cuenta</a></li>

        <li class="depth2"><a href="http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist">Deseados</a></li>

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

							<div id="mywishlist">

								<h1 class="page-heading">Deseados</h1>
								<form method="post" class="std" id="form_wishlist">
										<fieldset>
											<!--<h3>Nueva lista de deseos</h3>-->
											<p class="text">
												<input type="hidden" name="token" value="29648087114c0cf8997db5f3f2e914fb">
												<label class="align_right" for="name">Nombre</label>
												<input type="text" size="50" id="name" name="name" class="inputTxt" value="">
												<input type="submit" name="submitWishlist" id="submitWishlist" value="Guardar" class="exclusive">
											</p>

										</fieldset>
									</form>
											<div id="block-history" class="block-center table-responsive">
										<table class="std">
											<thead>
												<tr>
                          <th class="cart_product first_item">Articulo</th>
              						<th class="cart_description item">Descripcion</th>
              						<th class="cart_avail item text-center">Disponibilidad</th>
													<th class="item mywishlist_second">Precio Unitario</th>
													<th class="item mywishlist_second">Creado</th>
                          <th class="item mywishlist_second">Añadir</th>
													<th class="last_item mywishlist_first">Eliminar</th>
												</tr>
											</thead>

                      <tbody>
                        @foreach($carritos as $carrito)
                          <tr id="product_17_108_0_0" class="cart_item first_item address_0 odd">

                            <td class="cart_product">
                              <a href=""><img src="imgArticulos/{{$carrito->almacena->imagen}}" width="110" height="110"  /></a>
                            </td>

                            <td class="cart_description">
                              <h5 class="product-name">
                                <?php
                                  echo '<h3><a href="'.$carrito->id_articulo.'/Detalles">'.$carrito->almacena->nombre.'</a></h3';
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
                              {{$carrito->created_at}}

                            </td>

                            <td class="cart_delete text-center" data-title="Delete">
              								<div>
                                <a onclick="eliminar({{$carrito->id}})" title="Delete" class="cart_quantity_delete" id="33_204_0_23" href="javascript:void(0)"><i class="icon-cart"></i></a>
              								</div>
              							</td>

                            <td class="cart_delete text-center" data-title="Delete">
              								<div>
                                <a onclick="eliminar({{$carrito->id}})" title="Delete" class="cart_quantity_delete" id="33_204_0_23" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
              								</div>
              							</td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>


                </div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
	@endsection
