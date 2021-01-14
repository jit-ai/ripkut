<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ripkut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"  />
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
  <!----------------Animation------------------->
  <link rel="stylesheet"  href="css/animate.min.css">
  <link rel="stylesheet"  href="css/app.css">
  <script src="js/wow.min.js"></script>
  <script src="js/app.js"></script>
</head>
<script>
    WOW.prototype.addBox = function(element) {
     this.boxes.push(element);
     };
 
     var wow = new WOW();
     wow.init();
 
 
     $('.wow').on('scrollSpy:exit', function() {
     $(this).css({
       'visibility': 'hidden',
       'animation-name': 'none'
     }).removeClass('animated');
     wow.addBox(this);
     }).scrollSpy();
   </script>



<!--Main Navigation-->
<header>
		<div class="topbar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="social">
                                <a class="mediaicon" href="#" >
								<i class="fa fa-facebook"></i>
								</a>              
                                <a class="mediaicon" href="#" >
								<i class="fa fa-twitter"></i>
								</a>
								<a class="mediaicon" href="#" >
								<i class="fa fa-instagram"></i>
								</a>
								<a class="ripkut" href="" title="View your shopping cart"><span class="cart-container"><span class="cart-count">1</span> <i class="fa fa-shopping-cart"></i></span> <span class="text-white">-</span> <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>119.00</bdi></span></a>
								
								</a>
                              
                            </div>
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
  <nav class="navbar navbar-expand-lg  scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/Group 2.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<ul class="menuhumberge">
		<li>
		 <span class="navbar-toggler-icon"></span>
		</li><li>
		 <span class="navbar-toggler-icon"></span>
		</li>
		<li>
		 <span class="navbar-toggler-icon"></span>
		</li>
		</ul>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dumbblls
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="container">
            <div class="row dumbbell-child-categories">
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="product.php">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
			  <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accessories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="container">
            <div class="row dumbbell-child-categories">
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
              <!-- /.col-md-4  -->
			  <div class="col-md-3 child-category-container px-0">
			  <div class="category-menu">
                <a href="#">
				<div class="category-thumb">
				<img src="images/Mask Group.png"/>
				</div>
				<div  class="category name">
				<p>Dumble Name</p>
				</div>
				</a>
				</div>
              </div>
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link" href="#">
          Merchandise
        </a>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!--End Main Navigation-->
