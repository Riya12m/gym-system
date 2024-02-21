<?php session_start();
include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Visit codeastro.com for more projects -->

<head>
  <title>Gym System Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-login.css" />
  <link href="font-awesome/css/fontawesome.css" rel="stylesheet" />
  <link href="font-awesome/css/all.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <style>
    body {
      /* Set background image */
      background-image: url('akash5.jpg');

      /* Set background image to cover the entire viewport */
      background-size: cover;

      /* Center the background image */
      background-position: center;

      /* Optional: Add a background color as a fallback */
      background-color: #f0f0f0;

      /* Fix background image when scrolling */
      background-attachment: fixed;
    }

    /* Style for the footer */
    footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: ;
      color: #fefcfc;
      text-align: center;
      padding: 10px;
    }
    /* .div{
      background-size: 50% 50% ;
      border-radius: 20px;
      box-shadow: 3px 6px 9px rgba(0,0,0,.3);
    } */
    #loginbox {
    height: 400px; /* Adjust the height value as needed */
    width: 500px; /* Adjust the width value as needed */
}
  </style>



</head>

<body>

  <div id="loginbox"  >
    <form id="loginform" method="POST" class="form-vertical" action="#">
      <div class="control-group normal_text">
        <h3><img src="akash1.jpg" alt="Logo" width="80" height="100" /> </h3>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on bg_lg"><i class="fas fa-user-circle"></i></span><input type="text" name="user"
              placeholder="Username" required />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on bg_ly"><i class="fas fa-lock"></i></span><input type="password" name="pass"
              placeholder="Password" required />
          </div>
        </div>
      </div>
      <div class="form-actions center">
        <!-- <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span> -->
        <!-- <input type="submit" class="button" title="Log In" name="login" value="Admin Login"></input> -->
        <button type="submit" class="btn btn-block btn-large btn-info" title="Log In" name="login"
          value="Admin Login">Admin Login</button>
        <div class="pull-left">
          <a href="customer/index.php">
            <h6>Customer Login</h6>
          </a>
        </div>

        <div class="pull-right">
          <a href="staff/index.php">
            <h6>Staff Login</h6>
          </a>
        </div>
        

      </div>
      <br>
    <b/r>
    <br>
    <b/r>
    <br>
    <b/r>
    <br>
    <b/r>
    <br>
    <b/r>

    </form>
    <?php
    if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($con, $_POST['user']);
      $password = mysqli_real_escape_string($con, $_POST['pass']);

      $password = md5($password);

      $query = mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
      $row = mysqli_fetch_array($query);
      $num_row = mysqli_num_rows($query);

      if ($num_row > 0) {
        $_SESSION['user_id'] = $row['user_id'];
        header('location:admin/index.php');

      } else {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                                Invalid Username and Password
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
      }
    }
    ?>


  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/matrix.login.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/matrix.js"></script>
  <footer>
    <style>
      ul {
        margin: 0px;
        padding: 0px;
      }


      .footer-section {
        background: #151414;
        position: relative;
      }

      .footer-cta {
        border-bottom: 1px solid #373636;
      }

      .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
      }

      .cta-text {
        padding-left: 15px;
        display: inline-block;
      }

      .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
      }

      .cta-text span {
        color: #757575;
        font-size: 15px;
      }

      .footer-content {
        position: relative;
        z-index: 2;

      }

      .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
      }

      .footer-logo {
        margin-bottom: 30px;

      }

      .footer-logo img {
        max-width: 200px;
      }

      .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #7e7e7e;
        line-height: 28px;
      }

      .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
      }

      .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
      }

      .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
      }

      .facebook-bg {
        background: #3B5998;
      }

      .twitter-bg {
        background: #55ACEE;
      }

      .google-bg {
        background: #DD4B39;
      }

      .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
      }

      .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
      }

      .footer-widget ul li {
        display: inline-block;
        float: left;
        width: 50%;
        margin-bottom: 12px;
      }

      .footer-widget ul li a:hover {
        color: #ff5e14;
      }

      .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
      }

      .subscribe-form {
        position: relative;
        overflow: hidden;
      }

      .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
      }

      .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
      }

      .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
      }

      .copyright-area {
        background: #202020;
        padding: 25px 0;
      }

      .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
      }

      .copyright-text p a {
        color: #ff5e14;
      }

      .footer-menu li {
        display: inline-block;
        margin-left: 20px;
      }

      .footer-menu li:hover a {
        color: #ff5e14;
      }

      .footer-menu li a {
        font-size: 14px;
        color: #878787;
      }

      footer {
        display: flex;
        justify-content: center;
        align-items: center;
        background-attachment: fixed;
        height: 60px;
        /* adjust the height as needed */
      }

      #copyright,
      ul {
        display: inline-block;
        vertical-align: middle;
      }

      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      li {
        display: inline-block;
        padding-left: 10px;
        margin-left: 8px;
        border-left: 1px solid #000;
      }

      li:first-child {
        border: none;
        padding-left: 0;
      }

      a {
        text-transform: uppercase;
        color: #FD6258;
        text-decoration: none;
      }

      footer {
        background-image: url("akash14.jpg");
        -webkit-background-size: 20%;
        -moz-background-size: 20%;
        -o-background-size: 20%;
        background-size: 10%;

      }
    </style>
    
    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
      <div class="footer-menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="footer.php">
              <h6>Developers</h6>
            </a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Policy</a></li>
          <li><a href="#">Contact</a></li><br>
        </ul>
      </div>
    </div>
  </footer>
</body>
<!-- Visit codeastro.com for more projects -->

</html>