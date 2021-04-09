<section class="header">
  <h1><a href="../PHP/index.php" style="text-decoration:none;color:#000;">La Meilleure Épicerie</a></h1>
</section>
<section class="nav-bar" style="padding: 0 3% 0 3%">
  <ul class="nav-bar-content">
    <li><a href="../PHP/index.php">Home</a></li>
    <li><a href="../PHP/index.php#aisles">Aisles</a></li>
    <li><a href="../PHP/index.php#offers">Offers</a></li>
    <?php
    if (empty($_SESSION['logIn']) || !$_SESSION['logIn']) {
    ?>
      <li><a href="../PHP/login.php">Login</a></li>
      <li><a href="../PHP/signup.php">Sign Up</a></li>
    <?php
    }
    ?>

    <li><a href="../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
  </ul>
</section>