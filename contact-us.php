<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
  <?php include "includes/include_css.html";?>
</head>

<body>

  <?php include "includes/browser_upgrade.html";?>

  <div class="page-wrap">
    <?php include "includes/header.html";?>
    <!--  insert body content  -->
    <!-- breadcumb structure -->
    <div class="breadcrumb b-white">
      <a href="index.php">home</a>
      <span> > </span>
      <a href="#">media</a>
    </div>
    <!-- breadcumb structure -->

    <!-- svg heading part -->
    <section class="svg-heading">
      <div class="outer-valign">
      <div class="inner-valign">
        <?php include "svg/media.svg";?>
      </div>
      </div>
    </section>
    <!-- svg heading part -->

    <!-- address part starts here -->
    <div class="container">
      <div class="row contact-top">
        <div class="col-sm-6">
          <h3>Lorem ipsum dolor sit ame, consectetur adipisicing elit, sed do eiusmod tempor 
              incididunt ut labore et.
          </h3>
        </div>
        <div class="col-sm-3">
          <div class="address-block">
            <h4>address</h4>
            <span><img src="http://via.placeholder.com/30x30" class="img-responsive"></span>
            <address>
              Unit #407, Om Annexe, 
              Plot #547, Behind Bhoom
              Plaza mall, Off Tulsi pipe 
              rd, Elphinstone, 
              Mumbai - 400028, India.
            </address>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="contact-block">
            <h4>contact</h4>
            <a href="tel:2243226000">
              <span><img src="http://via.placeholder.com/30x30" class="img-responsive"></span>
              <span>+91 22 43226000</span>
            </a>
            <a href="mailto:redarchitects@redarchitects.in">
              <span><img src="http://via.placeholder.com/30x30" class="img-responsive"></span>
              <span>redarchitects@redarchitects.in</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- address part ends here -->

  <section class="map-form">
    <!-- map here -->
    <section class="map-outer">
      <div class="container">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <div class="map">
              <img src="http://via.placeholder.com/900x500" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
      <div class="white-patch"></div>
    </section>
    <!-- map ends -->
    <!-- form part starts here -->
    <form action="" method="post" class="contact-form">
      <div class="container">
        <div class="row">
          <h4>reach out to us</h4>
          <div class="col-sm-4">
            <input type="text" name="name" placeholder="Your Name">
          </div>
          <div class="col-sm-4">
            <input type="text" name="phone" placeholder="Your Number">
          </div>
          <div class="col-sm-4">
            <input type="text" name="mail" placeholder="Email">
          </div>
          <div class="col-sm-12">
            <textarea name="msg" placeholder="Type Your Message Here"></textarea>
          </div>
          <div class="col-sm-offset-4 col-sm-4">
            <input type="submit" name="submit" value="GET IN TOUCH">
          </div>
        </div>
      </div>
    </form>
    <!-- form part ends here -->
  </section>

  <!--  end body content -->
  <div class="site-footer">
    <?php include "includes/footer.html";?>
  </div>
  <?php include "includes/include_js.html";?>

</body>
</html>
