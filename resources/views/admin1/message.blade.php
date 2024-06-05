\<!DOCTYPE html>
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
        .btn-back {
            background-color: #333;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-color: #333;
        }
        .btn-back:hover {
            background-color: #555;
            border-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="btn-back" onclick="window.history.back();">Back</button>
        <div class="title">
            <h1>Admin - View Messages</h1>
        </div>
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Attachment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->firstName }}</td>
                            <td>{{ $item->lastName }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->noPhone }}</td>
                            <td>{{ $item->msg }}</td>
                            <td>
                                @if ($item->attachment)
                                    <a href="{{ asset('storage/' . $item->attachment) }}" target="_blank">View Attachment</a>
                                @else
                                    No attachment
                                @endif
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $data->links() }}
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
