<?php session_start();
require "../connection.php";

if (isset($_SESSION["admin"])) {

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

        <title>Admin Panel</title>

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
                        <ul class="navbar-nav float-end">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle" width="31">
                                    <label></label>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="adminProfile.php"><i class="ti-user m-r-5 m-l-5"></i>
                                        My Profile</a>
                                    <a class="dropdown-item" onclick="asignOut();"><i class="ti-user m-r-5 m-l-5"></i>
                                        Log out</a>

                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
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
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="adminDashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ManageStudents.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">ManageStudents</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ManageTeachers.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">ManageTeachers</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ManageAcademic.php" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">ManageAcademics</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="resultscheck.php" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">resultscheck</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="adminProfile.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">adminProfile</span></a></li>

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
                <div class="page-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 d-flex align-items-center">
                                    <li class="breadcrumb-item"><a href="admin.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Academics</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 fw-bold">Manage Academics</h1>
                        </div>

                    </div>
                </div>
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
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex">
                                        <div>
                                            <h4 class="card-title">Send invitations to Academics</h4>

                                        </div>

                                    </div>
                                    <!-- title -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-hover align-middle text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">ID</th>
                                                    <th class="border-top-0">Name</th>
                                                    <th class="border-top-0">email</th>
                                                    <th class="border-top-0">Invite</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $rs = Database::search("SELECT * From `academic` WHERE `status_id`='2' ");
                                                $n = $rs->num_rows;
                                                for ($y = 0; $y < $n; $y++) {
                                                    $academic = $rs->fetch_assoc();
                                                ?>

                                                    <tr>
                                                        <td>

                                                            <div class="">
                                                                <h4 class="m-b-0 font-16"><?php echo $academic["id"] ?></h4>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $academic["full_name"] ?></td>
                                                        <td><?php echo $academic["email"] ?></td>
                                                        <td>


                                                            <label class="badge bg-success" onclick='academicinvite(<?php echo $academic["id"] ?>)'>invit</label>



                                                        </td>

                                                    </tr>
                                                <?php

                                                } ?>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div>
                                </div>
                            </div>
                        </div>

                        <!-- ============================================================== -->
                        <!-- Table -->

<!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex">
                                        <div>
                                            <h4 class="card-title">Academics  for a grade</h4>

                                        </div>

                                    </div>
                                    <!-- title -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-hover align-middle text-nowrap">

                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <select class="form-select" id="acadamicgrade">
                                                            <option value="0"> Select Grade</option>
                                                            <?php
                                                            $rs = Database::search("SELECT * FROM `grade`");
                                                            $n = $rs->num_rows;
                                                            for ($x = 0; $x < $n; $x++) {
                                                                $grade = $rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $grade["id"] ?>"> <?php echo $grade["name"] ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-5">
                                                        <select class="form-select" id="acadamic">
                                                          
                                                            <option value="0"> Select Academic officer</option>
                                                            <?php
                                                            $rs = Database::search("SELECT * FROM `academic`");
                                                            $n = $rs->num_rows;
                                                            for ($x = 0; $x < $n; $x++) {
                                                                $academic = $rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $academic["id"] ?>"> <?php echo $academic["full_name"] ?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-2 d-grid">
                                                        <button class="btn btn-info" onclick="addGradeAcademic();">Add</button>
                                                    </div>
                                                </div>


                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <script src="..//script.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "adminsignin.php";
    </script>
<?php
}
?>