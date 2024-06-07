@extends('layout.main')

@section('title', 'Tambah Fakultas')
    
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Fakultas</h4>
            <p class="card-description">
              Formulir tambah fakultas
            </p>
            <form action="POST" action="{{route('fakultas.store')}}"></form>
            <form class="forms-sample" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="nama">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama Fakultas">
                @error('nama')
                    <span class="text-danger">{{$message}}</span> 
                @enderror
              </div>
              <div class="form-group">
                <label for="singkatan">singkatan</label>
                <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="FIKR,FIB,....">
                @error('singkatan')
                    <span class="text-danger">{{$message}}</span> 
                @enderror
              <div class="form-group">
                <label for="singkatan">foto</label>
                <input type="file" class="form-control" name="url_foto">
                @error('url_foto')
                    <span class="text-danger">{{$message}}</span> 
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
              <a href="{{url('fakultas')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection