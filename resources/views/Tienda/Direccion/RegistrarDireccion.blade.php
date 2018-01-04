@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="{{url('Cuenta')}}">Inicio</a></li>
				<li class="depth1"><a href="{{url('Cuenta')}}">Mi cuenta</a></li>
				<li class="depth2"><a href="{{url('MisDirecciones')}}">Mis direcciones</a></li>
				<li class="depth3"><a href="{{url('RegistrarDireccion')}}">Nueva direccion</a></li>
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
				<div class="box">
					<h1 class="page-subheading">Nueva direccion</h1>
					<p class="info-title">
					Complete los datos del formulario, por favor.
					</p>
					@include('flash::message')
					{!! Form::open(['method' => 'POST', 'action' => 'DireccionController@store']) !!}
						<div class="form-group">
							<label for="nombres">Nombres <sup>*</sup></label>
							<input class="form-control" type="text" name="nombres"/>
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos <sup>*</sup></label>
							<input class="form-control" type="text" id="apellidos" name="apellidos"/>
						</div>
						<!--<div class="required dni form-group unvisible">
							<label for="dni">Identificacion <sup>*</sup></label>
							<input class="is_required form-control" data-validate="isDniLite" type="text" name="dni" id="dni"/>
							<span class="form_info">DNI / NIF / NIE</span>
						</div>-->
						<div class="form-group">
							<label for="direccion">Direccion <sup>*</sup></label>
							<input class="form-control" type="text" id="direccion" name="direccion"/>
						</div>
						<div class="form-group">

							<label for="departamento">Departamento <sup>*</sup></label>
							<select name="departamento" id="id_depto" class="form-control">
								@foreach($departamentos as $departamento)
									<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>

								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input id="depto" class="form-control" type="hidden"/>
						</div>
						<div class="form-group">
							<label for="ciudad">Ciudad <sup>*</sup></label>
							<select name="ciudad" id="id_ciudad" class="form-control">
								<option></option>
							</select>
						</div>
						<div class="form-group">
								<label for="telefono">Telefono <sup>*</sup></label>
								<input class="form-control" type="tel" id="telefono" name="telefono"/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
								<label for="movil">Movil<sup>*</sup></label>
								<input class="form-control" type="tel" id="movil" name="movil" />
						</div>

						<div class="form-group">
								<label for="informacion">Información adicional</label>
								<textarea class="form-control" id="info" name="informacion" cols="26" rows="3" ></textarea>
							</div>
						<!--			<p class="inline-infos required">You must register at least one phone number.</p>
				-->
							<div class="clearfix"></div>
							<div class="form-group" id="referencia_direccion">
								<label for="referencia">Titulo de referencia para esta direccion. <sup>*</sup></label>
								<input type="text" id="referencia" class="form-control" name="referencia" value="Mi direccion" />
							</div>
								<button type="submit" class="btn btn-default button button-medium">
									<span>
										Guardar
										<i class="fa fa-chevron-right right"></i>
									</span>
								</button>

							{!!Form::close()!!}
						</div>
						<ul class="footer_links clearfix">
							<li>
								<a class="btn btn-defaul button button-small" href="{{url('MisDirecciones')}}">
									<span><i class="fa fa-chevron-left left"></i> Regresar</span>
								</a>
							</li>
						</ul>
			</div><!-- #center_column -->
		</div><!-- .row -->
	</div><!-- #columns -->
</div><!-- .columns-container -->

<script>
	$('#id_depto').on('change', function (event) {
			var id = $(this).find('option:selected').val();
			$('#id_ciudad').empty();
			$('#id_ciudad').append($('<option>', {
						value: 0,
						text: 'Elija una opción'
				}));
			JSONCiudades = eval(<?php echo json_encode($ciudades);?>);
			JSONCiudades.forEach(function(currentValue,index,arr) {
				if(currentValue.idDepartamento == id){
					$('#id_ciudad').append($('<option>', {
						value: currentValue.nombre,
						text: currentValue.nombre
				}));
				}
		});

	});
</script>


@endsection
