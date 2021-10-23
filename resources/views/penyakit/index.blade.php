@extends("layouts/admin")
@section("content-header")
    <h1>Data Penyakit</h1>
@endsection

@section("content-link")
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('beranda.index')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Penyakit</li>
    </ol>
@endsection

@section("content")
    @include('swal')

    <?php
    $connect = mysqli_connect("localhost","root","","db_tht");
    // mencari kode barang dengan nilai paling besar
    $query = "SELECT max(id) as maxKode FROM penyakit";
    $hasil = mysqli_query($connect,$query);
    $datapen = mysqli_fetch_array($hasil);
    $id_pen = $datapen['maxKode'];

    $noUrut = (int) substr($id_pen, 3, 3);

    $noUrut++;

    $char = "P";
    $id_pen = $char . sprintf("%03s", $noUrut);
    ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-6">
                        <h3 class="card-title">Tabel Penyakit</h3>
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
                            <th>ID Penyakit</th>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $p)
                        <tr>
                            <td>{{ $p -> id}}</td>
                            <td>{{ $p -> nama}}</td>
                            <td>{{ $p -> deskripsi}}</td>
                            <td style="width: 120px">
                                <form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}"  method="post" action="{{route('penyakit.destroy', $p->id) }}">
                                    <a href="{{ route('penyakit.edit', $p->id) }}" class="btn btn-warning btn-md fa fa-edit"></a>
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
    <div class="modal fade" id="createModalLong" tabindex="-1" role="dialog" aria-labelledby="createModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLongTitle">Tambah data penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('penyakit.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="id">ID Penyakit</label>
                                <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" value="<?= $id_pen?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Penyakit" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Penyakit" required></textarea>
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

