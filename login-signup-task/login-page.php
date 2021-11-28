<?php
session_start();
$_SESSION["admin"] = array(
    "email" => "ahmadabotoimah@gmail.com",
    "password" => "Aa123456789@",
    "first-name" => "Okasha"
);
if (isset($_POST["login-submit"])) {
    foreach ($_SESSION as $key => $value) {
        if ($key == "admin") {
            if (is_array($value)) {
                if ($value["email"] == $_POST["login-email"] && $value["password"] == $_POST["login-pass"]) {
                    $_SESSION[$key]["login-date"] = date("Y/m/d h:i:s");
                    $id = $_SESSION[$key]["first-name"];
                    header("location:admin-dashboard.php?id=$id");
                    die();
                }
            }
        } else {
            if (is_array($value)) {
                if ($value["email"] == $_POST["login-email"] && $value["password"] == $_POST["login-pass"]) {
                    $_SESSION[$key]["login-date"] = date("Y/m/d h:i:s");
                    $id = $_SESSION[$key]["first-name"];
                    header("location:welcomeuser.php?id=$id");
                    die();
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row header login-head">
            <div class="col-md-12">
                <section>
                    <h1>LogIn</h1>
                    <p>Welcome back!Login with your credetilas</p>
                </section>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row main ">
            <div class="col-6 col-md-12 main">
                <form method="POST" id="form2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login-email-input" aria-describedby="emailHelp" placeholder="example@gmail.com" name="login-email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login-pass-input" name="login-pass">
                    </div>
                    <button type="submit" class="btn btn-primary logbtn" id="loginpage-btn" name="login-submit">Login</button>
                    <div id="login-help" class="form-text">Dont have an account? <a href="signUp.php" class="sign-up-link">Sign up</a> </div>
                </form>
            </div>
        </div>

        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row btns">
            <div class="col-12">
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>