@include('frontend.component.header') 
@include('frontend.component.nav')      

            <div class="container">
                <div class="row align-items-center justify-content-center" style="padding: 100px 0">
                    <div class="col-lg-10 text-center">
                        <h1 class="slide-title">
                            <span class="primary_text">About Us</span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <style>
            :root {
                --primary: #00568d;
                --secondary: #eb3714;
            }

            .style_2 h1.slide-title {
                font-size: 70px;
            }

            .style_2 h2.section_title {
                font-size: 35px;
            }

            @media only screen and (max-width: 1199px) {
                .style_2 h1.slide-title {
                    font-size: 50px;
                }
            }

            .featurelist_content ul li::before {
                background: var(--primary);
            }
            .featurelist_content ul li::after {
                border-color: transparent transparent transparent #00568d;
            }
        </style>
        <section class="position-relative style_2" style="background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
            <div class="container">
                <div class="row align-items-center" style="padding-bottom: 75px">
                    <div class="col-lg-7" style="z-index: 0">
                        <div class="mt-3">
                            <p class="lead text-justify pt-4" style="font-size: 20px">
                                Welcome to <strong class="primary_text" style="font-weight: 600" title="CSL Service">CSL Service
                                    </strong>, your most trusted partner in <strong style="font-weight: 600">
                                    Technology Services, IT Infrastructure Solutions, Software Development, and IT
                                    Consulting </strong> since 2018. We pride ourselves on aligning cutting-edge IT
                                solutions with the unique business needs of enterprises—driving agility, precision, and
                                unmatched excellence.
                                <br>

                                We are pioneers in delivering <strong style="font-weight: 600">tailor-made, cost-effective
                                    solutions </strong> that propel businesses toward exponential growth. Our innovative,
                                customer-centric approach and proactive strategies have earned us trust and respect across
                                industries, making CSL Service a name synonymous with <strong style="font-weight: 600"> reliability </strong> and
                                <strong style="font-weight: 600"> innovation </strong> in the tech world.
                                <br>

                                With a focus on secure, scalable infrastructure, we lead the way in digital transformation,empowering businesses to
                                thrive in an ever-evolving landscape. Our commitment to quality is unwavering, guided by the
                                principle: <strong style="font-weight: 600">"Quality for unmatched business excellence."</strong>
                                <br>

                                What sets us apart? We're not just industry specialists—we're also the official distributor in Bangladesh for globally
                                recognized technology leaders <strong title="Maxhub" class="text-secondary" style="font-weight: 600"><a target="_blank" href="https://www.maxhub.com/en/">Maxhub</a>
                                     </strong> and <strong title="Norden" class="text-secondary" style="font-weight: 600"> <a target="_blank" href="https://www.nordencommunication.com/en-gb">Norden</a></strong>.
                                    This strategic partnership allows us to offer state-of-the-art solutions that elevate your enterprise to new heights.
                                <br>
                                Choose CSL Service,where quality meets innovation,and let us shape your
                                business for the future!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end d-none d-lg-block" title="About Us">
                        <img class="" style="max-width:120%;" loading="lazy" src="{{ url('build/assets/images/aboutus/About%20Us.svg')}}" alt="about us" width="900" height="600" data-aos="fade-up" data-aos-delay="300"/>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div>
        <section class="style_2" style="background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
            <div class="container">
                <div class="row justify-content-between">
                  
                    <div class="col-lg-4 text-end d-none d-lg-block" title="About Us">
                        <img class="" style="max-width:120%;margin-top: 100px;" loading="lazy" src="{{ url('build/assets/images/aboutus/missionnew.png')}}" alt="about us" data-aos="fade-up" data-aos-delay="300"/>
                    </div>
                    <div class="col-lg-7">
                        <div class="row align-items-center justify-content-center my-5">
                            <div class="col-md-12">
                                <div class="mission" data-aos="zoom-in-up">
                                    <h3>Mission</h3>
                                    <p class="text-justify lead">
                                        Delivering cutting-edge IT solutions and advanced technology products, we empower large enterprises to tackle complex challenges with flexibility, responsiveness, and reliability. Our approach is built on fostering mutual growth, ensuring long-term success for your business with innovation at every step.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="vission" data-aos="fade-up" data-aos-delay="300">
                                    <h3>Vission</h3>
                                    <p class="text-justify lead">
                                        Our vision is to be a globally renowned IT company, trusted by customers for delivering exceptional service and innovative, value-driven ICT solutions. We are committed to empowering our employees, fostering strong customer partnerships, and consistently exceeding expectations with excellence and innovation at the core of everything we do.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="values" data-aos="fade-up" data-aos-delay="300" style="font-family: 'Open Sans' !important;">
                                    <h3>Values</h3>
                                    <!--<div class="d-md-flex gap-md-5 lead featurelist_content">-->
                                    <!--    <ul class="fa-ul mb-0">-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Respect-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Trust-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Consistent-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Integrity-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Innovation-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Discipline-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>Continues-->
                                    <!--            improvement-->
                                    <!--        </li>-->
                                    <!--        <li>-->
                                    <!--            <span class="fa-li primary_text" style="top:0;"></span>-->
                                    <!--            Customer Focus-->
                                    <!--        </li>-->

                                    <!--    </ul>-->
                                    <!--    <ul class="fa-ul">-->

                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <p class="text-justify lead">
                                        At Global Informatics Ltd., we are deeply committed to upholding values that reflect our dedication to excellence and our clients. We foster a culture built on <strong title="" class="" style="font-weight: 600"> Respect </strong> and <strong title="" class="" style="font-weight: 600"> Trust</strong>, ensuring that our team and clients can rely on us with confidence. Our <strong title="" class="" style="font-weight: 600">Integrity</strong> and <strong title="" class="" style="font-weight: 600">Discipline</strong> drive us to deliver consistently high standards in everything we do, while our focus on <strong title="" class="" style="font-weight: 600">Innovation</strong> empowers us to lead with creativity and adaptability in a rapidly evolving market. We are committed to <strong title="" class="" style="font-weight: 600">Continuous Improvement</strong>, constantly enhancing our methods and services to meet the ever-changing needs of our clients. At the heart of our efforts is a steadfast <strong title="" class="" style="font-weight: 600">Customer</strong> Focus, ensuring that we prioritize client satisfaction and aim to exceed expectations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    

@include('frontend.component.footer')
