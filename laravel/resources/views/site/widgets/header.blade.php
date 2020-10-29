<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-theme">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img alt="logo" title="logo" src="{{ asset('assets/logo/logo.png') }}" width="200" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto"></ul>
                    <span class="navbar-text">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('produtos') }}">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contato') }}">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.html">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wishlist.html">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
            </nav>
        </header>