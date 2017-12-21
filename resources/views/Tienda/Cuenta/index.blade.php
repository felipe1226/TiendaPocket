@extends('Tienda.Layout.app')
@section('content')


			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									My account
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

<h1 class="page-heading">My account</h1>
<p class="info-account">Welcome to your account. Here you can manage all of your personal information and orders.</p>
<div class="row addresses-lists">
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<ul class="myaccount-link-list">
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/address" title="Add my first address"><i class="fa fa-building"></i><span>Add my first address</span></a></li>
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/order-history" title="Orders"><i class="fa fa-list-ol"></i><span>Order history and details</span></a></li>
                        <li><a href="http://prestashop.flytheme.net/sp_market/es/credit-slip" title="Credit slips"><i class="fa fa-file-o"></i><span>My credit slips</span></a></li>
            <li><a href="http://prestashop.flytheme.net/sp_market/es/addresses" title="Addresses"><i class="fa fa-building"></i><span>My addresses</span></a></li>
            <li><a href="http://prestashop.flytheme.net/sp_market/es/identity" title="Information"><i class="fa fa-user"></i><span>My personal information</span></a></li>
        </ul>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
        <ul class="myaccount-link-list">

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="http://prestashop.flytheme.net/sp_market/es/module/blockwishlist/mywishlist" title="Mi lista de regalos">
		<i class="fa fa-heart"></i>
		<span>Mi lista de regalos</span>
	</a>
</li>
<!-- END : MODULE WishList -->
        </ul>
    </div>
</div>
<ul class="footer_links clearfix">
<li><a class="btn btn-default button button-small" href="http://prestashop.flytheme.net/sp_market/" title="Home"><span><i class="fa fa-chevron-left left"></i> Home</span></a></li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->

							@endsection
