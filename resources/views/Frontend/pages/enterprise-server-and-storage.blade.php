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
                    <img class="img-fluid position-relative" loading="lazy" src="{{ url('build/images/solutions/server-%26-stroge.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Enterprise Server & Storage
                    </h2>
                    <p class="text-justify lead">
                        Data Storage Solutions are required to store the data electronically and making it machine readable. The purpose of these solutions is making data storage and access easy and reliable. The digital data excels in paperless data management.
                        <br>
                        Disk/ Storage Array contains drives and cache memory for a file, block, and object storage over dedicated storage hardware like spinning and solid hard disk drives, HDD and SSD. The standard disk array includes cache memory, controllers, disk enclosures, and power supply. A disk array distributes data efficiently on the multiple drives and allows flexible data management with improved data availability and recovery.Data Storage Solutions are required to store the data electronically and making it machine readable. The purpose of these solutions is making data storage and access easy and reliable. The digital data excels in paperless data management.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h2 class="section_title text-start" style="font-size: 20px;">
                        Benefits of Switching and Routing
                    </h2>
                    <h6>Equal access to applications</h6>

                    <p class="text-justify lead">
                        Using switching and routing technologies allows your staff, even those located in different locations, to have equal access to all your business applications, information and tools. Keeping everyone connected to the same tools increases employee productivity.
                    </p>

                    <h6>Quick access to information</h6>

                    <p class="text-justify lead">
                        Accurate, timely information is essential for making prudent business decisions. Switching and routing provides access to allow greater visibility into real-time business information and provides a sound basis for effective decision-making.
                    </p>

                    <h6>Enhanced customer service</h6>

                    <p class="text-justify lead">
                        Today’s customers expect rapid responses and personalized services whenever they’re dealing with your business, either by phone, email or on a website. A responsive, reliable network gives your employees speedy access to customer information, and enables them to respond rapidly and intelligently to resolve customer requirements.
                    </p>
                    <h6>Reduced operating costs</h6>

                    <p class="text-justify lead">
                        Switching and routing technologies can make a positive impact on your bottom line. You can save expenses by sharing equipment, such as printers and servers, and services, such as internet access. A reliable network has the ability to scale with your business, saving any replacement costs as your needs grow.
                    </p>

                    <h6>Improved security</h6>

                    <p class="text-justify lead">
                        Because high-speed internet connections are always on, it makes your network vulnerable to security threats. Viruses, spyware, internet attacks, e-mail assaults, and other security concerns are real dangers. A networking solution with switches and routers protects valuable business data.
                    </p>
                    <h6>Enables remote connections</h6>

                    <p class="text-justify lead">
                        Globalization has changed the way we work. Virtual teams, mobile workers, and home-based telecommuters all need to share information at any time. Switching and routing helps employees, suppliers, partners and customers connect regardless of location. With remote connectivity through a VPN, employees can securely access company resources and tools and work more productively.
                    </p>
                </div>
            </div>
        </div>
    </section>
@include('frontend.component.footer')
