<!DOCTYPE html>
<?php 
            session_start();
            ?>
<html lang = "en">
    <head>
        <title>Edit User</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel ="stylesheet" href="../CSS/P910styles.css">
        <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
        <link href="../css-fas/all.css" rel="stylesheet">
        <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <div class="sidebar">
        <header>La Meilleure Épicerie</header>
        <div class="list-group">
            <a href="../HTML/index.html" id="home" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home</a>
            <a href="../HTML/P7_P8/products.html" id="Inventory" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory</a>
            <a href="userList.php" id="accounts" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
            <a href="../HTML/p11-12/orders.html" id="orders" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Orders</a> 
            <a href="#" id="analytics" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Analytics</a>
            <a href="#" id="settings" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Settings</a>
            <a href="" id="reports" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Reports</a>
            <a href="#" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" id="login"> <b>Logout</b></a>
        </div>
      </div>
    <div id="containerPrav" class="container-md shadow rounded bg-light offset-3 p-4">
        <h1>Account</h1>
        <form id = "pravForm" action="deleteUser.php" method="$_POST">
        <?php 
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $postCode = $_POST['postalcode'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
            }
                $id = $_POST['id'];
                $users = json_decode(file_get_contents("../DB/users.json"), true);
                echo '<div class="form-group row">
                        <label for="first name" id="yazminfname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-3">
                            <input class="form-control" id="fname" type="text" placeholder="'. $fname .'" readonly>
                            <p id="fnameyazInv" class="invalid"></p>
                        </div>
                        <label for="last name" id = "yazminlname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-3">
                            <input class="form-control" id="lname"type="text" placeholder="'. $lname .'" readonly>
                            <p id="lnameyazInv" class="invalid"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" id="yazminemail" class="col-sm-2 col-form-label">Email</label>
                        <div class = "col-sm-3">
                            <input class="form-control" id="email" type="text" placeholder="'. $email .'" readonly>
                            <p id="emailyazInv" class="invalid"></p>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for="postcode" id="yazminpostalcode" class="col-sm-2 col-form-label">Postal Code</label>
                        <div class="col-sm-3">
                            <input class="form-control" id="postalcode" type="text" placeholder="'. $postCode .'" readonly>
                            <p id="postcodeyazInv" class="invalid"></p>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for="password" id="yazminpassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-3">
                            <input class="form-control" id="password" type="password" placeholder="••••••••" readonly>
                        </div>
                    </div>';
                $i = 0;
                foreach ($users['users'] as $user => $userData) {
                    $test = $users['users'][2]['fname'];
                    
                    if (strcasecmp($users['users'][$i]['fname'], $id) == 0) {
                        $users['users'][$i]['fname'] = $fname;
                        $users['users'][$i]['lname'] = $lname;
                        $users['users'][$i]['email'] = $email;
                        $users['users'][$i]['postalCode'] = $postCode;
                        $users['users'][$i]['password'] = $pass;
                        break;
                    }
                    $i++;
                }
                $updatedData = json_encode($users);
                file_put_contents('../DB/users.json', $updatedData);
        ?>
            <div class="banner mb-3 mx-4"></br>
                <h1>General Information</h1>
                <div class="form-group row">
                  <label for="date"  class="col-sm-2 col-form-label">Date Joined:</label>
                  <div class="col-sm-3">
                    <input class="form-control" id="dateYaz" type="text" placeholder="17/03/2012" readonly = 'dateYazz'>
                  </div>
                  <label for="membership"  class="col-sm-2 col-form-label">Member Since:</label>
                  <div class="col-sm-3">
                      <input class="form-control" id = "memberYaz" type="text" placeholder="12/06/2018" readonly = 'memberYazz'>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="memberid" class="col-sm-2 col-form-label">Member ID</label>
                    <div class = "col-sm-3">
                        <input class="form-control" id="memberIdYaz" type="text" placeholder="8719362" readonly = 'memberIdYazz'>
                    </div>
                    <label for="points" id="points" class="col-sm-2 col-form-label">Points Accumulated</label>
                    <div class="col-sm-3">
                        <input class="form-control" id="pointsYaz" type="text" placeholder="0" readonly = 'pointsYazz'>
                    </div>
                </div>
            </div>
            <div class = "text-center">
                <button type = "submit" id = "delBtnUser" class = "btn btn-success">Delete this user</button>
                <button type = "button" id = "userListBtn" onclick = "location.href='userList.php'" class = "btn btn-success">Select another user</button>
            </div>
        </form>
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
      <script src="../JS/users.js"></script>
</html>