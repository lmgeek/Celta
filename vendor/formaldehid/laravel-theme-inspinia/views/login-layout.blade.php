@php $plugins = ["jquery.validate"]; @endphp
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield("head.title", "INSPINIA | Login")</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    @include("theme-inspinia::head-plugins")

    @stack("head.styles")

    @stack("head.scripts")

</head>
<body class="gray-bg">

@include("theme-inspinia::login-layout/middle-box")

<!-- Mainly scripts -->
<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- Custom Inspinia -->
<script src="/js/custom-inspinia.js"></script>

<!-- Custom -->
<script src="/js/custom.js"></script>

<!-- Plugins -->
@include("theme-inspinia::body-plugins")

@stack("body.scripts")

</body>
</html>