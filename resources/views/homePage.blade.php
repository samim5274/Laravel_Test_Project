@extends('layout.custom')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h1>Hi, I am {{$username}}.THis is {{$userid}} and my age is {{$age}}.</h1>

            <img src="/img/img (1).JPG" alt="image not found!">

            @foreach($products as $products)
                @if($products=='table')
                <h2>{{$products}}</h2>
                @elseif($products=='chair')
                <h2>{{$products}}</h2>
                @elseif($products=='Bodna')
                <h2>{{$products}}</h2>
                @else
                <h2>There are not item</h2>
                @endif
            @endforeach
            
        </div>
    </div>
</div>

@endsection