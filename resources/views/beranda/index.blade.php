@extends("layouts/admin")
@section("content-header")
    <h1>Beranda</h1>
    @endsection

@section("content-link")
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active"><a href="#">Home</a></li>
    </ol>
    @endsection

@section("content")
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$penyakitcount}}</h3>

                    <p>Jumlah Penyakit</p>
                </div>
                <div class="icon">
                    <i class="fa fa-procedures"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$gejalacount}}</h3>

                    <p>Jumlah Gejala</p>
                </div>
                <div class="icon">
                    <i class="fa fa-thermometer-three-quarters"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$pasiencount}}</h3>

                    <p>Jumlah Pasien</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$diagnosacount}}</h3>

                    <p>Jumlah Diagnosa</p>
                </div>
                <div class="icon">
                    <i class="fa fa-x-ray"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
    @endsection
