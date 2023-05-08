<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />

	<!-- Title -->
	<title>{{ __('FERME')}}</title>


	<!-- *************
		************ Common Css Files *************
	************ -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="{{ asset('fonts/style.css') }}">
	<!-- Main css -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">


	<!-- *************
		************ Vendor Css Files *************
	************ -->
	<!-- DateRange css -->
	<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}" />
	<!-- Data Tables -->
	<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
	<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
	<link href="{{ asset('vendor/datatables/buttons.bs.css') }}" rel="stylesheet" />

	@livewireStyles
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/moment.js') }}"></script>


	<!-- *************
		************ Vendor Js Files *************
	************* -->
	<!-- Slimscroll JS -->
	<script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
	<script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>

	<!-- Daterange -->
	<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
	<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

	<!-- Polyfill JS -->
	<script src="{{ asset('vendor/polyfill/polyfill.min.js') }}"></script>

	<!-- Apex Charts -->
	<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
	<script src="{{ asset('vendor/apex/admin/visitors.js') }}"></script>
	<script src="{{ asset('vendor/apex/admin/deals.js') }}"></script>
	<script src="{{ asset('vendor/apex/admin/income.js') }}"></script>
	<script src="{{ asset('vendor/apex/admin/customers.js') }}"></script>

	<!-- Data Tables -->
	<script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
	
	<!-- Custom Data tables -->
	<script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>
	<script src="{{ asset('vendor/datatables/custom/fixedHeader.js') }}"></script>

	<!-- Download / CSV / Copy / Print -->
	<script src="{{ asset('vendor/datatables/buttons.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/jszip.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>
	<script src="{{ asset('vendor/datatables/html5.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/buttons.print.min.js') }}"></script>



	<!-- Main JS -->
	<script src="{{ asset('js/main.js') }}"></script>
</head>

<body>

	<!-- Loading starts -->
	<div id="loading-wrapper">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Loading ends -->


	<!-- Page wrapper start -->
	<div class="page-wrapper">
		
		<!-- Sidebar wrapper start -->
		@include('layouts.partials.sidebar')
		<!-- Sidebar wrapper end -->

		<!-- Page content start  -->
		<div class="page-content">

			<!-- Header start -->
			@include('layouts.partials.header')
			<!-- Header end -->

			{{ $slot }}

		</div>
		<!-- Page content end -->

	</div>
	<!-- Page wrapper end -->

	<!--**************************
		**************************
			**************************
						Required JavaScript Files
			**************************
		**************************
	**************************-->

@livewireScripts
</body>
</html>