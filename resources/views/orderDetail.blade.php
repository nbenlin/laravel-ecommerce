@extends('layouts.master')
@section('title', 'szczegóły zamówienia')
@section('content')
<div class="container mt-5">
    <div class="bg-content">
        <h2>Numer zamówienia (SP-00123)</h2>
        <table class="table table-hover">
            <tr>
                <th>Produkt</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Do zapłaty</th>
                <th>Status</th>
            </tr>
            <tr>
                <td> <img  class="img-thumbnail mr-3" src="https://via.placeholder.com/120">Nazwa produktu</td>
                <td>18.99</td>
                <td>1</td>
                <td>18.99</td>
                <td>
                    Twoje zamówienie zostało przyjęte, <br> Trwa przygotowanie zamówienie, <br>  Zamówienie zostało wysyłany, <br> Problem zamówienie. Proszimy o kontakt!
                </td>
                </td>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>Dostawa:</th>
                <th>Za darmo</th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>Kwota do zapłaty:</th>
                <th>18.99</th>
                <th></th>
            </tr>
        </table>
    </div>
</div>
@endsection