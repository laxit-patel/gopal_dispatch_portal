@extends('admin.layouts.main',['active_page'=>'Role'])

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="/metronic8/demo10/../demo10/index.html" class="text-muted text-hover-primary">Home</a>
    </li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{ route('admin.role') }}">
        Role
        </a>
    </li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Create</li>
    <!--end::Item-->
</ul>
@endsection

@push('stylesheet')
<link href="{{ url('/assets') }}/plugins/custom/listbox/dual-listbox.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')   

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                <!--begin::Form-->

                @include('admin.layouts.alerts.error')
                
                <form class="form" method="POST" action="{{ route('admin.role.update') }}" id="role_form">
                   @csrf
                   <input type="hidden" name="id" value="{{ $role->id }}">

                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bolder">Role Details</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           
                            <div class="row">

                                <div class="col-md-12">
                                    <div>
                                        <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">Role Name</label>
                                        <input type="text" class="form-control form-control-solid" name="role" value="{{ $role->name }}" placeholder="Role Name"/>
                                    </div>
                                </div>

                            </div>

                            <!--begin::Invoice footer-->
                            <div class="d-flex flex-column mt-5 fv-row">
                                <!--begin::Label-->
                                <div class="fs-5 fw-bolder form-label mb-3">Description
                                <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="This Will Be Considered As Shipping Address"></i></div>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid rounded-3" name="description" placeholder="Description" rows="4">{{ $role->description }}</textarea>
                            </div>
                            <!--end::Invoice footer-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bolder">Select Permissions</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="permissions" multiple name="permissions[]">
                                        @foreach ($permissions as $permission)
                                            <option 
                                            value="{{ $permission->id }}" 
                                            @if(in_array( $permission->id, $rolePermissions))? selected : '' @endif>
                                            {{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

                        </div>
                        <!--end::Card body-->
                    </div>

                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bolder">Delete Role</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="notice d-flex bg-light-danger rounded border-primary border border-dashed rounded-3 p-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">This is a very important notice!</h4>
                                        <div class="fs-6 text-gray-700">Deleting Role can cause System Malfunction, So Think Twice Before You do anything.</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>

                            <div class="row mt-10 ">

                                <div class="col-md-9">
                                    <div class="form-floating mb-7">
                                        <input type="email" class="form-control" id="floatingInput"/>
                                        <label for="floatingInput">Please Type "Delete Role"</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="" class="btn btn-lg btn-danger btn-block w-100 disabled" >Delete Role</a>
                                </div>

                            </div>

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                    <!--end::Card-->

                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Summary</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 fs-6">
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">Created At</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                <!--begin::Name-->
                                {{ \Carbon\Carbon::now() }}
                                <!--end::Name-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">Permissions Selected</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                <!--begin::Price-->
                                <span class="fw-bold text-gray-600">13</span>
                                <!--end::Price-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Actions-->
                        <div class="mb-0">
                            <button type="submit" data-form="role_form" class="btn btn-primary" id="create_button">
                                <!--begin::Indicator-->
                                <span class="indicator-label">Update Role</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator-->
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@endsection

@push('scripts')
<script src="{{ url('/assets') }}/plugins/custom/listbox/dual-listbox.js"></script>
    <script type="text/javascript">
        // Element to indecate
        var button = document.querySelector("#create_button");

        // Handle button click event
        button.addEventListener("click", function() {
            // Activate indicator
            button.setAttribute("data-kt-indicator", "on");
            button.setAttribute("disabled", "true");

            form = document.getElementById(this.getAttribute('data-form'));
            form.submit();
        });


        let permission = new DualListbox('.permissions', {
            showAddButton: false,
            showAddAllButton: false,
            showRemoveButton: false,
            showRemoveAllButton: false
        });

    </script>
@endpush