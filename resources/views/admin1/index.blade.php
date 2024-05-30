]<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container .title {
            font-weight: bold;
            font-size: 30px;
            margin-bottom: 20px;
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
        .btn-edit {
            background-color: #333;
            border-color: black;
            color: white;
            border-radius: 10px;
        }
        .btn-edit:hover {
            background-color: #e0a800;
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
        .btn-message {
            background-color: black;
            color: #f8f9fa;
            border-radius: 10px;
        }
        .btn-message:hover {
            background-color: #555;
            color: white;
        }
        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }
        .search-bar input {
            flex: 1;
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #333;
            border-color: black;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #555;
            border-color: #555;
        }
    </style>
</head>
<body>
<div>
    <div class="container">
        <div class="title">
            <h1>iRepair - Admin</h1>
        </div>
        <div class="search-bar">
            <a href="{{ url('message') }}" class="btn btn-message">Message</a>
            <form class="d-flex" action="{{url('admin1')}}" method="get">
                <input class="form-control" type="search" name="katakunci" value="{{Request::get('katakunci')}}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary ml-2">Cari</button>
            </form>
            <a href="{{ url('admin1/create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Layanan</th>
                        <th>Tipe iPhone</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->layanan }}</td>
                        <td>{{ $item->tipe }}</td>
                        <td>{{ $item->durasi }}</td>
                        <td>
                            <a href="{{ url('admin1/'.$item->nama.'/edit') }}" class="btn btn-edit btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('admin1/'.$item->nama) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-delete btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->withQueryString()->links() }}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
