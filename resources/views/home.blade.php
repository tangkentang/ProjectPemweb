<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iRepair - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar a {
            text-decoration: none;
            color: black;
            margin: 0 10px;
        }
        .navbar a.active {
            font-weight: bold;
        }
        .navbar .tittle {
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin-top: 0;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 80px);
            padding: 20px;
        }
        .left-content {
            flex: 1;
            padding-right: 50px;
        }
        .left-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .left-content p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .left-content .buttons {
            display: flex;
            gap: 20px;
        }
        .left-content .buttons a {
            padding: 15px 25px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }
        .btn-primary {
            background-color: black;
        }
        .btn-secondary {
            background-color: #cccccc;
            color: black;
        }
        .right-content {
            flex: 1;
            text-align: center;
        }
        .right-content img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="tittle">
            <a href="/">iRepair</a>
        </div>
        <a href="/" class="active">Home</a>
        <a href="{{ route('service-iphone') }}">Service iPhone</a>
        <a href="{{ route('contact-us') }}">Contact Us</a>
        <a href="#">Create An Account</a>
    </div>
    <div class="container">
        <div class="left-content">
            <h1>Halo, Selamat datang</h1>
            <p>Pengerjaan cepat memperbaiki masalah iPhone anda. Membuat iPhone Anda aktif kembali di hari yang sama.</p>
            <div class="buttons">
                <a href="{{ route('service-iphone') }}" class="btn-primary">Service iPhone</a>
                <a href="/contact-us" class="btn-secondary">Konsultasi</a>
            </div>
        </div>
        <div class="right-content">
            <img src="{{ asset('images/iphone.png') }}" alt="iPhone">
        </div>
    </div>
</body>
</html>
