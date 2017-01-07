<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
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

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body margin="25px" ng-app="">

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

  <div ng-include='"templates/header.php"'></div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/first_steps.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>We can help!</h1>
              <p>If you're experiencing depression or anxiety, it can be hard to take that first step in getting help. 
<br>Our app could help in taking the first step.</p>
              <p><a class="btn btn-lg btn-primary" href="quiz.html" role="button">Take a test</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/dep2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Anxiety</h1>
              <p>Self-harm/self-injury might be part of your experience now but it doesn't have to be in the future –
you can learn to care for yourself emotionally and physically. <br> The future is bright.</p>
              <p><a class="btn btn-lg btn-primary" href="Anxiety.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/hope.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Depression</h1>
              <p>Almost eight Americans take their own lives every day. 
For every suicide, there are tragic ripple effects for family, friends, colleagues and the broader community.
<br>There's Hope.... Think again!!!!!</p>
              <p><a class="btn btn-lg btn-primary" href="Depression.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="https://www.beyondblue.org.au/images/default-source/3.the-facts/self-harm-web.jpg?sfvrsn=0&size=460" alt="Generic placeholder image" width="140" height="140">
          <h2>The App</h2>
          <p>Our trained model has learned using actual patient-doctor transcripts. This app is built with Machine Learning algorithms. it will serve as your companion to help you get a sense of direction as you take the first step to discover your mental health. </p>
          <p><a class="btn btn-default" href="app.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/slackbot.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Slackbot</h2>
          <p>The Slackbot which is an integration with Slack interface helps you chat with it like you would chat with a friend. You can be free to pour out your deeply burried feelings and get the help you need. It is absolutely secure as you will converse over a private channel.</p>
          <p><a class="btn btn-default" href="slackbot.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/statistics.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Statistics</h2>
          <p>The statistics gives a visual representation of whether you may have a disorder. It shows where you stand among other people. It helps you decide if you need to get professional help based on the level of severity.</p>
          <p><a class="btn btn-default" href="chart.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

     

      

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh Depression and Anxiety <span class="text-muted"><br>How it affects us</span></h2>
          <p class="lead">On average, 1 in 6 people – 1 in 5 women and 1 in 8 men – will experience depression at some stage of their lives. 
There are different types of depression. Symptoms can range from minor through to very severe.
</p><p class="lead">
Anxiety is the most common mental health condition in United States. 
On average, 1 in 4 people – 1 in 3 women and 1 in 5 men – will experience anxiety. 
There are many types of anxiety, each with a range of specific symptoms.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="images/stats2.png">
        </div>
      </div>
<hr class="featurette-divider">
       <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Women Beware! <span class="text-muted"><br>But don't let it win over you</span></h2>
          <p class="lead">Women are more likely to experience depression and anxiety during pregnancy and the year following birth.
Almost 1 in 10 women experience antenatal depression, and 1 in 7 in the postnatal period.
Anxiety is likely to be at least as common.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="images/stats1.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">If you have these symtoms.. <span class="text-muted">..never despair</span></h2>
          <p class="lead">Recovery from depression and anxiety can take time and everyone's journey is different. 
While psychological and/or medical treatment can help with your recovery,
there are many other things you can do to get better and stay well.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="images/stats4.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">You are not alone.<span class="text-muted"><br>Join the fight!</span></h2>
          <p class="lead">In United States, it's estimated that 45 per cent of people 
will experience a mental health condition in their lifetime.
In any one year, around 1 million United States adults have depression, and over 2 million have anxiety.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="images/stats3.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="http://www.healthline.com/health/depression/facts-statistics-infographic#6">Images Source</a></p>
        <!--<p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>-->
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
