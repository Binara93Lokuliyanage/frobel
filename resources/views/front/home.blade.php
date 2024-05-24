@extends('front.layouts.app')

<section class = "header-section">
    <div class = "container header-container">
        <div class  = "logo-wrapper">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class = "menu-wrapper">
            <a href = "#home" class = "menu-item">@lang('auth.menu1')</a>
            <a href = "#about" class = "menu-item">@lang('auth.menu2')</a>
            <a href = "#courses" class = "menu-item">@lang('auth.menu3')</a>
            <a href = "#contact" class = "menu-item">@lang('auth.menu4')</a>
        </div>

        <div class = "header-btn-wrapper">
            <div class="dropdown">
                <button class="dropbtn">
                    <div class="flag-icon">
                        <img src="{{ app()->getLocale() == 'en'
                            ? asset('images/lang-flags/en.svg')
                            : (app()->getLocale() == 'de'
                                ? asset('images/lang-flags/de.svg')
                                : (app()->getLocale() == 'es'
                                    ? asset('images/lang-flags/es.svg')
                                    : (app()->getLocale() == 'ar'
                                        ? asset('images/lang-flags/ar.svg')
                                        : (app()->getLocale() == 'ru'
                                            ? asset('images/lang-flags/ru.svg')
                                            : (app()->getLocale() == 'zh-CN'
                                                ? asset('images/lang-flags/zh-CN.svg')
                                                : asset('images/lang-flags/default.svg')))))) }}"
                            alt="Flag">
                    </div>
                    <span class = "lang-name">
                        {{ app()->getLocale() == 'en'
                            ? 'English'
                            : (app()->getLocale() == 'de'
                                ? 'German'
                                : (app()->getLocale() == 'es'
                                    ? 'Spanish'
                                    : (app()->getLocale() == 'ar'
                                        ? 'Arabic'
                                        : (app()->getLocale() == 'ru'
                                            ? 'Russian'
                                            : (app()->getLocale() == 'zh-CN'
                                                ? 'Chinese'
                                                : 'Language'))))) }}
                    </span>
                </button>
                <div class="dropdown-content">
                    <a href="{{ url('en') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/en.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            English
                        </div>
                    </a>
                    <a href="{{ url('de') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/de.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            German
                        </div>
                    </a>
                    <a href="{{ url('es') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/es.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            Spanish
                        </div>
                    </a>
                    <a href="{{ url('ar') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/ar.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            Arabic
                        </div>
                    </a>
                    <a href="{{ url('ru') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/ru.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            Russian
                        </div>
                    </a>
                    <a href="{{ url('zh-CN') }}" class = "lang-item">
                        <div class = "lang-flag">
                            <img src="{{ asset('images/lang-flags/zh-CN.svg') }}" alt="Logo">
                        </div>
                        <div class = "lang-name">
                            Chinese
                        </div>
                    </a>
                </div>
            </div>


        </div>

        <div class = "mobile-menu-wrapper">
            <div class = "mobile-menu-bar"></div>
            <div class = "mobile-menu-bar"></div>
            <div class = "mobile-menu-bar"></div>
        </div>
    </div>
    </div>
    <div class = "mobile-menu-content-wrapper ">
        <a href = "#home" class = "mobile-menu menu-item h4">@lang('auth.menu1')</a>
            <a href = "#about" class = "mobile-menu menu-item h4">@lang('auth.menu2')</a>
            <a href = "#courses" class = "mobile-menu menu-item h4">@lang('auth.menu3')</a>
            <a href = "#contact" class = "mobile-menu menu-item h4">@lang('auth.menu4')</a>
    </div>
</section>

<section class = "hero-banner-section owl-carousel" id="home">
    <div class = "banner-item">
        <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                @lang('auth.slider-title-1')
            </h1>
            <h4 class="text-white">
                @lang('auth.slider-text-1')
            </h4>
        </div>
    </div>
    <div class = "banner-item">
        <img src="{{ asset('images/hero-2.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                @lang('auth.slider-title-2')
            </h1>
            <h4 class="text-white">
                @lang('auth.slider-text-2')
            </h4>
        </div>
    </div>
    <div class = "banner-item">
        <img src="{{ asset('images/hero-3.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                @lang('auth.slider-title-3')
            </h1>
            <h4 class="text-white">
                @lang('auth.slider-text-3')
            </h4>
        </div>
    </div>
</section>

<div class = "container hero-banner-dots">
</div>


