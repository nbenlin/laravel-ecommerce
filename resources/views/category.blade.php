@extends('layouts.master')
@section('title', 'Kategori')
@section('content')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Strona Główna</a></li>
          <li class="breadcrumb-item"><a href="#">Kategoria</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kategoria</li>
        </ol>
      </nav>
   <div class="row">
       <div class="col-md-3">
           <div class="card">
               <div class="card-header">Kategori Adı</div>
               <div class="card-body">
                   <div class="card">
                        <div class="card-header">Alt Kategoriler</div>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-minus mr-1"></i>Alt Kategori</a>                 
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">Przedział cenowy</div>
                        <div class="card-body">
                            <div class="list-group categories">
                                <form>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> 100-200
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> 200-300
                                            </label>
                                        </div>
                                    </div>
                                </form>
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