<style type="text/css">
    /* The overlay effect with black background */
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
}

/* The content */
.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

/* Close button */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

/* Style the search field */
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>
<header>
            <div class="bb uh">
                <div class="marquee" style="    padding: 10px 0 0;
                    margin: 0;
                    font-size: 14px;
                    background: #495E3D;
                    color:#fff;
                    }">
                    <marquee>🔔Big Super Saver Week: Upto 30% Off On Monthly Regimes. Limited Time Offer! 🔔</marquee>
                </div>
            </div>
            <div class="menu-sec desktop-nav-bar" style="background: #c5e6e6">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler triggerSidebar2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse desktop-nav" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="welness.php">Wellness <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                          <a href="#">tea tree essential oil</a>
                                          <a href="#">lemongrass essential oil</a>
                                          <a href="#">rosemary  essential oil</a>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="beauty.php">Beauty <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                          <a href="#">lip & under eye serum</a>
                                          <a href="#">Nail  serum</a>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="facecare.php"> Facecare <i class="fas fa-angle-down"></i></a>
                                     <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                        <a href="#">Day & Night  face cream</a>
                                        <a href="#">face serum</a>
                                      </div>
                                      <div class="col-5">
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="skincare.php">Skincare <i class="fas fa-angle-down"></i></a> 
                                    <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                        <a href="#">Hand & body lotion</a>
                                        <a href="#">face serum</a>
                                      </div>
                                      <div class="col-5">
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="haircare.php">Haircare <i class="fas fa-angle-down"></i></a>
                                     <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                        <a href="#">Hair oil</a>
                                        <a href="#">Conditioning shampoo </a>
                                      </div>
                                      <div class="col-5">
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="hygiene.php">Hygiene <i class="fas fa-angle-down"></i></a>
                                     <div class="dropdown-content back-attach">
                                      <div class="row" style="justify-content: center;  " >
                                        <div class="col-5">
                                        <a href="#">Body & hand wash</a>
                                      </div>
                                      <div class="col-5  ">
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product_list.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ingredients.php">Ingredients </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-section desktop-nav">
                            <div class="dropdown">
                              <button  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;border: none;overflow: hidden;">
                                <img src="images/search.svg">
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                <div class="form-group p-0 m-0">
                                    <input type="search" name="" class="form-control" placeholder="Search...">
                                </div>
                              </div>
                            </div>
                            <a href="cart.php" class="cart">
                                <i class="fas fa-cart-plus"></i>
                                <div class="qty">
                                    9
                                </div>
                            </a>
                            <a href="" class="cart">
                                <i class="far fa-heart" style="color: #222"></i>
                                <div class="qty">
                                    9
                                </div>
                            </a>
                            <a href="" class="cart">
                                <i class="fas fa-user-alt"  style="color: #222"></i>
                               
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!--Mobile Sidebar  -->
            <div class="mobile-nav-bar">
                <div class="d-flex sc">
                    <div class="logo-sec">

                        <button class="navbar-toggler triggerSidebar2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon humberger"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="r-sec">
                    <div class="hum-sec">
                        <a href="   "><img src="images/search.svg"></a>
                    </div>
                    <a href="cart.php" class="cart">
                                <i class="fas fa-cart-plus"></i>
                                <div class="qty">
                                    9
                                </div>
                    </a>
                    <a href="" class="cart">
                                <i class="far fa-heart" ></i>
                                <div class="qty">
                                    9
                                </div>
                    </a>
                </div>
            </div>
            </div>
            <div class="Sidenavbar">
              <div class="profile-head">
                <div class="header">
                    <a href="">Menu</a>
                    <a class="hideSidebar2 label label-default"> <i class="fa fa-times-circle"></i>
                    Close</a>
                </div>
                <div class="d-flex align-items-center p-1">
                  <img src="images/profile.svg">
                  <p class="m-0 pl-2 text-white">Profile</p>
                </div>
              </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Wellness</a></li>
                    <li><a href="">beauty</a></li>
                    <li><a href="">facecare</a></li>
                    <li><a href="">skincare</a></li>
                    <li><a href="">haircare</a></li>
                    <li><a href="">hygiene</a></li>
                    <li><a href="">produts</a></li>
                    <li><a href="">ingredients</a></li>
                    <li><a href="">about us</a></li>
                    <li class="btop"></li>
                    <li><a href="" class="no-bold">Account</a></li>
                    <li><a href="" class="no-bold">order</a></li>
                    <li><a href="" class="no-bold">contact us</a></li>
                </ul>
            </div>
        </header>
        <script type="text/javascript">
            // Open the full screen search box
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
        </script>