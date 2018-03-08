@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="{{url('Tienda')}}">Inicio</a></li>
				<li class="depth1"><a href="{{url('MiCuenta')}}">Mi cuenta</a></li>
				<li class="depth2"><a href="{{url('MisDirecciones')}}">Mis direcciones</a></li>
				<li id="enlace" class="depth3"><a href="#">Nueva direccion</a></li>
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

			<div id="center_column" class="column col-md-6 col-sm-8">
				<div class="box">
					<h1 id="titulo" class="page-subheading">Nueva direccion</h1>

					@include('flash::message')
					{!!Form::open(array('url'=>'Direccion/registrar','method'=>'POST', 'id' => 'formulario'))!!}
					{{Form::token()}}
					@if($direccion != null)
						<input id="id_direccion" name="id_direccion" type="hidden" value="{{$direccion->id}}">
					@else
						<input id="id_direccion" name="id_direccion" type="hidden" value="0">
					@endif

						<div class="form-group col-md-6 col-sm-6">
							<label for="nit">Nit</label>
							<input class="form-control" type="text" id="nit"name="nit" disabled/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-md-6 col-sm-6">
							<label for="nombres">Nombres <sup>*</sup></label>
							<input class="form-control" type="text" id="nombres"name="nombres"/>
						</div>
						<div class="form-group col-md-6 col-sm-6">
							<label for="apellidos">Apellidos <sup>*</sup></label>
							<input class="form-control" type="text" id="apellidos" name="apellidos"/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-md-6 col-sm-6">
								<label for="movil">Movil<sup>*</sup></label>
								<input class="form-control" type="tel" id="movil" name="movil" />
						</div>

						<div class="form-group col-md-6 col-sm-6">
								<label for="telefono">Telefono <sup>*</sup></label>
								<input class="form-control" type="tel" id="telefono" name="telefono"/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-md-6 col-sm-8">

							<label for="departamento">Departamento <sup>*</sup></label>
							<select name="departamento" id="id_depto" class="form-control">
								@foreach($departamentos as $departamento)
									<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-6 col-sm-8">
							<label for="ciudad">Ciudad <sup>*</sup></label>
							<select name="ciudad" id="id_ciudad" class="form-control">
							</select>
						</div>


						<div class="form-group col-md-12 col-sm-12">
							<label for="direccion">Direccion <sup>*</sup></label>
							<input class="form-control" type="text" id="direccion" name="direccion"/>
						</div>


						<div class="clearfix"></div>
						<div class="form-group col-md-12 col-sm-12">
								<label for="informacion">Información adicional</label>
								<textarea class="form-control" id="info" name="informacion" cols="26" rows="3" ></textarea>
							</div>

							<div class="clearfix"></div>
							<div class="form-group col-md-6 col-sm-8" id="referencia_direccion">
								<label for="referencia">Titulo de referencia para esta direccion. <sup>*</sup></label>
								<input type="text" id="referencia" class="form-control" name="referencia" placeholder="Mi direccion" />
							</div>
							<div class="clearfix"></div>
							<button type="submit" class="btn btn-default col-md-offset-9 col-sm-offset-8 col-xs-offset-8 " onclick="validar()">
								<span>
									Guardar
									<i class="fa fa-chevron-right right"></i>
								</span>
							</button>

							{!!Form::close()!!}
						</div>
						<ul class="footer_links">
              <li class="f_right"><a class="button" href="{{url('Tienda')}}" title= "Ir al inicio"> <i class="fa fa-home"></i></a></li>
              <li><a class="button" href="{{url('MiCuenta')}}" title= "Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>
            </ul>
			</div><!-- #center_column -->
		</div><!-- .row -->
	</div><!-- #columns -->
</div><!-- .columns-container -->

<script>
	$(function(){
		var id=$('#id_direccion').val();
		if(id != "0"){
			$('#titulo').html("Actualizar informacion");
			$('#enlace').html('<a href="#">Actualizar direccion</a>');
			direccion=eval(<?php echo json_encode($direccion);?>);

			$('#nombres').val(direccion.nombres);
			$('#apellidos').val(direccion.apellidos);
			$('#direccion').val(direccion.direccion);
			$('#id_depto').val(direccion.departamento);
			$('#id_ciudad').val(direccion.ciudad);
			$('#telefono').val(direccion.telefono);
			$('#movil').val(direccion.movil);
			$('#informacion').val(direccion.informacion);
			$('#referencia').val(direccion.referencia);

			JSONDepartamento = eval(<?php echo json_encode($departamentos);?>);
			JSONDepartamento.forEach(function(currentValue,index,arr) {
				if(currentValue.nombre == direccion.departamento){

					listarCiudades(currentValue.id, direccion.ciudad);
					$('#id_depto').val(currentValue.id);
					$('#id_ciudad').val(currentValue.ciudad);
				}
			});



		}
	});

	function listarCiudades(id, ciudad){
		JSONCiudades = eval(<?php echo json_encode($ciudades);?>);
		JSONCiudades.forEach(function(currentValue,index,arr) {
			if(currentValue.idDepartamento == id){
					$('#id_ciudad').append($('<option>', {
						value: currentValue.nombre,
						text: currentValue.nombre

					}));
			}
	  });
	}


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
	function validar(){
			 document.getElementById("formulario").submit();
		 }



 </script>


@endsection
