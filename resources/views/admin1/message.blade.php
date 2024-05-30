admin_messages.php
<?php
// Example connection to the database
// Replace with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irepair";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT id, name, email, message FROM contact_us";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Messages</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        .table-wrapper {
            margin-top: 20px;
        }
        .table thead th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: bold;
        }
        .table tbody tr {
            background-color: #ffffff;
        }
        .btn-delete {
            background-color: white;
            color: black;
            border-color: black;
            border-radius: 10px;
        }
        .btn-delete:hover {
            background-color: red;
            color: white;
        }
        .title {
            font-weight: bold;
            font-size: 30px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Admin - View Messages</h1>
        </div>
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"]. "</td>
                                    <td>" . $row["name"]. "</td>
                                    <td>" . $row["email"]. "</td>
                                    <td>" . $row["message"]. "</td>
                                    <td>
                                        <form onsubmit=\"return confirm('Are you sure you want to delete this message?');\" action=\"delete_message.php\" method=\"post\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"id\" value=\"" . $row["id"]. "\">
                                            <button type=\"submit\" class=\"btn btn-delete btn-sm\">Delete</button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No messages found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>