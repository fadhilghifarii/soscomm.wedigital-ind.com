@extends('layouts.donatur_header')
@section('content')

<div class="container mt-5">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin"> </div>
							<h5 class="user-name">{{$u->name}}</h5>
							<h6 class="user-email">{{$u->email}}</h6> </div>
						<div class="about">
							<h5>About</h5>
							<p>Deskripsi Tentang User</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2 text-primary">Personal Details</h6> </div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="fullName">Full Name</label>
								<input type="text" value="{{$u->name}}" class="form-control" id="fullName" placeholder="Enter full name"> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" value="{{$u->email}}" class="form-control" id="eMail" placeholder="Enter email ID"> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" value="{{$u->hp}}" class="form-control" id="phone" placeholder="Enter phone number"> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-4">
							<div class="form-group">
								{{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
								<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2 text-primary">History Donasi</h6> </div>
					</div>
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Panti</th>
								<th scope="col">Program Donasi Panti Asuhan</th>
								<th scope="col">Nominal Donasi</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>...</td>
								<td>...</td>
								<td>
									<a href="#">
										<button type="button" class="btn btn-primary btn-sm mb-3">Delete</button>
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>...</td>
								<td>...</td>
								<td>
									<a href="#">
										<button type="button" class="btn btn-primary btn-sm mb-3">Delete</button>
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Jhon</td>
								<td>...</td>
								<td>...</td>
								<td>
									<a href="#">
										<button type="button" class="btn btn-primary btn-sm mb-3">Delete</button>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
