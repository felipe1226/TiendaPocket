@extends('Tienda.Layout.app')
@section('content')

<!DOCTYPE HTML>
					<link href="themes/sp_market/css/fonts/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/global.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/autoload/jquery.mCustomScrollbar.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/autoload/uniform.default.css" type="text/css" media="all" />
							<link rel="stylesheet" href="js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/spthemeconfigurator/views/css/front/sp-cpanel.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/bootstrap/bootstrap.min.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/spthemeconfigurator/views/css/front/configCss-1.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/theme-f4a137.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/responsive.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/blocktags/blocktags.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/blockwishlist/blockwishlist.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/productcomments/productcomments.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spblockcurrencies/css/spblockcurrencies.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spblocklanguages/css/spblocklanguages.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/smartblog/css/smartblogstyle.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/blockcategories/blockcategories.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spmegamenu/css/spmegamenu.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spextraslider/views/css/style.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/spextraslider/views/css/owl.carousel.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/splistingtabs/views/css/sp-listing-tabs.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/splistingtabs/views/css/owl.carousel.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spblockuserinfo/css/spblockuserinfo.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spdeal/views/css/styles.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spverticalmenu/css/spverticalmenu.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spcategories/views/css/sp-categories.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spsearchpro/views/css/style.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spblockcart/css/spblockcart.css" type="text/css" media="all" />
							<link rel="stylesheet" href="js/jquery/plugins/bxslider/jquery.bxslider.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/sphomeslider/css/sphomeslider.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/sphomeslider/css/animate.css" type="text/css" media="all" />
							<link rel="stylesheet" href="modules/sphomeslider/css/owl.carousel.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spblocknewsletter/spblocknewsletter.css" type="text/css" media="all" />
							<link rel="stylesheet" href="themes/sp_market/css/modules/spcustomhtml/views/css/style.css" type="text/css" media="all" />

					<script type="text/javascript">

							<script type="text/javascript" src="js/jquery/jquery-1.11.0.min.js"></script>
							<script type="text/javascript" src="js/jquery/jquery-migrate-1.2.1.min.js"></script>
							<script type="text/javascript" src="js/jquery/plugins/jquery.easing.js"></script>
							<script type="text/javascript" src="js/tools.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/global.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/autoload/10-bootstrap.min.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/autoload/15-jquery.total-storage.min.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/autoload/15-jquery.uniform-modified.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/autoload/jquery.mCustomScrollbar.concat.min.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/autoload/slick.min.js"></script>
							<script type="text/javascript" src="js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/products-comparison.js"></script>
							<script type="text/javascript" src="modules/spthemeconfigurator/views/js/front/jquery.miniColors.min.js"></script>
							<script type="text/javascript" src="modules/spthemeconfigurator/views/js/front/sp-cpanel.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/sp_lib/jquery.backtotop.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/sp_lib/jquery.global.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/sp_lib/jquery.ui.touch-punch.min.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/sp_lib/jquery.elevatezoom.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/tools/treeManagement.js"></script>
							<script type="text/javascript" src="modules/spextraslider/views/js/owl.carousel.js"></script>
							<script type="text/javascript" src="modules/spdeal/views/js/deal.js"></script>
							<script type="text/javascript" src="modules/spdeal/views/js/jquery.cj-swipe.js"></script>
							<script type="text/javascript" src="modules/spcategories/views/js/jquery.imagesloaded.js"></script>
							<script type="text/javascript" src="modules/spcategories/views/js/jquery.sj_accordion.js"></script>
							<script type="text/javascript" src="modules/spsearchpro/views/js/jquery.autocomplete.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/modules/spblockcart/ajax-cart.js"></script>
							<script type="text/javascript" src="js/jquery/plugins/jquery.scrollTo.js"></script>
							<script type="text/javascript" src="js/jquery/plugins/jquery.serialScroll.js"></script>
							<script type="text/javascript" src="js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
							<script type="text/javascript" src="modules/sphomeslider/js/owl.carousel.js"></script>
							<script type="text/javascript" src="modules/spblocknewsletter/jquery.cookie.min.js"></script>
							<script type="text/javascript" src="themes/sp_market/js/index.js"></script>
							<script type="text/javascript" src="modules/statsdata/js/plugindetect.js"></script>

