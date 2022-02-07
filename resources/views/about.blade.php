@extends('layout.main')

@section('container')   
    <h1>HALAMAN ABOUT!</h1>  
    <h3> {{$nama}} </h3>
    <img src="images/{{ $gambar;}}" alt= "{{$nama}}" width="300px">  
@endsection
    