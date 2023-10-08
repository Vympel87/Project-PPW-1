<?php
session_start();

include("connection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: Responsi_Web.php");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="card-header">Welcome Back!</div>
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
                <input id="button" class="btn btn-success" type="submit" value="login">
                <br>
                <a class="no_U" style="display: inline" href="sign_up.php" value="login">Register</a>
                <br>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>