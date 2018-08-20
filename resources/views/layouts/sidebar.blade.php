<aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile sidebar">
    <p class="menu-label sidebar-label is-hidden-touch">{{ __('messages.menu')  }}</p>
    <ul class="menu-list">
        <li>
            <a href="{{ url('/')  }}" class="">
                <span class="icon"><i class="fa fa-home"></i></span> {{ __('messages.home')  }}
            </a>
        </li>
    </ul>
    <p class="menu-label sidebar-label is-hidden-touch">{{ __('messages.customers')  }}</p>
    <ul class="menu-list">
        <li>
            <a href="{{ url('customers')  }}">
                <span class="icon"><i class="fas fa-users"></i></span> {{ __('messages.customers')  }}
            </a>
        </li>
    </ul>
    <p class="menu-label sidebar-label is-hidden-touch">{{ __('messages.invoices')  }}</p>
    <ul class="menu-list">
        <li>
            <a href="{{ url('sales')  }}" class="">
                <span class="icon"><i class="fas fa-dollar-sign"></i></span> {{ __('messages.sales')  }}
            </a>
            <a href="{{ url('orders')  }}" class="">
                <span class="icon"><i class="fas fa-shopping-cart"></i></span> {{ __('messages.orders')  }}
            </a>
        </li>
    </ul>
    <p class="menu-label sidebar-label is-hidden-touch">{{ __('messages.profile')  }}</p>
    <ul class="menu-list">
        <li>
            <a href="{{ url('profile')  }}" class="">
                <span class="icon"><i class="fas fa-user"></i></span> {{ __('messages.profile')  }}
            </a>
        </li>
        <li>
            <a href="{{ url('logout')  }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="">
                <span class="icon"><i class="fas fa-sign-out-alt"></i></span> {{ __('messages.logout')  }}
            </a>
        </li>
    </ul>
</aside>
