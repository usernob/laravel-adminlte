@extends('Layout.default.layout')
@section('title', 'Dashboard')
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info">
                                <i class="fas fa-user"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Users</span>
                                <span class="info-box-number">{{ $user_count }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger">
                                <i class="fas fa-graduation-cap"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Siswa</span>
                                <span class="info-box-number">{{ $siswa_count }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning">
                                <i class="fas fa-book"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Program</span>
                                <span class="info-box-number">{{ $program_count }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-success">
                                <i class="fas fa-wallet"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Pendapatan Perbulan</span>
                                <span class="info-box-number">Rp @format($income)</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah User Berdasarkan Jenis Program</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart"
                            style="min-height: 250px; height: 60vh; max-height: 60vh; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script>
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        function generateRandomColor() {
            let maxVal = 0xFFFFFF; // 16777215
            let randomNumber = Math.random() * maxVal;
            randomNumber = Math.floor(randomNumber);
            randomNumber = randomNumber.toString(16);
            let randColor = randomNumber.padStart(6, 0);
            return `#${randColor.toUpperCase()}`
        }
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [],
            datasets: [{
                data: [],
                backgroundColor: [],
            }]
        }
        $.get("{{ route('api.siswa.program.count') }}", function(data) {
            donutData.labels = Object.keys(data);
            donutData.datasets[0].data = Object.values(data);
            donutData.datasets[0].backgroundColor = Object.keys(data).map(function(key) {
                return generateRandomColor()
            })
            var donutOptions = {
                maintainAspectRatio: false,
                responsive: true,
                colors: {
                    enabled: true
                },
                legend: {
                    display: true,
                    position: 'left',
                    labels: {
                        fontStyle: 'bold'
                    }
                }
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            Chart.defaults.global.defaultFontColor = '#3c8dbc'
            new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions,

            })
        })
    </script>
@endsection
