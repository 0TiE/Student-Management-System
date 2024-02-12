<?php session_start();
require "../connection.php";

if (isset($_SESSION["teacher"])) {
?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
        <meta name="description" content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">

        <title>Teacher | lesson</title>

        <!-- Custom CSS -->
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin6">

                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-start me-auto">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                                </form>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->

                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacherDashboard.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacherassigments.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Assigments</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacherLessons.php" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Lessons</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacherProfile.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</span></a></li>

                        </ul>

                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">

                        <?php


                        $rs = Database::search("SELECT * FROM `teacher_has_subject` WHERE `teacher_id`='" . $_SESSION["teacher"]["id"] . "'");
                        $n = $rs->num_rows;
                        for ($y = 0; $y < $n; $y++) {
                            $subject = $rs->fetch_assoc();
                            $subid =  $subject["subject_id"];
                            $rs1 = Database::search("SELECT * FROM `subject` WHERE `id`='$subid'");
                            $n2 = $rs1->num_rows;
                            $subjectname = $rs1->fetch_assoc();
                        ?>
                            <!-- column -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- title -->
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="card-title fw-bolder">Upload Assigments</h4>
                                                <h4 class="card-title"><?php echo $subjectname["name"] ?></h4>
                                                </h4>
                                            </div>
                                            <!-- <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select shadow-none">
                                                
                                            </select>
                                        </div>
                                    </div> -->
                                        </div>
                                        <!-- title -->
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover align-middle text-nowrap">
                                                <thead>
                                                    <tr>

                                                        <th class="border-top-0">Assigment Name </th>
                                                        <th class="border-top-0">Assigment ID</th>
                                                        <th class="border-top-0">Start Date </th>
                                                        <th class="border-top-0">End Date </th>
                                                        <th class="border-top-0">Upload</th>
                                                        <th class="border-top-0">Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr>

                                                        <td>
                                                            <input class="" type="text" id="name" />
                                                        </td>
                                                        <td>
                                                            <input class="" type="text" id="id" />
                                                        </td>
                                                        <td>
                                                            <input class="" type="date" id="start" />
                                                        </td>
                                                        <td>
                                                            <input type="date" id="end" />
                                                        </td>
                                                        <td>
                                                            <input class="d-none" type="file" id="assigment" accept="application/pdf" />
                                                            <label class="btn btn-secondary " for="assigment" onclick="uploadAssigment('<?php echo $subjectname['id'] ?>');">Upload Assigment </label>
                                                        </td>
                                                        <td>
                                                            <input class="d-none" type="file" id="lesson" accept="application/pdf" />
                                                            <label class="btn btn-dark " for="lesson" onclick="uploadLesson();">Update </label>
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                            ?>



                            </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">

                        <?php


                        $rs = Database::search("SELECT * FROM `teacher_has_subject` WHERE `teacher_id`='" . $_SESSION["teacher"]["id"] . "'");
                        $n = $rs->num_rows;
                        for ($y = 0; $y < $n; $y++) {
                            $subject = $rs->fetch_assoc();
                            $subid =  $subject["subject_id"];
                            $rs1 = Database::search("SELECT * FROM `subject` WHERE `id`='$subid'");
                            $n2 = $rs1->num_rows;
                            $subjectname = $rs1->fetch_assoc();
                        ?>
                            <!-- column -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- title -->
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="card-title fw-bolder text-purple">View Submitted Assigments</h4>
                                                <h4 class="card-title"><?php echo $subjectname["name"] ?></h4>
                                                </h4>
                                            </div>

                                        </div>
                                        <!-- title -->
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover align-middle text-nowrap">
                                                <thead>
                                                    <tr>

                                                        <th class="border-top-0">Assigment Name </th>
                                                        <th class="border-top-0">Assigment ID</th>
                                                        <th class="border-top-0">Student ID </th>
                                                        <th class="border-top-0">View </th>
                                                        <th class="border-top-0">Marks</th>
                                                        <th class="border-top-0">Update</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php

                                                    $result = Database::search("SELECT * FROM `assigment` WHERE `subject_id`='" . $subid . "'AND  `teacher_id`='" . $_SESSION["teacher"]["id"] . "'");
                                                    $z = $result->num_rows;
                                                    for ($v = 0; $v < $z; $v++) {
                                                        $submit = $result->fetch_assoc();
                                                        $result1 = Database::search("SELECT * FROM `assigment_submit` WHERE `assigment_id`='" . $submit["id"] . "' AND `status`='2'");
                                                        $p = $result1->num_rows;
                                                        for ($v = 0; $v < $p; $v++) {
                                                            $submited = $result1->fetch_assoc();
                                                    ?>
                                                            <tr>

                                                                <td>
                                                                    <?php echo  $submit["assigment_name"] ?>
                                                                </td>

                                                                <td>
                                                                    <?php echo $submited["assigment_id"] ?>
                                                                </td>

                                                                <td>
                                                                    <?php echo $submited["student_id"] ?>
                                                                </td>

                                                                <td>
                                                                    <a class="badge bg-purple" href="<?php echo $submited["path"] ?>">View</a>
                                                        </td>
                                                                <td>
                                                                    <input id="marks" type="number" />
                                                                </td>

                                                                <td>
                                                                    <label class="btn btn-dark " onclick="uploadLesson();">Update </label>
                                                                </td>

                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                            ?>



                            </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../dist/js/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../dist/js/custom.js"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
        <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
        <script src="../script.js"></script>
    </body>

    </html><?php

        } else {
            ?>
    <script>
        window.location = "teachersignin.php";
    </script>
<?php
        } ?>