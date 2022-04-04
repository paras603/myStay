<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src={{ asset('assets/dashboard/js/jquery.min.js') }}></script>
<!-- Bootstrap -->
<script src={{ asset('assets/dashboard/js/bootstrap/bootstrap.bundle.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ asset('assets/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
{{--<script src={{ asset('assets/dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js') }}></script>--}}
{{--<script src={{ asset('assets/dashboard/plugins/raphael/raphael.min.js') }}></script>--}}
{{--<script src={{ asset('assets/dashboard/plugins/jquery-mapael/jquery.mapael.js') }}></script>--}}
{{--<script src={{ asset('assets/dashboard/plugins/jquery-mapael/maps/usa_states.js') }}></script>--}}
<!-- ChartJS -->
{{--<script src={{ asset('assets/dashboard/plugins/chart.js/Chart.min.js') }}></script>--}}
<!-- AdminLTE App -->
{{--Datatable--}}
<script src={{ asset('assets/dashboard/plugins/datatables/jquery.dataTables.min.js') }}></script>
<script src={{ asset('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}></script>
<script src={{ asset('assets/dashboard/js/adminlte.js') }}></script>

@include('includes.common.script')
<script src="{{asset('assets/dashboard/js/dashboard-custom.js')}}"></script>
<script src="{{asset('assets/dashboard/js/custom.js')}}"></script>
