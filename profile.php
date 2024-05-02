<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../credentials3/login.php">Logout</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</head>
<body>

<style>

body{

    
    background-image: url(young-handsome-physician-medical-robe-with-stethoscope.jpg);
    height: 200px;
    width:50%;
}

#container{


    margin-top: 15%;

}



</style>


        <div class="container-fluid">
            <fieldset id="container">
            <?php 


            session_start();
                
            if(isset($_POST['docEmail']) && isset($_POST['docName'])){


                $email= $_POST["docEmail"];
                $fname = $_POST["docName"];
                
                echo "Hello Dr.".$_POST["docName"];
                echo " your email is ".$_POST["docEmail"];
                echo "<br>";
     


                echo 'Click the link to access consultation page:.<a href="./consultation.php">Consultation</a>';

              
              
                $_SESSION['docEmail'] = $email;

                $userid= 50;

                $_SESSION['userId'] = $userid;

       

                 }else{

                    
                    header("Location: login.php?status=0");
                }

            ?>
              </fieldset>
                
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
