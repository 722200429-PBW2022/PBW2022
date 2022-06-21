@extends('Layout.main')
@section('header')
    <a name="" id="" class="btn btn-primary" href="/user/formulirUser" role="button"><i class="bi bi-person-plus-fill"></i> ADD USER</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
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
                        <th scope="col">NIM Pengguna</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Edit User</th>
                        <th scope="col">Hapus User</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($user as $no => $u)
                    <tr>
                        <td>{{ $u->id }}</td> 
                        <td>{{ $u->nim}}</td>
                        <td>{{ $u->nama_user}}</td>
                        <td>{{ $u->no_hp }}</td>
                        <td>{{ $u->name }}</td>
                        <td>
                            <a href="/user/editUser/{{ $u->id }}" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i></a>     
                        </td>

                        <td>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data?')">
                            <a href="/user/deleteUser/{{ $u->id}}"><i class="bi bi-x-square"></i></a>
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <span class="float-right mt-1">{{ $user->links() }}</span>
@endsection