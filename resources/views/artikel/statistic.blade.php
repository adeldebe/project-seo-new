@extends('home')

@section('judul')
<div>
	Statistic
</div>
@endsection

@section('main')
    <div class="card-body">
        <div class="default-tab">
            <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Views</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Post</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Comments</a>
        </div>
            </nav>
        </div>
    </div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="panel">
        <div id="Views"></div>
<script>
    Highcharts.chart('Views', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Views'
        },
        xAxis: {
            categories: [
                '26 April',
                '27 April',
                '28 April',
                '29 April',
                '30 April',
                '01 Mei',
                '02 Mei',
                '03 Mei',
                '04 Mei',
                '05 Mei',
                '06 Mei',
                '07 Mei'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Angka'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah',
            data: [35, 35, 35, 35, 35, 35, 35, 35, 35, 35, 35, 35]

        }]
    });
</script>
@endsection