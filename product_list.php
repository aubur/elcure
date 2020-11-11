<!DOCTYPE html>
<html>
   <?php include 'head.php';?>
   <body>
     <?php include 'header.php';?>
      <main>
        <section style="padding-top: 113px">
          <div class="inner-banner" style="background: url(images/inner-banner.svg);    background-size: cover;
    background-position: left;">
            <!--  <img src="images/inner-banner.svg" alt=""> -->
              <h1>Products</h1>
          </div>
        </section>
         <div class="container-fluid products-listin-sec product-category pt-4" >
            <div class="header-sec">
               <div class="">
                  <h2>Products</h2>
               </div>
               <div class="    ">
                  <select style=" font-size: 13px" class="form-control">
                     <option>Sort By</option>
                     <option>Featured</option>
                     <option>Newest</option>
                     <option>Price: High - Low</option>
                     <option>Price: Low - High</option>
                  </select>
               </div>
            </div>
            <div class="row" style="justify-content: center;">
               <div class="col-md-2" data-aos="fade-up"  data-aos-duration="1000">
                  <div class="product-nature pb-5 pc-desktop hidden-menu">
                     <form>
                        <div class="color cp mt-2 w-100 acive" id="product">
                           <div class="product-sidebar-header">
                              <h2 class="d-inline-block cp">shop by sizes</h2>
                              <div class="d-inline-block float-right pc-arrow">
                                 <i class="fas fa-chevron-down"></i>
                              </div>
                           </div>
                           <div class="border-b"></div>
                           <div class="product-content" id="product-content">
                              <!-- id="toggle-example" class="collapse in active" -->
                              <div class="my-3">
                                 <label class="con">Large
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="con">Medium
                                 <input type="checkbox">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="con">Small
                                 <input type="checkbox">
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="color cp mt-3 w-100" id="color">
                           <div class="product-sidebar-header">
                              <h2 class="d-inline-block">shop by colour</h2>
                              <div class="d-inline-block float-right pc-arrow">
                                 <i class="fas fa-chevron-down"></i>
                              </div>
                           </div>
                           <div class="border-b"></div>
                           <div>
                              <!-- id="toggle-color" class="collapse in" -->
                              <div class="my-3" id="color-content">
                                 <div class="col-md-12">
                                    <div class="row" style="font-size: 13px">
                                       <div class="color-outer">
                                          <label class="color-con"><span class="number"></span>
                                          <input type="checkbox">
                                          <span class="checkmark-color black"></span>
                                          </label>
                                          <div class="color-text">
                                             <p>black</p>
                                          </div>
                                       </div>
                                       <div class="color-outer">
                                          <label class="color-con"><span class="number"></span>
                                          <input type="checkbox">
                                          <span class="checkmark-color green"></span>
                                          </label>
                                          <p>Green</p>
                                       </div>
                                       <div class="color-outer">
                                          <label class="color-con"><span class="number"></span>
                                          <input type="checkbox">
                                          <span class="checkmark-color grey"></span>
                                          </label>
                                          <p>grey</p>
                                       </div>
                                       <div class="color-outer">
                                          <label class="color-con"><span class="number"></span>
                                          <input type="checkbox">
                                          <span class="checkmark-color pink"></span>
                                          </label>
                                          <p>pink</p>
                                       </div>
                                       <div class="color-outer">
                                          <label class="color-con"><span class="number"></span>
                                          <input type="checkbox" checked="checked">
                                          <span class="checkmark-color blue"></span>
                                          </label>
                                          <p>blue</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="color cp mt-2 w-100 acive" id="prices">
                           <div class="product-sidebar-header">
                              <h2 class="d-inline-block cp">shop by prices</h2>
                              <div class="d-inline-block float-right pc-arrow">
                                 <i class="fas fa-chevron-down"></i>
                              </div>
                           </div>
                           <div class="border-b"></div>
                           <div class="product-content" id="product-content">
                              <!-- id="toggle-example" class="collapse in active" -->
                              <div class="my-3">
                                 <label class="con">&#x20B9; 100 - &#x20B9; 500
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="con">&#x20B9; 500 - &#x20B9; 1000
                                 <input type="checkbox">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="con">&#x20B9; 1000 - &#x20B9; 3000
                                 <input type="checkbox">
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="product-listing"  data-aos="fade-up"  data-aos-duration="1000">
                     <div class="products">
                        <div class="img-sec zoomWrapper">
                           <img src="images/handwash.jpeg" class="img-hover">
                        </div>
                        <div class="products-details">
                           <h2>Tea Tree Essential Oil</h2>
                           <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering...</p>
                           <p class="rates">₹200</p>
                           <div class="row buy-products-btn product-description" style="flex-wrap:  nowrap;  ">
                              <div class="">
                                 <a href="" class=" btn_ btn"><i class="fas fa-cart-plus"></i>Add to Cart</a>
                              </div>
                              <div class="">
                                 <a href="product_description.html" class="btn_ btn">Buy it </a>
                              </div>
                              <div class="">
                                 <a href="" class="btn_ btn"><i class="far fa-heart"></i>Add to Wishlist</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="products">
                        <div class="img-sec zoomWrapper">
                           <img src="images/HandandBodyLotion.jpeg" class="img-hover">
                        </div>
                        <div class="products-details">
                           <h2>Lemongrass Essential Oil</h2>
                           <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering...</p>
                           <p class="rates">₹200</p>
                           <div class="row buy-products-btn product-description" style="flex-wrap:  nowrap;  ">
                              <div class="">
                                 <a href="" class=" btn_ btn"><i class="fas fa-cart-plus"></i>Add to Cart</a>
                              </div>
                              <div class="">
                                <a href="product_description.html" class="btn_ btn">Buy it </a>
                              </div>
                              <div class="">
                                 <a href="" class="btn_ btn"><i class="far fa-heart"></i>Add to Wishlist</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="products">
                        <div class="img-sec zoomWrapper">
                           <img src="images/HandandBodyLotion.jpeg" class="img-hover">
                        </div>
                        <div class="products-details">
                           <h2>Rosemary Essential Oil</h2>
                           <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering...</p>
                           <p class="rates">₹200</p>
                           <div class="row buy-products-btn product-description" style="flex-wrap:  nowrap;  ">
                              <div class="">
                                 <a href="" class=" btn_ btn"><i class="fas fa-cart-plus"></i>Add to Cart</a>
                              </div>
                              <div class="">
                                 <a href="product_description.html" class="btn_ btn">Buy it </a>
                              </div>
                              <div class="">
                                 <a href="" class="btn_ btn"><i class="far fa-heart"></i>Add to Wishlist</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
     <?php include 'footer.php';?>
      
   </body>
</html>