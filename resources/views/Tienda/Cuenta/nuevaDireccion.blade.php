@extends('Tienda.Layout.app')
@section('content')

			<!-- Breadcrumb Column -->
							 <div class="breadcrumb-container">
					<div class="container">

<!-- Breadcrumb -->
<div class="breadcrumb clearfix">
	<ul>
		<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio</a></li>
		<li class="depth1">Nueva Direccion</li>
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
	<h1 class="page-subheading">Your addresses</h1>
	<p class="info-title">
					To add a new address, please fill out the form below.
			</p>



	<form action="http://prestashop.flytheme.net/sp_market/es/address" method="post" class="std" id="add_address">
		<!--h3 class="page-subheading">Your address</h3-->
																														<div class="required form-group">
					<label for="firstname">First name <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isName" type="text" name="firstname" id="firstname" value="Felipe" />
				</div>
																																																			<div class="required form-group">
					<label for="lastname">Last name <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isName" type="text" id="lastname" name="lastname" value="Bedoya" />
				</div>
																																				<div class="form-group">
					<label for="company">Company</label>
					<input class="form-control validate" data-validate="isGenericName" type="text" id="company" name="company" value="" />
				</div>
																																																															<div class="required form-group">
					<label for="address1">Address <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isAddress" type="text" id="address1" name="address1" value="" />
				</div>
																																																			<div class="required form-group">
					<label for="address2">Address (Line 2)</label>
					<input class="validate form-control" data-validate="isAddress" type="text" id="address2" name="address2" value="" />
				</div>
																																																						<div class="required form-group">
					<label for="city">City <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isCityName" type="text" name="city" id="city" value="" maxlength="64" />
				</div>

																																																										<div class="required id_state form-group">
					<label for="id_state">State <sup>*</sup></label>
					<select name="id_state" id="id_state" class="form-control">
						<option value="">-</option>
					</select>
				</div>
																																											<div class="required postcode form-group unvisible">
					<label for="postcode">Zip/Postal Code <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isPostCode" type="text" id="postcode" name="postcode" value="" />
				</div>
																																																						<div class="required form-group">
					<label for="id_country">Country <sup>*</sup></label>
					<select id="id_country" class="form-control" name="id_country"><option value="21" selected="selected">United States</option></select>
				</div>
																																																										<div class="form-group phone-number required">
					<label for="phone">Home phone <sup>*</sup></label>
					<input class="is_required validate form-control" data-validate="isPhoneNumber" type="tel" id="phone" name="phone" value=""  />
				</div>

				<div class="clearfix"></div>
																																																							<div class="required form-group">
					<label for="phone_mobile">Mobile phone <sup>*</sup></label>
					<input class="validate form-control" data-validate="isPhoneNumber" type="tel" id="phone_mobile" name="phone_mobile" value="" />
				</div>
														<div class="required dni form-group unvisible">
				<label for="dni">Identification number <sup>*</sup></label>
				<input class="is_required form-control" data-validate="isDniLite" type="text" name="dni" id="dni" value="" />
				<span class="form_info">DNI / NIF / NIE</span>
			</div>
				<div class="form-group">
			<label for="other">Additional information</label>
			<textarea class="validate form-control" data-validate="isMessage" id="other" name="other" cols="26" rows="3" ></textarea>
		</div>
				<!--			<p class="inline-infos required">You must register at least one phone number.</p>
		-->
		<div class="clearfix"></div>
				<div class="required form-group" id="adress_alias">
			<label for="alias">Please assign an address title for future reference. <sup>*</sup></label>
			<input type="text" id="alias" class="is_required validate form-control" data-validate="isGenericName" name="alias" value="My address" />
		</div>
		<p class="submit2">
			<input type="hidden" name="id_address" value="0" />									<input type="hidden" name="select_address" value="0" />			<input type="hidden" name="token" value="37dab0cd8f57363d790bac16e0dd0e45" />
			<button type="submit" name="submitAddress" id="submitAddress" class="btn btn-default button button-medium">
				<span>
					Save
					<i class="fa fa-chevron-right right"></i>
				</span>
			</button>
		</p>
	</form>
</div>
<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-defaul button button-small" href="http://prestashop.flytheme.net/sp_market/es/addresses">
			<span><i class="fa fa-chevron-left left"></i> Back to your addresses</span>
		</a>
	</li>
</ul>
					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
