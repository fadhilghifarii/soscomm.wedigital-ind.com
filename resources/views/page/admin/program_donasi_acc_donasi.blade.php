@extends('layouts.admin_header')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h3 class="mt-5">Acc Donasi</h3>
    <hr>
    <h6>List Donasi</h6>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nominal Donasi</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($transaksi as $t)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$t->user->name}}</td>
                <td>{{$t->user->email}}</td>
                <td>Rp.{{$t->jumlah}}</td>
                <td>
                    @if ($t->status=="belum")
                        Menunggu Verifikasi
                    @else
                        <b style="color:green;">Sudah di Acc</b>
                    @endif
                </td>
                <td>
                    @if ($t->status=="belum")
                    <a href="{{url('/admin/acc-donasi-acc/'.$t->id)}}"> <button type="button" class="btn btn-primary btn-sm mb-3">Acc</button></a>
                    @endif
                    <a href="{{url('/admin/acc-donasi-delete/'.$t->id)}}"> <button type="button" class="btn btn-warning btn-sm mb-3">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
