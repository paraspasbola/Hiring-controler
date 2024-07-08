<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo ' <script>window.location.assign("index.php")</script>';
} else {


    function check_jobid($jobid)
    {
        $user_jobid = $jobid;
        require('connection.php');
        $check_jobid = "";
        $flag = mysqli_query($conn, "select job_id from tbl_jobpost where job_id='$user_jobid'");
        while ($temp_jobid = $flag->fetch_assoc()) {
            $check_jobid = $temp_jobid['job_id'];
        }
        if ($check_jobid != NULL) {
            $jobid = $jobid + 1;
            check_jobid($jobid);
        } else {
            $jobid = $user_jobid;

?>

            <!DOCTYPE html>
            <html lang="en" dir="ltr">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Post Job</title>
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
                                            <a href="dashboard.php" class="breadcrumb-item"><i class="ph-house"></i></a>
                                            <a href="dashboard.php" class="breadcrumb-item">Home</a>
                                            <a href="job_post_form.php" class="breadcrumb-item"><span class="breadcrumb-item active">Job Post</span></a>
                                        </div>

                                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                        </a>
                                    </div>

                                    <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                        <div class="d-lg-flex mb-2 mb-lg-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /page header -->

                            <!-- form -->
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg">

                                        <!-- Centered buttons -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="card-title">Post Job</h6>
                                            </div>

                                            <div class="card-body">
                                                <form action="job_post_submit.php"  method="post" >
                                                    <div class="row">
                                                    <div class="form-group col-md-6 mb-2 ">
                                                        <label>Job Id:</label>
                                                        <input type="text" class="form-control" placeholder=" " value="<?php echo $jobid ?>" name="job_id">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Date:</label>
                                                        <input type="date" id="date" class="form-control" name="date" value="<?php echo date('Y-m-d') ?>"required>
                                                    </div>
                                            </div>

                                            <!-- Single select -->
                                            <div class="row ">
                                                <div class="form-group control-label  col-md-6 mb-2 nav-item nav-item-sub-menu">

                                                    Post Name : <select class="form-control dropdown-menu-end rounded container " name="job_post">
                                                        <?php
                                                        $job_detail = mysqli_query($conn, "select distinct post_name from tbl_addjob ORDER BY post_name");
                                                        
                                                        while ($jobs = $job_detail->fetch_assoc()) {
                                                        ?>
                                                            
                                                            <option><?php echo $jobs['post_name'] ?></option>

                                                        <?php
                                                        }
                                                        ?>


                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label>Experience Required :</label>
                                                    <input type="text" class="form-control" placeholder=" 1-2 Years " name="Experience" required>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="form-group col-md-6 mb-2">
                                                    <label>Salary(monthly) :</label>
                                                    <input type="text" class="form-control" placeholder="based on performance" name="req_c" required>

                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label>Candidate Education :</label>
                                                    <input type="text" class="form-control" placeholder="e.g Highest Education " name="req_c" required>
                                                </div>
                                            </div>



                                            <!-- /single select -->

                                            <div class="form-group mb-2">
                                                <label>Job Description :</label>
                                                <textarea rows="6" cols="6" class="form-control" placeholder="Enter description, up to 200 characters " name="description"></textarea>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-teal" name="submit">Submit form <i class="icon-paperplane ml-2"></i></button>
                                            </div>
                                            </form>
                                           
                                        </div>
                                    </div>
                                    <!-- /centered buttons -->
                                </div>
                            </div>
                        </div>
                        <!-- /form -->
                       
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
    check_jobid(1001);
}
?>