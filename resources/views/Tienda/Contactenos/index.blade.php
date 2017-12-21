@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Home</a></li>
									<b>>  Contactenos</b>
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


	<!--<h1 class="page-heading bottom-indent">
	Contact us</h1>-->


	<div class="contact-form">
					    			<div class="contact-wrap row">
	<div class="gmap col-sm-12">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<div id="map">&nbsp;</div>
		<script type="text/javascript">// <![CDATA[

			  var myOptions = {
				 zoom: 15,
				 scrollwheel: false,
				 center: new google.maps.LatLng(4.075526,-76.19952769999998),
				 mapTypeId: google.maps.MapTypeId.ROADMAP
			  };

			  var map = new google.maps.Map(document.getElementById("map"), myOptions);
		// ]]></script>
	</div>
	<div class="contact-content">
		<div class="contact-info col-md-4 col-sm-7">
			<h2 class="title">Contactenos</h2>
			<p class="pre-text">
				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br>
				Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat sed do eiusmod tempor incididunt ut labore
			</p>
			<div class="info">
				<ul>
					<li class="address">
						<label class="icon"><i class="fa fa-home"></i></label>
						<span>Ranelagh Place, Liverpool, L3 5UL, England</span>
					</li>
					<li class="hotline">
						<label class="icon"><i class="fa fa-phone"></i></label>
						<span>8 (395) 989—20—11</span>
					</li>
					<li class="email">
						<label class="icon"><i class="fa fa-envelope"></i></label>
						<span><a href="#">contact@gmail.com</a></span>
					</li>

				</ul>
			</div>
			<div class="social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
		<div class="contact-form-box col-md-8 col-sm-12">
			@include('flash::message')
			{!!Form::open(array('url'=>'Tienda/Contactenos','method'=>'POST','enctype' => 'multipart/form-data'))!!}
			{{Form::token()}}
			<fieldset>
				<h2 class="title">Envíe sus comentarios</h2>
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<div class="form-group">
							<div class="form-group selector1">
								<label for="titulo">Titulo del Asunto</label>
															<select class="form-control" name="titulo">
																<option value="0">Escoger</option>
																<option value="2">Servicio al Cliente</option>
																<option value="1">Webmaster</option>
															</select>
							</div>
						</div>
												<div class="form-group">
													<label for="email">Correo Electronico</label>
													<input class="form-control grey validate" type="text" name="email" data-validate="isEmail" value="" />
												</div>
												<div class="form-group">
													<div class="form-group selector1">
														<label for="referencia_pedido">Referencia de Pedido</label>
														<input class="form-control grey" type="text" name="referencia_pedido"  value="" />
													</div>
												</div>


					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group" style="margin:0;">
							<label for="mensaje">Mensaje</label>
						</div>
						<textarea class="form-control" name="mensaje"></textarea>
					</div>
				</div>
				<div class="submit">
					<button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium">
						Enviar Correo Electronico </span>
					</button>
				</div>
			</fieldset>
		</div>
</div>


			</div>



					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->

@endsection
