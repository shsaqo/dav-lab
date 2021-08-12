<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('davlab/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href=" {{ asset('davlab/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('davlab/libs/magnific-pupup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('davlab/css/main.css?v=1.0') }}">
    <meta property="og:image" content="http://ia.media-imdb.com/rock.jpg"/>
    <title>davlab.am</title>
</head>
<body>

@yield('content')

<!-- Modals -->
<div data-target='modal1' class="modal">
    <div class="modal-content">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.7169200890544!2d44.48659701570205!3d40.215359475785164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd57fd9e977b%3A0x71f6635e24772f89!2sDavidyants%20Laboratories!5e0!3m2!1sen!2s!4v1615870692295!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal2" class="modal">
    <div class="modal-content map">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.6804827802027!2d44.488449829248495!3d40.215248022811934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDEyJzU0LjkiTiA0NMKwMjknMjAuNCJF!5e0!3m2!1sen!2s!4v1620053094828!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal3" class="modal">
    <div class="modal-content map">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d755.0175278384595!2d44.48916124707876!3d40.80445308601249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ4JzE2LjMiTiA0NMKwMjknMjIuNyJF!5e0!3m2!1sen!2s!4v1619537882217!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal4" class="modal">
    <div class="modal-content">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1510.004063516578!2d43.8473155!3d40.8058152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041fbd95e9072db%3A0x5ce96a04a8f02f6a!2sRepin%20Street%2C%20Gyumri%2C%20Armenia!5e0!3m2!1sen!2s!4v1619525302604!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal5" class="modal">
    <div class="modal-content">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.611164087175!2d44.95460695143823!3d40.55017897924842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDMzJzAwLjYiTiA0NMKwNTcnMjQuNSJF!5e0!3m2!1sru!2s!4v1619534918724!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal6" class="modal">
    <div class="modal-content">
        <button class="modal-closer"><img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt=""></button>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766.1894119933112!2d46.74950959922243!3d39.81242772427191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDQ4JzQ0LjQiTiA0NsKwNDQnNTkuMSJF!5e0!3m2!1sen!2s!4v1619537596152!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div data-target="modal-call-modal" class="modal call-modal">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title-container">
                <h2 class="modal-title">{{ __('index.homeCallingService') }}</h2>
            </div>
            <button class="modal-closer">
                <img src="{{ asset('davlab/img/icons/closer-icon.svg') }}" alt="" />
            </button>
        </div>
        <div class="modal-body">
            <div class="modal-form-container">
                <form id="home-call-form" action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="modal-label">{{ __('index.fillPhone') }}</label>
                                <div class="modal-input-parent">
                                    <input type="tel" name="modal_phone">
                                </div>
                                <div class="or-call-number">
                                    <p>{{ __('index.orCall') }} <a href="tel:+37411200303">+374 11 200 303</a></p>
                                </div>
                            </div>
                            <div class="col-12 modal-send-btn">
                                <button type="submit">{{ __('index.send') }}</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modals end -->

<script src="{{ asset('davlab/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('davlab/libs/magnific-pupup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('davlab/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('davlab/libs/dynamic-adaptive/dinamyc-adapt.js') }}"></script>
<script src="{{ asset('davlab/libs/lottie-player/lottie-player.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="{{ asset('davlab/js/validation.js') }}"></script>
<script src="{{ asset('davlab/js/main.js') }}"></script>
<script src="{{ asset('davlab/js/analyses-page/main.js') }}"></script>
</body>
</html>
