<link rel="stylesheet" href="{{asset('sweetalert/sweetalert2.css')}}">

<script src="{{asset('sweetalert/sweetalert2.js')}}"></script>
@if($message = Session::get('berhasil'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '<?= $message ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif



