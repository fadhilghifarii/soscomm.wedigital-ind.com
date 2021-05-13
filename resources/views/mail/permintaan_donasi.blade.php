<!DOCTYPE html>
<html>
<head>
    <title>Donasi</title>
    <style>
        p{
            color:black;
        }
    </style>
</head>
<body>
    <img src="{{$message->embed(public_path('assets/images/logo.png'))}}" width="100">
    <br>
    <p>Dear Donatur Sos Community Spread of Social,</p>
    <p>Berikut invoice Donasi yang sudah di inputkan pada website kami :</p>
    <p>Nama : {{ $details['nama'] }}</p>
    <p>Email : {{ $details['email'] }}</p>
    <p>No Telephone : {{ $details['hp'] }}</p>
    <br>
    <p>Dengan Nominal : <b>{{ $details['jumlah'] }}</b></p>
    <br>
    <p>Daftar BANK kami : </p>
    @foreach ($details['bank'] as $b)
        <p>BANK : {{$b->bank}}</p>
        <p>Atas Nama : {{$b->nama}}</p>
        <p>Nomor Rekening : {{$b->norek}}</p>
        <br>
    @endforeach
    <br>
    <p>Terima Kasih telah mempercayakan kami untuk menyalurkan donasi anda.</p>
</body>
</html>
