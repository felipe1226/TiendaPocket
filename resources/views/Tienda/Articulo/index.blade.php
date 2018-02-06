@extends('Tienda.Layout.app')
@section('content')

<div id="layer_cart" class="layer_box" style="display: none; position:fixed; top: 60px;">
	<div class="layer_inner_box">
		<div class="layer_product clearfix mar_b10">
			<span class="cross" title="Close window"></span>

			<div id="imagenArticulo" class="product-image-container layer_cart_img">
			</div>
			<div class="layer_product_info">
				<h3 class="product-name"><div id="nombreArticulo"></div></h3>
			</div>
		</div>

		<div id="pro_added_success" class="alert alert-success"></div>
		<div class="layer_details">
			<div class="layer_cart_row">
				<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
				<span id="cantidadArticulo" class="ajax_cart_product_txt_s">
				</span>
			</div>
			<div class="button-container clearfix">
				<span class="continue button pull-left">Continuar comprando
				</span>
				<a id="carritoButtom" class="button pull-right" href="{{url('Carrito')}}" rel="nofollow">Ver carrito
				</a>
				<a id="deseoButtom" class="button pull-right" href="{{url('ListaDeseos')}}" rel="nofollow">Ver deseos
				</a>
			</div>
		</div>
	</div>
	<div class="crossseling"></div>
</div>
<div class="layer_cart_overlay" style="display: none; width: 100%; height: 100%; overflow:auto;"></div>

<!-- Breadcrumb Column -->
	<div class="breadcrumb-container">
		<div class="container">

