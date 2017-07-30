<script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>

{{-- <script type="text  /javascript" src="{{asset('js/app.js')}}"></script> --}}
<script type="text/javascript" src="{{asset('js/custom-pre.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap_confirmation.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<!-- FastClick -->
<script type="text/javascript" src="{{asset('plugins/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script type="text/javascript" src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script type="text/javascript" src="{{asset('plugins/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script type="text/javascript" src="{{asset('plugins/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script type="text/javascript" src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script type="text/javascript" src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script type="text/javascript" src="{{asset('plugins/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.time.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script type="text/javascript" src="{{asset('plugins/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script type="text/javascript" src="{{asset('plugins/DateJS/build/date.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script type="text/javascript" src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('/plugins/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>

<!-- Custom Theme Scripts -->
<script type="text/javascript" src="{{asset('js/ripples.js')}}"></script>
<script type="text/javascript" src="{{asset('js/material.js')}}"></script>
<script type="text/javascript" src="{{asset('js/framework-custom.min.js')}}"></script>




<script type="text/javascript">
$.material.init();

$('#myDatepickerBirthday').datetimepicker({
       format: 'YYYY-MM-DD'
   });

$(document).ready(function(){
   $('#DataTable').DataTable({
       "columnDefs": [
        { "orderable": false, "targets": "nosort" }
      ]
   });
});

</script>
