@if(isset($plugins))
    @foreach($plugins as $plugin)
        @if($plugin == "flot")
            <!-- Flot -->
            <script type="text/javascript" src="/js/plugins/flot/jquery.flot.js"></script>
            <script type="text/javascript" src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
            <script type="text/javascript" src="/js/plugins/flot/jquery.flot.spline.js"></script>
            <script type="text/javascript" src="/js/plugins/flot/jquery.flot.resize.js"></script>
            <script type="text/javascript" src="/js/plugins/flot/jquery.flot.pie.js"></script>
        @elseif($plugin == "peity")
            <!-- Peity -->
            <script type="text/javascript" src="/js/plugins/peity/jquery.peity.min.js"></script>
            <script type="text/javascript" src="/js/demo/peity-demo.js"></script>
        @elseif($plugin == "jquery.ui")
            <!-- jQuery UI -->
            <script type="text/javascript" src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>
        @elseif($plugin == "gitter")
            <!-- GITTER -->
            <script type="text/javascript" src="/js/plugins/gritter/jquery.gritter.min.js"></script>
        @elseif($plugin == "sparkline")
            <!-- Sparkline -->
            <script type="text/javascript" src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>
            <script type="text/javascript" src="/js/demo/sparkline-demo.js"></script>
        @elseif($plugin == "chartJs")
            <!-- ChartJS-->
            <script type="text/javascript" src="/js/plugins/chartJs/Chart.min.js"></script>
        @elseif($plugin == "toastr")
            <!-- Toastr -->
            <script type="text/javascript" src="/js/plugins/toastr/toastr.min.js"></script>
        @elseif($plugin == "dataTables")
            <!-- DataTables -->
            <script type="text/javascript" src="/js/plugins/dataTables/datatables.min.js"></script>
        @elseif($plugin == "chosen")
            <!-- Chosen -->
            <script type="text/javascript" src="/js/plugins/chosen/chosen.jquery.js"></script>
            @push("body.scripts")
                <script type="text/javascript">
                    $(function(){
                        $('.chosen-select').chosen({width: "100%"});
                    });
                </script>
            @endpush
        @elseif($plugin == "icheck")
            <!-- iCheck -->
            <script type="text/javascript" src="/js/plugins/iCheck/icheck.min.js"></script>
            @push("body.scripts")
                <script type="text/javascript">
                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green'
                    });
                </script>
            @endpush
        @elseif($plugin == "jquery.validate")
            <!-- Jquery Validate -->
            <script type="text/javascript" src="/vendor/jsvalidation/js/jsvalidation.js"></script>
        @endif
    @endforeach
@endif