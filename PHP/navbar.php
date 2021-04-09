<section class="header">
  <h1><a href="index.php">La Meilleure Épicerie</a></h1>
</section>
<section class="nav-bar">
  <ul class="nav-bar-content">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#aisles">Aisles</a></li>
    <li><a href="index.php#offers">Offers</a></li>
    <?php
    if (empty($_SESSION['logIn'])) {
    ?>
      <li><a href="Login.php">Login</a></li>
      <li><a href="Sign Up.php">Sign Up</a></li>
    <?php
    }
    ?>

    <li><a href="../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
  </ul>
</section>