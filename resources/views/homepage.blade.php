@extends('layouts.master')
@section('title', 'KidsCity')
@section('content')
    <div class="container">
        <div class="row my-5" id="head-content">
            <div class="col-md-3 d-none d-sm-block">
                <div class="list-group">
                    <a href="#" class="list-group-item-heading list-group-item-action">
                      <h5>Kategorie</h5>
                    </a>
                    @foreach ($categories as $category)
                <a href="{{route('categories', $category->slug)}}" class="list-group-item list-group-item-action">
                            {{ $category->category_name }}
                        </a>    
                    @endforeach                                        
                </div> 
            </div>
            
            <div class="col-md-6 mt-5">
                    @include('layouts.partials.carousel')                
            </div>

            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-header">
                        <h5>Aktualne Promocje</h5>
                    </div>
                    <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                        <div class="card-price">
                            <p class="card-text"><s>79,99 PLN</s></p>
                            <p class="price-text">39,99 PLN</p>
                        </div>
                        
                      <a href="#" class="btn btn-primary">Sprawdź</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <div class="container">
        <div class="row">
        <div class="products">
            <div class="card card-theme">
                <div class="card-header">Produkty w Promocji</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                    
                                  <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                    
                                  <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                    
                                  <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                    
                                  <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3 product">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                                
                              <a href="#" class="btn btn-primary">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                                
                              <a href="#" class="btn btn-primary">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                                
                              <a href="#" class="btn btn-primary">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Noworodek bałewniany komplet -<b>BEBETTO KIDS</b></p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                                
                              <a href="#" class="btn btn-primary">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            </div>
        </div>
    </div>
@endsection