@extends('layouts.master')
@section('title', 'Płatności')
@section('content')

<div class="container mt-5">
    <div class="bg-content">
        <h2>Płatnośći</h2>
        <div class="row">
            <div class="col-md-5">
                <h3>Informacja o płatnośći</h3>
                <div class="form-group">
                    <label for="cartnum">Numer Karty</label>
                    <input type="text" class="form-control creditcard" id="cartnum" name="cardnumber" style="font-size:20px;" required>
                </div>
                <div class="form-group">
                    <label for="cardexpiredatemonth">Data Ważności</label>
                    <div class="row">
                        <div class="col-md-6">
                            Mesiąc
                            <select name="cardexpiredatemonth" id="cardexpiredatemonth" class="form-control" required>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Rok
                            <select name="cardexpiredateyear" class="form-control" required>
                                <option>2020</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cardcvv2">CVV (Numer Bezpieczeństwa)</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control creditcard_cvv" name="cardcvv2" id="cardcvv2" required>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox" checked> Zapoznałem się regulaminem i akceptuję.</label>
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-success btn-lg">Zapłać</button>
            </div>
            <div class="col-md-7">
                <h4>Kwota do zapłaty</h4>
                <span class="price">18.92 <small>PLN</small></span>

                <h4>Dostawa</h4>
                <span class="price">0 <small>PLN</small></span>

                <h4>Informacja dostawy</h4>
                <p>Adres dostawy</p>
                <a href="#">Zmień adres</a>

                <h4>Dostawa</h4>
                <p>Za darmo
            </div>
        </div>

    </div>
</div>
@endsection
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
<script>
    $('.creditcard').mask('0000-0000-0000-0000', { placeholder: "____-____-____-____" });
    $('.creditcard_cvv').mask('000', { placeholder: "___" });
    $('.telefon').mask('(000) 000-00-00', { placeholder: "(___) ___-__-__" });
</script>
@endsection