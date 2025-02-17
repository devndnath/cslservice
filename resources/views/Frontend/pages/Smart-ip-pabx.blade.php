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
                src="{{ url('build/images/Content/img/eCommerce/achive-bg.png" alt="Payment Pattern')}}" />
        </span>
        <span class="position-absolute">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}" alt="Payment Pattern" />
        </span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/ip-pbx.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Smart IP PABX
                    </h2>
                    <p class="text-justify lead">
                        IP telephony (Internet Protocol Telephony) is a general term for the technologies that use the Internet Protocol’s packet-switched connections to exchange voice, fax, and other forms of information that have traditionally been carried over the dedicated circuit-switched Network. IP telephony transmits voice communications over the network using open, standards-based Internet Protocol.
                        <br>
                        As such, it provides a way for you to extend consistent voice communications services to all your employees in their workspaces – on the main campus, at branch offices, remote, or mobile. Cisco IP telephony solutions are an integral part of Cisco Unified Communications, which unify voice, video, data, and mobile applications on fixed and mobile networks.
                        <br>
                        They let your employees talk with each other using almost any media, device, or operating system.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h2 class="section_title text-start" style="font-size: 20px;">
                        Benefits of having IP Telephony Solution
                    </h2>
                    <div class="d-md-flex gap-md-5 lead">
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Provide highly secure, reliable, scalable communications that take advantage of your LAN and WAN.
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Improve employee flexibility and productivity with the full range of Cisco Unified Communications and third-party applications.
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Take advantage of a wide range of Session Initiation Protocol (SIP)-based capabilities.
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>Cost savings, Standards and interoperability, Ease of use.
                            </li>
                            <li>
                                <span class="fa-li primary_text" style="top:0;"><i class="fas fa-check-double brand_secondary_text"></i></span>QOS, Scalability, End-to-end service and support.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

 @include('frontend.component.footer')