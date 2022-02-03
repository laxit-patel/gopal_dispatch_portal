@extends('admin.layouts.main',['active_page'=>'Dashboard'])

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="/metronic8/demo10/../demo10/index.html" class="text-muted text-hover-primary">Home</a>
    </li>

  

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Profile</li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Overview</li>
    <!--end::Item-->
</ul>
@endsection

@section('content')   

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl ">
        Content
    </div>
    <!--end::Container-->
</div>

@endsection