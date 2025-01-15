<header class="header-middle header-middle-ptb-1 d-none d-lg-block sticky-header">
    <div class="container">
        <div class="header-wrap">
            <div class="logo logo-width-1">
                <a href="/"><img src="user/assets/imgs/logo/app_logo1.png" alt="logo"></a>
            </div>
            
            <div class="header-right">
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{url('/')}}">Home</a></li>
                                <li><a href="{{route('user.shop')}}">Shop</a></li>                             
                                <li><a href="{{route('user.contact')}}">Contact</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{route('user.account')}}">My<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.account')}}">Dashboard</a></li>
                                                <li><a href="{{url('/orders')}}">Orders</a></li>
                                                <li><a href="{{ route('user.logout') }}">Logout</a></li>                                            
                                            </ul>
                                        </li>
                                    @endauth
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="header-action-right">
                    <div class="search-style-1">
                        <form action="{{url('/search-a-product')}}" method="GET">
                            @csrf                                
                            <input type="search" name="search" placeholder="Search here..." class="search-input">
                            <button type="submit" class="search-button">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            @if (Route::has('login'))
                                @auth
                                    @if ($cartData->isEmpty())
                                    <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                        <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">0</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <p>Cart is empty</p>
                                    </div>
                                    @else
                                    <?php 
                                        $product_in_cart = 0; 
                                        $totalPrice = 0;
                                    ?>
                                    @foreach($cartData as $data)
                                        <?php $product_in_cart +=1; ?>
                                    @endforeach
                                    <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                        <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">{{$product_in_cart}}</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            @foreach ($cartData as $cart)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="{{url('product_details',$cart->product_id)}}"><img alt="Product Image" src="products_images/{{$cart->image}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="{{url('product_details',$cart->product_id)}}">See Details</a></h4>
                                                    <h4><span>{{$cart->quantity}} × </span>Rp.{{$cart->price/$cart->quantity}}</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <?php $totalPrice += $cart->price ?>
                                            @endforeach
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>Rp.{{$totalPrice}}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{route('user.cart')}}" class="outline">View cart</a>
                                                <a href="{{route('user.checkout')}}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @else
                                    <a class="mini-cart-icon" href="#">
                                        <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">0</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <center>
                                                    <img style="width: 50%" src="/user/assets/imgs/empty-cart-img.png" alt="">
                                                    <h4>You need to login first!</h4>
                                                    <div class="shopping-cart-button">
                                                        <a href="{{route('login')}}" class="outline">Login</a>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>

                <div class="header-info header-info-right">
                    <ul>  
                        @if (Route::has('login'))
                            @auth
                                <!-- <li>
                                    <a href="{{ route('user.logout') }}">Logout</a>
                                </li> -->
                            @else
                                <li>
                                    <a href="/login" class="user-icon" title="Log In">
                                        <i class="fas fa-user" style="color: #e079c5; font-size: 22px;"></i>
                                    </a>
                                </li>
                            @endauth
                        @endif                              
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="user/assets/imgs/logo/app_logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>

.search-style-1 {
        display: inline-block; /* Agar elemen pencarian sejajar dengan menu */
        margin-left: 20px; /* Memberikan jarak antara menu dan pencarian */
    }

    .search-input {
        padding: 8px;
        border: 1px solid #ccc; /* Gaya border untuk input pencarian */
        border-radius: 4px; /* Membuat sudut input pencarian membulat */
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; /* Mengatur font untuk input pencarian */
    }

    .search-button {
        background-color: #e079c5; /* Warna latar belakang tombol pencarian */
        border: none; /* Menghilangkan border tombol */
        color: white; /* Warna teks tombol */
        padding: 8px 12px; /* Padding untuk tombol */
        cursor: pointer; /* Mengubah kursor saat hover */
        border-radius: 4px; /* Membuat sudut tombol membulat */
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; /* Mengatur font untuk tombol */
    }

    .search-button:hover {
        background-color: #d069b3; /* Warna tombol saat hover */
    }

    .header-nav a {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; /* Mengatur font untuk elemen navigasi */
    }

    .header-nav a.active {
        font-weight: bold; /* Opsional: menebalkan teks untuk tautan aktif */
    }

    .sticky-header {
        position: sticky; /* Atur posisi menjadi sticky */
        top: 0; /* Set top menjadi 0 untuk tetap di atas */
        z-index: 1000; /* Pastikan di atas elemen lain */
        background-color: rgba(255, 255, 255, 0.8); /* Latar belakang transparan */
        transition: background-color 0.3s; /* Transisi untuk perubahan latar belakang */
    }

    .header-scrolled {
        background-color: rgb(245, 225, 243); /* Latar belakang lebih padat saat scroll */
    }
</style>

<script>
    window.onscroll = function() {
        var header = document.querySelector('.sticky-header');
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            header.classList.add('header-scrolled'); // Tambahkan kelas saat scroll
        } else {
            header.classList.remove('header-scrolled'); // Hapus kelas saat kembali ke atas
        }
    };
</script>