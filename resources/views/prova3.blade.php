@extends('layouts.public')

@section('title', 'Catalogo')

@section('header')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/casetta.png);">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="index.html">Home Locatore</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Annunci Opzionati</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">Annunci Opzionati</h1>
            </div>
        </div>
    </div>
</div>
</header>
@endsection

@section('content')
<div class="page-section">
    <div class="container">
        @include('layouts/provaa')
    </div>
</div> 
@endsection
        
        
        
            