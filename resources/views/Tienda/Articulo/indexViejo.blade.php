@extends('Tienda.Layout.app')
@section('content')


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

			<div id="pro_added_success" class="alert alert-success">Producto agregado exitosamente a su carrito de compras
			</div>
			<div class="layer_details">
				<div class="layer_cart_row">
							<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
								<span class="ajax_cart_product_txt_s  unvisible">
									Hay <span class="ajax_cart_quantity">0</span> articulos en tu carrito
								</span>
							<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
								<span class="ajax_cart_product_txt ">
									Hay 1 artículo en su carrito..
								</span>
				</div>
				<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
								<span class="layer_cart_label">
									Total productos
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

<div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									 <b>>  {{$categoria}}</b>
						</ul>

	        <!--[if IE]> <link rel="stylesheet" href="http://prestashop.flytheme.net/sp_market/themes/sp_market/css/ie9.css" type="text/css" media="all" /><![endif]-->



			<!-- ADD RTL CLASSS -->


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

					<div id="pro_added_success" class="alert alert-success">Producto agregado exitosamente a su carrito de compras
					</div>
					<div class="layer_details">
						<div class="layer_cart_row">
									<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
										<span class="ajax_cart_product_txt_s  unvisible">
											Hay <span class="ajax_cart_quantity">0</span> articulos en tu carrito
										</span>
									<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
										<span class="ajax_cart_product_txt ">
											Hay 1 artículo en su carrito..
										</span>
						</div>
						<div id="layer_cart_ajax_block_products_total" class="layer_cart_row hidden">
										<span class="layer_cart_label">
											Total productos
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

		<div class="breadcrumb-container">
							<div class="container">

		<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
											 <b>>  {{$categoria}}</b>
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

		<script type="text/javascript">
		current_friendly_url = '#';
		param_product_url = '#';
		</script>
		<div id="layered_block_left" class="block">
			<h3 class="title_block">Comprar por</h3>
			<div class="block_content">
				<form action="#" id="layered_form">
					<div>
																												<div class="layered_filter">
								                        <div class="layered_subtitle_heading">
		                            <span class="layered_subtitle titleFont">Categorías</span>
		                            <!--<span class="layered_close">
		                            	<a href="#" data-rel="ul_layered_category_0"></a>
		                            </span>-->
								</div>
								<ul id="ul_layered_category_0" class="col-lg-12 layered_filter_ul">
																																														<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_category_167" id="layered_category_167" value="167" />
																								</span>
													<label for="layered_category_167">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-cycling_gear" data-rel="nofollow">Cycling Gear<span> (4)</span></a>
																									</label>
												</li>
																																									<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_category_168" id="layered_category_168" value="168" />
																								</span>
													<label for="layered_category_168">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-camping_hiking_gear" data-rel="nofollow">Camping &amp; Hiking Gear<span> (6)</span></a>
																									</label>
												</li>
																																									<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_category_170" id="layered_category_170" value="170" />
																								</span>
													<label for="layered_category_170">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#categorias-swim_gear" data-rel="nofollow">Swim Gear<span> (6)</span></a>
																									</label>
												</li>
																																																	</ul>
							</div>
																													<div class="layered_price" style="display: none;">
								                        <div class="layered_subtitle_heading">
		                            <span class="layered_subtitle titleFont">Precio</span>
		                            <!--<span class="layered_close">
		                            	<a href="#" data-rel="ul_layered_price_0"></a>
		                            </span>-->
								</div>
								<ul id="ul_layered_price_0" class="col-lg-12 layered_filter_ul">

											<div class="layered_slider_container">
												<div class="layered_slider" id="layered_price_slider" data-type="price" data-format="1" data-unit="$"></div>
											</div>
											<label for="price">
												Rango:
											</label>
											<span id="layered_price_range"></span>
																														</ul>
							</div>
																													<div class="layered_filter">
								                        <div class="layered_subtitle_heading">
		                            <span class="layered_subtitle titleFont">Fabricante</span>
		                            <!--<span class="layered_close">
		                            	<a href="#" data-rel="ul_layered_manufacturer_0"></a>
		                            </span>-->
								</div>
								<ul id="ul_layered_manufacturer_0" class="col-lg-12 layered_filter_ul">
																																														<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_manufacturer_1" id="layered_manufacturer_1" value="1" />
																								</span>
													<label for="layered_manufacturer_1">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-g_plan" data-rel="nofollow">G Plan<span> (21)</span></a>
																									</label>
												</li>
																																									<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_manufacturer_3" id="layered_manufacturer_3" value="3" />
																								</span>
													<label for="layered_manufacturer_3">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-parker_knoll" data-rel="nofollow">Parker Knoll<span> (1)</span></a>
																									</label>
												</li>
																																									<li class="nomargin hiddable col-lg-12">
													<span class="checker">
																									<input type="checkbox" class="checkbox" name="layered_manufacturer_7" id="layered_manufacturer_7" value="7" />
																								</span>
													<label for="layered_manufacturer_7">
																										<a href="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty#fabricante-puma" data-rel="nofollow">Nike<span> (1)</span></a>
																									</label>
												</li>
																																																	</ul>
							</div>
																													<div class="layered_filter">
								                        <div class="layered_subtitle_heading">

								</div>

							</div>
														</div>

																																																																																																																																				</form>
			</div>
			<div id="layered_ajax_loader" style="display: none;">
				<p style="text-align:center;padding:15px;">
					<img src="http://prestashop.flytheme.net/sp_market/img/loader.gif" alt="" />
					<br />Cargando...
				</p>
			</div>
		</div>
