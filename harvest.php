<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Alain Lester D. Looc</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/rec.css">
</head>
<body>

    <?php include("include/navbar.php");?>
	<div class="container-fluid p-3 text-white text-center Jumboheader">
	<h1 class="planted">Cassava Harvesting Accomplishment Report</h1>
	</div>
<br>
	<section class="container bg-dark my-3 w-50 text-dark p-2">
		<form action="insertharvest.php" class="row-g3" method="post">
			<div class="row">
			<div class="col-md-6 mt-3">
				<label for="name" class="form-label" >Full Name:</label>
				<input type="text" name="fullname" class="form-control" id="name" placeholder="Name" required>
			</div>
			<div class="col-md-6 mt-3">
				<label for="farmersid" class="form-label" >Farmers ID:</label>
				<input type="text" name="id" class="form-control" id="id" placeholder="ID" required>
			</div>
			<div class=" col-md-6 mt-3">
      			<label for="gender" class="form-label">Gender:</label>
      				<select id="town" name="gender" class="form-select" required>
					  <option value="">---Select Gender---</option>
        				<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
    		</div>
			<div class=" col-md-6 mt-3">
      			<label for="town" class="form-label">Town/Lungsod:</label>
      				<select id="town" name="town" class="form-select" required>
					  <option value="">---Select Town---</option>
        				<option value="Siquijor">Siquijor</option>
						<option value="Larena">Larena</option>
						<option value="Enrique Villanueva">Enrique Villanueva</option>
						<option value="Maria">Maria</option>
						<option value="Lazi">Lazi</option>
						<option value="San juan">San Juan</option>
					</select>
    		</div>
			<div class="col-md-6 mt-3">
				<label for="zip" class="form-label" >Zip Code:</label>
				<input type="number" name="zip" class="form-control" id="zip" placeholder="Zipcode" required>
			</div>
			<div class="col-md-6 mt-3">
				<label for="date" class="form-label" >Date:</label>
				<input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
			</div>
			<div class="col-md-12">
				<label for="Barangay" class="form-label" >Barangay:</label>
				<input type="text" name="barangay" class="form-control" id="barang" placeholder="Barangay" required>
			</div>
			<div class=" col-md-12 mt-3">
      			<label for="varities" class="form-label"> Cassava Varities:</label>
      				<select id="varities" name="var" class="form-select" required>
					  <option value="">---Select Varities---</option>
        				<option value="Golden Yellow">Golden Yellow</option>
						<option value="Lakan">Lakan</option>
						<option value="KU-50">KU-50</option>
						<option value="Rayong">Rayong</option>
						<label for="Plsspecify" class="form-other"></label>
						<input type="text" name="vari" class="form-control mt-1" id="barang" placeholder="Other Pls. Specify">
					</select>
			</div>
			<div class="col-md-12">
				<label for="harvest" class="form-label" >Area Harvested:</label>
				<input type="text" name="area" class="form-control" id="area" placeholder="Area Harvested" required>
			</div>
			<div class="col-md-12">
				<label for="harvest" class="form-label" >Ave Yield:</label>
				<input type="text" name="aveyield" class="form-control" id="yield" placeholder="Ave Yield" required>
			</div>
			<div class="col-md-12">
				<label for="harvest" class="form-label" >Prod'n</label>
				<input type="text" name="prodn" class="form-control" id="prod" placeholder="Prod'n" required>
			</div>
		</div>
		<br>
		<div class="col-12">
    	<button class="btn" name="submit" type="submit">Submit form</button>
  		</div>
		</form>
	</section>

<br>
<br>
<br>












    
    <?php include 'include/footer.php'; ?>