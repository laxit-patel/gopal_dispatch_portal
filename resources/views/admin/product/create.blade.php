@extends('admin.layouts.main',['active_page'=>'Product'])

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="/metronic8/demo10/../demo10/index.html" class="text-muted text-hover-primary">Home</a>
    </li>



    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Product</li>

    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Create</li>
    <!--end::Item-->
</ul>
@endsection

@section('action')
<a href="{{ route('admin.product') }}" class="btn btn-sm btn-primary">View</a>
@endsection

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

                <form class="form" method="POST" action="{{ route('admin.dealer.store') }}" id="dealer_form">
                   @csrf

                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bolder">Personal Details</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="row">

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">First Name</label>
                                        <input type="text" class="form-control form-control-solid" name="fname" placeholder="First Name"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="form-label fs-5 fw-bolder">Middle Name</label>
                                        <input type="text" class="form-control form-control-solid" name="mname" placeholder="Middle Name"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="form-label fs-5 fw-bolder">Last Name</label>
                                        <input type="text" class="form-control form-control-solid" name="lname" placeholder="Last Name"/>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-4">
                                <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">Phone</label>
                                <input type="text" class="form-control form-control-solid" name="phone" placeholder="Phone Number"/>
                            </div>

                            <!--begin::Invoice footer-->
                            <div class="d-flex flex-column mt-5 fv-row">
                                <!--begin::Label-->
                                <div class="fs-5 fw-bolder form-label mb-3">Detailed Address
                                <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="This Will Be Considered As Shipping Address"></i></div>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid rounded-3" name="address" rows="4"></textarea>
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
                                <h2 class="fw-bolder">Login Credentials</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="mt-3">
                                <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">User Name</label>
                                <input type="text" class="form-control form-control-solid" name="name" placeholder="User Name"/>
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">Email</label>
                                <input type="email" class="form-control form-control-solid" name="email" placeholder="Email"/>
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlInput1" class="required form-label fs-5 fw-bolder">Password</label>
                                <input type="password" class="form-control form-control-solid" name="password" placeholder="Password"/>
                            </div>

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
                                <h2 class="fw-bolder">Select Region</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="row">

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="required form-label">City</label>
                                        <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="required form-label">State</label>
                                        <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label for="exampleFormControlInput1" class="required form-label">Country</label>
                                        <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
                                    </div>
                                </div>

                            </div>

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
                                <h2 class="fw-bolder">Tax Details</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Name</label>
                                <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
                            </div>
                            <!--begin::Option-->
                            <div class="d-flex flex-column mb-5 fv-row rounded-3 p-7 border border-dashed border-gray-300">
                                <!--begin::Label-->
                                <div class="fs-5 fw-bolder form-label mb-3">Usage treshold
                                <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Thresholds help manage risk by limiting the unpaid usage balance a customer can accrue. Thresholds only measure and bill for metered usage (including discounts but excluding tax). &lt;a href='#'&gt;Learn more&lt;/a&gt;."></i></div>
                                <!--end::Label-->
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" checked="checked" value="1" />
                                    <span class="form-check-label text-gray-600">Bill immediately if usage treshold reaches 80%.</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <div class="d-flex flex-column fv-row rounded-3 p-7 border border-dashed border-gray-300">
                                <!--begin::Label-->
                                <div class="fs-5 fw-bolder form-label mb-3">Pro-rate billing
                                <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Pro-rated billing dynamically calculates the remainder amount leftover per billing cycle that is owed. &lt;a href='#'&gt;Learn more&lt;/a&gt;."></i></div>
                                <!--end::Label-->
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    <span class="form-check-label text-gray-600">Allow pro-rated billing when treshold usage is paid before end of billing cycle.</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Card body-->
                    </div>
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
                            <h5 class="mb-3">Customer details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                <!--begin::Name-->
                                <a href="../../demo10/dist/apps/customers/view.html" class="fw-bolder text-gray-800 text-hover-primary me-2">Sean Bean</a>
                                <!--end::Name-->
                                <!--begin::Status-->
                                <span class="badge badge-light-success">Active</span>
                                <!--end::Status-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Email-->
                            <a href="#" class="fw-bold text-gray-600 text-hover-primary">sean@dellito.com</a>
                            <!--end::Email-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">Product details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                <!--begin::Plan-->
                                <span class="badge badge-light-info me-2">Basic Bundle</span>
                                <!--end::Plan-->
                                <!--begin::Price-->
                                <span class="fw-bold text-gray-600">$149.99 / Year</span>
                                <!--end::Price-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <h5 class="mb-3">Payment Details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                <!--begin::Card info-->
                                <div class="fw-bold text-gray-600 d-flex align-items-center">Mastercard
                                <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt="" /></div>
                                <!--end::Card info-->
                                <!--begin::Card expiry-->
                                <div class="fw-bold text-gray-600">Expires Dec 2024</div>
                                <!--end::Card expiry-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Actions-->
                        <div class="mb-0">
                            <button type="submit" data-form="dealer_form" class="btn btn-primary" id="create_button">
                                <!--begin::Indicator-->
                                <span class="indicator-label">Create Dealer</span>
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
    </script>
@endpush
