{{-- extend di main --}}
@extends('layouts/main')

{{-- sezione content presa da main --}}
@section('content')
<main class="products">
    <div class="container">
        @foreach ($products as $product)
        <div>
            <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
        </div>
        @endforeach
    </div>
  </main>
@endsection
