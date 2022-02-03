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
    <li class="breadcrumb-item text-muted">View</li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">{{ $role->name }}</li>
    <!--end::Item-->
</ul>
@endsection

@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl ">

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
                        <!--begin::Card-->
                        <div class="card card-flush" >

                            <!--begin::Card body-->
                            <div class="card-body pt-0 card-scroll h-100">
                                <!--begin::Permissions-->
                                <table class="table" id='permission_table'>
                                    <thead >
                                        <tr>
                                            <th>
                                                <h2 class="d-flex align-items-center mt-5">Permissions
                                                    <span class="text-gray-600 fs-6 ms-1">( {{ $role->permissions->count() }} )</span>
                                                </h2>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative  " data-kt-view-roles-table-toolbar="base">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" id="search_permission" class="form-control form-control-solid ps-15" placeholder="Search Permission">
                                            </div>
                                            <!--end::Search-->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($role->permissions as $count => $permission)
                                        <tr>
                                            <td>
                                                {{ $permission->name }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end::Permissions-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer pt-0">
                                <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-10">
                        <!--begin::Card-->
                        <div class="card card-flush mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header pt-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="d-flex align-items-center">Users Assigned
                                    <span class="text-gray-600 fs-6 ms-1">( {{ $role->users->count() }} )</span></h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1" data-kt-view-roles-table-toolbar="base">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Users">
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Group actions-->
                                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-view-roles-table-toolbar="selected">
                                        <div class="fw-bolder me-5">
                                        <span class="me-2" data-kt-view-roles-table-select="selected_count"></span>Selected</div>
                                        <button type="button" class="btn btn-danger" data-kt-view-roles-table-select="delete_selected">Delete Selected</button>
                                    </div>
                                    <!--end::Group actions-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table id="table" class="table table-row-bordered">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="">Name</th>
                                            <th class="">Email</th>
                                            <th class="">Created</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($role->users as $user)
                                        <tr>
                                            <!--begin::Name=-->
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <!--end::Name=-->
                                            <!--begin::Created Date-->
                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                            <!--end::Created Date-->
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->

                                                    <div class="menu-item px-3">
                                                        <a href="../../demo10/dist/apps/user-management/users/view.html" class="menu-link px-3">View</a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->

                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" onclick="deleteItem(this)" data-route="{{ route('admin.user.delete',['id' => $user->id]) }}">Revoke</a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Container-->
        </div>

    </div>
    <!--end::Container-->
</div>

@endsection

@push('scripts')

<script src="{{ url('/assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="{{ url('/assets') }}/js/delete.js"></script>

<script>

    $("#table").DataTable({
    'scrollCollapse': true,
    'sorting': false,
    "scrollY": "45vh",
    "scrollX": true
    });

    permission_table = $('#permission_table').DataTable({
        "bPaginate": false,
        "bInfo": false,
        "bFilter": true,
        "scrollY": 365,
        'sorting': false,
        "scrollX": true
    });

    $('#search_permission').keyup(function(){
        permission_table.search($(this).val()).draw() ;
    })


</script>
@endpush
