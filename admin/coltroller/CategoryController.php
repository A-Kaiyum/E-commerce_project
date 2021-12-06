<?php
session_start();
include("../dbconnection/DbConnection.php");
include("../model/category.php");
$category = new Category();

switch($_REQUEST['action']){
   	case "save_category": 

		$category->name = $_POST['name'];
		$category->parent_id = $_POST['parent_id'];
		$category->status = $_POST['status'];

		 if($_FILES['image']['name']!=''){

		 	$files = $category->uploadImage($_FILES);

		 	$file_name = $files['status']==1 ? $files['file_name'] : '';
		 }
		 else{

		 	$file_name = '';
		 }

		 $category->image = $file_name;

		$save = $category->save();

		 if($save){
		  $_SESSION['message'] = "<div class='alert alert-success'>Category Save successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
		 }

		header("Location:../add_category.php");

   	  break;
   	case "update_category":


   	break;

   	case "delete_user":


   	break;
  
    default:
    header("Location:../categories.php");

}





?>