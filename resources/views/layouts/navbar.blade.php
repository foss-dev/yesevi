<nav class="navbar is-info">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" alt="" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="https://bulma.io/">
                {{ __('messages.home') }}
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    {{ __('messages.customers') }}
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="{{ url('customers') }}">
                        {{ __('messages.customers') }}
                    </a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    {{ __('messages.invoices') }}
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="{{ url('sales') }}">
                        {{ __('messages.sales') }}
                    </a>
                    <a class="navbar-item" href="{{ url('orders') }}">
                        {{ __('messages.orders') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                @guest
                    <a href="{{ url('login')  }}" class="navbar-item">Login</a>
                @endguest
                @auth
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#">
                                {{ __('messages.profile') }}
                            </a>
                            <div class="navbar-dropdown is-boxed">
                                <a href="{{ url('profile') }}" class="navbar-item">{{ __('messages.profile') }}</a>
                                <a href="{{ url('notes') }}" class="navbar-item">{{ __('messages.notes') }}</a>
                                <a href="{{ url('logout')  }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="navbar-item">{{ __('messages.logout')  }}</a>
                            </div>
                        </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
