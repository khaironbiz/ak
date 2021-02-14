<!-- Start Shop Cart Section -->


<section class="bg-product-cart-option">
    <div class="container">
        <div class="row">
            <div class="product-cart-option">
                <div class="table-box">
                    <table class="cart-products-table">
                        <thead>
                            <tr>
                                <th class="cart-product">Product</th>
                                <th class="cart-price">Price</th>
                                <th class="cart-price">Quantity</th>
                                <th class="cart-total">Total</th>
                                <th class="cart-edit">Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="cart-product">
                                    <div class="product-cart-img">
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/shop/product-cart-img-1.jpg" alt="product-cart-img-1" /></a>
                                    </div>
                                    <!-- .product-cart-img -->
                                    <div class="product-cart-title">
                                        <h4><a href="#">Product Title Here</a></h4>
                                    </div>
                                    <!-- .product-cart-title -->
                                </td>
                                <td class="cart-price">Rp. 2.500.000</td>
                                <td class="cart-price">2</td>
                                <td class="cart-total">Rp. 5.000.000</td>
                                <td class="cart-edit">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='3' class="text-center">SUBTOTAL</td>
                                <td class="cart-price">Rp. 5.000.000
                                <td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- .table-box -->

                <div class="cart-checked-box">
                    <div class="cart-coupon-code">
                        <input type="text" name="text" placeholder="Coupon Code...">
                        <input type="submit" name="submit" value="apply coupon">
                    </div>
                    <!-- .coupon-code -->
                    <div class="cart-update">
                        <button type="submit">proceed checkout</button>
                    </div>
                    <!-- .coupon-code -->
                </div>

            </div>
            <!-- .product-cart-option -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>