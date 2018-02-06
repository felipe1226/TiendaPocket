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
            <h1 class="page-heading">Mis direcciones</h1>
            <p>Configure sus direcciones predeterminadas de facturación y entrega al realizar un pedido. También puede agregar direcciones adicionales, que pueden ser útiles para enviar regalos o recibir un pedido en su oficina.</p>
            <div class="addresses">
              <p><strong class="dark">Asegúrese de actualizar su información.</strong></p>
              <div class="clearfix main-page-indent">
  	            <a href="{{url('RegistrarDireccion')}}" class="btn btn-default button button-medium" title="Agregar una nueva dirección">Nueva direccion <i class="fa fa-fw fa-plus"></i>
                </a>
              </div>

              <div class="bloc_adresses row">
                  @if(count($direcciones) == 0)
                    <p class="alert alert-warning">No tienes direcciones registradas!.</p>
                  @else
                    @foreach($direcciones as $direccion)
      	    	        <div id="direccion{{$direccion->id}}" class="col-xs-12 col-sm-6 address">
      			            <ul class="last_item item box">
                          <li><h3 class="page-subheading">{{$direccion->referencia}}</h3></li>
                          <li>
                            <span  class="address_name">{{$direccion->nombres}}
                            </span>
                            <span  class="address_name">{{$direccion->apellidos}}
                            </span>
                          </li>
                          <li>
                            <span  class="address_address1">
                                      {{$direccion->direccion}}
                            </span>
                          </li>
                          <li>
                            <span >  {{$direccion->ciudad}}, </span>
                            <span >  {{$direccion->departamento}}</span>
                          </li>
                          <li>
                            <span  class="address_phone">  {{$direccion->telefono}}</span>
                          </li>
                          <li>
                            <span  class="address_phone_mobile">  {{$direccion->movil}}</span>
                          </li>
                          <li class="address_update">
                            <a class="btn btn-default button button-small" href="{{url('ActualizarDireccion')}}">Actualizar <i class="fa fa-fw fa-refresh"></i> </a>
                            @if($direccion->estado == 0)
                              <a class="btn btn-default button button-small" onclick="eliminarDireccion({{$direccion->id}})" data-id="addresses_confirm" title="Eliminar direccion"><i class="fa fa-remove"></i></a>
                            @endif
                          </li>
                        </ul>
                      </div>
                    @endforeach
                  @endif
			        </div>
            </div>


            <ul class="footer_links">
										<li class="f_right"><a class="button" href="http://localhost/TiendaPocket/public/Tienda" title="Ir al inicio"> <i class="fa fa-home"></i></a></li>
										<li><a class="button" href="http://localhost/TiendaPocket/public/Cuenta" title="Regresar a mi cuenta"><i class="fa fa-user"></i> </a></li>

									</ul>
					</div><!-- #center_column -->
				</div><!-- .row -->
			</div><!-- #columns -->
		</div><!-- .columns-container -->

  <script>
    function eliminarDireccion(idDireccion){
      if(confirm('¿Desea eliminar esta direccion?')){
        $.ajax({
          url: "Direccion/eliminar",
          type: 'GET',
          data: {
            id: idDireccion
          },
          success: function(){
            $('#direccion'+idDireccion).hide("slow");
          },
          error: function(data){
            alert('No se puede eliminar esta direccion!.');
          }
        });
      }
    }
  </script>

@endsection
