@extends('layouts.master')
@section('title', 'Orders')
@section('content')
<div class="container mt-5">
    <div class="bg-content">
        <h2>Zamówienia</h2>
        <p>Nie masz jescze zamówienie</p>
        <table class="table table-bordererd table-hover">
            <tr>
                <th>Numer zamówienie</th>
                <th>Data zamówienie</th>
                <th>Dostawa</th>
                <th>Kwota do zapłaty</th>
                <th>Status</th>
                <th></th>
            </tr>
            <tr>
                <td>SP-00123</td>
                <td>25.09.2020</td>
                <td>2.99</td>
                <td>0</td>
                <td>
                    Twoje zamówienie zostało przyjęte, <br> Trwa przygotowanie zamówienie, <br> Zamówienie zostało wysyłany, <br> Problem zamówienie. Proszimy o kontakt!
                </td>
                <td><a href="#" class="btn btn-sm btn-success">Szczegóły</a></td>
            </tr>
        </table>
    </div>
</div>
@endsection