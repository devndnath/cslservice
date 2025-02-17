@include('frontend.component.header')
@include('frontend.component.nav')

        <section class="position-relative style_2 overflow-hidden" style="background: linear-gradient(84deg, rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
            <div class="hero_shape_wrapper">
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
                            <span class="primary_text">Award & Certificates</span>
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

            #pcontainer-award {
                overflow: hidden !important;
                padding: 2.5% !important;
                position: static;
                width: 100%;
                /* box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); */
                border: 1px solid lightgray;
                height: 100%;
            }
            #pcontainer-award img {
                display: block;
                transition: transform .4s;
                /* smoother zoom */
                margin-left: auto;
                margin: auto;
                width:100%;
            }

            #pcontainer-award:hover img {
                transform: scale(1.05);
                transform-origin: 50% 50%;
            }
        </style>
        <section class="style_2" style="padding:50px 0;background: linear-gradient(84deg, rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
            <div class="container" style="">
                <div class="row row-about-bottom">
                    <div class="col-12">
                        <div class="col-12" style="text-align: left;">
                            <div class="brand-img-container">
                                <div class="row" style="background-color: rgba(255,255,255,0.2);padding:5px">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="NORDEN Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/1.png')}}" alt="NORDEN Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    NORDEN Authorized Distributor for Bangladesh
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="Hewlett Packard Enterprise Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/2.png')}}" alt="Hewlett Packard Enterprise Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    Hewlett Packard Enterprise Authorized Distributor for Bangladesh
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="DELL Technologies Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/3.png')}}" alt="DELL Technologies Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    DELL Technologies Authorized Distributor for Bangladesh
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="HUAWEI Authorized Distributor for Bangladesh.">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/5.png')}}" alt="HUAWEI Authorized Distributor for Bangladesh."><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    HUAWEI Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="CISCO Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/6.png')}}" alt="CISCO Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    CISCO Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="FORTINET Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/7.png')}}" alt="FORTINET Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    FORTINET Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="BDCOM Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/8.png')}}" alt="BDCOM Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    BDCOM Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="NETGEAR Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/4.png')}}" alt="NETGEAR Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    NETGEAR Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-12"
                                        style="text-align:center;padding-top:1%;padding-bottom:1%;">
                                        <a href="#" style="text-decoration:none" title="SOPHOS Authorized Distributor for Bangladesh">
                                            <div id="pcontainer-award">
                                                <img src="{{ url('build/assets/images/certificates/9.png')}}" alt="SOPHOS Authorized Distributor for Bangladesh"><br>
                                                <h3 style="font-size: 18px;color:black">
                                                    SOPHOS Authorized Distributor for Bangladesh.
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('frontend.component.footer')

