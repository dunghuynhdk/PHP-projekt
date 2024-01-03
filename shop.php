<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Gifts</title>
  <link rel="stylesheet" href="css/shop.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Antique&display=swap" rel="stylesheet">
</head>

<body class="fade-in">
  <header>
    <h1 id="logo"><a href="index.php">MYNEWPAW</a></h1>
    <a href="#" id="cartLink">
      <div id="cartIcon"></div>
    </a>
  </header>

  <section class="main">
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["buyGift"])) {
      // Check if the generated name is stored in the session
      if (isset($_SESSION['generatedName'])) {
        $petName = $_SESSION['generatedName'];
        echo "<p id='pageTitle'>Shop gifts for <span id='shop-petname'>$petName</span></p>";
      } else {
        echo "<p>No pet name selected. Please go back and generate a name.</p>";
      }
    } else {
      echo "<p>No pet name selected. Please go back and generate a name.</p>";
    }
    ?>

    <p class="text">Thank you for your interest</p>
    <p class="text">This Shop page is still under construction</p>
  </section>

  <footer id="footerLinks">
    <a id="go-back" href="index.php">Go back to generate a name</a>
  </footer>
</body>

</html>
