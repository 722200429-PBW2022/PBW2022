@extends('Layout.main')
@section('header')
    <a name="" id="" class="btn btn-primary" href="/mahasiswa/formulirMhs" role="button"><i class="bi bi-person-plus-fill"></i> ADD MAHASISWA</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
            <input class="form-control mr-3" name="cari" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    @endsection
    @section('body')
     <div class="card-body">

     @if (session('alert1'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{session('alert1')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>

     @elseif (session('alert2'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session('alert2')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>

     @else(session('alert3'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('alert3')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>
        @endif
        
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang Minat</th>
                        <th scope="col">Edit Mahasiswa</th>
                        <th scope="col">Hapus Mahasiswa</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($mahasiswa as $no => $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td> 
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->gender }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->bidang_minat }}</td>
                        <td>
                            <a href="/mahasiswa/editMhs/{{ $mhs->id }}" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i></a>     
                        </td>

                        <td>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data?')">
                            <a href="/mahasiswa/deleteMhs/{{ $mhs->id}}"><i class="bi bi-x-square"></i></a>
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <span class="float-right mt-1">{{ $mahasiswa->links() }}</span>
@endsection