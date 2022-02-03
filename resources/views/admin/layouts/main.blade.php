<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Gopal Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/x-icon" href="{{ url('/assets') }}/media/logos/favicon.ico">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--end::Page Vendor Stylesheets-->
		@stack('stylesheet')
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ url('/assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				@include('admin.layouts.partials.sidebar')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-bg">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Brand-->
							<div class="header-brand me-5">
								<!--begin::Aside toggle-->
								<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
									<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Aside toggle-->
								<!--begin::Time-->
								<span class="fs-2x text-white">{{ date('d-m-Y') }} <b class="text-aeonx p-2"> | </b> {{date('l') }}</span>
								<!--end::Time-->
							</div>
							<!--end::Brand-->
							<!--begin::Topbar-->
							<div class="topbar d-flex align-items-stretch">
								<!--begin::Item-->
								<div class="d-flex align-items-stretch me-2 me-lg-4">
									<!--begin::Search-->
									<div id="kt_header_search" class="header-search d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
										<!--begin::Tablet and mobile search toggle-->
										<div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
											<div class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-white">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Tablet and mobile search toggle-->
										<!--begin::Form-->
										<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-2 mb-lg-0" autocomplete="off">
											<!--begin::Hidden input(Added to disable form autocomplete)-->
											<input type="hidden" />
											<!--end::Hidden input-->
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
											<span class="svg-icon svg-icon-3 position-absolute top-50 translate-middle-y ms-0 ms-lg-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black" />
													<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-flush ps-8 ps-lg-12" name="search" value="" placeholder="Search" data-kt-search-element="input" />
											<!--end::Input-->
											<!--begin::Spinner-->
											<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-lg-5" data-kt-search-element="spinner">
												<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
											</span>
											<!--end::Spinner-->
											<!--begin::Reset-->
											<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-lg-4" data-kt-search-element="clear">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<!--end::Reset-->
										</form>
										<!--end::Form-->

									</div>
									<!--end::Search-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center me-2 me-lg-4">
									<a href="#" class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10 position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-white">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-100 animation-blink"></span>
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
											<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
												<li class="nav-item">
													<a class="nav-link opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
												</li>
												<li class="nav-item">
													<a class="nav-link opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
												</li>
												<li class="nav-item">
													<a class="nav-link opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
												</li>
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->
										<!--begin::Tab content-->
										<div class="tab-content">

										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Item-->

							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                        <!--begin::Toolbar-->
						@include('admin.layouts.partials.toolbar')
						<!--end::Toolbar-->

                        @yield('content')

					</div>
					<!--end::Content-->

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ url('/assets') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ url('/assets') }}/js/scripts.bundle.js"></script>

		@stack('scripts')

	</body>
	<!--end::Body-->
</html>
