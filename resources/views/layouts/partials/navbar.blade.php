    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}"><img src="{{ asset('img/logo.png') }}" alt="kids-city"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Szukaj" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 text-white bg-dark border-dark" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link mr-3" href="{{route('cart')}}">koszyk<i class="fa fa-shopping-cart"><span class="badge badge-theme">5</span></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.login')}}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.register')}}">utwórz konto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Konto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">moje zamówienie</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">wyloguj</a>
                    </div>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-block" id="navbar-iki">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link mr-3" href="#">nowości</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="#">noworodek</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="#">dzieci</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">dla mamy wciąży</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">outlet</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
  
