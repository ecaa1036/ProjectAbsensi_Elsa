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
    <form action="{{ $action }}" method="post">
    @csrf
    <div class="card">
        <div class="row">
            <div class="container p-3 mt-5">
                <h2 class="fw-blod text-center">Absensi</h2>
                <div class="col-mb-3">
                    <label for="" class="from-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $_absensi->nama }}" placeholder="Masukkan Nama">
                </div>
                <div class="col-mb-3">
                    <label for="" class="from-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $_absensi->tanggal }}" placeholder="Masukkan tanggal">
                </div>
                <div class="col-mb-3">
                    <label for="" class="from-label">Pukul</label>
                    <input type="time" name="pukul" class="form-control" value="{{ $_absensi->pukul }}" placeholder="Masukkan pukul">
                </div>
                <div class="col-mb-3">
                    <label for="" class="from-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="{{ $_absensi->keterangan }}" placeholder="Masukkan keterangan">
                </div>
                <div class="pt-3">
                    <input type="submit" value="Simpan" class=" btn btn-primary">
                </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    
</body>
</html>