<?php 
$pageTitle = "Restaurant";
include("includes/header.php"); ?>

	<main>
		 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide container" data-ride="carousel" style="width: 100%; height: 60%; margin: 0 auto">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" style="width: 100%; height: 100%; margin: 0 auto">
        <div class="item active slider-size">
          <img class="first-slide center-block" src="img/img1.JPG" alt="First slide">
        </div>
        <div class="item slider-size">
          <img class="second-slide center-block" src="img/img2.JPG" alt="Second slide" height="50">
        </div>
        <div class="item slider-size">
          <img class="third-slide center-block" src="img/img3.JPG" alt="Third slide">
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
	
	<h2 class="text-center golden">Welcome to Dosa Palace, the place of South Indian Delicacies!</h2>
	</main>
	
<?php include("includes/footer.php"); ?>