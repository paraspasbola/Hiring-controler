<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo ' <script>window.location.assign("index.php")</script>';
} else {

    function check_post_id($post_id)
    {
        $user_post_id = $post_id;
        require('connection.php');
        $check_post_id = "";
        $flag = mysqli_query($conn, "select post_id from tbl_addjob where post_id='$user_post_id'");
        while ($temp_post_id = $flag->fetch_assoc()) {
            $check_post_id = $temp_post_id['post_id'];
        }
        if ($check_post_id != NULL) {
            $post_id = $post_id + 1;
            check_post_id($post_id);
        } else {
            $post_id = $user_post_id;


?>

            <!DOCTYPE html>
            <html lang="en" dir="ltr">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Add Job</title>
                <link rel="icon" type="image/x-icon" href="../treemultisoft_carrer_penel/images/favicon.png">


                <!-- Global stylesheets -->
                <link href="assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
                <link href="assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
                <link href="assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
                <!-- /global stylesheets -->

                <!-- Core JS files -->
                <script src="assets/demo/demo_configurator.js"></script>
                <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
                <!-- /core JS files -->

                <!-- Theme JS files -->
                <script src="assets/js/vendor/visualization/d3/d3.min.js"></script>
                <script src="assets/js/vendor/visualization/d3/d3_tooltip.js"></script>

                <script src="assets/js/app.js"></script>
                <script src="assets/demo/pages/dashboard.js"></script>
                <script src="assets/demo/charts/pages/dashboard/streamgraph.js"></script>
                <script src="assets/demo/charts/pages/dashboard/sparklines.js"></script>
                <script src="assets/demo/charts/pages/dashboard/lines.js"></script>
                <script src="assets/demo/charts/pages/dashboard/areas.js"></script>
                <script src="assets/demo/charts/pages/dashboard/donuts.js"></script>
                <script src="assets/demo/charts/pages/dashboard/bars.js"></script>
                <script src="assets/demo/charts/pages/dashboard/progress.js"></script>
                <script src="assets/demo/charts/pages/dashboard/heatmaps.js"></script>
                <script src="assets/demo/charts/pages/dashboard/pies.js"></script>
                <script src="assets/demo/charts/pages/dashboard/bullets.js"></script>
                <!-- /theme JS files -->

            </head>

            <body>
                <!-- <script>document.getElementById("currentdate").value=Date().toLocaleDateString(); </script> -->


                <!-- Main navbar -->
                <?php
                include_once('header.php');
                ?>

                <!-- /Main navbar -->

                <!-- Page content -->
                <div class="page-content">

                    <!-- Main sidebar -->
                    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

                        <!-- Sidebar content -->
                        <?php
                        include_once('sidebar.php');
                        ?>

                        <!-- Sidebar content -->

                    </div>
                    <!-- /main sidebar -->



                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Inner content -->
                        <div class="content-inner">

                            <!-- Page header -->
                            <div class="page-header page-header-light shadow mt-2 mb-3">
                                <div class="page-header-content d-lg-flex">
                                    <div class="d-flex">
                                        <h4 class="page-title mb-0">
                                            Home - <span class="fw-normal">Dashboard</span>
                                        </h4>

                                        <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                        </a>
                                    </div>

                                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                                        <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                                            <div class="dropdown w-100 w-sm-auto">

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="page-header-content d-lg-flex border-top">
                                    <div class="d-flex">
                                        <div class="breadcrumb py-2">
                                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                            <a href="#" class="breadcrumb-item">Home</a>
                                            <span class="breadcrumb-item active">Add Job</span>
                                        </div>

                                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                        </a>
                                    </div>

                                    <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                        <div class="d-lg-flex mb-2 mb-lg-0">
                                            <a href="#" class="d-flex align-items-center text-body py-2">
                                                <i class="ph-lifebuoy me-2"></i>
                                                Support
                                            </a>

                                            <div class="dropdown ms-lg-3">
                                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                                    <i class="ph-gear me-2"></i>
                                                    <span class="flex-1">Settings</span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-shield-warning me-2"></i>
                                                        Account security
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-chart-bar me-2"></i>
                                                        Analytics
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-lock-key me-2"></i>
                                                        Privacy
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-gear me-2"></i>
                                                        All settings
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /page header -->

                            <!-- form -->
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-12">

                                        <!-- Centered buttons -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="card-title">Add Job</h6>
                                            </div>

                                            <div class="card-body">
                                                <form action="add_job_submit.php" method="post">
                                                    <div class="row ">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label>Post Id:</label>
                                                            <input type="text" class="form-control" placeholder=" "  value="<?php echo $post_id ?>" name="post_id">
                                                        </div>

                                                        <div class="form-group control-label  col-md-6 mb-2 nav-item nav-item-sub-menu">

                                                            Post Name : <input type="text" class="form-control" placeholder=" " name="post_name"  id="post_name">

                                                        </div>

                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-teal" name="submit_job" onclick="create()">Save <i class="icon-paperplane ml-2"></i></button>
                                                    </div>
                                                </form>
                                                <script>
                                                    function create() {
                                                        // var myObject, newfolder;
                                                        // myObject = new ActiveXObject("Scripting.FileSystemObject");
                                                        // newfolder = myObject.CreateFolder("D:\\cc\\");
                                                        let flag=document.getElementById('post_name').value;
                                                        console.log(flag);

                                                        <?php
                                                    
                                                        ?>
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <!-- /centered buttons -->
                                    </div>
                                </div>
                            </div>




                        </div>
                        <!-- /inner content -->

                        <?php
                        include_once('footer.php');
                        ?>
                    </div>
                    <!-- /main content -->



                </div>
                <!-- /page content -->







            </body>

            </html>
<?php
        }
    }
    check_post_id(101);
}

?>