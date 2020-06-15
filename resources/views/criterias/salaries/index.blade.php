@extends('criterias.index')
@section('table5')
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel Gaji</strong>
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
                        @foreach( $salaries ?? '' as $salary ) 
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$salary->name}}</td>
                        <td>{{$salary->bobot_salary}}</td>
                        <td>
                            <a href="/salaries/{{$salary->id}}/edit"  class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

