<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .form-label {
        font-weight: bold;
      }
      .table th, .table td {
        vertical-align: middle;
      }
      .container title {
          font-weight: bold;
          font-size: 30px;
      }
    </style>
    <div class="container tittle">
  <h1>iRepair - admin</h1>
</div>
  </head>
  <body class="bg-light">
    <main class="container">
      
 
 <!-- START FORM -->
 @if ($errors->any())
 <div class="pt-3">
    <div class="alert alert-danger">
      <ul>
        @foreach ( $errors->all() as $item)
          <li>{{$item}}</li>
      
        @endforeach
    </ul>
  </div>
 </div>
 @endif
 <form action='{{ url ('admin1/'.$data->nama)}}' method='post'class="my-4 p-4 bg-white rounded shadow-sm">
            <h4 class="mb-4">Tambah Data Pelanggan</h4>
            @csrf
            @method('PUT') 
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{$data->nama}}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label form-label">Layanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='layanan' value="{{$data->layanan}}" id="layanan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label form-label">Tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tipe' value="{{$data->tipe}}" id="tipe">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label form-label">Estimasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='durasi' value="{{$data->durasi  }}" id="durasi">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </div>
             </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <a href= "{{url ('admin1')}}"class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
        <!-- AKHIR FORM -->

        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>