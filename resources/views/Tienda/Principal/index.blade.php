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


@endsection
