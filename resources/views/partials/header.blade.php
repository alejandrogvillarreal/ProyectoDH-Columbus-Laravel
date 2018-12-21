<!-- ESTE ES EL MENU -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">
          <img src="/images/logo.png" class="rounded float-left" alt="logo" width="185" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/categories" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/categories">Buzos</a>
                    <a class="dropdown-item" href="/categories">Remeras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/categories">Jeans</a>
                  </div>
                </li> -->
                <li>
                  <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categorias
                    </a>
          		      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item link-german" href="/product">Todos</a>
                      <!-- CATEGORIA DE HOMBRES -->
                      <li class="dropdown-submenu">
                        <a class="dropdown-item link-german" href="/product">Hombres</a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item link-german" href="/categories/6">Buzos</a>
                            <a class="dropdown-item link-german" href="/categories/3">Remeras</a>
                            <a class="dropdown-item link-german" href="/categories/2">Camisas</a>
                            <a class="dropdown-item link-german" href="/categories/7">Pantalones</a>
                            <a class="dropdown-item link-german" href="/categories/4">Zapatillas</a>
                          </li>
                        </ul>
                      </li>
                      <!-- CATEGORIA DE MUJERES -->
                      <li class="dropdown-submenu">
                        <a class="dropdown-item link-german" href="/product">Mujeres</a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item link-german" href="/categories/1">Sandalias</a>
                            <a class="dropdown-item link-german" href="/categories/8">Blusas</a>
                            <a class="dropdown-item link-german" href="/categories/7">Pantalones</a>
                            <a class="dropdown-item link-german" href="/categories/2">Camisas</a>
                            <a class="dropdown-item link-german" href="/categories/9">Vestidos</a>
                            <a class="dropdown-item link-german" href="/categories/4">Zapatillas</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
            </ul>

            {{-- <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <!--<i class="fa fa-search"></i>-->Buscar
                        </button>
                    </div>
                </div>
            </form> --}}
            <ul class="navbar-nav m-auto">
            <!-- SI EL USUARIO ESTA LOGUEADO LE MUESTRO -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown my-auto">
                  <ul class="list-inline d-flex">
                    {{-- <li class="list-inline-item"><img src="images/avatars/" alt="" class="d-inline imagen-redonda rounded-circle"></li> --}}
                    <li class="list-inline-item">
                      <a class="nav-link dropdown-toggle" href="/profile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Mi cuenta
                    </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item link-german" href="/profile">Perfil de {{ Auth::user()->name }}</a>
                        <div class="dropdown-divider"></div>
                        {{-- <a class="dropdown-item link-german" href="#">Compras </a> --}}
                        {{-- <div class="dropdown-divider"></div>  --}}
                        <a class="dropdown-item link-german" href="/product/create">Subir producto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item link-german" href="/product/edit">Mis productos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item link-german" href="/logout"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                        >
                        Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- <li class="nav-item my-auto" style="margin-right: -60px;"> -->
                {{-- <li class="nav-item my-auto">
                  <!-- <a class="btn btn-success btn-sm" href="carrito.php"> -->
                  <a class="btn btn-sm" href="/cart"  style="background-color:#ABB2B9;">
                      <!--<i class="fa fa-shopping-cart"></i>--> <!-- Carrito --><img src="/images/carrito.png">
                      <span class="badge badge-light">3</span>
                  </a>
                </li> --}}
                <!-- SI EL USUARIO NO ESTA LOGUEADO LE MUESTRO -->
                <!-- LA SEPARACION DEL MENU ESTA HECHA CON ml-5 -->
                {{-- <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Registro</a>
                </li> --}}
                <!-- TERMINA SI EL USUARIO NO ESTA LOGUEADO LE MUESTRO -->
            @endguest

          </ul>
        </div>
    </div>
</nav>


  <!-- ACA TERMINA EL MENU -->
