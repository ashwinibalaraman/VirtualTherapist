
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Details</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Automated Psychiatric Diagnosis</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->

              <!-- Custom styles for this template -->
              <link href="carousel.css" rel="stylesheet">

          </head>

          <body background="img/backgrounds/1.jpg"ng-app="">
  
  

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script></span>

  <div ng-include='"templates/header.php"'></div>

<center>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Automated Psychiatric Analysis</strong>
                         <h2>Chat with our Virtual Therapist</h2>
                         <div class="description">

                         </div>
                     </div>
                 </div>

                 <div class="row">
                    <div class="col-sm-5">

                     <div class="form-box">
                      <div class="form-top">
                       <div class="form-top-left">
                        <h3>Login</h3>

                    </div>

                </div>
                <div class="form-bottom">
                    <form name="form1" method="post" action="login.php">
                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                        </div>
                        <button type="submit" class="btn">Login</button>
                    </form>
                </div>
            </div>

            <div class="social-login">
              <h3>Or use Login with:</h3>
              <div class="social-login-buttons">
               <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                <i class="fa fa-facebook"></i> Facebook
            </a>
            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                <i class="fa fa-twitter"></i> Twitter
            </a>
            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                <i class="fa fa-google-plus"></i> Google Plus
            </a>
        </div>
    </div>

</div>

<div class="col-sm-1 middle-border"></div>
<div class="col-sm-1"></div>

<div class="col-sm-5">

 <div class="form-box">
  <div class="form-top">
   <div class="form-top-left">
    <h3>Sign up now</h3>
    <p>Fill in the form below to get a quick access:</p>
</div>
<div class="form-top-right">
    <i class="fa fa-pencil"></i>
</div>
</div>
<div class="form-bottom">    
    <form action="signup.php" method="post">
      <div class="form-group">
        <label class="sr-only" for="form-first-name">Name</label>
        <input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name" required>
    </div>

    <div class="form-group">
        <label class="sr-only" for="form-email">Email</label>
        <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
    </div>

    <div class="form-group">
        <label class="sr-only" for="form-password">Password</label>
        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
    </div>
    <button type="submit" class="btn">Sign me up!</button>

</form>


</div>
</div>

</div>
</div>

</div>
</div>

</div>



<!-- Javascript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>

                <!--[if lt IE 10]>
                    <script src="js/placeholder.js"></script>
                    <![endif]-->

                </body>

                </html>