
<?php
session_start();



?>


<?php
    if(isset($_POST["patFname"] ) && isset($_POST["patEmail"]) && isset($_POST["patLname"]) && isset($_POST["gender"]) 
    && isset($_POST["Dob"]) && isset($_POST["patPhone"]) && isset($_POST["maritalStatus"]) && isset($_POST["patAddress"])
    && isset($_POST["medHistory"]) && isset($_POST["patPass"])){

     
      include ("db_conn.php");


      $name = $_POST["patFname"];
      $email = $_POST["patEmail"];
  
      
      $_SESSION['patFname'] = $name;
  
      $_SESSION['patEmail'] = $email;



      $fname = $_POST["patFname"];
      $lname = $_POST['patLname'];
      $gender = $_POST['gender'];
      $dob = $_POST['Dob'];
      $phone = $_POST['patPhone'];
      $maritalsts = $_POST['maritalStatus'];
      $email =  $_POST['patEmail'];
      $address =  $_POST['patAddress'];
      
      $medHistory =  $_POST['medHistory'];
      $password =  $_POST['patPass'];

      //craft the sql statement
      $sql = "INSERT INTO tbpatient (fname ,lname,	gender,	dob,	phone,	maritalstatus,	email,adress,	pastmedicalhistory,	pass) 
      VALUES ('$fname', '$lname','$gender',' $dob', '$phone', '$maritalsts' ,'$email', '$address', '$medHistory', '$password')";

      //execute the sql statement
    if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";

          //create a session and store student name in it
        
    } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
    }




      header("Location:login2.php?status=5");
      
      

      
    


    }else{


      header("Location:patientRegistration.php?status=10");
    }
?>