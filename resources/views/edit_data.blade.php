@extends('navbar')

@section('konten')
<div class="container mt-3 mb-3 bg-bd">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="text-center mt-3">Form Data Diri</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                    <form action="/edit-data/edit" method="post" >
                     {{ csrf_field() }}
                            <div class="form-group">
                              <label for="Nama">Nama</label>
                              <input type="text" class="form-control" value="{{$data->nama}}"name="nama" required id="nama"   placeholder="Input nama">
                              <input type="hidden" class="form-control" value="{{$data->id}}" name="id" required id="nama"   placeholder="Input nama">
                            </div>
                            <div class="form-group">
                              <label for="Nama">age</label>
                              <input type="number" class="form-control"  value="{{$data->age}}" name="age" id="age" required  placeholder="Input age">
                            </div>
                            <div class="form-group">
                              <label for="Nama">City</label>
                              <input type="text" class="form-control" value="{{$data->city}}" name="city" id="city" required  placeholder="Input city">
                            </div>
                         
                         
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bt-kanan mb-3">Simpan</button>
                            </div>
                    </form>
                    
            </div>
        </div>
    </div>

@endsection
