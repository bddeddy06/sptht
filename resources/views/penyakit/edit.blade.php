@extends("layouts/admin")

@section("content-header")
    <h1>Data Penyakit</h1>
@endsection

@section("content-link")
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('beranda.index')}}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{route('penyakit.index')}}">Penyakit</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sunting Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" role="form" action="{{route('penyakit.update',$data->id)}}" >
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="card-body">
                <div class="form-group">
                    <label for="id">ID Penyakit</label>
                    <input type="text" class="form-control" name="id" id="id" value="{{$data->id}}" required="required" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Penyakit</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}" required="required">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Penyakit</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$data->deskripsi}}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{route('penyakit.index')}}" class="btn btn-secondary"> Batal</a>
                <button type="submit" class="btn btn-primary">Sunting</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    @endsection
