@extends('front.layouts.app')

<section class = "header-section">
    <div class = "container header-container">
        <div class  = "logo-wrapper">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class = "menu-wrapper">
            <a href = "#" class = "menu-item">Home</a>
            <a href = "#" class = "menu-item">About</a>
            <a href = "#" class = "menu-item">Courses</a>
            <a href = "#" class = "menu-item">Contact</a>
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
        </div>
    </div>
    </div>
</section>

<section class = "hero-banner-section owl-carousel">
    <div class = "banner-item">
        <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                Learn<br> Translate Excel
            </h1>
            <h4 class="text-white">
                Empower Your German Language Journey with FRÖBEL
            </h4>
        </div>
    </div>
    <div class = "banner-item">
        <img src="{{ asset('images/hero-2.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                Learn<br> Translate Excel
            </h1>
            <h4 class="text-white">
                Empower Your German Language Journey with FRÖBEL
            </h4>
        </div>
    </div>
    <div class = "banner-item">
        <img src="{{ asset('images/hero-3.png') }}" alt="Logo">
        <div class = "banner-overlay"></div>
        <div class = "container">
            <h1 class="text-white">
                Learn<br> Translate Excel
            </h1>
            <h4 class="text-white">
                Empower Your German Language Journey with FRÖBEL
            </h4>
        </div>
    </div>
</section>

<div class = "container hero-banner-dots">
</div>


<section class = "main-navigator-section section-padding">
    <div class = "container">
        <a class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> Courses </h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo
                    eget consectetur commodo, velit libero </p>
            </div>
        </a>

        <a class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> Courses </h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo
                    eget consectetur commodo, velit libero </p>
            </div>
        </a>

        <a class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> Courses </h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo
                    eget consectetur commodo, velit libero </p>
            </div>
        </a>
    </div>
</section>

<section class = "section-with-bg about-us-section">
    <div class="container description-wrapper">
        <div class = "description__text-container">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">About Us</h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio
                sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id
                sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget
                convallis justo, sit amet fringilla.
            </p>

        </div>
        <div class = "description__img-container">
            <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
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
                <h3 class="text-white"> Vision </h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo
                    eget consectetur commodo, velit libero </p>
            </div>
        </div>
        <div class = "main-navigator__item">
            <div class = "main-navigator__item-icon-wrapper">
                <img src="{{ asset('images/icons/courses.svg') }}" alt="Logo">
            </div>
            <div class = "main-navigator__item-text-wrapper">
                <h3 class="text-white"> Vision </h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo
                    eget consectetur commodo, velit libero </p>
            </div>
        </div>
    </div>
</section>

<section class = "section-with-bg section-padding">
    <div class = "container ">
        <div class = "grid-two-col">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">Our Talented Staff</h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio
                sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id
                sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget
                convallis justo, sit amet fringilla.
            </p>
        </div>

        <div class = "three-col-cards-wrapper">
            <div class = "three-col-item ">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
            <div class = "three-col-item">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
            <div class = "three-col-item">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-light">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "bg-light section-padding">
    <div class = "container ">
        <div class = "grid-two-col">
            <div class = "header-with-underline">
                <h2 class = "text-secondary">Explore <br>
                    Our Comprehensive <br>
                    Range of Courses</h2>
                <div class = "underline-bar"></div>
            </div>
            <p class = "text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                commodo, velit libero consequat justo, sed tristique eros lacus non turpis. Nullam eget magna at odio
                sollicitudin eleifend. Integer nec mauris id urna fringilla condimentum. Phasellus lacinia mauris id
                sapien pulvinar, sed fermentum lorem interdum. Cras vel justo vitae neque efficitur accumsan. Proin eget
                convallis justo, sit amet fringilla.
            </p>
        </div>

        <div class = "three-col-cards-wrapper">
            <div class = "three-col-item ">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
            <div class = "three-col-item">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
            <div class = "three-col-item">
                <div class = "three-col-item__img-wrapper">
                    <img src="{{ asset('images/hero-1.png') }}" alt="Logo">
                </div>
                <div class = "three-col-item__text-wrapper bg-white">
                    <h4 class = "text-primary">Service #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, justo eget consectetur
                        commodo, velit libero consequat justo, sed tristique </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "section-padding section-with-bg">
    <div class = "container">
        <div class = "header-with-underline">
            <h2 class = "text-secondary">
                Student Testimonials
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

<section class = "footer section-padding">
    <div class = "container">
        <div class = "footer-block">
            <div class = "footer__logo-wrapper">
                <img src="{{ asset('images/logo-white.png') }}" alt="Logo">
            </div>
            <div class = "footer__links-wrapper">
                <a class = "footer-link-item">
                    Home
                </a>
                <a class = "footer-link-item">
                    About
                </a>
                <a class = "footer-link-item">
                    Courses
                </a>
                <a class = "footer-link-item">
                    Contact
                </a>
            </div>
        </div>
        <div class = "footer-block">
            <div class = "footer__logo-wrapper">
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
