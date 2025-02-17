@include('frontend.component.header')
@include('frontend.component.nav')
    <div id="loading-area" style=""></div>
        <section id="Slider">
        <style>
            :root {
                --primary: #00568d;
            }

            .hero_shape_wrapper .shape {
                z-index: 1 !important;
            }
        </style>

    </section>
    <div>
        <style>
            .anim_ouline_btn:before {
                background: var(--primary);
            }
        </style>
    </div>
    <section class="position-relative style_2" style="padding: 50px 0; background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
        <span class="position-absolute" style="top: 0; right: 0px">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <span class="position-absolute">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/classroom.webp')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Automated Smart Classroom/Lab
                    </h2>
                    <p class="text-justify lead">
                        Transform education with our Automated Smart Classroom/Lab solutions! These cutting-edge learning
                        environments utilize the latest technology to create engaging, interactive experiences for both
                        students and educators. Featuring tools like interactive whiteboards, smart projectors, and
                        automated attendance systems, our smart classrooms foster collaboration and enhance participation.
                        <br><br>
                        With seamless integration of digital resources and real-time data analytics, these classrooms adapt
                        to diverse learning needs, ensuring personalized education for every student. Whether for in-person
                        or remote learning, our Smart Classrooms and Labs redefine the educational experience and improve
                        outcomes, making learning more accessible and exciting than ever!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <span class="section_title text-start" style="font-size: 18px;">
                        CSL Service provides a comprehensive suite of Automated Smart Classroom/Lab
                        solutions designed to enhance the educational experience and address specific challenges in modern
                        learning environments. Our innovative technologies create interactive and engaging spaces that
                        foster collaboration and improve student outcomes.
                    </span>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Interactive Learning
                                Tools
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Automated Attendance
                                Systems
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Digital Resource
                                Integration
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Real-Time Data Analytics
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Remote Learning
                                Capabilities
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

 @include('frontend.component.footer')