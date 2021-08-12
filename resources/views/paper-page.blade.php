@extends('layouts.davidyants-layouts.main')
@section('content')

<div class="page paper-page" id="paper_page">
    <header class="header paper-header">
        <div class="paper-container">
            <div class="paper-logo-title">
                <a href="/" class="header-logo" aria-label="Davidyants Laboratories"
                ><img src="{{ asset('davlab/img/logo.svg') }}" alt=""
                    /></a>
                <h1 class="paper-header-title">Հյուսվածքաբանության ուղեգիր</h1>
            </div>
        </div>
    </header>
    <main class="mian" id="main">
        <div class="bread-crumb-section">
            <div class="paper-container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">Գլխավոր էջ</a></li>
                            <li><a href="#">Հյուսվածքաբանության ուղեգիր</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="paper-form-section">
            <div class="paper-container">
                <div class="row">
                    <div class="col-12">
                        <form id="analyses-form">
                            <div class="row">
                                <div class="paper-col-8 paper-col-to-two-part">
                                    <label for="" class="label"
                                    >Բուժ. հաստատության անվանում *
                                        <span>Medical institution</span></label
                                    >
                                    <select name="med_fac_name" id="hospital-name-select">
                                        <option disabled selected hidden>Ընտրված չէ</option>

                                        @if(isset($items) && count($items))
                                            @foreach($items as $item)
                                            <option id data-set="{{$item->logo}}" value="{{ $item['name_'.$locale] }}">{{ $item['name_'.$locale] }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="paper-col-to-two-part">
                                    <label for="department"
                                    >Բաժանմունք
                                        <span>Department</span>
                                    </label>
                                    <input type="text" name="department" id="department" />
                                </div>
                                <div class="paper-col-4">
                                    <label for="date_input"
                                    >Ուղեգրման ամսաթիվ <span>(օր/ամիս/տարի)</span>*
                                        <span>Date of dispatch* (day/month/year)</span>
                                    </label>
                                    <div class="row">
                                        <div class="paper-col-60">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash;"
                                                name="dispatch_day"
                                                id="dispatch_day"
                                                maxlength="2"
                                            />
                                        </div>
                                        <div class="paper-col-60">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash; &mdash; &mdash;"
                                                name="dispatch_month"
                                                id="dispatch_month"
                                                maxlength="2"
                                            />
                                        </div>
                                        <div class="paper-col-150">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash; &mdash; &mdash;"
                                                name="dispatch_year"
                                                id="dispatch_year"
                                                maxlength="4"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="paper-col-4 paper-col-200">
                                    <label for="client_name"
                                    >Պացիենտի անուն *
                                        <span>Patient's name</span>
                                    </label>
                                    <input type="text" name="client_name" id="client_name" />
                                </div>
                                <div class="paper-col-4 paper-col-290">
                                    <label for="surname"
                                    >Ազգանուն*
                                        <span>Last name</span>
                                    </label>
                                    <input type="text" name="surname" id="surname" />
                                </div>
                                <div class="paper-col-4 paper-col-200">
                                    <label for="father_name"
                                    >Հայրանուն
                                        <span>Father’s name </span>
                                    </label>
                                    <input type="text" name="" id="father_name" />
                                </div>
                                <div class="paper-col-4">
                                    <label for="age"
                                    >Ծննդ․ ամսաթիվ*<span>(օր/ամիս/տարի)</span>
                                        <span
                                        >Date of birth* <small>(day/month/year)</small></span
                                        >
                                    </label>
                                    <div class="row">
                                        <div class="paper-col-60">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash; &mdash; &mdash;"
                                                name="client_day"
                                                id="client-day"
                                                maxlength="2"
                                            />
                                        </div>
                                        <div class="paper-col-60">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash; &mdash; &mdash;"
                                                name="client_month"
                                                id="client-month"
                                                maxlength="2"
                                            />
                                        </div>
                                        <div class="paper-col-150">
                                            <input
                                                type="text"
                                                placeholder="&mdash; &mdash; &mdash; &mdash;"
                                                name="client_year"
                                                id="client-year"
                                                maxlength="4"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="paper-col-12">
                                    <label for="clinic_diagnose"
                                    >Կլինիկական ախտորոշում *
                                        <span>Clinical diagnosis</span>
                                    </label>
                                    <textarea
                                        type="text"
                                        name="clinic_diagnose"
                                        id="clinic_diagnose"
                                    ></textarea>
                                </div>
                                <div class="paper-col-12">
                                    <label for="operation"
                                    >Կատարված վիրահատություն / միջամտություն
                                        <span>Performed surgery/ intervention</span>
                                    </label>
                                    <textarea type="text" name="" id="operation"></textarea>
                                </div>
                                <div id="desc_container" class="paper-col-12">
                                    <label for="operation_descr"
                                    >Հետազոտվող նյութի բնութագիր / դրոշմագրում /
                                        նկարագրություն *
                                        <span
                                        >Material description / stamping /
                          exposition</span
                                        >
                                    </label>
                                    <div class="canAddInput">
                                        <input type="text" name="operation_descr" id="operation_descr" />
                                        <button class="addInput" id="addInput">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20.851"
                                                height="20.85"
                                                viewBox="0 0 20.851 20.85"
                                            >
                                                <path
                                                    d="M175.673,172.545a2.212,2.212,0,1,1-3.129,3.129l-6.648-6.649-6.648,6.649a2.212,2.212,0,0,1-3.129-3.129l6.648-6.648-6.648-6.648a2.212,2.212,0,1,1,3.129-3.129l6.648,6.648,6.648-6.648a2.212,2.212,0,1,1,3.129,3.129l-6.648,6.648Zm0,0"
                                                    transform="translate(-155.471 -155.471)"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="paper-col-12">
                                    <label for="doctors"
                                    >Ուղեգրող բժիշկ/բժիշկներ *
                                        <span>Referral doctor / doctors </span>
                                    </label>
                                    <input type="text" name="doctors" id="doctors" />
                                </div>
                                <div class="paper-col-6">
                                    <label for="doctors_phone"
                                    >Ուղեգրող բժշկի հեռ․
                                        <span>Referral doctor’s tel</span>
                                    </label>
                                    <input
                                        type="tel"
                                        name="doctors_phone"
                                        id="doctors_phone"
                                    />
                                </div>
                                <div class="paper-col-6">
                                    <label for="doctors_email"
                                    >Ուղեգրող բժշկի էլ․փոստի հասցե
                                        <span>Referral doctor’s e-mail</span>
                                    </label>
                                    <input name="doctors_email" id="doctors_email" />
                                </div>

                                <div class="paper-col-12">
                                    <label for="spec_characters"
                                    >Հատուկ նմուշներ
                                        <span>Special notes</span>
                                    </label>
                                    <textarea
                                        type="text"
                                        name="spec_characters"
                                        id="spec_characters"
                                    ></textarea>
                                </div>
                                <div class="paper-col-6 form-reset-col">
                                    <label for="form_reset"
                                    ><img src="{{ asset('davlab/img/icons/reset-icon.svg') }}" alt="" /> Մաքրել
                                        բոլոր դաշտերը</label
                                    >
                                    <input
                                        class="form-reset"
                                        id="form_reset"
                                        type="reset"
                                        value=""
                                    />
                                </div>
                                <div class="paper-col-6">
                                    <div class="form-actions">
                                        <a
                                            class="download_btn"
                                            aria-label="download file"
                                        ><img src="{{ asset('davlab/img/icons/download-icon.svg') }}" alt=""
                                            /></a>
                                        <a id="preView" href="#" class="preview_btn" aria-label="view file"
                                        ><img src="{{ asset('davlab/img/icons/eye-icon.svg') }}" alt=""
                                            /></a>
                                        <a id="print" href="#"
                                        ><img
                                                src="{{ asset('davlab/img/icons/print-icon.svg') }}"
                                                alt=""
                                            />Տպել</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="page print-page" style="display: none" id="printable-document">
      <div id="print-content" class="print-container">
          <div class="local-hostpital-logo" style="position: absolute; top: 0; right: 40px;">
              <img src="{{asset('davlab/img/print-absoulte-logo.svg') }}" alt="">
          </div>
        <header class="print-header" style="position: relative; display: flex; margin-bottom: 40px;">
          <div class="print-hospital-info" style="text-align: center;">
            <div class="print-hostpital-logo" style="width: 204px; margin: 0 auto;">
              <img style="max-width: 100%; text-align: center;" id="logo-image" src="{{asset('davlab/img/logo.svg')}}" alt="" />
            </div>
            <div class="print-hoospital-name" style="padding: 7px 0;">
              <h1 id="hospital-name" style="font-family: inherit; font-size: 1.6rem; font-weight: 700; line-height: 30px;">«Նաիրի» բժշկական կենտրոն</h1>
            </div>
            <div class="print-hospital-descr" id="clinic_department_container">
              <p id="clinic_department-name" style="text-align: left;">Հյուսվածքաբանության ուղեգիր</p>
            </div>
          </div>
        </header>

        <main class="main">
            <section style="margin-bottom:18px;">
            <div class="print-hospital-descr descr-center">
              <p class="text-center" style="font-weight: 700;">Հյուսվածքաբանության ուղեգիր</p>
            </div>
            </section>
          <section class="pacient-name-and-date" style="margin-bottom:18px; display: flex; justify-content: space-between;">
            <div class="paceint_name-content" style="max-width: 50%; flex: 0 0 50%;">
              <h2 class="pacient-name__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Պացիենտի ԱԱՀ</h2>
              <p class="pacient__name" id="pacient-name" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">Սուսաննա Կոտոշյան</p>
            </div>
            <div class="paceint_birthday-content" style="max-width: 50%; flex: 0 0 50%; text-align: right;">
              <h2 class="pacient_birthday__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Ծննդյան ամսաթիվ</h2>
              <p class="pacient_birthday" id="pacient-birth-data" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">14․11․1990</p>
            </div>
          </section>
          <section class="clinic-diagnose" id="clinic-diagnose" style="margin-bottom:18px;">
            <div class="clinic-diagnose">
              <h2 class="clinic-diagnose__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">
                Կլինիկական ախտորոշում
              </h2>
              <p class="diagnose__text" id="diagnose" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">
                Հիվանդության ախտորոշումը կատարվում է անամնեզի և օբյեկտիվ
                քննության (զննում, բախում, շոշափում, ունկնդրում) տվյալների հիման
                վրա։ Նյարդային համակարգի և զգայարանների քննության ժամանակ
                գործադրում են ռեֆլեքսների հետազոտման հատուկ մեթոդներ, որոշվում է
                զգայության տարբեր տեսակների սրությունը, չափվում մարմնի
                ջերմությունն ու արյան ճնշումը:
              </p>
            </div>
          </section>
          <section class="clinic-diagnose" id="clinic_surgery_container" style="margin-bottom:18px;">
            <div class="clinic-diagnose">
              <h2 class="clinic-diagnose__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">
                Կատարված վիրահատություն / միջամտություն
              </h2>
              <p class="diagnose__text" id="clinic_surgery" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae fuga neque porro similique vero voluptate.
              </p>
            </div>
          </section>
          <section class="research-subject" style="margin-bottom:18px;">
            <div class="research-subject-content">
              <h2 class="research-subject__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">
                Հետազոտվող նյութի բնութագիր / դրոշմագրում / նկարագրություն
              </h2>
              <ol class="research-subject__list" style="padding: 0; list-style-position: inside; list-style-type: decimal;">
                <li id="research-subject-element" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">Հետազոտվող նյութի բնութագիր 1</li>
              </ol>
              <ol class="research-subject__list" id="added_list" start="2" style="padding: 0; list-style-position: inside; list-style-type: decimal;">
              </ol>
            </div>
          </section>
          <section class="doctors-name-section" style="margin-bottom:18px;">
            <div class="doctors_name-content">
              <h2 class="doctors-name__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Ուղեգրող բժիշկ/բժիշկներ</h2>
              <p class="doctors__name" id="doctor" style="font-size: 1.6rem; font-weight: 400; line-height: 21px; display: flex; flex-wrap: wrap;">Վարդուհի Ադամի Ներսիսյան</p>
            </div>
          </section>
          <section class="special-samples" style="margin-bottom:18px;">
            <div class="special-samples-content" id="special_samples_container">
              <h2 class="special-samplese__title title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Հատուկ նմուշներ</h2>
              <p class="special-samples" id="spec_char" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">
                Հիվանդության ախտորոշումը կատարվում է անամնեզի և օբյեկտիվ
                քննության (զննում, բախում, շոշափում, ունկնդրում) տվյալների հիման
                վրա։
              </p>
            </div>
          </section>
          <section class="pacient-name-and-date" style="margin-bottom:18px; display: flex; justify-content: space-between;">
            <div class="paceint_name-content" style="max-width: 50%; flex: 0 0 50%;" id="doctors_phone_container">
              <h2 class="title doctors-signature" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Ուղեգրող բժշկի հեռ․</h2>
              <p id="phone_of_doctor" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">374 00 00 00 00 </p>
            </div>
            <div class="paceint_birthday-content" style="max-width: 50%; flex: 0 0 50%; text-align: right;" id="doctors_email_container">
              <h2
                      class="pacient_birthday__title title doctors-signature__title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;"
              >
                Ուղեգրող բժշկի էլ․փոստի հասցե
              </h2>
              <p class="doctors-signature" id="email_of_doctor" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">
                doctor@gmail.com
              </p>
            </div>
          </section>
          <section class="pacient-name-and-date" style="margin-bottom:18px; display: flex; justify-content: space-between;">
            <div class="paceint_name-content" style="max-width: 50%; flex: 0 0 50%;">
              <h2 class="title doctors-signature" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;">Ուղեգրման ամսաթիվ</h2>
              <p id="date_of_dispatch" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;">14․11․2020 թվ․</p>
            </div>
            <div class="paceint_birthday-content" style="max-width: 50%; flex: 0 0 50%; text-align: right;">
              <h2
                class="pacient_birthday__title title doctors-signature__title" style="font-size: 1.6rem; line-height: 24px; font-weight: 700; margin-bottom: 7px;"
              >
              Ուղեգրող բժշկի ստորագրություն
              </h2>
              <p class="doctors-signature" style="font-size: 1.6rem; font-weight: 400; line-height: 21px;"></p>
            </div>
          </section>
        </main>
      </div>
      <div class="print-container print-buttons-container">
        <div class="to-back-btn">
          <a href="#" class="print-go-back" id="return_button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.333"
              height="16.992"
              viewBox="0 0 20.333 16.992"
            >
              <g transform="translate(116.733 -101.093) rotate(90)">
                <g transform="translate(101.092 96.4)">
                  <g transform="translate(0)">
                    <path
                      d="M178.068,107.284a1.348,1.348,0,0,0-1.907,0l-4.846,4.846V97.748a1.348,1.348,0,0,0-2.7,0V112.13l-4.846-4.846a1.348,1.348,0,0,0-1.907,1.907l7.148,7.148a1.348,1.348,0,0,0,1.907,0l7.148-7.148A1.348,1.348,0,0,0,178.068,107.284Z"
                      transform="translate(-161.471 -96.4)"
                      fill="#212121"
                    />
                  </g>
                </g>
              </g>
            </svg>Վերադառնալ հետ
          </a>
        </div>
        <div class="save-and-prints-btns form-actions">
          <a href="#" class="download_btn" aria-label="download file"
            ><img src="{{asset('davlab/img/icons/download-icon.svg')}}" alt=""
          /></a>
          <a href="#" class="print_btn" id="print_viewed_doc"
            ><img src="{{asset('davlab/img/icons/print-icon.svg')}}" alt="" />Տպել</a
          >
        </div>
      </div>
    </div>
@endsection
