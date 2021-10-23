<!DOCTYPE html>
<html>
@include('layouts.adminpartials.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.adminpartials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.adminpartials.sidebarmain')

        <!-- Content Wrapper. Contains page content -->
        @include('layouts.adminpartials.contentwrapper')
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('layouts.adminpartials.footer')
        <!-- /Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    <!-- /.control-sidebar -->
    </div>

    <!-- ./wrapper -->
    @include('layouts.adminpartials.scripts')
</body>
</html>
