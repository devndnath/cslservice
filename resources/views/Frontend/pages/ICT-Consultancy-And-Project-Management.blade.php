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
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/ict.webp')}}" alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        ICT Consultancy And Project Management
                    </h2>
                    <p class="text-justify lead">
                        Elevate your business with our comprehensive ICT Consultancy and Project Management services! We
                        specialize in providing expert guidance to help you implement the right technology solutions
                        tailored to your unique needs. Our dedicated team manages projects from start to finish, ensuring
                        they are completed on time and within budget.
                        <br><br>
                        We focus on seamless integration, optimizing your IT infrastructure while minimizing risks. By
                        aligning your IT projects with your business objectives, we empower you to streamline processes and
                        maximize efficiency. Whether you're looking to upgrade your systems or embark on a new technology
                        initiative, our consultancy services pave the way for your long-term success.
                        <br><br>
                        Let us help you navigate the complexities of technology and unlock your business's full potential!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <span class="section_title text-start" style="font-size: 18px;">
                        CSL Service provides a comprehensive range of ICT Consultancy and Project
                        Management services to tackle your unique business challenges and opportunities in the technology
                        landscape. Our expert team specializes in delivering tailored solutions that optimize IT
                        infrastructure and enhance operational efficiency. We offer a variety of services, including:
                    </span>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Strategic IT Planning
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Project Management
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Technology Integration
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Process Optimization
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i
                                        class="fas fa-check-double brand_secondary_text"></i></span>Risk Management
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@include('frontend.component.footer')