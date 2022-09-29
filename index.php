
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    
    <!--FORM-->
    <div class="container">
        <h1>
            Membership Singup
        </h1>
        <br>  

        <form action="insert.php" method= "post">
        <div class="mb-3">
             <label for="name" class="form-label">Name</label>
             <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Phone number</label>
             <input type="text" class="form-control" name="phone" id="phone">
        </div>
        <div class="mb-3">
             <label for="Password1" class="form-label">Password</label>
             <input type="text" class="form-control" name="password" id="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        </form>   
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
