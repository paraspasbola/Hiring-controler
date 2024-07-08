<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo ' <script>window.location.assign("index.php")</script>';
} else {

    function check_Candidate_id($Candidate_id)
    {
        $user_Candidate_id = $Candidate_id;
        require('connection.php');
        $check_Candidate_id = "";
        $flag = mysqli_query($conn, "select Candidate_id from tbl_Candidate where Candidate_id='$user_Candidate_id'");
        while ($temp_Candidate_id = $flag->fetch_assoc()) {
            $check_Candidate_id = $temp_Candidate_id['Candidate_id'];
        }
        if ($check_Candidate_id != NULL) {
            $Candidate_id = $Candidate_id + 1;
            check_Candidate_id($Candidate_id);
        } else {
            $Candidate_id = $user_Candidate_id;

?>

            <!DOCTYPE html>
            <html lang="en" dir="ltr">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Dashboard</title>
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
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <!-- Button trigger modal -->

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
                                            Home - <span class="fw-normal">Candidate Form</span>
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
                                            <span class="breadcrumb-item active">Candidate Form</span>
                                        </div>

                                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <!-- /page header -->

                            <!-- Content area -->
                            <div class="content">
                                <!-- form -->
                                <div class="container">

                                    <div class="row">
                                        <div class="col-lg">

                                            <!-- Centered buttons -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="card-title">Candidate Form</h6>
                                                </div>

                                                <div class="card-body">
                                                    <form action="candidate_form_submit.php" method="post" enctype="multipart/form-data" name="details" onsubmit="return validateForm()">
                                                        <div class="row">
                                                            <div class="form-group col-md-4 mb-2 ">
                                                                <label>Candidate Id :</label>
                                                                <input type="text" class="form-control" placeholder=" " value="<?php echo $Candidate_id ?>" name="Candidate_id">
                                                                <span class="formerror"> </span>

                                                            </div>

                                                            <div class="form-group col-md-4 mb-2" id="Candidate_name">
                                                                <label>Candidate Name :</label>
                                                                <input type="text" class="form-control" placeholder="Your name" value="" id="candidate_name" name="Candidate_name" required>
                                                                <span class="formerror text-danger"></span>
                                                                <!-- <span class="formerror"> </span> -->

                                                            </div>

                                                            <div class="form-group col-md-4 mb-2" id="D_o_b">
                                                                <label>Date of birth :</label>
                                                                <input type="date" id="date" class="form-control" name="D_o_b" value="<?php echo date('Y-m-d') ?>" required>
                                                                <!-- <span id="error_date" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>

                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                        <div class="row ">
                                                            <div class="form-group col-md-4 mb-2" id="email">
                                                                <label>Email :</label>
                                                                <input type="email" class="form-control" placeholder="user@gmail.com" name="email" id="email" required>
                                                                <!-- <span id="error_skills" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>


                                                            </div>

                                                            <div class="form-group col-md-4 mb-2" id="phonenumber">
                                                                <label>Phone Number :</label>
                                                                <input type="text" class="form-control" placeholder="Experience in months" name="phonenumber" id="phonenumber" required>
                                                                <!-- <span id="error_Experience" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>


                                                            </div>
                                                            <div class="form-group col-md-4 mb-2" id="education">
                                                                <label>Candidate Education :</label>
                                                                <input type="text" class="form-control" placeholder="e.g Highest Education " name="education" id="education" required>
                                                                <!-- <span id="error_education" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>


                                                            </div>
                                                        </div>
                                                        <!-- Single select -->
                                                        <div class="row ">
                                                            <div class="form-group col-md-6 mb-2" id="skills">
                                                                <label>Skill :</label>
                                                                <input type="text" class="form-control" placeholder="your skills" name="skills" id="skills" required>
                                                                <!-- <span id="error_skills" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>


                                                            </div>

                                                            <div class="form-group col-md-6 mb-2" id="Experience">
                                                                <label>Experience :</label>
                                                                <input type="text" class="form-control" placeholder="Experience in months" name="Experience" id="Experience" required>
                                                                <!-- <span id="error_Experience" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"></span>


                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="form-group col-md-6 mb-2" id="filec">
                                                                <label>Upload resume :</label>
                                                                <input type="file" class="form-control h-auto" name="resume" id="filesizecheck" required>
                                                                <div class="form-text text-muted">Accepted formats: Pdf, Docx Max file size 2Mb</div>
                                                                <!-- <span id="error_resume" class="text-danger"></span> -->
                                                                <span class="formerror text-danger"> </span>



                                                            </div>
                                                            <div class="form-group control-label  col-md-6 mb-2 nav-item nav-item-sub-menu">
                                                                Post Name : <select class="form-control dropdown-menu-end rounded container " name="job_post">
                                                                    <?php
                                                                    require_once('connection.php');
                                                                    $job_detail = mysqli_query($conn, "select job_post from tbl_jobpost ");

                                                                    while ($jobs = $job_detail->fetch_assoc()) {
                                                                    ?>
                                                                        <option value="<?php echo $jobs['job_post'] ?>"><?php echo $jobs['job_post'] ?></option>


                                                                    <?php
                                                                    }
                                                                    ?>


                                                                </select>
                                                            </div>

                                                        </div>

                                                        <!-- /single select -->
                                                        <div class="row ">

                                                            <div class="form-group col-md-12 mb-2" id="address">
                                                                <label>Candidate Address :</label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Address, up to 50 characters " name="address" id="address" required>
                                                                <span id="formerror text-danger"></span>

                                                            </div>
                                                        </div>

                                                        <!-- Button trigger modal -->
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-teal" name="submit" data-toggle="modal" data-target="#exampleModal">Submit form <i class="icon-paperplane ml-2"></i></button>
                                                        </div>

                                                    </form>

                                                    <script>
                                                        function seterror(id, error) {
                                                            //sets error inside tag of id 
                                                            element = document.getElementById(id);
                                                            element.getElementsByClassName('formerror')[0].innerHTML = error;

                                                        }

                                                        function validateForm() {

                                                            clearErrors();

                                                            //perform validation and if validation fails, set the value of returnval to false

                                                            // Javascript reGex for Name validation
                                                            var Candidate_name = document.forms['details']["Candidate_name"].value;
                                                            var regName = '/^[A-Za-z]+([\ A-Za-z]+)*/';
                                                            if (Candidate_name == "" || Candidate_name.value.match(regName)) {
                                                                seterror("Candidate_name", "*Please enter your name properly");
                                                                returnval = false;
                                                            }

                                                            // Javascript reGex for Email Validation.
                                                            var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; 
                                                            var email = document.forms['details']["email"].value;
                                                            if (email.length <30 || email.value.match(regEmail)){
                                                                seterror("email", "*Email length is too long");
                                                                returnval = false;
                                                            }

                                                            var phonenumber = document.forms['details']["phonenumber"].value;
                                                            var letters = /^[A-Za-z]+$/;
                                                            if (phonenumber.length != 10 || phonenumber.value.match(letters)) {
                                                                seterror("phonenumber", "*Phone number should be of 10 digits! & should be only numbers");
                                                                returnval = false;
                                                            }
                                                            return returnval;
                                                        }
                                                    </script>


                                                </div>

                                            </div>
                                            <!-- /centered buttons -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /form -->

<!--                                 
                                php
                                 include_once('candidate_get_data.php');
                                php

 -->
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
    }
    check_Candidate_id(101);
}

?>