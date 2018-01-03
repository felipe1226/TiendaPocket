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
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									    <li class="depth1"><a href="http://prestashop.flytheme.net/sp_market/es/my-account">
        My account
    </a></li>

    <span class="navigation_page">
        Your personal information
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
        Your personal information
    </h1>




            <p class="info-title">
            Please be sure to update your personal information if it has changed.
        </p>
        <p class="required">
            <sup>*</sup>Required field
        </p>
        <form action="http://prestashop.flytheme.net/sp_market/es/identity" method="post" class="std">
            <fieldset>
                <div class="clearfix">
                    <label>Social title</label>
                    <br />
                                            <div class="radio-inline">
                            <label for="id_gender1" class="top">
                            <input type="radio" name="id_gender" id="id_gender1" value="1"  />
                            Mr.</label>
                        </div>
                                            <div class="radio-inline">
                            <label for="id_gender2" class="top">
                            <input type="radio" name="id_gender" id="id_gender2" value="2" checked="checked" />
                            Mrs.</label>
                        </div>
                                    </div>
                <div class="required form-group">
                    <label for="firstname" class="required">
                        First name
                    </label>
                    <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="Jennifer" />
                </div>
                <div class="required form-group">
                    <label for="lastname" class="required">
                        Last name
                    </label>
                    <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="duque" />
                </div>
                <div class="required form-group">
                    <label for="email" class="required">
                        E-mail address
                    </label>
                    <input class="is_required validate form-control" data-validate="isEmail" type="email" name="email" id="email" value="jennifervdz@hotmail.com" />
                </div>
                <div class="form-group">
                    <label>
                        Date of Birth
                    </label>
                    <div class="row">
                        <div class="col-xs-4">
                            <select name="days" id="days">
                                <option value="">-</option>
                                                                    <option value="1" >1&nbsp;&nbsp;</option>
                                                                    <option value="2" >2&nbsp;&nbsp;</option>
                                                                    <option value="3" >3&nbsp;&nbsp;</option>
                                                                    <option value="4" >4&nbsp;&nbsp;</option>
                                                                    <option value="5" selected="selected">5&nbsp;&nbsp;</option>
                                                                    <option value="6" >6&nbsp;&nbsp;</option>
                                                                    <option value="7" >7&nbsp;&nbsp;</option>
                                                                    <option value="8" >8&nbsp;&nbsp;</option>
                                                                    <option value="9" >9&nbsp;&nbsp;</option>
                                                                    <option value="10" >10&nbsp;&nbsp;</option>
                                                                    <option value="11" >11&nbsp;&nbsp;</option>
                                                                    <option value="12" >12&nbsp;&nbsp;</option>
                                                                    <option value="13" >13&nbsp;&nbsp;</option>
                                                                    <option value="14" >14&nbsp;&nbsp;</option>
                                                                    <option value="15" >15&nbsp;&nbsp;</option>
                                                                    <option value="16" >16&nbsp;&nbsp;</option>
                                                                    <option value="17" >17&nbsp;&nbsp;</option>
                                                                    <option value="18" >18&nbsp;&nbsp;</option>
                                                                    <option value="19" >19&nbsp;&nbsp;</option>
                                                                    <option value="20" >20&nbsp;&nbsp;</option>
                                                                    <option value="21" >21&nbsp;&nbsp;</option>
                                                                    <option value="22" >22&nbsp;&nbsp;</option>
                                                                    <option value="23" >23&nbsp;&nbsp;</option>
                                                                    <option value="24" >24&nbsp;&nbsp;</option>
                                                                    <option value="25" >25&nbsp;&nbsp;</option>
                                                                    <option value="26" >26&nbsp;&nbsp;</option>
                                                                    <option value="27" >27&nbsp;&nbsp;</option>
                                                                    <option value="28" >28&nbsp;&nbsp;</option>
                                                                    <option value="29" >29&nbsp;&nbsp;</option>
                                                                    <option value="30" >30&nbsp;&nbsp;</option>
                                                                    <option value="31" >31&nbsp;&nbsp;</option>
                                                            </select>
                        </div>
                        <div class="col-xs-4">

                            <select id="months" name="months">
                                <option value="">-</option>
                                                                    <option value="1" >January&nbsp;</option>
                                                                    <option value="2" >February&nbsp;</option>
                                                                    <option value="3" >March&nbsp;</option>
                                                                    <option value="4" >April&nbsp;</option>
                                                                    <option value="5" >May&nbsp;</option>
                                                                    <option value="6" >June&nbsp;</option>
                                                                    <option value="7" >July&nbsp;</option>
                                                                    <option value="8" >August&nbsp;</option>
                                                                    <option value="9" >September&nbsp;</option>
                                                                    <option value="10" selected="selected">October&nbsp;</option>
                                                                    <option value="11" >November&nbsp;</option>
                                                                    <option value="12" >December&nbsp;</option>
                                                            </select>
                        </div>
                        <div class="col-xs-4">
                            <select id="years" name="years">
                                <option value="">-</option>
                                                                    <option value="2018" >2018&nbsp;&nbsp;</option>
                                                                    <option value="2017" >2017&nbsp;&nbsp;</option>
                                                                    <option value="2016" >2016&nbsp;&nbsp;</option>
                                                                    <option value="2015" >2015&nbsp;&nbsp;</option>
                                                                    <option value="2014" >2014&nbsp;&nbsp;</option>
                                                                    <option value="2013" >2013&nbsp;&nbsp;</option>
                                                                    <option value="2012" >2012&nbsp;&nbsp;</option>
                                                                    <option value="2011" >2011&nbsp;&nbsp;</option>
                                                                    <option value="2010" >2010&nbsp;&nbsp;</option>
                                                                    <option value="2009" >2009&nbsp;&nbsp;</option>
                                                                    <option value="2008" >2008&nbsp;&nbsp;</option>
                                                                    <option value="2007" >2007&nbsp;&nbsp;</option>
                                                                    <option value="2006" >2006&nbsp;&nbsp;</option>
                                                                    <option value="2005" >2005&nbsp;&nbsp;</option>
                                                                    <option value="2004" >2004&nbsp;&nbsp;</option>
                                                                    <option value="2003" >2003&nbsp;&nbsp;</option>
                                                                    <option value="2002" >2002&nbsp;&nbsp;</option>
                                                                    <option value="2001" >2001&nbsp;&nbsp;</option>
                                                                    <option value="2000" >2000&nbsp;&nbsp;</option>
                                                                    <option value="1999" >1999&nbsp;&nbsp;</option>
                                                                    <option value="1998" >1998&nbsp;&nbsp;</option>
                                                                    <option value="1997" >1997&nbsp;&nbsp;</option>
                                                                    <option value="1996" >1996&nbsp;&nbsp;</option>
                                                                    <option value="1995" >1995&nbsp;&nbsp;</option>
                                                                    <option value="1994" >1994&nbsp;&nbsp;</option>
                                                                    <option value="1993" >1993&nbsp;&nbsp;</option>
                                                                    <option value="1992" >1992&nbsp;&nbsp;</option>
                                                                    <option value="1991" >1991&nbsp;&nbsp;</option>
                                                                    <option value="1990" >1990&nbsp;&nbsp;</option>
                                                                    <option value="1989" >1989&nbsp;&nbsp;</option>
                                                                    <option value="1988" >1988&nbsp;&nbsp;</option>
                                                                    <option value="1987" >1987&nbsp;&nbsp;</option>
                                                                    <option value="1986" >1986&nbsp;&nbsp;</option>
                                                                    <option value="1985" selected="selected">1985&nbsp;&nbsp;</option>
                                                                    <option value="1984" >1984&nbsp;&nbsp;</option>
                                                                    <option value="1983" >1983&nbsp;&nbsp;</option>
                                                                    <option value="1982" >1982&nbsp;&nbsp;</option>
                                                                    <option value="1981" >1981&nbsp;&nbsp;</option>
                                                                    <option value="1980" >1980&nbsp;&nbsp;</option>
                                                                    <option value="1979" >1979&nbsp;&nbsp;</option>
                                                                    <option value="1978" >1978&nbsp;&nbsp;</option>
                                                                    <option value="1977" >1977&nbsp;&nbsp;</option>
                                                                    <option value="1976" >1976&nbsp;&nbsp;</option>
                                                                    <option value="1975" >1975&nbsp;&nbsp;</option>
                                                                    <option value="1974" >1974&nbsp;&nbsp;</option>
                                                                    <option value="1973" >1973&nbsp;&nbsp;</option>
                                                                    <option value="1972" >1972&nbsp;&nbsp;</option>
                                                                    <option value="1971" >1971&nbsp;&nbsp;</option>
                                                                    <option value="1970" >1970&nbsp;&nbsp;</option>
                                                                    <option value="1969" >1969&nbsp;&nbsp;</option>
                                                                    <option value="1968" >1968&nbsp;&nbsp;</option>
                                                                    <option value="1967" >1967&nbsp;&nbsp;</option>
                                                                    <option value="1966" >1966&nbsp;&nbsp;</option>
                                                                    <option value="1965" >1965&nbsp;&nbsp;</option>
                                                                    <option value="1964" >1964&nbsp;&nbsp;</option>
                                                                    <option value="1963" >1963&nbsp;&nbsp;</option>
                                                                    <option value="1962" >1962&nbsp;&nbsp;</option>
                                                                    <option value="1961" >1961&nbsp;&nbsp;</option>
                                                                    <option value="1960" >1960&nbsp;&nbsp;</option>
                                                                    <option value="1959" >1959&nbsp;&nbsp;</option>
                                                                    <option value="1958" >1958&nbsp;&nbsp;</option>
                                                                    <option value="1957" >1957&nbsp;&nbsp;</option>
                                                                    <option value="1956" >1956&nbsp;&nbsp;</option>
                                                                    <option value="1955" >1955&nbsp;&nbsp;</option>
                                                                    <option value="1954" >1954&nbsp;&nbsp;</option>
                                                                    <option value="1953" >1953&nbsp;&nbsp;</option>
                                                                    <option value="1952" >1952&nbsp;&nbsp;</option>
                                                                    <option value="1951" >1951&nbsp;&nbsp;</option>
                                                                    <option value="1950" >1950&nbsp;&nbsp;</option>
                                                                    <option value="1949" >1949&nbsp;&nbsp;</option>
                                                                    <option value="1948" >1948&nbsp;&nbsp;</option>
                                                                    <option value="1947" >1947&nbsp;&nbsp;</option>
                                                                    <option value="1946" >1946&nbsp;&nbsp;</option>
                                                                    <option value="1945" >1945&nbsp;&nbsp;</option>
                                                                    <option value="1944" >1944&nbsp;&nbsp;</option>
                                                                    <option value="1943" >1943&nbsp;&nbsp;</option>
                                                                    <option value="1942" >1942&nbsp;&nbsp;</option>
                                                                    <option value="1941" >1941&nbsp;&nbsp;</option>
                                                                    <option value="1940" >1940&nbsp;&nbsp;</option>
                                                                    <option value="1939" >1939&nbsp;&nbsp;</option>
                                                                    <option value="1938" >1938&nbsp;&nbsp;</option>
                                                                    <option value="1937" >1937&nbsp;&nbsp;</option>
                                                                    <option value="1936" >1936&nbsp;&nbsp;</option>
                                                                    <option value="1935" >1935&nbsp;&nbsp;</option>
                                                                    <option value="1934" >1934&nbsp;&nbsp;</option>
                                                                    <option value="1933" >1933&nbsp;&nbsp;</option>
                                                                    <option value="1932" >1932&nbsp;&nbsp;</option>
                                                                    <option value="1931" >1931&nbsp;&nbsp;</option>
                                                                    <option value="1930" >1930&nbsp;&nbsp;</option>
                                                                    <option value="1929" >1929&nbsp;&nbsp;</option>
                                                                    <option value="1928" >1928&nbsp;&nbsp;</option>
                                                                    <option value="1927" >1927&nbsp;&nbsp;</option>
                                                                    <option value="1926" >1926&nbsp;&nbsp;</option>
                                                                    <option value="1925" >1925&nbsp;&nbsp;</option>
                                                                    <option value="1924" >1924&nbsp;&nbsp;</option>
                                                                    <option value="1923" >1923&nbsp;&nbsp;</option>
                                                                    <option value="1922" >1922&nbsp;&nbsp;</option>
                                                                    <option value="1921" >1921&nbsp;&nbsp;</option>
                                                                    <option value="1920" >1920&nbsp;&nbsp;</option>
                                                                    <option value="1919" >1919&nbsp;&nbsp;</option>
                                                                    <option value="1918" >1918&nbsp;&nbsp;</option>
                                                                    <option value="1917" >1917&nbsp;&nbsp;</option>
                                                                    <option value="1916" >1916&nbsp;&nbsp;</option>
                                                                    <option value="1915" >1915&nbsp;&nbsp;</option>
                                                                    <option value="1914" >1914&nbsp;&nbsp;</option>
                                                                    <option value="1913" >1913&nbsp;&nbsp;</option>
                                                                    <option value="1912" >1912&nbsp;&nbsp;</option>
                                                                    <option value="1911" >1911&nbsp;&nbsp;</option>
                                                                    <option value="1910" >1910&nbsp;&nbsp;</option>
                                                                    <option value="1909" >1909&nbsp;&nbsp;</option>
                                                                    <option value="1908" >1908&nbsp;&nbsp;</option>
                                                                    <option value="1907" >1907&nbsp;&nbsp;</option>
                                                                    <option value="1906" >1906&nbsp;&nbsp;</option>
                                                                    <option value="1905" >1905&nbsp;&nbsp;</option>
                                                                    <option value="1904" >1904&nbsp;&nbsp;</option>
                                                                    <option value="1903" >1903&nbsp;&nbsp;</option>
                                                                    <option value="1902" >1902&nbsp;&nbsp;</option>
                                                                    <option value="1901" >1901&nbsp;&nbsp;</option>
                                                                    <option value="1900" >1900&nbsp;&nbsp;</option>
                                                            </select>
                        </div>
                    </div>
                </div>
                <div class="required form-group">
                    <label for="old_passwd" class="required">
                        Current Password
                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="old_passwd" id="old_passwd" />
                </div>
                <div class="password form-group">
                    <label for="passwd">
                        New Password
                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="passwd" id="passwd" />
                </div>
                <div class="password form-group">
                    <label for="confirmation">
                        Confirmation
                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="confirmation" id="confirmation" />
                </div>
                                    <div class="checkbox">
                        <label for="newsletter">
                            <input type="checkbox" id="newsletter" name="newsletter" value="1" />
                            Sign up for our newsletter!
                                                    </label>
                    </div>
                                                    <div class="checkbox">
                        <label for="optin">
                            <input type="checkbox" name="optin" id="optin" value="1" />
                            Receive special offers from our partners!
                                                    </label>
                    </div>

		                <div class="form-group">
                    <button type="submit" name="submitIdentity" class="btn btn-default button button-medium">
                        <span>Save<i class="fa fa-chevron-right right"></i></span>
                    </button>
                </div>
            </fieldset>
        </form> <!-- .std -->
    </div>
<ul class="footer_links clearfix">
	<li>
        <a class="btn btn-default button button-small" href="{{url('Cuenta')}}">
            <span>
                <i class="fa fa-chevron-left left"></i>Back to your account
            </span>
        </a>
    </li>
	<li>
        <a class="btn btn-default button button-small" href="{{url('Tienda')}}">
            <span>
                <i class="fa fa-chevron-left left"></i>Home
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
