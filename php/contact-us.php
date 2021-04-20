<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
</head>

<body>
    <?php
	  require('navbar.php');
	  ?>
    <div class="contact-us">
        <div class="col-50">
            <h3>Contact Us</h3>
        </div>
        <div class="col-50">
            <form action="../php/contact.php" method="POST" name="contact" onsubmit="return checkInput()">
                <div><p id="result"></p></div>
                <input type="text" name="userName" placeholder="User Name">
                <input type="text" name="itemNumber" placeholder="Item Number">
                <input type="text" name="orderNumber" placeholder="Order Number as #12345AB">
                <textarea name="question" placeholder="Message"></textarea>
                <div class="buttons">
                    <input type="submit" value="Submit" class="btn-form">
                    <input type="reset" value="Clear" class="btn-form"> 
                </div>
            </form>
        </div>
    </div>
    <?php
	require('footer.php');
	?>
    
    <script src="../JS/index.js"></script>
</body>

</html>