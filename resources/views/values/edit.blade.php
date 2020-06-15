@extends('layouts.main')
@section('title','Form ubah Data Bobot Kriteria')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form ubah Data Bobot Kriteria</h1>
            <form method="post" action="/values/{{$value->id}}">
            @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan name" name="name" 
                    value="{{$value->name}}"> 
                    @error('name')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger">{{ $message }}</div>
                        </div>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukkan keterangan" name="keterangan" 
                    value="{{$value->keterangan}}"> 
                    @error('keterangan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger">{{ $message }}</div>
                        </div>
                    @enderror
                    {{-- <p>{{ $errors->first('keterangan') }}</p>  error bisa pake ini sama aja--}}

                </div>
                <div class="form-group">
                    <label for="valuebobot">Bobot</label>
                    <input type="text" class="form-control @error('valuebobot') is-invalid @enderror" id="valuebobot" placeholder="Masukkan Bobot" name="valuebobot" 
                    value="{{$value->valuebobot}}"> 
                    @error('valuebobot')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger">{{ $message }}</div>
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection