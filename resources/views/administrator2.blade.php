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
    {{-- <a class="" href="{{ url('administrator/add')}}"><button class="btn btn-primary">Tambah Administrator</button></a> --}}

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Id</th>
            <th>Nama Karyawan</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($_administrators as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->id_karyawan }}</td>
            <td>{{ $item->nama_karyawan }}</td>
            <td>{{ $item->ttl }}</td>
            <td>{{ $item->jk }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->nohp }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
                <img src="/storage/{{ $item->foto }}" width="50" alt="">
            </td>
            <td>
                <a href="administrator/hapus/{{ $item->id_karyawan }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</a>
                <a href="administrator/edit/{{ $item->id_karyawan }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            </tr>
        @endforeach
    </table>
</body>
</html>