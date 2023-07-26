@extends('tampilan')
@section('content')
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
        <div class="container" style="margin-top: 10%">
         <div class="card">
            <h2 class="fw-bold text-center">Data Absensi</h2>
                <table class="table">
                    {{-- <a class="" href="{{ url('absensi/add')}}"><button class="btn btn-primary">Tambah Absensi</button></a> --}}
                        {{-- <table id=""> --}}
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>pukul</th>
                                    <th>Keterangan</th>
                                </tr>
                    
                            @foreach ($_absensi as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->pukul }}</td>
                                <td>{{ $item->keterangan }}</td>
                                {{-- <td>
                                    <a href="absensi/hapus/{{ $item->id }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</a>
                                    <a href="absensi/edit/{{ $item->id }}" class="btn btn-success btn-sm">Edit</a>
                                </td> --}}
                                </tr>
                            @endforeach                    
                        {{-- </table> --}}
                </table>
            </div>
        </div>
        
    </body>
    </html>
@endsection
