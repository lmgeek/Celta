@php $plugins = ["jquery.ui", "dataTables", "chosen", "iCheck", "jquery.validate"]; @endphp
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield("head.title", "INSPINIA | Dashboard")</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    @include("theme-inspinia::head-plugins")

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    @stack("head.styles")

    @stack("head.scripts")

</head>
<body>
<div id="wrapper">
    @include("theme-inspinia::main-layout/left-sidebar")
    @include("theme-inspinia::main-layout/page-wrapper")
    @include("theme-inspinia::main-layout/small-chat")
    @include("theme-inspinia::main-layout/right-sidebar")
</div>

<!-- Mainly scripts -->
<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

@include("theme-inspinia::body-plugins")

<!-- Custom Inspinia -->
<script src="/js/custom-inspinia.js"></script>

<!-- Custom -->
<script src="/js/custom.js"></script>

@stack("body.scripts")

</body>
</html>