<div class="header-center">
	<div class="container">
		<div class="row">
			<div id="header_logo" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<a class="logo" href="http://prestashop.flytheme.net/sp_market/">
					<img  src="img/sp-g3shop-logo-1472003784.jpg" alt="SP Market" width="250" height="70">
				</a>
			</div>

			<div class="col-sm-8">
				<div class="shop-menu pull-right">
					<ul class="nav navbar-nav">
						<li ><a>
						 <?php
								echo 'Bienvenido - '.Auth::user()->nombrePersona;
							?>
						</a></li>
						<li ><a href="../Principales/cuenta.php" target="principal"><i class="fa fa-user"></i> Cuenta</a></li>
						<li ><a href="../Principales/cargarImagenes.php" target="principal"><i class="fa fa-bookmark-o"></i> Administrar</a></li>
					</ul>
			</div>
		</div>
			<div id="header_search" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 hidden-xs">
        <div class="sp_searchpro ">
					<div id="sp_search_pro_1" class="spr-container spr-preload">
						<form class="sprsearch-form  show-box" method="get" action="http://prestashop.flytheme.net/sp_market/es/module/spsearchpro/catesearch">
							<div class="spr_selector">
								<select class="spr_select">
											<option>Categorias</option>

											<option value="PocketClub">--- PocketClub ---</option>

											<option value="tecnologia">--- Tecnologia ---</option>

											<option value="licores">--- Licores ---</option>

											<option value="cervezas">--- Cervezas ---</option>

											<option value="utencilios">--- Utencilios ---</option>

											<option value="promociones">--- Promociones ---</option>

											<option value="mercadotecnia">--- Mercadotecnia ---</option>
								</select>
							</div>
							<div class="text-search">
								<input class="spr-query" type="text" name="search_query" value="" placeholder="¿Que buscas?"/>
							</div>
							<button value="Buscar" class="spr-search-button" type="submit" name="spr_submit_search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
        </div>
			</div>

			<div id="header_cart" class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
						<!-- MODULE Block cart -->

				<div class="blockcart clearfix">
					<div class="shopping_cart clearfix">
						<div class="icon-cart">
						</div>
							<a href="order.html" rel="nofollow">
										<?php
											echo '<span class="text-cart">CARRITO('.Auth::user()->id.')</span>';
										?>
										<span class="text-cart4">Carrito</span>
										<span class="line line4"> - </span>
										<span class="ajax_cart_empty">0</span>
										<span class="ajax_cart_quantity">0</span>
										<span class="ajax_cart_quantity_text">Articulos</span>
										<span class="line line4 arrow"><i class="fa fa-caret-down"></i></span>
										<span class="line"> - </span>
										<span class="ajax_cart_total">
											$0.00
										</span>

							</a>
							<div class="cart_block block exclusive">
								<div class="block_content">
											<!-- block list of products -->
									<div class="cart_block_list">
												<p class="recent_items ">Articulos <span>Precio</span></p>
												<p class="cart_block_no_products">
														No tienes articulos en tu carrito
												</p>
										<div class="list-products mCustomScrollbar">
													<dl class="products hide"></dl>
										</div>
										<div class="cart-prices">
											<div class="price-total titleFont">
													<span class="price_text">Total : </span>
													<span class="price cart_block_total ajax_block_cart_total">
																							$ 0.00
													</span>
											</div>
											<div class="buttons">
													<a id="button_order_cart" class="btn btn-default button button-small titleFont" href="order.html" rel="nofollow">
														Ver carrito
													</a>
											</div>
										</div>
									</div>
								</div><!-- .cart_block -->
							</div>
					</div>
				</div>
				<div id="layer_cart" class="layer_box">
					<div class="layer_inner_box">
						<div class="layer_product clearfix mar_b10">
									<span class="cross" title="Close window"></span>
							<div class="product-image-container layer_cart_img">
							</div>
							<div class="layer_product_info">
										<h3 id="layer_cart_product_title" class="product-name"></h3>
										<span id="layer_cart_product_attributes"></span>
								<div id="layer_cart_product_quantity_wrap" class="hidden">
											<span class="layer_cart_label">Quantity</span>
											<span id="layer_cart_product_quantity"></span>
								</div>
								<div id="layer_cart_product_price_wrap" class="hidden">
											<span class="layer_cart_label">Total</span>
											<span id="layer_cart_product_price"></span>
								</div>
							</div>
						</div>

						<div id="pro_added_success" class="alert alert-success">Product successfully added to your shopping cart
						</div>
						<div class="layer_details">
							<div class="layer_cart_row">
										<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
											<span class="ajax_cart_product_txt_s  unvisible">
												There are <span class="ajax_cart_quantity">0</span> items in your cart.
											</span>
										<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
											<span class="ajax_cart_product_txt ">
												There is 1 item in your cart.
											</span>
							</div>
							<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
											<span class="layer_cart_label">
												Total products
																		(tax excl.)
											</span>
											<span class="ajax_block_products_total">
											</span>
							</div>

							<div id="layer_cart_ajax_cart_shipping_cost" class="layer_cart_row hidden">
											<span class="layer_cart_label">
												Total shipping&nbsp;(tax excl.)
											</span>
											<span class="ajax_cart_shipping_cost">
												Free shipping!
											</span>
							</div>
							<div id="layer_cart_ajax_block_cart_total" class="layer_cart_row">
											<span class="layer_cart_label">
												Total
																		(tax excl.)
											</span>
											<span class="ajax_block_cart_total price">
											</span>
							</div>
							<div class="button-container clearfix">
											<span class="continue button pull-left" title="Continue shopping">
												Continue shopping
											</span>
											<a class="button pull-right" href="order.html" title="Proceed to checkout" rel="nofollow">
												Proceed to checkout
											</a>
							</div>
						</div>
					</div>
					<div class="crossseling">
					</div>
				</div> <!-- #layer_cart -->
				<div class="layer_cart_overlay">
				</div>

<!-- /MODULE Block cart -->
			</div>
		</div>
	</div>
</div>


