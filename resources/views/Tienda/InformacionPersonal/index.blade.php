@extends('Tienda.Layout.app')
@section('content')

<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Close';
var FancyboxI18nNext = 'Next';
var FancyboxI18nPrev = 'Previous';
var add_compare_item = 'Product successfully added to the product comparison';
var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
var ajax_allowed = true;
var ajaxsearch = true;
var baseDir = 'http://prestashop.flytheme.net/sp_market/';
var baseUri = 'http://prestashop.flytheme.net/sp_market/';
var comparator_max_item = 3;
var comparedProductsIds = [];
var contentOnly = false;
var currency = {"id":1,"name":"USD","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
var currencyBlank = 0;
var currencyFormat = 1;
var currencyRate = 1;
var currencySign = '$';
var customizationIdMessage = 'Customization #';
var delete_txt = 'Delete';
var displayList = false;
var freeProductTranslation = 'Free!';
var freeShippingTranslation = 'Free shipping!';
var generated_date = 1514987008;
var id_lang = 4;
var img_dir = 'http://prestashop.flytheme.net/sp_market/themes/sp_market/img/';
var instantsearch = false;
var isGuest = 0;
var isLogged = 1;
var isMobile = false;
var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
var max_item = 'You cannot add more than 3 product(s) to the product comparison';
var min_item = 'Please select at least one product';
var mywishlist_url = 'http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist';
var page_name = 'identity';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var static_token = '4c1dda483cbe490e55a9528eee9305f5';
var token = 'd52f0cf278efb5700adb0175c47ad4fe';
var usingSecureMode = false;
var wishlistProductsIds = [{"id_product":"11","quantity":"1","product_quantity":"0","name":"Peberkas tongue","id_product_attribute":"0","priority":"1","link_rewrite":"faded-short-sleeves-tshirt","category_rewrite":"smartphones-tablets","attributes_small":""},{"id_product":"12","quantity":"1","product_quantity":"0","name":"Lround porchetta","id_product_attribute":"0","priority":"1","link_rewrite":"blouse","category_rewrite":"smartphones-tablets","attributes_small":""},{"id_product":"15","quantity":"1","product_quantity":"0","name":"Porta tenderloin","id_product_attribute":"0","priority":"1","link_rewrite":"faded-short-sleeves-tshirt","category_rewrite":"smartphones-tablets","attributes_small":""}];
</script>

							<script type="text/javascript" src="/sp_market/js/jquery/jquery-1.11.0.min.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/jquery-migrate-1.2.1.min.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.easing.js"></script>
							<script type="text/javascript" src="/sp_market/js/tools.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/global.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/10-bootstrap.min.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/15-jquery.total-storage.min.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/15-jquery.uniform-modified.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/jquery.mCustomScrollbar.concat.min.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/autoload/slick.min.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/products-comparison.js"></script>
							<script type="text/javascript" src="/sp_market/js/validate.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spthemeconfigurator/views/js/front/jquery.miniColors.min.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spthemeconfigurator/views/js/front/sp-cpanel.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.backtotop.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.global.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.ui.touch-punch.min.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/sp_lib/jquery.elevatezoom.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/tools/treeManagement.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spextraslider/views/js/owl.carousel.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spdeal/views/js/deal.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spdeal/views/js/jquery.cj-swipe.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spcategories/views/js/jquery.imagesloaded.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spcategories/views/js/jquery.sj_accordion.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spsearchpro/views/js/jquery.autocomplete.js"></script>
							<script type="text/javascript" src="/sp_market/themes/sp_market/js/modules/spblockcart/ajax-cart.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.scrollTo.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/plugins/jquery.serialScroll.js"></script>
							<script type="text/javascript" src="/sp_market/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
							<script type="text/javascript" src="/sp_market/modules/sphomeslider/js/owl.carousel.js"></script>
							<script type="text/javascript" src="/sp_market/modules/spblocknewsletter/jquery.cookie.min.js"></script>

<script type="text/javascript">
    //<![CDATA[
    var listdeal = [];
    //]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    var listdeal = [];
    //]]>
</script>

			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio</a></li>
									    <li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/my-account">
        Mi Cuenta
    </a></li>

    <span class="navigation_page">
        Tu informacion personal
    </span>

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
