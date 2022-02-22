@extends('template.main')

@section('content')

     @include('components.navbar')
     <h1>Halaman Home</h1>
     <p>data dari route = {{ $data }}</p>

@endsection
