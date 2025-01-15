<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color:rgb(200, 199, 199); /* Mengubah background menjadi hitam */
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }
        h2 {
            margin-bottom: 30px;
            color: #333;
            text-align: center;
            font-size: 28px;
        }
        .form-group {
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
            color: #555;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
            padding: 10px;
            width: 96%;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        button {
            background-color: #e079c5;
            border: none;
            border-radius: 5px;
            padding: 10px;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #9dcdf5;
        }
        @media (max-width: 576px) {
            .container {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Account Settings</h2>
    <form>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address">
        </div>
        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter new password">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
        </div>
        <div class="form-group">
            <label for="profile-photo">Profile Photo</label>
            <input type="file" class="form-control" id="profile-photo" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



