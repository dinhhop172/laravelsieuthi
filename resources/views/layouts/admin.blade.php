@extends('layouts.master')
{{-- <body>
    <div class="container-fluid">
        <div class="row"> --}}
            {{-- menu left --}}
            {{-- <div class="col-sm-2">
                <a href="" style="text-decoration: none">
                    <img src="{{ asset('img/avt.png') }}" alt="ko hien thi" style="border-radius: 50%;width: 30%">
                    <p>Trau Pro</p>
                </a>
                <div class="list-group">
                    <a href="{{ route('index') }}" class="list-group-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('customers.index') }}" class="list-group-item" {{ Route::currentRouteName() == 'customers.index' ? 'active' : '' }}>Customer</a>
                    <a href="{{ route('products.index') }}" class="list-group-item {{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}">Product</a>
                    <a href="{{ route('productbrands.index') }}" class="list-group-item" {{ Route::currentRouteName() =='productbrands.index' ? 'active' : '' }}>Brand</a>
                </div>
            </div> --}}
            {{-- right content --}}
            {{-- <div class="col-sm-10" style="background-color:white;">
                @yield('content')
            </div>
        </div>
    </div>
</body> --}}
<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboards.index') }}">
				<div class="sidebar-brand-icon rotate-n-15"> <i class="fas fa-mask"></i> </div>
				<div class="sidebar-brand-text mx-3">Gaoranger</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('dashboards.index') }}"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">
			<!-- Heading -->
			<div class="sidebar-heading"> Interface </div>
			<!-- Nav Item - Brand Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-fw fa-cog"></i> <span>Brand</span> </a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded"> <a class="collapse-item" href="{{ route('productbrands.index') }}">Show</a> </div>
				</div>
			</li>
			<!-- Nav Item - Customer Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities"> <i class="fas fa-fw fa-wrench"></i> <span>Customer</span> </a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded"> <a class="collapse-item" href="{{ route('customers.index') }}">Show</a> </div>
				</div>
			</li>
			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages"> <i class="fas fa-fw fa-folder"></i> <span>Product</span> </a>
				<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded"> <a class="collapse-item" href="{{ route('products.index') }}">Show</a> </div>
				</div>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
							</div>
						</div>
					</form>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
										</div>
									</div>
								</form>
							</div>
						</li>
						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts --><span class="badge badge-danger badge-counter">3+</span> </a>
							<!-- Dropdown - Alerts -->
						</li>
						<!-- Nav Item - Messages -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-envelope fa-fw"></i>
								<!-- Counter - Messages --><span class="badge badge-danger badge-counter">7</span> </a>
							<!-- Dropdown - Messages -->
						</li>
						<div class="topbar-divider d-none d-sm-block"></div>
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span> <img class="img-profile rounded-circle" src="{{ asset('img/avt.png') }}"> </a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"><a class="dropdown-item" href="{{ route('home') }}">
                            {{-- <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                            Back Home
                            </a>
							</div>
                        </li>
					</ul>
				</nav>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid"> @yield('content') </div>
				<!-- /.container-fluid -->
				<!-- End of Main Content -->
				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto"> </div>
					</div>
				</footer>
				<!-- End of Footer -->
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up top"></i> </a>
		<!-- Logout Modal-->
</body>
