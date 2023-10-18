

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipalities</title>
    <link rel="stylesheet" href="css/stylenasad.css">
</head>
<body>


<?php
include("db_connection.php");

// Check if the 'municipality' POST parameter is set and not empty
if (isset($_POST['municipality']) && !empty($_POST['municipality'])) {
    $municipality = $_POST['municipality'];

    // Modify your SQL query to fetch data for the selected municipality
    $query = "SELECT * FROM planting WHERE town = '$municipality'";
    $result = filterRecord($query);

    echo "<h1 style='margin-top:28px;'>Data of Municipality: $municipality</h1>";

    // Generate the HTML table based on the fetched data
    $tableHtml = "<table border='1' class='table-bordered table-striped'>

    <tr>
        <th class='text-center'>Fullname</th>
        <th class='text-center'>ID</th>
        <th class='text-center'>Gender</th>
        <th class='control text-center'>Town</th>
        <th class='control text-center'>Zip</th>
        <th class='control text-center'>Date</th>
        <th class='control text-center'>Barangay</th>
        <th class='control text-center'>Variety</th>
        <th class='control text-center'>Area</th>
    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        $tableHtml .= "<tr>";
        $tableHtml .= "<td class='text-center'>" . $row['fullname'] . "</td>";
        $tableHtml .= "<td class='text-center'>" . $row['id'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['gender'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['town'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['zip'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['date'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['barangay'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['var'] . '</td>';
        $tableHtml .= "<td class='text-center'>" . $row['area'] . '</td>';
        $tableHtml .= "</tr>";
    }
    $tableHtml .= "</table>";

    echo $tableHtml;
} else {
    echo "Municipality not provided.";
}
?>


    
</body>
</html>