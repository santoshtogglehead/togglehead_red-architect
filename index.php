<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
  <?php include("includes/include_css.html") ?>
  <style>
    .h1{
      display: none;
    }
  </style>
</head>

<body>

  <?php include("includes/browser_upgrade.html") ?>

  <div class="page-wrap">
    <?php include("includes/header.html") ?>

    <!-- side-nav-bar starts here -->
    <ul class="sidebar">
      <li>Home</li>
      <li>About Us</li>
      <li>Our Work</li>
      <li>Client Speaks</li>
    </ul>
    <!-- side-nav-bar ends here -->

    <!--  insert body content  -->
    <!-- <section class="b">
      <h1>Demo</h1>
      <h1>Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
      <h1 class="h1">Demo</h1>
    </section> -->
    <section class="home-section"></section>
    <section class="about-section"></section>
    <section class="our-work-section"></section>
    <section class="home-slider-2">
      <div class="container">
        <div class="row"> 
          <div class="col-md-4 col-md-push-8">
            <div class="inverted-box">
              <p>hear more about us from them</p>
              <h5>Client Speaks</h5>
            </div>
          </div>
          <div class="col-md-8 col-md-pull-4">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption wow fadeIn" data-wow-duration="3s">
                    <p>At RED, each of the four partners brings a complementary strength and thus provides the client with a thoroughly creative &amp; professional approach to the project from
                    conceptualization to implementation to final hand over. They are very approachable, practical and open minded with regards to the clients needs. Building a house in India is no easy feat and I could not have asked for better support in my first project.</p>
                    <div class="footer-part">
                      <span>- suneet kothari, spanish villa1</span>
                      <span>architecture, residential</span>
                    </div>
                  </div>
                  <div class="image-part wow fadeIn" data-wow-duration="3s">
                  </div>                
                </div>

               <div class="item">
                  <div class="carousel-caption wow fadeIn" data-wow-duration="3s">
                    <p>At RED, each of the four partners brings a complementary strength and thus provides the client with a thoroughly creative &amp; professional approach to the project from
                    conceptualization to implementation to final hand over. They are very approachable, practical and open minded with regards to the clients needs. Building a house in India is no easy feat and I could not have asked for better support in my first project.</p>
                    <div class="footer-part">
                      <span>- suneet kothari, spanish villa2</span>
                      <span>architecture, residential</span>
                    </div>
                  </div>
                  <div class="image-part wow fadeIn" data-wow-duration="3s">
                  </div>                
                </div>
              
                <div class="item">
                  <div class="carousel-caption wow fadeIn" data-wow-duration="3s">
                    <p>At RED, each of the four partners brings a complementary strength and thus provides the client with a thoroughly creative &amp; professional approach to the project from
                    conceptualization to implementation to final hand over. They are very approachable, practical and open minded with regards to the clients needs. Building a house in India is no easy feat and I could not have asked for better support in my first project.</p>
                    <div class="footer-part">
                      <span>- suneet kothari, spanish villa3</span>
                      <span>architecture, residential</span>
                    </div>
                  </div>
                  <div class="image-part wow fadeIn" data-wow-duration="3s">
                  </div>                
                </div>


              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
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
<!--   <script>
    var a = $('.b').children('.h1').length;
    var total, numtoshow, temp;
        total = a;
        numtoshow = 2;
        temp=2;

    $('.button').on('click', function(){
        console.log(temp);
        $('.h1').each(function(i){          
          if(i == temp){            
            return false;
          }
          $(this).fadeIn().delay(1000);
        });
        temp += numtoshow;      
    });
  </script> -->
  <script>
    $("#myCarousel").carousel({
      interval : 4000
    });
  </script>

</body> 
</html>
