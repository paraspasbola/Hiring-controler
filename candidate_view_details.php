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
                                Home -<a href=""></a><span class="fw-normal">Dashboard</span>
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
                                <a href="candidate_form.php" class="breadcrumb-item"><span class="breadcrumb-item active">Candidate form </span></a>
                            </div>

                            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                            <div class="d-lg-flex mb-2 mb-lg-0">


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

                <div class="content-inner">
                    <div class="container mt-2">
                        <?php

                        require_once('connection.php');
                        if (isset($_POST['show_detail'])) {
                            $id = $_POST['candidate_id'];

                        ?>
                            <div class="content">

                                <!-- Pagination types -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Candidates Info</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table datatable-pagination">
                                            <thead>
                                                <tr>
                                                    <th>Candidate Id</th>
                                                    <th>Candidate Name</th>
                                                    <th>DOB</th>
                                                    <th>Resume</th>
                                                    <th>Education</th>
                                                    <th>Address</th>
                                                    <th>Experience</th>
                                                    <th>Applied Post </th>

                                                    <!-- <th class="text-center">Action</th> -->


                                                </tr>
                                            </thead>
                                            <?php


                                            $show_data = "SELECT * FROM `tbl_candidate` where candidate_id='$id'";
                                            if ($result = mysqli_query($conn, $show_data)) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $Candidate_id = $row['Candidate_id'];
                                                    $Candidate_name = $row['Candidate_name'];
                                                    $D_o_b = $row['D_o_b'];
                                                    $resume = $row['resume'];
                                                    $Experience = $row['Experience'];
                                                    $education = $row['education'];
                                                    $address = $row['address'];
                                                    $applied_post = $row['applied_post'];

                                            ?>
                                                    <tbody>
                                                        <tr>

                                                            <td><?php echo "$Candidate_id" ?></td>
                                                            <td><?php echo "$Candidate_name" ?></td>
                                                            <td><?php echo "$D_o_b" ?></td>
                                                            <td><?php echo "$resume" ?></td>
                                                            <td><?php echo "$education" ?></td>
                                                            <td><?php echo "$address" ?></td>
                                                            <td><?php echo "$Experience" ?></td>
                                                            <td><?php echo "$applied_post" ?></td>


                                                            </td>

                                                        </tr>
                                                    </tbody>
                                            <?php

                                                }
                                            }
                                            ?>
                                    </div>
                                    </table>
                                </div>
                                <!-- /pagination types -->

                            </div>




                        <?php
                        }

                        ?>

                    </div>


                </div>
                <!-- /inner content -->
              

            </div>
            <!-- /main content -->
              <!-- foter -->
              <?php
                include_once('footer.php');
                ?>
                <!-- /footer -->

        </div>
        <!-- /page content -->




    </body>

    </html>
<?php
}
?>