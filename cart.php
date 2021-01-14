<?php include("header.php") ?>

<div class="container py-5">
   <h2 class="titletext-black mb-3">Cart</span></h2>
   
   <div class="entry-content">

<div class="woocommerce">

<form class="woocommerce-cart-form"  method="post">
<table class="table table_responsive cart" cellspacing="0">
<thead class="thead-dark">
<tr>
<th class="product-remove">&nbsp;</th>
<th class="product-thumbnail">&nbsp;</th>
<th class="product-name">Product</th>
<th class="product-price">Price</th>
<th class="product-quantity">Quantity</th>
<th class="product-subtotal">Total</th>
</tr>
</thead>
<tbody>
<tr class="woocommerce-cart-form__cart-item cart_item">
<td class="product-remove">
<a href="#" class="remove" aria-label="Remove this item" >×</a> </td>
<td class="product-thumbnail">
<a href="#"><img width="150" height="150" src="images/product/img33 7.png" class="size-woocommerce_thumbnail" alt=""></a> </td>
<td class="product-name" data-title="Product">
<div class="small-indent">
<a href="#" class="product-content">Travel Bench</a> </div>
</td>
<td class="product-price" data-title="Price">
<span class="product-content">$</span>119.00</bdi></span> </td>
<td class="product-quantity" data-title="Quantity">
1 <input type="hidden" name="" value="1"> </td>
 <td class="product-subtotal" data-title="Total">
<span class="product-content">$</span>119.00</bdi></span> </td>
</tr>

<tr class="woocommerce-cart-form__cart-item cart_item">
<td class="product-remove">
<a href="#" class="remove" aria-label="Remove this item" >×</a> </td>
<td class="product-thumbnail">
<a href="#"><img width="150" height="150" src="images/product/img33 7.png" class="size-woocommerce_thumbnail" alt=""></a> </td>
<td class="product-name" data-title="Product">
<div class="small-indent">
<a href="#" class="product-content">Travel Bench</a> </div>
</td>
<td class="product-price" data-title="Price">
<span class="product-content">$</span>119.00</bdi></span> </td>
<td class="product-quantity" data-title="Quantity">
1 <input type="hidden" name="" value="1"> </td>
 <td class="product-subtotal" data-title="Total">
<span class="product-content">$</span>119.00</bdi></span> </td>
</tr>
<tr>
<td colspan="6" class="actions">
<div class="coupon">
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Apply Coupon" id="myInput">
    <div class="input-group-append" onclick="myFunction()">
      <span class="input-group-text cart-btn" >Apply Coupon
    </div>
  </div>
</div>
<button type="submit" class="btn btn-warning" name="update_cart" value="Update Cart" disabled="" aria-disabled="true">Update Cart</button>
</td>
</tr>
</tbody>
</table>
</form>
<div class="cart-collaterals">
<div class="cart_totals ">
<h2>Cart totals</h2>
<table cellspacing="0" class="shop_table shop_table_responsive table">
<tbody><tr class="cart-subtotal">
<th>Subtotal</th>
<td data-title="Subtotal"><span class="product-content"><bdi><span class="woocommerce-Price-currencySymbol">$</span>119.00</bdi></span></td>
</tr>

<tr class="woocommerce-shipping-totals shipping">
<th>Shipping</th>
<td data-title="Shipping product-content">
Enter your address to view shipping options.

<form class="woocommerce-shipping-calculator"  method="post">
<a href="#" class="shipping-calculator-button text-red " >Calculate shipping</a>
<section class="shipping-calculator-form" style="display:block;">
<div class="clearfix mt-3">
<select  class="form-control cart-form">
<option value="">Select a country…</option>
<option value="US" selected="selected">United States (US)</option> </select>
</div>
<div class="clearfix mt-3">
<select  class="form-control cart-form"  placeholder="State"><option >Select an option…</option><option >Alabama</option><option >Alaska</option></select>
</div>

<div class="clearfix mt-3">
<input type="text" class="form-control cart-form" placeholder="Town/city">
</div>
<div class="clearfix mt-3">
<input type="text" class="form-control cart-form"  placeholder="ZIP">
</div>
<div class="clearfix mt-3">
<button type="submit" name="calc_shipping" value="1" class="button btn btn-warning">Update</button></div>
 </section>
</form>
</td>
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
</tbody></table>
<div class="wc-proceed-to-checkout d-flex justify-content-end">

<a href="checkout.php" class="cart-btn btn-size">
Proceed to checkout
</a>
</div>
</div>
</div>
</div>
</div>

</div>


<!-- Footer -->
<?php include("footer.php") ?>