<!-- Breadcrumb -->
      <div class="breadcrumb clearfix">
	      <ul>
		      <li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio  </a>
          </li>
          <li class="depht1"><a href="#">{{$categoria}}</a>
          </li>
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
           	<div class="block_content products-block" style="">
           			 <ul class="products">
           						<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/11-small_default/blouse.jpg" alt="Aliquam lobortis">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/2-blouse.html" title="Aliquam lobortis">
                                       Aliquam lobortis
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$27.00</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="0">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
           	</div>


           					<!--<p class="product-description">Duis bacon reprehenderit, nostrud cow elit jowl landjaeger sunt sint...</p>-->


                           </div>
           			</li>
           					<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/16-small_default/printed-dress.jpg" alt="Maecenas Sirloin">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/3-printed-dress.html" title="Maecenas Sirloin">
                                       Maecenas Sirloin
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$26.00</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="0">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">0</span> Comentario(s)</span>
           	</div>


           					<!--<p class="product-description">Filet mignon corned beef laboris ipsum porchetta beef irure dolor...</p>-->


                           </div>
           			</li>
           					<li class="clearfix">
           				<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" class="products-block-image">
           					<img class="replace-2x img-responsive" src="http://prestashop.flytheme.net/sp_market/6-small_default/faded-short-sleeves-tshirt.jpg" alt="Aliquam Leberkas">
           				</a>
           				<div class="product-content">

                           	<h5 class="product-name">
                               	<a href="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas">
                                       Aliquam Leberkas
                                   </a>
                               </h5>

           					                        <div class="price-box">
                                       <span class="price">$16.51</span>

                                   </div>

           						<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
           		<div class="star_content">
           												<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star star_on"></div>
           																<div class="star"></div>
           							            <meta itemprop="worstRating" content="0">
                       <meta itemprop="ratingValue" content="3.5">
                       <meta itemprop="bestRating" content="5">
           		</div>
           		<span class="nb-comments"><span itemprop="reviewCount">2</span> Comentario(s)</span>
           	</div>

                           </div>
           			</li>
           				</ul>
           		</div>
           </div>
           <!-- /MODULE Block best sellers -->
           <!-- SP Custom Html -->

                                   <div class="sp_customhtml_14_15161122961891474554
           		block spcustom_html">
                                       <h3 class="title_block">
                               Testimonials
                           </h3>


                             <div class="testimonials">
           <div class="list-items owl-carousel owl-theme owl-loaded">
						 <div class="owl-stage-outer">
							 <div class="owl-stage" style="width: 1197px; transform: translate3d(-342px, 0px, 0px); transition: 0s;">
								 <div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
									 <div class="item">
										 <div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
										 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
										 <div class="name">Aliquam Tellus</div>
										  <div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item active" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											<div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											<div class="name">Aliquam Tellus</div>
											<div class="job">Vitae Ornare Mauris</div>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										<div class="item">
											<div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											 <div class="name">Aliquam Tellus</div>
											 <div class="job">Vitae Ornare Mauris</div>
										 </div>
									 </div>
									 <div class="owl-item cloned" style="width: 171px; margin-right: 0px;">
										 <div class="item">
											 <div class="text">Aliquam ut tellus dignissim, cursus erat ultricies tellus. Nulla tempus sollicitudin mauris cursus dictum. Etiam id diam diam.</div>
											 <div class="img"><img src="../themes/sp_market/img/cms/testimonials.jpg" alt="#"></div>
											 <div class="name">Aliquam Tellus</div>
											 <div class="job">Vitae Ornare Mauris</div>
										 </div>
									 </div>
								 </div>
							 </div>
							 <div class="owl-controls">
								 <div class="owl-nav">
									 <div class="owl-prev" style="">prev</div>
									 <div class="owl-next" style="">next</div>
								 </div>
								 <div class="owl-dots" style="display: none;">
								 </div>
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
			<div id="center_column" class="column col-sm-8 col-md-9 col-lg-9">
		<!-- Subcategories -->
        @if(isset($articulos))
          @if(count($articulos) == 0)
            <p class="alert alert-warning">No hay productos de esta categoria en este momento.</p>
          @else
  					<div class="content_sortPagiBar_top">
  				    <div class="category-view-type hidden-xs">
                <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Ver cuadricula"></a>
                </div>
                <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="Ver lista"></a>
                </div>
              </div>
              <form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" class="productsSortForm ">

								<div class="select selector1">
              		<label for="selectProductSort">Ordenar</label>
              		<select id="selectProductSort" class="selectProductSort form-control">
              			<option value="name:asc" >Nombre del producto: A a Z</option>
              			<option value="name:desc" >Nombre del producto: Z a A</option>
              			<option value="price:asc" >Precio mas bajo</option>
              			<option value="price:desc" >Precio mas alto</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              			<option value="quantity:desc" >Productos en existencia</option>
              			<option value="reference:asc" >Referencia mas baja</option>
              			<option value="reference:desc" >Referencia mas alta</option>
              		</select>
              	</div>
              </form>
  <!-- /Sort products -->

	<!-- Pagination -->
		          <div id="pagination" class="pagination clearfix">
					      <ul class="pagination">
                  {!!$articulos->render()!!}
								</ul>
              </div>
    	<!-- /Pagination -->
            </div>
            <div class="content_product_list hide-productdes hide-coloroption hide-stockinfo" data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
	<!-- Products list -->
	            <ul class="product_list row grid">
                @foreach($articulos as $articulo)
              		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
              			<div class="product-container" itemscope itemtype="http://schema.org/Product">
              				<div class="left-block">
                        <div class="product-image-container">
              						<!--   Slider Images Product   -->
              						<div id="imagenArticulo{{$articulo->id}}" class="product-image">
            						  </div>
                          <div class="label-box">
														<?php
															$date1 = $articulo->created_at;
															$date2 = new DateTime("now");
															$diff = $date1->diff($date2);
															if($diff->days < 31){echo '<span class="new-box">NUEVO</span>';}
														?>
                            <div id="campoEtiqueta{{$articulo->id}}" style="display:none">
															<span id="etiqueta{{$articulo->id}}" class="sale-box"></span>
														</div>
													</div>


                          <a class="quick-view" href="../verArticulo/{{$articulo->id}}" data-rel="../verArticulo/{{$articulo->id}}">Vista rápida
							            </a>
                        </div>
                      </div>
                      <div class="right-block">
					<!--  Show Product title  -->
                      <h4 itemprop="name" class="product-name">
												<a href="../Detalles/{{$articulo->id}}" itemprop="url" >
                          {{$articulo->nombre}}
						            </a>
                      </h4>
                      <h5 itemprop="marca" class="product-name">
												<b>Marca: {{$articulo->marca}}
							          </b>
						          </h5>
            					<!--   Show category description   -->
            					<p class="product-desc" itemprop="description">
            						{{$articulo->descripcion}}
            					</p>
							        <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		                    <div id="star{{$articulo->id}}" class="star_content">
                    		</div>
                    	</div>
					<!--Product Prices-->
										  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-box">
												<span id="precio{{$articulo->id}}" itemprop="price" class="price product-price">${{$articulo->precio}}</span>
												<span id="precioOriginal{{$articulo->id}}" class="old-price product-price"></span>
                      </div>


					<!--    Show stock information    -->
                      <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
												<span class="available-now">
                          <i class="fa fa-check">-</i>
											    <link itemprop="availability" href="http://schema.org/InStock" />In stock</span>
											</div>
                          <div class="button-container">
                            <a onclick="addCompra({{$articulo->id}})" class="cart_button ajax_add_to_cart_button" href="javascript:void(0)">
											                   Carro
                                       </a>
                            <a onclick="addDeseo({{$articulo->id}})" class="addToWishlist" title="Añadir a la lista de deseos" href="javascript:void(0)"  >
                              <i class="fa fa-heart"></i>
                            </a>
                          </div>
				            </div>
                  </div><!-- .product-container> -->
                </li>
                @endforeach
              </ul>
            </div>
			      <div class="content_sortPagiBar_bottom">
				      <div class="category-view-type hidden-xs">
                <div id="grid" class="category-view-type-selector"><a rel="nofollow" href="#" title="Grid"></a>
                </div>
                <div id="list" class="category-view-type-selector"><a rel="nofollow" href="#" title="List"></a>
                </div>
              </div>
              <form id="productsSortForm" action="http://prestashop.flytheme.net/sp_market/es/153-healthy-beauty" class="productsSortForm ">

              	<div class="select selector1">
              		<label for="selectProductSort">Ordenar</label>
              		<select id="selectProductSort" class="selectProductSort form-control">
              			<option value="name:asc" >Nombre del producto: A a Z</option>
              			<option value="name:desc" >Nombre del producto: Z a A</option>
              							<option value="price:asc" >Precio mas bajo</option>
              				<option value="price:desc" >Precio mas alto</option>
              						<!--<option value="position:asc" selected="selected">Product Sort</option>-->
              							<option value="quantity:desc" >Productos en existencia</option>

              			<option value="reference:asc" >Referencia mas baja</option>
              			<option value="reference:desc" >Referencia mas alta</option>
              		</select>
              	</div>
              </form>
