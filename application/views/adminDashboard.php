<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Dashboard</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                    	<span>
                            <img alt="image" width="40%" class="img-circle" src="<?php echo base_url() ?>assets/img/avatar.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php
                            if ($this->session->userdata('name') != '') {
                                echo $this->session->userdata('name');
                            }
                            ?></strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">                            <li><a href="<?php echo base_url()?>admin/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        OVS
                    </div>
                </li>
                  <li  class="active">
                    <a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-tachometer"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                
                <li>
                    <a href="<?php echo base_url()?>admin/enrollCandidate"><i class="fa fa-address-book-o"></i> <span class="nav-label">Enrollment</span></a>
                </li>             

                <li>
                    <a href="<?php echo base_url()?>admin/enrolledCandidates"><i class="fa fa-user-circle"></i> <span class="nav-label">Update</span></a>
                </li>
                <li>
                    <a href="grid_options.html"><i class="fa fa-user-times"></i> <span class="nav-label">Delete</span></a>
                </li>
                 <li>
                    <a href="grid_options.html"><i class="fa fa-diamond" style="color: yellow;"></i> <span class="nav-label">Results</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                   </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Online Voting System.</span>
                </li>
                               <li>
                    <a href="<?php echo base_url()?>admin/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

            <div class="wrapper wrapper-content animated fadeIn">
                   
                </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> B* &copy; 2018
            </div>
        </div>
        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url()?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>


</body>
</html>
