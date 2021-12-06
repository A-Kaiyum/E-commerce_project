<?php
session_start();
include("../dbconnection/DbConnection.php");
include("../model/customer.php");
$customer = new Customer();


switch($_REQUEST['action']){

	case "login_process":

	 $password = md5($_POST['password']);
	 $email = $_POST['email'];

   	  $getData = $customer->getCustomerByEmail($email);

			if($getData['password'] == $password){

			   $_SESSION['customer_name'] = $getData['name'];
			   $_SESSION['customer_email'] = $getData['email'];
			   $_SESSION['customer_phone'] = $getData['phone'];
			   $_SESSION['customer_id'] = $getData['id'];
			   header("Location:../../my-account.php");
			   exit();

			}
			else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Incorrect username or Password</div>";
			header("Location:../../login.php");
			}

		   exit();
   	 	break;

   	case "save_customer": 
       
       $getData = $customer->getCustomerByEmail($_POST['email']);

         if(count($getData)==0)
         	 {
		$customer->name = $_POST['name'];
		$customer->email = $_POST['email'];
		$customer->phone = $_POST['phone'];
		$customer->company = $_POST['company'];
		$customer->address = $_POST['address'];
		$customer->city = $_POST['city'];
		$customer->postcode = $_POST['postcode'];
		$customer->password = md5($_POST['password']);
		$customer_id = $customer->save();
         
			 if($customer_id){

			 	   $_SESSION['customer_name'] = $_POST['name'];
				   $_SESSION['customer_email'] = $_POST['email'];
				   $_SESSION['customer_phone'] = $_POST['phone'];
				   $_SESSION['customer_id'] = $customer_id;
				   header("Location:../../my-account.php");
				   exit();
			  
			 }
			 else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Unable to registration!</div>";
			 }
		}
		else{
			$_SESSION['message'] = '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Warning!</strong> You are already registered!.Please <a href="login.php">login</a></div>';
		}

		header("Location:../../register.php");

   	  break;
   	case "update_user":

		$user->id = $_POST['id'];
		$user->fullname = $_POST['fullname'];
		$user->email = $_POST['email'];
		$user->phone = $_POST['phone'];
		$user->address = $_POST['address'];
		$user->user_type = $_POST['user_type'];
		 $save = $user->update();

		 if($save){
		  $_SESSION['message'] = "<div class='alert alert-success'>User Update successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
		 }

		header("Location:../user_update.php?id=".$_POST['id']);

   	break;

   	case "delete_user":

		$user->id = $_REQUEST['id'];

		$delete = $user->delete();

		 if($delete){
		  $_SESSION['message'] = "<div class='alert alert-success'>User Delete successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to Delete!</div>";
		 }

		header("Location:../users.php");

   	break;
    case "logout":
            session_destroy();
            header("Location:../login.php");
            break;
    default:
    header("Location:../login.php");

}





?>