<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Add Product</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        body {
            background-color:rgb(93, 133, 173); /* Warna latar belakang yang lebih cerah */
        }
        .card {
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 2px 10px #e079c5; /* Bayangan lembut */
        }
        .form-control {
        border-radius: 6px;
        background-color: rgb(25, 50, 70);
        color: white; /* Warna teks default */
    }
    .form-control:focus {
        color: white; /* Warna teks saat fokus */
        background-color: rgb(25, 50, 70); 
        border-color: #007bff; 
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
    }
        .btn-info {
            background-color: #007bff; /* Warna tombol yang lebih cerah */
            border: none; /* Menghilangkan border */
            border-radius: 6px; /* Sudut membulat untuk tombol */
        }
        .btn-info:hover {
            background-color: #0056b3; /* Warna saat hover */
        }
        .alert {
            border-radius: 6px; /* Sudut membulat untuk alert */
        }
        .file-upload-info {
            color:rgb(250, 250, 250); /* Warna teks untuk input upload */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <form action="{{route('admin.add_product')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Add Product Form</h4>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Product Title</label>
                                                    <input name="title" type="text" class="form-control" required/>
                                                </div>
                                            <!-- </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Category Skincare</label>
                                                    <input name="category" type="text" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category" class="form-control" required>
                                                        @foreach ($categories as $category)
                                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        <p class="card-description">Description</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Main Ingredients</label>
                                                    <input name="main_ingredients" placeholder="ex: Centella Aciata" type="text" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description Product</label>
                                                    <input name="description_product" placeholder="ex: This product ..." type="text" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="card-description">Price</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Discount Price</label>
                                                    <input name="discount_price" placeholder="ex: 10%" type="text" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input name="quantity" placeholder="ex: 20" type="text" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <p class="card-description"> Other Details </p> -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input name="price" placeholder="ex: Rp. 120.000" type="text" class="form-control" required/>
                                                </div>
                                            </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Product Image</label>
                                                    <input id="image" type="file" name="image" class="file-upload-default" required>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Preview Image</label>
                                                    <div class="input-group">
                                                        <img id="showImage" style="width: 40%; border-radius: 3%;" src="/admin/assets/images/no_image.jpg" alt="product_image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info">Add Product</button>
                                                </div>
                                            </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/file-upload.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
</body>
</html>