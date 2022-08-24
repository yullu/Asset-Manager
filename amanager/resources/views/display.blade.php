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
            <div class="row">
            <div class="col-md-8">
                <h4>Report List</h4>
                <table class="table" style="width: 100%;">
                    <th>Asset Name</th>
                    <th>Brand</th>
                    <th>Serial No</th>
                    <th>Description</th>
                    <th>Status</th>

                    @foreach($reco as $rec)
                    <tr>
                        <td>{{$rec->asset_name}}</td>
                        <td>{{ $rec->brand }}</td>
                        <td>{{ $rec->serial_no }}</td>
                        <td>{{ $rec->description }}</td>
                        <td>{{$rec->status}}</td>
                        </form>
                    </tr>
                    @endforeach
                </table>
                <hr>
                <a href=" {{ route('reports.index') }}" class="btn btn-info">Back to Reports</a>
            </div>
            <div class="col-md-4">
                <h4>Graph Report</h4>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Work',     11],
                            ['Eat',      2],

                        ]);
                        var options = {
                            title: 'Brands'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>

                <div id="piechart" style="width: 300px; height: 250px;"></div>

            </div>
            </div>
        </div>
</x-app-layout>

