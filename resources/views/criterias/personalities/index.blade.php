@extends('criterias.index')
@section('table1')
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel kepribadian</strong>
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
                        @foreach( $personalities as $personality ) 
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$personality->name}}</td>
                        <td>{{$personality->bobot_personality}}</td>
                        <td>
                            <a href="/personalities/{{$personality->id}}/edit"  class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