<section class = "main-navigator-section section-padding">
    <div class = "container">
        <a class = "main-navigator__item" href = "#courses">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> @lang('auth.nav-title-1') </h3>
                <p class="text-white"> @lang('auth.nav-text-1') </p>
            </div>
        </a>

        <a class = "main-navigator__item" href = "#staff">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/staff.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> @lang('auth.nav-title-2') </h3>
                <p class="text-white"> @lang('auth.nav-text-2') </p>
            </div>
        </a>

        <a class = "main-navigator__item" href = "#contact">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/contact.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> @lang('auth.nav-title-3') </h3>
                <p class="text-white"> @lang('auth.nav-text-3') </p>
            </div>
        </a>
    </div>
</section>

<section class = "section-with-bg about-us-section" id = "about">
    <div class="container description-wrapper">
        <div class = "description__text-container">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">@lang('auth.about-title')</h2>
                <div class = "underline-bar"></div>
            </div>
            <h3 class = "text-black">
                @lang('auth.about-text-h1')
            </h3>

            <h4 class = "text-black">
                @lang('auth.about-text-h2')
            </h4>

            <p class = "text-black">
                @lang('auth.about-text-1')
            </p>

           

        </div>
        <div class = "description__img-container">
            <img src="{{ asset('images/random-2.png') }}" alt="Logo">
        </div>
    </div>
    <div class = "container special" style="margin-top: 3rem">
        <h4 class = "text-black">
            @lang('auth.about-text-2')
        </h4>
        <div class = "three-col-cards-wrapper">
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    <h4 class="text-white"> @lang('auth.about-text-lan-1') </h4>
                </div>
            </div>
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    <h4 class="text-white"> @lang('auth.about-text-lan-2') </h4>
                </div>
            </div>
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    <h4 class="text-white"> @lang('auth.about-text-lan-3') </h4>
                </div>
            </div>
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    <h4 class="text-white"> @lang('auth.about-text-lan-4') </h4>
                </div>
            </div>
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    <h4 class="text-white"> @lang('auth.about-text-lan-5') </h4>
                </div>
            </div>
            <div class = "main-navigator__item">
                <div class = "main-navigator__item-text-wrapper">
                    
                    <h4 class="text-white"> @lang('auth.about-text-lan-6') </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "bg-light section-padding">
    <div class = "container grid-two-col">
        <div class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> @lang('auth.vision-title') </h3>
                <p class="text-white">@lang('auth.vision-text')</p>
            </div>
        </div>
        <div class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> @lang('auth.mission-title') </h3>
                <p class="text-white">@lang('auth.mission-text') </p>
            </div>
        </div>
    </div>
</section>

