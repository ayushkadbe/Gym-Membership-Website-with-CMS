<!--CREATE: insert data into the Database-->

<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You for submitting form.</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
    .container{
        max-width: 80;
        background-color: lightblue;
        margin: auto;
        padding: 23px;
        text-align: center;
     
    }
	
</style>

<body>
	
    <div class="container">
		<?php	
		
		
		// Taking all 9 values from the form data(input)
			
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$height = $_REQUEST['height'];
		$weight = $_REQUEST['weight'];
		$bloodgroup = $_REQUEST['bloodgroup'];
		$password = $_REQUEST['password'];
		
	
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users(name, email, phone, gender, address, height, weight, bloodgroup, password) VALUES ('$name',
			'$email','$phone', '$gender', '$address', '$height', '$weight', '$bloodgroup','$password')";

		
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>Thanks for submitting the form.</h1>";
			    // ."Data stored in a database successfully.";

			echo nl2br("\n$name\n $email\n "
			    ."$phone\n $gender\n"
				. "$address\n $height\n $weight\n"
				. "$bloodgroup\n $password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

	</div>
	
</body>

</html>
