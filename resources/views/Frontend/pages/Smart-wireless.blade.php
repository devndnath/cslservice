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
                src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" /></span>
        <span class="position-absolute">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/wireless%20technologies.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Smart Wireless
                    </h2>
                    <p class="text-justify lead">
                        CSL Service have some great experience at designing and deploying Enterprise Wireless Networks Solutions. If you require a “hotspot zone” , Hospitality Wi-Fi Solutions or complete coverage of your building, we have the skill, expertise and solution to give you the results you deserve. We offer a broad range of wireless network services and solutions. We have solutions available for enterprise installations, wireless service providers, medical institutions, schools and colleges, government, hotels, malls and camp grounds. We have alliances with many leading wireless solution vendors including Cisco Systems, Ruckus Wireless, Aruba Networks and Eugenius Access Point.
                        <br>
                        Our team have Cisco wireless qualifications and understand the importance of security and correct installation, in what are sometimes difficult environments. One measure of our proficiency in wireless networking is our team of Certified Wireless Network Administrators. The CWNA certification is a vendor-neutral wireless networking certification.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <span class="section_title text-start" style="font-size: 18px;">
                        CSL Service offers a full range of wireless network security solutions to address specific business problems, risks, and opportunities in the wireless environment.
                        We offer a range of wireless services:
                    </span>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless Network Setup & Installation
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Unified Managed Wireless Solutions
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless LAN Setup
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless LAN Configuration
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless LAN Installation
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless LAN Design
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless Router Setup
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>WiFi Manager
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Wireless Security
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

 @include('frontend.component.footer')