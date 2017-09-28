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
      <a href="#">Our Story</a>
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

    <div class="our-story">
      <section class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="story-text wow fadeInUp" data-wow-duration="1s">
              <h3>We Do</h3>
            </div>

            <div class="story-links wow fadeInLeft" data-wow-duration="1.5s">
              <a href=""><span>Architecture</span></a>
              <a href=""><span>Interior</span></a>
              <a href=""><span class="link-3">Planning</span></a>
            </div>

            <div class="story-head wow fadeInUp" data-wow-duration="3s">
              <h3>Our process and approach towards
                  each project is equally rigorous
                  and comprehensive.
              </h3>
            </div>

          </div>
        </div>
        <div class="row">
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
        </div>
      </section>

      <!-- video section starts-->
      <section class="sect-3">
        <div class="video-sect scalecraftwrappe wow fadeIn" data-wow-duration="3.5s">        
          <iframe id="ytvideo" width="100%" frameborder="0" allowfullscreen=""></iframe>

          <!-- overlay -->
          <div class="overlay" data-vid='E9teYXXNJEo'>
            <div class="outer-valign">
              <div class="inner-valign">
                <div class="text-center">
                  
                  <div class="video-button">
                    <div class="triangle"><span></span></div>
                    <div class="video-button-hover">
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div> 
          <!-- overlay ends -->

        </div>
      </section>
      <!-- video section ends-->



      <section class="container-fluid" style="overflow: hidden;">
        <!-- onscroll come outwards -->
        <div class="col-sm-12">
          <div class="col-sm-5 col-md-4 col-lg-3">
              <div class="media-box box">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bottom"></span>
                <span class="left"></span>
                <div class="out-wrapper1">
                  <div><h3 class="box-txt">Lorem Ipsum Dolor Sitam</h3></div>
                  <div><h4 class="box-txt-2">Our Legacy</h4></div>
                </div>
              </div>
          </div>

          <div class="slider-div">
            <div class="hidden-md hidden-lg hidden-sm">
              <div class="circle-div">
                <div id="next" class="circle-inner">
                  <img class="img-responsive calender-icon" src="dist/img/our-story/calender.png">
                </div>
              </div>
            </div>
            <div id="example">
              <div data-year="2012">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cup
              </div>
              <div data-year="2013">1000+ Free jQuery Plugins</div>
              <div data-year="2014">3000+ Free jQuery Plugins</div>
              <div data-year="2015">4500+ Free jQuery Plugins</div>
              <div data-year="2016" class="active">5500+ Free jQuery Plugins</div>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-8" id="test12">
              <p>Text</p>
            </div>

            <div class="">
              <div class="circle-div">
                  <div id="prev" class="circle-inner">
                    <img class="img-responsive calender-icon" src="dist/img/our-story/calender.png">
                  </div>
              </div>
            </div>

          </div>
          
        </div>
      <!-- onscroll come outward ends -->
      </section>


      <!-- link starts-->
      <section class="sect-5">
        <div class="link-sect linkscalecraftwrapper">
          <div class="text-center">
            <h3><a class="link-atr" href="">WHY RED ARCHITECTS</a></h3>
          </div>
        </div>
      </section>
       
    </div>
    <!-- our story ends-->

  </div>

  <!--  end body content -->
  <div class="site-footer">
    <?php include("includes/footer.html") ?>
  </div>
  <?php include("includes/include_js.html") ?>
  <script>
    $(window).load(function(){
      var a121 = $('#example').find('.active').children('a').attr('data-text');
      $('#test12').html(a121);
    });

    currentyear = 2017;
    $('#example').timeliny({
        afterChange: function(currYear) {
        currentyear = parseInt(currYear);
        console.log(currentyear);
      }
    });
    $('#prev').on('click',function(e){
      if(currentyear > 2012){
        currentyear -= 1; 
        e.preventDefault();
        $('#example').timeliny('goToYear', currentyear);
      }
    });
    $('#next').on('click',function(e){
      if(currentyear < 2017){
        currentyear += 1; 
        e.preventDefault();
        $('#example').timeliny('goToYear', currentyear);
      }
    });
  </script> 
</body>
</html>