<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="row">
            <div class="container p-3 mt-5">
                <form action="">
                    <h2 class="fw-blod text-center">Administrator</h2>
                    <div class="col-mb-3">
                        <label for="" class="from-label">Id</label>
                        <input type="text" name="id_karyawan" class="form-control" value="{{ $_administrators->id_karyawan }}" placeholder="Masukan Id Karyawan">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="from-label">Nama</label>
                        <input type="text" name="nama_karyawan" class="form-control" value="{{ $_administrators->nama_karyawan }}" placeholder="Masukan Nama Karyawan">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="from-label">Tanggal Masuk</label>
                        <input type="date" name="tm" class="form-control" value="{{ $_administrators->tm }}" placeholder="Masukan Tanggal Masuk">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control" value="{{ $_administrators->jk }}" placeholder="Masukan Jenis Kelamin">
                    </div>
                      <div class="col-mb-3">
                        <label for="" class="from-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $_administrators->alamat }}" placeholder="Masukan Alamat">
                    </div>
                      <div class="col-mb-3">
                        <label for="" class="from-label">No Hp</label>
                        <input type="number" name="nohp" class="form-control" value="{{ $_administrators->nohp }}" placeholder="Masukan No Hp">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="from-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $_administrators->jabatan }}" placeholder="Masukan Jabatan">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" value="{{ $_administrators->foto}}" placeholder="Masukan foto">
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div> 
    </div>
    </form>
</body>
</html>