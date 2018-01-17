@extends('Tienda.Layout.app')
@section('content')

	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12  col-xs-12">
					<div class="box-tags hidden-xs clearfix">

<!-- SP Custom Html -->
						<div class="sp_customhtml_1_15062136711651002266spcustom_html"><br>
						</div>
						<div class="box-slider" align="center">
								<!-- Module SpHomeSlider -->
    					<div id="sphomepage-slider1" class="sphomepage-slider ">
							<!--  <div class="sp-homeslider extraslider-inner-1" data-effect="">  -->
			 					<div class="sp-homeslider sphomeslider-inner-1">
									<div class="item ">
										<a href="#" title="1">
											<img class="responsive" src="http://localhost/TiendaPocket/public/modules/sphomeslider/images/sample-1.jpg"  alt="sample-1" />
										</a>
									</div>
									<div class="item " align="center">
										<a href="#" title="2">
											<img class="responsive" src="http://localhost/TiendaPocket/public/modules/sphomeslider/images/sample-2.jpg"  alt="sample-2" />
										</a>
									</div>
									<div class="item ">
										<a href="#" title="3">
											<img class="responsive" src="http://localhost/TiendaPocket/public/modules/sphomeslider/images/sample-3.jpg"  alt="sample-3" />
										</a>
									</div>
								</div>
							</div>
				<script type="text/javascript">
				$(".sphomeslider-inner-1").owlCarousel({
						animateOut: 'fadeOut',
						animateIn: 'fadeIn',
						autoplay: true,
						autoplayTimeout: 5000,
						autoplaySpeed: 2000,
						smartSpeed: 500,
						autoplayHoverPause: true,
						startPosition: 0,
						mouseDrag: true,
						touchDrag: true,
						pullDrag: true,
						dots: 0,
						autoWidth: false,
						dotClass: "owl-dot",
						dotsClass: "owl-dots",
						nav: true,
						loop: true,
						navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
						navClass: ["owl-prev", "owl-next"],
						responsive:{
							0:{
							  items:1 // In this configuration 1 is enabled from 0px up to 479px screen size
							},
						}
				});
		</script>

	<!-- /Module SpHomeSlider -->

						</div>
						<div class="box-banner">

<!-- SP Custom Html -->
							<div class="sp_customhtml_2_15062136711798665534spcustom_html">
								<div class="banner">
									<div class="box-slider">
											<!-- Module SpHomeSlider -->
			    					<div id="sphomepage-slider1" class="sphomepage-slider ">
										<!--  <div class="sp-homeslider extraslider-inner-1" data-effect="">  -->
						 					<div class="sp-homeslider sphomeslider-inner-2">
												<div class="item ">
													<a href="#" title="1">
														<img class="responsive" src="http://localhost/TiendaPocket/public/themes/sp_market/img/cms/banner01.jpg"  alt="sample-1" />
													</a>
												</div>
												<div class="item">
													<a href="#" title="2">
														<img class="responsive" src="http://localhost/TiendaPocket/public/themes/sp_market/img/cms/banner02.jpg"  alt="sample-2" />
													</a>
												</div>
												<div class="item ">
													<a href="#" title="3">
														<img class="responsive" src="http://localhost/TiendaPocket/public/themes/sp_market/img/cms/banner03.jpg"  alt="sample-3" />
													</a>
												</div>
											</div>
										</div>
							<script type="text/javascript">
							$(".sphomeslider-inner-2").owlCarousel({
									animateOut: 'fadeOut',
									animateIn: 'fadeIn',
									autoplay: true,
									autoplayTimeout: 5000,
									autoplaySpeed: 2000,
									smartSpeed: 500,
									autoplayHoverPause: true,
									startPosition: 0,
									mouseDrag: true,
									touchDrag: true,
									pullDrag: true,
									dots: 0,
									autoWidth: false,
									dotClass: "owl-dot",
									dotsClass: "owl-dots",
									nav: true,
									loop: true,
									navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
									navClass: ["owl-prev", "owl-next"],
									responsive:{
										0:{
										  items:1 // In this configuration 1 is enabled from 0px up to 479px screen size
										},
									}
							});
					</script>

				<!-- /Module SpHomeSlider -->

									</div>
									<a href="#" class="img img2">
										<img src="http://localhost/TiendaPocket/public/themes/sp_market/img/cms/banner02.jpg" alt="#" />
									</a>
									<a href="#" class="img img3">
										<img src="http://localhost/TiendaPocket/public/themes/sp_market/img/cms/banner03.jpg" alt="#" />
									</a>
								</div>
							</div>
    <!-- /SP Custom Html -->
						</div>
						<div class="box-promotion hidden-xs clearfix">

