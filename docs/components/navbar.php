<section>
    <div class="container">
      <h2>Navbar</h2>
      <p>The only classes needed is the "logo" class to identify the branding. The CSS is smart enough to know that the first ul is the navigation and any child ul elements are dropdowns.</p>
      <p>Add the class "bar" to the nav tag to wrap it in a background color.</p>
    
      <nav class="navbar">
        <div class="navbar-brand">
          <a href="#!" class="navbar-item">
            <img src="img/logo-b.png" alt="Lion">
          </a>
          <a class="navbar-item hamburger">
            <span class="navbar-hamburger">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </a>
        </div>
        <div class="navbar-menu">
          <div class="navbar-menu-left">
            <a class="navbar-item" href="#">
              Home
            </a>
            <div class="navbar-item has-dropdown">
              <a href="#!" class="navbar-link">About</a>
              <div class="navbar-dropdown ">
                <a class="navbar-item " href="#">
                  Overview
                </a>
              </div>
            </div>
            <div class="navbar-item has-dropdown">
              <a href="#!" class="navbar-link">Dropdown</a>
              <div class="navbar-dropdown ">
                <a class="navbar-item " href="#">Overview</a>
                <a class="navbar-item " href="#">Overview items</a>
              </div>
            </div>
          </div>
          <div class="navbar-menu-right">
            <a class="navbar-item" href="#">
              Contact
            </a>
            <div class="navbar-item">
              <a href="#!" class="button">Login</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="row">
<pre><code>
&lt;nav class="navbar">

  &lt;div class="navbar-brand">

    &lt;a href="#!" class="navbar-item">

      &lt;img src="img/logo-b.png" alt="Lion">

    &lt;/a>

    &lt;a class="navbar-item hamburger">

      &lt;span class="navbar-hamburger">

        &lt;span>&lt;/span>

        &lt;span>&lt;/span>

        &lt;span>&lt;/span>

      &lt;/span>

    &lt;/a>

  &lt;/div>

  &lt;div class="navbar-menu">

    &lt;div class="navbar-menu-left">

      &lt;a class="navbar-item" href="#">

        Home

      &lt;/a>

      &lt;div class="navbar-item has-dropdown">

        &lt;a href="#!" class="navbar-link">About&lt;/a>

        &lt;div class="navbar-dropdown ">

          &lt;a class="navbar-item " href="#">

            Overview

          &lt;/a>

        &lt;/div>

      &lt;/div>

      &lt;div class="navbar-item has-dropdown">

        &lt;a href="#!" class="navbar-link">Dropdown&lt;/a>

        &lt;div class="navbar-dropdown ">

          &lt;a class="navbar-item " href="#">Overview&lt;/a>

          &lt;a class="navbar-item " href="#">Overview items&lt;/a>

        &lt;/div>

      &lt;/div>

    &lt;/div>

    &lt;div class="navbar-menu-right">

      &lt;a class="navbar-item" href="#">

        Contact

      &lt;/a>

      &lt;div class="navbar-item">

        &lt;a href="#!" class="button">Login&lt;/a>

      &lt;/div>

    &lt;/div>

  &lt;/div>

&lt;/nav>

</code></pre>

      </div>
    </div>
  </section>