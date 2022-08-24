<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            </div>
            <p></p>

            <p></p>

            <div class="clearfix"></div>
            <div class="col-md-6">

                <form action="{{ route('erecords.update',$ereco->id ) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="asset_name">Asset Name</label>
                        <input type="text" name="asset_name" id="asset_name" value="{{ $ereco->asset_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" id="brand" class="form-control" value="{{ $ereco->brand }}">
                    </div>
                    <div class="form-group">
                        <label for="serial_no">Serial No</label>
                        <input type="text" name="serial_no" id="serial_no" class="form-control" value="{{ $ereco->serial_no }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control">{{ $ereco->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="asset_name">Status</label>
                        <select name="status" id="status" class="form-control">
                            @foreach($statuses as $stat)
                                <option value="{{ $stat['value'] }}"> {{ $stat['label'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>

            </div>
    </div>
</x-app-layout>

