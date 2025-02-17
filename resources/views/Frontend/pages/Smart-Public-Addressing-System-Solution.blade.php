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
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/pasystem.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Smart Public Addressing (PA) System Solution
                    </h2>
                    <p class="text-justify lead">
                        Elevate communication in your public spaces with our Smart Public Addressing (PA) System solution!
                        This cutting-edge system is designed to enhance clarity and effectiveness, enabling seamless
                        announcements, emergency alerts, and background music management. With exceptional sound quality and
                        smart features, your messages will be heard loud and clear.
                        <br><br>
                        Our Smart PA System offers remote monitoring and control, allowing you to manage announcements and
                        notifications effortlessly from anywhere. Perfect for schools, airports, shopping centers, and
                        corporate environments, this solution not only improves information dissemination but also enhances
                        emergency responsiveness, creating safer and more connected communities. Transform your
                        communication strategy with GIL’s Smart PA System and ensure your message always reaches its
                        audience!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <span class="section_title text-start" style="font-size: 18px;">
                        CSL Service offers a comprehensive range of Smart Public Addressing (PA) System
                        solutions designed to enhance communication and safety in various public spaces. Our innovative
                        systems effectively address specific challenges in delivering clear and timely announcements,
                        emergency alerts, and background music management. We provide a variety of services, including:
                    </span>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>High-Quality Audio
                                Solutions
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Emergency Notification
                                Features
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Remote Monitoring &
                                Control
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Customizable Integration
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>User-Friendly Interface
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@include('frontend.component.footer')