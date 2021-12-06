<?php
session_start();
include("../dbconnection/DbConnection.php");
include("../model/users.php");
$user = new Users();


switch($_REQUEST['action']){

	case "login_process":

	 $password = md5($_POST['password']);
	 $username = $_POST['username'];

   	  $getData = $user->getUserByEmail($username);

			if($getData['password'] == $password){

			   $_SESSION['fullname'] = $getData['fullname'];
			   $_SESSION['email'] = $getData['email'];
			   $_SESSION['phone'] = $getData['phone'];
			   $_SESSION['address'] = $getData['address'];
			   $_SESSION['user_type'] = $getData['user_type'];
			   
			   header("Location:../index.php");
			   exit();

			}
			else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Incorrect username or Password</div>";
			header("Location:../login.php");
			}

		   exit();
   	 	break;

   	case "save_user": 


		$user->fullname = $_POST['fullname'];
		$user->email = $_POST['email'];
		$user->phone = $_POST['phone'];
		$user->password = md5($_POST['password']);
		$user->address = $_POST['address'];
		$user->user_type = $_POST['user_type'];

		 $save = $user->save();

		 if($save){
		  $_SESSION['message'] = "<div class='alert alert-success'>User Save successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
		 }

		header("Location:../user_registration.php");

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