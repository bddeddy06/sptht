@extends("layouts/admin")

@section("content-header")
    <h1>Pertanyaan</h1>
@endsection

@section("content-link")
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('beranda.index')}}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{route('solusi.index')}}">Pertanyaan</a></li>
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
        <form method="post" role="form" action="{{route('pertanyaan.update',$data->id)}}" >
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="card-body">
                <div class="form-group">
                    <label for="id">ID pertanyaan</label>
                    <input type="text" class="form-control" name="id" id="id" value="{{$data->id}}" required="required" readonly>
                </div>
                <div class="form-group">
                    <label>Gejala</label>
                    <select class="form-control" name="gejala_id">
                        @foreach($datagej as $p)
                            <option value="{{$p->id}}" {{($p->id==$data->gejala_id)?"selected='selected'":""}}>{{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <select class="form-control" name="jawaban">

                            <option value="Ya" {{($data->jawaban=='Ya')?"selected='selected'":""}}>Ya</option>
                            <option value="Tidak" {{($data->jawaban=='Tidak')?"selected='selected'":""}}>Tidak</option>

                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{route('pertanyaan.index')}}" class="btn btn-secondary"> Batal</a>
                <button type="submit" class="btn btn-primary">Sunting</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
