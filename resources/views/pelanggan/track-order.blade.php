<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order - iRepair</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: #333;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            outline: none;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .track-order h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>iRepair</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/service-iphone">Service iPhone</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
            <li><a href="/track-order">Tracking Order</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="container">
        <section class="track-order">
            <h2>Track Your Order</h2>
            <div class="search-bar">
                <input type="text" placeholder="Search Your Order">
                <button type="button">Search</button>
            </div>
            <h3>10 Last Transactions</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Layanan</th>
                        <th>Model</th>
                        <th>Estimasi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample rows, replace with dynamic PHP content as needed -->
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Reparasi LCD</td>
                        <td>iPhone 15</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jane Smith</td>
                        <td>Service Baterai</td>
                        <td>iPhone 14</td>
                        <td>1 day</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </section>
    </div>
</main>

<footer>
    <p>&copy; 2024 iRepair. All rights reserved.</p>
</footer>

</body>
</html>
