@extends('layouts.master')
@section('title', 'zarejestruj')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Zarejestruj się</div>
                <div class="card-body   ">
                    <form>
                        <div class="form-group row">
                            <label for="nazwa_uzytkownika" class="col-sm-3 col-form-label">Nazwa użytkownika</label>
                            <div class="col-sm-8">
                              <input id="nazwa_uzytkownika" type="email" class="form-control" name="nazwa_uzytkownika" value="" placeholder="Nazwa użytkownika" required autofocus>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="haslo" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-8">
                            <input id="haslo" type="password" class="form-control" name="haslo" placeholder="Hasło" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="telefon" class="col-sm-3 col-form-label">Numer Telefonu</label>
                          <div class="col-sm-8">
                            <input id="haslo" type="text" class="form-control" name="telefon" placeholder="Numer Telefonu" required>
                          </div>
                        </div>
                        <div class="form-group row text-center">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Zarejestruj się</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection