@extends('navbar')

@section('konten')
    <div class="container mt-3">
        <div class="row">
            
            <div class="col-md-12">
            <a href="/tambah-data" class="btn btn-success mb-3 mt-3">Tambah Data</a>
              <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">age</th>
                        <th scope="col">city</th>
                        <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $p)
                        <tr>
                        <th scope="row">1</th>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->age}}</td>
                        <td>{{$p->city}}</td>
                        <td><a href="/edit-data/{{$p->id}}" class="btn btn-success ">Edit</a> 
                        <a href="/hapus-data/{{$p->id}}" class="btn btn-danger">hapus</a></td>
                        </tr>
                        @endforeach 
                    </tbody>
                    </table>


     
            </div>
        </div>
    </div>
    @endsection
