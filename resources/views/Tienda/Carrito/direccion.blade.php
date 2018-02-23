@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
    <div class="container">

<!-- Breadcrumb -->
      <div class="breadcrumb clearfix">
	      <ul>
					<li class="home"><a href="{{url('Tienda/')}}">Inicio</a></li>
					<li class="depth1"><a href="{{url('MiCuenta')}}">Mi cuenta</a></li>
					<li class="depth2"><a href="{{url('Carrito')}}">Carrito</a></li>
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
          <h1 class="page-heading">Direccion de entrega</h1>
          <!-- Steps -->
          <ul class="step clearfix" id="order_step">
          	<li class="step_done first">
          		<a href="{{url('Carrito')}}"><em>01.</em> Resumen</a>
          	</li>
          	<li class="step_current second">
          					<span><em>02.</em> Dirección</span>
          			</li>
          	<li id="step_end" class="step_todo last">
          					<span><em>03.</em> Pago</span>
          			</li>
          </ul>
<!-- /Steps -->

		<form action="{{url('Carrito/Pago')}}" method="get">
			<div class="addresses clearfix">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="address_delivery select form-group selector1">
							<label for="id_address_delivery">Elija una dirección de entrega: </label>
							<select name="id_address_delivery" id="id_address_delivery" class="address_select form-control">
								@foreach($direcciones as $direccion)
									<option value="{{$direccion->id}}">{{$direccion->referencia}}</option>
								@endforeach
							</select>
							<span class="waitimage" style="display: none;"></span>
						</div>

					</div>
				</div> <!-- end row -->
				<br>
				<div class="row">
			<div class="col-xs-12 col-sm-6">
				<ul id="block-address" class="last_item item box">
					<li><h3 id="referencia" class="page-subheading">{{$direcciones[0]->referencia}}</h3></li>
					<li>
						<span id="nombres" class="address_name">{{$direcciones[0]->nombres}}
						</span>
						<span id="apellidos" class="address_name">{{$direcciones[0]->apellidos}}
						</span>
					</li>
					<li>
						<span id="direccion" class="address_address1">
											{{$direcciones[0]->direccion}}
						</span>
					</li>
					<li>
						<span id="ciudad" >  {{$direcciones[0]->ciudad}}, </span>
						<span id="departamento">  {{$direcciones[0]->departamento}}</span>
					</li>
					<li>
						<span id="telefono" class="address_phone">  {{$direcciones[0]->telefono}}</span>
					</li>
					<li>
						<span id="movil" class="address_phone_mobile">  {{$direcciones[0]->movil}}</span>
					</li>

				</ul>
			</div>
	</div> <!-- end row -->
			<div class="form-group col-md-8 col-sm-8">
			<label>Si desea agregar un comentario sobre su pedido, escríbalo en el campo a continuación.</label>
			<textarea class="form-control" cols="60" rows="6" name="message" value=""></textarea>
		</div>
	</div> <!-- end addresses -->
			<p class="cart_navigation clearfix">
				<a href="{{url('Carrito')}}" title="Regresar" class="button-exclusive btn btn-default">
					<i class="fa fa-chevron-left left"></i>
				</a>
				<button type="submit" class="btn btn-default col-md-offset-7 col-sm-offset-6 col-xs-offset-9">
					<span> <i class="fa fa-chevron-right right"></i></span>
				</button>
        </a>
			</p>
		</form>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->

			<script>
				$('#id_address_delivery').on('change', function (event) {
						$('.waitimage').show();
						var id = $(this).find('option:selected').val();
						JSONDirecciones = eval(<?php echo json_encode($direcciones);?>);
						JSONDirecciones.forEach(function(currentValue,index,arr) {
							if(currentValue.id == id){
								$('#block-address').fadeOut('slow', function() {
			            $.scrollTo(this, 1000);
									$('#idDireccion').val(currentValue.id);
									$('#referencia').html("<span>"+currentValue.referencia+"</span>");
									$('#nombres').html(currentValue.nombres);
									$('#apellidos').html(currentValue.apellidos);
									$('#direccion').html(currentValue.direccion);
									$('#ciudad').html(currentValue.ciudad+", ");
									$('#departamento').html(currentValue.departamento);
									$('#telefono').html(currentValue.telefono);
									$('#movil').html(currentValue.movil);
								});
								$('#block-address').fadeIn('slow', function() {
									$('.waitimage').hide();
								});


							}
					});
				});
			</script>

@endsection
