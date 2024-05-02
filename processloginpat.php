<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $firstname = $_POST['patFname'];
    $lastname = $_POST['patLname'];
    $email = $_POST['patEmail'];
    $password = $_POST['patPass'];

    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Changed variable name to avoid conflict
    $db_name = "healthcarecentre";

    $conn = new mysqli($servername, $username ,$db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch user from the database
    $sql = "SELECT * FROM tbpatient WHERE fname ='$firstname' AND lname ='$lastname' AND email ='$email' AND pass ='$password'";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Assuming password is stored in plaintext
        if ($password == $user['pass']) { 
            // Password is correct, set session variables
            session_start();
            $_SESSION['patFname'] = $user['fname'];
            $_SESSION['patLname'] = $user['lname'];
            
            // Redirect to a logged-in page
            header("Location: homepage.html");
            exit();
        } else {
            header("Location:login1.php?status=12");
            echo "Invalid password";
        }
    } else {
        header("Location:login1.php?status=11");
        echo "User not found";
    }

    $conn->close();
}
?>
