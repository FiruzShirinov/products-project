@section('topbar')
<nav class="sb-topnav navbar navbar-expand navbar-light bg-white py-0">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-0 fs-6 word-break" href="{{ route('products.index') }}">
        <div class="row">
            <div class="col pe-0">
                <img src="{{ asset('img/logo.png') }}" alt="Логотип" height="100px">
            </div>
            <div class="col-4 p-0 my-auto ms-n5 me-2">
                <p class="m-0">Enterprise</p>
                <p class="m-0">Resource</p>
                <p class="m-0">Planning</p>
            </div>
        </div>
    </a>
    @if (request()->is('products'))
    <div class="ms-4 border-bottom-danger-custom text-danger-custom border-5 h-100 d-flex align-items-center">
        <h4 class="m-0">Продукты</h4>
    </div>
    @endif
    <!-- Sidebar Toggle-->
    {{-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> --}}
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
@stop
