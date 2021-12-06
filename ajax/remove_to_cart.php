<?php
session_start();

if(!empty($_SESSION['cart']) && array_key_exists($_POST['id'], $_SESSION['cart'])){
	
	unset($_SESSION['cart'][$_POST['id']]);
}


$sum = 0;
$item = 0;

foreach($_SESSION['cart'] as $key=>$cart){
	
	$sum = $sum + $cart['price'] * $cart['quantity'];
	$item++;
	
}


echo json_encode(['amount'=>$sum, 'item'=>$item, 'cart'=>$_SESSION['cart']]);





?>