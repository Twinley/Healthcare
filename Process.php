
<?php
session_start();






?>


<?php
    if(isset($_POST["docFname"] ) && isset($_POST["docEmail"]) && isset($_POST["docLname"]) && isset($_POST["speciality"])
    && isset($_POST["docPass"]) && isset($_POST["location"]) && isset($_POST["gender_opt"])){

     
      include ("db_conn.php");


      $name = $_POST["docFname"];
      $email = $_POST["docEmail"];
     



     

      $_SESSION['docFname'] = $name;
  
      $_SESSION['docEmail'] = $email;

     



      $fname = $_POST["docFname"];
      $lname = $_POST['docLname'];
      $email =  $_POST['docEmail'];
      $speciality =  $_POST['speciality'];
      $password =  $_POST['docPass'];
      $location = $_POST['location'];
      $gender = $_POST['gender_opt'];
      //craft the sql statement
      $sql = "INSERT INTO tbDoc (fname, lname, email,speciality,location,gender,pass) VALUES ('$fname', '$lname','$email','
      $speciality', '$location', '$gender' ,'$password')";

      //execute the sql statement
    if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";

       
        
    } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
    }




      header("Location:login1.php?status=5");
      
      

      
    


    }else{


      header("Location: register.php?status=10");
    }

 
?>