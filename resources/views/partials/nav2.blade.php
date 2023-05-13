
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="navbar">
    <a class="navlogo">SweetStar</a>

    <div class="">
    <span onClick="location.href='/home';" class="navlink selectedlink">Inicio</span>
      <span onClick="location.href='/Articulo/Lista';"  class="navlink selectedlink">Productos</span>
      <span  onClick="location.href='/Proveedor/Lista';" class="navlink selectedlink">Provedores</span>
      <span onClick="location.href='/Cliente/Lista';" class="navlink selectedlink">Clientes</span>
      <span onClick="location.href='/Empleado/Lista';" class="navlink selectedlink">Empleados</span>
      <span onClick="location.href='/Venta/Lista';" class="navlink selectedlink">Venta</span>

    </div>

<li class="nav-item dropdown">
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesion') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</li>

  </div>


  <style>
    .landingpage .navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
  width: 100%;
}

.navbar .hamburgerlogowrap {
  display: flex;
  align-items: center;
}
.navbar .hamburger {
  display: none;
  color: #D7D7D7;
  background-color: #1F1D2B;
  border: none;
  margin-right: 10px;
}
.navbar .createbtn {
  cursor: pointer;
  background-color: #4B0082;
  border: none;
  width: 126px;
  height: 45px;
  color: #FFFFFF;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
}
.navbar .createbtn.selectedbtn {
  border: 1px solid #D7D7D7;
  border-radius: 10px;
}
.navbar .navlogo {
  height: 100%;
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
}
.navbar .navlink {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #0B1E3F;
}
.navbar .navlink.selectedlink {
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  border-bottom: 1.5px solid #9B51E0;
}
.navbar .navlink:not(:last-child) {
  margin-right: 32px;
}

</style>