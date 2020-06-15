@extends('criterias.index')
@section('table3')
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel uang muka</strong>
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
                        @foreach( $cashes as $cash ) 
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$cash->name}}</td>
                        <td>{{$cash->bobot_cash}}</td>
                        <td>
                            <a href="/cashes/{{$cash->id}}/edit"  class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