<!-- SP Custom Html -->
							<div class="sp_customhtml_3_1506213671965279715spcustom_html">
								<div class="promotion">
									<div class="item item1">
										<div class="icon">Icon</div>
										<div class="text">
											<h2><a href="#">90 DAY MONEYBACK</a></h2>
										</div>
									</div>
									<div class="item item2">
										<div class="icon">Icon</div>
										<div class="text">
											<h2><a href="#">FREE SHIPPING ON ALL ORDER</a></h2>
										</div>
									</div>
									<div class="item item3">
										<div class="icon">Icon</div>
										<div class="text">
											<h2><a href="#">LOWEST PRICE GUARANTEE</a></h2>
										</div>
									</div>
									<div class="item item4">
										<div class="icon">Icon</div>
										<div class="text">
											<h2><a href="#">SAFE SHOPPING GUARANTEE</a></h2>
										</div>
									</div>
								</div>
							</div>
    <!-- /SP Custom Html -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function ($) {
        ;
        (function (element) {
            var $element = $(element),
                    $tab = $(".ltabs-tab", $element),
                    $tab_label = $(".ltabs-tab-label", $tab),
                    $tabs = $(".ltabs-tabs", $element),
                    ajax_url = baseDir + "modules/splistingtabs/splistingtabs_ajax.php",
                    effect = $tabs.parents(".ltabs-tabs-container").attr("data-effec"),
                    delay = $tabs.parents(".ltabs-tabs-container").attr("data-delay"),
                    duration = $tabs.parents(".ltabs-tabs-container").attr("data-duration"),
                    rl_moduleid = $tabs.parents(".ltabs-tabs-container").attr("data-modid"),
					hook_name = $tabs.parents(".ltabs-tabs-container").attr("data-hookname"),
                    $items_content = $(".ltabs-items", $element),
                    $items_inner = $(".ltabs-items-inner", $items_content),
                    $items_first_active = $(".ltabs-items-selected", $element),
                    $load_more = $(".ltabs-loadmore", $element),
                    $btn_loadmore = $(".ltabs-loadmore-btn", $load_more),
                    $select_box = $(".ltabs-selectbox", $element),
                    $tab_label_select = $(".ltabs-tab-selected", $element);

            enableSelectBoxes();
            function enableSelectBoxes() {
                $tab_wrap = $(".ltabs-tabs-wrap", $element),
                        $tab_label_select.html($(".ltabs-tab", $element).filter(".tab-sel").children(".ltabs-tab-label").html());
                if ($(window).innerWidth() <= 767) {
                    $tab_wrap.addClass("ltabs-selectbox");
                } else {
                    $tab_wrap.removeClass("ltabs-selectbox");
                }
            }

            $("span.ltabs-tab-selected, span.ltabs-tab-arrow", $element).click(function () {
                if ($(".ltabs-tabs", $element).hasClass("ltabs-open")) {
                    $(".ltabs-tabs", $element).removeClass("ltabs-open");
                } else {
                    $(".ltabs-tabs", $element).addClass("ltabs-open");
                }
            });

            $(window).resize(function () {
                if ($(window).innerWidth() <= 767) {
                    $(".ltabs-tabs-wrap", $element).addClass("ltabs-selectbox");
                } else {
                    $(".ltabs-tabs-wrap", $element).removeClass("ltabs-selectbox");
                }
            });

            function showAnimateItems(el) {
                var $_items = $(".new-ltabs-item", el), nub = 0;
                $(".ltabs-loadmore-btn", el).fadeOut("fast");
                $_items.each(function (i) {
                    nub++;
                    switch (effect) {
                        case "none" :

                            $(this).css({"opacity": "1", "filter": "alpha(opacity = 100)"});
                            break;

                        default:
                            animatesItems($(this), nub * delay, i, el);
                    }
                    if (i == $_items.length - 1) {
                        $(".ltabs-loadmore-btn", el).fadeIn(delay);
                    }
                    $(this).removeClass("new-ltabs-item");
                });
            }

            function animatesItems($this, fdelay, i, el) {
                var $_items = $(".ltabs-item", el);
                $this.attr("style",
                        "-webkit-animation:" + effect + " " + duration + "ms;"
                        + "-moz-animation:" + effect + " " + duration + "ms;"
                        + "-o-animation:" + effect + " " + duration + "ms;"
                        + "-moz-animation-delay:" + fdelay + "ms;"
                        + "-webkit-animation-delay:" + fdelay + "ms;"
                        + "-o-animation-delay:" + fdelay + "ms;"
                        + "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                            opacity: 1,
                            filter: "alpha(opacity = 100)"
                        }, {
                            delay: 0
                        });
                if (i == ($_items.length - 1)) {
                    $(".ltabs-items-inner").addClass("play");
                }
            }

            showAnimateItems($items_first_active);
            $tab.on("click.tab", function () {
                var $this = $(this);
                if ($this.hasClass("tab-sel")) return false;
                if ($this.parents(".ltabs-tabs").hasClass("ltabs-open")) {
                    $this.parents(".ltabs-tabs").removeClass("ltabs-open");
                }
                $tab.removeClass("tab-sel");
                $this.addClass("tab-sel");
                var items_active = $this.attr("data-active-content");
                var _items_active = $(items_active, $element);

                $items_content.removeClass("ltabs-items-selected");
                _items_active.addClass("ltabs-items-selected");
                $tab_label_select.html($tab.filter(".tab-sel").children(".ltabs-tab-label").html());
                var $loading = $(".ltabs-loading", _items_active);
                var loaded = _items_active.hasClass("ltabs-items-loaded");
                if (!loaded && !_items_active.hasClass("ltabs-process")) {
                    _items_active.addClass("ltabs-process");
                    var category_id = $this.attr("data-category-id");
                    $loading.show();
                    $.ajax({
                        type: "POST",
                        url: ajax_url,
                        data: {
                            listing_tabs_moduleid: rl_moduleid,
                            is_ajax_listing_tabs: 1,
                            ajax_reslisting_start: 0,
                            categoryid: category_id,
                            hook_name: hook_name
                        },
                        success: function (data) {
                            if (data.items_markup != "") {
                                $(".ltabs-items-inner", _items_active).html(data.items_markup);
                                _items_active.addClass("ltabs-items-loaded").removeClass("ltabs-process");
                                $loading.remove();
                                showAnimateItems(_items_active);
                                updateStatus(_items_active);
								$('.wishlist_button_list').each(function() {
									current = $(this).parent('.button-container');
										$(this).popover({
											html: true,
											content: function () {
											return current.children('.popover-content').html();
										}
									});
								});
                                                                CreateProSlider($(".ltabs-items-inner", _items_active));
                                                            }
                        },
                        dataType: "json"
                    });
                } else {

                                        var owl = $(".ltabs-items-inner", _items_active);
                    owl = owl.data("owlCarousel");
                    if (typeof owl === "undefined") {
                    } else {
                        owl.onResize();
                    }
                                    }
            });

            function updateStatus($el) {
                $(".ltabs-loadmore-btn", $el).removeClass("loading");
                var countitem = $(".ltabs-item", $el).length;

                $(".ltabs-image-loading", $el).css({display: "none"});

                $(".ltabs-loadmore-btn", $el).parent().attr("data-rl_start", countitem);
                var rl_total = $(".ltabs-loadmore-btn", $el).parent().attr("data-rl_total");
                var rl_load = $(".ltabs-loadmore-btn", $el).parent().attr("data-rl_load");
                var rl_allready = $(".ltabs-loadmore-btn", $el).parent().attr("data-rl_allready");

                if (countitem >= rl_total) {
                    $(".ltabs-loadmore-btn", $el).addClass("loaded");

                    $(".ltabs-image-loading", $el).css({display: "none"});

                    $(".ltabs-loadmore-btn", $el).attr("data-label", rl_allready);
                    $(".ltabs-loadmore-btn", $el).removeClass("loading");
                }
            }

            $btn_loadmore.on("click.loadmore", function () {
                var $this = $(this);
                if ($this.hasClass("loaded") || $this.hasClass("loading")) {
                    return false;
                } else {
                    $this.addClass("loading");

                    $(".ltabs-image-loading", $this).css({display: "inline-block"});

                    var rl_start = $this.parent().attr("data-rl_start"),
                            rl_moduleid = $this.parent().attr("data-modid"),
							lt_hook_name = $this.parent().attr("data-hookname"),
                            rl_ajaxurl = baseDir + "modules/splistingtabs/splistingtabs_ajax.php",
                            effect = $this.parent().attr("data-effect"),
                            category_id = $this.parent().attr("data-categoryid"),
                            items_active = $this.parent().attr("data-active-content");
                    var _items_active = $(items_active, $element);

                    $.ajax({
                        type: "POST",
                        url: rl_ajaxurl,
                        data: {
                            listing_tabs_moduleid: rl_moduleid,
                            is_ajax_listing_tabs: 1,
                            ajax_reslisting_start: rl_start,
                            categoryid: category_id,
							hook_name: lt_hook_name
                        },
                        success: function (data) {
                            if (data.items_markup != "") {
                                $(data.items_markup).insertAfter($(".ltabs-item", _items_active).nextAll().last());

                                $(".ltabs-image-loading", $this).css({display: "none"});

                                showAnimateItems(_items_active);
                                updateStatus(_items_active);
                            }
                        }, dataType: "json"
                    });
                }
                return false;
            });


            if ($(".ltabs-items-inner", $element).parent().hasClass("ltabs-items-selected")) {
                var items_active = $(".ltabs-tab.tab-sel", $element).attr("data-active-content");
                var _items_active = $(items_active, $element);
                CreateProSlider($(".ltabs-items-inner", _items_active));
            }

            function CreateProSlider($items_inner) {
                $items_inner.owlCarousel({
                    center: false,
                    nav: true,
                    loop: false,
                    margin: 30,
                    slideBy: 1,
                    autoplay: false,
                    autoplayHoverPause: true,
                    autoplayTimeout: 100,
                    autoplaySpeed: 100,
                    navSpeed: 100,
                    smartSpeed: 100,
                    startPosition: 0,
                    mouseDrag: true,
                    touchDrag:true,
                    pullDrag:true,
                    dots: false,
                    autoWidth: false,
                    navClass: ["owl-prev", "owl-next"],
                    navText: ["&#139;", "&#155;"],

                    responsive: {
						0: { items: 1 },
                        480: { items:2 },
                        768: {items:3},
                        992: {items:4},
                        1200: {items: 4}
                    }
                });
            }

        })("#sp_listing_tabs_4_15062136712041593853");
    });
    //]]>
