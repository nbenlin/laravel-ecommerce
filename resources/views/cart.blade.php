@extends('layouts.master')
@section('title', 'Koszyk')
@section('content')
<div class="container my-5">
        <h2>Koszyk</h2>
        <table class="table table-bordererd table-hover">
            <tr>
                <th>Produkt</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Do zapłaty</th>
            </tr>
            <tr>
                <td colspan="5">Twój koszyk jest pusty</td>
            </tr>
            <tr>
                <td><img class="img-thumbnail mr-3" src="https://via.placeholder.com/150">Nazwa produktu</td>
                <td>18.99</td>
                <td>
                    <a href="#" class="btn btn-xs btn-default">-</a>
                    <span style="padding: 10px 20px">1</span>
                    <a href="#" class="btn btn-xs btn-default">+</a>
                </td>
                <td>18.99</td>
                <td>
                    <a href="#">
                        <i class="fa fa-trash-o fa-lg delete-icon" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>DO ZAPŁATY</th>
                <th>18.99</th>
                <th></th>
            </tr>
        </table>
        <div>
            <a href="#" class="btn btn-secondary btn-sm">Wyczyścz Koszyk</a>
            <a href="#" class="btn btn-success pull-right">Zapłać</a>
        </div>
</div>

@endsection