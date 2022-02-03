<div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-5 py-2">
            <!--begin::Title-->
            <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ @$active_page }}</h1>
            <!--end::Title-->
            @yield('breadcrumb')
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-2">

            <!--begin::Button-->
            @hasSection('action')
            @yield('action')
            @endif
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
