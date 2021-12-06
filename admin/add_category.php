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
        <title>ADD::Category</title>
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
include("model/category.php");
$category = new Category();

$categories = $category->getCategories();

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
                                    <div class="panel-heading"><h3 class="panel-title">Add Category</h3></div>
                                    <div class="panel-body">
                                        <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                <form class="form-horizontal" role="form" action="coltroller/CategoryController.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Category Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Parent</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="parent_id">
                                                        <option value="0">As Parent</option>
                                                    <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                  
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                        <option value="1">Active</option>
                                                        <option value="0"> Inactive</option>
                                                        
                                                       
                                                    </select>
                                                  
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="image">
                                                  
                                                </div>
                                            </div>
                                             
                                            <input type="hidden" name="action" value="save_category" required readonly="">
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