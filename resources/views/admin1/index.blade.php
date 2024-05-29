<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .container title {
          font-weight: bold;
          font-size: 30px;

        }
        .container {
            padding: 20px;
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
            background-color: #fdfdfd;
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
        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .search-bar input {
            flex: 1;
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #333;
            border-color: black;
        }
        .btn-primary:hover {
            background-color: #555;
            border-color: #555;
        }
    </style>
</head>
<div class="container tittle">
  <h1>iRepair - admin</h1>
</div>

<body>
    <div class="container">
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Masukkan kata kunci">
            <button class="btn btn-secondary">Cari</button>
            <a href="{{ url ('admin1/create')}}" class="btn btn-primary ml-2">+ Tambah Data</a>
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
                  @foreach ( $data as $item )
                  <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->layanan}}</td>
                        <td>{{$item->tipe}}</td>
                        <td>{{$item->durasi}}</td>
                        <td>
                            <a href="{{url ('admin1/'.$item->nama.'/edit')}}" class="btn btn-edit btn-sm">Edit</a>
                            <a href="#" class="btn btn-delete btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                  
                  @endforeach
                    
                </tbody>
            </table>
            {{ $data->links()}}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
