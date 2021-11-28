<?php
//session creation :
session_start();
// session_destroy();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}
//define empty variable  
$dateError = $passError = $errorOfEmail = $mobileError = $nameError = "";

if (isset($_POST["submit"])) {
    $check = true;
    $errorOfEmail = "";
    if (empty($_POST["email"])) {
        $errorOfEmail = "this field is required";
        $check = false;
    } else if (!(preg_match("/^[A-z0-9.-]+@(hotmail|gmail|yahoo).com$/", $_POST["email"]))) {
        $errorOfEmail = "please enter a correct email";
        $check = false;
    }
    $mobileError = "";
    if (empty($_POST["mobile"])) {
        $mobileError = "this field is required";
        $check = false;
    } else if (!preg_match("/^[0-9]{14}$/", $_POST["mobile"])) {
        $mobileError = "please enter a correct email";
        $check = false;
    }
    $nameError = "";
    if (empty($_POST["firstName"])) {
        $nameError = "this field is required";
        $check = false;
    }
    if (empty($_POST["midName"])) {
        $nameError = "this field is required";
        $check = false;
    }
    if (empty($_POST["lastName"])) {
        $nameError = "this field is required";
        $check = false;
    }
    $passError = "";
    if (empty($_POST["pass1"])) {
        $passError = "this field is required";
        $check = false;
    } else if (!preg_match('#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#', $_POST["pass1"])) {
        $passError = "yor password should be as written";
        $check = false;
    }
    if (empty($_POST["pass2"])) {
        $passError = "this field is required";
        $check = false;
    } else if ($_POST["pass1"] !== $_POST["pass2"]) {
        $passError = "passwords shouls be the same";
        $check = false;
    }
    $dateError = '';
    if (empty($_POST["date"])) {
        $dateError = "this field is required";
        $check = false;
    } else if ((date("Y") - substr($_POST["date"], 0, 4)) < 16) {
        $dateError  = "your age should be more than 16 ";
        $check = false;
    }
    $signUpDate = date("Y/m/d");
    if ($check == true) {
        //set space in session called user and give it counter 
        //associative array
        $_SESSION["user" . $_SESSION["counter"]] = array(

            "first-name"    =>  $_POST["firstName"],
            "middle-name"   =>  $_POST["midName"],
            "last-name"     =>  $_POST["lastName"],
            "family-name"   =>  $_POST["familyName"],
            "birth-date"    =>  $_POST["date"],
            "email"         =>  $_POST["email"],
            "mobile"        =>  $_POST["mobile"],
            "password"      =>  $_POST["pass1"],
            "sign-up-date"  =>  $signUpDate,
            "user-id"       =>  $_SESSION["counter"]
        );

        //increament counter
        $_SESSION["counter"]++;

        //go to login page
        header("location:login-page.php");
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row header ">
            <div class="col-md-12">
                <section>
                    <h1 class="signup-head">SignUp</h1>
                    <p>create an acount,its free</p>
                </section>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row  signup-main ">
            <div class="col-6 col-md-12 main">
                <form id="form1" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" required>Email address</label>
                        <input type="text" class="form-control" id="signUp-email-input" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email">
                        <div id="emailHelp" class="form-text"><?php echo $errorOfEmail; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mobile</label>
                        <input type="number" class="form-control" id="signUp-mobile-input" name="mobile" placeholder="0777777777/0799999999/0788888888">
                        <div id="mobilehelp" class="form-text"><?php echo $mobileError; ?></div>
                    </div>
                    <div class="input-group mb-3 full-name">
                        <span class="input-group-text">Full Name</span>
                        <input type="text" aria-label="First name" class="form-control" name="firstName" placeholder="fname">
                        <input type="text" aria-label="midlle name" class="form-control" name="midName" placeholder="sname">
                        <input type="text" aria-label="Last name" class="form-control" name="lastName" placeholder="lname">
                        <input type="text" aria-label="familly name" class="form-control" name="familyName" placeholder="familyname">
                        <div id="mobilehelp" class="form-text"><?php echo $nameError; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signUP-pass-input" name="pass1" placeholder="cherecters and numbers mix">
                        <div id="passHelp" class="form-text"><?php echo $passError; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signUP-pass2-input" name="pass2">
                        <div id="pass2Help" class="form-text"><?php echo $passError; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="date" name="date">
                        <div class="form-text"><?php echo $dateError; ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary logbtn" id="signUppage-btn" name="submit"> signUp</button>
                    <div id="login-help" class="form-text">Already have an account? <a href="login-page.php" class="sign-up-link">login</a> </div>
                </form>
            </div>
        </div>

        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row btns">
            <div class="col-12">
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>