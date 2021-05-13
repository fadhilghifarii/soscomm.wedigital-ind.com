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
                    <form method="post" action="{{url('/donatur/ubah-profil')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$u->id}}">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2 text-primary">Personal Details</h6> </div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="fullName">Full Name</label>
								<input type="text" value="{{$u->name}}" name="name" class="form-control" id="fullName" placeholder="Enter full name" required> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" value="{{$u->email}}" name="email" class="form-control" id="eMail" placeholder="Enter email ID" required> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" value="{{$u->hp}}" name="hp" class="form-control" id="phone" placeholder="Enter phone number"> </div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-4">
							<div class="form-group">
								{{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
								<button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
					</div>
                    </form>
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
                            <?php $no=1; ?>
                            @foreach ($transaksi as $t)
							<tr>
								<th scope="row">{{$no++}}</th>
								<td>{{$t->program->panti->nama}}</td>
								<td>{{$t->program->nama}}</td>
								<td>Rp.{{$t->jumlah}}</td>
                                @if ($t->status=="belum")
								<td>
									<a href="{{url('/donatur/donasi-delete/'.$t->id)}}">
										<button type="button" class="btn btn-primary btn-sm mb-3">Delete</button>
									</a>
								</td>
                                @endif
							</tr>
                            @endforeach
                            @if ($c_transaksi==0)
                            <tr>
                                <td colspan="5" align="center">Belum ada History Donasi</td>
                            </tr>
                            @endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
