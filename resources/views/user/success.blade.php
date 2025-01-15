<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Beauty | Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #FFFFFF;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .image-section {
            flex: 1;
            background-color: rgb(245, 225, 243);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            max-width: 50%;
            height: auto;
        }

        p {
            margin-top: 15px;
        }

        .btn {
            background-color: #e079c5;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 70px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #9dcdf5;
        }

        .card {
            background-color: #ffffff; /* Warna latar belakang putih */
            border-radius: 12px; /* Sudut melengkung */
            box-shadow:  0 0 20px #e079c5, 0 0 40px rgba(0, 191, 255, 0.3); /* Bayangan biru menyala */
            padding: 30px; /* Ruang di dalam kartu */
            text-align: center; /* Teks di tengah */
            max-width: 400px; /* Atur lebar maksimum sesuai kebutuhan */
            max-height: 300px;
            margin: 50px auto; /* Mengatur margin otomatis untuk pusat */
            margin-top: 200px;
        }

        .icon {
            font-size: 60px;
            color: #e079c5;
            margin-bottom: 20px;
        }

        h1 {
            color: #e079c5; /* Mengubah warna h1 */
            margin: 10px 0; /* Menambahkan margin atas dan bawah */
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="http://localhost/ecommerce/resources/views/images/logo1.png" alt="logo1" style="max-width: 65%; height: auto;">
        </div>
    
        <div class="tks card">
            <i class="bi bi-check-circle icon"></i>
            <h1>Thank You for Your Purchase!</h1>
            <p>Your order has been successfully placed.</p>
            <p>Wait for your order to arrive at home!</p>
            <br></br>

            <a href="{{ url('/') }}" class="btn">Return to Home</a>
        </div>
        
    </div>
</body>
</html>