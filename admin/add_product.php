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
        <title>ADD::Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
        <!--bootstrap-wysihtml5-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css">

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
                                    <div class="panel-heading"><h3 class="panel-title">Add Product</h3></div>
                                    <div class="panel-body">
                                        <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                <form class="form-horizontal" role="form" action="coltroller/ProductController.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" class="form-control" value="">
                                                </div>
                                            </div>

                                          

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category_id">
                                                        <option value="0">Select Category</option>
                                                    <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                  
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Product sku/Code</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="sku" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="wysihtml5 form-control" rows="9" name="description"></textarea>
                                                </div>
                                            </div>

                                         <div class="form-group">
                                                <label class="col-md-2 control-label"> Quantity</label>
                                                <div class="col-md-10">
                                                    <input type="number" name="quantity" class="form-control" value="0" min='0'>
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-2 control-label"> Price</label>
                                                <div class="col-md-10">
                                                    <input type="number" name="price" class="form-control" value="0" min="0">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-2 control-label"> Spacial Price</label>
                                                <div class="col-md-10">
                                                    <input type="number" name="spacial_price" class="form-control" value="0" min="0">
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
                                             
                                            <input type="hidden" name="action" value="save_product" required readonly="">
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
        <!-- Wysihtml js -->
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

        <<!--Summernote js-->
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <script src="assets/js/app.js"></script>

         <script>

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
        </script>

    </body>
</html>
<?php unset($_SESSION['message']);