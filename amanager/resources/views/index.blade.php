@extends('layout')

@section('main-content')
        <h1 class="mt-5">Dashboard</h1>
        <hr>
        <p>Welcome to Asset Management Application</p>

        <div class="row">
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top center_img" src="{{ asset("img/records.png") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><a href="{{ route('dashboard.index') }}">Home</a> </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top center_img" src="{{ asset("img/records.png") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><a href="{{ route('erecords.index') }}">Record Register</a> </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top center_img" src="{{ asset("img/reports.png") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><a href="{{ route('reports.index') }}" >Reports</a> </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>



@endsection
