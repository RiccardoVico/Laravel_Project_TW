@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('header')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/prova1.jpg)"  >;
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="../public">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">FAQ</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
@endsection

@section('content')     
<div class="page-section">
    <div class="list-group w-75" style="margin-left: auto; margin-right: auto">

        @foreach ($products as $product)
        <a href="#shortExampleAnswer1collapse" data-toggle="collapse" aria-expanded="false"
           aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$product->domanda}}</h5>
            </div>
            <p class="mb-1">
                {{$product->categoria}}
            </p>
            <small><u>Learn more</u></small>
            <!-- Collapsed content -->
            <div class="collapse mt-3" id="shortExampleAnswer1collapse">
                {{$product->risposta}}
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
      