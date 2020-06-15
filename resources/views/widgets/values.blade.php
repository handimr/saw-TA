@extends('layouts.main')
@section('title','nilai bobot')
@section('content')
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Bobot</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $values as $value ) 
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->keterangan}}</td>
                                <td>{{$value->valuebobot}}</td>
                                <td>
                                    <a href="/values/{{$value->id}}/edit"  class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection 