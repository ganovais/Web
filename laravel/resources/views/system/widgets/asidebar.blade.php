<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('sistema') }}" class="brand-link">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="AdminLTE Logo" width="200">
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('system/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
                <a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{ url('/sistema') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('/sistema/clients') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        Clientes
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('sistema/products') }}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        Produtos
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('sistema/payment-methods') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        Métodos de pagamento
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('sistema/banners') }}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        Banners
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        Pedidos
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('sistema/categories') }}" class="nav-link">
                        <i class="nav-icon fas fa-dice-d6"></i>
                        Categorias
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('sistema/status') }}" class="nav-link">
                        <i class="nav-icon fas fa-dice-one"></i>
                        Status
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a target="_blank" href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        SITE
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>