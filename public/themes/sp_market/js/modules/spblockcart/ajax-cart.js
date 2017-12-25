/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$(document).ready(function(){
	ajaxCart.overrideButtonsInThePage();

	$(document).on('click', '.block_cart_collapse', function(e){
		e.preventDefault();
		ajaxCart.collapse();
	});
	$(document).on('click', '.block_cart_expand', function(e){
		e.preventDefault();
		ajaxCart.expand();
	});

	var cart_qty = 0;
	var current_timestamp = parseInt(new Date().getTime() / 1000);

	if (typeof $('.ajax_cart_quantity').html() == 'undefined' || (typeof generated_date != 'undefined' && generated_date != null && (parseInt(generated_date) + 30) < current_timestamp))
		ajaxCart.refresh();
	else
		cart_qty = parseInt($('.ajax_cart_quantity').html());

	/* roll over cart */
	// var cart_block = new HoverWatcher('#header .cart_block');
	// var shopping_cart = new HoverWatcher('#header .shopping_cart');

	// if ('ontouchstart' in document.documentElement)
	// {
		// $('.shopping_cart > a:first').on('click', function(e){
			// e.preventDefault();
		// });
	// }

	// $(document).on('touchstart', '#header .shopping_cart a:first', function(){
		// if ($(this).next('.cart_block:visible').length)
			// $("#header .cart_block").stop(true, true).slideUp(450);
		// else
			// $("#header .cart_block").stop(true, true).slideDown(450);
		// e.preventDefault();
		// e.stopPropagation();
	// });


	$(document).on('click', '#cart_navigation input', function(e){
		$(this).prop('disabled', 'disabled').addClass('disabled');
		$(this).closest("form").get(0).submit();
	});

	$(document).on('click', '#layer_cart .cross, #layer_cart .continue, .layer_cart_overlay', function(e){
		e.preventDefault();
		$('.layer_cart_overlay').hide();
		$('#layer_cart').fadeOut('fast');
	});

	$('#columns #layer_cart, #columns .layer_cart_overlay').detach().prependTo('#columns');
});


	// try to expand the cart
	expand : function(){
		if ($('.cart_block_list').hasClass('collapsed'))
		{
			$('.cart_block_list.collapsed').slideDown({
				duration: 450,
				complete: function(){
					$(this).addClass('expanded').removeClass('collapsed');
				}
			});

			// save the expand statut in the user cookie
			$.ajax({
				type: 'POST',
				headers: { "cache-control": "no-cache" },
				url: baseDir + 'modules/spblockcart/blockcart-set-collapse.php' + '?rand=' + new Date().getTime(),
				async: true,
				cache: false,
				data: 'ajax_blockcart_display=expand',
				complete: function(){
					$('.block_cart_expand').fadeOut('fast', function(){
						$('.block_cart_collapse').fadeIn('fast');
					});
				}
			});
		}
	},

	// try to collapse the cart
	collapse : function(){
		if ($('.cart_block_list').hasClass('expanded'))
		{
			$('.cart_block_list.expanded').slideUp('slow', function(){
				$(this).addClass('collapsed').removeClass('expanded');
			});

			// save the expand statut in the user cookie
			$.ajax({
				type: 'POST',
				headers: { "cache-control": "no-cache" },
				url: baseDir + 'modules/spblockcart/blockcart-set-collapse.php' + '?rand=' + new Date().getTime(),
				async: true,
				cache: false,
				data: 'ajax_blockcart_display=collapse' + '&rand=' + new Date().getTime(),
				complete: function(){
					$('.block_cart_collapse').fadeOut('fast', function(){
						$('.block_cart_expand').fadeIn('fast');
					});
				}
			});
		}
	},
	// Fix display when using back and previous browsers buttons
	refresh : function(){
		$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			url: baseUri + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,
			dataType : "json",
			data: 'controller=cart&ajax=true&token=' + static_token,
			success: function(jsonData)
			{
				ajaxCart.updateCart(jsonData);
			}
		});
	},

	// Update the cart information
	updateCartInformation : function (jsonData, addedFromProductPage){
		ajaxCart.updateCart(jsonData);
		//reactive the button when adding has finished
		if (addedFromProductPage)
		{
			$('#add_to_cart button').removeProp('disabled').removeClass('disabled');
			if (!jsonData.hasError || jsonData.hasError == false)
				$('#add_to_cart button').addClass('added');
			else
				$('#add_to_cart button').removeClass('added');
		}
		else
			$('.ajax_add_to_cart_button').removeProp('disabled');
	},
	// close fancybox
	updateFancyBox : function (){},
	// add a product in the cart via ajax
	add : function(idProduct, idCombination, addedFromProductPage, callerElement, quantity, whishlist){
		if (addedFromProductPage && !checkCustomizations())
		{
			if (contentOnly)
			{
				var productUrl = window.document.location.href + '';
				var data = productUrl.replace('content_only=1', '');
				window.parent.document.location.href = data;
				return;
			}
			if (!!$.prototype.fancybox)
			    $.fancybox.open([
			        {
			            type: 'inline',
			            autoScale: true,
			            minHeight: 30,
			            content: '<p class="fancybox-error">' + fieldRequired + '</p>'
			        }
			    ], {
			        padding: 0
			    });
			else
			    alert(fieldRequired);
            return;
		}
		emptyCustomizations();
		//disabled the button when adding to not double add if user double click
		if (addedFromProductPage)
		{
			$('#add_to_cart button').prop('disabled', 'disabled').addClass('disabled');
			$('.filled').removeClass('filled');
		}
		else
			$(callerElement).prop('disabled', 'disabled');

		if ($('.cart_block_list').hasClass('collapsed'))
			this.expand();
		//send the ajax request to the server
		$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			url: baseUri + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,
			dataType : "json",
			data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + idProduct + '&token=' + static_token + ( (parseInt(idCombination) && idCombination != null) ? '&ipa=' + parseInt(idCombination): ''),
			success: function(jsonData,textStatus,jqXHR)
			{
				// add appliance to whishlist module
				if (whishlist && !jsonData.errors)
					WishlistAddProductCart(whishlist[0], idProduct, idCombination, whishlist[1]);

				if (!jsonData.hasError)
				{
					if (contentOnly)
						window.parent.ajaxCart.updateCartInformation(jsonData, addedFromProductPage);
					else
						ajaxCart.updateCartInformation(jsonData, addedFromProductPage);

					if (jsonData.crossSelling)
						$('.crossseling').html(jsonData.crossSelling);

					if (idCombination)
						$(jsonData.products).each(function(){
							if (this.id != undefined && this.id == parseInt(idProduct) && this.idCombination == parseInt(idCombination))
								if (contentOnly)
									window.parent.ajaxCart.updateLayer(this);
								else
									ajaxCart.updateLayer(this);
						});
					else
						$(jsonData.products).each(function(){
							if (this.id != undefined && this.id == parseInt(idProduct))
								if (contentOnly)
									window.parent.ajaxCart.updateLayer(this);
								else
									ajaxCart.updateLayer(this);
						});
					if (contentOnly)
						parent.$.fancybox.close();
				}
				else
				{
					if (contentOnly)
						window.parent.ajaxCart.updateCart(jsonData);
					else
						ajaxCart.updateCart(jsonData);
					if (addedFromProductPage)
						$('#add_to_cart button').removeProp('disabled').removeClass('disabled');
					else
						$(callerElement).removeProp('disabled');
				}
				//$('.products').mCustomScrollbar();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown)
			{
				var error = "Impossible to add the product to the cart.<br/>textStatus: '" + textStatus + "'<br/>errorThrown: '" + errorThrown + "'<br/>responseText:<br/>" + XMLHttpRequest.responseText;
				if (!!$.prototype.fancybox)
				    $.fancybox.open([
				    {
				        type: 'inline',
				        autoScale: true,
				        minHeight: 30,
				        content: '<p class="fancybox-error">' + error + '</p>'
				    }],
					{
				        padding: 0
				    });
				else
				    alert(error);
				//reactive the button when adding has finished
				if (addedFromProductPage)
					$('#add_to_cart button').removeProp('disabled').removeClass('disabled');
				else
					$(callerElement).removeProp('disabled');
			}
		});
	},

	//remove a product from the cart via ajax
	remove : function(idProduct, idCombination, customizationId, idAddressDelivery){
		//send the ajax request to the server
		$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			url: baseUri + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,
			dataType : "json",
			data: 'controller=cart&delete=1&id_product=' + idProduct + '&ipa=' + ((idCombination != null && parseInt(idCombination)) ? idCombination : '') + ((customizationId && customizationId != null) ? '&id_customization=' + customizationId : '') + '&id_address_delivery=' + idAddressDelivery + '&token=' + static_token + '&ajax=true',
			success: function(jsonData)	{
				ajaxCart.updateCart(jsonData);
				if ($('body').attr('id') == 'order' || $('body').attr('id') == 'order-opc')
					deleteProductFromSummary(idProduct+'_'+idCombination+'_'+customizationId+'_'+idAddressDelivery);
			},
			error: function()
            {
				var error = 'ERROR: unable to delete the product';
				if (!!$.prototype.fancybox)
				{
				    $.fancybox.open([
				        {
				            type: 'inline',
				            autoScale: true,
				            minHeight: 30,
				            content: error
				        }
				    ], {
				        padding: 0
				    });
				}
				else
				    alert(error);
            }
		});
	},

	//hide the products displayed in the page but no more in the json data
	hideOldProducts : function(jsonData){
		//delete an eventually removed product of the displayed cart (only if cart is not empty!)
		if ($('.cart_block_list:first dl.products').length > 0)
		{
			var removedProductId = null;
			var removedProductData = null;
			var removedProductDomId = null;
			//look for a product to delete...
			$('.cart_block_list:first dl.products dt').each(function(){
				//retrieve idProduct and idCombination from the displayed product in the block cart
				var domIdProduct = $(this).data('id');
				var firstCut = domIdProduct.replace('cart_block_product_', '');
				var ids = firstCut.split('_');

				//try to know if the current product is still in the new list
				var stayInTheCart = false;
				for (aProduct in jsonData.products)
				{
					//we've called the variable aProduct because IE6 bug if this variable is called product
					//if product has attributes
					if (jsonData.products[aProduct]['id'] == ids[0] && (!ids[1] || jsonData.products[aProduct]['idCombination'] == ids[1]))
					{
						stayInTheCart = true;
						// update the product customization display (when the product is still in the cart)
						ajaxCart.hideOldProductCustomizations(jsonData.products[aProduct], domIdProduct);
					}
				}
				//remove product if it's no more in the cart
				if (!stayInTheCart)
				{
					removedProductId = $(this).data('id');
					if (removedProductId != null)
					{
						var firstCut =  removedProductId.replace('cart_block_product_', '');
						var ids = firstCut.split('_');

						$('dt[data-id="' + removedProductId + '"]').addClass('strike').fadeTo('slow', 0, function(){
							$(this).slideUp('slow', function(){
								$(this).remove();
								// If the cart is now empty, show the 'no product in the cart' message and close detail
								if($('.cart_block:first dl.products dt').length == 0)
								{
									$("#header .cart_block").stop(true, true).slideUp(200);
									$('.cart_block_no_products:hidden').slideDown(450);
									$('.cart_block dl.products').addClass('hide');
								}
							});
						});
						$('dd[data-id="cart_block_combination_of_' + ids[0] + (ids[1] ? '_'+ids[1] : '') + (ids[2] ? '_'+ids[2] : '') + '"]').fadeTo('fast', 0, function(){
							$(this).slideUp('fast', function(){
								$(this).remove();
							});
						});
					}
				}
			});
		}
	},



	updateLayer : function(product){
		$('#layer_cart_product_title').text(product.name);
		$('#layer_cart_product_attributes').text('');
		if (product.hasAttributes && product.hasAttributes == true)
			$('#layer_cart_product_attributes').html(product.attributes);
		$('#layer_cart_product_price').text(product.price);
		$('#layer_cart_product_quantity').text(product.quantity);
		$('.layer_cart_img').html('<img class="layer_cart_img img-responsive" src="' + product.image + '" alt="' + product.name + '" title="' + product.name + '" />');

		var n = parseInt($(window).scrollTop() + 20) + 'px';

		$('.layer_cart_overlay').css('width','100%');
		$('.layer_cart_overlay').css('height','100%');
		$('.layer_cart_overlay').show();
		$('#layer_cart').css({'top': n}).fadeIn('fast');
		crossselling_serialScroll();
	},

	//genarally update the display of the cart
	updateCart : function(jsonData){
		//user errors display
		if (jsonData.hasError)
		{
			var errors = '';
			for (error in jsonData.errors)
				//IE6 bug fix
				if (error != 'indexOf')
					errors += $('<div />').html(jsonData.errors[error]).text() + "\n";
			if (!!$.prototype.fancybox)
			    $.fancybox.open([
			        {
			            type: 'inline',
			            autoScale: true,
			            minHeight: 30,
			            content: '<p class="fancybox-error">' + errors + '</p>'
			        }
			    ], {
			        padding: 0
			    });
			else
			    alert(errors);
		}
		else
		{
			ajaxCart.updateCartEverywhere(jsonData);
			ajaxCart.hideOldProducts(jsonData);
			ajaxCart.displayNewProducts(jsonData);
			ajaxCart.refreshVouchers(jsonData);

			//update 'first' and 'last' item classes
			$('.cart_block .products dt').removeClass('first_item').removeClass('last_item').removeClass('item');
			$('.cart_block .products dt:first').addClass('first_item');
			$('.cart_block .products dt:not(:first,:last)').addClass('item');
			$('.cart_block .products dt:last').addClass('last_item');
		}
	},

	//update general cart informations everywhere in the page
	updateCartEverywhere : function(jsonData){
		$('.ajax_cart_total').text($.trim(jsonData.productTotal));

		if (parseFloat(jsonData.shippingCostFloat) > 0)
			$('.ajax_cart_shipping_cost').text(jsonData.shippingCost);
		else if (typeof(freeShippingTranslation) != 'undefined')
				$('.ajax_cart_shipping_cost').html(freeShippingTranslation);

		$('.ajax_cart_tax_cost').text(jsonData.taxCost);
		$('.cart_block_wrapping_cost').text(jsonData.wrappingCost);
		$('.ajax_block_cart_total').text(jsonData.total);
		$('.ajax_block_products_total').text(jsonData.productTotal);
        $('.ajax_total_price_wt').text(jsonData.total_price_wt);
		$('.recent_items').show('slow');

		if (parseFloat(jsonData.freeShippingFloat) > 0)
		{
			$('.ajax_cart_free_shipping').html(jsonData.freeShipping);
			$('.freeshipping').fadeIn(0);
		}
		else if (parseFloat(jsonData.freeShippingFloat) == 0)
			$('.freeshipping').fadeOut(0);

		this.nb_total_products = jsonData.nbTotalProducts;

		if (parseInt(jsonData.nbTotalProducts) > 0)
		{
			$('.ajax_cart_no_product').hide();
			$('.ajax_cart_quantity').text(jsonData.nbTotalProducts);
			$('.ajax_cart_quantity').fadeIn('slow');
			$('.ajax_cart_total').fadeIn('slow');
			$('.recent_items').show('slow');
			$('.ajax_cart_empty').css('display','none');
			$('.cart_block_no_products').hide('slow');

			if (parseInt(jsonData.nbTotalProducts) > 1)
			{
				$('.ajax_cart_product_txt').each( function (){
					$(this).hide();
				});

				$('.ajax_cart_product_txt_s').each( function (){
					$(this).show();
				});
			}
			else
			{
				$('.ajax_cart_product_txt').each( function (){
					$(this).show();
				});

				$('.ajax_cart_product_txt_s').each( function (){
					$(this).hide();
				});
			}
		}
		else
		{
			$('.ajax_cart_quantity, .ajax_cart_product_txt_s, .ajax_cart_product_txt').each(function(){
				$(this).hide();
			});
			$('.ajax_cart_no_product').show('slow');
			$('.ajax_cart_empty').css('display','inline-block');
			$('.recent_items').hide('slow');
			$('.cart_block_no_products').show('slow');
		}
	}
};

function HoverWatcher(selector)
{
	this.hovering = false;
	var self = this;

	this.isHoveringOver = function(){
		return self.hovering;
	}

	$(selector).hover(function(){
		self.hovering = true;
	}, function(){
		self.hovering = false;
	})
}

function crossselling_serialScroll()
{
	if (!!$.prototype.bxSlider)
		$('#blockcart_caroucel').bxSlider({
			minSlides: 2,
			maxSlides: 4,
			slideWidth: 178,
			slideMargin: 20,
			moveSlides: 1,
			infiniteLoop: false,
	  		hideControlOnEnd: true,
			pager: false
		});
}