<!--MENU DE CATEGORIAS-->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="spverticalmenu ">
								<nav class="navbar-default" role="navigation">
									<div class="navbar-header">
										<button type="button" id="show-vermegamenu" data-toggle="collapse" data-target="#sp-vermegamenu" class="navbar-toggle">
											Todas categorias
										</button>
										<h2 class="cat-title">Todas categorias</h2>
									</div>
									<div id="sp-vermegamenu" class=" sp-vermegamenu clearfix">
									<span id="remove-vermegamenu" class="fa fa-remove"></span>
									<h2 class="cat-title">Todas categorias</h2>
									<div class="sp-verticalmenu-container">
										<ul class="nav navbar-nav  menu sp_lesp level-1">
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>PocketClub</a>
											</li>
											<li class="item-1 mega_type type1 parent group"  >
												<a href="153-healthy-beauty.html"><i class="icon-v2"></i>Tecnologias</a>
												<div class="dropdown-menu" style="width:200px">
													<ul class="level-2">
														<li class="item-2 sub-cate group parent" style="width:100%" >
															<a href="72-subcat1.html" title="Subcat1">Subcat1</a>
															<div class="dropdown-menu">
																<ul>
																	<li class=" parent"  ><a href="68-hiking-gear.html">Hiking Gear</a>
																		<div class="dropdown-menu">
																			<ul>
																				<li class=""  >
																					<a href="97-hammock.html">Hammock</a>
																				</li>
																				<li class="">
																					<a href="98-telescope.html">Telescope</a>
																				</li>
																				<li class=""  >
																					<a href="99-hat.html">Hat</a>
																				</li>
																				<li class="">
																					<a href="100-tent.html">Tent</a>
																				</li>
																				<li class="">
																					<a href="101-sleeping-bag.html">Sleeping Bag</a>
																				</li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>Licores</a>
											</li>
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>Cervezas</a>
											</li>
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>Utencilios</a>
											</li>
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>Promociones</a>
											</li>
											<li class="item-1 vertical-cat"  >
												<a href="3-electronics.html"><i class="icon-v1"></i>Mercadotecnia</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<script type="text/javascript">

							$(document).ready(function() {
								var wd_width = $(window).width();
								if(wd_width > 992){
									offtogglevermegamenu();
									renderWidthSubmenu();
								}
								if(wd_width >= 1400)
									var limit = 13 -1 ;
								else if(wd_width >= 1200 && wd_width<1400)
									var limit = 13 -1 ;
								else if(wd_width >= 768 && wd_width<1200)
									var limit = 11 -1 ;

								$('#sp-vermegamenu .sp-verticalmenu-container >ul').append('<div class="more-wrap"><span class="more-view">More Categories</span></div>');
								$('#sp-vermegamenu .item-1').each(function(i){
									if(i>limit)
										$(this).css('display', 'none');
									else
										$(this).css('display', 'block');
								});

								$('#sp-vermegamenu .more-wrap').click(function(){
									if($(this).hasClass('open')){
										$('#sp-vermegamenu .item-1').each(function(i){
											if(i>limit){
												$(this).slideUp(200);
											}
										});
										$(this).removeClass('open');
										$('.more-wrap').html('<span class="more-view">More Categories</span>');
									}else{
										$('#sp-vermegamenu .item-1').each(function(i){
											if(i>limit){
												$(this).slideDown(200);
											}
										});
										$(this).addClass('open');
										$('.more-wrap').html('<span class="more-view">Less Categories</span>');
									}
								});

									$(window).resize(function() {

										var sp_width = $( window ).width();
										if(sp_width >= 1400)
											var sp_limit = 13 -1 ;
										else if(sp_width >= 1200 && sp_width<1400)
											var sp_limit = 13 -1 ;
										else if(sp_width >= 768 && sp_width<1200)
											var sp_limit = 11 -1 ;
										$('#sp-vermegamenu .item-1').each(function(i){
											if(i>sp_limit)
												$(this).css('display', 'none');
											else
												$(this).css('display', 'block');
										});

										if(sp_width > 992){
											offtogglevermegamenu();
											renderWidthSubmenu();
										}

									});

									$("#sp-vermegamenu  li.parent  .grower").click(function(){
											if($(this).hasClass('close'))
												$(this).addClass('open').removeClass('close');
											else
												$(this).addClass('close').removeClass('open');

											$('.dropdown-menu',$(this).parent()).first().toggle(300);

									});

							});

							$('#show-vermegamenu').click(function() {
								if($('.sp-vermegamenu').hasClass('sp-vermegamenu-active'))
									$('.sp-vermegamenu').removeClass('sp-vermegamenu-active');
								else
									$('.sp-vermegamenu').addClass('sp-vermegamenu-active');
						        return false;
						    });

							$('#remove-vermegamenu').click(function() {
						        $('.sp-vermegamenu').removeClass('sp-vermegamenu-active');
						        return false;
						    });


							function offtogglevermegamenu()
							{
								$('#sp-vermegamenu li.parent .dropdown-menu').css('display','');
								$('#sp-vermegamenu').removeClass('sp-vermegamenu-active');
								$("#sp-vermegamenu  li.parent  .grower").removeClass('open').addClass('close');
							}

							function renderWidthSubmenu()
							{
								$('#sp-vermegamenu  li.parent').each(function(){
									value = $(this).data("subwidth");
									if(value){
										var container_width = $('.container').width();
										var vertical_width = $('#sp-vermegamenu').width();
										var full_width = container_width - vertical_width;
										var width_submenu = (full_width*value)/100;
										$('> .dropdown-menu',this).css('width',width_submenu+'px');
									}
								});
							}

						</script>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="spmegamenu">
							<nav class="navbar" role="navigation">
								<div class="navbar-button">
									<button type="button" id="show-megamenu" data-toggle="collapse" data-target="#sp-megamenu" class="navbar-toggle">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="sp-megamenu" class="mega sp-megamenu clearfix">
									<span id="remove-megamenu" class="fa fa-remove"></span>
									<span class="label-menu">Menu</span>
									<div class="sp-megamenu-container">
										<div class="home">
											<a href="http://prestashop.flytheme.net/sp_market/">Casa</a>
										</div>
										<ul class="nav navbar-nav  menu sp_lesp level-1">
											<li class="item-1 newarrival" ><a href="http://prestashop.flytheme.net/sp_market/new-products" title="Nuevo"><p><span class="hot">Hot</span></p> Nuevo</a>
											</li>
											<li class="item-1 promotions" ><a href="#" title="Promociones"> Promociones</a>
											</li>
											<li class="item-1 css_type specials" ><a href="http://prestashop.flytheme.net/sp_market/prices-drop" title="Especiales"> Especiales</a>
											</li>
											<li class="item-1 blog" ><a href="indexd963.html?fc=module&amp;module=smartblog&amp;controller=category" title="Blog"> Blog</a>
											</li>
											<li class="item-1 contactus" ><a href="{{url('Contactenos/')}}" title="Cont&aacute;ctenos"> Cont&aacute;ctenos</a>
											</li>
											<li class="item-1 aboutus" ><a href="content/4-about-us.html" title="Nosotros"> Nosotros</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<script type="text/javascript">

						$(document).ready(function() {

							$("#sp-megamenu  li.parent  .grower").click(function(){
								if($(this).hasClass('close'))
									$(this).addClass('open').removeClass('close');
								else
									$(this).addClass('close').removeClass('open');

								$('.dropdown-menu',$(this).parent()).first().toggle(300);

							});
							$("#sp-megamenu  .home  .grower").click(function(){
								if($(this).hasClass('close'))
									$(this).addClass('open').removeClass('close');
								else
									$(this).addClass('close').removeClass('open');

								$('.dropdown-menu',$(this).parent()).first().toggle(300);
							});

							var wd_width = $(window).width();
							var wd_height = $(window).height();
							if(wd_width > 992)
								offtogglemegamenu();

							$(window).resize(function() {
								var sp_width = $( window ).width();
								if(sp_width > 992)
									offtogglemegamenu();
							});
						});

						$('#show-megamenu').click(function() {
							if($('.sp-megamenu').hasClass('sp-megamenu-active'))
								$('.sp-megamenu').removeClass('sp-megamenu-active');
							else
								$('.sp-megamenu').addClass('sp-megamenu-active');
					        return false;
					    });
						$('#remove-megamenu').click(function() {
					        $('.sp-megamenu').removeClass('sp-megamenu-active');
					        return false;
					    });


						function offtogglemegamenu()
						{
							$('#sp-megamenu li.parent .dropdown-menu').css('display','');
							$('#sp-megamenu').removeClass('sp-megamenu-active');
							$("#sp-megamenu  li.parent  .grower").removeClass('open').addClass('close');
							$('#sp-megamenu .home .dropdown-menu').css('display','');
							$('#sp-megamenu').removeClass('sp-megamenu-active');
							$("#sp-megamenu .home  .grower").removeClass('open').addClass('close');
						}
						</script>
					</div>
				</div>
			</div>
		</div>
		<!-- END HEADER-->


			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									Productos Nuevos
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
								<div id="sidebar" class="column  col-lg-3 col-md-3 col-sm-4 sidebar-left">

<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<h3 class="title_block">
    	MEJOR VENTA
    </h3>
	<div class="block_content products-block">
			 <ul class="products">
						<li class="clearfix">
				<a href="electronics/2-blouse.html" title="Aliquam lobortis" class="products-block-image">
					<img class="replace-2x img-responsive" src="../11-small_default/blouse.jpg" alt="Aliquam lobortis" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="electronics/2-blouse.html" title="Aliquam lobortis">
                            Aliquam lobortis
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$27.00</span>

                        </div>

						<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Duis bacon reprehenderit, nostrud cow elit jowl landjaeger sunt sint...</p>-->


                </div>
			</li>
					<li class="clearfix">
				<a href="electronics/3-printed-dress.html" title="Maecenas Sirloin" class="products-block-image">
					<img class="replace-2x img-responsive" src="../16-small_default/printed-dress.jpg" alt="Maecenas Sirloin" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="electronics/3-printed-dress.html" title="Maecenas Sirloin">
                            Maecenas Sirloin
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$26.00</span>

                        </div>

						<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Filet mignon corned beef laboris ipsum porchetta beef irure dolor...</p>-->


                </div>
			</li>
					<li class="clearfix">
				<a href="electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" class="products-block-image">
					<img class="replace-2x img-responsive" src="../6-small_default/faded-short-sleeves-tshirt.jpg" alt="Aliquam Leberkas" />
				</a>
				<div class="product-content">

                	<h5 class="product-name">
                    	<a  href="electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas">
                            Aliquam Leberkas
                        </a>
                    </h5>

					                        <div class="price-box">
                            <span class="price">$16.51</span>

                        </div>

						<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "3.5" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">2</span> Comentario(s)</span>
	</div>


					<!--<p class="product-description">Sausage pancetta frankfurter biltong meatloaf andouille flank porchetta...</p>-->


                </div>
			</li>
				</ul>
		<!--<div class="lnk">
        	<a href="http://prestashop.flytheme.net/sp_market/es/best-sales" title="Los productos más vendidos"  class="btn btn-default button button-small"><span>Los productos más vendidos<i class="fa fa-chevron-right right"></i></span></a>
        </div>-->
		</div>
</div>
<!-- /MODULE Block best sellers -->
<!-- SP Custom Html -->

                        <div class="sp_customhtml_14_1506214402632857221
		block spcustom_html">
                            <h3 class="title_block">
                    Testimonios
                </h3>


                  <div class="testimonials">
<div class="list-items">
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
</div>
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
</div>
<div class="item">
<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#" /></div>
<div class="name">Aliquam Tellus</div>
<div class="job">Vitae Ornare Mauris</div>
</div>
</div>
</div>

                    </div>
    <!-- /SP Custom Html -->

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var slider_post = $(".list-items");
			slider_post.owlCarousel({
				responsive:{
					0:{
						items:1
					},
					480:{
						items:1
					},
					768:{
						items:1
					},
					992:{
						items:1
					},
					1200:{
						items:1
					}
				},

				autoplay:false,
				loop:true,
				nav : true, // Show next and prev buttons
				dots: false,
				autoplaySpeed : 500,
				navSpeed : 500,
				dotsSpeed : 500,
				autoplayHoverPause: true,
				margin:0,
			});
		});
	</script>

								</div>
								 <!-- End of Sidebar -->




						<!-- Center Column -->
						<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">




<h1 class="page-heading product-listing">Productos Nuevos</h1>

	<div class="content_sortPagiBar_top">
		<div class="category-view-type hidden-xs">
    <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a></div>
    <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a></div>
</div>




