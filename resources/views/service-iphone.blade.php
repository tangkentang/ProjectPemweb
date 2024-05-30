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
            animation: fadeIn 1s ease-in-out;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            animation: slideDown 1s ease-in-out;
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
            animation: fadeIn 1.5s ease-in-out;
        }
        .services {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
            animation: fadeInUp 1.5s ease-in-out;
        }
        .service-item {
            text-align: center;
            width: 20%;
            transition: transform 0.3s;
        }
        .service-item:hover {
            transform: scale(1.05);
        }
        .service-item img {
            width: 50px;
            height: auto;
            margin-bottom: 10px;
            cursor: pointer;
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
            transition: box-shadow 0.3s;
        }
        .search-bar input:focus {
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .carousel {
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        .carousel img {
            width: 150px;
            height: auto;
            margin: 0 10px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .carousel img:hover {
            transform: scale(1.05);
        }
        .carousel .arrow {
            font-size: 24px;
            cursor: pointer;
            user-select: none;
        }
        .popup {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
            animation: fadeIn 0.5s ease-in-out;
        }
        .popup-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
            animation: slideUp 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
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
                <img src="{{ asset('images/repair-lcd.png') }}" alt="Reparasi LCD iPhone" onclick="showPopup('Reparasi LCD iPhone', 'Kami menyediakan layanan reparasi LCD untuk semua model iPhone.')">
                <p>Reparasi LCD iPhone</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/battery-service.png') }}" alt="Service Baterai" onclick="showPopup('Service Baterai', 'Kami menyediakan layanan penggantian baterai untuk semua model iPhone.')">
                <p>Service Baterai</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/repair-housing.png') }}" alt="Reparasi Housing + Pemasangan" onclick="showPopup('Reparasi Housing + Pemasangan', 'Kami menyediakan layanan reparasi housing dan pemasangan untuk semua model iPhone.')">
                <p>Reparasi Housing + Pemasangan</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/spare-part.png') }}" alt="Spare Part iPhone" onclick="showPopup('Spare Part iPhone', 'Kami menyediakan berbagai macam spare part untuk semua model iPhone.')">
                <p>Spare Part iPhone</p>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search your iPhone">
        </div>
        <div class="carousel">
            <figure class="carousel-item">
                <img src="{{ asset('images/iphone15pro.png') }}" alt="iPhone 15 Pro" onclick="showPopup('iPhone 15 Pro', 'iPhone 15 Pro adalah puncak inovasi terbaru dari Apple, memadukan teknologi mutakhir dengan desain yang elegan. Didesain untuk memenuhi kebutuhan pengguna modern, iPhone 15 Pro menawarkan pengalaman yang revolusioner dengan fitur-fitur terkini yang mengesankan.','Layanan Servis\n\n1. Service LCD : Harga  800k\n\n2. Reparasi Housing: Harga  500k\n\n3. Service Battery: Harga  400k\n\n4. Spare Part: Harga  200k - 500k')">
                <figcaption>iPhone 15 Pro</figcaption>
            </figure>
            <figure class="carousel-item">
                <img src="{{ asset('images/iphone15.png') }}" alt="iPhone 15" onclick="showPopup('iPhone 15', 'iPhone 15 adalah salah satu perangkat terbaru dari Apple yang menghadirkan kombinasi sempurna antara keindahan desain dan kecanggihan teknologi. Didesain untuk memberikan pengalaman pengguna yang luar biasa, iPhone 15 menawarkan kinerja yang tangguh dan fitur-fitur inovatif yang memukau. Dilengkapi dengan','Layanan Servis\n\n1. Service LCD : Harga  600k\n\n2. Reparasi Housing: Harga  450k\n\n3. Service Battery: Harga  350k\n\n4. Spare Part: Harga  200k - 500k')">
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
    </div>

    <!-- Popup HTML -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <h3 id="popup-title"></h3>
            <p id="popup-description"></p>
            <p id="popup-long-description"></p>
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
