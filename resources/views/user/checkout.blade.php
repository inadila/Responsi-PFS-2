<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>ID Beauty | Checkout</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="user/assets/css/main.css">
    <link rel="stylesheet" href="user/assets/css/custom.css">
</head>

<body>
    @include('sweetalert::alert');
    @include('user.header')
    @include('user.mobile_header')
    
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    @if ($cartData->isEmpty())
                    <div class="text-center">
                        <h1>Cart is empty</h1>
                        <img style="width: 25%" src="/user/assets/imgs/empty-cart-img.png" alt="">
                    </div>
                    @else
                    <?php $totalPrice = 0; ?>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartData as $cart)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="products_images/{{$cart->image}}" alt="product_image"></td>
                                        <td class="product-des product-name px-5">
                                            <h5 class="product-name px-5"><a href="{{url('product_details', $cart->product_id)}}">{{$cart->product_title}}</a></h5>
                                        </td>
                                        <td class="price" data-title="Price"><span>Rp.{{$cart->price/$cart->quantity}} </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <span class="qty-val">{{$cart->quantity}}</span>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>Rp.{{$cart->price}}</span>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="{{url('remove-product-from-cart',$cart->id)}}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    <?php $totalPrice += $cart->price ?>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="{{route('user.clear_cart')}}" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear Order</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">
                        <div class="cart-action text-end d-flex justify-content-between">
                                    <!-- Payment via Card -->
                                    <div class="dropdown me-2">
                                        <button class="btn dropdown-toggle" type="button" id="cardDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment via Card
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="cardDropdown">
                                            <li><a class="dropdown-item" href="{{url('/stripe', $totalPrice)}}">Mandiri</a></li>
                                            <li><a class="dropdown-item" href="{{url('/stripe', $totalPrice)}}">BRI</a></li>
                                            <li><a class="dropdown-item" href="{{url('/stripe', $totalPrice)}}">BCA</a></li>
                                            <li><a class="dropdown-item" href="{{url('/stripe', $totalPrice)}}">Permata Bank </a></li>
                                            <li><a class="dropdown-item" href="{{url('/stripe', $totalPrice)}}">BNI</a></li>
                                        </ul>
                                    </div>

                                    <!-- Payment via E-Wallet -->
                                    <div class="dropdown me-2">
                                        <button class="btn dropdown-toggle" type="button" id="ewalletDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment via E-Wallet
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="ewalletDropdown">
                                            <li><a class="dropdown-item" href="{{url('/ewallet', $totalPrice)}}">GoPay</a></li>
                                            <li><a class="dropdown-item" href="{{url('/ewallet', $totalPrice)}}">OVO</a></li>
                                            <li><a class="dropdown-item" href="{{url('/ewallet', $totalPrice)}}">DANA</a></li>
                                            <li><a class="dropdown-item" href="{{url('/ewallet', $totalPrice)}}">Link Aja</a></li>
                                            <li><a class="dropdown-item" href="{{url('/ewallet', $totalPrice)}}">ShopeePay</a></li>
                                        </ul>
                                    </div>

                                    <!-- Cash On Delivery -->
                                    <!-- <a class="btn" href="{{url('/cod', $totalPrice)}}">Cash On Delivery</a>
                                </div> -->
                        <a class="btn mr-10 mb-sm-15" href="{{url('/cod', $totalPrice)}}">Cash On Delivery</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    @include('user.footer')    
    <!-- Vendor JS-->
    <script src="user/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="user/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="user/assets/js/plugins/slick.js"></script>
    <script src="user/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="user/assets/js/plugins/wow.js"></script>
    <script src="user/assets/js/plugins/jquery-ui.js"></script>
    <script src="user/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="user/assets/js/plugins/magnific-popup.js"></script>
    <script src="user/assets/js/plugins/select2.min.js"></script>
    <script src="user/assets/js/plugins/waypoints.js"></script>
    <script src="user/assets/js/plugins/counterup.js"></script>
    <script src="user/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="user/assets/js/plugins/images-loaded.js"></script>
    <script src="user/assets/js/plugins/isotope.js"></script>
    <script src="user/assets/js/plugins/scrollup.js"></script>
    <script src="user/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="user/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="user/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="user/assets/js/main.js?v=3.3"></script>
    <script src="user/assets/js/shop.js?v=3.3"></script></body>


</html>