<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Alain Lester D. Looc</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Urbanist:wght@300;400;500;600;700&display=swap');   
		.Jumboheader{
			background-color: #84A98C;

		}
		body{
			background-color: #B6AD90;
			background-size: cover;
            font-family: 'Urbanist', sans-serif;
		}
        .navbar .navbar-nav .dropdown a{
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            text-align: left;
            font-size: 17px;
        }
        .navbar .navbar-nav .dropdown .drop-item li{
            display: block;
        }
        .navbar .navbar-nav .dropdown .drop-item{
            width: 200%;
            background: #283618;
            position: absolute;
            align-items: center;
            z-index: 999;
            display: none;
        }
        .navbar .navbar-nav .dropdown a:hover{
            color: #FFB3C1;
        }
        .navbar .navbar-nav .dropdown:hover .drop-item{
            display: block;
        }
		.home{
			font-family: Times New Roman;
			font-size: 400%;
		}
        .navbar .navbar-brand{
            font-weight: bold;
            font-family: 'Urbanist';
            text-align: center;
            font-size: 20px;
        }
        .navbar a{
            padding: 10px;
        }
        .navbar .navbar-nav .nav-item a:hover{
            color: #FFB3C1;
        }
        .container .btn{
            color: #fff;
            background: #2f3e46;;
            font-size: 15px;
            font-weight: bold;
            padding: 12px 55px;
            margin: 20px;
            border-radius: 20px;
            border: 3px solid #006600;
            outline: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
    }
    .container .btn:active{
    transform: scale(0.90);
    }
        .container img{
         height: 120px;
         width: 120px;
         object-fit: cover;
         border-radius: 16px;
         margin: 0 14px 0 12px;
         transition: all 0.5s ease;
        }
        .container p{
            font-size: 20px;
        }
	</style>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark Jumboheader sticky-sm-top">
	<div class="container-fluid ms-auto">
		<div class="imgcontainer">
			<img src="images/agri.png" width="60px">
		</div>
	<a class="navbar-brand">DA Cassava Info System</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="home.php">Home</a>
			</li>
            <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="how.php">How To</a>
			</li>
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="objective.php">Objective</a>
			</li>

            <li class="dropdown">
                <a href="#">Services</a>
                <ul class="drop-item">
                    <li><a href="record.php">Record Planting</a></li>
                    <li><a href="harvest.php">Record Harvested</a></li>
                </ul>  
            </li>

			
			<li class="dropdown">
                <a href="#">Guest</a>
                <ul class="drop-item">
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="adhome.php">Super Admin</a></li>
                </ul>  
            </li>
            <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="about.php">About</a>
			</li>
	</ul>

					</div>
				</div>
			</div>
		</nav>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>