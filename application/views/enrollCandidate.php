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
                  <li>
                    <a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-tachometer"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                
                <li class="active">
                    <a href="<?php echo base_url()?>admin/enrollCandidate"><i class="fa fa-address-book-o"></i> <span class="nav-label">Enrollment</span></a>
                </li>             

                <li>
                    <a href="<?php echo base_url()?>admin/enrolledCandidates""><i class="fa fa-user-circle"></i> <span class="nav-label">Update</span></a>
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
                    <div class="row">
                         <div class="col-lg-8 col-lg-offset-2">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title ibox-title-background">
                                    <h5>Candidate Enrollment</h5>

                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config option 1</a>
                                            </li>
                                            <li><a href="#">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <form class="form-horizontal" action="<?php echo base_url()?>admin/upload_document" role="form" method="post" id="authform" enctype="multipart/form-data" >
                                        
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Candidate Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Candidate name" name="candidate_name" id ="candidate_name" required="">
                                    </div>
                                </div> 
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Party Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Party name" name="party_name" id ="party_name" required="">
                                    </div>
                                </div> 
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Constitution Id</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Constitution Id" name="constitution_id" id ="constitution_id" required="">
                                    </div>
                                </div> 
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Serial Number</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Serial Number" name="serial_number" id ="serial_number" required="">
                                    </div>
                                </div>
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Candidate Image</label>

                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="candidate_image" id ="candidate_image" required="">
                                    </div>
                                </div>
                                        <div class="form-group">
                                    <label class="col-sm-4 control-label">Candidate Symbol</label>

                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="party_symbol" id ="party_symbol" required="">
                                    </div>
                                </div>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-4">
                                                <a href="javascript:void(0);" id="submitAuth"
                                                   class="btn btn-primary block full-width m-b">Enroll Candidate
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    <!--                            </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>
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

     <script>

            $(document).ready(function () {
                $("#submitAuth").bind('click', function (e) {

                    e.preventDefault();
                    var candidate_name = $("#candidate_name").val();
                    var party_name = $("#party_name").val();
                    var constitution_id = $("#constitution_id").val();
                    var serial_number = $("#serial_number").val();
                    var regex = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;
                    
                    if (candidate_name.trim().length < 3) {
                        $.notify({
                    // options
                    title: '<strong>Atleast 3 charecters Required</strong>',
                    message: 'Required Candidate Name'
                }, {
                    // settings
                    type: 'danger'
                });
                        return false;
                    } else {
                        if (!regex.test(candidate_name)) {
                            $.notify({
                    // options
                    title: '<strong>Atleast 3 charecters Required</strong>',
                    message: 'Required Candidate Name'
                }, {
                    // settings
                    type: 'danger'
                });
                            return false;
                        }
                    }
                    
                    if (party_name.trim().length < 3) {
                       $.notify({
                    // options
                    title: '<strong>Atleast 3 charecters Required</strong>',
                    message: 'Required Party Name'
                }, {
                    // settings
                    type: 'danger'
                });
                        return false;
                    } else {
                        if (!regex.test(party_name)) {
                            $.notify({
                    // options
                    title: '<strong>Atleast 3 charecters Required</strong>',
                    message: 'Required Party Name'
                }, {
                    // settings
                    type: 'danger'
                });
                            return false;
                        }
                    }
                    
                     if (constitution_id.trim().length < 1) {
                         $.notify({
                    // options
                    title: '<strong>Atleast 2 Digits Required</strong>',
                    message: 'Required Constitution Id'
                }, {
                    // settings
                    type: 'danger'
                });
                        return false;
                    }
                    
                    if (serial_number.trim().length < 1) {
                        $.notify({
                    // options
                    title: '<strong>Atleast 2 Digits Required</strong>',
                    message: 'Required Serial Number'
                }, {
                    // settings
                    type: 'danger'
                });
                        return false;
                    }
                   

                    $("#submitAuth").html('');
                    var input = "<input type='hidden' name='submitAuth' value=1>";
                    $(input).insertAfter("#submitAuth");
                    $("#authform").submit();
                });
            });

        </script>
		 <?php if ($this->session->flashdata('no_message') != '') { ?>
            <script type="text/javascript">
                $.notify({
                    // options
                    title: '<strong>Error..!</strong>',
                    message: '<?php echo $this->session->flashdata('no_message'); ?>'
                }, {
                    // settings
                    type: 'danger'
                });
            </script>
        <?php } ?>
		<?php if ($this->session->flashdata('error_message') != '') { ?>
            <script type="text/javascript">
                $.notify({
                    // options
                    title: '<strong>Error..!</strong>',
                    message: '<?php echo $this->session->flashdata('error_message'); ?>'
                }, {
                    // settings
                    type: 'danger'
                });
            </script>
        <?php } ?>
		<?php if ($this->session->flashdata('success_message') != '') { ?>
            <script type="text/javascript">
                $.notify({
                    // options
                    title: '<strong>Success..!</strong>',
                    message: '<?php echo $this->session->flashdata('success_message'); ?>'
                }, {
                    // settings
                    type: 'success'
                });
            </script>
        <?php } ?>
</body>
</html>
