@extends('admin.layout')

@section('content')

<div id="top_x_div" style="width: 200px; height: 200px;"></div>


@endsection

@section('extra-js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);
        function drawStuff() {  
            var data = new google.visualization.arrayToDataTable([
            ['Stats', 'Number'],
            ["News", {{$news}}],
            ["Releases", {{$releases}}],
            ["Artists", {{$artists}}],
            ]);
            var options = {
            width: $(window).width()*0.33,
            height: $(window).height()*0.33,
            legend: { position: 'none' },
            chart: {
                title: 'Transcape basic stats',
                subtitle: '' },
            bar: { groupWidth: "90%" }
            };
            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            // Convert the Classic options to Material options.
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };
    </script>
@endsection