<!DOCTYPE html>
<html lang="en">
<?php
include('layouts/header_files.php')
?>
<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
<?php
include('layouts/header_bar.php')
?>
<!-- End Navigation -->

    <!-- Left Sidebar -->
<?php
include('layouts/left_main_sidebar.php')
?>
<!-- End Sidebar -->


    <!-- content-page -->
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Dashboard</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            

                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card-box noradius noborder bg-default">
                            <i class="fa fa-file-text-o float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Users</h6>
                            <h1 class="m-b-20 text-white counter">1</h1>
                            <span class="text-white">1 New User</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card-box noradius noborder bg-danger">
                            <i class="fa fa-bell-o float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
                            <h1 class="m-b-20 text-white counter">0</h1>
                            <span class="text-white">0 New Alerts</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3><i class="fa fa-users"></i> Last Selling Info</h3>
                            </div>

                            <div class="card-body">

                                <table id="LastSellInfo"
                                       class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">ID</th>
                                        <th class="col-md-8">File Name</th>
                                        <th class="col-md-2">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Print File Data</td>
                                            <td><button class="btn btn-success"><a href="files/runfile1.php" target="_blank" class="text-white">Execute</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Print File Data 2</td>
                                            <td><button class="btn btn-success"><a href="files/runfile1.php" target="_blank" class="text-white">Execute</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Print File Data 3</td>
                                            <td><button class="btn btn-success"><a href="files/runfile1.php" target="_blank" class="text-white">Execute</a></button></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div><!-- end card-->
                    </div>
                </div>


            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-page -->


    <!-- Footer bar-page -->
<?php
include('layouts/footer_bar.php')
?>
<!-- END Footer bar-page -->


</div>
<!-- END main -->


<!-- END Java Script for this page -->
<?php

include('layouts/footer_files.php')
?>

<script>
    

</script>
</body>
</html>
