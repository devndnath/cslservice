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
        <section class="position-relative style_2 overflow-hidden" style="background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
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
                            <span class="primary_text">Our</span> Clients
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
        <section class="style_2" style="padding:50px 0; background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
            <div class="container" style="">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="section_title text-start" style="font-size: 40px;">Our <span
                            class="brand_secondary_text">Valuable Clients</span> in Bangladesh</h2>
                </div>
                <div class="row pt-3 justify-content-around">
                    <div class="row pt-3 justify-content-around">
                        <div class="row pt-3 justify-content-around">
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center"
                                    href="#" title="ACME" rel="nofollow">
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
                                <a class="d-flex align-items-center justify-content-center"
                                    href="#" title="AKH Group" rel="nofollow">
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
                                    href="#" title="বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি)" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BPATC.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি)" width="150"
                                            height="150" style="height: 60px; object-fit: cover;"
                                            title="বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি) - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি)</p>
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
                                            title="AKH Group - Client Of Global Informatics Ltd.">
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
                                            title="Bangaldesh Gas &amp; Fields Company Ltd. - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Bangaldesh Gas &amp;
                                            Fields
                                            Company Ltd.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Amin Mohammad &amp; Lands Development Ltd."
                                    rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Amin%20Mohammad.png')}}"
                                            class="img-fluid client-img" loading="lazy"
                                            alt="Amin Mohammad &amp; Lands Development Ltd." width="150"
                                            height="150" style="height: 60px; object-fit: cover;"
                                            title="Amin Mohammad &amp;
                                            Lands Development Ltd. - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Amin Mohammad &amp;
                                            Lands Development Ltd.</p>
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
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Apex Agriscience Ltd.
                                        </p>
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
                                <a class="d-flex align-items-center justify-content-center"
                                    href="#" title="Girls Guide Association" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Girls_guide_association.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Girls Guide Association"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Girls Guide Association - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Girls Guide Association
                                        </p>
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
                                            title="BMW Bangladesh - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">BMW Bangladesh    </p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="IFAD Motors Limited" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/IFAD_motors.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="IFAD Motors Limited"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="IFAD Motors Limited - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">IFAD Motors Limited    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Bangladesh University of Professionals (BUP)" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BUP.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Bangladesh University of Professionals (BUP)"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Bangladesh University of Professionals (BUP) - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Bangladesh University of Professionals (BUP)    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="BRB Hospital Limited" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BRB.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="BRB Hospital Limited"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="BRB Hospital Limited - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">BRB Hospital Limited    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Building Technology & Ideas Ltd" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BTI.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Building Technology & Ideas Ltd"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Building Technology & Ideas Ltd - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Building Technology & Ideas Ltd    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="BURO Bangladesh" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BURO.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="BURO Bangladesh"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="BURO Bangladesh - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">BURO Bangladesh    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Chartered Life Insurance Company Ltd" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Chartered.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Chartered Life Insurance Company Ltd"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Chartered Life Insurance Company Ltd - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Chartered Life Insurance Company Ltd    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Chittagong University of Engineering & Technology" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/CUET.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Chittagong University of Engineering & Technology"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Chittagong University of Engineering & Technology - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Chittagong University of Engineering & Technology    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Debonair Group" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Debonair.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Debonair Group"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Debonair Group - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Debonair Group    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Dhaka Group" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Dhaka_Group.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Dhaka Group"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Dhaka Group - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Dhaka Group   </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Directorate of Technical Education" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/DTE.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Directorate of Technical Education"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Directorate of Technical Education - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Directorate of Technical Education    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Elite Garments Industries ltd" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Elite.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Elite Garments Industries ltd"
                                            width="150" height="150" style="height: 57px; object-fit: cover;"
                                            title="Elite Garments Industries ltd - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Elite Garments Industries ltd    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Executive Woodworks Limited" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/EWL.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Executive Woodworks Limited"
                                            width="150" height="150" style="height: 58px; object-fit: cover;"
                                            title="Executive Woodworks Limited - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Executive Woodworks Limited    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="General Pharmaceuticals Ltd" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/General.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="General Pharmaceuticals Ltd"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="General Pharmaceuticals Ltd - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">General Pharmaceuticals Ltd    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Blue Planet Group" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/BPG.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Blue Planet Group"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Blue Planet Group - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Blue Planet Group    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Grant Thornton" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Grant_thornton.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Grant Thornton"
                                            width="150" height="150" style="height: 60px; object-fit: cover;"
                                            title="Grant Thornton - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Grant Thornton    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="Grameen Telecom Trust" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/Grameen_Telecom.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="Grameen Telecom Trust"
                                            width="150" height="150" style="height: 90px; object-fit: cover;"
                                            title="Grameen Telecom Trust - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">Grameen Telecom Trust    </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv" data-aos="zoom-in-down">
                                <a class="d-flex align-items-center justify-content-center" href="#"
                                    title="GME Group" rel="nofollow">
                                    <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                        style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                        <img src="{{ url('build/assets/images/clients/GME.png')}}"
                                            class="img-fluid client-img" loading="lazy" alt="GME Group"
                                            width="150" height="150" style="height: 55px; object-fit: cover;"
                                            title="GME Group - Client Of Global Informatics Ltd.">
                                        <p class="text-center mt-2 mb-0" style="font-size: 12px;">GME Group    </p>
                                    </div>
                                </a>
                            </div>
                           

        </section>
    </div>

@include('frontend.component.footer')
  