>>>>>>> origin/master


		<!-- MODULE Block best sellers -->
		<div id="best-sellers_block_right" class="block products_block">
			<h3 class="title_block">
		    	MEJOR VENTA

		    </h3>
			<div class="block_content products-block">
					 <ul class="products">
								<li class="clearfix">
						<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis" class="products-block-image">
							<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/11-small_default/blouse.jpg" alt="Aliquam lobortis" />
						</a>
						<div class="product-content">

		                	<h5 class="product-name">
		                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis">
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
						<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" class="products-block-image">
							<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/16-small_default/printed-dress.jpg" alt="Maecenas Sirloin" />
						</a>
						<div class="product-content">

		                	<h5 class="product-name">
		                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin">
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
						<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" class="products-block-image">
							<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/6-small_default/faded-short-sleeves-tshirt.jpg" alt="Aliquam Leberkas" />
						</a>
						<div class="product-content">

		                	<h5 class="product-name">
		                    	<a  href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas">
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
<<<<<<< HEAD
</div>
<!-- /MODULE Block best sellers -->
<!-- SP Custom Html -->

                        <div class="sp_customhtml_14_1513265937252717305
		block spcustom_html">
                            <h3 class="title_block">
                    Testimonials
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
			</div>
								 <!-- End of Sidebar -->

				<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">
				@include('flash::message')
				@if(isset($articulos))
					@if(count($articulos) == 0)

							<p class="alert alert-warning">No hay productos de esta categoria en este momento.</p>
					@else

						<div class="content_sortPagiBar_top">
	            <form id="productsSortForm" action="sp_market/es/153-healthy-beauty" class="productsSortForm ">
		            <div class="select selector1">
			            <label for="selectProductSort">Ordenar</label>
			              <select id="selectProductSort" class="selectProductSort form-control">
				              <option value="name:asc" >Nombre: A to Z</option>
				              <option value="name:desc" >Nombre: Z to A</option>
								      <option value="price:asc" >Mayor precio</option>
					            <option value="price:desc" >Menor precio</option>
								      <option value="quantity:desc" >Productos en Stock</option>
				              <option value="reference:asc" >Referencia mas baja</option>
				              <option value="reference:desc" >Referencia mas alta</option>
			              </select>
		            </div>
	            </form>
	          </div>
	          <div class="content_product_list hide-productdes hide-coloroption hide-stockinfo   "  data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
	            <ul class="product_list row grid">
							 @foreach($articulos as $articulo)

	              <li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
				          <div class="product-container" itemscope itemtype="http://schema.org/Product">
					          <div class="left-block">
	                    <div class="product-image-container">

							          <div class="product-image">
													<a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" itemprop="url" >
										        <img  height="220" class="img_1" src="../imgArticulos/{{$articulo->imagen}}"/>
													</a>
	                      </div>
	                      <div class="label-box">
													<span class="new-box">Nuevo</span>
													<?php
														if($articulo->cantidad == 0){
														  echo '<span class="sale-box">Agotado!</span>';
														}
													?>
												</div>
										 <a title="Vista rápida" class="quick-view" href="Tienda/Articulo/NotificacionArticulo" data-rel="http://localhost:8000/Articulos/PocketClub">Ver detalles
								        </a>
	                    </div>
	                  </div>
	                  <div class="right-block">
											<?php
											echo $articulo->nombre.'- '.$articulo->id;
							          echo '<h4 itemprop="nombre" class="product-name">

													<a href="'.$articulo->id.'/Detalles" itemprop="url" >'.$articulo->nombre.'
								          </a>
							          </h4>';
												?>
											<h5 itemprop="marca" class="product-name">
												<b>Marca: {{$articulo->marca}}
							          </b>
						          </h5>
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
										    <li>
					                <a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_65" class="color_pick" style="background:#F39C11;">
										      </a>
				                </li>
												<li>
					                <a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_64" class="color_pick" style="background:#5D9CEC;">
										      </a>
				                </li>
				                </ul>
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
			                    <span class="nb-comments">
	                          <span itemprop="reviewCount">0
	                          </span> Comentario(s)
	                        </span>
		                    </div>
	                      <div itemprop="offers" class="price-box">
														<span itemprop="price" class="price product-price">${{$articulo->precio}}
	                          </span>
	                      </div>

	                      <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
												  <i class="fa fa-check"></i>
												  <link itemprop="availability" href="http://schema.org/InStock" />In stock</span>
												</div>
												{!!Form::open(array('url'=>'Carrito','method'=>'POST',))!!}
												<div class="form-group">
													<input class="form-control grey" type="hidden" name="vista" value="articulos"/>
												</div>
												<div class="form-group">
													<input class="form-control grey" type="hidden" name="id_articulo" value="{{$articulo->id}}"/>
												</div>
												<div class="form-group">
													<input class="form-control grey" type="hidden" name="categoria" value="{{$articulo->categoria}}" hidden />
												</div>
	                      <div class="button-container">
													<button  class="cart_button" type="submit" >
														Carro
												</button>
	                        <a class="addToWishlist wishlistProd_11" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
	                          <i class="fa fa-heart"></i>
		                      </a>
							          </div>
												{!!Form::close()!!}
					           </div>
	                </div><!-- .product-container> -->
			           </li>
								 @endforeach
	            </ul>
	          </div>
	          <div class="content_sortPagiBar_top">
	            <form id="productsSortForm" action="sp_market/es/153-healthy-beauty" class="productsSortForm ">
		            <div class="select selector1">
			            <label for="selectProductSort">Ordenar</label>
			              <select id="selectProductSort" class="selectProductSort form-control">
				              <option value="name:asc" >Nombre: A to Z</option>
				              <option value="name:desc" >Nombre: Z to A</option>
								      <option value="price:asc" >Mayor precio</option>
					            <option value="price:desc" >Menor precio</option>
								      <option value="quantity:desc" >Productos en Stock</option>
				              <option value="reference:asc" >Referencia mas baja</option>
				              <option value="reference:desc" >Referencia mas alta</option>
			              </select>
		            </div>
	            </form>
	            <div id="pagination_bottom" class="pagination clearfix">
	  					  <ul class="pagination">
	                <li class="active current">
	  							<span>
	  								<span>1</span>
	  							</span>
	  						</li>
	  						<li>
	  							<a  href="/sp_market/es/153-healthy-beauty?p=2">
	  								<span>2</span>
	  							</a>
	  						</li>
	              <li>
	  							<a  href="/sp_market/es/153-healthy-beauty?p=3">
	  								<span>3</span>
	  							</a>
	  						</li>
	              <li id="pagination_next_bottom" class="pagination_next">
	  						<a  href="/sp_market/es/153-healthy-beauty?p=2">
	  							<i class="fa fa-angle-right" aria-hidden="true"></i>
	  						</a>
	  					</li>
	  				</ul>
	        </div>
					@endif
				@endif
    </div>
  </div><!-- #center_column -->
</div><!-- .row -->
</div><!-- #columns -->
</div><!-- .columns-container -->

@endsection
=======
		<!-- /MODULE Block best sellers -->
		<!-- SP Custom Html -->

		                        <div class="sp_customhtml_14_1513265937252717305
				block spcustom_html">
		                            <h3 class="title_block">
		                    Testimonials
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
					</div>
										 <!-- End of Sidebar -->

						<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">
						@include('flash::message')
						@if(isset($articulos))
							@if(count($articulos) == 0)

									<p class="alert alert-warning">No hay productos de esta categoria en este momento.</p>
							@else

								<div class="content_sortPagiBar_top">
			            <form id="productsSortForm" action="sp_market/es/153-healthy-beauty" class="productsSortForm ">
				            <div class="select selector1">
					            <label for="selectProductSort">Ordenar</label>
					              <select id="selectProductSort" class="selectProductSort form-control">
						              <option value="name:asc" >Nombre: A to Z</option>
						              <option value="name:desc" >Nombre: Z to A</option>
										      <option value="price:asc" >Mayor precio</option>
							            <option value="price:desc" >Menor precio</option>
										      <option value="quantity:desc" >Productos en Stock</option>
						              <option value="reference:asc" >Referencia mas baja</option>
						              <option value="reference:desc" >Referencia mas alta</option>
					              </select>
				            </div>
			            </form>
			          </div>
			          <div class="content_product_list hide-productdes hide-coloroption hide-stockinfo   "  data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			            <ul class="product_list row grid">
									 @foreach($articulos as $articulo)

			              <li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
						          <div class="product-container" itemscope itemtype="http://schema.org/Product">
							          <div class="left-block">
			                    <div class="product-image-container">

									          <div class="product-image">
															<a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html" itemprop="url" >
												        <img  height="220" class="img_1" src="../imgArticulos/{{$articulo->imagen}}"/>
															</a>
			                      </div>
			                      <div class="label-box">
															<span class="new-box">Nuevo</span>
															<?php
																if($articulo->cantidad == 0){
																  echo '<span class="sale-box">Agotado!</span>';
																}
															?>
														</div>
												 <a title="Vista rápida" class="quick-view" href="Tienda/Articulo/NotificacionArticulo" data-rel="http://localhost:8000/Articulos/PocketClub">Ver detalles
										        </a>
			                    </div>
			                  </div>
			                  <div class="right-block">
													<?php
													echo $articulo->nombre.'- '.$articulo->id;
									          echo '<h4 itemprop="nombre" class="product-name">

															<a href="'.$articulo->id.'/Detalles" itemprop="url" >'.$articulo->nombre.'
										          </a>
									          </h4>';
														?>
													<h5 itemprop="marca" class="product-name">
														<b>Marca: {{$articulo->marca}}
									          </b>
								          </h5>
													<div class="color-list-container"><ul class="color_to_pick_list clearfix">
												    <li>
							                <a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-m/color-orange" id="color_65" class="color_pick" style="background:#F39C11;">
												      </a>
						                </li>
														<li>
							                <a href="sp_market/es/smartphones-tablets/11-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_64" class="color_pick" style="background:#5D9CEC;">
												      </a>
						                </li>
						                </ul>
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
					                    <span class="nb-comments">
			                          <span itemprop="reviewCount">0
			                          </span> Comentario(s)
			                        </span>
				                    </div>
			                      <div itemprop="offers" class="price-box">
																<span itemprop="price" class="price product-price">${{$articulo->precio}}
			                          </span>
			                      </div>

			                      <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
															<span class="available-now">
														  <i class="fa fa-check"></i>
														  <link itemprop="availability" href="http://schema.org/InStock" />In stock</span>
														</div>
														{!!Form::open(array('url'=>'Tienda/Carrito','method'=>'POST',))!!}
														<div class="form-group">
															<input class="form-control grey" type="hidden" name="vista" value="articulos"/>
														</div>
														<div class="form-group">
															<input class="form-control grey" type="hidden" name="id_articulo" value="{{$articulo->id}}"/>
														</div>
														<div class="form-group">
															<input class="form-control grey" type="hidden" name="categoria" value="{{$articulo->categoria}}" hidden />
														</div>
			                      <div class="button-container">
															<button  class="cart_button" type="submit" >
																Carro
														</button>
			                        <a class="addToWishlist wishlistProd_11" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
			                          <i class="fa fa-heart"></i>
				                      </a>
									          </div>
														{!!Form::close()!!}
							           </div>
			                </div><!-- .product-container> -->
					           </li>
										 @endforeach
			            </ul>
			          </div>
			          <div class="content_sortPagiBar_top">
			            <form id="productsSortForm" action="sp_market/es/153-healthy-beauty" class="productsSortForm ">
				            <div class="select selector1">
					            <label for="selectProductSort">Ordenar</label>
					              <select id="selectProductSort" class="selectProductSort form-control">
						              <option value="name:asc" >Nombre: A to Z</option>
						              <option value="name:desc" >Nombre: Z to A</option>
										      <option value="price:asc" >Mayor precio</option>
							            <option value="price:desc" >Menor precio</option>
										      <option value="quantity:desc" >Productos en Stock</option>
						              <option value="reference:asc" >Referencia mas baja</option>
						              <option value="reference:desc" >Referencia mas alta</option>
					              </select>
				            </div>
			            </form>
			            <div id="pagination_bottom" class="pagination clearfix">
			  					  <ul class="pagination">
			                <li class="active current">
			  							<span>
			  								<span>1</span>
			  							</span>
			  						</li>
			  						<li>
			  							<a  href="/sp_market/es/153-healthy-beauty?p=2">
			  								<span>2</span>
			  							</a>
			  						</li>
			              <li>
			  							<a  href="/sp_market/es/153-healthy-beauty?p=3">
			  								<span>3</span>
			  							</a>
			  						</li>
			              <li id="pagination_next_bottom" class="pagination_next">
			  						<a  href="/sp_market/es/153-healthy-beauty?p=2">
			  							<i class="fa fa-angle-right" aria-hidden="true"></i>
			  						</a>
			  					</li>
			  				</ul>
			        </div>
							@endif
						@endif
		    </div>
		  </div><!-- #center_column -->
		</div><!-- .row -->
		</div><!-- #columns -->
		</div><!-- .columns-container -->

		@endsection
