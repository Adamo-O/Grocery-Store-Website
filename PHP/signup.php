<?php
if (isset($_POST['email'])) {
    // POST items from sign up form
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $postCode = $_POST['postalCode'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "User info: Name: $firstName $lastName, Postal Code: $postCode, Email: $email, Password: $password.";

    // Check if user already exists in user database
    $users = json_decode(file_get_contents("../DB/users.json"), true);
    foreach ($users['users'] as $user => $userInfo) {
        if (strcasecmp($userInfo['email'], $email) == 0) {
            echo '<script type="text/javascript">
            document.getElementById("termsCheckInvalid").innerHTML = "An account with that email already exists. Please try with a different email or login with that email.";
            </script>';
            echo "<script type='text/javascript'>alert('An account with the email " . $userInfo['email'] . " already exists. Please try with a different email or login with that email.');</script>";
            $accountExists = TRUE;
        }
    }
    if (!$accountExists) {
        echo "<script type='text/javascript'>alert('New account created with the email " . $userInfo['email'] .". Welcome " . $firstName . "!');</script>";
        $users['users'][] = $_POST;
        file_put_contents('../DB/users.json', json_encode($users));
    }
}
?>