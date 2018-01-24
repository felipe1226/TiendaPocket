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



	// close fancybox
	updateFancyBox : function (){},
	// add a product in the cart via ajax



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
