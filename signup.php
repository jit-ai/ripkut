<?php include("header.php") ?>

<section class="py-5">
	<div class="container">
		<div class="row">
		<div class="col-md-5">
		<h2 class="title mb-5">Sign up to<span class="text-red"> Ripcut</span></h2>
		<form action="/action_page.php">
  
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Full Name">
	<div class="input-group-append">
      <span class="input-group-text"><i class="fa fa-user"></i></span>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Email">
	<div class="input-group-append">
      <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Phone Number">
	<div class="input-group-append">
      <span class="input-group-text"><i class="fa fa-phone"></i></span>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password">
    <div class="input-group-append">
      <span class="input-group-text input-password-hide" style="cursor: pointer;"><i class="fa fa-eye"></i>
    </div>
  </div>
  <button type="submit" class="custom-button">Sign up</button>
  <hr class="my-5">
  
  <button type="submit" class="custom-button-black mb-3"><i class="fa fa-google"></i> Log in with Google</button>
  <button type="submit" class="custom-button-black mb-3"><i class="fa fa-twitter"></i> Log in with Twitter</button>
  <div class="clearfix mt-3">
  <a  href="login.php" class="login-forget float-left text-black ">Already have an account ?</a>
  <a href="login.php" class="login-forget float-right text-red">Log in now</a>
  </div>
</form>


		</div>
		<div class="col-md-7">
		<div class="login-image p-5">
		<img src="images/img.jpg">
		</div>
		</div>
		</div>
	</div>
</section>


<!-- Footer -->
<?php include("footer.php") ?>

