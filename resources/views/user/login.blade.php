@extends('layouts.master')
@section('title', 'login')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Zaloguj się</div>
                <div class="card-body   ">
                    <form>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="haslo" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-8">
                            <input id="haslo" type="password" class="form-control" name="haslo" placeholder="Hasło" required>
                          </div>
                        </div>
                        <div class="form-group row text-center">
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                              <label class="form-check-label" for="gridCheck1">
                                Przypomnij mi 
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row text-center">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Loguj</button>
                          </div>
                          <div class="col-sm-10">
                            <a class="btn btn-link" href="#" style="font-size: 12px;">
                              Zapomniałesz(asz) hasło?
                            </a>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- TO DO 
    * FONT SIZE LARI AYARLA 
  --}}