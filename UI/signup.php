
<?php
session_start();
require_once 'dbconfig.php';
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

  <style>
   .error {color: #FF0000;}
 </style>
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
             <h2>Patient Details</h2>
             <div class="description">

             </div>
           </div>
         </div>

         <div class="row">

           <?php
           $success = false;
           try {
  	// Connect to the database.
	//$con = new PDO("mysql:host=localhost;dbname=patientsdb",
		//	"datamass","sesame");
             $con->setAttribute(PDO::ATTR_ERRMODE,
               PDO::ERRMODE_EXCEPTION);


             $error = "";
             if (empty($_POST["name"]))
             {
               $error = "Name is required";
             }
             elseif (empty($_POST["password"]))
             {
               $error = "Password is required";
             }
             elseif (empty($_POST["email"]))
             {
              $error = "Email is required";
            }
            if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"]))
            {
             $myusername=filter_input(INPUT_POST, "name");
             $mypassword=filter_input(INPUT_POST, "password");
             $email = filter_input(INPUT_POST, "email");
             if ($error == "")
             {

              $query = "SELECT * from Users where userEmail = :email";
              $ps = $con->prepare($query);
              $ps->execute(array(':email' => $email));
              $data = $ps->fetchAll(PDO::FETCH_ASSOC);                
              if($data)
              {
                $error = "Email address already in use";
              }
}if ($error == ""){
              $data = array($myusername, $mypassword,$email); 
              $query = "INSERT INTO Users (firstName,userPass,userEmail) VALUES(?,?,?)";
	// Query the database.
              $ps = $con->prepare($query);

              $ps->execute($data);
              $success = true;
            }
          }
        }
        catch(PDOException $ex) {
         echo 'ERROR: '.$ex->getMessage();
       }
       $con = null;
       ?>
       <?php if($success == false):?>
<?php if(($error != "" ) || $success == false): ?>
       <center>

        <!-- Top content -->
        <div class="top-content">

          <div class="inner-bg">
            <div class="container">



             <div class="row">


              <div class="col-sm-6 col-sm-offset-3 " >

               <div class="form-box">
                <div class="form-top">
                 <div class="form-top-left">
                   <p class="alert-danger"><?php echo $error;?></p>
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
<?php endif;?> 
  <?php endif; ?>   
  <?php if($success == true):?>							


   <div class="top-content">

            <div class="inner-bg">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">

                    <div class="form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                        <p class="alert-danger"> <?php echo $error;?></p>
                          <h3>Registration Successful! Please Login</h3>

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
                  </div>
                </div>
              </div>
            </div>
          </div>


<?php endif; ?>	


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