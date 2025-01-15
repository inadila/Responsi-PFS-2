<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>ID Beauty | Contact</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="user/assets/css/main.css">
    <link rel="stylesheet" href="user/assets/css/custom.css">
</head>

<body>
    @include('user.header')
    @include('user.mobile_header')    
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>                    
                    <span></span> Contact
                </div>
            </div>
        </div>
        <section class="pt-50 pb-50">
            <div class="container">
                    <h1>ID Beauty</h1>
                    <p> Welcome to ID Beauty, a trusted partner in distributing the best skincare products from South Korea to Indonesia. 
                        <br> As an authorized distributor, we are committed to bringing quality skincare straight to your hands.  
                        <br>We believe everyone deserves to have healthy, glowing, and confident skin. 
                        <br>Therefore, we provide safe, effective, and customized skincare solutions, without compromising on quality.
                        <br>With an extensive distribution network and professional services, ID Beauty is here to be the bridge between the sophistication of Korean skincare technology and the skin needs of women in Indonesia.
                        <br>Discover our proven products that deliver real results, and let us be a part of your journey to healthier, glowing skin.
                    </p>
                    </div>

                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Advice for Us</h3>
                            <p class="text-muted mb-30 text-center font-sm">You Create We Read We Accept it!</p>
                            <form class="contact-form-style text-center" id="contact-form" action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="Your Phone" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button class="submit submit-auto-width custom-button" type="button">Send message</button>                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
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

    <style>
        .body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .custom-button {
            background-color: #e079c5; /* Warna latar belakang pink */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding untuk tombol */
            border: none; /* Menghilangkan border */
            border-radius: 4px; /* Membuat sudut tombol membulat */
            cursor: pointer; /* Mengubah kursor saat hover */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
        }

        .custom-button:hover {
            background-color: #007bff; /* Warna latar belakang biru saat hover */
        }


        .container h1 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 30px;
            text-align: center;
            padding-top: 20px; /* Atur nilai sesuai kebutuhan */
            padding-bottom: 18px;
        }

        .container p {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            justify-content: content;
            font-size: 20px;
            text-align: center;

        }

        .row {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 80px;
        }

    </style>

</html>