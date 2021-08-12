<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="footer-list-content">
                        <h4 class="footer-list-name">{{ __('index.visitors') }}</h4>
                        <ul class="footer-list">
                            <li class="footer-list__item"><a href="/">{{ __('index.mainPage') }}</a></li>
                            <li class="footer-list__item"><a href="{{ route('about.page') }}">{{ __('index.about') }}</a></li>
                            <li class="footer-list__item"><a href="{{ route('price') }}">{{ __('index.analysisPrice') }}</a></li>
                            <li class="footer-list__item"><a href="{{ route('news.page') }}" >{{ __('index.news') }}</a></li>
                            <li class="footer-list__item"><a href="{{ route('contact') }}">{{ __('index.contacts') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-list-content">
                        <h4 class="footer-list-name">{{ __('index.branches') }}</h4>
                        <ul class="footer-list">
                            <li class="footer-list__item"><a href="/contact#tab-1">{{ __('index.yerevan') }}</a></li>
                            <li class="footer-list__item"><a href="/contact#tab-4">{{ __('index.gyumri') }}</a></li>
                            <li class="footer-list__item"><a href="/contact#tab-3">{{ __('index.vanadzor') }}</a></li>
                            <li class="footer-list__item"><a href="/contact#tab-6">{{ __('index.stepanakert') }}</a></li>
                            <li class="footer-list__item"><a href="/contact#tab-5">{{ __('index.sevan') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 col-to-12">
                    <div class="footer-list-content">
                        <h4 class="footer-list-name">{{ __('index.headquarters') }}</h4>
                        <ul class="footer-list">
                            <li class="footer-list__item"><img src="{{ asset('davlab/img/icons/footer-icons/pin-light.svg') }}" alt="">{!! __('index.footer_title') !!}</li>
                            <li class="footer-list__item"><img src="{{ asset('davlab/img/icons/footer-icons/clock.svg') }}" alt=""><p> <span>{{ __('index.weekdays') }} 09:00-16:00</span> <span>{{ __('index.saturday') }} 09:00-12:00</span></p></li>
                            <li class="footer-list__item phone-numbers-list-item"><img src="{{ asset('davlab/img/icons/footer-icons/phone.svg') }}" alt=""> <p><a href="tel:+37411200303">+374-11-200303 ,</a><a href="tel:+37499369592"> +374-99-369592,</a> <br> <a href="tel:+37411200333">+374-11-200333</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-list-content">
                        <div class="footer-button-and-socials">
                            <div class="footer-button">
                                <a href="{{ route('covid') }}" class="footer-btn">Covid 19 <img src="{{ asset('davlab/img/icons/footer-icons/green-arrow.svg') }}" alt=""></a>
                            </div>

                            <div class="footer-socials">
                                <p class="in-mobile-25">{{ __('index.follow') }}</p>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/DavidyancLaboratorianer/" target="_blank" aria-label="facebook"><img src="{{ asset('davlab/img/icons/footer-icons/facebook.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="footer-socials">
                                <div class="to-mail">
                                    <a href="mailto:davidyants.labs@gmail.com" aria-label="mailto:davidyants.labs@gmail.com"><img src="{{ asset('davlab/img/icons/mail.svg') }}" alt="">  davidyants.labs@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row footer-bottom-row">
                <p>© Davidyants laboratories, All rights reserved</p>
                <p>Designed & Developed by <a target="_blank" href="https://twelve.company/">Twelve company</a></p>
            </div>
        </div>
    </div>
</footer>
