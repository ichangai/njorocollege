@extends('backend.admin.layouts.master')
	@section('content')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Dashboard</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row g-0 w-100">
										<div class="col-6">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Welcome Back </h4>
												<p class="mb-0">Njoro CPS Dashboard</p>
											</div>
										</div>
										<div class="col-6 align-self-end text-end">
											<img src="{{ asset('backend/img/illustrations/customer-support.png') }}" alt="Customer Support" class="img-fluid illustration-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h1 class="mb-2" style="font-size:18px;"></h1>
											<h4 class="mb-2" style="font-size:15px;">Total</h4>
											<h4 class="mb-2" style="font-size:15px;">Number of Students</h4>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="homes"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h1 class="mb-2" style="color: rgb(15, 15, 190); font-size:18px;"></h1>
											<h4 class="mb-2" style="font-size:15px;">Total</h4>
											<h4 class="mb-2" style="font-size:15px;">Number of Instructors</h4>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h1 class="mb-2" style="font-size:18px;"></h1>
											<h4 class="mb-2" style="font-size:15px;">Total</h4>
											<h4 class="mb-2" style="font-size:15px;">Number of Departments</h4>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h1 class="mb-2" style="font-size:18px;"></h1>
											<h4 class="mb-2" style="font-size:15px;">Total</h4>
											<h4 class="mb-2" style="font-size:15px;">Number of Courses</h4>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
   
	@endsection