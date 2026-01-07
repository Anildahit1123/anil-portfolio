@extends('layouts.header')
@section('content')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Anil Dangaura Tharu</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">I'm a Full Stack Laravel Developer with over 3.5 years of
                        experience from Kathmandu, Nepal</h2>

                    <!-- Social Links -->
                    <div class="media-links mt-3 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <a href="https://www.linkedin.com/in/anil-dahit-8a1754212" class="linkedin" target="_blank"
                            title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        {{-- <a href="https://github.com/Anildahit1123" class="github" target="_blank" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a> --}}
                        <a href="mailto:anildahit418920@gmail.com" class="email" title="Email">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="tel:+9779811691521" class="phone" title="Phone">
                            <i class="bi bi-phone"></i>
                        </a>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('story', [\App::getLocale()]) }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>About Me</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/img/anil.png') }}" class="img-fluid"
                        alt="Anil Dangaura Tharu - Full Stack Laravel Developer">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->



    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Who am I</h3>
                            <h2>Experienced Full Stack Developer from Nepal.</h2>
                            <p>
                                Namaste! I am Anil Dangaura Tharu, a passionate Full Stack Developer specializing in Laravel
                                and PHP development. Currently working as a Technology Sales Laravel PHP Developer in
                                Kathmandu, Nepal.
                            </p>

                            <p>Experienced PHP Developer with over 3.5 years in the IT industry, specializing in Laravel and
                                PHP for scalable web applications. Proficient in Agile methodologies, including SCRUM, with
                                a focus on end-to-end development, deployment, and maintenance. Adept at collaborating with
                                stakeholders to deliver high-quality solutions, mentoring junior developers, and optimizing
                                performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
                <!-- Feature Tabs -->
                <div class="row feture-tabs" data-aos="fade-up">
                    <div class="col-lg-12">
                        <h3>I am an experienced Full Stack Laravel Developer with over 3.5 years in the IT industry,
                            specializing in building scalable web applications, RESTful APIs, and end-to-end development.
                        </h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Education</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Professional Training &
                                    Certification</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Work Experience</a>
                            </li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Bachelor’s Degree in Computer Science and Information Technology (BSc.CSIT)</h4>
                                </div>
                                <p>Nepalgunj Campus of Management and Technology, Tribhuvan University, Nepal<br>
                                    <strong>2019 – 2023</strong>
                                </p>
                                <p>Studied programming, algorithms, data structures, software engineering, web development,
                                    and database systems. Completed projects in web development and gained experience in
                                    Agile methodologies through group assignments.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Higher National Diploma in Computer Engineering</h4>
                                </div>
                                <p>Swami Devi Dyal College of Technical Education, India<br>
                                    <strong>2015 – 2018</strong>
                                </p>
                                <p>Specialized in hardware-software integration, electronics, networking, embedded systems,
                                    and basic web applications.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>School Leaving Certificate (SLC)</h4>
                                </div>
                                <p>Nepal<br>
                                    <strong>2015</strong>
                                </p>
                                <p>Excelled in mathematics, science, and computer basics.</p>
                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade" id="tab2">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Agile Methodology & SCRUM Certification</h4>
                                </div>
                                <p>Completed professional certification in Agile practices, including sprint planning,
                                    backlog management, and SCRUM frameworks.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Extensive Hands-on Training</h4>
                                </div>
                                <p>Over 3.5 years of practical experience in:</p>
                                <ul>
                                    <li>Laravel & PHP backend and API development</li>
                                    <li>Full lifecycle web application development & CI/CD deployment</li>
                                    <li>MySQL and PostgreSQL database design & optimization</li>
                                    <li>Server management (shared hosting, VPS, cPanel)</li>
                                    <li>Git/version control and collaborative workflows</li>
                                </ul>
                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade" id="tab3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Laravel PHP Developer — Technology Sales, Kathmandu, Nepal</h4>
                                </div>
                                <p><strong>August 2022 – Present</strong></p>
                                <p>➡ Developed scalable and secure web applications using PHP Laravel, ensuring robust
                                    backend logic and API integrations.</p>
                                <p>➡ Managed project documentation and tracked progress using Jira and Confluence.</p>
                                <p>➡ Researched and implemented modern libraries to enhance project quality and user
                                    experience.</p>
                                <p>➡ Coordinated with stakeholders, developed/hosted WordPress and custom systems, and
                                    assisted in data analysis.</p>
                                <p>➡ Mentored junior developers and contributed to Agile sprint planning.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>PHP Developer — Bits, Nepal</h4>
                                </div>
                                <p><strong>February 2021 – July 2021</strong></p>
                                <p>➡ Developed web and WordPress applications tailored to client specifications.</p>
                                <p>➡ Managed web hosting, server configuration, SSL implementation, and deployments.</p>
                                <p>➡ Conducted code reviews, integrated third-party APIs, and resolved bugs.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>PHP Developer — Ninja Infosys Pvt. Ltd., Nepal</h4>
                                </div>
                                <p><strong>February 2019 – June 2020</strong></p>
                                <p>➡ Developed clean and modular Laravel web applications.</p>
                                <p>➡ Performed database optimizations, migrations, and deployment processes.</p>
                                <p>➡ Mentored juniors, participated in sprint planning, and researched new technologies.</p>

                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Interests</h4>
                                </div>
                                <p>➡ Exploring AI and cloud computing</p>
                                <p>➡ Hiking</p>
                                <p>➡ Tech communities</p>
                            </div><!-- End Tab 3 Content -->

                        </div>
                    </div>
                </div><!-- End Feature Tabs -->
            </div>
        </section>





    </main>
@endsection
