<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo ' <script>window.location.assign("index.php")</script>';
} else {
    
    
    require_once('connection.php');
    
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
        <script src="assets/js/vendor/visualization/echarts/echarts.min.js"></script>
        <script src="assets/js/vendor/ui/fullcalendar/main.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/demo/pages/user_pages_profile.js"></script>
        <script src="assets/demo/charts/echarts/bars/tornado_negative_stack.js"></script>
        <script src="assets/demo/charts/pages/profile/balance_stats.js"></script>
        <script src="assets/demo/charts/pages/profile/available_hours.js"></script>
        <!-- /theme JS files -->

    </head>

    <body>

        <!-- Main navbar -->
        <?php
        include_once('header.php');
        ?>
        <!-- /main navbar -->


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
                                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <a href="#" class="breadcrumb-item">Home</a>
                                    <span class="breadcrumb-item active">Admin Profile</span>
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

                        
                    <?php
                    
                    ?>


                         <!-- Profile info -->
                        

                         <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Profile information</h5>
                                        </div>

                                        <div class="card-body">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Firstname</label>
                                                            <input type="text" value="<?php echo $_SESSION['name'] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Last name</label>
                                                            <input type="text" class="form-control" value="<?php echo $_SESSION['last_name'] ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Address line 1</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Address line 2</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">City</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">State/Province</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">ZIP code</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="text" readonly="readonly" value="<?php echo $_SESSION['email'] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Your country</label>
                                                            <input type="text"  value="" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Phone #</label>
                                                            <input type="text" value="<?php echo $_SESSION['phonenumber'] ?>" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Upload profile image</label>
                                                            <input type="file" class="form-control">
                                                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /profile info -->


                                    

                    <!-- foter -->
                    <?php
                    // }
                    include_once('footer.php');
                    ?>
                    <!-- /footer -->

                </div>
                <!-- /inner content -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->






    </body>

    </html>
<?php
}
?>