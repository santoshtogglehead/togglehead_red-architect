<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

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
      <a href="#">residential architecture</a>
    </div>
    <!-- breadcumb structure -->

    <!-- svg heading part -->
    <section class="svg-heading">
      <div class="outer-valign">
      <div class="inner-valign">
        <div class="svg-select-wrapper">
          <?php include("svg/architecture.svg"); ?>
          <ul class="select-wrapper">
            <li>
              <h5 class="select-value">residential</h5>
              <ul class="select-option" style="display: none;">
                <li><span>residential</span></li>
                <li><span>commercial</span></li>
                <li><span>institutional</span></li>
                <li><span>hospitality</span></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </section>
    <!-- svg heading part -->

    <div class="container" style="margin-top: 40px;">
      <div class="row grid">
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/1.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/2.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/3.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/4.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/5.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/6.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 grid-item">
          <a href="architecture-inner.php">
          <div class="architecture-box box">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
            <img src="dist/img/architecture/7.png" class="img-responsive">
            <div class="overlay"></div>
            <div class="architecture-content">
              <h5>architecture : residential</h5>
              <h4>a spanish hacienda</h4>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>

<!--   <a class="button-class">
    <span class="top"></span>
    <span class="right"></span>
    <span class="bottom"></span>
    <span class="left"></span>
    <span>load more</span>
  </a> -->
  <p class="archi-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  <!--  end body content -->
  <div class="site-footer">
    <?php include("includes/footer.html") ?>
  </div>
  <?php include("includes/include_js.html") ?>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
  <script>
    $(window).on('load', function(){
      // $('.grid').css('opacity','0');
      $('.grid').masonry({
        itemSelector: '.grid-item'
      }); 
      // $('.grid .grid-item').children('.hide-grid').hide(200);
      // $('.grid').css('opacity','1');
    });       
  </script>
    <!-- <script>
    var a = $('.grid .grid-item').children('.hide-grid').length;
    var total, numtoshow, temp;
        total = a;
        numtoshow = 2;
        temp=2;

    $('.button-class').on('click', function(){
        console.log(temp);
        $('.hide-grid').each(function(i){          
          if(i == temp){            
            return false;
          }
          $(this).fadeIn().delay(1000);
        });
        temp += numtoshow;      
    });
  </script> -->
  <script>
    $(document).ready(function(){
      $('.select-wrapper').on('click', function(event){
          event.stopPropagation();
          if($(this).find('.select-value').hasClass('down')){
            $(this).find('.select-value').removeClass('down');
          }
          else{
            $(this).find('.select-value').addClass('down');
          }
          $('.select-option').slideToggle(500);
      });
       $('html').on('click', function(event){
          $('.select-option').slideUp(500);
      });
      $('.select-option li').click(function() {
          var text = $(this).text();
          $('.select-wrapper h5').text(text);
      });
    });
  </script>
</body>
</html>
