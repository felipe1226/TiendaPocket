@extends('Tienda.layout.app')
@section('content')


			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
    <li class="home"><a href="{{url('Tienda/')}}">Inicio</a></li>
		<li class="depth1"><a href="{{url('Cuenta')}}">Cuenta</a></li>
    <li class="depth2"><a href="{{url('ListaDeseos')}}">Lista de deseos</a></li>
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
								@if(isset($deseos))
							  	@if(count($deseos) == 0)
							  		<p class="alert alert-warning">Su lista de deseos está vacia.</p>
							  	@else
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
	                        @foreach($deseos as $deseo)
	                          <tr id="deseo{{$deseo->id}}" class="cart_item first_item address_0 odd">

	                            <td class="cart_product">
	                              <a href="Detalles/{{$deseo->id_articulo}}"><img src="imgArticulos/{{$deseo->almacena->imagen1}}" width="110" height="110"  /></a>
	                            </td>

	                            <td class="cart_description">
	                              <h5 class="product-name"><h3><a href="Detalles/{{$deseo->id_articulo}}">{{$deseo->almacena->nombre}}</a></h3>

	                              </h5>
	                              <span class="cart_ref">Marca: {{$deseo->almacena->marca}}</span><br>
	                              <span class="cart_ref">{{$deseo->almacena->categoria}}</span>
	                            </td>

	                            <td class="cart_avail">
																@if(($deseo->almacena->cantidad) == 0)
																	<span class="label label-warning" title="Estará disponible proximamente!">Agotado</span>

																@else
																	<span class="label label-success">Adquirir</span>
																@endif
	                            </td>
	                            <td class="cart_unit" data-title="Unit price">
	                              <ul class="price text-right" id="cantidad">
	                                <li class="price">${{$deseo->almacena->precio}}</li>
	                              </ul>
	                            </td>

	                            <td class="cart_quantity text-center" data-title="Quantity">
	                              {{$deseo->created_at}}

	                            </td>

	                            <td class="cart_delete text-center" data-title="Delete">
	              								<div>
	                                <a onclick="addDeseo({{$deseo->id}},{{$deseo->almacena->cantidad}})" title="Añadir al carrito" class="cart_quantity_delete" href="javascript:void(0)"><i class="fa fa-fw fa-shopping-cart"></i></a>
	              								</div>
	              							</td>

	                            <td class="cart_delete text-center" data-title="Delete">
	              								<div>
	                                <a onclick="eliminar({{$deseo->id}})" title="Eliminar" class="cart_quantity_delete" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
	              								</div>
	              							</td>
	                          </tr>
	                          @endforeach
	                      </tbody>
	                    </table>
	                  </div>
									@endif
								@endif

									<ul class="footer_links">
										<li class="f_right"><a class="button" href="{{url('Tienda')}}" title= "Ir al inicio"> <i class="fa fa-home"></i></a></li>
										<li><a class="button" href="{{url('Cuenta')}}" title= "Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>

									</ul>


                </div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
    </div>

		<div id="msgDeseo" class="fancybox-overlay fancybox-overlay-fixed" style="display:none; width: auto; height: auto;">
	    <div class="fancybox-wrap fancybox-desktop fancybox-type-html fancybox-opened" tabindex="-1" style="opacity: 1; overflow: visible; height: auto; width: 384px; position: absolute; top: 286px; left: 400px;">
	      <div class="fancybox-skin" style="padding: 0px; width: auto; height: auto;">
	        <div class="fancybox-outer">
						<div class="fancybox-inner" style="overflow: auto; width: 384px; height: auto;">
		          <p class="fancybox-error">El Articulo se ha añadido con éxito a su carrito.</p>
		          <a href="{{url('Carrito')}}" class="wishlist_product_view button"> Ver carrito </a>
	        	</div>
	        	<a title="Cerrar" class="fancybox-item fancybox-close" onclick="cerrarDeseo()" href="javascript:void(0);"></a>
	      	</div>
	    	</div>
	  	</div>
		</div>



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
              alert('Error al eliminar el articulo de la lista de deseos');
            }
          });
        }
      }


			function addDeseo(id,cantidad){
				if((cantidad) == 0){
					$('.fancybox-error').html("El articulo estará disponible proximamente!");
					$('#msgDeseo').fadeIn('slow', function() {
								$.scrollTo(this, 2000);
					});
				}
				else{
		      $.ajax({
						url: "Deseo/carrito",
						type: 'GET',
						data: {
							id: id,
						},
		        success: function(){
		          $('#msgDeseo').fadeIn('slow', function() {
		                $.scrollTo(this, 2000);
										document.getElementById("deseo"+id).style.display = "none";
		          });

		        },
		        error: function(data){
		          alert('Error en la compra');
		        }
		      });
				}
		  }

			function cerrarDeseo(){
		    $('#msgDeseo').fadeOut('slow', function() {
		          $.scrollTo(this, 2000);

		    });
		  }
      </script>
	@endsection
