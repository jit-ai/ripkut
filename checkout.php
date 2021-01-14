<?php include("header.php") ?>

<div class="container py-5">
<h2 class="titletext-black mb-3">Billing Details</span></h2> 
<div class="entry-content">
<form action="/action_page.php">
<div class="row">
<div class="col-md-9">
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <label for="First Name" class="product-content">First Name</label>
    <input type="text" class="form-control">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="Last Name" class="product-content">Last Name</label>
    <input type="text" class="form-control">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="Company" class="product-content">Company Name (optional)</label>
    <input type="text" class="form-control">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="Street" class="product-content">Street Address</label>
    <input type="text" class="form-control" placeholder="House number and street name">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="Town" class="product-content">Town / City </label>
    <input type="text" class="form-control"	>
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="State" class="product-content">State</label>
    <input type="text" class="form-control">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="zip" class="product-content">ZIP</label>
    <input type="text" class="form-control">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="Phone" class="product-content">Phone</label>
    <input type="text" class="form-control">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="email" class="product-content">Email address</label>
    <input type="email" class="form-control">
  </div>
 </div>
</div>
</div>
<div class="col-md-3"></div>
</div>

<h2 class="titletext-black mb-3">Your Order</span></h2>
<div class="woocommerce-cart-form">
<table class="table table_responsive cart" cellspacing="0">
<thead class="thead-dark">
<tr>
<th class="product-remove" class="product-content">Product</th>
<th class="product-thumbnail">&nbsp;</th>
<th class="product-name">&nbsp;</th>
<th class="product-price">&nbsp;</th>
<th class="product-quantity">&nbsp;</th>
<th class="product-subtotal" class="product-content">Total</th>
</tr>
</thead>
</table>
</div>
<div class="cart-collaterals">
<div class="cart_totals ">
<table cellspacing="0" class="shop_table shop_table_responsive table">
<tbody>
<tr class="cart-subtotal">
<th>Selectable Dumbbell 10-50 lbs </th>
<td data-title="Subtotal"><span class="product-content"><bdi><span class="product-content">$</span>119.00</bdi></span></td>
</tr>
<tr class="cart-subtotal">
<th>Subtotal</th>
<td data-title="Subtotal"><span class="product-content"><bdi><span class="product-content">$</span>119.00</bdi></span></td>
</tr>
<tr class="cart-subtotal">
<th>Shipping</th>
<td data-title="Subtotal"><span class="product-content"><bdi><span class="product-content">$</span>119.00</bdi></span></td>
</tr>

<tr class="order-total">
<th>Total</th>
<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>119.00</bdi></span></strong> </td>
</tr>
<tr>
<th></th>
<td>
</td>
</tr>
</tbody>
</table>
<div class="payment py-5">
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Credit Card</label><br>
  <div class="cart-detail">
  <p>Pay via Credit / Debit Card with secure card processing.</p>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
    <label for="Card" class="product-content">Card Number *</label>
    <input type="text" class="form-control" placeholder="1111-2222-3333-4444">
  </div>
 </div>
 <div class="col-md-12">
  <div class="form-group">
    <label for="Expiry" class="product-content">Expiry (MM/YY)</label>
    <input type="date" class="form-control" placeholder="MM/YY">
  </div>
 </div>
 <div class="col-md-2">
  <div class="form-group">
    <label for="Card" class="product-content">Card Code *</label>
    <input type="text" class="form-control" placeholder="CVC">
  </div>
 </div>
 <div class="col-md-12 product-content">
 <label>
    <input type="checkbox" checked="checked" name="sameadr"> Save to account
        </label>
		</div>
  </div>
  </div>
  <hr>
  <input type="radio" id="Paypal" name="gender" value="Paypal">
  <label for="Paypal product-content" >Paypal</label><br>
  <hr>
</div>
<div class="cart-detail">
<div class="row">
<div class="col-md-8 product-content">
<p>Your personal data will be used to process your order, support your experience throughout
this website, and for other purposes described in our<span class="text-red"> privacy policy.</span></p>
<p>
 <label>
  <input type="checkbox" checked="checked" name="sameadr"> I have read and agree to the website<span class="text-red"> terms and conditions *</span>
        </label>
</p>
</div>
<div class="col-md-4 mt-3 text-right">
<a href="#" class="cart-btn btn-size">
Pay Securely Now
</a>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<style>
.cart-detail {
    padding-left: 20px;
}
</style>


<!-- Footer -->
<?php include("footer.php") ?>
