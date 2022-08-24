<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{ Auth::user()->name }} You're now logged in!
                </div>

            </div>
            <p></p>

            <div class="row">
                <div class="col-md-3">
                    <div class="card" >
                        <img class="card-img-top center_img" src="{{ asset("img/home.png") }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"><a href="">Home</a> </h5>
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
        </div>

    </div>
</x-app-layout>
