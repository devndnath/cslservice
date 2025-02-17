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
        <span class="position-absolute" style="top: 0; right: 0px"><img class="img-fluid" loading="lazy"
                src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <span class="position-absolute">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/ascls.webp')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Fiber Optic Backbone
                    </h2>
                    <p class="text-justify lead">
                        Enhance your network with a Fiber-Optic Backbone, the ultimate solution for high-speed data
                        transmission! Utilizing cutting-edge fiber-optic cables, this advanced infrastructure connects
                        various network segments, delivering lightning-fast communication and exceptional reliability.
                        <br><br>
                        Perfect for enterprises, data centers, and telecommunications, a fiber-optic backbone dramatically
                        improves bandwidth and reduces latency, making it ideal for applications like internet connectivity,
                        video streaming, and cloud services. By investing in a fiber-optic backbone, you not only boost your
                        network performance but also ensure seamless data flow and scalability to support your future
                        growth.
                        <br><br>
                        Upgrade to a fiber-optic backbone today and experience the power of superior connectivity!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <span class="section_title text-start" style="font-size: 18px;">
                        CSL Service provides a comprehensive range of Fiber-Optic Backbone solutions
                        designed to meet the demands of high-speed data transmission in today’s digital landscape. Our
                        advanced fiber-optic infrastructure effectively addresses specific business challenges, enhancing
                        connectivity and performance across your network. We offer a variety of services, including:
                    </span>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>High-Speed Connectivity
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Scalable Solutions
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Reliable Performance
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Customized Design
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Expert Installation &
                                Support
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.component.footer')

  