<form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/new-products" class="productsSortForm ">

	<div class="select selector1">
		<label for="selectProductSort">Ordenar</label>
		<select id="selectProductSort" class="selectProductSort form-control">
			<option value="name:asc" >Nombre del Producto: A to Z</option>
			<option value="name:desc" >Nombre del Productos: Z to A</option>
							<option value="price:asc" >Precio mas Bajo</option>
				<option value="price:desc" >Precio mas Alto</option>
						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
							<option value="quantity:desc" >Productos en Stock</option>

			<option value="reference:asc" >Referencia mas Baja</option>
			<option value="reference:desc" >Referencia mas Alta</option>
		</select>
	</div>
</form>
<!-- /Sort products -->


									<!-- nbr product/page -->
			<form action="http://prestashop.flytheme.net/sp_market/es/new-products" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
												<label for="nb_item">
					Mostrar
				</label>
																												<select name="n" id="nb_item" class="form-control">
																							<option value="9" selected="selected">9</option>
																														<option value="18" >18</option>
																														<option value="45" >45</option>
																					</select>

			</div>
		</form>
		<!-- /nbr product/page -->




	<!-- Pagination -->
		<div id="pagination" class="pagination clearfix">
					<ul class="pagination">
																															<li class="active current">
							<span>
								<span>1</span>
							</span>
						</li>
																				<li>
							<a  href="new-products905b.html?p=2">
								<span>2</span>
							</a>
						</li>
																				<li>
							<a  href="new-products2207.html?p=3">
								<span>3</span>
							</a>
						</li>
																		<li class="truncate">
						<span>
							<span>...</span>
						</span>
					</li>
					<li>
						<a href="new-products2df4.html?p=8">
							<span>8</span>
						</a>
					</li>
																										<li id="pagination_next" class="pagination_next">
						<a  href="new-products905b.html?p=2">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</li>
								</ul>

		 <!--<div class="product-count">
																											Showing 1 - 9 of 68 items
					</div>
		-->

	</div>
    	<!-- /Pagination -->

	</div>

	<div class="content_product_list      "  data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">

	<!-- Products list -->
	<ul class="product_list row grid">




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="toys-hobbies/69-faded-short-sleeves-tshirt.html" title="Gortor shankleng" itemprop="url" >
									<img class="img_1" src="../347-home_default/faded-short-sleeves-tshirt.jpg"  alt="Gortor shankleng"/>
																	</a>
					</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

							<span class="sale-box">Venta</span>
													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="toys-hobbies/69-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/toys-hobbies/69-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="toys-hobbies/69-faded-short-sleeves-tshirt.html" title="Gortor shankleng" itemprop="url" >
							Gortor shankleng
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Landjaeger nostrud strip steak veniam salami meatball pork belly shank tail in spare ribs laboris. Cupim in hamburger sausage picanha dolore. Fugiat non elit beef. Pancetta pork chop tongue chicken picanha tri-tip proident porchetta reprehenderit nisi t-bone 
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="toys-hobbies/69-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_416" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="toys-hobbies/69-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_415" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																	<span class="discount">Reduced price!</span>
												</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$65.25							</span>
							<meta itemprop="priceCurrency" content="USD" />

								<span class="old-price product-price">
									$87.00
								</span>

								<!--									<span class="price-percent-reduction">-25%</span>
								-->


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="orderfe7e.html?add=1&amp;id_product=69&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="69">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_69" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '69', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="toys-hobbies/69-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="69">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>

			</div><!-- .product-container> -->
		</li>

		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="toys-hobbies/68-faded-short-sleeves-tshirt.html" title="Zeberkas ground" itemprop="url" >
									<img class="img_1" src="../341-home_default/faded-short-sleeves-tshirt.jpg"  alt="Zeberkas ground"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="toys-hobbies/68-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="toys-hobbies/68-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="toys-hobbies/68-faded-short-sleeves-tshirt.html" title="Zeberkas ground" itemprop="url" >
							Zeberkas ground
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Landjaeger nostrud strip steak veniam salami meatball pork belly shank tail in spare ribs laboris. Cupim in hamburger sausage picanha dolore. Fugiat non elit beef. Pancetta pork chop tongue chicken picanha tri-tip proident porchetta reprehenderit nisi t-bone 
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="toys-hobbies/68-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_410" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="toys-hobbies/68-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_409" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$71.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="ordera4fd.html?add=1&amp;id_product=68&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="68">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_68" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '68', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="toys-hobbies/68-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="68">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="toys-hobbies/67-faded-short-sleeves-tshirt.html" title="Nenison drumstick" itemprop="url" >
									<img class="img_1" src="../334-home_default/faded-short-sleeves-tshirt.jpg"  alt="Nenison drumstick"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="toys-hobbies/67-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="toys-hobbies/67-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="toys-hobbies/67-faded-short-sleeves-tshirt.html" title="Nenison drumstick" itemprop="url" >
							Nenison drumstick
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Landjaeger nostrud strip steak veniam salami meatball pork belly shank tail in spare ribs laboris. Cupim in hamburger sausage picanha dolore. Fugiat non elit beef. Pancetta pork chop tongue chicken picanha tri-tip proident porchetta reprehenderit nisi t-bone 
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="toys-hobbies/67-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_404" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="toys-hobbies/67-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_403" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$59.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order5eab.html?add=1&amp;id_product=67&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="67">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_67" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '67', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="toys-hobbies/67-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="67">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="toys-hobbies/66-faded-short-sleeves-tshirt.html" title="Henderit exercitation" itemprop="url" >
									<img class="img_1" src="../328-home_default/faded-short-sleeves-tshirt.jpg"  alt="Henderit exercitation"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="toys-hobbies/66-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="toys-hobbies/66-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="toys-hobbies/66-faded-short-sleeves-tshirt.html" title="Henderit exercitation" itemprop="url" >
							Henderit exercitation
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Landjaeger nostrud strip steak veniam salami meatball pork belly shank tail in spare ribs laboris. Cupim in hamburger sausage picanha dolore. Fugiat non elit beef. Pancetta pork chop tongue chicken picanha tri-tip proident porchetta reprehenderit nisi t-bone 
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="toys-hobbies/66-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_398" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="toys-hobbies/66-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_397" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$16.51							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order0e06.html?add=1&amp;id_product=66&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="66">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_66" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '66', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="toys-hobbies/66-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="66">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="toys-hobbies/65-faded-short-sleeves-tshirt.html" title="Tididunt eiusmod" itemprop="url" >
									<img class="img_1" src="../323-home_default/faded-short-sleeves-tshirt.jpg"  alt="Tididunt eiusmod"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

													</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="toys-hobbies/65-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="toys-hobbies/65-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="toys-hobbies/65-faded-short-sleeves-tshirt.html" title="Tididunt eiusmod" itemprop="url" >
							Tididunt eiusmod
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Landjaeger nostrud strip steak veniam salami meatball pork belly shank tail in spare ribs laboris. Cupim in hamburger sausage picanha dolore. Fugiat non elit beef. Pancetta pork chop tongue chicken picanha tri-tip proident porchetta reprehenderit nisi t-bone 
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="toys-hobbies/65-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_392" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="toys-hobbies/65-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_391" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																														</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$49.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order8689.html?add=1&amp;id_product=65&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="65">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_65" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '65', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="toys-hobbies/65-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="65">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="smartphones-tablets/64-faded-short-sleeves-tshirt.html" title="Swinevelit rumptur" itemprop="url" >
									<img class="img_1" src="../318-home_default/faded-short-sleeves-tshirt.jpg"  alt="Swinevelit rumptur"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="smartphones-tablets/64-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="smartphones-tablets/64-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="smartphones-tablets/64-faded-short-sleeves-tshirt.html" title="Swinevelit rumptur" itemprop="url" >
							Swinevelit rumptur
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Cupidatat sunt velit esse, deserunt filet mignon hamburger excepteur shank ea ball tip. Eiusmod sunt filet mignon venison kevin sint irure exercitation labore cow prosciutto. Consectetur voluptate leberkas qui kielbasa nostrud proident laborum cupim pork belly beef ad. Aliquip hamburger fugiat sed
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="smartphones-tablets/64-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_386" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="smartphones-tablets/64-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_385" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$100.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order2c8b.html?add=1&amp;id_product=64&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="64">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_64" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '64', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="smartphones-tablets/64-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="64">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="smartphones-tablets/63-faded-short-sleeves-tshirt.html" title="Alcatra meatball" itemprop="url" >
									<img class="img_1" src="../313-home_default/faded-short-sleeves-tshirt.jpg"  alt="Alcatra meatball"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="smartphones-tablets/63-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="smartphones-tablets/63-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="smartphones-tablets/63-faded-short-sleeves-tshirt.html" title="Alcatra meatball" itemprop="url" >
							Alcatra meatball
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Cupidatat sunt velit esse, deserunt filet mignon hamburger excepteur shank ea ball tip. Eiusmod sunt filet mignon venison kevin sint irure exercitation labore cow prosciutto. Consectetur voluptate leberkas qui kielbasa nostrud proident laborum cupim pork belly beef ad. Aliquip hamburger fugiat sed
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="smartphones-tablets/63-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_380" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="smartphones-tablets/63-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_379" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$55.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">
							<a class="cart_button ajax_add_to_cart_button" href="ordera6a2.html?add=1&amp;id_product=63&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="63">
											Carro</a>


	<a class="addToWishlist wishlistProd_63" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '63', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="smartphones-tablets/63-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="63">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="smartphones-tablets/62-faded-short-sleeves-tshirt.html" title="Vodaliquip hamhoc" itemprop="url" >
									<img class="img_1" src="../310-home_default/faded-short-sleeves-tshirt.jpg"  alt="Vodaliquip hamhoc"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="smartphones-tablets/62-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="smartphones-tablets/62-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="smartphones-tablets/62-faded-short-sleeves-tshirt.html" title="Vodaliquip hamhoc" itemprop="url" >
							Vodaliquip hamhoc
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Cupidatat sunt velit esse, deserunt filet mignon hamburger excepteur shank ea ball tip. Eiusmod sunt filet mignon venison kevin sint irure exercitation labore cow prosciutto. Consectetur voluptate leberkas qui kielbasa nostrud proident laborum cupim pork belly beef ad. Aliquip hamburger fugiat sed
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="smartphones-tablets/62-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_374" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="smartphones-tablets/62-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_373" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$91.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">
							<a class="cart_button ajax_add_to_cart_button" href="order81b4.html?add=1&amp;id_product=62&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="62">Carro</a>


	<a class="addToWishlist wishlistProd_62" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '62', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="smartphones-tablets/62-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="62">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>




		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="smartphones-tablets/61-faded-short-sleeves-tshirt.html" title="Mignon leberkas" itemprop="url" >
									<img class="img_1" src="../304-home_default/faded-short-sleeves-tshirt.jpg"  alt="Mignon leberkas"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

															<span class="sale-box">Venta!</span>
														</div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="smartphones-tablets/61-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="smartphones-tablets/61-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="smartphones-tablets/61-faded-short-sleeves-tshirt.html" title="Mignon leberkas" itemprop="url" >
							Mignon leberkas
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Cupidatat sunt velit esse, deserunt filet mignon hamburger excepteur shank ea ball tip. Eiusmod sunt filet mignon venison kevin sint irure exercitation labore cow prosciutto. Consectetur voluptate leberkas qui kielbasa nostrud proident laborum cupim pork belly beef ad. Aliquip hamburger fugiat sed
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="smartphones-tablets/61-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_368" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="smartphones-tablets/61-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_367" class="color_pick" style="background:#5D9CEC;">
									</a>
			</li>
			</ul>