<!-- /Sort products -->
	<!-- Pagination -->
		          <div id="pagination_bottom" class="pagination clearfix">
					      <ul class="pagination">
                  <div id="pagination" class="pagination clearfix">
    					      <ul class="pagination">
                      {!!$articulos->render()!!}
    								</ul>
                  </div>
								</ul>
              </div>
              @endif
            @endif
			    </div>
        </div><!-- #center_column -->
      </div><!-- .row -->
    </div><!-- #columns -->
  </div><!-- .columns-container -->
</div>



  <div id="msgDeseo" class="fancybox-overlay fancybox-overlay-fixed" style="display:none; width: auto; height: auto;">
    <div class="fancybox-wrap fancybox-desktop fancybox-type-html fancybox-opened" tabindex="-1" style="opacity: 1; overflow: visible; height: auto; width: 384px; position: absolute; top: 286px; left: 400px;">
      <div class="fancybox-skin" style="padding: 0px; width: auto; height: auto;">

        <div class="fancybox-outer"><div class="fancybox-inner" style="overflow: auto; width: 384px; height: auto;">
          <p class="fancybox-error">El producto se ha añadido con éxito a su lista de deseos.</p>
          <a href="{{url('ListaDeseos')}}" class="wishlist_product_view button"> Ver Todo </a>

        </div>
        <a title="Cerrar" class="fancybox-item fancybox-close" onclick="cerrarDeseo()" href="javascript:void(0);"></a>
      </div>
    </div>
  </div>
</div>


