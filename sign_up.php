<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .center {
        text-align: center;
    }

    .no_U {
        text-decoration: none;
    }
</style>

<body>
    <div class="card border-dark mb-3 position-absolute top-50 start-50 translate-middle" style="max-width: 36rem;">
        <div class="card-header">Register Your Account</div>
        <div class="card-body">
            <form class="row g-3" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="username" name = "user_name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name = "password">
                </div>
                <input id="button" class="btn btn-success" type="submit" value="Sign Up">
                <br>
                <a class="no_U" style="display: inline" href="login.php">Login</a>
                <br>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>