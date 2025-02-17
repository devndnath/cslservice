
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
        <section class="position-relative style_2 overflow-hidden" style="background: linear-gradient(84deg, rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
            <div class="hero_shape_wrapper">
            <img class="img-fluid shape shape1" loading="lazy" src="{{ url('build/images/Content/img/ssl/1.png')}}" alt="shape" />
                <img class="img-fluid shape shape2" loading="lazy" src="{{ url('build/images/Content/img/ssl/2.png')}}" alt="shape" />
                <img class="img-fluid shape shape3" loading="lazy" src="{{ url('build/images/Content/img/ssl/3.png')}}" alt="shape" />
                <img class="img-fluid shape shape4" loading="lazy" src="{{ url('build/images/Content/img/ssl/4.png')}}" alt="shape" />
                <img class="img-fluid shape shape5" loading="lazy" src="{{ url('build/images/Content/img/ssl/5.png')}}" alt="shape" />
                <img class="img-fluid shape shape6" loading="lazy" src="{{ url('build/images/Content/img/ssl/6.png')}}" alt="shape" />
                <img class="img-fluid shape shape7" loading="lazy" src="{{ url('build/images/Content/img/ssl/7.png')}}" alt="shape" />
                <img class="img-fluid shape shape8" loading="lazy" src="{{ url('build/images/Content/img/ssl/8.png')}}" alt="shape" />
                <img class="img-fluid shape shape9" loading="lazy" src="{{ url('build/images/Content/img/ssl/9.png')}}" alt="shape" />
                <img class="img-fluid shape shape10" loading="lazy" src="{{ url('build/images/Content/img/ssl/10.png')}}" alt="shape" />
                <img class="img-fluid shape shape11" loading="lazy" src="{{ url('build/images/Content/img/ssl/11.png')}}" alt="shape" />
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center" style="padding: 100px 0">
                    <div class="col-lg-10 text-center">
                        <h1 class="slide-title">
                            <span class="primary_text">Our Partners</span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div>
        <style>
            .anim_ouline_btn:before {
                background: var(--primary);
            }
        </style>
        <section class="style_2 py-5" style="background: linear-gradient(84deg, rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                        <a href="#" title="BDCOM">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                <img src="{{ url('build/assets/images/partnerlist/Bdcom.png')}}" alt="BDCOM" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                        <a href="#" title="Cisco">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                <img src="{{ url('build/assets/images/partnerlist/Cisco.png')}}" alt="Cisco" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                        <a href="#" title="Paloalt">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                    <img src="{{ url('build/assets/images/partnerlist/Paloalto.png')}}" alt="Paloalto" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                        <a href="#" title="Prose">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                <img src="{{ url('build/assets/images/partnerlist/Prose.png')}}" alt="Prose" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-4" data-aos="zoom-in-up">
                        <a href="#" title="Rosenberger">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                <img src="{{ url('build/assets/images/partnerlist/Rosenberger.png')}}" alt="Rosenberger" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-4 " data-aos="zoom-in-up">
                        <a href="#" title="Sophos">
                            <div class="card_2 shadow-sm mb-3 border-left p-2" style="border-left: 2px solid #00568d;background:rgb(157 201 216 / 17%)">
                                <img src="{{ url('build/assets/images/partnerlist/Sophos.png')}}" alt="Sophos" class="img-fluid" loading="lazy">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('frontend.component.footer')

  