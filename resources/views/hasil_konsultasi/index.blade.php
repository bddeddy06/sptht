@extends("layouts/admin")
@section('content-header')
    <h1>Diagnosa</h1>
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
                            <th>Nama Penyakit</th>
                            <th>Nama Gejala</th>
                            <th>MB</th>
                            <th>MD</th>
                            <th>CF</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $p)
                            <tr>
                                <td>{{ $p -> penyakit -> nama}}</td>
                                <td>{{ $p -> gejala ->nama}}</td>
                                <td>{{ $p -> mb}}</td>
                                <td>{{ $p -> md}}</td>
                                <td>{{ $p -> cf }}</td>

                                <td style="width: 120px">
                                    <form onsubmit="event.preventDefault()" id="myForm-{{ $p->penyakit_id }}"  method="post" action="{{route('kaidah_produksi.destroy', $p->penyakit_id) }}">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-md fa fa-trash-alt" onclick="Hapus('{{ $p->penyakit_id }}')"></button>
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
