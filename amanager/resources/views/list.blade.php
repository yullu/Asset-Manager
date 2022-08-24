<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            </div>
            <p></p>

            <p></p>
            <div class="col-md-11">
                <div class="float-left">
                    <h4 class="pb-3">Records List</h4>
                </div>

                <div class="float-right">
                    <a href="{{ route('erecords.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create Record</a>
                </div>
            </div>

            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <table class="table">
                    <th>Asset Name</th>
                    <th>Brand</th>
                    <th>Serial No</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                    @foreach($erecords as $recods)
                        <tr>
                            <td>{{ $recods->asset_name }}</td>
                            <td>{{ $recods->brand }}</td>
                            <td>{{ $recods->serial_no }}</td>
                            <td>{{ $recods->description }}</td>
                            <td>
                                @if($recods->status === "Working")
                                    <span class="badge badge-success text-white">Working</span>
                                @else
                                    <span class="badge badge-danger text-white">Damaged</span>

                                @endif
                            </td>
                            <td>
                                <small><span class="badge rounded-pill bg-warning text-dark">{{ $recods->created_at->diffForHumans() }}</span></small>
                            </td>
                            <td><small><span class="badge rounded-pill bg-warning text-dark">{{ $recods->updated_at->diffForHumans() }}</span></small></td>
                            <td >
                                <a href="{{ route('erecords.edit', $recods->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                <form action="{{ route('erecords.destroy', $recods->id) }}" style="display: inline;" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash">Del</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
                <hr>
                {{$erecords->links() }}
            </div>


        </div>
    </div>

</x-app-layout>



