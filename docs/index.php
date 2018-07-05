<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lion Responsive Framework</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link rel="canonical" href="https://juliansalas.com/lion/" />
  <link rel="stylesheet" href="css/lion.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <div id="hero">
    <div class="container">
      <header class="p-t">
        <nav class="navbar light">
        <div class="navbar-brand">
          <a href="#!" class="navbar-item">
            <img src="img/logo.png" alt="Lion">
          </a>
          <button class="navbar-item hamburger">
            <span class="navbar-hamburger">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </div>
        <div class="navbar-menu">
          <div class="navbar-menu-right">
            <div class="navbar-item has-dropdown">
              <a href="#!" class="navbar-link">Components</a>
              <div class="navbar-dropdown ">
                <a class="navbar-item" href="#navbar">Navbar</a>
                <a class="navbar-item" href="#buttons">Buttons</a>
                <?php //<a class="navbar-item" href="#colors">Colors</a> ?>
                <a class="navbar-item" href="#grid">Grid</a>
                <a class="navbar-item" href="#typography">Typography</a>
                <a class="navbar-item" href="#forms">Forms</a>
                <a class="navbar-item" href="#switches">Switches</a>
                <a class="navbar-item" href="#alerts">Alerts</a>
                <a class="navbar-item" href="#tabs">Tabs</a>
                <a class="navbar-item" href="#tables">Tables</a>
                <a class="navbar-item" href="#lists">Lists</a>
                <a class="navbar-item" href="#breadcrumbs">Breadcrumbs</a>
              </div>
            </div>
            <div class="navbar-item has-dropdown">
              <a href="#!" class="navbar-link">Examples</a>
              <div class="navbar-dropdown ">
                <a class="navbar-item" href="/examples/home1">Home Page 1</a>
                <a class="navbar-item" href="/examples/home2">Home Page 2</a>
                <?php // <a class="navbar-item" href="#">Pricing Page</a> ?>
                <?php // <a class="navbar-item" href="#">Contact Page</a> ?>
              </div>
            </div>
            <div class="navbar-item">
              <a href="https://github.com/julians300/lion" class="button">Github</a>
            </div>
          </div>
        </div>
      </nav>
      </header>
    </div>
    <div class="container hero-info center white">
      <h1>Lion Framework</h1>
      <p>A framework for quick responsive web pages.</p>
      <a href="https://github.com/julians300/lion" class="button white">Get Started</a>
      <p><span class="bower">bower install lion</span></p>
      <div class="browser-container">
        <div class="browser-display">
          <img src="img/hero.svg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <section class="features" style="margin-bottom: 50px;">
        <h2 class="title">Delightfully Simple</h2>
        <div class="row">
          <div class="four">
            <img class="icon" src="img/bolt.svg" alt="">
            <h3>Streamlined</h3>
            <p class="muted">Use basic markup to quickly create rich and beautiful web pages.</p>
          </div>
          <div class="four">
            <img class="icon" src="img/phone.svg" alt="">
            <h3>Responsive</h3>
            <p class="muted">Create your page once and it will work on all devices.</p>
          </div>
          <div class="four">
            <img class="icon" src="img/palette.svg" alt="">
            <h3>Customizeable</h3>
            <p class="muted">Easily extend the framework to fit your design needs.</p>
          </div>
        </div>
    </section>
    <div class="docs-wrap">
      <div class="table-of-contents">
        <div class="contents-inner">
          <h3>Components</h3>
          <ul>
            <li><a href="#navbar">Navbar</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <?php //<li><a href="#colors">Colors</a></li> ?>
            <li><a href="#grid">Grid</a></li>
            <li><a href="#typography">Typography</a></li>
            <li><a href="#forms">Forms</a></li>
            <li><a href="#switches">Switches</a></li>
            <li><a href="#alerts">Alerts</a></li>
            <li><a href="#tabs">Tabs</a></li>
            <li><a href="#tables">Tables</a></li>
            <li><a href="#lists">Lists</a></li>
            <li><a href="#breadcrumbs">Breadcrumbs</a></li>
          </ul>
        </div>
      </div>
      <div class="components-wrap">
        <?php include ('components/navbar.php'); ?>
        <?php include ('components/buttons.php'); ?>
        <?php // include ('components/colors.php'); ?>
        <?php include ('components/grid.php'); ?>
        <?php include ('components/typography.php'); ?>
        <?php include ('components/forms.php'); ?>
        <?php include ('components/switches.php'); ?>
        <?php include ('components/alerts.php'); ?>
        <?php include ('components/tabs.php'); ?>
        <?php include ('components/tables.php'); ?>
        <?php include ('components/lists.php'); ?>
        <?php include ('components/breadcrumbs.php'); ?>
        <?php // include ('components/utilities.php'); ?>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="footer-logo">
        <img class="foot-logo block" src="img/logo-b.png" alt="" class="center block">
      </div>
      <ul class="center">
        <li>Version 1.3.0</li>
        <li>•</li>
        <li><a href="http://www.github.com/julians300/lion">Github</a></li>
      </ul>
      <div class="madewith">
        <p class="center">Made with <span class="taco">🌮</span> in San Antonio.</p>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/lion.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>