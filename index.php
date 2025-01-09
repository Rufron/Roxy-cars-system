<?php
  session_start();
  include('admin/vendor/inc/config.php');
 // include('vendor/inc/checklogin.php');
  //check_login();
 // $aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
<!--End Navigation-->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('vendor/img/home-img.png')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/vehicle-3.png')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/vehicle-2.png')">
        </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Roxy Cars website</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Why Us</h4>
          <div class="card-body">
            <p class="card-text">We create accountability in the transport sector, enhance mobility and ease of accessing various transport modes</p>
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Core Values</h4>
          <div class="card-body">
            <p class="card-text">
              Excellence, Trust and Openness, Integrity, Take Responsibility, Customer Orientation             
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Portfolio Section -->
    <h2 class="center">Most Sold vehicles</h2>
    <!--Portfolio Section -->
    <hr>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-1.png" alt=""></a>
          <h3>Mercedes-Benz S-Class S560 4MATIC Sedan</h3>
         <p>Mileage: 32,748 miles</p>
         <p>Price: $87,945</p>
         <p>Type: Sedan</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-2.png" alt=""></a>
          <h3>Kia Sportage LX AWD</h3>
           <p>Mileage: 29,003 miles</p>
           <p>Price: $19,989</p>
           <p>Type: Compact SUV</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-3.png" alt=""></a>
          <h3>Toyota RunX 1.8 S</h3>
          <p>Mileage: 85,039 km</p>
          <p>Price: R54,500</p>
         <p>Type: Hatchback</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-4.png" alt=""></a>
          <h3>Audi Q7 Prestige</h3>
          <p>Mileage: 27,604 miles</p>
          <p>Price: $56,990</p>
          <p>Type: SUV</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-5.png" alt=""></a>
          <h3>Kia Sportage rx RWD</h3>
           <p>Mileage: 19,003 miles</p>
           <p>Price: $19,989</p>
           <p>Type: Compact SUV</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/car-6.png" alt=""></a>
          <h3>Honda Civic LX Sedan</h3>
          <p>Mileage: 18,227 miles</p>
         <p>Price: $19,945</p>
         <p>Type: Sedan</p>
        </div>
      </div>
      
      
    </div>
    <!-- /.row -->


    <hr>
    <h1 class="my-4">Client Testimonials</h1>

    <div class="row">
    <?php

      $ret="SELECT * FROM tms_feedback where f_status ='Published' ORDER BY RAND() LIMIT 3 "; //get all feedbacks
      $stmt= $mysqli->prepare($ret) ;
      $stmt->execute() ;//ok
      $res=$stmt->get_result();
      $cnt=1;
      while($row=$res->fetch_object())
    {
    ?>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?php echo $row->f_uname;?></h4>
          <div class="card-body">
            <p class="card-text"><?php echo $row->f_content;?></p>
          </div>
          </div>
      </div>
    <?php }?>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>
  <!--.Footer-->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
