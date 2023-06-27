<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<style>

		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		
		.container {
			max-width: 400px;
			margin: 0 auto;
			padding: 40px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			border-radius: 5px;
			text-align: center;
		}
		
		h1 {
			margin-top: 0;
		}
		
		input[type="text"],
		input[type="password"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		
		input[type="submit"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			width: 100%;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>

</head>
<body>


<?php




include "data.php";

// get the username, password, and email
if(isset($_POST['username'])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	$authenticated = false;

	foreach ($users as $user) {
	    if ($user['username'] == $username && $user['password'] == $password && $user['email'] == $email) {
	        $authenticated = true;
	        break;
	    }
	}

	if ($authenticated) {
	    if ($username == "admin" && $password == "admin123" && $email == "admin@web.com") {
	        header("location: dashboard.php?name=$username");
	    } else {
	        header("location: index.php?name=$username");
	    }
	} else {
	    echo 'Invalid username, password, or email.';
	}
}


if (empty($username)) {
    echo "Username is required.";
  } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
    echo "Username can only contain letters, numbers, and underscores.";
  } else {
    echo "Username is valid.";
  }


  







?>



	<div class="container">
		<h1>Sign In</h1>
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username">
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password">

			<label for="email">Email:</label>
			<input type="text" id="email" name="email">
			
			<input type="submit" value="Sign In">
		</form>
	</div>
</body>
</html>