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
        <title>candidate search</title>
        <link rel="icon" type="image/x-icon" href="../treemultisoft_carrer_penel/images/favicon.png">


        <script src="jquery-3.6.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
                                Home - <span class="fw-normal">Candidate Search</span>
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
                                <a href="candidate_search.php" class="breadcrumb-item">Search Candidate</a>
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
                        <form>
                            <div class="card p-3">
                                <div class="card-header">
                                    <div class="container" style="max-width:50%;">
                                        <div class="text-center mt-5 mb-4">
                                            <h2>search candidate :</h2>
                                            <div class="form-text text-muted">Search By : Name || Phonenumber || Email </div>

                                        </div>
                                        <input type="text" class="form-control" id="search" autocomplete="off" placeholder="Search...">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- /inner content -->

                    <div class="row">
                        <div class="col-md-12 table-responsive" id="output">
                            
                        </div>
                    </div>
                </div>
                <!-- /main content -->

                <!-- foter -->
                <?php
                include_once('footer.php');
                ?>
                <!-- /footer -->
                
            </div>
            <!-- /page content -->

    </html>
    <?php

}
    ?>
 <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keypress(function() {
                
                
                $.ajax({
                    type: 'POST',
                    url: 'candidate_search_db.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });

            });
        });
    </script>



    <?php

    ?>