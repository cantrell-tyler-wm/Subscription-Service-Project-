<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$localhost;dbname=subservice", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<!-- <?php
      $from = 'test@aav.com';
      $subject = $_POST['subject'];
      $text = $_POST['subservice'];

      $dbc = mysqli_connect('localhost','root','','subservice')
        or die('Error connecting to MySQL server');
      
      $query = "SELECT * FROM email_list";
      $result = mysqli_query($dbc,$query)
        or die('Error querying database.');

      while($row = mysqli_fetch_array($result))
      {
        $to = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $msg = "Dear $first_name $last_name,\n$text";
        mail($to,$subject,$msg,'From:' . $from);
        echo 'Email sent to: '.$to.'<br />';
      }
      
      mysqli_close($dbc);
    ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Subscription service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #48A3C8;/* Green */
       background-size: 100%;
       outline-color: white;
  }
  .bg-2 { 
      background-color: #273D62; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #273D62; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#packages">subscription</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">home <span class="glyphicon glyphicon-globe"></span></a></li>
        <li><a href="signin.php">Sign in <span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="cart.php">My cart<span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center" outline-color="white">
  <h3 class="margin"></h3>
  <img src="http://thesocialmediamonthly.com/wp-content/uploads/2015/08/photo.png" class="img-responsive img-circle margin" style="display:inline"alt="Bird" width="350" height="350">
  <h3></h3>


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">subscriptions</h3>
  <p>Buy a subscription</p>
  <a href="signup.php" class="btn btn-default btn-lg">
    <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user"></span> register
        </button>
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center" id="packages">    
  <h3 class="margin">packages</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>package 1</h3>
      <p>With package 1 you get... </p>
      <img src="https://theverticalview.files.wordpress.com/2012/11/brown-paper-package.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <h3>package 2</h3>
      <p>With package 2 you get...</p>
      <center>
      <img src="http://cdn2.hubspot.net/hub/213893/file-52572458-jpg/images/small-package.jpg" class="img-responsive margin" style="width:75%"  alt="Image"> 
      </center>
    </div>
    <div class="col-sm-4">
    <h2>more coming soon?</h2> 
      <p></p>
      <center>
      <img src="http://vignette3.wikia.nocookie.net/spore/images/6/6c/Question-mark.png/revision/latest?cb=20110427230528" class="img-responsive margin" style="width:50%" alt="Image">
      </center>
    </div>
  </div>
</div>


    

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Tyler Cantrell 2016</p> 
</footer>

</body>
</html>
