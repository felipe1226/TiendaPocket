@extends('Tienda.Layout.app')
@section('content')




<!-- Breadcrumb Column -->
<div class="breadcrumb-container">
	<div class="container">

		<!-- Breadcrumb -->
		<div class="breadcrumb clearfix">
			<ul>
				<li class="home"><a href="http://prestashop.flytheme.net/sp_market/" title="Return to Home">Inicio</a></li>
				<li class="depth1"><a href="{{url('Carrito')}}">Carrito</a></li>
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




		<h1 class="page-heading">Please choose your payment method
					<span class="heading-counter">Your shopping cart contains:
				<span id="summary_products_quantity">1 product</span>
			</span>
			</h1>
			<ul class="step clearfix" id="order_step">
				<li class="step_done first">
					<a href="{{url('Carrito')}}"><em>01.</em> Resumen</a>
				</li>

				<li class="step_current second">
								<span><em>02.</em> Dirección</span>
						</li>
				<li class="step_todo third">
								<span><em>03.</em> Envio</span>
						</li>
				<li id="step_end" class="step_todo last">
					<span><em>04.</em> Pago</span>
				</li>
			</ul>
<!-- /Steps -->




    <div class="paiement_block">
    <div id="HOOK_TOP_PAYMENT"></div>
                        <div id="order-detail-content" class="table_block table-responsive">
                <table id="cart_summary" class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="cart_product first_item">Product</th>
                        <th class="cart_description item">Description</th>
                                                    <th class="cart_availability item text-center">Availability</th>
                                                <th class="cart_unit item text-right">Unit price</th>
                        <th class="cart_quantity item text-center">Qty</th>
                        <th class="cart_total last_item text-right">Total</th>
                    </tr>
                    </thead>
                    <tfoot>
                                                                        <tr class="cart_total_price">
                                <td colspan="4" class="text-right">Total products</td>
                                <td colspan="2" class="price" id="total_product">$99.00</td>
                            </tr>
                                                                <tr class="cart_total_voucher" style="display:none">
                        <td colspan="4" class="text-right">
                                                                                                Total gift wrapping cost:                                                                                    </td>
                        <td colspan="2" class="price-discount price" id="total_wrapping">
                                                                                                $0.00
                                                                                    </td>
                    </tr>
                                                                        <tr class="cart_total_delivery">
                                <td colspan="4" class="text-right">Total shipping</td>
                                <td colspan="2" class="price" id="total_shipping" >$2.00</td>
                            </tr>
                                                                <tr class="cart_total_voucher" style="display:none">
                        <td colspan="4" class="text-right">
                                                                                                Total vouchers                                                                                    </td>
                        <td colspan="2" class="price-discount price" id="total_discount">
                                                                                                $0.00
                                                                                    </td>
                    </tr>
                                                                    <tr class="cart_total_price">
                            <td colspan="4" class="total_price_container text-right"><span>Total</span></td>
                            <td colspan="2" class="price" id="total_price_container">
                                <span id="total_price" data-selenium-total-price="101">$101.00</span>
                            </td>
                        </tr>
                                        </tfoot>

                    <tbody>


                        <tr id="product_33_204_0_23" class="cart_item address_23 odd">
	<td class="cart_product">
		<a href="http://prestashop.flytheme.net/sp_market/es/toys-hobbies/33-faded-short-sleeves-tshirt.html#/size-s/color-orange"><img src="http://prestashop.flytheme.net/sp_market/166-small_default/faded-short-sleeves-tshirt.jpg" alt="Sapien fermen" width="110" height="110"  /></a>
	</td>
	<td class="cart_description">
						<h5 class="product-name"><a href="http://prestashop.flytheme.net/sp_market/es/toys-hobbies/33-faded-short-sleeves-tshirt.html#/size-s/color-orange">Sapien fermen</a></h5>
			<small class="cart_ref">SKU : demo_33</small>		<small><a href="http://prestashop.flytheme.net/sp_market/es/toys-hobbies/33-faded-short-sleeves-tshirt.html#/size-s/color-orange">Size : S, Color : Orange</a></small>	</td>
			<td class="cart_avail"><span class="label label-success">In stock</span></td>
		<td class="cart_unit" data-title="Unit price">
		<ul class="price text-right" id="product_price_33_204_23">
			            	               	 	<li class="price">$99.00</li>
													</ul>
	</td>

	<td class="cart_quantity text-center" data-title="Quantity">
					<span>
									1
							</span>
			</td>

		<td class="cart_total" data-title="Total">
		<span class="price" id="total_product_price_33_204_23">
												$99.00									</span>
	</td>

</tr>



                                                                                                        </tbody>

                                    </table>
            </div> <!-- end order-detail-content -->
                        <div id="HOOK_PAYMENT">
            <div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="http://prestashop.flytheme.net/sp_market/es/module/bankwire/payment" title="Pago por transferencia bancaria">
				Pago por transferencia bancaria <span>(el procesamiento del pedido tomará más tiempo)</span>
			</a>
		</p>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="http://prestashop.flytheme.net/sp_market/es/module/cheque/payment" title="Pagar por cheque">
                Pagar por cheque <span>(el procesamiento del pedido tomará más tiempo)</span>
            </a>
        </p>
    </div>
</div>

        </div>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="tendenciastulua@gmail.com">
					<input type="hidden" name="lc" value="CO">
					<input type="hidden" name="item_name" value="Carrito de compras">
					<input type="hidden" name="item_number" value="CAR001">
					<input type="hidden" name="button_subtype" value="services">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
				</form>

                    <p class="cart_navigation clearfix">
        <a href="http://prestashop.flytheme.net/sp_market/es/order?step=2" title="Previous" class="button-exclusive btn btn-default">
            <i class="fa fa-chevron-left left"></i>
            Continue shopping
        </a>
    </p>
    </div> <!-- end HOOK_TOP_PAYMENT -->

					</div><!-- #center_column -->
					</div><!-- .row -->
				</div><!-- #columns -->



			</div><!-- .columns-container -->
@endsection
