@extends('Tienda.layout.app')
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
var generated_date = 1514512368;
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
var page_name = 'module-blockwishlist-mywishlist';
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var remove_compare_item = 'Product successfully removed from the product comparison';
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var static_token = '4c1dda483cbe490e55a9528eee9305f5';
var token = 'd52f0cf278efb5700adb0175c47ad4fe';
var usingSecureMode = false;
var wishlistProductsIds = [{"id_product":"1","quantity":"1","product_quantity":"0","name":"Aliquam Leberkas","id_product_attribute":"0","priority":"1","link_rewrite":"faded-short-sleeves-tshirt","category_rewrite":"electronics","attributes_small":""}];

--//[{"id_product":"11","quantity":"1","product_quantity":"0","name":"Peberkas tongue","id_product_attribute":"0","priority":"1","link_rewrite":"faded-short-sleeves-tshirt","category_rewrite":"smartphones-tablets","attributes_small":""},{"id_product":"12","quantity":"1","product_quantity":"0","name":"Lround porchetta","id_product_attribute":"0","priority":"1","link_rewrite":"blouse","category_rewrite":"smartphones-tablets","attributes_small":""},{"id_product":"15","quantity":"1","product_quantity":"0","name":"Porta tenderloin","id_product_attribute":"0","priority":"1","link_rewrite":"faded-short-sleeves-tshirt","category_rewrite":"smartphones-tablets","attributes_small":""}];
</script>

<script type="text/javascript" src="../js/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery/plugins/jquery.easing.js"></script>
<script type="text/javascript" src="../js/tools.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/global.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/autoload/10-bootstrap.min.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/autoload/15-jquery.total-storage.min.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/autoload/15-jquery.uniform-modified.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/autoload/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/autoload/slick.min.js"></script>
<script type="text/javascript" src="../js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/products-comparison.js"></script>
<script type="text/javascript" src="../modules/spthemeconfigurator/views/js/front/jquery.miniColors.min.js"></script>
<script type="text/javascript" src="../modules/spthemeconfigurator/views/js/front/sp-cpanel.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.backtotop.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.global.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/sp_lib/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/tools/treeManagement.js"></script>
<script type="text/javascript" src="../modules/spextraslider/views/js/owl.carousel.js"></script>
<script type="text/javascript" src="../modules/spdeal/views/js/deal.js"></script>
<script type="text/javascript" src="../modules/spdeal/views/js/jquery.cj-swipe.js"></script>
<script type="text/javascript" src="../modules/spcategories/views/js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="../modules/spcategories/views/js/jquery.sj_accordion.js"></script>
<script type="text/javascript" src="../modules/spsearchpro/views/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="../themes/sp_market/js/modules/spblockcart/ajax-cart.js"></script>
<script type="text/javascript" src="../js/jquery/plugins/jquery.scrollTo.js"></script>
<script type="text/javascript" src="../js/jquery/plugins/jquery.serialScroll.js"></script>
<script type="text/javascript" src="../js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="../modules/sphomeslider/js/owl.carousel.js"></script>
<script type="text/javascript" src="../modules/spblocknewsletter/jquery.cookie.min.js"></script>

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
<!--     --->




<!--       -->
			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									        <li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/my-account">Mi cuenta</a></li>

        <li class="depth2"><a href="http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist">Deseados</a></li>

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
								<form method="post" class="std" id="form_wishlist">
										<fieldset>
											<!--<h3>Nueva lista de deseos</h3>-->
											<p class="text">
												<input type="hidden" name="token" value="29648087114c0cf8997db5f3f2e914fb">
												<label class="align_right" for="name">Nombre</label>
												<input type="text" size="50" id="name" name="name" class="inputTxt" value="">
												<input type="submit" name="submitWishlist" id="submitWishlist" value="Guardar" class="exclusive">
											</p>

										</fieldset>
									</form>
											<div id="block-history" class="block-center table-responsive">
										<table class="std">
											<thead>
												<tr>
                          <th class="cart_product first_item">Articulo</th>
              						<th class="cart_description item">Descripcion</th>
              						<th class="cart_avail item text-center">Disponibilidad</th>
													<th class="item mywishlist_second">Precio Unitario</th>
													<th class="item mywishlist_second">Creado</th>
													<th class="last_item mywishlist_first">Eliminar</th>
												</tr>
											</thead>

                      <tbody>
                        @foreach($carritos as $carrito)
                          <tr id="product_17_108_0_0" class="cart_item first_item address_0 odd">

                            <td class="cart_product">
                              <a href=""><img src="imgArticulos/{{$carrito->almacena->imagen}}" width="110" height="110"  /></a>
                            </td>

                            <td class="cart_description">
                              <h5 class="product-name">
                                <?php
                                  echo '<h3><a href="'.$carrito->id_articulo.'/Detalles">'.$carrito->almacena->nombre.'</a></h3';
                                ?>
                              </h5>
                              <small class="cart_ref">Marca: {{$carrito->almacena->marca}}</small>
                              <small class="cart_ref">{{$carrito->almacena->categoria}}</small>
                            </td>

                            <td class="cart_avail">
                              <span class="label label-success">In stock</span>
                            </td>
                            <td class="cart_unit" data-title="Unit price">
                              <ul class="price text-right" id="cantidad">
                                <li class="price">${{$carrito->almacena->precio}}</li>
                              </ul>
                            </td>

                            <td class="cart_quantity text-center" data-title="Quantity">
                              {{$carrito->created_at}}

                            </td>

                            <td class="cart_delete text-center" data-title="Delete">
                              <div>
                                <button class="btn btn-default" onclick="eliminar({{$carrito->id}})" style="BACKGROUND-COLOR: rgb(79,0,85); color:white"><i class="fa fa-trash"></i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>


                </div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
	@endsection
