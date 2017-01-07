<?php

session_start();
?>

<div class="navbar-wrapper">
  <div class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top topnav" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">VirtualTherapist</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a target="_blank" href="http://resources.beyondblue.org.au/prism/file?token=BL/0885">Download Booklet</a></li>

          <?php

          if (isset($_SESSION["username"])){
            echo '<li><a href="logout.php">LogOut</a></li>';
          }
          else{
            echo '<li><a href="PatientDetails.php">LogIn</a></li>';
          }

          ?>

        </ul>
      </div>
    </div>
  </nav>

</div>
</div>