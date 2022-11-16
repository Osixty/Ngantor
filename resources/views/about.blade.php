@extends('layout.main')

@section('container')   
    <h1>halaman about</h1>  
    <h3> {{$nama}} </h3>
    <img src="images/{{ $gambar;}}" alt= "{{$nama}}" width="300px">  
@endsection
    