</div>

					<!-- <div class="product-flags">
																																					</div>
					 -->
					 						<!--  Show average rating stars  -->
							<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content">
												<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
							            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "0" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
	</div>


					<!--Product Prices-->
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
													<span itemprop="price" class="price product-price">
								$99.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


											</div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />En stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order4937.html?add=1&amp;id_product=61&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="61">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_61" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '61', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="smartphones-tablets/61-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="61">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->
		</li>
		</ul>





	</div>

	<div class="content_sortPagiBar_bottom">
		<div class="category-view-type hidden-xs">
    <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a></div>
    <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a></div>
</div>




<form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/new-products" class="productsSortForm ">

	<div class="select selector1">
		<label for="selectProductSort">Ordenar</label>
		<select id="selectProductSort" class="selectProductSort form-control">
			<option value="name:asc" >Nombre del Producto: A to Z</option>
			<option value="name:desc" >Nombre de Producto: Z to A</option>
							<option value="price:asc" >Precio mas Bajo</option>
				<option value="price:desc" >Precio mas Alto</option>
						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
							<option value="quantity:desc" >Productos en Stock</option>

			<option value="reference:asc" >Referencia mas Baja</option>
			<option value="reference:desc" >Referencia mas Alta</option>
		</select>
	</div>
</form>
<!-- /Sort products -->


									<!-- nbr product/page -->
			<form action="http://prestashop.flytheme.net/sp_market/es/new-products" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
												<label for="nb_item">
					Mostrar
				</label>
																												<select name="n" id="nb_item" class="form-control">
																							<option value="9" selected="selected">9</option>
																														<option value="18" >18</option>
																														<option value="45" >45</option>
																					</select>

			</div>
		</form>
		<!-- /nbr product/page -->




	<!-- Pagination -->
		<div id="pagination_bottom" class="pagination clearfix">
					<ul class="pagination">
																															<li class="active current">
							<span>
								<span>1</span>
							</span>
						</li>
																				<li>
							<a  href="new-products905b.html?p=2">
								<span>2</span>
							</a>
						</li>
																				<li>
							<a  href="new-products2207.html?p=3">
								<span>3</span>
							</a>
						</li>
																		<li class="truncate">
						<span>
							<span>...</span>
						</span>
					</li>
					<li>
						<a href="new-products2df4.html?p=8">
							<span>8</span>
						</a>
					</li>
																										<li id="pagination_next_bottom" class="pagination_next">
						<a  href="new-products905b.html?p=2">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</li>
								</ul>

		 <!--<div class="product-count">
																											Showing 1 - 9 of 68 items
					</div>
		-->

	</div>
    	<!-- /Pagination -->

	</div>
						</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
							<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="footer-content">
							<div class="row">

