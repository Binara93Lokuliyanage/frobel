<section class="header-section">
    <div class="container header-container">
        <a href="/" class="logo-box">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            {{-- <lottie-player class = "lottie-animation" src="{{ asset('images/lottie/home/logo.json') }}" background="transparent"  speed="1"  ></lottie-player>
            <img src="{{ asset('images/logo-word.svg') }}" alt="Logo">  --}}
        </a>
        <div class="menu-wrapper">
            <div class = "top-menu bg-dark-blue">
                <a href = "/news" id = "news" class = "top-menu__item">News</a>
                <a href = "/events" class = "top-menu__item" id = "events">Events</a>
                <a href = "/login" class = "top-menu__item" id = "lms">LMS</a>
                <a href = "/login" class = "top-menu__item" id = "lecturer-portal">Lecturer Portal</a>
                <a href = "/admissions" class = "top-menu__item" id = "admissions">Admissions</a>
            </div>
            <div class = "bottom-menu">
                <a href="/" class = "bottom-menu__item" id ="home">Home</a>
                <a href="/about" class = "bottom-menu__item" id ="about">About</a>
                <a href="/meet-president-and-dean" class = "bottom-menu__item" id = "faculty">Faculty and Staff</a>
                <a href="/courses" class = "bottom-menu__item" id = "courses">Courses</a>
                <a href="/contact" class = "bottom-menu__item" id = "contact">CONTACT</a>
                <a href="/admissions" class = "btn special-btn" id = "contact">REGISTER</a>
            </div>
        </div>
        <div class = "mobile-menu-icon" id="mobile-menu-icon">
            <div class = "mobile-menu-icon__bar" id = "top-bar"></div>
            <div class = "mobile-menu-icon__bar" id = "mid-bar"></div>
            <div class = "mobile-menu-icon__bar" id = "bot-bar"></div>
        </div>
    </div>
    <div class = "dropdown-menu">
        <div class = "container header-container" id="drop-down-header-container">
            <div></div>
            <div class="menu-wrapper">
                <div class = "menu-drop-second-level" id ="courses-dropdown">
                    <div class = "menu-drop-second-level__items-wrapper">
                        @foreach ($degrees as $degree)
                            @php
                                $formattedName = strtolower(str_replace(' ', '-', $degree->name));
                            @endphp
                            <a href="#" id = "{{ $formattedName }}"
                                class = "menu-drop-second-level__item" style="width: 100%; position: relative; padding-right: 24px">{{ $degree->name }} <i class="fa fa-angle-right" style="position: absolute; right: 0; top: 5px" aria-hidden="true"></i></a>
                            <!-- You can customize the link structure and content based on your requirements -->
                        @endforeach
                        {{-- <a href = "/course-details/1" class = "menu-drop-second-level__item">Old Testament Survey</a>
                        <a href = "/course-details/2" class = "menu-drop-second-level__item">New Testament Survey</a>
                        <a href = "/course-details/3" class = "menu-drop-second-level__item">Introduction to Christian Theology</a>
                        <a href = "/course-details/4" class = "menu-drop-second-level__item">The Doctrine of Scripture</a> --}}
                    </div>
                    {{-- <div class = "menu-drop-second-level__items-wrapper thired-level" id ="certificate-in-theology-and-bible-dropdown">
                        <a href = "/course-details/5" class = "menu-drop-second-level__item">The Doctrine of God</a>
                        <a href = "/course-details/6" class = "menu-drop-second-level__item">The Doctrine of Christ and
                            Salvation</a>
                        <a href = "/course-details/7" class = "menu-drop-second-level__item">Church History and
                            Pentecostal Movement</a>
                        <a href = "/course-details/8" class = "menu-drop-second-level__item">Christian Ethics and
                            Practical Theology</a>

                    </div> --}}
                    @foreach ($degrees as $degree)
                        <div class="menu-drop-second-level__items-wrapper thired-level"
                            id="{{ strtolower(str_replace(' ', '-', $degree->name)) }}-dropdown">
                            @foreach ($degree->courses as $course)
                                <a href="/course-details/{{ $course->id }}"
                                    class="" style="display: block; padding-bottom: 16px; padding-left: 16px;">{{ $course->course_name }}</a>
                            @endforeach
                        </div>
                    @endforeach

                </div>
                <div class = "menu-drop-second-level" id ="faculty-dropdown">
                    <div class = "menu-drop-second-level__items-wrapper">
                        <a href = "/meet-president-and-dean" class = "menu-drop-second-level__item">Meet the President
                            and Dean</a>
                        <a href = "/about#administration" class = "menu-drop-second-level__item">Administration</a>
                        <a href = "/about#academic-staff" class = "menu-drop-second-level__item">Academic Staff</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-dropdown" id="menu-dropdown">
        <div class = "menu-dropdown__item"><a href="/" class = "h4">Home</a></div>
        <div class = "menu-dropdown__item"><a href="/about" class = "h4">About</a></div>
        <div class = "menu-dropdown__item"><a href="/meet-president-and-dean" class = "h4">Meet The President and
                dean</a></div>
        <div class = "menu-dropdown__item"><a href="/courses" class = "h4">Courses</a></div>
        <div class = "menu-dropdown__item"><a href="/contact" class = "h4">CONTACT</a></div>
        <div class = "menu-dropdown__item"><a href="/news" class = "h4">News</a></div>
        <div class = "menu-dropdown__item"><a href="/events" class = "h4">Events</a></div>
        <div class = "menu-dropdown__item"><a href="/login" class = "h4">LMS</a></div>
        <div class = "menu-dropdown__item"><a href = "/login" class = "h4">Lecturer Portal</a></div>
        <div class = "menu-dropdown__item"><a href="/admissions" class = "h4">Admissions</a></div>

        <div class = "mobile-menu-social-media-wrapper">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square " aria-hidden="true"></i>
            <i class="fa fa-youtube-play " aria-hidden="true"></i>
            <i class="fa fa-instagram " aria-hidden="true"></i>
        </div>
    </div>
</section>
