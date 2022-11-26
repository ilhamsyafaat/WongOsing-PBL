  @extends('admin.admin_master')
  @section('admin')
  <!-- Cart -->
  <div class="wrap-header-cart js-panel-cart">
      <div class="s-full js-hide-cart"></div>

      <div class="header-cart flex-col-l p-l-65 p-r-25">
          <div class="header-cart-title flex-w flex-sb-m p-b-8">
              <span class="mtext-103 cl2">
                  Your Cart
              </span>

              <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                  <i class="zmdi zmdi-close"></i>
              </div>
          </div>

          <div class="header-cart-content flex-w js-pscroll">
              <ul class="header-cart-wrapitem w-full">
                  <li class="header-cart-item flex-w flex-t m-b-12">
                      <div class="header-cart-item-img">
                          <img src="{{asset ('backend/images/item-cart-01.jpg') }}" alt="IMG">
                      </div>

                      <div class="header-cart-item-txt p-t-8">
                          <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                              White Shirt Pleat
                          </a>

                          <span class="header-cart-item-info">
                              1 x $19.00
                          </span>
                      </div>
                  </li>

                  <li class="header-cart-item flex-w flex-t m-b-12">
                      <div class="header-cart-item-img">
                          <img src="{{ asset('backend/images/item-cart-02.jpg') }}" alt="IMG">
                      </div>

                      <div class="header-cart-item-txt p-t-8">
                          <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                              Converse All Star
                          </a>

                          <span class="header-cart-item-info">
                              1 x $39.00
                          </span>
                      </div>
                  </li>

                  <li class="header-cart-item flex-w flex-t m-b-12">
                      <div class="header-cart-item-img">
                          <img src="{{ asset('backend/images/item-cart-03.jpg') }}" alt="IMG">
                      </div>

                      <div class="header-cart-item-txt p-t-8">
                          <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                              Nixon Porter Leather
                          </a>

                          <span class="header-cart-item-info">
                              1 x $17.00
                          </span>
                      </div>
                  </li>
              </ul>

              <div class="w-full">
                  <div class="header-cart-total w-full p-tb-40">
                      Total: $75.00
                  </div>

                  <div class="header-cart-buttons flex-w w-full">
                      <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                          View Cart
                      </a>

                      <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                          Check Out
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <!-- Slider -->
  <section class="section-slide">
      <div class="wrap-slick1 rs2-slick1">
          <div class="slick1">
              <div class="item-slick1 bg-overlay1" style="background-image: url(backend/images/slide-05.jpg);" data-thumb="{{ asset('backend/images/thumb-01.jpg') }}" data-caption="Women’s Wear">
                  <div class="container h-full">
                      <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                          <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                              <span class="ltext-202 txt-center cl0 respon2">
                                  Women Collection 2018
                              </span>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                  New arrivals
                              </h2>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                  Shop Now
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="item-slick1 bg-overlay1" style="background-image: url(backend/images/slide-06.jpg);" data-thumb="{{ asset('backend/images/thumb-02.jpg') }}" data-caption="Men’s Wear">
                  <div class="container h-full">
                      <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                          <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                              <span class="ltext-202 txt-center cl0 respon2">
                                  Men New-Season
                              </span>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                  Jackets & Coats
                              </h2>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                  Shop Now
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="item-slick1 bg-overlay1" style="background-image: url(backend/images/slide-07.jpg);" data-thumb="{{ asset('backend/images/thumb-03.jpg') }}" data-caption="Men’s Wear">
                  <div class="container h-full">
                      <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                          <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                              <span class="ltext-202 txt-center cl0 respon2">
                                  Men Collection 2018
                              </span>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                  NEW SEASON
                              </h2>
                          </div>

                          <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                  Shop Now
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="wrap-slick1-dots p-lr-10"></div>
      </div>
  </section>


  <!-- Banner -->
  <div class="sec-banner bg0 p-t-95 p-b-55">
      <div class="container">
          <div class="row">
              <div class="col-md-6 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                      <img src="{{ asset('backend/images/banner-04.jpg') }}" alt="IMG-BANNER">

                      <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                          <div class="block1-txt-child1 flex-col-l">
                              <span class="block1-name ltext-102 trans-04 p-b-8">
                                  Women
                              </span>

                              <span class="block1-info stext-102 trans-04">
                                  New Trend
                              </span>
                          </div>

                          <div class="block1-txt-child2 p-b-4 trans-05">
                              <div class="block1-link stext-101 cl0 trans-09">
                                  Shop Now
                              </div>
                          </div>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                      <img src="{{ asset('backend/images/banner-05.jpg') }}" alt="IMG-BANNER">

                      <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                          <div class="block1-txt-child1 flex-col-l">
                              <span class="block1-name ltext-102 trans-04 p-b-8">
                                  Men
                              </span>

                              <span class="block1-info stext-102 trans-04">
                                  New Trend
                              </span>
                          </div>

                          <div class="block1-txt-child2 p-b-4 trans-05">
                              <div class="block1-link stext-101 cl0 trans-09">
                                  Shop Now
                              </div>
                          </div>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                      <img src="{{ asset('backend/images/banner-07.jpg') }}" alt="IMG-BANNER">

                      <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                          <div class="block1-txt-child1 flex-col-l">
                              <span class="block1-name ltext-102 trans-04 p-b-8">
                                  Watches
                              </span>

                              <span class="block1-info stext-102 trans-04">
                                  Spring 2018
                              </span>
                          </div>

                          <div class="block1-txt-child2 p-b-4 trans-05">
                              <div class="block1-link stext-101 cl0 trans-09">
                                  Shop Now
                              </div>
                          </div>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                      <img src="{{asset ('backend/images/banner-08.jpg') }}" alt="IMG-BANNER">

                      <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                          <div class="block1-txt-child1 flex-col-l">
                              <span class="block1-name ltext-102 trans-04 p-b-8">
                                  Bags
                              </span>

                              <span class="block1-info stext-102 trans-04">
                                  Spring 2018
                              </span>
                          </div>

                          <div class="block1-txt-child2 p-b-4 trans-05">
                              <div class="block1-link stext-101 cl0 trans-09">
                                  Shop Now
                              </div>
                          </div>
                      </a>
                  </div>
              </div>

              <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                      <img src="{{ asset('backend/images/banner-09.jpg') }}" alt="IMG-BANNER">

                      <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                          <div class="block1-txt-child1 flex-col-l">
                              <span class="block1-name ltext-102 trans-04 p-b-8">
                                  Accessories
                              </span>

                              <span class="block1-info stext-102 trans-04">
                                  Spring 2018
                              </span>
                          </div>

                          <div class="block1-txt-child2 p-b-4 trans-05">
                              <div class="block1-link stext-101 cl0 trans-09">
                                  Shop Now
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <!-- Product -->
  <section class="bg0 p-t-23 p-b-130">
      <div class="container">
          <div class="p-b-10">
              <h3 class="ltext-103 cl5">
                  Product Overview
              </h3>
          </div>

          <div class="flex-w flex-sb-m p-b-52">
              <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                      All Products
                  </button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                      Women
                  </button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                      Men
                  </button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                      Bag
                  </button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
                      Shoes
                  </button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
                      Watches
                  </button>
              </div>

              <div class="flex-w flex-c-m m-tb-10">
                  <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                      <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                      <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                      Filter
                  </div>

                  <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                      <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                      <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                      Search
                  </div>
              </div>

              <!-- Search product -->
              <div class="dis-none panel-search w-full p-t-10 p-b-15">
                  <div class="bor8 dis-flex p-l-15">
                      <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                          <i class="zmdi zmdi-search"></i>
                      </button>

                      <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                  </div>
              </div>

              <!-- Filter -->
              <div class="dis-none panel-filter w-full p-t-10">
                  <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                      <div class="filter-col1 p-r-15 p-b-27">
                          <div class="mtext-102 cl2 p-b-15">
                              Sort By
                          </div>

                          <ul>
                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Default
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Popularity
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Average rating
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                      Newness
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Price: Low to High
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Price: High to Low
                                  </a>
                              </li>
                          </ul>
                      </div>

                      <div class="filter-col2 p-r-15 p-b-27">
                          <div class="mtext-102 cl2 p-b-15">
                              Price
                          </div>

                          <ul>
                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                      All
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      $0.00 - $50.00
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      $50.00 - $100.00
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      $100.00 - $150.00
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      $150.00 - $200.00
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <a href="#" class="filter-link stext-106 trans-04">
                                      $200.00+
                                  </a>
                              </li>
                          </ul>
                      </div>

                      <div class="filter-col3 p-r-15 p-b-27">
                          <div class="mtext-102 cl2 p-b-15">
                              Color
                          </div>

                          <ul>
                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                      <i class="zmdi zmdi-circle"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Black
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                      <i class="zmdi zmdi-circle"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                      Blue
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                      <i class="zmdi zmdi-circle"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Grey
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                      <i class="zmdi zmdi-circle"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Green
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                      <i class="zmdi zmdi-circle"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04">
                                      Red
                                  </a>
                              </li>

                              <li class="p-b-6">
                                  <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                      <i class="zmdi zmdi-circle-o"></i>
                                  </span>

                                  <a href="#" class="filter-link stext-106 trans-04">
                                      White
                                  </a>
                              </li>
                          </ul>
                      </div>

                      <div class="filter-col4 p-b-27">
                          <div class="mtext-102 cl2 p-b-15">
                              Tags
                          </div>

                          <div class="flex-w p-t-4 m-r--5">
                              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                  Fashion
                              </a>

                              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                  Lifestyle
                              </a>

                              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                  Denim
                              </a>

                              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                  Streetstyle
                              </a>

                              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                  Crafts
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row isotope-grid">
              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0 label-new" data-label="New">
                          <img src="{{ asset('backend/images/product-01.jpg') }}" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Esprit Ruffle Shirt
                              </a>

                              <span class="stext-105 cl3">
                                  $16.64
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="{{ asset('backend/images/icons/icon-heart-01.png') }}" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('backend/images/icons/icon-heart-02.png') }}" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="{{ asset('backend/images/product-02.jpg') }}" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Herschel supply
                              </a>

                              <span class="stext-105 cl3">
                                  $35.31
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="{{ asset('backend/images/icons/icon-heart-01.png') }}" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset ('backend/images/icons/icon-heart-02.png') }}" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="{{ asset('backend/images/product-03.jpg') }}" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Only Check Trouser
                              </a>

                              <span class="stext-105 cl3">
                                  $25.50
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="{{ asset('backend/images/icons/icon-heart-01.png') }}" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('backend/images/icons/icon-heart-02.png') }}" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="{{ asset('backend/images/product-04.jpg') }}" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Classic Trench Coat
                              </a>

                              <span class="stext-105 cl3">
                                  $75.00
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="{{ asset('backend/images/icons/icon-heart-01.png') }}" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('backend/images/icons/icon-heart-02.png') }}" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-05.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Front Pocket Jumper
                              </a>

                              <span class="stext-105 cl3">
                                  $34.75
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-06.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Vintage Inspired Classic
                              </a>

                              <span class="stext-105 cl3">
                                  $93.20
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-07.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Shirt in Stretch Cotton
                              </a>

                              <span class="stext-105 cl3">
                                  $52.66
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-08.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Pieces Metallic Printed
                              </a>

                              <span class="stext-105 cl3">
                                  $18.96
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-09.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Converse All Star Hi Plimsolls
                              </a>

                              <span class="stext-105 cl3">
                                  $75.00
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-10.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Femme T-Shirt In Stripe
                              </a>

                              <span class="stext-105 cl3">
                                  $25.85
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-11.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Herschel supply
                              </a>

                              <span class="stext-105 cl3">
                                  $63.16
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-12.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Herschel supply
                              </a>

                              <span class="stext-105 cl3">
                                  $63.15
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-13.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  T-Shirt with Sleeve
                              </a>

                              <span class="stext-105 cl3">
                                  $18.49
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-14.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Pretty Little Thing
                              </a>

                              <span class="stext-105 cl3">
                                  $54.79
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-15.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Mini Silver Mesh Watch
                              </a>

                              <span class="stext-105 cl3">
                                  $86.85
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                      <div class="block2-pic hov-img0">
                          <img src="images/product-16.jpg" alt="IMG-PRODUCT">

                          <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                              Quick View
                          </a>
                      </div>

                      <div class="block2-txt flex-w flex-t p-t-14">
                          <div class="block2-txt-child1 flex-col-l ">
                              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                  Square Neck Back
                              </a>

                              <span class="stext-105 cl3">
                                  $29.64
                              </span>
                          </div>

                          <div class="block2-txt-child2 flex-r p-t-3">
                              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                  <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Pagination -->
          <div class="flex-c-m flex-w w-full p-t-38">
              <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                  1
              </a>

              <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  2
              </a>
          </div>
      </div>
  </section>
  @endsection