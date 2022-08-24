<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reports Center') }}
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
                <h4>Select Status to Generate Report</h4>
               <table style="width: 100%;">
                   <tr>
                       <form action="{{ route('reports.store') }}" method="post">
                           @csrf
                       <td>

                               <div class="form-group">
                                   <select name="status" class="form-control">
                                       <option value="Working">Working</option>
                                       <option value="Damaged">Damaged</option>
                                   </select>
                               </div>

                       </td><td>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-warning">Filter</button>
                        </div>
                       </td>
                       </form>
                   </tr>
               </table>


            </div>
        </div>
</x-app-layout>
