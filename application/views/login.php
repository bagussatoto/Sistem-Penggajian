<!DOCTYPE html>
<html>
<head>
  <title>Login | Aplikasi Penggajian</title>
  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class="img">
      <img src="<?php echo base_url(); ?>assets/img/payroll.svg">
    </div>
    <div class="login-content">
      <form class="user" method="POST" action="<?php echo base_url('login') ?>">
        <img src="<?php echo base_url(); ?>assets/img/avatar.svg">
        <h2 class="title">APLIKASI PENGGAJIAN</h2>
        <?php echo $this->session->flashdata('pesan')?>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username <?php echo form_error('username', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="username">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password <?php echo form_error('password', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="password" class="input" name="password">
                 </div>
              </div>
              <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
