<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>carousel</title>

</head>
<body>
	<?php include "header.php" ?>
	<?php include "nav.php" ?>
	<div class="position-absolute">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/schback.jpg" width="100%" height="600px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/schoolbackground.jpg" width="100%" height="600px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sliderimg3.jpg" width="100%" height="600px" alt="Third slide">
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
</div>
<?php include "footer.php" ?>
</body>
</html>