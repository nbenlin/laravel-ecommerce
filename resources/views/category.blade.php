@extends('layouts.master')
@section('title', $category->category_name)
@section('content')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Strona Główna</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $category->category_name }}</li>
        </ol>
    </nav>
   <div class="row">
       <div class="col-md-3">
           <div class="card">
           <div class="card-header">{{ $category->category_name }}</div>
               <div class="card-body">
                   <div class="card">
                        <div class="card-header">Alt Kategoriler</div>
                        <div class="card-body">
                            <div class="list-group">
                                @foreach ($sub_categories as $sub_category)
                            <a href="{{route('categories', $sub_category->slug)}}" class="list-group-item list-group-item-action">
                                        <i class="fa fa-minus mr-1"></i>
                                        {{$sub_category->category_name}}
                                    </a>    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>                   
               </div>
           </div>
       </div>
       <div class="col-md-9">
        <div class="products">
            <div class="card card-theme">
                <div class="card-header">
                    Sortuj
                    <a class="btn btn-light border" href="#" role="button">Popularny</a>
                    <a class="btn btn-light border" href="#" role="button">Nowości</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <div class="card border-0">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card border-0">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card border-0">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product">
                            <div class="card border-0">
                                <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                    <div class="card-price">
                                        <p class="card-text"><s>79,99 PLN</s></p>
                                        <p class="price-text">39,99 PLN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3 product">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>Noworodek bałewniany komplet.</p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{ asset('img/promocja.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><h6 class="card-title font-weight-bold">Bebetto KIDS</h6>
                                    Noworodek bałewniany komplet
                                </p>
                                <div class="card-price">
                                    <p class="card-text"><s>79,99 PLN</s></p>
                                    <p class="price-text">39,99 PLN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            </div>
        </div> 
        </div>
    </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection