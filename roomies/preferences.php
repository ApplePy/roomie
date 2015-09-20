<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roomies</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script>
    function validateForm() {    
        var projectObj1 = document.forms["myForm"]["optradio"];
        var len1 = projectObj1.length;
        var chosen1 = null;

        var projectObj2 = document.forms["myForm"]["optradio1"];
        var len2 = projectObj2.length;
        var chosen2 = null;

        var projectObj3 = document.forms["myForm"]["optradio2"];
        var len3 = projectObj3.length;
        var chosen3 = null;

        var projectObj4 = document.forms["myForm"]["optradio3"];
        var len4 = projectObj4.length;
        var chosen4 = null;
        
        var info =  [null, null, null, null];

        for (i = 0; i <len1; i++) {
            if (projectObj1[i].checked) {
               chosen1 = projectObj1[i].value
               info[0] = chosen1;
            }
        }
        for (i = 0; i <len2; i++) {
            if (projectObj2[i].checked) {
               chosen2 = projectObj2[i].value
               info[1] = chosen2;
            }
        }
        for (i = 0; i <len3; i++) {
            if (projectObj3[i].checked) {
               chosen3 = projectObj3[i].value               
               info[2] = chosen3;
               
            }
        }
        for (i = 0; i <len4; i++) {
            if (projectObj4[i].checked) {
               chosen4 = projectObj4[i].value               
               info[3] = chosen4;
               
            }
        }

        if (chosen1 == null) {
            alert("Cleanliness was not selected");
            return false;
        }
        else if (chosen2 == null){
          alert("Noise Level was not selected");
          return false;
        }
        else if (chosen3 ==null){
          alert("Your gender was not selected");
          return false;
        }
        else if (chosen4 ==null){
          alert("Gender preference was not selected");
          return false;
        }
        else{
          return true;
        }
    }

    function showValues() {
      var str = $( "form" ).serialize();
      $( "#results" ).text( str );
    }
    $( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues );
    $( "select" ).on( "change", showValues );
    showValues();
    </script>
    <style>
    #nav {
        line-height:30px;
        background-color:black;
        height:100%;
        width:15%;
        float:left;
        padding:5px;        
    }

    </style>

</head>

<body>

  <div id = "nav"><div>
    <div id = "nav2"><div>
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
            
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   <!-- /.intro-header -->

    <!-- Page Content -->

  <a  name="Preferences"></a>
    

        <div class="container" style="text-align:center">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Preferences</h2>
                    <p class="lead">Enter the information accordingly so we can find the best match for you! </p>
                   <div ><form name="myForm" action="db_update.php" onsubmit="return validateForm()" method="post">
                    <p> Cleanliness:   
                    <label class="radio-inline"><input type="radio" name="optradio" value = 1>1</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value = 2>2</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value = 3>3</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value = 4>4</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value = 5>5</label></p> 
                  </div>
                   <div >
                    <p> Noise Level:   
                    <label class="radio-inline"><input type="radio" name="optradio1" value = 1>1</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value = 2>2</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value = 3>3</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value = 4>4</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value = 5>5</label></p> 
                  </div>                  
                   <div >
                    <p> Your Gender   
                    <label class="radio-inline"><input type="radio" name="optradio2" value = "Male">Male</label>
                    <label class="radio-inline"><input type="radio" name="optradio2" value = "Female">Female</label>
                  </div>             
                   <div >
                    <p> Gender Preferences:   
                    <label class="radio-inline"><input type="radio" name="optradio3" value = "Male">Male</label>
                    <label class="radio-inline"><input type="radio" name="optradio3" value = "Female">Female</label>
                    <label class="radio-inline"><input type="radio" name="optradio3" value = "Doesn't matter">Doesn't Matter</label>
                  </div>
                  <div>
                     <input type="submit" class="btn btn-info" value="Submit Button">
                     <p><tt id="results"></tt></p>
                </div>
              </form>
                </div>
            </div>

        
        <!-- /.container -->
    </div>

</body>
</html>