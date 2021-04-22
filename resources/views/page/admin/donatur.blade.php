@extends('layouts.admin_header')
@section('content')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3 class="mt-5">Donatur</h3>
                <hr>

                <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Add New Donatur</button></a>
                <h6>List Donatur</h6>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
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
                            <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>...</td>
                        <td>...</td>
                        <td>
                            <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Jhon</td>
                        <td>...</td>
                        <td>...</td>
                        <td>
                            <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </main>
@endsection