<script>
	$(function() {
			var i;
			var precio;
			var precioOriginal;
			JSONArts = eval(<?php echo json_encode($arts);?>);
			JSONArts.forEach(function(currentValue,index,arr) {

				$('#imagenArticulo'+currentValue.id).html('<a href="'+baseDir+'Detalles/'+currentValue.id+'"><img height="170" class="img_1" src="'+baseDir+'imgArticulos/'+currentValue.imagen1+'"  alt="'+currentValue.nombre+'"/></a>');

				i=1;
				for(i; i<=5 ;i++){
					if(i<=currentValue.calificacion){
						$('#star'+currentValue.id).append('<div class="star star_on"></div>');
					}
					else{
						$('#star'+currentValue.id).append('<div class="star"></div>');
					}
				}

				if(currentValue.descuento != ""){
					precioOriginal = currentValue.precio;
					$('#precioOriginal'+currentValue.id).html("$"+precioOriginal);
					precio = precioOriginal-((precioOriginal * currentValue.descuento)/100);
					$('#precio'+currentValue.id).html("$"+precio);
					$('#campoEtiqueta'+currentValue.id).show();
					$('#etiqueta'+currentValue.id).html(currentValue.descuento+"%");
				}
				if(currentValue.cantidad == 0){
					$('#campoEtiqueta'+currentValue.id).show();
					$('#etiqueta'+currentValue.id).html("Agotado!");
				}
			});
	 });

  function addCompra(id){
		var idArticulo = id;
		JSONArts = eval(<?php echo json_encode($arts);?>);
		JSONArts.forEach(function(currentValueArts,index,arr) {
			if(currentValueArts.id == idArticulo){

				if(currentValueArts.cantidad == 0){
					$('.layer_cart_overlay').show();
					$('#layer_cart').show('slow');
					$('#imagenArticulo').html('<img src="http://localhost/TiendaPocket/public/imgArticulos/'+currentValueArts.imagen1+'">');
					$('#nombreArticulo').text(currentValueArts.nombre);
					$('#pro_added_success').removeClass();
					$('#pro_added_success').addClass ("alert alert-warning");
					$('#pro_added_success').html("El articulo estará disponible proximamente!");
					$('#cantidadArticulo').html("");
					$('#carritoButtom').show();
					$('#deseoButtom').hide();
				}
				else{
					var carrito = false;
					var existe = false;
					var cant = 0;

					JSONallCarritos = eval(<?php echo json_encode($allCarritos);?>);
					JSONallCarritos.forEach(function(currentValue1,index,arr) {
						if(currentValue1.id_articulo == idArticulo){
							existe = true;
							if(currentValue1.estado == 1){
								carrito = true;
								cant = currentValue1.cantidad;
							}
						}
					});
					$('.layer_cart_overlay').show();
					$('#layer_cart').show('slow');
					$('#imagenArticulo').html('<img src="http://localhost/TiendaPocket/public/imgArticulos/'+currentValueArts.imagen1+'">');
					$('#nombreArticulo').text(currentValueArts.nombre);

					if(carrito || !existe){
						$.ajax({
							url: baseDir+"Carrito/agregar",
							type: 'GET',
							data: {
								id_articulo: id
							},
							success: function(){
									$('#pro_added_success').removeClass();
									$('#pro_added_success').addClass("alert alert-success");
									$('#pro_added_success').html("Articulo agregado al carrito!");
									if(existe){
										cant += 1;
										$('#cantidadArticulo').html('Tienes <span class="ajax_cart_quantity">'+cant+'</span> unidades en el carrito.');

									}
									else{
										$('#cantidadArticulo').html('Tienes <span class="ajax_cart_quantity">1</span> unidad en el carrito.');
									}
									$('#carritoButtom').show();
									$('#deseoButtom').hide();
							},
							error: function(data){
								alert('Error en la compra!');
							}
						});
					}
					if(!carrito && existe){
						$('#pro_added_success').removeClass();
						$('#pro_added_success').addClass("alert alert-success alert-info");
						$('#pro_added_success').html("El articulo ya se encuentra en la lista de deseos!");
						$('#cantidadArticulo').html('');
						$('#carritoButtom').hide();
						$('#deseoButtom').show();
					}
				}
			}
		});
  }

  function addDeseo(id){
      $.ajax({
        url: baseDir+"Deseo/agregar",
        type: 'GET',
        data: {
          id_articulo: id
        },
        success: function(){
          $('#msgDeseo').fadeIn('slow', function() {
                $.scrollTo(this, 2000);
          });

        },
        error: function(data){
          alert('Error en la compra');
        }
      });
  }

	$(document).on('click', '#layer_cart .cross, #layer_cart .continue, .layer_cart_overlay', function(){
		$('.layer_cart_overlay').hide();
		$('#layer_cart').fadeOut('slow');
	});


  function cerrarDeseo(){
    $('#msgDeseo').fadeOut('slow', function() {
          $.scrollTo(this, 2000);
    });
  }
  </script>


@endsection
