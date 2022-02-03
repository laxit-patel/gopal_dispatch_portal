@extends('admin.layouts.main',['active_page'=>'Products'])

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="/metronic8/demo10/../demo10/index.html" class="text-muted text-hover-primary">Home</a>
    </li>



    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Products</li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">View</li>
    <!--end::Item-->
</ul>
@endsection

@push('stylesheet')
<link href="{{ url('/assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endpush

@section('content')

@include('admin.layouts.alerts.alert')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card card-stretch shadow-lg card-scroll">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="fa fa-search position-absolute ms-6"></i>
                        <input type="text" id="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Add user-->
                        <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-success btn-hover-scale">
                        <i class="fa fa-plus"></i> Add User</a>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table id="table" class="table table-row-bordered">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       @foreach ($users as $user)
                       <tr class="fw-bold fs-6 text-gray-800">
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach ($user->getRoleNames() as $role)
                            <a class="badge badge-light-primary fs-7 m-1">{{ $role }}</a>
                            @endforeach
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
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
                                @can('user-update')
                                <div class="menu-item px-3">
                                    <a href="" class="menu-link px-3">Edit</a>
                                </div>
                                @endcan
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                @can('user-delete')
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3" onclick="deleteItem(this)" data-route="{{ route('admin.user.delete',['id' => $user->id]) }}">Delete</a>
                                </div>  
                                @endcan
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
    <!--end::Container-->
</div>
<!--end::Post-->

@endsection

@push('scripts')

<script src="{{ url('/assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="{{ url('/assets') }}/js/delete.js"></script>

<script>

    var table = $("#table").DataTable({
    'scrollCollapse': true,
    'sorting': false,
    "scrollY": "45vh",
    "scrollX": true
    });

    $('#search').keyup(function(){
        table.search($(this).val()).draw() ;
    })

</script>
@endpush