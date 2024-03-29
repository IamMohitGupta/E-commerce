<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Vishal">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home Page-CORO-FY</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="boot2.css">
</head>
<body>
<!--
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <a class="navbar-brand" href="#">Coro-Fy</a>

  Toggler/collapsibe Button
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

   Navbar links
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.html">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
   -->
   <div class="jumbotron">
      <h1 class="display-3">Your one stop for Covid protection</h1>
      <h3 class="lead">We care for you and your needs ;)</h3>
      <hr class="my-2">
      <!-- <p class="lead">
        <a  type="button" class="btn btn-danger" href="signup.html" role="button"> Sign Up </a>
        <a  type="button" class="btn btn-warning"  href="login.php" role="button">Sign In </a>
      </p> -->
      <br><br>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--<a class="navbar-brand" href="#">Navbar</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">My Cart</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="Covid_predictor_pg1.html">Covid Predictor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Covid-19/index.html">Covid Stats</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="info.html" target="_blank">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Covid_predictor_pg1.html">Predictor</a>
            </li>
          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
        </div>
      </nav>
    </div>
<?php
  require 'config.php';
  $sql="SELECT * FROM product";
  $result=mysqli_query($conn,$sql);
?>
<div class="container">
  <div class="row">
    <?php
    while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-lg-4 mt-3 mb-3">
      <div class="card-deck">
        <div class="card border">
          <img src="<?= $row['product_image']; ?>" class="card-iamge-top" height="320">
          <h5 class="card-title">Product : <?= $row['product_name']; ?></h5>
<!--           <button type="submit" class="btn btn-warning btn-block btn-lg">Add to cart</button>
 -->          <a href="order.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block btn-lg">Buy Now</a>

        </div>
      </div>
    </div>

  <?php } ?>
  </div>
</div>
<!--  Page Footer -------------------------------------------------------->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">OUR TEAM</h5>
        <ul>
            <li>Mohit Gupta</li>
	         <li>Dhruvil Dave</li>
           <li>Kumar Abhijeet</li>
           <li>Shreyash Vardhan</li>
	       </ul>


      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3" >

        <!-- Links -->
        <h5 class="text-uppercase">OUR SERVICES</h5>

        <ul class="list-unstyled">
          <li>
            BUY PRODUCTS
          </li>
          <li>
            CHECK UP
          </li>
          <li>
            STATISTICS
          </li>
          <li>
            INFO
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">CONTACT US</h5>

        <ul class="list-unstyled">
          <li>
            7718899616
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
     There is no Copyright
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>
