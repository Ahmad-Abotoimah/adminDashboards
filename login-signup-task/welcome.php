<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row header">
            <div class="col-md-12">
                <section>
                    <h1>Hellow There</h1>
                    <p>Automatic identify verification which enable you to verify your identity</p>
                </section>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row main">
            <div class="col-6 col-md-12">
                <img src="imgs/img2.png" alt="welcome image">
            </div>
        </div>

        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row btns">
            <div class="col-12">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary btn" type="button" id="login-btn"><a href="login-page.php" style="color: white; text-decoration: none;">LogIN</a></button>
                    <button class="btn btn-primary btn" type="button" style="background-color:red; margin-top: 10px; " id="signup-btn"><a href="signUp.php" style="color: white; text-decoration: none;">SignUp</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>