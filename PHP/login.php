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
                header('Location: products/products.php');
                exit();
            }
            // General user login, go to home page
            else if ($userInfo['password'] == $password) {
                session_end();
                session_start();
                $_SESSION["user"] = $userInfo;
                header('Location: ../HTML/index.html');
                exit();
            }
            // Incorrect password
            else {
                echo "<script type='text/javascript'>alert('Incorrect password.');</script>";
                // header('Location: ../HTML/login.html');
                //echo '<script type="text/javascript">
                //document.getElementById("passwordInvalid").innerHTML = "Email / Password combination was incorrect.";
                //</script>';
                $accountExists = true;
                //exit();
            }
        }
    }
    if (!$accountExists) {
        echo "<script type='text/javascript'>alert('No account exists with that email address. Please try again or create an account.');</script>";
        //echo '<script type="text/javascript">
        //document.getElementById("passwordInvalid").innerHTML = "No account exists with that email. Please try again, or create an account with us.";
        //</script>';
    }

}

function session_end() {
    if (isset($_COOKIE["PHPSESSID"])) {
        setcookie("PHPSESSID", "", time()-3600);
    }
    session_destroy();
}
?>