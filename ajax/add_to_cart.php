<?php
session_start();

if(!empty($_SESSION['cart']) && array_key_exists($_POST['id'], $_SESSION['cart'])){
	
	$_SESSION['cart'][$_POST['id']]['quantity'] = $_SESSION['cart'][$_POST['id']]['quantity'] + $_POST['quantity'];
}
else{
	
	$_SESSION['cart'][$_POST['id']] = ['name'=>$_POST['name'], 'price'=>$_POST['price'], 'quantity'=>$_POST['quantity'], 'image'=>$_POST['image']];
}



$sum = 0;
$item = 0;

foreach($_SESSION['cart'] as $key=>$cart){
	
	$sum = $sum + $cart['price'] * $cart['quantity'];
	$item++;
	
}


echo json_encode(['amount'=>$sum, 'item'=>$item, 'cart'=>$_SESSION['cart']]);





?>