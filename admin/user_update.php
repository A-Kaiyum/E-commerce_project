<?php
 session_start();
 if(empty($_SESSION) && $_SESSION['email']==''){
   header("Location:login.php");
   exit();
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>User::Update</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
<?php
 include("dbconnection/DbConnection.php");
 include("model/users.php");
 $user = new Users();

 $id = $_GET['id'];

 $data = $user->getUserById($id);






?>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include("includes/topbar.php"); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            
            <!-- Left Sidebar End -->
               <?php include("includes/leftbar.php"); ?>
            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->

                                                <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">User Update</h3></div>
                                    <div class="panel-body">
                                        <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                                <form class="form-horizontal" role="form" action="coltroller/UserController.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">FULL NAME</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="fullname" class="form-control" value="<?php echo $data['fullname'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" name="email" class="form-control" value="<?php echo $data['email'] ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mobile</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="address" rows="3">
                                                        <?php echo $data['address'] ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">User Type</label>
                                                <div class="col-sm-10">
                            <select class="form-control" name="user_type">
                                <option value="admin" <?php if($data["user_type"]=='admin') echo 'selected'; ?>>Admin</option>
                                <option value="manager" <?php if($data["user_type"]=='manager') echo 'selected'; ?>> Manager</option>
                                <option value="staff" <?php if($data["user_type"]=='staff') echo 'selected'; ?>>Staff</option>
                                                       
                                                    </select>
                                                  
                                                </div>
                                            </div>
                                             
                                            <input type="hidden" name="action" value="update_user" required readonly="">
                                            <input type="hidden" name="id" value="<?php echo $data['id']  ?>" required readonly="">
 <button type="submit" class="btn btn-dark waves-effect waves-light">Submit</button>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


                       
                           

                        </div> <!-- End row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include("includes/footer.php"); ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
<?php unset($_SESSION['message']);