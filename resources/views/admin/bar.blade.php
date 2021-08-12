<div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
        </div>
        <div class="scrollbar-sideba d-flex flex-column justify-content-between">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <!-- <li class="app-sidebar__heading">Menu</li> -->
                    <li class="mm-active">
                        <!-- <a href="#">
                            <i class="metismenu-icon pe-7s-rocket"></i>Էջ
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a> -->
                        <ul>
                            <li>
                                <a href="{{ route('home-slider.index') }}"
                                @if (Route::current()->getName() == 'home-slider.index' || Route::current()->getName() == 'home-slider.create' || Route::current()->getName() == 'home-slider.edit')
                                class="mm-active"
                                @endif>
                                    <i class="metismenu-icon"></i>Գլխավոր
                                </a>

                                <a href="{{ route('news.index') }}"
                                    @if (Route::current()->getName() == 'news.index' || Route::current()->getName() == 'news.create' || Route::current()->getName() == 'news.edit')
                                    class="mm-active"
                                    @endif>
                                    <i class="metismenu-icon"></i>Նորություններ
                                </a>

                                <a href="{{ route('about.index') }}" @if (Route::current()->getName() == 'about.index' || Route::current()->getName() == 'about.create' || Route::current()->getName() == 'about.edit')
                                class="mm-active"
                                @endif>
                                    <i class="metismenu-icon"></i>Մեր մասին
                                </a>

                                <a href="{{ route('analysis-category.index') }}"
                                    @if (Route::current()->getName() == 'analysis-category.index' || Route::current()->getName() == 'analysis-category.edit'
                                    || Route::current()->getName() == 'element.create' || Route::current()->getName() == 'element.edit' || Route::current()->getName() == 'element.index')
                                    class="mm-active"
                                    @endif>
                                    <i class="metismenu-icon"></i>Անալիզ և գնացուցակ
                                </a>

                                <a href="{{ route('direction.index') }}"
                                   @if (Route::current()->getName() == 'direction.index' || Route::current()->getName() == 'direction.edit')
                                   class="mm-active"
                                    @endif>
                                    <i class="metismenu-icon"></i>Հյուսվածք. ուղեգիր
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="mm-active">
                        <ul>
                            <li>
                                <a href="{{ route('support.index') }}"
                                @if (Route::current()->getName() == 'support.index')
                                class="mm-active"
                                @endif>
                                Աջակցություն
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
