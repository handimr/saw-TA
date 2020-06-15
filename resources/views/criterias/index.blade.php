@extends('layouts.main')
@section('title','nilai bobot')
@section('content')
    <h2>Form tabel kriteria</h2>
        <div class="row">
            <div class="col-md-6">
                @yield('table1')
            </div>
            <div class="col-lg-6">
                @yield('table2')
            </div>
            <div class="col-lg-6">
                @yield('table3')
            </div>
            <div class="col-lg-6">
                @yield('table4')
            </div><div class="col-lg-6">
                @yield('table5')
            </div>

        </div>
@endsection 