</script>

            </div>
		</div>
	</div>

			<div class="content_product_list hide-productdes hide-coloroption hide-stockinfo   "  data-class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">

	<!-- Products list -->
	<ul class="product_list row grid">
		<li class="ajax_block_product  col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">

					<div class="product-image-container">
						<!--   Slider Images Product   -->

						<div class="product-image">
																					<a href="electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" itemprop="url" >
									<img class="img_1" src="../6-home_default/faded-short-sleeves-tshirt.jpg"  alt="Aliquam Leberkas"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

					  </div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="electronics/1-faded-short-sleeves-tshirt.html" title="Vista r&aacute;pida" data-rel="http://prestashop.flytheme.net/sp_market/es/electronics/1-faded-short-sleeves-tshirt.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="electronics/1-faded-short-sleeves-tshirt.html" title="Aliquam Leberkas" itemprop="url" >
							Aliquam Leberkas
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Sausage pancetta frankfurter biltong meatloaf andouille flank porchetta fatback tongue cupim beef leberkas. Picanha andouille shoulder tenderloin prosciutto kevin. Tongue fatback shoulder pork belly, chuck boudin short loin bresaola porchetta biltong. Pancetta ball tip t-bone ham bacon filet mignon
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="electronics/1-faded-short-sleeves-tshirt.html#/size-s/color-orange" id="color_1" class="color_pick" style="background:#F39C11;">
									</a>
			</li>
											<li>
				<a href="electronics/1-faded-short-sleeves-tshirt.html#/size-s/color-blue" id="color_2" class="color_pick" style="background:#5D9CEC;">
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

																																		<a class="cart_button ajax_add_to_cart_button" href="order7a0f.html?add=1&amp;id_product=1&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="1">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_1" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="electronics/1-faded-short-sleeves-tshirt.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="1">
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
																					<a href="electronics/3-printed-dress.html" title="Maecenas Sirloin" itemprop="url" >
									<img class="img_1" src="../16-home_default/printed-dress.jpg"  alt="Maecenas Sirloin"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

					  </div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="electronics/3-printed-dress.html" title="Vista r&aacute;pida" data-rel="electronics/3-printed-dress.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="electronics/3-printed-dress.html" title="Maecenas Sirloin" itemprop="url" >
							Maecenas Sirloin
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Filet mignon corned beef laboris ipsum porchetta beef irure dolor fatback. Pariatur cupim occaecat short ribs consectetur, venison ipsum flank hamburger bacon tri-tip. Eu duis est cupidatat prosciutto alcatra, consectetur aute velit shoulder shankle ham hock in. Cillum deserunt velit dolor, beef
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="electronics/3-printed-dress.html#/size-s/color-orange" id="color_13" class="color_pick" style="background:#F39C11;">
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
								$26.00							</span>
							<meta itemprop="priceCurrency" content="USD" />


				  </div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="order8aa3.html?add=1&amp;id_product=3&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="3">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_3" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="electronics/3-printed-dress.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="3">
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
																					<a href="electronics/4-printed-dress.html" title="Nulla tenderloin" itemprop="url" >
									<img class="img_1" src="../21-home_default/printed-dress.jpg"  alt="Nulla tenderloin"/>
																	</a>


						</div>

						<div class="label-box">
															<span class="new-box">Nuevo</span>

					  </div>

						 							<!--   Enable quick view  -->
							<a class="quick-view" href="electronics/4-printed-dress.html" title="Vista r&aacute;pida" data-rel="electronics/4-printed-dress.html">
								Vista r&aacute;pida
							</a>



					</div>


				</div>

				<div class="right-block">
					<!--  Show Product title  -->
					<h5 itemprop="name" class="product-name">
												<a href="electronics/4-printed-dress.html" title="Nulla tenderloin" itemprop="url" >
							Nulla tenderloin
						</a>
					</h5>

					<!--   Show category description   -->
					<p class="product-desc" itemprop="description">
						Salami ball tip dolore ullamco boudin. Labore anim magna, frankfurter capicola enim filet mignon aliquip beef ribs. Qui tri-tip veniam irure. Minim enim incididunt t-bone fatback tail bacon sunt sausage chicken ex consequat. Bresaola cupidatat dolore aliquip nulla incididunt.
					</p>


					<!--   Show Color Options   -->
											<div class="color-list-container"><ul class="color_to_pick_list clearfix">
									<li>
				<a href="electronics/4-printed-dress.html#/size-s/color-beige" id="color_16" class="color_pick" style="background:#f5f5dc;">
									</a>
			</li>
											<li>
				<a href="electronics/4-printed-dress.html#/size-s/color-pink" id="color_43" class="color_pick" style="background:#FCCACD;">
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
								$50.99							</span>
							<meta itemprop="priceCurrency" content="USD" />


				  </div>


					<!--    Show stock information    -->

																				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																			<span class="available-now">
											<i class="fa fa-check"></i>
											<link itemprop="availability" href="http://schema.org/InStock" />In stock										</span>
																	</div>

						<div class="button-container">

																																		<a class="cart_button ajax_add_to_cart_button" href="orderc2ff.html?add=1&amp;id_product=4&amp;token=c4995744c9bff2e8158c3c8bf59fbd5f" rel="nofollow"  title="Carro" data-id-product="4">
											Carro
										</a>


	<a class="addToWishlist wishlistProd_4" title="Añadir a la lista de deseos" href="#"  onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">
		<i class="fa fa-heart"></i>
	</a>



															<a class="add_to_compare" href="electronics/4-printed-dress.html" data-tooltip-remove="Remove from compare"  title="A&ntilde;adir a comparar" data-id-product="4">
									<i class="fa fa-bar-chart"></i></a>
								</a>

						</div>
				</div>



			</div><!-- .product-container> -->

@endsection
