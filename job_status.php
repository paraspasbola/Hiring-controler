<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo ' <script>window.location.assign("index.php")</script>';
} else {


?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Job Status</title>
        <link rel="icon" type="image/x-icon" href="../treemultisoft_carrer_penel/images/favicon.png">



        <!-- Global stylesheets -->


        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
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
                <!-- Page header -->
                <div class="page-header page-header-light shadow mt-2 mb-2">
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
                                <a href="job_status.php" class="breadcrumb-item">Job Status</a>
                            </div>

                            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- /page header -->

                <div class="content-inner">
                    <div class="container mt-2">
                        <!-- Pagination types -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Job Status</h5>
                            </div>



                            <table class="table datatable-pagination">
                                <thead>
                                    <tr>
                                        <th>Job Id</th>
                                        <th>Post Date</th>
                                        <th>Post Name</th>
                                        <th>Applied Candidate</th>
                                        <th>Status</th>

                                        <th class="">Actions</th>
                                    </tr>
                                </thead>

                                <?php

                                require_once('connection.php');
                                $job_detail = mysqli_query($conn, "select job_id,date,job_post,status from tbl_jobpost ");

                                while ($rows = $job_detail->fetch_assoc()) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $rows["job_id"] ?></td>

                                            <td><?php echo $rows["date"] ?></td>

                                            <td><?php echo $rows["job_post"] ?></td>

                                            <?php

                                            require_once('connection.php');
                                            $flag = mysqli_query($conn, "select count(*) as count from tbl_candidate where job_id=" . $rows['job_id'] . "");

                                            while ($count = $flag->fetch_assoc()) {
                                            ?>

                                                <td><?php echo $count["count"] ?></td>
                                                <!-- <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td> -->
                                              

                                                <td>
                                                   <?php
                                                   if($rows['status']==1){
                                                    echo '<p><a href="status.php?job_id='.$rows['job_id'].'&status=0" class="badge bg-success bg-opacity-10 text-success">active</a></p>';
                                                   }
                                                   else{
                                                    echo '<p><a href="status.php?job_id='.$rows['job_id'].'&status=1" class="badge bg-success bg-opacity-10 text-danger">inactive</a></p>';
                                                   }
                                                   ?>
                                                </td>

                                            <?php
                                            }
                                            ?>

									
                                            <td class="text-center">
                                                <div class="d-flex align-self-center dropdown ms-3">
                                                    <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                                        <i class="ph-list"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      
                                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                                            <i class="ph-file me-2"></i>
                                                            View Details
                                                        </a>
                                                    </div>
                                                </div>

                                            </td>

                                        </tr>
                                    </tbody>
                                <?php

                                }
                                ?>
                            </table>
                        </div>
                        <!-- /pagination types -->

                    </div>


                </div>
                <!-- /inner content -->
                <!-- foter -->
                <?php
                include_once('footer.php');
                ?>
                <!-- /footer -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->




    </body>

    </html>
<?php
}
?>