@extends("layouts/admin")
@section('content-header')
    <h1>Diagnosa</h1>
@endsection

@section('content-link')
@endsection

@section("content")
    @include('swal')

    <?php
    $connect = mysqli_connect("localhost","root","","db_tht");
    // mencari kode barang dengan nilai paling besar
    $query = "SELECT max(id) as maxKode FROM diagnosa";
    $hasil = mysqli_query($connect,$query);
    $datadiag = mysqli_fetch_array($hasil);
    $id_diag = $datadiag['maxKode'];

    $noUrut = (int) substr($id_diag, 3, 3);

    $noUrut++;

    $char = "DIA";
    $id_diag = $char . sprintf("%03s", $noUrut);
    ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-6">
                        <h3 class="card-title">Tabel Diagnosa</h3>
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
                            <th>ID Gejala</th>
                            <th>Nama Penyakit</th>
                            <th>Nama Gejala</th>
                            <th>MB</th>
                            <th>MD</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $p)
                            <tr>
                                <td>{{ $p -> id}}</td>
                                <td>{{ $p -> penyakit -> nama}}</td>
                                <td>{{ $p -> gejala ->nama}}</td>
                                <td>{{ $p -> mb}}</td>
                                <td>{{ $p -> md}}</td>

                                <td style="width: 120px">
                                    <form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}"  method="post" action="{{route('diagnosa.destroy', $p->id) }}">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-md fa fa-trash-alt" onclick="Hapus('{{ $p->id }}')"></button>
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
                    <h5 class="modal-title" id="createModalLongTitle">Tambah data Diagnosa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('diagnosa.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID Diagnosa</label>
                            <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" value="<?= $id_diag?>" readonly>
                        </div>
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
                            <select class="form-control"  name="gejala_id" style="width: 100%;" >
                                @foreach($datagej as $p)
                            <option value="{{$p->id}}">{{$p->id}}-{{$p->nama}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="mb">MB</label>
                            <select class="form-control"  name="mb" style="width: 100%;">
                                <option value="0">0</option>
                                <option value="0.2">0.2</option>
                                <option value="0.4">0.4</option>
                                <option value="0.6">0.6</option>
                                <option value="0.8">0.8</option>
                                <option value="1.0">1.0</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mb">MD</label>
                            <select class="form-control"  name="md" style="width: 100%;" required>
                                <option value="0">0</option>
                                <option value="0.2">0.2</option>
                                <option value="0.4">0.4</option>
                                <option value="0.6">0.6</option>
                                <option value="0.8">0.8</option>
                                <option value="1.0">1.0</option>
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
