<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dogstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>.table-container-harvest{
    height: auto; /* Set the desired height for the table container */
    margin-left: 8%; 
    }

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="images/agri.png" alt="logo">
            <span class="logo_name">Cassava-IS</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#" >
                <i class='bx bxs-collection'></i>
                <span class="link_name">Planting</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name" href="#" >Planting</a></li>
                    <li><button class="button" onclick="openCity('Siquijor')">Siquijor</button></li>
                    <li><button class="button" onclick="openCity('Larena')">Larena</button></li>
                    <li><button class="button"onclick="openCity('Maria')">Maria</button></li>
                    <li><button class="button"onclick="openCity('Enrique Villanueva')">Enrique Villanueva</button></li>
                    <li><button class="button"onclick="openCity('Lazi')">Lazi</button></li>
                    <li><button class="button"onclick="openCity('San Juan')">San Juan</button></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#" >
                <i class='bx bxs-collection'></i>
                <span class="link_name">Harvest</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name" href="#" >Harvest</a></li>
                    <li><button class="button" onclick="openHarvest('Siquijor')">Siquijor</button></li>
                    <li><button class="button" onclick="openHarvest('Larena')">Larena</button></li>
                    <li><button class="button" onclick="openHarvest('Maria')">Maria</button></li>
                    <li><button class="button" onclick="openHarvest('Enrique Villanueva')">Enrique Villanueva</button></li>
                    <li><button class="button" onclick="openHarvest('Lazi')">Lazi</button></li>
                    <li><button class="button" onclick="openHarvest('San Juan')">San Juan</button></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='bx bxs-receipt'></i>
                <span class="link_name">Record</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name"href="#">Basta</a></li>
                    <li><button class="button" onclick="toggleAdminForm('admin')">Add Admin</button></li>
                    <li><a href="#">Admin Accounts</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-pie-chart-alt'></i>
                <span class="link_name">Analytics</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-line-chart'></i>
                <span class="link_name">Chart</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='bx bxs-report'></i>
                <span class="link_name">Membership</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name"href="#">Membership</a></li>
                    <li><a href="#">Apply Membership</a></li>
                    <li><a href="#">Apply Insurance</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-compass'></i>
                <span class="link_name">Explore</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-history'></i>
                <span class="link_name">History</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">History</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="link_name">Setting</span>
                </a>
                <ul class="sub_menu blank">
                    <li><a class="link_name"href="#">Setting</a></li>
                </ul>
            </li>
            <li>
        <div class="profile-details">
            <div class="profile-contents">
                <img src="images/er.png" alt="profile">
            </div>
            <div class="name-job">
                <div class="profile_name">Admin</div>
                <div class="job">DA Worker</div>
            </div>
            <a href="login.php"><i class='bx bx-log-out'></i></a>
            </div>
            </li>
            </ul>
        </div>

        <section class="home-section">
                    <div class="home-content">
                        <i class='bx bx-menu'></i>
                    <span class="text">CSI Menu</span>
                                </div>

                    <!-- Add this <div> to your HTML to display the municipality data -->
                    <div class="table-container" id="table-container">
                        <!-- The fetched data will be displayed here -->
                    </div>
                    <div class="table-container-harvest" id="table-container-harvest">
                    <!-- The fetched data for Harvest will be displayed here -->
                    </div>
                    
                    
                    <?php 
                        if(isset($_SESSION['status']))
                        { 
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Yow!</strong><?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        <?php
                            unset ($_SESSION['status']);
                        }
                    ?>
                    
                    <div class="form-container" id="form-container" style="display: none">
                    <h2>Add Admin</h2>
                    <form action="addadmin.php" method="post" id="admin-form">      
                        <input type="text" id="name" name="name" required placeholder="Enter Your Name:">
                        <input type="text" id="username" name="username" required placeholder="Enter Your Username:">
                        <input type="password" id="password" name="password" required placeholder="Enter Your Password:">
                        <input type="submit" name="submit" value="Add Now" class="form-btn">
                    </form>
                    </div>

                  


        </section>


        



















<script>

            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu")
                }); 
            }

            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
            });



function openCity(cityName) {
    // Make an AJAX request to fetch data for the selected municipality
    $.ajax({
        type: "POST",
        url: "municipalRecord.php", // Replace with the correct URL
        data: { municipality: cityName },
        success: function (data) {
            // Update the "Record" table and hide the "Harvest" table
            $("#table-container").html(data);
            $("#table-container").show();
            $("#table-container-harvest").hide();
            $("#form-container").hide();
        },
        error: function () {
            alert("Error fetching data.");
        }
    });
}

function openHarvest(cityName) {
    $.ajax({
        type: "POST",
        url: "municipalHarvest.php", // Replace with the correct URL
        data: { municipality: cityName },
        success: function (data) {
            // Update the "Harvest" table and hide the "Record" table
            $("#table-container-harvest").html(data);
            $("#table-container-harvest").show();
            $("#table-container").hide();
            $("#form-container").hide();
        },
        error: function () {
            alert("Error fetching harvest data.");
        }
    });
}

let isFormVisible = false; // Initialize a variable to track the form's visibility

function toggleAdminForm(formId) {
    var adminForm = document.getElementById("form-container");
    var tableContainer = document.getElementById("table-container");
    var tableContainerHarvest = document.getElementById("table-container-harvest");

    if (!isFormVisible) {
        // If the form is not visible, show it and hide the tables
        adminForm.style.display = "block";
        tableContainer.style.display = "none";
        tableContainerHarvest.style.display = "none";
        isFormVisible = true; // Update the visibility state
    } else {
        // If the form is visible, hide it
        adminForm.style.display = "none";
        isFormVisible = false; // Update the visibility state
    }
}





</script>


</body>
</html>
