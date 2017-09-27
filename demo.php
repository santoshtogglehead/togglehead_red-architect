  <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <?php include("includes/include_css.html") ?>
</head>

<body>

  <?php include("includes/browser_upgrade.html") ?>

  <div class="page-wrap">
    <?php include("includes/header.html") ?>
    <!--  insert body content  -->
    <!-- breadcumb structure -->
    <div class="breadcrumb b-white">
      <a href="index.php">home</a>
      <span> > </span>
      <a href="#">About Us</a>
      <span> > </span>
      <a href="#">Why Red Architects</a>
    </div>
    <!-- breadcumb structure -->

    <!-- svg heading part -->
    <section class="svg-heading">
      <div class="outer-valign">
      <div class="inner-valign">
        <?php include("svg/our-story.svg"); ?>
      </div>
      </div>
    </section>
    <!-- svg heading part -->
    
    <section class="why-red">
       <div class="container-fluid stick-initial">
        <div class="row stick-div stickem-container">
          <div class="col-md-12 div-pad">

            <div class="col-sm-5 col-md-3 sticky-child stickem">
              <div class="media-box box">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bottom"></span>
                <span class="left"></span>
                <div class="out-wrapper1">
                  <div><h3 class="box-txt">Lorem Ipsum Dolor Sitam</h3></div>
                  <div><h4 class="box-txt-2">Our Approach</h4></div>
                </div>
              </div>
            </div>

            <div class="col-sm-7 col-md-9 div-pad-content sticky-parent">
              <div class="col-md-6 wow fadeInUp" data-wow-duration="3.5s">
                  <p class="r-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cup
                  </p>
              </div>
              <div class="col-md-6 wow fadeInUp" data-wow-duration="3.5s">
                  <p class="r-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cup
                  </p>
              </div>
              <div class="col-md-12 mason-div">
                
                  <!-- masonary layout starts here -->
                    <div class="lightgallery-media mason-initial">
                      <a href="dist/img/architecture-inner/masonary/a.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/a.jpg" class="img-responsive">
                      </a>  
                      <a href="dist/img/architecture-inner/masonary/b.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/b.jpg" class="img-responsive">
                      </a>  
                      <a href="dist/img/architecture-inner/masonary/c.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/c.jpg" class="img-responsive">
                      </a>  
                      <a href="dist/img/architecture-inner/masonary/d.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/d.jpg" class="img-responsive">
                      </a>  
                      <a href="dist/img/architecture-inner/masonary/e.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/e.jpg" class="img-responsive">
                      </a>  
                      <a href="dist/img/architecture-inner/masonary/f.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/f.jpg" class="img-responsive">
                      </a>
                      <a href="dist/img/architecture-inner/masonary/f.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/f.jpg" class="img-responsive">
                      </a>
                      <a href="dist/img/architecture-inner/masonary/f.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/f.jpg" class="img-responsive">
                      </a>
                      <a href="dist/img/architecture-inner/masonary/f.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/f.jpg" class="img-responsive">
                      </a>
                      <a href="dist/img/architecture-inner/masonary/f.jpg" class="col-sm-6 col-lg-4 grid-item">
                          <img src="dist/img/architecture-inner/masonary/f.jpg" class="img-responsive">
                      </a>
                      
                    </div>
                  <!-- masonary ends -->
                
              </div>
            </div>
            
            
          </div>

        </div>
       </div>
    </section>
 

  </div>

  <!--  end body content -->
  <div class="site-footer">
    <?php include("includes/footer.html") ?>
  </div>
  <?php include("includes/include_js.html") ?>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

  <script>
    $('#example').timeliny();
    $(window).load(function(){
      var a121 = $('#example').find('.active').children('a').attr('data-text');
      $('#test12').html(a121);
      $('.mason-initial').masonry({
        itemSelector: '.grid-item'
      }); 
    });
    currentyear = 2017;
    $('#prev').on('click',function(e){
      currentyear -= 1; 
      e.preventDefault();
      console.log(currentyear);
      $('#example').timeliny('goToYear', currentyear);
    });

    // Sticky initialization
    $(document).ready(function() {
      $('.stick-initial').stickem();
    });
  </script>

</body>
</html>