<!-- SP Custom Html -->

                        <div class="sp_customhtml_4_15062144021132841011
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">About Market</div>
								<ul class="links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Market Reviews</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
								</ul>
								</div>

                    </div>

                        <div class="sp_customhtml_5_1506214402381835483
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">Customer Service</div>
								<ul class="links">
								<li><a href="#">Shipping Policy</a></li>
								<li><a href="#">Compensation First</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Contact Us</a></li>
								</ul>
								</div>

                    </div>

                        <div class="sp_customhtml_6_1506214402642318398
		box-footer col-sm-3 spcustom_html">


                  <div class="footer-links">
								<div class="title-box">Payment & Shipping</div>
								<ul class="links">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Shipping Guide</a></li>
								<li><a href="#">Locations We Ship To</a></li>
								<li><a href="#">Estimated Delivery Time</a></li>
								</ul>
								</div>

                    </div>
    <!-- /SP Custom Html -->


<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="contact-infos box-footer col-md-3 col-sm-12">

	<div class="title-box">Contacte con nosotros</div>
	<ul class="list-contact">

					<li class="address">
				<span class="icon"><i class="fa fa-map-marker"></i></span>
				<label>Address: No 40 Baria Sreet 133/2 NewYork City,
NY, United States</label>
			</li>
							<li class="email">
				<span class="icon"><i class="fa fa-envelope"></i></span>
				<label>Email: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%63%6f%6e%74%61%63%74@%6d%61%72%6b%65%74.%63%6f%6d" >&#x63;&#x6f;&#x6e;&#x74;&#x61;&#x63;&#x74;&#x40;&#x6d;&#x61;&#x72;&#x6b;&#x65;&#x74;&#x2e;&#x63;&#x6f;&#x6d;</a></label>
			</li>
							<li class="phone">
				<span class="icon"><i class="fa fa-mobile"></i></span>
				<label>Phone: 0123456789</label>
			</li>
			</ul>

</section>
<!-- /MODULE Block contact infos -->
<script type="text/javascript">
				var time_start;
				$(window).load(
					function() {
						time_start = new Date();
					}
				);
				$(window).unload(
					function() {
						var time_end = new Date();
						var pagetime = new Object;
						pagetime.type = "pagetime";
						pagetime.id_connections = "9202";
						pagetime.id_page = "109";
						pagetime.time_start = "2017-09-23 20:53:22";
						pagetime.token = "352f01c597f83c85b600efc455163b1f11bcda13";
						pagetime.time = time_end-time_start;
						$.post("indexc3cb.html?controller=statistics", pagetime);
					}
				);
			</script>
							</div>
						</div>
					</footer>

																<div class="footer-middle">
							<div class="container">

