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
						var comparedProductsIds = [22];
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
						var generated_date = 1513870763;
						var id_lang = 4;
						var img_dir = 'themes/sp_market/img/';
						var instantsearch = false;
						var isGuest = 0;
						var isLogged = 1;
						var isMobile = false;
						var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
						var max_item = 'You cannot add more than 3 product(s) to the product comparison';
						var min_item = 'Please select at least one product';
						var mywishlist_url = 'http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist';
						var page_name = 'my-account';
						var priceDisplayMethod = 1;
						var priceDisplayPrecision = 2;
						var quickView = true;
						var remove_compare_item = 'Product successfully removed from the product comparison';
						var removingLinkText = 'remove this product from my cart';
						var roundMode = 2;
						var static_token = '37dab0cd8f57363d790bac16e0dd0e45';
						var token = 'e7a94a67a2d06ed0af03a2d1f4e4a2fb';
						var usingSecureMode = false;
						var wishlistProductsIds = false;
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
					<li class="home"><a href="{{url('Tienda')}}">Inicio</a></li>
					<li class="depth1"><a href="{{url('Cuenta')}}">Mi cuenta</a></li>
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
					<h1 class="page-heading">Mi Cuenta</h1>
					<p class="info-account">Administra toda la informacion de tu cuenta, articulos y pedidos.</p>

					<div class="row addresses-lists">
						<div class="col-xs-12 col-sm-6 col-lg-4">
							<ul class="myaccount-link-list">
                <li><a href="#"><i class="fa fa-building"></i><span>Agregar direccion principal</span></a></li>
<<<<<<< HEAD
								<li><a href="{{url('Pedidos')}}" title="Mis Pedidos"><i class="fa fa-list-ol"></i><span>Historial de Pedidos y Detalles</span></a></li>
                <!--<li><a href="#"><i class="fa fa-list-ol"></i><span>Historial de pedido y detalles</span></a></li>-->

								<!--SE ELIMINA MY CREDIT SLIPS-->
                <!--<li><a href="#"><i class="fa fa-file-o"></i><span>My credit slips</span></a></li>-->

            		<li><a href="{{url('Direcciones')}}"><i class="fa fa-building"></i><span>Mis Direcciones</span></a></li>
            		<li><a href="{{url('InformacionPersonal')}}"><i class="fa fa-user"></i><span>Mi Informacion Personal</span></a></li>
=======
                <li><a href="{{url('Pedidos')}}"><i class="fa fa-list-ol"></i><span>Historial de pedidos y detalles</span></a></li>
            		<li><a href="{{url('Direcciones')}}"><i class="fa fa-building"></i><span>Mis direcciones</span></a></li>
            		<li><a href="#"><i class="fa fa-user"></i><span>Mi informacion personal</span></a></li>
>>>>>>> c9a785f109e8b762fae6ddea942288692a3e6f82
        			</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-4">
        			<ul class="myaccount-link-list">
<!-- MODULE WishList -->
								<li class="lnk_wishlist">
									<!--<a 	href="#">-->
									<a 	href="{{url('ListadeDeseos')}}" title="Lista de Deseos">
										<i class="fa fa-heart"></i>
										<span>Mi Lista de Deseos</span>
									</a>
								</li>
<!-- END : MODULE WishList -->
        			</ul>
    				</div>
					</div>
					<ul class="footer_links clearfix">
						<li><a class="btn btn-default button button-small" href="{{url('Tienda')}}" title="Home">
							<span><i class="fa fa-chevron-left left"></i> Regresar</span></a>
						</li>
					</ul>
				</div><!-- #center_column -->
			</div><!-- .row -->
		</div><!-- #columns -->
	</div><!-- .columns-container -->

	<script type="text/javascript">
		jQuery(function(){
				function scroll_to(div){
					$('html, body').animate({
						scrollTop: $(div).offset().top-80
					},800);
				}
				$(".list_diemneo ul li").each(function(){
					$(this).click(function(){
						$('.list_diemneo ul li').removeClass("active");
						$(this).addClass("active");
						var neoindext=$(this).index()+1;
						scroll_to(".title_neo"+neoindext);
						var neodiv = (".title_neo"+neoindext);
						console.log(neodiv);
						var x = $(neodiv).position();
						$(".custom-scoll").css("top",x.top);
						return true;
					});
				});
			});
			jQuery(function(){
				var windowswidth = $(window).width();
				var containerwidth = $('.container').width();
				var widthcss = (windowswidth-containerwidth)/2-70;

				var rtl = jQuery( 'body' ).hasClass( 'rtl' );
				if( !rtl ) {
					jQuery(".custom-scoll").css("left",widthcss);
				}else{
					jQuery(".custom-scoll").css("right",widthcss);
				}
				var x = $(".title_neo3").position();

			});
	</script>

@endsection
