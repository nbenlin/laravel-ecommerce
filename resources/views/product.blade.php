@extends('layouts.master')
@section('title', 'Product')
@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Strona Główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nazwa Produktu</li>
        </ol>
    </nav>
    <div class="bg-content">
        <div class="row">
            <div class="col-md-5">
                <img src="https://via.placeholder.com/400">
                <hr>
                <div class="row">
                    <div class="col-xs-3 p-3">
                        <a href="#"><img class="img-thumbnail" src="https://via.placeholder.com/100"></a>
                    </div>
                    <div class="col-xs-3 p-3">
                        <a href="#"><img class="img-thumbnail" src="https://via.placeholder.com/100"></a>
                    </div>
                    <div class="col-xs-3 p-3">
                        <a href="#"><img class="img-thumbnail" src="https://via.placeholder.com/100"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h1>Nazwa Produktu</h1>
                <p class="price-text-lg">129 PLN</p>
                <p><a href="#" class="btn btn-success">Dodaj do koszyka</a></p>
            </div>
        </div>

        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li role="presentation" class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opis Produktu</a>
                </li>
                <li role="presentation" class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Komentarze</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              </div>
        </div>

    </div>
</div>
@endsection
    