<section class = "section-with-bg section-padding" id = "staff">
    <div class = "container ">
        <div class = "grid-two-col">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">@lang('auth.staff-title')</h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                @lang('auth.staff-text')
            </p>
        </div>

        <div class = "three-col-cards-wrapper">
            <div class = "three-col-item bg-light ">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/lecturer.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">@lang('auth.staff-item-1-title')</h4>
                    <p>@lang('auth.staff-item-1-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-light">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/random-3.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">@lang('auth.staff-item-2-title')</h4>
                    <p>@lang('auth.staff-item-2-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-light">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/individual.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">@lang('auth.staff-item-3-title')</h4>
                    <p>@lang('auth.staff-item-3-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-light">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/cultural.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">@lang('auth.staff-item-4-title')</h4>
                    <p>@lang('auth.staff-item-4-text')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "bg-light section-padding" id = "courses">
    <div class = "container ">
        <div class = "grid-two-col">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">
                    @lang('auth.courses-title')
                </h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                @lang('auth.courses-text')
            </p>
        </div>

        <div class = "three-col-cards-wrapper">
            <div class = "three-col-item bg-white">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/one-to-one.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">@lang('auth.course-item-1-title')</h4>
                    <p>@lang('auth.course-item-1-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-white">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/random-2.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">@lang('auth.course-item-2-title')</h4>
                    <p>@lang('auth.course-item-2-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-white">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/intensive.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">@lang('auth.course-item-3-title')</h4>
                    <p>@lang('auth.course-item-3-text')</p>
                </div>
            </div>
            <div class = "three-col-item bg-white">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/company.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">@lang('auth.course-item-4-title')</h4>
                    <p>@lang('auth.course-item-4-text')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "section-padding section-with-bg">
    <div class = "container">
        <div class = "header-with-underline">
            <h2 class = "text-secondary">
                @lang('auth.testimonial-title')
            </h2>
            <div class = "underline-bar"></div>
        </div>
        <div class = "testimonial-container">
            <div class = "testimonial-items-wrapper owl-carousel">
                <div class = "testimonial-item">
                    <img src="{{ asset('images/quotes.png') }}" alt="Logo">
                    <p class = "text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget convallis justo, sit amet fringilla.
                    </p>
                    <h4 class = "text-secondary">
                        Student Name
                    </h4>
                </div>
                <div class = "testimonial-item">
                    <img src="{{ asset('images/quotes.png') }}" alt="Logo">
                    <p class = "text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget convallis justo, sit amet fringilla.
                    </p>
                    <h4 class = "text-secondary">
                        Student Name
                    </h4>
                </div>
                <div class = "testimonial-item">
                    <img src="{{ asset('images/quotes.png') }}" alt="Logo">
                    <p class = "text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget convallis justo, sit amet fringilla.
                    </p>
                    <h4 class = "text-secondary">
                        Student Name
                    </h4>
                </div>
            </div>
            <div class = "testimonial-numbers-wrapper">
                <h1 class = "text-primary" id = "testimonial-id">
                    01
                </h1>
            </div>
        </div>
        <div class = "testimonial-container">
            <div class = "testimonial-dots">
            </div>
            <div class = "testimonial-btn-wrapper">
                <div class = "testimonial-btn-prev">
                </div>
                <div class = "testimonial-btn-next">
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "section-padding bg-light" id = "contact">
    <div class = "container">
        <div class = "grid-two-col">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">
                    @lang('auth.contact-title')
                </h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                @lang('auth.contact-text')
            </p>
        </div>
        <div class = "form-wrapper">
            <form method="POST" action="contactForm" class="margin-default">
                @csrf
    
                <div class="">
                    <div class="grid-two-col">
    
                        <div>
                            
                            <div class="input-with-placeholder">
                                <input type="text" id="first_name" name="first_name" placeholder="@lang('auth.fn-label')"
                                    class="first_name" required="">
                                <div class="placeholder-image" style="background-image: url(images/form/name.svg)">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-with-placeholder">
                                <input type="text" id="last_name" name="last_name" placeholder="@lang('auth.ln-label')"
                                    class="last_name" required="">
                                <div class="placeholder-image" style="background-image: url(images/form/name.svg)">
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="grid-two-col">
    
    
                        <div>
                            <div class="input-with-placeholder">
                                <input type="number" id="contact" name="contact" placeholder="@lang('auth.cn-label')" class="contact"
                                    required="">
                                <div class="placeholder-image"
                                    style="background-image: url(images/form/contact.svg)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="input-with-placeholder">
                                <input type="email" id="email" name="email" placeholder="@lang('auth.email-label')" class="email"
                                    required="">
                                <div class="placeholder-image" style="background-image: url(images/form/email.svg)">
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div>
                        <textarea id="message" name="message" placeholder="@lang('auth.msg-label')"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="owl-next">@lang('auth.frm-btn')</button>
                    </div>
            </form>
        </div>
    </div>
    
</section>

<section class = "footer section-padding">
    <div class = "container">
        <div class = "footer-block">
            <div class = "footer__logo-wrapper">
                <img src="{{ asset('images/logo-white.png') }}" alt="Logo">
            </div>
            <div class = "footer__links-wrapper">
                <a class = "footer-link-item" href = "#home">
                    @lang('auth.menu1')
                </a>
                <a class = "footer-link-item" href = "#about">
                    @lang('auth.menu2')
                </a>
                <a class = "footer-link-item" href = "#courses">
                    @lang('auth.menu3')
                </a>
                <a class = "footer-link-item" href = "#contact">
                    @lang('auth.menu4')
                </a>
            </div>
        </div>
        <div class = "footer-block">
            <div class = "">
            </div>
            <div class = "footer__address-wrapper">
                <div class = "footer-address-item">
                    <p class = "text-white">
                        Address Line 1<br>
                        Address Line 2<br>
                        City 00000 State
                    </p>
                </div>
                <div class = "footer-address-item">
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">info@institut-fröbel.de</a>
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">+52 254 245 7</a>
                </div>
            </div>
        </div>
        <div class = "footer-block social-block">
            <div class = "footer__links-wrapper">
                <a class = "footer-link-item">
                    Privacy Policy
                </a>
                <a class = "footer-link-item">
                    Terms & Conditions
                </a>
            </div>
                <div class = "footer-social-wrapper">
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:info@institut-fröbel.de" class = "text-white">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
        </div>
    </div>
</section>

<section class = "copyrights-section">
    <div class="container">
        <div class = "footer-block">
            <div>
                <i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;Fröbel Institut
            </div>
            <div>
                Designed and Developed by <a href = "https://www.fiverr.com/binaralokuliyan" target = "_blank" ><strong>Binara Lokuliyanage</strong></a>
            </div>
        </div>
    </div>
</section>



{{-- <div class = "container">
    <h1>
        @lang('auth.title')
    </h1>
</div> --}}
