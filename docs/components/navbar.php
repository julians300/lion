<section>
    <div class="container">
      <h2>Navbar</h2>
      <p>The only classes needed is the "logo" class to identify the branding. The CSS is smart enough to know that the first ul is the navigation and any child ul elements are dropdowns.</p>
      <p>Add the class "bar" to the nav tag to wrap it in a background color.</p>
      <div class="row">
        <nav class="nav">
          <div class="logo">
            <a href="#!">Brand</a>
          </div>
          <ul class="menu">
            <li><a href="#!">Link</a></li>
            <li>
              <a href="#!">Dropdown</a>
              <ul>
                <li><a href="#!">DLink</a></li>
              </ul>
            </li>
            <li><a href="#!">Logout</a></li>
          </ul>
        </nav>
      </div>

      <div class="row">
        <nav class="nav bar">
          <div class="logo">
            <a href="#!">Brand</a>
          </div>
          <ul class="menu">
            <li><a href="#!">Link</a></li>
            <li>
              <a href="#!">Dropdown</a>
              <ul>
                <li><a href="#!">Link</a></li>
              </ul>
            </li>
            <li><a href="#!">Link</a></li>
            
          </ul>
          
        </nav>
      </div>
      <div class="row">
<pre><code>
&lt;nav class="nav"&gt;

  &lt;div class="logo"&gt;

    &lt;a href="#"&gt;Brand&lt;/a&gt;

  &lt;/div&gt;

  &lt;ul&gt;

    &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;

    &lt;li&gt;

      &lt;a href="#"&gt;Dropdown&lt;/a&gt;

      &lt;ul&gt;

        &lt;li&gt;&lt;a href="2"&gt;DLink&lt;/a&gt;&lt;/li&gt;

      &lt;/ul&gt;

    &lt;/li&gt;

    &lt;li&gt;&lt;a href="#"&gt;Logout&lt;/a&gt;&lt;/li&gt;

  &lt;/ul&gt;

&lt;/nav&gt;



&lt;!-- nav bar --&gt;



&lt;nav class="nav bar"&gt;

  &lt;div class="logo"&gt;

    &lt;a href="#"&gt;Brand&lt;/a&gt;

  &lt;/div&gt;

  &lt;ul&gt;

    &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;

    &lt;li&gt;

      &lt;a href="#"&gt;Dropdown&lt;/a&gt;

      &lt;ul&gt;

        &lt;li&gt;&lt;a href="2"&gt;DLink&lt;/a&gt;&lt;/li&gt;

      &lt;/ul&gt;

    &lt;/li&gt;

    &lt;li&gt;&lt;a href="#"&gt;Logout&lt;/a&gt;&lt;/li&gt;

  &lt;/ul&gt;

&lt;/nav&gt;

</code></pre>

      </div>
    </div>
  </section>