@extends('layouts.admin_header')
@section('content')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3 class="mt-5">Donatur</h3>
                <hr>

                {{-- <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Add New Donatur</button></a> --}}
                <h6>List Donatur</h6>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                        {{-- <th scope="col">Action</th> --}}

                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $u)
                    <tr>
                      <th scope="row">{{$no++}}</th>
                      <td>{{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      <td>
                        @php
                        if(!empty($u->hp)){
                            echo $u->hp;
                        }else{
                            echo "Tidak Ada";
                        }
                        @endphp
                      </td>
                      {{-- <td>
                          <a href="#"> <a type="button" href="#" class="btn btn-primary btn-sm mb-3">Delete</a></a>
                      </td> --}}
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </main>
@endsection
