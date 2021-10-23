@extends("layouts/admin")
@section('content-header')
    <h1>Kaidah Produksi</h1>
@endsection

@section('content-link')
@endsection

@section("content")
    @include('swal')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-6">
                        <h3 class="card-title">Tabel kaidah produksi</h3>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button"  data-toggle="modal" data-target="#createModalLong" class="btn btn-md float-right" style="background-color:transparent;">
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </button>

                    <table id="example1" class="table table-bordered table-striped table-hover data">
                        <thead>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>Nama Gejala</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $p)
                            <tr>
                                <td>{{ $p -> penyakit -> nama}}</td>
                                <td>{{ $p -> gejala ->nama}}</td>
                                <td style="width: 120px">
                                    <form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}"  method="post" action="{{route('kaidah_produksi.destroy', $p->id) }}">
                                        <a href="{{ route('kaidah_produksi.edit', $p->id) }}" class="btn btn-warning btn-md fa fa-edit"></a>
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-md fa fa-trash-alt" onclick="Hapus({{ $p->id }})"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="createModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLongTitle">Tambah data Kaidah Produksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('kaidah_produksi.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Penyakit</label>
                            <select class="form-control" name="penyakit_id">
                                @foreach($datapen as $p)
                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gejala</label>
                                <select class="select2bs4" multiple="multiple" name="gejala_id[]" style="width: 100%;">
                                    @foreach($datagej as $p)
                                <option value="{{$p->id}}" >{{$p->id}}-{{$p->nama}}</option >
                                    @endforeach
                                </select>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Create -->
@endsection
<script type="text/javascript">
    function Hapus(id) {
        Swal.fire({
            title: 'Anda Yakin??',
            text: "Anda tidak bisa mengembalikan data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result)=> {
            if(result.value){
                document.getElementById('myForm-'+id).submit();
            }
        })
    }

</script>
