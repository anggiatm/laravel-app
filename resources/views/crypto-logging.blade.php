@extends('template.main')

@section('content')

     @include('components.navbar')
     @foreach ($prices as $price)
     <h1>Halaman Cripto Logging</h1>

     <h5>Price</h5>
     <p>Open {{ $price->open }}</p>
     <p>Close {{ $price->close }}</p>
     <p>Low {{ $price->low }}</p>
     <p>High {{ $price->high }}</p>
     <p>Time {{ $price->time }}</p>

     @endforeach

@endsection
