@extends('criterias.index')
@section('table4')
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel kemampuan</strong>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kriteria Pemohon</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $abilities as $ability ) 
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ability->name}}</td>
                        <td>{{$ability->bobot_ability}}</td>
                        <td>
                            <a href="/abilities/{{$ability->id}}/edit"  class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

