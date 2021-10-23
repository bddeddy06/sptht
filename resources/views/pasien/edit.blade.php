@extends("layouts/admin")

@section("content-header")
    <h1>Data Pasien</h1>
@endsection

@section("content-link")
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('beranda.index')}}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{route('pasien.index')}}">Pasien</a></li>
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
        <form method="post" role="form" action="{{route('pasien.update',$data->id)}}" >
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="card-body">
                <div class="form-group">
                    <label for="id">ID pasien</label>
                    <input type="text" class="form-control" name="id" id="id" value="{{$data->id}}" required="required" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}" required="required">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" value="{{$data->umur}}" required="required">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{$data->jenis_kelamin}}" required="required">
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{$data->pekerjaan}}" required="required">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat pasien</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3">{{$data->alamat}}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{route('pasien.index')}}" class="btn btn-secondary"> Batal</a>
                <button type="submit" class="btn btn-primary">Sunting</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
