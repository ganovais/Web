<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="AdminLTE Logo" width="200">
    </a>

    <div class="sidebar">
        
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('system/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
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
                    <a href="#" class="nav-link">
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
                    <a href="#" class="nav-link">
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

            </ul>
        </nav>
    </div>
</aside>