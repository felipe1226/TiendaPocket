@extends('Tienda.Layout.app')
@section('content')
			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="{{url('Tienda')}}" title="Return to Home">Inicio</a></li>
		<li class="depth1"><a href="{{url('Cuenta')}}">Mi Cuenta</a></li>
		<li class="depth2"><a href="InformacionPersonal">Informacion Personal</a></li>

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
    <h1 class="page-subheading">
        Tu informacion personal
    </h1>
            <p class="info-title">
            <h4>Por favor verifica que tu informacion personal este actualizada</h4>
        </p><br>

        <form action="http://prestashop.flytheme.net/sp_market/es/identity" method="post" class="std">
            <fieldset>

							  @foreach($usuarios as $usuario)

                <div class="required form-group">
                    <label for="nombre" class="required">
                        Nombre Completo
                    </label>
                    <input class="is_required validate form-control" data-validate="esNombre" type="text" id="nombre" name="nombre" value="{{$usuario->nombrePersona}}"/>
                </div>

                <div class="required form-group">
                    <label for="cedula" class="required">
                        Cedula
                    </label>
                    <input class="is_required validate form-control" data-validate="esCedula" type="text" name="cedula" id="cedula" value="{{$usuario->cedula}}" />
                </div>

                <div class="required form-group">
                    <label for="empresa" class="required">
                        Nombre de Establecimiento
                    </label>
                    <input class="is_required validate form-control" data-validate="esEstablecimiento" type="text" name="establecimiento" id="establecimiento" value="{{$usuario->Empresa->nombreEstablecimiento}}" />
                </div>

								<div class="required form-group">
                    <label for="direccion" class="required">
                        Direccion de Establecimiento
                    </label>
                    <input class="is_required validate form-control" data-validate="esDireccion" type="text" name="direccion" id="direccion" value="{{$usuario->Empresa->direccion}}" />
                </div>

								<div class="required form-group">
                    <label for="ciudad" class="required">
                        Ciudad
                    </label>
                    <input class="is_required validate form-control" data-validate="esCiudad" type="text" name="ciudad" id="ciudad" value="{{$usuario->Empresa->ciudad}}" />
                </div>

								<div class="required form-group">
                    <label for="departamento" class="required">
                        Departamento
                    </label>
                    <input class="is_required validate form-control" data-validate="esDepartamento" type="text" name="departamento" id="departamento" value="{{$usuario->Empresa->departamento}}" />
                </div>

								<div class="required form-group">
                    <label for="Pais" class="required">
                        Pais
                    </label>
                    <input class="is_required validate form-control" data-validate="esPais" type="text" name="pais" id="pais" value="{{$usuario->pais}}" />
                </div>

								<div class="required form-group">
                    <label for="email" class="required">
                        Email
                    </label>
                    <input class="is_required validate form-control" data-validate="esEmail" type="email" name="email" id="email" value="{{$usuario->email}}" />
                </div>

								<div class="required form-group">
                    <label for="nacimiento" class="required">
                        fecha de Nacimiento
                    </label>
                    <input class="is_required validate form-control" data-validate="esNacimiento" type="date" name="nacimiento" id="nacimiento" value="{{$usuario->fechaNacimiento}}" />
                </div>

								@endforeach
            </fieldset>

        </form> <!-- .std -->
    </div>
<ul class="footer_links clearfix">
	<li>
        <a class="btn btn-default button button-small" href="{{url('Cuenta')}}">
            <span>
                <i class="fa fa-chevron-left left"></i>Regresa a tu Cuenta
            </span>
        </a>
    </li>
	<li>
        <a class="btn btn-default button button-small" href="{{url('Tienda')}}">
            <span>
                <i class="fa fa-chevron-left left"></i>Inicio
            </span>
        </a>
    </li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
							<!-- Footer -->
@endsection
