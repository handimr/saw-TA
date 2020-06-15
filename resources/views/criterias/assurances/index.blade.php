@extends('criterias.index')
@section('table2')
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel jaminan</strong>
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
                        @foreach( $assurances as $assurance ) 
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$assurance->name}}</td>
                        <td>{{$assurance->bobot_assurance}}</td>
                        <td>
                            <a href="/assurances/{{$assurance->id}}/edit"  class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

