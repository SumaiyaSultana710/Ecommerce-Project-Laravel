@extends('layouts.customer')

@section('indexcontent')
  <body>
    <div class="cart" data-toggle="inactive">
      <div class="label">
        <i class="ion-bag"></i> 7
      </div>

      <div class="overlay"></div>

      <div class="window">
        <div class="title">
          <button type="button" class="close"><i class="ion-android-close"></i></button>
          <h4 class="">Shopping cart</h4>
        </div>

        <div class="content">

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/chrome-book-11.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">HP Chromebook 11</h2>
              <label>Laptops</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/chrome-book-14.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">HP Chromebook 14</h2>
              <label>Laptops</label>
              <p class="price">$209.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/ipad-air.jpg" alt="iPad Air"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">iPad Air</h2>
              <label>Tablets</label>
              <p class="price">$449.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/mi-pad-2.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">Mi Pad 2</h2>
              <label>Tablets</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">Lenovo Yoga</h2>
              <label>Hybrid</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/surface-pro.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">Surface Pro</h2>
              <label>Hybrid</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="../assets/img/products/asus-transformer.jpg" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h2 class="h4 media-heading">ASUS Transformer</h2>
              <label>Hybrid</label>
              <p class="price">$199.99</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                <input type="text" class="form-control input-sm" placeholder="Qty" value="1" readonly="">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>

        </div>

        <div class="checkout container-fluid">
          <div class="row">
            <div class="col-xs-12 col-sm-12 align-right">
              <a class="btn btn-primary" href="../checkout/"> Checkout order </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="toplinks">
      <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Registration</a>
      <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Sign In</a>
      <a href="../favorites/"> <i class="ion-ios-heart"></i> Favorites </a>
      <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
    </div>

    
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../"> Unistore Pro </a>
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> 7 </a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../">Home</a></li>
              <li><a href="../store/">Store</a></li>
              <li><a href="../blog/">Blog</a></li>
              <li><a href="../contacts/">Contacts</a></li>
              <li class="dropdown">
                <a href="../store/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  More <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="../store/product.html">Product</a></li>
                  <li><a href="../about/">About Us</a></li>
                  <li><a href="../checkout/">Checkout</a></li>
                  <li><a href="../faq/">FAQ</a></li>
                  <li><a href="../gallery/">Gallery</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Variations</li>
                  <li><a href="../blog/item-photo.html">Article Photo</a></li>
                  <li><a href="../blog/item-video.html">Article Video</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->


          <div class="search hidden-xs" data-style="hidden">
            <div class="input">
              <button type="button"><i class="ion-ios-search"></i></button>

              <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
          </div>
        </div><!--/.container-fluid -->
    </nav>
    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">


    <section class="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-7 white no-padding">
            <div class="carousel-product" data-count="4" data-current="1">

              <div class="items">
                <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
                <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>


                <div class="item center" data-marker="1">
                  <img src="../assets/img/product/1.jpg" alt="Microsoft Surface Studio" class="background"/>
                </div>
                
                <div class="item" data-marker="2">
                  <img src="../assets/img/product/2.jpg" alt="Microsoft Surface Studio" class="background"/>
                </div>

                <div class="item" data-marker="3">
                  <img src="../assets/img/product/3.jpg" alt="Microsoft Surface Studio" class="background"/>
                </div>

                <div class="item" data-marker="4">
                  <img src="../assets/img/product/video.jpg" alt="Microsoft Surface Studio" class="background"/>

                  <div class="tiles">
                    <a href="#video" data-gallery="#video" data-source="youtube" data-id="BzMLA8YIgG0">
                        <img src="../assets/img/product/video.jpg" alt="Surface Studio">

                      <div class="overlay"></div>
                      <div class="content">
                        <div class="content-outside">
                          <div class="content-inside">
                            <i class="ion-ios-play"></i>
                            <h2 class="white hidden-xs">Introducing Microsoft <br> Surface Studio</h2>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <ul class="markers">
                <li data-marker="1" class="active"></li>
                <li data-marker="2"></li>
                <li data-marker="3"></li>
                <li data-marker="4"></li>
              </ul>

            </div>
          </div>
          <div class="col-sm-5 col-md-5 no-padding-xs">
            <div class="caption">
              <img src="../assets/img/brands/microsoft.png" alt="Microsoft" class="brand hidden-xs hidden-sm" />

              <h1>Surface Studio</h1>

              <p> &middot; OS Windows™ 10</p>
              <p> &middot; 28 Inch PixelSense™ Display</p>
              <p> &middot; Intel Core i5/i7</p>
              <hr class="offset-md hidden-sm">
              <hr class="offset-sm visible-sm">
              <hr class="offset-xs visible-sm">

              <p class="price">$2 999.00</p>
              <p class="price through">$3 449.99</p>
              <hr class="offset-md">

              <button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button>
              <button class="btn btn-link"> <i class="ion-ios-heart"></i> See later </button>
            </div>
          </div>
        </div>
        <hr class="offset-sm hidden-xs">

        <div class="row">
          <div class="col-sm-7 white sm-padding">
            <hr class="offset-sm visible-xs">

            <h2 class="h1">Microsoft Surface Studio</h2>
            <br>

            <p>
              Visualize ideas as you paint, edit, and design. Let the 10-bit color depth and strikingly large 28” display pull you in from across the room. Or, lose yourself in the creative details of your work.
              Surface Studio is designed with a Zero Gravity Hinge that moves the display weightlessly from an upright angle, down into Studio Mode with one hand.
            </p>
            <br>

             <h2>Product specifications</h2>
             <br>

              <div class="row specification">
                <div class="col-sm-4"> <label>Operating system</label> </div>
                <div class="col-sm-8"> <p>Windows 10™</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Display</label> </div>
                <div class="col-sm-8">
                  <p>
                  Screen: 28" PixelSense Display<br>
                    Resolution: 4500 x 3000 (192 DPI)<br>
                    Color settings: sRGB, DCI-P3, and Vivid color profiles, individually color calibrated<br>
                    Touch: 10-point multi-touch
                  </p>
                </div>
              </div>
              
              <div class="row specification">
                <div class="col-sm-4"> <label>Processor</label> </div>
                <div class="col-sm-8"> <p>Quad-core 6th Gen Intel Core i5 or i7</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Processor technology</label> </div>
                <div class="col-sm-8"> <p>Intel Turbo Boost Technology</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Graphics</label> </div>
                <div class="col-sm-8"> <p>NVIDIA GeForce GTX 965M 2GB GPU GDDR5 memory or NVIDIA GeForce GTX 980M 4GB GPU GDDR5 memory</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Memory</label> </div>
                <div class="col-sm-8"> <p>8GB, 16GB, or 32GB RAM</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Hard drive</label> </div>
                <div class="col-sm-8"> <p>Rapid hybrid drive options: 64GB SSD with 1TB HDD, 128GB SSD with 1TB HDD, 128GB SSD with 2TB HDD</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Wireless</label> </div>
                <div class="col-sm-8">
                  <p>
                    Wi-Fi: 802.11ac Wi-Fi wireless networking, IEEE 802.11 a/b/g/n compatible<br>
                    Bluetooth: Bluetooth 4.0 wireless technology<br>
                    Xbox Wireless built-in
                  </p>
                </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Power supply</label> </div>
                <div class="col-sm-8"> <p>45 W AC power adapter</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Battery</label> </div>
                <div class="col-sm-8"> <p>3-cell, 36 Wh Li-ion</p> </div>
              </div>

              <hr class="offset-lg">
          </div>
          <div class="col-sm-5 no-padding-xs">
            <div class="talk white">
              <h2 class="h3">Do you have any questions?</h2>
              <p class="">Whatsuping now with our manager</p>
              <hr class="offset-md">

              <a href="tel:+80005554465" class="btn btn-primary btn-sm"> <i class="ion-social-whatsapp"></i> 8000 555-44-65 </a>
              <hr class="offset-md visible-xs">
            </div>
            <hr class="offset-sm hidden-xs">

            <div class="comments white">
              <h2 class="h3">What do you think? (#3)</h2>
              <br>


              <div class="wrapper">
                <div class="content">
                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>


                  <h3>Chris Hemsworth</h3>
                  <label>Today</label>
                  <p>
                    Samsung's Galaxy S7 smartphone is getting serious hype. Here's what it does better than Apple's iPhone 6s.
                  </p>


                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>
                </div>
              </div>
              <hr class="offset-lg">
              <hr class="offset-md">

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
              <hr class="offset-md visible-xs">
            </div>            
          </div>
        </div>
      </div>
    </section>
    <hr class="offset-lg">

    <section class="products">
      <div class="container">
        <h2 class="upp align-center-xs"> Related products </h2>
        <hr class="offset-lg">

        <div class="row">

          <div class="col-sm-4 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/apple-imac-27-retina.jpg" alt="Apple iMac 27 Retina"/></a>

              <div class="content align-center">
                <p class="price">$2099.99</p>
                <h2 class="h3">iMac 27 Retina</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/dell-inspiron-23.jpg" alt="Dell Inspion 23"/></a>

              <div class="content align-center">
                <p class="price">$1987.99</p>
                <h2 class="h3">Dell Inspion 23</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga 900"/></a>

              <div class="content align-center">
                <p class="price">$1899.99</p>
                <h2 class="h3">Lenovo Yoga 900</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 product hidden-sm">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/hp-spectre-x360.jpg" alt="HP Spectre x360"/></a>

              <div class="content align-center">
                <p class="price">$2994.99</p>
                <h2 class="h3">HP Spectre x360</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>