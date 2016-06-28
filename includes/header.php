<header id="sticker">
  <div class="topbar hidden-xs">
    <div class="container">
    <div class="col-lg-6 col-sm-6 col-lg-offset-3 col-xs-hidden">
        <div class="sitelogo">
          <a href="/"><img src="/assets/images/logo.png" style="width: 100%; padding: 15px;"></a>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="callus">
        <span class="callustext">Call Us</span>
        <a href="tel:9549477133" class="callusnumber">(954) 947-7133</a>
      </div>
    </div>
  </div>
  </div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="#"><img src="/assets/images/whitelogo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if ($page == "home") { echo 'class="active"'; } ?>><a href="/">Home</a></li>
        <li <?php if ($page == "quote") { echo 'class="active"'; } ?>><a href="/get-your-quote">Get Your Quote</a></li>
        <li <?php if ($page == "credit") { echo 'class="active"'; } ?>><a href="/credit-application">Credit Application</a></li>
        <li <?php if ($page == "vehicles") { echo 'class="active"'; } ?>><a href="/all-vehicles">All Vehicles</a></li>
        <li <?php if ($page == "about") { echo 'class="active"'; } ?>><a href="/about-us">About Us</a></li>
        <li <?php if ($page == "contact") { echo 'class="active"'; } ?>><a href="/contact-us">Contact Us</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>