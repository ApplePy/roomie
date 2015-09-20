<?php
echo "Made it!"
exit;
  require_once "match_replacement_funcs.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roomies Match Found!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <style>
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
          width: 70%;
          margin: auto;
      }
  </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="preferences.php">Preferences</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   <!-- /.intro-header -->

    <!-- Page Content -->

  <a  name="Preferences"></a>
    <div class="content-section-a">

        <div class="container" style = "text-align:center">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Matches</h2>
                   
                    <div id="myCarousel" class="carousel slide" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <!--
                              $database = initializeDatabase("completely unnecessary remanent of borrowing code");
                              createEntries($_POST["comma_uid_list"], $directory);
                            -->
                          <!--<div class="item active">
                            <br/>
                            <div style="text-align:center"><p>Match 1</p></div>
                            <img src="pic.jpg" alt="HTML5 Icon" style="width:170px;height:200px;">
                            <p> Name1 <br/>
                              Age1 <br/>
                              Cleanliness: <br/>
                              Noise Level: <br>
                              Gender Preference: <br>
                            </p>
                          </div>

                          <div class="item">
                           <br/>
                            <div style="text-align:center"><p>Match 2</p></div>
                            <img src="pic.jpg" alt="HTML5 Icon" style="width:170px;height:200px;">
                            <p> Name2 <br/>
                              Age2 <br/>
                              Cleanliness: <br/>
                              Noise Level: <br>
                              Gender Preference: <br>
                            </p>
                          </div>

                          <div class="item">
                            <br/>
                            <div style="text-align:center"><p>Match 3</p></div>
                            <img src="pic.jpg" alt="HTML5 Icon" style="width:170px;height:200px;">
                            <p> Name3 <br/>
                              Age3 <br/>
                              Cleanliness: <br/>
                              Noise Level: <br>
                              Gender Preference: <br>
                            </p>
                          </div>

                          <div class="item">
                            <br/>
                            <div style="text-align:center"><p>Match 4</p></div>
                          </div>

                          <div class="item">
                            <br/>
                            <div style="text-align:center"><p>Match 5</p></div>
                          </div>

                          <div class="item">
                            <br/>
                            <div style="text-align:center"><p>Match 6</p></div>
                          </div>

                          <div class="item">
                            <br/>
                            <div style="text-align:center"><p>Match 7</p></div>
                          </div>-->
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        <a href = "preferences.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Contact</button></a>
                      </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
</body>
</html>