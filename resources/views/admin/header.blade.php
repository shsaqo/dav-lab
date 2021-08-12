<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <!-- <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div> -->
    </div>
    <div class="right ml-auto">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <img src="{{asset('icons/log-out.svg')}}" alt="">
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
