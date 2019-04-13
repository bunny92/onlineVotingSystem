<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Login</title>

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h4 class="logo-name">OV</h4>       
            </div>
            <h3>Welcome to Online Voting System</h3>
            <p>Login in as Admin. To see it in action.</p>
    <form class="m-t" role="form"  action="<?php echo base_url() ?>admin/authenticate_user" method="POST">
                <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                <input type="password" class="form-control"  name="passwordf"  placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Online Voting system for counterfieiting &copy; 2018</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>
      <?php if ($this->session->flashdata('login_error') != '') { ?>
            <script type="text/javascript">
                $.notify({
                    // options
                    title: '<strong>Error..!</strong>',
                    message: '<?php echo $this->session->flashdata('login_error'); ?>'
                }, {
                    // settings
                    type: 'danger'
                });
            </script>
        <?php } ?>
</body>

</html>
