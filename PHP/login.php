<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--Stylesheets-->
        <link href="../CSS/Page5and6.css" rel="stylesheet">
        <link href="../css-fas/all.css" rel="stylesheet">
        
        <!--Shortcut icon (tab icon)-->
        <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">

        <title>User Login</title>
    </head>
    <body>
        <?php require('navbar.php'); ?>
        <div class="banner mb-3 mx-4">
            <h3>Welcome back!</h3>
            <p>Please log in to obtain the benefits of shopping with us.</p>
        </div>
        <h2 class="pb-3 text-center">User Login</h2>
        <div class="container-sm shadow rounded col col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 bg-light p-3 py-4">
            <form action="login.php" method="POST" id="loginForm">
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-6 col-xxl-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <p id="emailInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-6 col-xxl-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control"  id="password" name="password">
                        <p id="passwordInvalid" class="invalid"></p>
                    </div>
                </div>
                <div>
                    <p class="text-center"><a href="signup.php" class="link">Don't have an account? Click here to create one!</a></p>
                </div>
                <div class="row mb-3 justify-content-center">
                    <button class="btn btn-secondary col-7 col-lg-6 col-xxl-4" style="border: none;" type="button" onclick="location.href='ForgotPassword.html'">Forgot Password</button>
                </div>
                <div class="row mb-3 justify-content-center">
                    <button class="btn submit col-7 col-lg-6 col-xxl-4" type="button" onclick="validate('loginForm')" name="login">Login</button>
                </div>
            </form>
        </div>
        <?php require('footer.php'); ?>

        <!--Personal Javascript-->
        <script src="../JS/P5_6.js"></script>

        <!--Bootstrap Javascript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
<?php
if (isset($_POST['email'])) {
    $adminEmail = 'admin@admin.com';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents("../DB/users.json"), true);
    foreach ($users['users'] as $user => $userInfo) {
        if (strcasecmp($userInfo['email'], $email) == 0) {  // Email matches a user
            // Admin login, go to backend products page
            if ($userInfo['email'] == $adminEmail && $userInfo['password'] == $password) {
                session_end();
                session_start();
                $_SESSION["user"] = $userInfo;
                $_SESSION["logIn"] = true;
                header('Location: products/products.php');
                exit();
            }
            // General user login, go to home page
            else if ($userInfo['password'] == $password) {
                session_end();
                session_start();
                $_SESSION["user"] = $userInfo;
                $_SESSION["logIn"] = true;
                header('Location: index.php');
                exit();
            }
            // Incorrect password
            else {
                echo '<script type="text/javascript">
                document.getElementById("passwordInvalid").innerHTML = "Email / Password combination was incorrect.";
                </script>';
                $accountExists = true;
            }
        }
    }
    if (!$accountExists) {?>
        <script type="text/javascript">
            document.getElementById("passwordInvalid").innerHTML = "No account exists with the email <?php echo $email; ?>.<br /> Please try again or create an account with us.";
        </script>;
    <?php }
}

function session_end() {
    if (isset($_COOKIE["PHPSESSID"])) {
        setcookie("PHPSESSID", "", time()-3600);
    }
    session_destroy();
}
?>