<!-- SP Custom Html -->

                        <div class="sp_customhtml_7_15062144021600197027
		 spcustom_html">


                  <div class="footer-toplinks">
								<div class="topstore"><label>Top Stores : </label>
								<ul>
								<li><a href="#">Brand Directory</a></li>
								<li class="last"><a href="#">Store Directory</a></li>
								</ul>
								</div>
								<div class="toplinks">
								<div class="links"><label>MOST SEARCHED FOR ON MARKET:</label>
								<ul>
								<li><a href="#">Xiaomi Mi3</a></li>
								<li><a href="#">Digiflip Pro XT 712 Tablet</a></li>
								<li><a href="#">Mi 3 Phones</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>MOBILES:</label>
								<ul>
								<li><a href="#">Moto E</a></li>
								<li><a href="#">Samsung Mobile</a></li>
								<li><a href="#">Micromax Mobile</a></li>
								<li><a href="#">Nokia Mobile</a></li>
								<li><a href="#">HTC Mobile</a></li>
								<li><a href="#">Sony Mobile</a></li>
								<li><a href="#">Apple Mobile</a></li>
								<li><a href="#">LG Mobile</a></li>
								<li><a href="#">Karbonn Mobile</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>CAMERA:</label>
								<ul>
								<li><a href="#">Nikon Camera</a></li>
								<li><a href="#">Canon Camera</a></li>
								<li><a href="#">Sony Camera</a></li>
								<li><a href="#">Samsung Camera</a></li>
								<li><a href="#">Point shoot camera</a></li>
								<li><a href="#">Camera Lens</a></li>
								<li><a href="#">Camera Tripod</a></li>
								<li><a href="#">Camera Bag</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>LAPTOPS:</label>
								<ul>
								<li><a href="#">Apple Laptop</a></li>
								<li><a href="#">Acer Laptop</a></li>
								<li><a href="#">Samsung Laptop</a></li>
								<li><a href="#">Lenovo Laptop</a></li>
								<li><a href="#">Sony Laptop</a></li>
								<li><a href="#">Dell Laptop</a></li>
								<li><a href="#">Asus Laptop</a></li>
								<li><a href="#">Toshiba Laptop</a></li>
								<li><a href="#">LG Laptop</a></li>
								<li><a href="#">HP Laptop</a></li>
								<li><a href="#">Notebook</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>TVS:</label>
								<ul>
								<li><a href="#">Sony TV</a></li>
								<li><a href="#">Samsung TV</a></li>
								<li><a href="#">LG TV</a></li>
								<li><a href="#">Panasonic TV</a></li>
								<li><a href="#">Onida TV</a></li>
								<li><a href="#">Toshiba TV</a></li>
								<li><a href="#">Philips TV</a></li>
								<li><a href="#">Micromax TV</a></li>
								<li><a href="#">LED TV</a></li>
								<li><a href="#">LCD TV</a></li>
								<li><a href="#">Plasma TV</a></li>
								<li><a href="#">3D TV</a></li>
								<li><a href="#">Smart TV</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>TABLETS:</label>
								<ul>
								<li><a href="#">Micromax Tablets</a></li>
								<li><a href="#">HCL Tablets</a></li>
								<li><a href="#">Samsung Tablets</a></li>
								<li><a href="#">Lenovo Tablets</a></li>
								<li><a href="#">Karbonn Tablets</a></li>
								<li><a href="#">Asus Tablets</a></li>
								<li><a href="#">Apple Tablets</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>WATCHES:</label>
								<ul>
								<li><a href="#">FCUK Watches</a></li>
								<li><a href="#">Titan Watches</a></li>
								<li><a href="#">Casio Watches</a></li>
								<li><a href="#">Fastrack Watches</a></li>
								<li><a href="#">Timex Watches</a></li>
								<li><a href="#">Fossil Watches</a></li>
								<li><a href="#">Diesel Watches</a></li>
								<li><a href="#">Luxury Watches</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>CLOTHING:</label>
								<ul>
								<li><a href="#">Shirts</a></li>
								<li><a href="#">Jeans</a></li>
								<li><a href="#">T shirts</a></li>
								<li><a href="#">Kurtis</a></li>
								<li><a href="#">Sarees</a></li>
								<li><a href="#">Levis Jeans</a></li>
								<li><a href="#">Killer Jeans</a></li>
								<li><a href="#">Pepe Jeans</a></li>
								<li><a href="#">Arrow Shirts</a></li>
								<li><a href="#">Ethnic Wear</a></li>
								<li><a href="#">Formal Shirts</a></li>
								<li><a href="#">Peter England Shirts</a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								<div class="links"><label>FOOTWEAR:</label>
								<ul>
								<li><a href="#">Shoes</a></li>
								<li><a href="#">Casual Shoes</a></li>
								<li><a href="#">Sports Shoes</a></li>
								<li><a href="#">Formal Shoes</a></li>
								<li><a href="#">Adidas Shoes</a></li>
								<li><a href="#">Gas Shoes</a></li>
								<li><a href="#">Puma Shoes</a></li>
								<li><a href="#">Reebok Shoes</a></li>
								<li><a href="#">Woodland Shoes</a></li>
								<li><a href="#">Red tape Shoes</a></li>
								<li><a href="#">Nike Shoes </a></li>
								<li class="last"><a href="#">View all</a></li>
								</ul>
								</div>
								</div>
								</div>

                    </div>
    <!-- /SP Custom Html -->


							</div>
						</div>
										<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-sm-8">
									<div class="copyright">&copy; 2016 Prestashop Themes Demo Store. All Rights Reserved.  Designed By <a target="_blank" title="Visit MagenTech!" href="http://magentech.com/">MagenTech.Com</a></div>								</div>
								<div class="col-sm-4">
									<div class="footer-payment">
<img src="../modules/spthemeconfigurator/patterns/payments-1-1.png" alt="payment logos" >
</div>

								</div>
							</div>
						</div>
					</div>

					<div class="backtop">
						<a id="sp-totop" class="backtotop" href="#" title="Back to top">
							<i class="fa fa-arrow-up"></i>
						</a>
					</div>

				</div><!-- #footer -->
					</div><!-- #page -->
