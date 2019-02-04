<div id="page-wrapper" class="gray-bg dashbard-1">
    @include("theme-inspinia::main-layout/page-wrapper/navbar")
    <div class="row">
        <div class="col-lg-12">
            @include("theme-inspinia::main-layout/page-wrapper/breadcrumb")
            <div class="wrapper wrapper-content animated fadeInRight">
                @yield("body.page-wrapper.content")
            </div>
            @include("theme-inspinia::main-layout/page-wrapper/footer")
        </div>
    </div>
</div>