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
            cursor: pointer; /* add cursor pointer to indicate clickability */
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
            cursor: pointer; /* add cursor pointer to indicate clickability */
        }
        .carousel .arrow {
            font-size: 24px;
            cursor: pointer;
            user-select: none;
        }

        /* Style for the popup */
        .popup {
            display: none; /* Hide popup by default */
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }
        .popup-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
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
            <!-- Service items with clickable images -->
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
    <!-- Clickable images -->
    <figure class="carousel-item">
        <img src="{{ asset('images/iphone15pro.png') }}" alt="iPhone 15 Pro" onclick="showPopup('iPhone 15 Pro', 'iPhone 15 Pro adalah puncak inovasi terbaru dari Apple, memadukan teknologi mutakhir dengan desain yang elegan. Didesain untuk memenuhi kebutuhan pengguna modern, iPhone 15 Pro menawarkan pengalaman yang revolusioner dengan fitur-fitur terkini yang mengesankan.','Layanan Servis\n\n1. Service LCD : Harga  800k\n\n2. Reparasi Housing: Harga  500k\n\n3. Service Battery: Harga  400k\n\n4. Spare Part: Harga  200k - 500k')">
        <figcaption>iPhone 15 Pro</figcaption>
    </figure>
    <figure class="carousel-item">
        <img src="{{ asset('images/iphone15.png') }}" alt="iPhone 15" onclick="showPopup('iPhone 15', 'iPhone 15 adalah salah satu perangkat terbaru dari Apple yang menghadirkan kombinasi sempurna antara keindahan desain dan kecanggihan teknologi. Didesain untuk memberikan pengalaman pengguna yang luar biasa, iPhone 15 menawarkan kinerja yang tangguh dan fitur-fitur inovatif yang memukau.Dilengkapi dengan','Layanan Servis\n\n1. Service LCD : Harga  600k\n\n2. Reparasi Housing: Harga  450k\n\n3. Service Battery: Harga  350k\n\n4. Spare Part: Harga  200k - 500k')">
        <figcaption>iPhone 15</figcaption>
    </figure>
    <figure class="carousel-item">
        <img src="{{ asset('images/iphone14.png') }}" alt="iPhone 14" onclick="showPopup('iPhone 14', 'iPhone 14 merupakan produk terbaru dari Apple yang menghadirkan kombinasi elegan antara desain yang menawan dan teknologi yang canggih. Didesain untuk memenuhi kebutuhan pengguna modern, iPhone 14 menawarkan pengalaman yang luar biasa dengan fitur-fitur terkini yang mengagumkan.','Layanan Servis\n\n1. Service LCD : Harga  500k\n\n2. Reparasi Housing: Harga  400k\n\n3. Service Battery: Harga  300k\n\n4. Spare Part: Harga  200k - 500k')">
        <figcaption>iPhone 14</figcaption>
    </figure>
    <figure class="carousel-item">
        <img src="{{ asset('images/iphone13.png') }}" alt="iPhone 13" onclick="showPopup('iPhone 13', 'iPhone 13 adalah perangkat terbaru dari Apple yang menggabungkan keindahan desain dengan teknologi canggih untuk memberikan pengalaman pengguna yang luar biasa. Dirancang untuk memenuhi kebutuhan pengguna modern, iPhone 13 menawarkan kombinasi kinerja yang tangguh dan fitur-fitur inovatif yang mengesankan.','Layanan Servis\n\n1. Service LCD : Harga  450k\n\n2. Reparasi Housing: Harga  350k\n\n3. Service Battery: Harga  300k\n\n4. Spare Part: Harga  200k - 500k')">
        <figcaption>iPhone 13</figcaption>
    </figure>
</div>


    <!-- Popup HTML -->
<div id="popup" class="popup">
    <div class="popup-content">
        <h3 id="popup-title"></h3>
        <p id="popup-description"></p>
        <p id="popup-long-description"></p> <!-- New element for long description -->
        <button onclick="hidePopup()">Close</button>
    </div>
</div>


    <script>
       function showPopup(title, description, longDescription) {
    // Display the popup
    document.getElementById("popup").style.display = "block";
    // Set title and description
    document.getElementById("popup-title").innerText = title;
    document.getElementById("popup-description").innerText = description;
    // Set long description
    document.getElementById("popup-long-description").innerText = longDescription;
}


        function hidePopup() {
            // Hide the popup
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>
