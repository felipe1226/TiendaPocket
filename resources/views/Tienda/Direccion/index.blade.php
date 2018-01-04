@extends('Tienda.Layout.app')
@section('content')

    <script type="text/javascript">
    var CUSTOMIZE_TEXTFIELD = 1;
    var FancyboxI18nClose = 'Close';
    var FancyboxI18nNext = 'Next';
    var FancyboxI18nPrev = 'Previous';
    var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
    var ajax_allowed = true;
    var ajaxsearch = false;
    var baseDir = '/';
    var baseUri = '/';
    var comparator_max_item = 3;
    var comparedProductsIds = [22];
    var contentOnly = false;
    var currency = {"id":1,"name":"USD","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000",,"format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
    var currencyBlank = 0;
    var currencyFormat = 1;
    var currencyRate = 1;
    var currencySign = '$';
    var customizationIdMessage = 'Customization #';
    var displayList = false;
    var freeProductTranslation = 'Free!';
    var freeShippingTranslation = 'Free shipping!';
    var generated_date = 1513833335;
    var id_lang = 4;
    var img_dir = '../themes/sp_market/img/';
    var instantsearch = false;
    var isGuest = 0;
    var isLogged = 1;
    var isMobile = false;
    var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
    var page_name = 'index';
    var priceDisplayMethod = 1;
    var priceDisplayPrecision = 2;
    var quickView = true;
    var roundMode = 2;
    var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
    var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
    var usingSecureMode = false;
    var wishlistProductsIds = false;
    </script>


			<!-- Breadcrumb Column -->
    <div class="breadcrumb-container">
			<div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb clearfix">
	        <ul>
            <li class="home"><a href="{{url('Tienda')}}">Inicio</a></li>
             <li class="depth1"><a href="{{url('Cuenta')}}">Mi cuenta</a></li>
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
            <p>Please configure your default billing and delivery addresses when placing an order. You may also add additional addresses, which can be useful for sending gifts or receiving an order at your office.</p>
            <div class="addresses">
	            <p><strong class="dark">Your addresses are listed below.</strong></p>
	            <p class="p-indent">Be sure to update your personal information if it has changed.</p>
              <div class="bloc_adresses row">
                @if(isset($direcciones))
                  @if(count($direcciones) == 0)
                    <p class="alert alert-warning">No tienes direcciones registradas!.</p>
                  @else
                    @foreach($direcciones as $direccion)

      	    	        <div class="col-xs-12 col-sm-6 address">
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
                            <a class="btn btn-default button button-small" href="#"><span>Actualizar<i class="fa fa-chevron-right right"></i></span></a>
                            @if($direccion->estado == 0)
                              <a class="btn btn-default button button-small" onclick="eliminar({{$direccion->id}})" data-id="addresses_confirm" title="Eliminar direccion"><span>Eliminar<i class="fa fa-remove right"></i></span></a>
                            @endif
                          </li>
                        </ul>
                      </div>
                    @endforeach
                  @endif
                @endif
			        </div>
            </div>
            <div class="clearfix main-page-indent">
	            <a href="{{url('RegistrarDireccion')}}" class="btn btn-default button button-medium">
                <span>Agregar nueva dirección<i class="fa fa-chevron-right right"></i></span>
              </a>
            </div>

            <ul class="footer_links clearfix">
	            <li><a class="btn btn-default button button-small" href="{{url('Cuenta')}}">
                <span><i class="fa fa-chevron-left left"></i> Regresar</span></a>
              </li>
	            <li><a class="btn btn-default button button-small" href="{{url('Tienda')}}">
                <span><i class="fa fa-chevron-left left"></i> Inicio</span></a>
              </li>
            </ul>
					</div><!-- #center_column -->
				</div><!-- .row -->
			</div><!-- #columns -->
		</div><!-- .columns-container -->

  <script>
    function eliminar(idDireccion){
      if(confirm('¿Desea eliminar esta direccion?')){
        $.ajax({
          url: "Direccion/eliminar",
          type: 'GET',
          data: {
            id: idDireccion
          },
          success: function(){
              location.reload();
          },
          error: function(data){
            alert('No se puede eliminar esta direccion!.');
          }
        });
      }
    }
  </script>

@endsection
