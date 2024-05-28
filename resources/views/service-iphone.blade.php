<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iRepair - Service iPhone</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
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
            text-align: center;
            padding: 20px;
        }
        .services {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
        }
        .service-item {
            text-align: center;
            width: 20%;
        }
        .service-item img {
            width: 50px;
            height: auto;
            margin-bottom: 10px;
        }
        .search-bar {
            display: flex;
            justify-content: center;
            margin: 50px 0;
        }
        .search-bar input {
            width: 50%;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }
        .carousel {
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        .carousel img {
            width: 150px;
            height: auto;
            margin: 0 10px;
        }
        .carousel .arrow {
            font-size: 24px;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="tittle">
            <a href="/">iRepair</a>
        </div>
        <a href="/">Home</a>
        <a href="{{ route('service-iphone') }}" class="active">Service iPhone</a>
        <a href="/contact-us">Contact Us</a>
        <a href="#">Tracking Order</a>
    </div>
    <div class="container">
        <h2>Our Service</h2>
        <div class="services">
            <div class="service-item">
                <img src="{{ asset('images/repair-lcd.png') }}" alt="Reparasi LCD iPhone">
                <p>Reparasi LCD iPhone</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/battery-service.png') }}" alt="Service Baterai">
                <p>Service Baterai</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/repair-housing.png') }}" alt="Reparasi Housing + Pemasangan">
                <p>Reparasi Housing + Pemasangan</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/spare-part.png') }}" alt="Spare Part iPhone">
                <p>Spare Part iPhone</p>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search your iPhone">
        </div>
        <div class="carousel">
            <span class="arrow">&#9664;</span>
            <img src="{{ asset('images/iphone15pro.png') }}" alt="iPhone 15 Pro">
            <img src="{{ asset('images/iphone15.png') }}" alt="iPhone 15">
            <img src="{{ asset('images/iphone14.png') }}" alt="iPhone 14">
            <img src="{{ asset('images/iphone13.png') }}" alt="iPhone 13">
            <span class="arrow">&#9654;</span>
        </div>
    </div>
</body>
</html>
