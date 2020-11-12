<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
   <body>
      <?php include 'header.php';?>
      <main>
        <section class="banner-top-fix">
          <div class="inner-banner" style="background: url(images/inner-banner.svg);background-size: cover; background-position: left;">
            <!--  <img src="images/inner-banner.svg" alt=""> -->
              <h1>Checkout</h1>
          </div>
        </section>
        <section>
          <div class="container">
            <form>
            <div class="cart-sec  products-listin-sec mb-5 Checkout">
              <div class="row">
                <div class="col-md-8">
                <div class="header">
                    <h2>Details</h2>
                </div>
                  <div class="main-sec">
                    <div class="Checkout-heading">
                      <span>1</span> Login Details
                    </div>
                    <div class="form-area sec">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="First Name *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Last Name *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" name="" placeholder="Email ID *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Mobile Number *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Password *" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="d-flex" style="align-items:center;justify-content: space-between;">
                        <a class="btn" id="Proceed1">Procced</a>
                        <a href="">Already have an account ?</a>
                      </div>
                    </div>
                  </div>
                  <div class="main-sec">
                    <div class="Checkout-heading">
                      <span>2</span> Delivery Address
                    </div>
                    <div class="form-area sec_1">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Flat, HouseNo., Buld, Company, Apartment *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Area, Colony, Street, Sector, Village*" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" name="" placeholder="Landmark eg- near hospital *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Town/City  *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="" placeholder="Pincode *" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                           <select class="form-control">
                             <option>Select State</option>
                             <option>Delhi</option>
                             <option>Rajasthan</option>
                             <option>Maharashtra</option>
                           </select>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex" style="align-items:center;justify-content: space-between;">
                        <a class="btn" id="Proceed2">Procced</a>
                       
                      </div>
                    </div>
                  </div>
                  <div class="main-sec">
                    <div class="Checkout-heading">
                      <span>3</span> Order Summary
                    </div>
                    <div class="form-area sec_2">
                      <div class="cart-area ds">
                        <div class="img-sec zoomWrapper">
                           <img src="images/handwash.jpeg" class="img-hover">
                        </div>
                        <div class="products-details">
                           <h2>Tea Tree Essential Oil</h2>
                           <p class="para">Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering...</p>
                           <p class="rates">₹200</p>
                           <div class="form-group d-flex align-items-center">
                            QTY
                              <select class="form-control drop-down w-25">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                              </select>
                           </div>
                           <div class="remove-sec">
                            <a href=""><i class="far fa-trash-alt"></i> Remove</a>
                            <a href=""><i class="far fa-share-square"></i> Share</a>
                           </div>
                        </div>
                      </div>

                        <div class="pd">
                            <div class="pd-l">
                            <h2>Personal Details</h2>
                                <div class="d-flex">
                                    <p>Prathmesh</p>
                                    <p>Kori</p>
                                </div>
                                <div class="d-flex">
                                    <p>kori@gmail.com</p>
                                    <p>912919299</p>
                                </div>
                            </div>
                            <div class="pd-l">
                            <h2>Delivery Address</h2>
                                <div class="d-flex">
                                    <ul>
                                        <li>203, Jari Mari Mata Apt</li>
                                        <li>Kharegaon</li>
                                        <li>Kalwa (west)</li>
                                        <li>Thane 605</li>
                                        <li>Maharashtra</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pd">
                            <div class="pd-l">
                            <h2>Payment Method</h2>
                                <div class="py-3">
                                    <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                          <label class="form-check-label" for="exampleRadios1">
                                            COD (Cash on delivery)
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                          <label class="form-check-label" for="exampleRadios2">
                                            Online Payment
                                          </label>
                                        </div>
                                </div>
                            </div>
                        </div>
                      <div class="d-flex" style="align-items:center;justify-content: space-between;">
                        <a class="btn">Procced</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="cart-area position-sti">
                    <div class="header">
                        <h2>Order Details</h2>
                    </div>
                    <div class="product-detail-sec">
                        <div class="price-details">
                            <div class="">
                                <p>Price (3)</p>
                            </div>
                            <div class="">
                            <p class="rates">₹ 600</p>
                             </div>
                        </div>
                        <div class="price-details">
                            <div class="">
                                <p>Delivery Charges</p>
                            </div>
                            <div class="">
                            <p class="rates">FREE</p>
                             </div>
                        </div>
                        <div class="border-b">
                        </div>
                        <div class="price-details Total-amt">
                            <div class="">
                                <p>Total Amount</p>
                            </div>
                            <div class="">
                            <p class="rates">₹ 600</p>
                             </div>
                        </div>
                        <div class="Checkout-btn">
                            <a href="" class="btn w-100">Checkout</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </section>
      </main>

      <?php include 'footer.php';?>
      
   </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $('#Proceed1').click(function() {
    $('.sec_1').show("slow");
    $('.sec_2').hide("slow");
    $('.sec').hide("slow");
    // Alternative animation for example
    // slideToggle("fast");

   callingSlick();

  });
    $('#Proceed2').click(function() {
    $('.sec_2').show("slow");
    $('.sec_1').hide("slow");
    $('.sec').hide("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });
});

</script>