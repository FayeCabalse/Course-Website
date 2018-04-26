<?php include('servercon.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Student Sign Up</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="header">

	  <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 box">
            <h1 class="mb-5">Welcome to Webtech</h1>
            <h2 class="mb-5">Register your account</h2>
            <form action="register.php" method="POST">
              <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Full Name</label>
                      <input type="fullname" id="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-12 form-group">
                      <label for="name">Desired Username</label>
                      <input type="username" id="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" id="name" class="form-control ">
                    </div>
                  </div>
                   <div class="row mb-2">
                    <div class="col-md-12 form-group">
                      <label for="name">Confirm Password</label>
                      <input type="confirmedpassword" id="name" class="form-control ">
                    </div>
                  </div>
                   <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Email</label>
                      <input type="email" id="name" class="form-control ">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="sign_up_user" type="submit" value="Sign Up" class="btn btn-primary">
                    </div>
                  </div>
                  <p>
                    Already a member? <a href="login.php">Sign in</a>
                  </p>
                </form>
          </div>
        </div>
      </div>
    </section>
</div>
</body>
 <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
</html>


