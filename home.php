<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Alain Lester D. Looc</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/car.css">
</head>
<body>

    <?php include("include/navbar.php");?>

	<div class="container-fluid p-4 text-white text-center Jumboheader">
	<h1 class="home">Home</h1>
	</div>
			

	<div id="hero-carousel" class="carousel slide">
	<div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  		<div class="carousel-inner">
   		 <div class="carousel-item active c-item">
      <img src="images/slide1.jpg" class="d-block w-100 c-img" alt="Slide 1">
	  <div class="carousel-caption d-none d-md-block">
        <h4>Record Your Planting and Harvest With Us </h4>
        <p>Connect with the Department of Agriculture VII and the Office of the Agriculturist-Siquijor</p>
		    <p><a href="record.php" class="btn btn-light">Record Planting Now</a></p>
        <p><a href="harvest.php" class="btn btn-light">Record Harvests Now</a></p>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/slide2.png" class="d-block w-100 c-img" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h4>Learn to Plant with us</h4>
        <p>We will help you new farmers to properly learn how to plant cassava</p>
		    <p><a href="how.php " class="btn btn-light">Learn Now</a></p>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/slide3.png" class="d-block w-100 c-img" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h4>Support The Cassava Industry</h4>
        <p>Contact us on our official facebook account</p>
		    <p><a href="https://web.facebook.com/OPAsiquijor" class="btn btn-light">Contact Us</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<div>
		<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>
            What's a cassava information system?
			</h3>
			<p>
            A innovative system uses cutting-edge technology to provide farmers, researchers, and stakeholders with real-time data and insights that are critical for making informed decisions. To stay ahead in the world of cassava farming, stay connected with the Cassava Information System.
			</p>
		</div>
    <div class="col-md-3">
			<p><a href="harvest.php" class="btn btn-success">Record Harvests Now</a></p>
      </div>
      <div class="col-md-3">
      <p><a href="record.php" class="btn btn-success">Record Planting Now</a></p>
      </div>
      <br>
        <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
			<h3>
				For new Farmers
			</h3>
			<p>
            Learn new things here in our website.
            Learn more on how to properly plant and harvest cassava.
    </p>
    <p><a href="#" class="btn ">Learn More</a></p>
		</div>
        <div class="con-img col-md-3">
			<img src="images/agri.png" alt="agri">
		</div>
       
    </div>
</div>
    </div>
</div>

<br>
	<br>
	<br>
<br>
<?php include 'include/footer.php'; ?>