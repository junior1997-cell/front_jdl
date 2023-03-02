<!DOCTYPE html>
<html lang="en">

  <!-- Mirrored from htmlstream.com/front/shop-products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 14:21:25 GMT -->
  <head>
    <!-- Title -->
    <title>Tienda de Productos | JDL Technology</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $title = "Tienda de Productos Grid"; require 'head.php'; ?>

  </head>
  <body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header">
      <!-- Search -->
      <?php /* require 'div_search.php'; */ ?>
      <!-- End Search -->

      <div class="header-section">
        <!-- Topbar -->
        <?php /* require 'div_topbar.php'; */ ?>
        <!-- End Topbar -->

        <div id="logoAndNav" class="container">
          <!-- Nav -->
          <?php require 'nav_v1.php'; ?>
          <!-- End Nav -->
        </div>
      </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
      <!-- Title Section -->
      <div class="bg-light">
        <div class="container py-5">
          <div class="row align-items-sm-center">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <h1 class="h4 mb-0">Products grid</h1>
            </div>

            <div class="col-sm-6">
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter justify-content-sm-end mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Grid</li>
                </ol>
              </nav>
              <!-- End Breadcrumb -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Title Section -->

      <!-- Products & Filters Section -->
      <div class="container space-top-1 space-top-md-2 space-bottom-2 space-bottom-lg-3">
        <div class="row">
          <div class="col-lg-9">
            <!-- Sorting -->
            <div class="row align-items-center mb-5">
              <div class="col-sm mb-3 mb-sm-0">
                <span class="font-size-1 ml-1">110 products</span>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-sm-end align-items-center">
                  <!-- Select -->
                  <div class="mr-2">
                    <select class="js-custom-select custom-select-sm" size="1" style="opacity: 0;"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm",
                            "dropdownAutoWidth": true,
                            "width": "auto"
                          }'>
                      <option value="mostRecent" selected>Sort by</option>
                      <option value="newest">Newest first</option>
                      <option value="priceHighLow">Price (high - low)</option>
                      <option value="priceLowHigh">Price (low - high)</option>
                      <option value="topSellers">Top sellers</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <!-- Select -->
                  <div class="mr-2">
                    <select class="js-custom-select custom-select-sm" size="1" style="opacity: 0;"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm",
                            "dropdownAutoWidth": true,
                            "width": "auto"
                          }'>
                      <option value="alphabeticalOrderSelect1" selected>A-to-Z</option>
                      <option value="alphabeticalOrderSelect2">Z-to-A</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <!-- Nav -->
                  <ul class="nav nav-segment">
                    <li class="list-inline-item">
                      <a class="nav-link active" href="shop-producto-grid.php">
                        <i class="fas fa-th-large"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="nav-link" href="shop-producto-list.php">
                        <i class="fas fa-list"></i>
                      </a>
                    </li>
                  </ul>
                  <!-- End Nav -->
                </div>
              </div>
            </div>
            <!-- End Sorting -->

            <!-- Products -->
            <div class="row mx-n2 mb-5">
              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 1 -->
                <div class="card card-bordered shadow-lg text-center h-100">
                  <div class="position-relative" >
                    <a href="shop-producto-descripcion.php">
                      <img class="card-img-top" src="assets/docs/producto/img_1.jpeg" alt="Image Description" >
                    </a>                   

                    <div class="position-absolute top-0 left-0 pt-3 pl-3">
                      <span class="badge badge-success badge-pill">Nuevo</span>
                    </div>
                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Computadores</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-producto-descripcion.php">Herschel backpack in dark blue</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">S/. 2,560.99</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>0</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Añadir al carrito</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 2 -->
                <div class="card card-bordered shadow text-center h-100">
                  <div class="position-relative">
                    <a href="shop-producto-descripcion.php">
                      <img class="card-img-top" src="assets/docs/producto/img_2.jpeg" alt="Image Description">
                    </a>                  

                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Computadores</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Front hoodie</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">S/. 3,491.88</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>40</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Añadir al carrito</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 3 -->
                <div class="card card-bordered shadow-lg text-center h-100">
                  <div class="position-relative">
                    <a href="shop-producto-descripcion.php">
                      <img class="card-img-top" src="assets/docs/producto/img_3.jpeg" alt="Image Description">
                    </a>                   

                    <div class="position-absolute top-0 left-0 pt-3 pl-3">
                      <span class="badge badge-danger badge-pill">Agotado</span>
                    </div>
                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Computadores</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Herschel backpack in gray</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">S/. 2,900.99</span>
                        <span class="text-body ml-1"><del>S/. 3,500.99</del></span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>125</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Añadir al carrito</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 4 -->
                <div class="card card-bordered shadow-none text-center h-100">
                  <div class="position-relative">
                    <img class="card-img-top" src="assets/docs/producto/img_4.jpeg" alt="Image Description">

                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Front Originals adicolor t-shirt with trefoil logo</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">$38.00</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <span>9</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 5 -->
                <div class="card card-bordered shadow-none text-center h-100">
                  <div class="position-relative">
                    <img class="card-img-top" src="assets/docs/producto/img_6.jpeg" alt="Image Description">

                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Front mesh baseball cap with signature logo</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">$8.88</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>31</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 6 -->
                <div class="card card-bordered shadow-none text-center h-100">
                  <div class="position-relative">
                    <img class="card-img-top" src="assets/docs/producto/img_6.jpeg" alt="Image Description">

                    <div class="position-absolute top-0 left-0 pt-3 pl-3">
                      <span class="badge badge-success badge-pill">New arrival</span>
                    </div>
                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Front Originals adicolor t-shirt in gray</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">$24.00</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>0</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 7 -->
                <div class="card card-bordered shadow-none text-center h-100">
                  <div class="position-relative">
                    <img class="card-img-top" src="assets/docs/producto/img_7.jpeg" alt="Image Description">

                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">COLLUSION Unisex mechanic print t-shirt</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">$43.99</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <span>0</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>

              <div class="col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5">
                <!-- Product 8 -->
                <div class="card card-bordered shadow-none text-center h-100">
                  <div class="position-relative">
                    <img class="card-img-top" src="assets/docs/producto/img_8.jpeg" alt="Image Description">

                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                      <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                        <i class="fas fa-heart"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card-body pt-4 px-4 pb-0">
                    <div class="mb-2">
                      <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                      <span class="d-block font-size-1">
                        <a class="text-inherit" href="shop-single-product.html">Billabong Walled snapback in green</a>
                      </span>
                      <div class="d-block">
                        <span class="text-dark font-weight-bold">$12.00</span>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer border-0 pt-0 pb-4 px-4">
                    <div class="mb-3">
                      <a class="d-inline-flex align-items-center small" href="#">
                        <div class="text-warning mr-2">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <span>2</span>
                      </a>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                  </div>
                </div>
                <!-- End Product -->
              </div>
            </div>
            <!-- End Products -->

            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-between align-items-center">
                <li class="page-item ml-0">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo; Prev</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item">
                  <div class="d-flex align-items-center">
                    <span class="d-none d-sm-inline-block text-body">Page:</span>
                    <select class="custom-select custom-select-sm w-auto mx-2">
                      <option value="quantity1">1</option>
                      <option value="quantity2">2</option>
                      <option value="quantity3">3</option>
                      <option value="quantity4">4</option>
                      <option value="quantity5">5</option>
                      <option value="quantity6">6</option>
                      <option value="quantity7">7</option>
                      <option value="quantity8">8</option>
                    </select>
                    <span class="d-none d-sm-inline-block text-body">of 8</span>
                  </div>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">Next &raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->

            <!-- Divider -->
            <div class="d-lg-none">
              <hr class="my-7 my-sm-11">
            </div>
            <!-- End Divider -->
          </div>

          <!-- Filters -->
          <div class="col-lg-3">
            <form>
              <div class="border-bottom pb-4 mb-4">
                <h4>Price</h4>

                <!-- Range Slider -->
                <div class="mt-10">
                  <input class="js-ion-range-slider" type="text"
                        data-hs-ion-range-slider-options='{
                          "extra_classes": "range-slider-custom range-slider-custom-grid",
                          "type": "double",
                          "grid": true,
                          "hide_from_to": false,
                          "prefix": "$",
                          "min": 0,
                          "max": 500,
                          "from": 25,
                          "to": 475,
                          "result_min_target_el": "#rangeSliderExample3MinResult",
                          "result_max_target_el": "#rangeSliderExample3MaxResult"
                        }'>
                  <div class="d-flex justify-content-between mt-7">
                    <input type="text" class="form-control form-control-sm max-w-9rem" id="rangeSliderExample3MinResult">
                    <input type="text" class="form-control form-control-sm max-w-9rem mt-0" id="rangeSliderExample3MaxResult">
                  </div>
                </div>
                <!-- End Range Slider -->
              </div>             

              <div class="border-bottom pb-4 mb-4">
                <h4>Category</h4>

                <!-- Checkboxes -->
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryTshirt" checked>
                    <label class="custom-control-label text-lh-lg" for="categoryTshirt">T-shirt</label>
                  </div>
                  <small>73</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryShoes">
                    <label class="custom-control-label text-lh-lg" for="categoryShoes">Shoes</label>
                  </div>
                  <small>0</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryAccessories" checked>
                    <label class="custom-control-label text-lh-lg" for="categoryAccessories">Accessories</label>
                  </div>
                  <small>51</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryTops" checked>
                    <label class="custom-control-label" for="categoryTops">Tops</label>
                  </div>
                  <small>5</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryBottom">
                    <label class="custom-control-label" for="categoryBottom">Bottom</label>
                  </div>
                  <small>11</small>
                </div>
                <!-- End Checkboxes -->

                <!-- View More - Collapse -->
                <div class="collapse" id="collapseCategory">
                  <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="categoryShorts">
                      <label class="custom-control-label" for="categoryShorts">Shorts</label>
                    </div>
                    <small>5</small>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="categoryHats">
                      <label class="custom-control-label" for="categoryHats">Hats</label>
                    </div>
                    <small>3</small>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="categorySocks">
                      <label class="custom-control-label" for="categorySocks">Socks</label>
                    </div>
                    <small>8</small>
                  </div>
                </div>
                <!-- End View More - Collapse -->

                <!-- Link -->
                <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseCategory" role="button" aria-expanded="false" aria-controls="collapseCategory">
                  <span class="link-collapse-default">Ver mas</span>
                  <span class="link-collapse-active">Ver menos</span>
                  <span class="link-icon ml-1">+</span>
                </a>
                <!-- End Link -->
              </div>

              <div class="border-bottom pb-4 mb-4">
                <h4>Rating</h4>

                <!-- Checkboxes -->
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating1">
                    <label class="custom-control-label" for="rating1">
                      <span class="d-block text-warning">
                        <i class="fas fa-star"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                      </span>
                    </label>
                  </div>
                  <small>3</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating2">
                    <label class="custom-control-label" for="rating2">
                      <span class="d-block text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                      </span>
                    </label>
                  </div>
                  <small>10</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating3">
                    <label class="custom-control-label" for="rating3">
                      <span class="d-block text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                      </span>
                    </label>
                  </div>
                  <small>34</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating4">
                    <label class="custom-control-label" for="rating4">
                      <span class="d-block text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star text-muted"></i>
                      </span>
                    </label>
                  </div>
                  <small>86</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating5">
                    <label class="custom-control-label" for="rating5">
                      <span class="d-block text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </span>
                    </label>
                  </div>
                  <small>102</small>
                </div>
                <!-- End Checkboxes -->
              </div>

              <button type="button" class="btn btn-sm btn-block btn-white transition-3d-hover">Borrar todo</button>
            </form>
          </div>
          <!-- End Filters -->
        </div>
      </div>
      <!-- End Products & Filters Section -->

      <!-- Subscribe Section -->
      <div class="bg-light">
        <div class="container space-2">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <!-- Title -->
              <div class="text-center mb-4">
                <h2 class="h1">Mantente informado</h2>
                <p>Obtenga ofertas especiales sobre los últimos productos de JDL.</p>
              </div>
              <!-- End Title -->

              <!-- Subscribe Form -->
              <form class="js-validate js-form-message w-lg-85 mx-lg-auto">
                <label class="sr-only" for="subscribeSrEmail">Email</label>
                <div class="input-group input-group-pill">
                  <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Email" aria-label="Email" aria-describedby="subscribeButton" required
                        data-msg="Por favor, introduce una dirección de correo electrónico válida.">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary px-6" id="subscribeButton">Unirse</button>
                  </div>
                </div>
              </form>
              <!-- End Subscribe Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Subscribe Section -->

      <!-- Clients Section -->
      <div class="container space-2">
        <div class="row justify-content-between text-center">
          <div class="col-4 col-lg-2 mb-5 mb-lg-0">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/hollister.svg" alt="Image Description">
            </div>
          </div>
          <div class="col-4 col-lg-2 mb-5 mb-lg-0">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/levis.svg" alt="Image Description">
            </div>
          </div>
          <div class="col-4 col-lg-2 mb-5 mb-lg-0">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/new-balance.svg" alt="Image Description">
            </div>
          </div>
          <div class="col-4 col-lg-2">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/puma.svg" alt="Image Description">
            </div>
          </div>
          <div class="col-4 col-lg-2">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/nike.svg" alt="Image Description">
            </div>
          </div>
          <div class="col-4 col-lg-2">
            <div class="mx-3">
              <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/svg/clients-logo/tnf.svg" alt="Image Description">
            </div>
          </div>
        </div>
      </div>
      <!-- End Clients Section -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <?php require 'footer_v4.php'; ?>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <form class="js-validate">
              <!-- Sign in -->
              <div id="signinModalForm">
                <div class="text-center mb-5">
                  <h2>Sign in</h2>
                  <p>Don't have an account yet?
                    <a class="js-animation-link" href="javascript:;"
                      data-hs-show-animation-options='{
                          "targetSelector": "#signupModalForm",
                          "groupName": "idForm"
                        }'>Sign up here</a>
                  </p>
                </div>

                <a class="btn btn-block btn-white mb-2" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss mr-2" src="assets/svg/brands/google.svg" alt="Image Description">
                      Sign in with Google
                    </span>
                </a>

                <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                  data-hs-show-animation-options='{
                      "targetSelector": "#signinWithEmailModalForm",
                      "groupName": "idForm"
                    }'>Sign in with Email</a>
              </div>
              <!-- End Sign in -->

              <!-- Sign in with Modal -->
              <div id="signinWithEmailModalForm" style="display: none; opacity: 0;">
                <div class="text-center mb-5">
                  <h2>Sign in</h2>
                  <p>Don't have an account yet?
                    <a class="js-animation-link" href="javascript:;"
                      data-hs-show-animation-options='{
                          "targetSelector": "#signupModalForm",
                          "groupName": "idForm"
                        }'>Sign up here</a>
                  </p>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signinModalFormSrEmail">Your email</label>
                  <input type="email" class="form-control" name="email" id="signinModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signinModalFormSrPassword">
                      <span class="d-flex justify-content-between align-items-center">
                        Password
                        <a class="js-animation-link link text-muted" href="javascript:;"
                          data-hs-show-animation-options='{
                            "targetSelector": "#forgotPasswordModalForm",
                            "groupName": "idForm"
                          }'>Forgot Password?</a>
                      </span>
                  </label>
                  <input type="password" class="form-control" name="password" id="signinModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
                </div>
                <!-- End Form Group -->

                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
              </div>
              <!-- End Sign in with Modal -->

              <!-- Sign up -->
              <div id="signupModalForm" style="display: none; opacity: 0;">
                <div class="text-center mb-5">
                  <h2>Sign up</h2>
                  <p>Already have an account?
                    <a class="js-animation-link" href="javascript:;"
                      data-hs-show-animation-options='{
                          "targetSelector": "#signinModalForm",
                          "groupName": "idForm"
                        }'>Sign in here</a>
                  </p>
                </div>

                <a class="btn btn-block btn-white mb-2" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss mr-2" src="assets/svg/brands/google.svg" alt="Image Description">
                      Sign up with Google
                    </span>
                </a>

                <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                  data-hs-show-animation-options='{
                      "targetSelector": "#signupWithEmailModalForm",
                      "groupName": "idForm"
                    }'>Sign up with Email</a>

                <div class="text-center mt-3">
                  <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
                </div>
              </div>
              <!-- End Sign up -->

              <!-- Sign up with Modal -->
              <div id="signupWithEmailModalForm" style="display: none; opacity: 0;">
                <div class="text-center mb-5">
                  <h2>Sign up</h2>
                  <p>Already have an account?
                    <a class="js-animation-link" href="javascript:;"
                      data-hs-show-animation-options='{
                          "targetSelector": "#signinModalForm",
                          "groupName": "idForm"
                        }'>Sign in here</a>
                  </p>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupModalFormSrEmail">Your email</label>
                  <input type="email" class="form-control" name="email" id="signupModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupModalFormSrPassword">Password</label>
                  <input type="password" class="form-control" name="password" id="signupModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupModalFormSrConfirmPassword">Confirm password</label>
                  <input type="password" class="form-control" name="confirmPassword" id="signupModalFormSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Password does not match the confirm password.">
                </div>
                <!-- End Form Group -->

                <button type="submit" class="btn btn-block btn-primary">Sign up</button>

                <div class="text-center mt-3">
                  <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
                </div>
              </div>
              <!-- End Sign up with Modal -->

              <!-- Forgot Password -->
              <div id="forgotPasswordModalForm" style="display: none; opacity: 0;">
                <div class="text-center mb-5">
                  <h2>Forgot password?</h2>
                  <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="resetPasswordSrEmail" tabindex="0">
                    <span class="d-flex justify-content-between align-items-center">
                      Your email
                      <a class="js-animation-link d-flex align-items-center link text-muted" href="javascript:;"
                        data-hs-show-animation-options='{
                          "targetSelector": "#signinModalForm",
                          "groupName": "idForm"
                        }'>
                        <i class="fas fa-angle-left mr-2"></i> Back to Sign in
                      </a>
                    </span>
                  </label>
                  <input type="email" class="form-control" name="email" id="resetPasswordSrEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <button type="submit" class="btn btn-block btn-primary">Submit</button>
              </div>
              <!-- End Forgot Password -->
            </form>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Sign Up Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
      data-hs-go-to-options='{
        "offsetTop": 700,
        "position": {
          "init": {
            "right": 15
          },
          "show": {
            "bottom": 15
          },
          "hide": {
            "bottom": -15
          }
        }
      }'>
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>
    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF HEADER
        // =======================================================
        var header = new HSHeader($('#header')).init();


        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
          desktop: {
            position: 'left'
          }
        }).init();


        // INITIALIZATION OF UNFOLD
        // =======================================================
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupPassword'
              }
            }
          });
        });


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        $('.js-animation-link').each(function () {
          var showAnimation = new HSShowAnimation($(this)).init();
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-custom-select').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF ION RANGE SLIDER
        // =======================================================
        $('.js-ion-range-slider').each(function () {
          var ionRangeSlider = $.HSCore.components.HSIonRangeSlider.init($(this));
        });


        // INITIALIZATION OF GO TO
        // =======================================================
        $('.js-go-to').each(function () {
          var goTo = new HSGoTo($(this)).init();
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
  </body>

  <!-- Mirrored from htmlstream.com/front/shop-products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 14:21:25 GMT -->
</html>