<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="style2.css">

 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <a  class="navbar-brand" href="#"> <img src="./images/v987-18a.jpg" alt="website-logo" height="50px"> Rodrigues Healthcare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="doctorlist.php">Home</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.html">contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>

       
        
        
        
       
          
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button id="btn3" class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


</head>
<body>

<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "healthcarecentre";

$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch only first name and last name from the database
$sql = "SELECT fname, lname FROM tbdoc";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Initialize a counter for numbering
    $counter = 1;

    // Output data of each row as a numbered list
    echo "<ol>";
    while($row = $result->fetch_assoc()) {
        // Display the full name as a list item
        echo "<li>" . $row["fname"] . " " . $row["lname"] . "</li>";
        $counter++;
    }
    echo "</ol>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>




