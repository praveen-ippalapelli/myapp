<!DOCTYPE html>
<html>
<head>
  <title>Training Yard</title>
  <?php include "partials/commonhead.php" ?>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <style>
.blog-img{
    border-radius:10px;
}
.blog-card:hover {
    box-shadow:-2px 4px 11px 2px;
}
  </style>
</head>
<body>
  <?php include "partials/header.php" ?>
  <div class="banner-block">
    <div class="md-banner home-banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 cr-img"  src="images/man-1456954_1280.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
              <h5 class="caption-title">Batting Cages</h5>
              <p>Turf rentals are available for skill work, practices, small group training</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 cr-img" src="images/1.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <h5 class="caption-title">Batting Cages</h5>
              <p>Turf rentals are available for skill work, practices, small group training</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 cr-img" src="images/4.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <h5 class="caption-title">Batting Cages</h5>
              <p>Turf rentals are available for skill work, practices, small group training</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 cr-img" src="images/5.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <h5 class="caption-title">Batting Cages</h5>
              <p>Turf rentals are available for skill work, practices, small group training</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class = "book-form">
     <form action="list" class="row">
       <!--<div class="form-group col-lg-4">
         <input type="text" class="form-control" id="" aria-describedby="" placeholder="Name">
       </div>-->
      <div class="form-group col-lg-4">
       <select class="form-control" name="category" id="exampleFormControlSelect1">
         <option value="Battle Cage Rental">Battle Cage Rental</option>
         <option value="Turf Rental">Turf Rental</option>
       </select>
     </div>
     <div class="form-group col-lg-4">
       <select class="form-control" name="year" id="exampleFormControlSelect1">
         <option value="2020">2020</option>
         <option value="2021">2021</option>
         <option value="2022">2022</option>
       </select>
     </div>
     <div class="form-group col-lg-4">
       <select class="form-control" name="month" id="exampleFormControlSelect1">
         <option>- Month -</option>
         <option value='1'>Janaury</option>
         <option value='2'>February</option>
         <option value='3'>March</option>
         <option value='4'>April</option>
         <option value='5'>May</option>
         <option value='6'>June</option>
         <option value='7'>July</option>
         <option value='8'>August</option>
         <option value='9'>September</option>
         <option value='10'>October</option>
         <option value='11'>November</option>
         <option value='12'>December</option>
       </select>
     </div>
     <div class="form-group col-lg-6">
       <select name="date" class="form-control" id="exampleFormControlSelect1">
         <option>- Day -</option>
         <?php for($i=1; $i<32; $i++){ ?>
         <option value="<?php echo $i; ?>"><?php echo $i; ?> </option>
         <?php } ?>
       </select>
     </div>
     <!--<div class="form-group col-lg-4" style="display:inline-flex;">
         <span>from</span>
         <input class="form-control"  type="time" id="appt" name="appt" value="08:00">
         <span>to</span>
         <input class="form-control"  type="time" id="appt" name="appt" value="09:00">
     </div>-->
    <button type="submit" class="btn btn-primary col-lg-6">Book Now</button>
  </form>
</div>
</div>

<section class="gallery" >
  <div class="main_title"><span>Gallery</span></div>
  <div class="md-fluid">
    <!-- <div class="row">
      <?php for ($i=0; $i < 2; $i++) { ?>
      <div class="col-lg-6 col-md-6 col-sm-12 column">
        <div class="card">

        </div>
      </div>
      <?php } ?>
    </div> -->
    <div class="card-columns">
      <div class="card">
        <img src="images/img1.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img4.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img5.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img6.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img7.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img2.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img3.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
      <div class="card">
        <img src="images/img8.jpg" class="card-img-top" alt="...">
        <div class=" card-body">
          <span class="card-title">About Turf Rental</span>
          <p>The Training Yard offers 3 batting cages, with one cage capable of being extended to 70′ for pitching (additional charges apply)</p>
          <!--<button class="btn">Find More</button>--><a href="" class="more-inset">Find More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blogs">
  <div class="main_title"><span>Latest </span>Blogs</div>
  <div class="md-fluid">
    <div class="row">
      <?php for ($i=0; $i < 3; $i++) { ?>
      <div class="col-lg-4 col-md-4 col-sm-12 column">
        <div class="card blog-card">
          <img class="blog-img" src="images/img7.jpg">
          <div class="card-body">
            <div class="top">
              <span class="left">March 29 2020</span><!--<span class="right">ROI</span>-->
            </div>
            <div class="by">By Training Yard</div>
            <div class="txt">Turf rentals are available for skill work, practices, small group training</div>
            <a href="" class="more-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include "partials/footer.php" ?>
<?php include "partials/commonscript.php" ?>

</body>
</html>