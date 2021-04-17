<section class="header">
  <h1><a href="../index.php" style="text-decoration:none;color:#000;">La Meilleure Épicerie</a></h1>
</section>
<section class="nav-bar" style="padding: 0 3% 0 3%">
  <ul class="nav-bar-content">
    <li><a href="../index.php">Home</a></li>
    <li><a href="../index.php#aisles">Aisles</a></li>
    <li><a href="../index.php#offers">Offers</a></li>
    <?php
    if (empty($_SESSION['logIn']) || !$_SESSION['logIn']) {
    ?>
      <li><a href="../login.php">Login</a></li>
      <li><a href="../signup.php">Sign Up</a></li>
    <?php
    }
    ?>

    <li><a href="../Shopping Cart.php" id="right">Shopping Cart</a></li>
  </ul>
</section>