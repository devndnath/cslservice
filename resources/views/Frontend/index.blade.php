@include('frontend.component.header')
@include('frontend.component.nav')


<div id="loading-area" style=""></div>
 
    
    <section class="position-relative style_2"
        style="background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
        <div class="container">
            <div class="row align-items-center" style="padding-bottom: 75px">
                <div class="col-lg-7" style="z-index: 0">
                    <div class="mt-3">
                        <p class="lead text-justify pt-4" style="font-size: 23px">
                            Welcome to <strong class="primary_text" style="font-weight: 600"
                                title="CSL Service">CSL Service
                             </strong>, your most trusted partner in <strong style="font-weight: 600"> Technology
                                Services, IT Infrastructure Solutions, Software Development, and IT Consulting </strong>
                            since 2018. We pride ourselves on aligning cutting-edge IT solutions with the unique business
                            needs of enterprises—driving agility, precision, and unmatched excellence.
                        </p>
                        <div class="col-xl-3 col-lg-2 col-md-3 col-6 mb-3"
                            style="font-size: inline-block;margin: auto;display: grid;">
                            <a href="{{Route('About-Us')}}"
                                class="anim_fill_btn btn btn_fill_rounded primary_bg rounded-0">
                                See More 
                                <!-- <i class="bx bx-right-arrow-alt"></i> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-end d-none d-lg-block">
                    <img class="img-fluid" loading="lazy"
                        src="{{ url('build/assets/images/aboutus/next-about-us.svg')}}"
                        alt="Best Cloud Storage Service in Bangladesh" width="500" height="500" />
                </div>
            </div>
        </div>
    </section>
    <div id="ec" class="" style="margin-top:20px" data-draft-content-id="0">
        
        <div>
            <style>
                :root {
                    --dlink-color: #55839f;
                }

                .dlink {
                    color: var(--dlink-color: #3eaff3; );
                }

                .style_2 .service_card .anim_ouline_btn {
                    border-color: var(--service-color);
                }

                .style_2 .service_card .anim_ouline_btn:before {
                    background: var(--service-color);
                }

                .style_2 .service_card .card-body.p_item p a {
                    color: #444 !important;
                    text-decoration: underline;
                    text-decoration-color: #7f7fde;
                }

                .service-menu li {
                    display: flex;
                    align-items: center;
                    padding-bottom: 5px;
                    margin-bottom: 10px;
                }

                .service-menu li i {
                    font-size: 16px;
                    margin-right: 5px;
                    color: var(--service-color);
                }

                .service-menu li a {
                    font-size: 16px;
                    color: #444;
                    text-decoration: underline;
                    transition: 0.4s;
                }

                .service-menu li a:hover {
                    color: #3eaff3;
                }

                .home-top {
                    margin-top: -75px;
                }

                @media screen and (max-width: 768px) {
                    .home-top {
                        margin-top: 0;
                        padding-top: 25px;
                    }
                }


                /* Existing styles for home_demo_icon */
                .style_2 .service_card .custom_header .home_demo_icon {
                    height: 115px;
                    width: 115px;
                    border: 1px solid var(--service-color) !important;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    line-height: 0;
                    padding: 5px;
                    margin: 0 auto;
                    box-shadow: 0 4px 10px rgb(158 200 63 / 25%);
                    transition: border 0.3s ease, box-shadow 0.3s ease, z-index 0.3s ease;
                    position: relative;
                }

                /* Card hover effect */
                .style_2 .service_card {
                    transition: transform 0.3s ease, box-shadow 0.3s ease, z-index 0.3s ease;
                }

                .style_2 .service_card:hover {
                    transform: translateY(-10px);
                    /* Move the card up slightly on hover */
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                    /* Increase shadow for a lifted effect */
                    z-index: 10;
                    /* Bring the card to the foreground */
                }

                /* Add hover effect for border, box shadow, and z-index on icon */
                .style_2 .service_card:hover .custom_header .home_demo_icon {
                    border: 3px solid var(--service-color) !important;
                    /* Increase border size */
                    box-shadow: 0 6px 15px rgb(158 200 63 / 40%);
                    /* Darker, larger shadow */
                    z-index: 10;
                    /* Raise z-index on hover */
                }

                /* Image transition inside home_demo_icon */
                .style_2 .service_card .custom_header .home_demo_icon img {
                    transition: transform 0.5s ease;
                }

                /* Add hover effect for image: scale and rotate */
                .style_2 .service_card:hover .custom_header .home_demo_icon img {
                    transform: scale(.6);
                    /* Scale the image and rotate it 360 degrees */
                }
            </style>
            <section class="style_2 home-top" style="padding-bottom: 50px;">
                <div class="container">
                    <div class="service_slide row justify-content-center">
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up"
                            data-aos-anchor="#example-anchor" data-aos-offset="500">
                            <div class="card p-3 service_card"
                                style="--service-color: #4117B7; border-radius: 15px; border-top: 3px solid #4117B7;border-bottom: 3px solid #4117B7;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Software Development">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/software-devlopment.png')}}"
                                            alt="Software Development">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Software Development">
                                        <a href="#">Software Development</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="card p-3 service_card"
                                style="--service-color: #5d21d2; border-radius: 15px; border-top: 3px solid #5d21d2;border-bottom: 3px solid #5d21d2;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Structure Local Area Network (LAN)">
                                        <img style="width: 70px;"
                                            src="{{ url('build/assets/images/solutions/structure-local-area-network.jpg')}}"
                                            alt="Structure Local Area Network (LAN)">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Structure Local Area Network (LAN)">
                                        <a href="#">Structure Local Area Network (LAN)</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="card p-3 service_card"
                                style="--service-color: #0e9aff; border-radius: 15px; border-top: 3px solid #0e9aff;border-bottom: 3px solid #0e9aff;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Automated IP Surveillance & CCTV">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/cctv-camera-solution.png')}}"
                                            alt="Automated IP Surveillance & CCTV">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Automated IP Surveillance & CCTV">
                                        <a href="#">Automated IP Surveillance & CCTV </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="card p-3 service_card"
                                style="--service-color: #ff4949; border-radius: 15px; border-top: 3px solid #ff4949;border-bottom: 3px solid #ff4949;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Interactive Display">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/interactive-display.jpg')}}"
                                            alt="Interactive Display">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Interactive Display">
                                        <a href="#">Interactive Display </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="card p-3 service_card"
                                style="--service-color: #4117B7; border-radius: 15px; border-top: 3px solid #4117B7;border-bottom: 3px solid #4117B7;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Fiber Optic Backbone">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/fiber-optic-backbone.jpg')}}"
                                            alt="Fiber Optic Backbone">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Fiber Optic Backbone">
                                        <a href="#">Fiber Optic Backbone</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="Fiber-Optic-Backbone.html"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #000094; border-radius: 15px; border-top: 3px solid #000094;border-bottom: 3px solid #000094;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Smart Wireless">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/smart-wireless.jpg')}}"
                                            alt="Smart Wireless">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Smart Wireless">
                                        <a href="#">Smart Wireless</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #005d9a; border-radius: 15px; border-top: 3px solid #005d9a;border-bottom: 3px solid #005d9a;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Smart IP PABX">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/smart-ip-pabx.jpg')}}"
                                            alt="Smart IP PABX">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Smart IP PABX">
                                        <a href="#">Smart IP PABX</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #99c33d; border-radius: 15px;border-top: 3px solid #99c33d;border-bottom: 3px solid #99c33d;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="AI Based Data Center">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/ai-based-data-center.html')}}"
                                            alt="AI Based Data Center">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="AI Based Data Center">
                                        <a href="#">AI Based Data Center</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #22c37d; border-radius: 15px;border-top: 3px solid #22c37d;border-bottom: 3px solid #22c37d;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Automated Smart Classroom / Lab">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/smart-student.png')}}"
                                            alt="Automated Smart Classroom / Lab">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Automated Smart Classroom / Lab">
                                        <a href="#">Automated Smart Classroom / Lab</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #ff4949; border-radius: 15px;border-top: 3px solid #ff4949;border-bottom: 3px solid #ff4949;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Enterprise Server & Storage">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/enterprise-server-storage.png')}}"
                                            alt="Enterprise Server & Storage">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Enterprise Server & Storage">
                                        <a href="#">Enterprise Server & Storage </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #5d21d2; border-radius: 15px;border-top: 3px solid #5d21d2;border-bottom: 3px solid #5d21d2;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Smart Public Addressing (PA) System">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/pa-system.jpg')}}"
                                            alt="Smart Public Addressing (PA) System">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Smart Public Addressing (PA) System">
                                        <a href="#">Smart Public Addressing (PA) System
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">VIEW
                                        DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #005d9a; border-radius: 15px; border-top: 3px solid #005d9a;border-bottom: 3px solid #005d9a;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Smart Access control and Attendance System">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/accescontrol.jpg')}}"
                                            alt="Smart Access control and Attendance System">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title=" Smart Access Control And Attendance System">
                                        <a href="#">
                                            Smart Access Control And Attendance System
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #99c33d; border-radius: 15px;border-top: 3px solid #99c33d;border-bottom: 3px solid #99c33d;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Enterprise Switching and Routing">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/enterprise-switching-routing.png')}}"
                                            alt="Enterprise Switching and Routing">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Enterprise Switching and Routing">
                                        <a href="#">
                                            Enterprise Switching and Routing
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #22c37d; border-radius: 15px;border-top: 3px solid #22c37d;border-bottom: 3px solid #22c37d;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="Building Management System (BMS)">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/bms-enterprise.png')}}"
                                            alt="Building Management System (BMS)">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="Building Management System (BMS)">
                                        <a href="#">Building Management System (BMS)</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3 service_card"
                                style="--service-color: #ff4949; border-radius: 15px; border-top: 3px solid #ff4949;border-bottom: 3px solid #ff4949;">
                                <div class="card-header custom_header">
                                    <div class="home_demo_icon" title="ICT Consultancy and Project Management">
                                        <img style="width: 75px;"
                                            src="{{ url('build/assets/images/solutions/project-management.png')}}"
                                            alt="ICT Consultancy and Project Management">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="ICT Consultancy and Project Management">
                                        <a href="#">
                                            ICT Consultancy and Project Management
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="#"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        
        <div>

            <section class="style_2 py-5">
                <div class="container">
                    <h2 class="section_title">Our
                        <span class="theme_primary_color text-primary position-relative">Brands
                            <svg class="highlight-scribble-1" viewbox="0 0 760 60" preserveaspectratio="none">
                                <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                                    stroke="#2c7eb2" pathlength="1" stroke-width="14" fill="none">
                                </path>
                            </svg>
                        </span>
                    </h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-6 col-lg-4" data-aos="zoom-in-down">
                                    <a href="#" title="Maxhub">
                                        <div class="brandDiv border rounded d-inline-block p-2"
                                            style="border: 5px solid #eef6f8 !important;">
                                            <img src="{{ url('build/assets/images/partnerlist/Maxhub.png')}}"
                                                class="img-fluid" alt="Maxhub" width="250" loading="lazy">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4" data-aos="zoom-in-down">
                                    <a href="https://www.nordencommunication.com/en-gb" title="Norden">
                                        <div class="brandDiv border rounded d-inline-block p-2"
                                            style="border: 5px solid #eef6f8 !important;">
                                            <img src="{{ url('build/assets/images/partnerlist/Norden.png')}}"
                                                class="img-fluid" alt="Norden" width="250" loading="lazy">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        
        <div>

            <section class="style_2 py-5">
                <div class="container">
                    <h2 class="section_title">Our
                        <span class="theme_primary_color text-primary position-relative">Partners
                            <svg class="highlight-scribble-1" viewbox="0 0 760 60" preserveaspectratio="none">
                                <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                                    stroke="#2c7eb2" pathlength="1" stroke-width="14" fill="none">
                                </path>
                            </svg>
                        </span>
                    </h2>
                    <div class="row pt-3">
                        <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                            <a href="#" title="BDCOM">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Bdcom.png')}}" alt="BDCOM"
                                        class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                            <a href="#" title="Cisco">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Cisco.png')}}" alt="Cisco"
                                        class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                            <a href="#" title="Paloalto">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Paloalto.png')}}"
                                        alt="Paloalto" class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                            <a href="#" title="Prose">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Prose.png')}}" alt="Prose"
                                        class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                            <a href="#" title="Rosenberger">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Rosenberger.png')}}"
                                        alt="Rosenberger" class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-2 col-md-3 mb-4 " data-aos="zoom-in-up">
                            <a href="#" title="Sophos">
                                <div class="card_2 shadow-sm mb-3 border-left p-2"
                                    style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Sophos.png')}}"
                                        alt="Sophos" class="img-fluid" loading="lazy">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        
        <div>
            <style>
                .anim_ouline_btn:before {
                    background: var(--primary);
                }

                .clientDiv:hover .client-img {
                    transform: scale(1.2);
                    /* Scale up the image on hover */
                    transition: transform 0.3s ease;
                    /* Smooth transition for scaling */
                }

                /* Full div hover effect */
                .clientDiv:hover .client-logo {
                    animation: pulse 0.6s infinite alternate;
                    /* Pulse effect on hover */
                    box-shadow: 0 6px 15px rgba(31, 48, 151, 0.3);
                }

                @keyframes pulse {
                    from {
                        transform: scale(1);
                        /* Default size */
                    }

                    to {
                        transform: scale(1.05);
                        /* Slight zoom */
                    }
                }
            </style>
            <section class="style_2" style="padding:50px 0; transform: scaleX(-1)">
                <div class="container" style="transform: scaleX(-1)">
                    <h2 class="section_title">
                        <span class="theme_secondary_color text-primary position-relative">Customer
                            <svg class="highlight-scribble-1" viewbox="0 0 760 60" preserveaspectratio="none">
                                <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                                    stroke="#2c7eb2" pathlength="1" stroke-width="14" fill="none"></path>
                            </svg>
                        </span>
                        Trust On Us
                    </h2>
                    <div class="row pt-3 justify-content-around">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="ACME" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Acme.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Acme" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="ACME - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">ACME</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="BGMEA" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BGMEA.png')}}"
                                        class="img-fluid client-img " loading="lazy" alt="BGMEA" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="BGMEA - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">BGMEA</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="AUST" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/AUST.png')}}"
                                        class="img-fluid client-img " loading="lazy" alt="AUST" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="AUST - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">AUST</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#" title="Aziz Group" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Aziz_Group.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Aziz Group" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="Aziz Group - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">Aziz Group
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="IFAD Autos Limited" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/IFAD_Autos.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="IFAD Autos Limited" width="150"
                                        height="150" style="height: 52px; object-fit: cover;"
                                        title="IFAD Autos Limited - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">IFAD Autos Limited</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="AKH Group" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/AKH.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="AKH Group" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="AKH Group - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">AKH Group</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#"
                                title="বাংলাদেশ লোক-প্রশাসন রশিক্ষণ কেন্দ্র (বিপিএটিসি)" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BPATC.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="BPATC" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি) - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">বাংলাদেশ লোক-প্রশাসন
                                        প্রশিক্ষণ কেন্দ্র (বিপিএটিসি)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#" title="BUET" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BUET.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="BUET" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="BUET - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">BUET</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#" title="আঞ্জুমান মফিদুল ইসলাম" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Anjuman.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Anjuman" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="আঞ্জুমান মফিদুল ইসলাম - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">আঞ্জুমান মফিদুল ইসলাম</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="BDCCL" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BDCCL.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="BDCCL" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="BDCCL - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">BDCCL</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="ANANTA" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Ananta.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Ananta" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="ANANTA - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">ANANTA</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#" title="Aramex" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Aramex.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Aramex" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="Aramex - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">Aramex</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="Bangaldesh Gas &amp; Fields
                                        Company Ltd."
                                rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Gas_Fields.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Gas Fields" width="150"
                                        height="150" style="height: 60px; object-fit: cover;"
                                        title="Bangaldesh Gas Fields Company Ltd. - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">
                                        Bangaldesh Gas Fields Company Ltd.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="Amin Mohammad &amp;Lands Development Ltd."
                                rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Amin%20Mohammad.png')}}"
                                        class="img-fluid client-img" loading="lazy"
                                        alt="Amin Mohammad Lands Development Ltd." width="150" height="150"
                                        style="height: 60px; object-fit: cover;"
                                        title="Amin Mohammad Lands Development Ltd. - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">
                                        Amin Mohammad Lands Development Ltd.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center"
                                href="#" title="Apex Agriscience Ltd." rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Agriscience.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Apex Agriscience Ltd."
                                        width="150" height="150" style="height: 52px; object-fit: cover;"
                                        title="Apex Agriscience Ltd. - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">Apex Agriscience Ltd.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="BANGLADESH ONLINE" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BOL.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="BANGLADESH ONLINE"
                                        width="150" height="150" style="height: 60px; object-fit: cover;"
                                        title="BANGLADESH ONLINE - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">BANGLADESH ONLINE</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="Girls Guide Association" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/Girls_guide_association.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="Girls Guide Association"
                                        width="150" height="150" style="height: 60px; object-fit: cover;"
                                        title="Girls Guide Association - Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">Girls Guide Association</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="#"
                                title="BMW Bangladesh" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ url('build/assets/images/clients/BMW.png')}}"
                                        class="img-fluid client-img" loading="lazy" alt="BMW Bangladesh"
                                        width="150" height="150" style="height: 60px; object-fit: cover;"
                                        title="BMW Bangladesh- Client Of Global Informatics Ltd.">
                                    <p class="text-center mt-2 mb-0" style="font-size: 12px;">BMW Bangladesh
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3">
                            <a href="Clients.html"
                                class="anim_fill_btn btn btn_fill_rounded primary_bg rounded-0">See More
                                <!-- <i class="bx bx-right-arrow-alt"></i> -->
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        
        <div>
            <section class="style_2" style="padding: 75px 0;">
                <div class="container position-relative">
                    <div class="row counters counters-text-light">
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter">
                                <!-- <i class="fas fa-user" style="font-size: 40px;"></i> -->
                                <strong style="font-size: 40px;" data-to="700"></strong>
                                <h3>Happy Clients</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter">
                                <!-- <i class="fas fa-star" style="font-size: 40px;"></i> -->
                                <strong style="font-size: 40px;" data-to="7"></strong>
                                <h3>Years in Business</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                            <div class="counter">
                                <!-- <i class="fas fa-project-diagram" style="font-size: 40px;"></i> -->
                                <strong style="font-size: 40px;" data-to="1000"></strong>
                                <h3>Projects</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter">
                                <!-- <i class="fas fa-users" style="font-size: 40px;"></i> -->
                                <strong style="font-size: 40px;" data-to="50"></strong>
                                <h3>Team Members</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div>
            <section class="style_2" style="padding: 75px 0;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card custom-card position-relative text-start"
                                style="background: #2c7eb2;border-radius: 15px;">
                                <div class="align-items-center row d-flex justify-content-between">
                                    <div class="col-lg-8 text-center text-lg-start">
                                        <h2 class="text-white" style="font-size: 40px;">
                                            It's easy to get started. Contact us
                                            <span class="secondary_text">today</span>
                                        </h2>
                                    </div>
                                    <div class="col-lg-4 text-lg-end text-center">
                                        <a target="_blank" href="mailto:info@globalinformatics.com.bd"
                                            class="anim_fill_btn btn btn_fill_rounded rounded-0 my-1"
                                            style="background: #4b7bec;">
                                            <!-- <i class="fas fa-envelope"></i> -->
                                             Mail Now
                                        </a>
                                        <a target="_blank" href="tel:+8801896106053"
                                            class="anim_fill_btn btn btn_fill_rounded secondary_bg rounded-0 my-1">
                                            <!-- <i class="fas fa-phone-volume"></i>  -->
                                            Call Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>




@include('frontend.component.footer')