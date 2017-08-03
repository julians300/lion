<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lion Responsive Framework</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://juliansalas.com/lion/" />
  <!-- Lion -->
  <link rel="stylesheet" href="../lion/lion.min.css">
  <!-- <link rel="stylesheet" href="bower/lion/lion.min.css"> -->
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../lion/lion.min.js"></script>
  <!-- <script src="bower/lion/lion.min.js"></script> -->
</head>
<body>
  <div id="hero">
    <div class="container">
      <header>
        <nav class="nav white">
          <a href="<?php echo $root ?>" class="logo">
            <img src="img/logo.png" alt="">
          </a>
          <ul class="menu">
            <li><a href="http://www.github.com/julians300/lion" class="white">Github</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <div class="container hero-info center white">
      <h1>Lion Framework</h1>
      <p>A framework for quick responsive web pages.</p>
      <a href="http://www.github.com/julians300/lion" class="button outline">Fork on Github</a>
      <p><span class="bower">bower install lion</span></p>
    </div>
  </div>
  <section class="features" style="margin-bottom: 50px;">
    <div class="container">
      <h2 class="center title">Delightfully Simple</h2>
      <div class="row">
        <div class="four columns center">
          <img class="icon" src="img/bolt.png" alt="">
          <h3>Streamlined</h3>
          <p>Use basic markup to quickly create rich and beautiful web pages.</p>
        </div>
        <div class="four columns center">
          <img class="icon" src="img/phone.png" alt="">
          <h3>Responsive</h3>
          <p>Create your page once and it will work on all devices.</p>
        </div>
        <div class="four columns center">
          <img class="icon" src="img/palette.png" alt="">
          <h3>Customizeable</h3>
          <p>Easily extend the framework to fit your design needs.</p>
        </div>
      </div>
    </div>
  </section>
  <?php include ('components/grid.php'); ?>
  <?php include ('components/typography.php'); ?>
  <?php include ('components/buttons.php'); ?>
  <?php include ('components/forms.php'); ?>
  <?php include ('components/switches.php'); ?>
  <?php include ('components/navbar.php'); ?>
  <?php include ('components/alerts.php'); ?>
  <?php include ('components/tabs.php'); ?>
  <?php include ('components/tables.php'); ?>
  <?php include ('components/lists.php'); ?>
  <?php include ('components/breadcrumbs.php'); ?>
  <?php // include ('components/utilities.php'); ?>
  <footer>
    <div class="container">
      <div class="footer-logo">
        <img class="foot-logo block" src="img/logo-b.png" alt="" class="center block">
      </div>
      <ul class="center">
        <li>Version 1.2.0</li>
        <li>•</li>
        <li><a href="http://www.github.com/julians300/lion">Github</a></li>
      </ul>
      <div class="madewith">
        <p class="center">Made with <img class="taco" src="img/taco.png" alt=""> in San Antonio.</p>
      </div>
    </div>
  </footer>
</body>
</html>