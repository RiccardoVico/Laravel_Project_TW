@extends('layouts.public')

@section('title', 'Catalogo')

@section('header')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/chiave2.jpeg);">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catalogo</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">Catalogo</h1>
            </div>
        </div>
    </div>
</div>
</header>
@endsection

@section('content')
<div class="page-section">
    <div class="container">
        @include('layouts/prova')
    </div>
</div> 
@endsection
        
        
        
            