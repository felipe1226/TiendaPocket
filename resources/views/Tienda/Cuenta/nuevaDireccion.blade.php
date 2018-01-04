@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="{{url('Cuenta')}}">Inicio</a></li>
				<li class="depth1"><a href="{{url('Direcciones')}}">Mis direcciones</a></li>
				<li class="depth2"><a href="#">Nueva direccion</a></li>
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
					{!!Form::open(array('url'=>'CuentaController@registrarDdireccion','method'=>'POST','enctype' => 'multipart/form-data'))!!}
						<div class="required form-group">
							<label for="firstname">Nombres <sup>*</sup></label>
							<input class="is_required validate form-control" data-validate="isName" type="text" name="firstname" id="firstname" value="Felipe" />
						</div>
						<div class="required form-group">
							<label for="lastname">Apellidos <sup>*</sup></label>
							<input class="is_required validate form-control" data-validate="isName" type="text" id="lastname" name="lastname" value="Bedoya" />
						</div>
						<div class="required dni form-group unvisible">
							<label for="dni">Identificacion <sup>*</sup></label>
							<input class="is_required form-control" data-validate="isDniLite" type="text" name="dni" id="dni" value="" />
							<span class="form_info">DNI / NIF / NIE</span>
						</div>
						<div class="required form-group">
							<label for="address1">Direccion <sup>*</sup></label>
							<input class="is_required validate form-control" data-validate="isAddress" type="text" id="address1" name="address1" value="" />
						</div>
						<div class="required id_state form-group">
							<label for="id_state">Departamento <sup>*</sup></label>


							<select name="id_departamento" id="id_depto" class="form-control">
								@foreach($departamentos as $departamento)
									<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
								@endforeach
							</select>
						</div>
						<div class="required form-group">
							<label for="city">Ciudad <sup>*</sup></label>
							<select name="id_ciudad" id="id_ciudad" class="form-control">
								<option value=""></option>
							</select>
						</div>
						<div class="form-group phone-number required">
								<label for="phone">Telefono <sup>*</sup></label>
								<input class="is_required validate form-control" data-validate="isPhoneNumber" type="tel" id="phone" name="phone" value=""  />
						</div>
						<div class="clearfix"></div>
						<div class="required form-group">
								<label for="phone_mobile">Movil<sup>*</sup></label>
								<input class="validate form-control" data-validate="isPhoneNumber" type="tel" id="phone_mobile" name="phone_mobile" value="" />
						</div>

						<div class="form-group">
								<label for="other">Información adicional</label>
								<textarea class="validate form-control" data-validate="isMessage" id="other" name="other" cols="26" rows="3" ></textarea>
							</div>
						<!--			<p class="inline-infos required">You must register at least one phone number.</p>
				-->
							<div class="clearfix"></div>
							<div class="required form-group" id="adress_alias">
								<label for="alias">Titulo de referencia para esta direccion. <sup>*</sup></label>
								<input type="text" id="alias" class="is_required validate form-control" data-validate="isGenericName" name="alias" value="My address" />
							</div>
								<button type="submit" name="submitAddress" id="submitAddress" class="btn btn-default button button-medium">
									<span>
										Guardar
										<i class="fa fa-chevron-right right"></i>
									</span>
								</button>

							{!!Form::close()!!}
						</div>
						<ul class="footer_links clearfix">
							<li>
								<a class="btn btn-defaul button button-small" href="{{url('Direcciones')}}">
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
						value: currentValue.id,
						text: currentValue.nombre
				}));
				}
		});

	});
</script>


@endsection
