/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/


	function aumentarCantidad(valor,id)
	{

	console.log(document.getElementById("cantidad"+id).value)
		var valor2 = eval(document.getElementById("cantidad"+id).value);
	 	document.getElementById("cantidad"+id).value = eval(valor2 + 1)

	 	var valores = valor *  document.getElementById("cantidad"+id).value;

		document.getElementById("totalArticulos").value = eval(eval(document.getElementById("totalArticulos").value) + valor);
		document.getElementById("totalCarrito").value = eval(eval(document.getElementById("totalCarrito").value) + valor);
}

function disminuirCantidad(valor,id)
{

console.log(document.getElementById("cantidad"+id).value)

		 var valor2 = eval(document.getElementById("cantidad"+id).value);
		 if(valor2 >1){
			 document.getElementById("cantidad"+id).value = eval(valor2 - 1)
		 }
	var valores = valor *  document.getElementById("cantidad"+id).value;

}
