@extends('layouts.customer')
@section('storeactive')
class="active"
@endsection
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
          <h4>Shopping cart</h4>
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
              <li class="active"><a href="../store/">Store</a></li>
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
    <hr class="offset-top">

    <div class="tags">
      <div class="container">
          <div class="btn-group pull-right sorting">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ion-arrow-down-b"></i> Sorting by name
            </button>

            <ul class="dropdown-menu">
              <li class="active"><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
              <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
            </ul>
          </div>

          <p>Search by tags</p>
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default btn-sm active">
              <input type="radio" name="options" id="option1" checked> All products
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option2"> Desktops
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option3"> Laptops
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option4"> Tablets
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option5"> Hybrids
            </label>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-4 col-md-3">
          <hr class="offset-lg">

          <div class="filter">
            <div class="item">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Type</h1>
                </div>

                <div class="controls">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Desktops">Desktops</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Laptops">Laptops</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Tablets">Tablets</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Hybrid">Hybrids</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>

            <br>

            <div class="item">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Screen</h1>
                </div>

                <div class="controls grid">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="7 in">7 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="10 in">10 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="11 in">11 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="14 in">14 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="15 in">15 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="17 in">17 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>

            <br>

            <div class="item">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="#clear" data-action="clear-price"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Price</h1>
              </div>

              <div class="controls">
                  <br>
                  <div id="slider-price"></div>
                  <br>
                  <p id="amount"></p>
              </div>
            </div>
            <br>

            <div class="item lite">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Manufacturer</h1>
                </div>

                <div class="controls">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Hp">Hp</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="ASUS">ASUS</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Acer">Acer</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Dell">Dell</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Sony">Sony</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Apple">Apple</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Lenovo">Lenovo</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Microsoft">Microsoft</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-8 col-md-9">
          <hr class="offset-lg">

          <div class="products">
            <div class="row">


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/apple-imac-27-retina.jpg" alt="Apple iMac 27 Retina"/></a>

                  <div class="content">
                    <h1 class="h3">iMac 27 Retina</h1>
                    <p class="price">$2099.99</p>
                    <label>Desktop</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/microsoft-surface-studio.jpg" alt="Microsoft Surface Studio"/></a>

                  <div class="content">
                    <h1 class="h3">Surface Studio</h1>
                    <p class="price">$3749.99</p>
                    <label>Laptops</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/dell-inspiron-23.jpg" alt="Dell Inspion 23"/></a>

                  <div class="content">
                    <h1 class="h3">Dell Inspion 23</h1>
                    <p class="price">$1987.99</p>
                    <p class="price through">$2100.99</p>
                    <label>Laptops</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/ipad-air.jpg" alt="iPad Air"/></a>

                  <div class="content">
                    <h1 class="h4">iPad Air</h1>
                    <p class="price">$449.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/ipad-mini.jpg" alt="iPad Mini"/></a>

                  <div class="content">
                    <h1 class="h4">iPad Mini</h1>
                    <p class="price">$399.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/mi-pad-2.jpg" alt="Mi Pad 2/"></a>

                  <div class="content">
                    <h1 class="h4">Mi Pad 2</h1>
                    <p class="sale">$199.99</p>
                    <p class="price through">$249.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/surface-pro.jpg" alt="Surface Pro"/></a>

                  <div class="content">
                    <h1 class="h4">Surface Pro</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga"/></a>

                  <div class="content">
                    <h1 class="h4">Lenovo Yoga</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product hidden-sm">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="../assets/img/products/asus-transformer.jpg" alt="ASUS Transformer"/></a>

                  <div class="content">
                    <h1 class="h4">ASUS Transformer</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>