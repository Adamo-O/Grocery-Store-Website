<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <title>User List</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/P910styles.css">
        <link rel="stylesheet" href="../css-fas/all.css">
        <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body id="userListPage">
        <div class="sidebar">
            <header>La Meilleure Épicerie</header>
            <div class="list-group">
                <a href="index.html" id="home" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home</a>
                <a href="../P7_P8/products.html" id="Inventory" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory</a>
                <a href="userList.php" id="accounts" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
                <a href="../p11-12/orders.html" id="orders" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Orders</a> 
                <a href="#" id="analytics" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Analytics</a>
                <a href="#" id="settings" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Settings</a>
                <a href="" id="reports" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Reports</a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" id="login"> <b>Logout</b></a>
            </div>
          </div>
          <div id="containerPrav" class="container-md shadow rounded bg-light offset-3 p-4">
            <h1>The user has been deleted.</h1>
            <button type="button" id="userListBtn" class="btn btn-success" onclick="location.href='userList.php'">Back to User List</button>
          </div>
          <div id="footer">
            <a href="https://facebook.com" id="facebookIcon" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://instagram.com" id="instagramIcon" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com" id="twitterIcon" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
            <h6 id="headFooter">
                Thanks for shopping at La Meilleure Épicerie. <br>
                To contact us, please click <a href="contact-us.html" class="contact-page">here</a>.
            </h6>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="../JS/users.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>
<?php
    $users = json_decode(file_get_contents("../DB/users.json"), true);
    $fname = $_POST['id'];
    $i = 0;
    // echo "<script type='text/javascript'> alert('User ". $fname . " will be deleted.'); </script>";
    foreach ($users['users'] as $user => $userData) {
        if (strcasecmp($users['users'][$i]['fname'], $fname) == 0) {
            echo "<script type='text/javascript'> alert('User ". $fname . " deleted.'); </script>";
            unset($users['users'][$i]);
            break;
        } else {
            $i++;
        }
    }
    $updatedData = json_encode($users);
    file_put_contents('../DB/users.json', $updatedData);
?>