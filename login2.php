<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>


    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <a  class="navbar-brand" href="#"> <img src="./images/v987-18a.jpg" alt="" height="50px"> Rodrigues Healthcare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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

    
<body id="body">
<style>

body{

 background-color:#9DC08B;    
    
    
}

.container{


  margin-top: 20%;
    margin-left: 25%;

   
  
    
}


.form-control{
    
    width: 60%;
    
}

.box{

   
}

h2{

  font-family:helvetica;
  margin-left:8%;
  margin-top:-5%;

}


</style>

<head>
<style>
  
  </style>
</head>
<body>






</body>


    <div class="container">

    <h2>PATIENT'S LOGIN FORM</h2>
   

<form action="processloginpat.php" method="post">
<div class="form-group" >


   
First Name<input class="form-control" type="text" name="patFname" >

Last Name<input class="form-control" type="text" name="patLname" >

Email<input class="form-control" type="text"name="patEmail">

Password<input class="form-control" type="password" name="patPass" >


    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me


<br>

<input  type="submit" value="Login" id="" class="btn btn-primary" class="btn btn info" >

</div>
</form>
<small>

</div>
    <?php

    


    if(isset($_GET['status'])){


        if($_GET['status']==0){

            echo "You are trying to access an unauthorised page!";
        }
    }

    
    if(isset($_GET['status'])){

        if($_GET['status']==1){

          

          unset($_SESSION['patEmail']);
          unset($_SESSION['userId']);
       
            
        }
    }

    
    if(isset($_GET['status'])){

      if($_GET['status']==5){

        
        echo "You are registered.";
          
      }

      if($_GET['status']==11){

        echo "you are not registered on this website!If it was an error try again";
    }

    if($_GET['status']==12){

      echo "Wrong password";
  }

  }

  
    ?>

</small>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>




</head>
<body>
    
