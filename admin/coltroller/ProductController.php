<?php
session_start();
include("../dbconnection/DbConnection.php");
include("../model/products.php");
$product = new Products();

switch($_REQUEST['action']){
   	case "save_product": 
        $product->category_id = $_POST['category_id'];
        $product->sku = $_POST['sku'];
        $product->name = $_POST['name'];
		$product->description = $_POST['description'];
		$product->quantity = $_POST['quantity'];
		$product->price = $_POST['price'];
		$product->spacial_price = $_POST['spacial_price'];
		$product->status = $_POST['status'];
		 if($_FILES['image']['name']!=''){

		 	$files = $product->uploadImage($_FILES);

		 	$file_name = $files['status']==1 ? $files['file_name'] : '';
		 }
		 else{

		 	$file_name = '';
		 }

		 $product->image = $file_name;

		$save = $product->save();

		 if($save){
		  $_SESSION['message'] = "<div class='alert alert-success'>Product Save successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
		 }

		header("Location:../add_product.php");

   	  break;
   	case "update_product":


   	break;

   	case "delete_product":

    $product->id = $_POST['id'];
    $status = $product->delete();
    
    header("Location:../products.php");

   	break;
  
    default:
    header("Location:../products.php");

}





?>