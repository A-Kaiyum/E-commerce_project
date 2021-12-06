/* -------------------------------------------------------------------------------- /
	
	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.
	
/ -------------------------------------------------------------------------------- */

"use strict"

	// Cart add remove functions
	var cart = {
		'add': function(product_id, name, price, image) {
			
			var quantity = $("#quantity").val();
			
			$.ajax({
				url: 'ajax/add_to_cart.php',
				type: 'post',
				data: {id: product_id, name: name, quantity: quantity, price: price, image: image },
				success: function(response){
					
					var data = JSON.parse(response);
					
					$(".number-shopping-cart").html(data.item);
					
					$(".cart-total-full").html("Tk." + data.amount);
					
					var txt = '';
					
					$.each(data.cart, function(key, cart){
						
						var total = cart.price * cart.quantity;
						txt += '<tr><td class="text-center" style="width:70px">';
						txt += '<a href="product.php?id='+key+'"> <img src="admin/uploads/product/'+cart.image+'" style="width:70px" alt="'+cart.name+'" title="'+cart.name+'" class="preview"> </a></td>';
						txt += '<td class="text-left"> <a class="cart_product_name" href="product.php?id='+key+'">'+cart.name+'</a> </td>';
						txt += '<td class="text-center"> x'+cart.quantity+' </td>';
						txt += '<td class="text-center"> TK. '+total+' </td>';
						txt += '<td class="text-right"><a href="product.php" class="fa fa-edit"></a></td>';
						txt += '<td class="text-right"><a href="javascript:void(0)" onclick="cart.remove('+key+');" class="fa fa-times fa-delete"></a></td>';
						txt +='</tr>';
						
					});
					
					
					$("#total-cart-amount").html("TK." + data.amount);
					$("#show-cart").html(txt);
					
					
				}
			});
			
			addProductNotice('Product added to Cart', '<img src="admin/uploads/product/'+ image +'" alt="">', '<h3><a href="product.php?id='+ product_id +'">'+ name +'"</a> added to <a href="cart.php">shopping cart</a>!</h3>', 'success');
		},
		
		'remove': function (id){
			  
			  $.ajax({
				  url:"ajax/remove_to_cart.php",
				  type: "post",
				  data: {id:id},
				  success: function(response){
					  
					  var data = JSON.parse(response);
					
					$(".number-shopping-cart").html(data.item);
					
					$(".cart-total-full").html("Tk." + data.amount);
					
					var txt = '';
					
					$.each(data.cart, function(key, cart){
						
						var total = cart.price * cart.quantity;
						txt += '<tr><td class="text-center" style="width:70px">';
						txt += '<a href="product.php?id='+key+'"> <img src="admin/uploads/product/'+cart.image+'" style="width:70px" alt="'+cart.name+'" title="'+cart.name+'" class="preview"> </a></td>';
						txt += '<td class="text-left"> <a class="cart_product_name" href="product.php?id='+key+'">'+cart.name+'</a> </td>';
						txt += '<td class="text-center"> x'+cart.quantity+' </td>';
						txt += '<td class="text-center"> TK. '+total+' </td>';
						txt += '<td class="text-right"><a href="product.php" class="fa fa-edit"></a></td>';
						txt += '<td class="text-right"><a href="javascript:void(0)" onclick="cart.remove('+key+');" class="fa fa-times fa-delete"></a></td>';
						txt +='</tr>';
						
					});
					
					
					$("#total-cart-amount").html("TK." + data.amount);
					$("#show-cart").html(txt);
					  
				  }
			  });
		}
	}

	var wishlist = {
		'add': function(product_id) {
			addProductNotice('Product added to Wishlist', '<img src="img/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="login.html">login</a>  to save <a href="product.html">Apple Cinema 30"</a> to your <a href="wishlist.html">wish list</a>!</h3>', 'success');
		}
	}
	var compare = {
		'add': function(product_id) {
			addProductNotice('Product added to compare', '<img src="img/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="product.html">Apple Cinema 30"</a> to your <a href="compare.html">product comparison</a>!</h3>', 'success');
		}
	}

	/* ---------------------------------------------------
		jGrowl – jQuery alerts and message box
	-------------------------------------------------- */
	function addProductNotice(title, thumb, text, type) {
		$.jGrowl.defaults.closer = false;
		//Stop jGrowl
		//$.jGrowl.defaults.sticky = true;
		var tpl = thumb + '<h3>'+text+'</h3>';
		$.jGrowl(tpl, {		
			life: 4000,
			header: title,
			speed: 'slow',
			theme: type
		});
	}

