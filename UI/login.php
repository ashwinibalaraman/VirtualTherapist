
<?php
session_start();
require_once 'dbconfig.php';
//session_unset(); 
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


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Automated Psychiatric Diagnosis</title>

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
      <link href="../carousel.css" rel="stylesheet">
    </head>

    <body background="../img/backgrounds/1.jpg"ng-app="">
  
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script></span>

  <div ng-include='"../templates/header.php"'></div>


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
           <?php

           $success = false;
           try {

  	// Connect to the database.
	//$con = new PDO("mysql:host=localhost;dbname=patientsdb",
		//	"datamass", "sesame");

            $con->setAttribute(PDO::ATTR_ERRMODE,
              PDO::ERRMODE_EXCEPTION);


            $error = "" ;
            if (empty($_POST["email"]))
            {

             $error = "Name is required";
           }
           elseif (empty($_POST["password"]))
           {
             $error = "Password is required";
           }
           if (isset($_POST["email"]) && isset($_POST["password"]))
           {
             $myusername=filter_input(INPUT_POST, "email");
             $mypassword=filter_input(INPUT_POST, "password");

             if ($error == "")
             {
   //$file = fopen("userdb.txt", "r");
              $query = "SELECT * from Users where userEmail = :email
              and userPass = :pwd";
	// Query the database.
              $ps = $con->prepare($query);
              $ps->execute(array(':email' => $myusername, ':pwd' => $mypassword));
              $data = $ps->fetchAll(PDO::FETCH_ASSOC);							  
              if($data)
              {
                $success = true;
              }
              else{
                $error = "Incorrect credentials. Please try again.";
              }
            }
          }
        }
        catch(PDOException $ex) {
         echo 'ERROR: '.$ex->getMessage();
       }
       ?>                    
       <?php if($success == false):?>

        <?php if(($error != "" ) || $success == false): ?>
          <!-- /.content-section-a -->
          <div class="top-content">

            <div class="inner-bg">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">

                    <div class="form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                        <p class="alert-danger"> <?php echo $error;?></p>
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
                </div>
              </div>
            </div>
          </div>
          <?php endif;?> 
        <?php endif; ?>
        <?php if($success == true): $_SESSION["username"] = $myusername; ?>
         <h3>Login Successful. Check your email for the invite to start chatting! </h3>        
         <?php
         $curl = curl_init();
         $url = 'https://slack.com/api/users.admin.invite?token=xoxp-97989015904-97989015968-98102600353-ef1ee496d6a5a3be8311ba086098a4d2&email=';
         $url .= $data[0]["userEmail"];
         curl_setopt($curl, CURLOPT_URL, $url);
         curl_exec($curl);
         curl_close($curl);
         ?>	   
       <?php endif; ?>
     </div>

   </div>
 </div>

</div>



<!-- Javascript -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>
<script src="../js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="js/placeholder.js"></script>
            <![endif]-->

          </body>

          </html>