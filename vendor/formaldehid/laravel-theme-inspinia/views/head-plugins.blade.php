@if(isset($plugins))
    @foreach($plugins as $plugin)
        @if($plugin == "gitter")
            <!-- Gritter -->
            <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
        @elseif($plugin == "toastr")
            <!-- Toastr style -->
            <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">
        @elseif($plugin == "dataTables")
            <!-- DataTables -->
            <link href="/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        @elseif($plugin == "chosen")
            <!-- Chosen -->
            <link href="/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
        @elseif($plugin == "icheck")
            <!-- iCheck -->
            <link href="/css/plugins/iCheck/custom.css" rel="stylesheet">
        @endif
    @endforeach
@endif