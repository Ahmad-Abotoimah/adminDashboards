<?php
session_start();
@$id = $_GET["id"];
if ($id == "") {
    header("location:login-page.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row header ">
            <div class="col-md-12">
                <section>
                    <h1 class="signup-head">Welcom <?php echo @$id ?></h1>
                    <p>Here you can edit/delete users and show thier info</p>
                </section>
            </div>
        </div>

        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row  signup-main ">
            <div class="col-6 col-md-12 main">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">password</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">date created</th>
                                <th scope="col">date last login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION as $key => $value) {
                                if (!empty($value)) {
                                    if (!($key == "admin" || $key == "counter")) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $value["user-id"] ?></th>
                                            <td><?php echo $value["first-name"] . " " . $value["middle-name"] . " " . $value["last-name"] . " " . $value["family-name"] ?></td>
                                            <td><?php echo $value["email"] ?></td>
                                            <td><?php echo $value["mobile"] ?></td>
                                            <td><?php echo $value["password"] ?></td>
                                            <td><?php echo $value["birth-date"] ?></td>
                                            <th scope="row"><?php echo $value["sign-up-date"] ?></th>
                                            <td><?php echo @$value["login-date"] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <form action="delete.php" method="POST">
                                                        <input type="hidden" value="<?php echo $key ?>" name="delete-user">
                                                        <button type="submit" name="delete"><i class="fas fa-user-times"></i></button>
                                                    </form>
                                                    <a href="edit.php?id=<?php echo $key ?>"><button class="ms-1" name="edit-user"><i class="fas fa-user-edit"></i></button></a>
                                                </div>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
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