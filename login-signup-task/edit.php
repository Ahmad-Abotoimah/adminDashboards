<?php
//session creation :
session_start();
if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}

// session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
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
}
$id = $_GET["id"];
if (isset($_POST["submit"])) {
    $_SESSION[$id]["first-name"]  = $_POST["firstName"];
    $_SESSION[$id]["middle-name"] = $_POST["midName"];
    $_SESSION[$id]["last-name"]   = $_POST["lastName"];
    $_SESSION[$id]["family-name"] = $_POST["familyName"];
    $_SESSION[$id]["birth-date"]  =  $_POST["date"];
    // $_SESSION[$id]["email"]       =  $_POST["email"];
    $_SESSION[$id]["mobile"]      = $_POST["mobile"];
    $_SESSION[$id]["password"]    = $_POST["pass1"];
    session_commit();
    header("location:admin-dashboard.php");
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
    <div class="row  signup-main ">
        <div class="col-6 col-md-12 main">
            <form id="form1" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" required>Email address</label>
                    <input type="email" class="form-control" id="signUp-email-input" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email" value=" <?php echo $_SESSION[$id]["email"] ?>">
                    <div id=" emailHelp" class="form-text"><?php echo $errorOfEmail; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile</label>
                    <input type="number" class="form-control" id="signUp-mobile-input" name="mobile" placeholder="0777777777/0799999999/0788888888" value=" <?php echo $_SESSION[$id]["mobile"] ?>">
                    <div id=" mobilehelp" class="form-text"><?php echo $mobileError; ?>
                    </div>
                </div>
                <div class="input-group mb-3 full-name">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" aria-label="First name" class="form-control" name="firstName" placeholder="fname" value=" <?php echo $_SESSION[$id]["first-name"] ?>">
                    <input type=" text" aria-label="midlle name" class="form-control" name="midName" placeholder="sname" value=" <?php echo $_SESSION[$id]["middle-name"] ?>">
                    <input type=" text" aria-label="Last name" class="form-control" name="lastName" placeholder="lname" value=" <?php echo $_SESSION[$id]["last-name"] ?>">
                    <input type=" text" aria-label="familly name" class="form-control" name="familyName" placeholder="familyname" value=" <?php echo $_SESSION[$id]["family-name"] ?>">
                    <div id=" mobilehelp" class="form-text"><?php echo $nameError; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="signUP-pass-input" name="pass1" placeholder="cherecters and numbers mix" value=" <?php echo $_SESSION[$id]["password"] ?>">
                    <div id=" passHelp" class="form-text"><?php echo $passError; ?>
                    </div>
                </div>
                <div class="mb-3">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="date" name="date" value=" <?php echo $_SESSION[$id]["birth-date"] ?>">
                    <div class=" form-text"><?php echo $dateError; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary logbtn" id="signUppage-btn" name="submit">save</button>
            </form>
        </div>
    </div>

    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class="row btns">
        <div class="col-12">
        </div>
    </div>
    </div>
    <!-- <script src="js/main.js"></script> -->
</body>

</html>