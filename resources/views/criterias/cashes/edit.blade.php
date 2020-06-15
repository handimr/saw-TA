@extends('layouts.main')
@section('title','Form ubah uang muka')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form ubah Data Bobot kepribadian</h1>
            <form method="post" action="/cashes/{{$cash->id}}">
            @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan name" name="name" 
                    value="{{$cash->name}}"> 
                    @error('name')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger">{{ $message }}</div>
                        </div>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('bobot_cash') is-invalid @enderror" id="keterangan" placeholder="Masukkan keterangan" name="bobot_cash" 
                    value="{{$cash->bobot_cash}}"> 
                    @error('bobot_cash')
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