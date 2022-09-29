<!--Php Database Connection Code-->
<?php
include 'connect.php';
 ?>

<!--HTML-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <!--SCRIPT-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!--HEADER-->
 <header class="p-3 bg-dark text-white">
   
  <div class="container" >
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <!--LOGO-->
      <div class="logo">
        <a href="index.html">
          <img src="assets/img/flc_design2022052144225.png" alt="logo" width="190" height="80">
        </a>
      </div>

      <!--LIST-->        
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      
      <li><a href="admin.php" class="nav-link px-2 text-white">Home</a></li>
      <li><a href="#" class="nav-link px-2 text-white">Payments</a></li>
      <li><a href="#" class="nav-link px-2 text-white"></a></li>
      <li><a href="#" class="nav-link px-2 text-white"></a></li>
      </ul>
  
      
    </div>
  </div>
</header>

<!--DATABASE MANAGER-->
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">Bloodgroup</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

    <!--Php Code-->
    <?php
    
    //Retrieve Data from Database
    $sql = "select * from `users`";
    

    //Execute
    $result = mysqli_query($conn, $sql);
    if($result){
      while($row = $result->fetch_assoc()){

        //Data from Database
        $name = $row['name'];
        $email = $row['email'];
		    $phone = $row['phone'];
		    $gender = $row['gender'];
		    $address = $row['address'];
		    $height = $row['height'];
		    $weight = $row['weight'];
		    $bloodgroup = $row['bloodgroup'];
		    $password = $row['password'];

        //Data printed inside Table of AdminPanel
        echo '
        <tr>
          <th scope="row">'.$name.'</th>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>'.$gender.'</td>
          <td>'.$address.'</td>
          <td>'.$height.'</td>
          <td>'.$weight.'</td>
          <td>'.$bloodgroup.'</td>
          <td>'.$password.'</td>
        </tr>
        ';
      };
    }


    ?>
  </tbody>
</table>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>