
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
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/lan.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                         Structure Local Area Network (LAN)<span class="theme_secondary_color"></span>
                    </h2>
                    <p class="text-justify lead">
                        In today’s fast pace work environments, businesses are putting more and more data applications on their networks such as voice, data and video. The infrastructure that supports this communication technology needs to always be in consistent working order.
                        <br>
                        While the structured cabling system represents a small portion of the overall network investment, it can represent nearly 80% of your network efficiency. It’s also the bedrock upon which any organization is built.
                        <br>
                        Most networks that we encounter are running at 10/100 megabit per second speeds which is very slow for the amount of network bandwidth applications are using today. Many of our customers are upgrading their networks to a Gigabit network and others are considering 10 Gigabit speeds for future needs.
                        <br>
                        CSL Service specializes in the highest quality installation of all forms of certified voice and data cabling including Category 5e, Category 6, fiber-optic, buried, aerial and for wireless networks.
                    </p>
                </div>
            </div>
        </div>
    </section>

@include('frontend.component.footer')