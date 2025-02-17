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
    <section class="position-relative style_2"
        style="padding: 50px 0; background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
        <span class="position-absolute" style="top: 0; right: 0px">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}"
                alt="Payment Pattern" />
        </span>
        <span class="position-absolute">
            <img class="img-fluid" loading="lazy" src="{{ url('build/images/Content/img/eCommerce/achive-bg.png')}}"
                alt="Payment Pattern" />
        </span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                    <img class="img-fluid position-relative" loading="lazy"
                        src="{{ url('build/images/solutions/accesscontrol.jpg')}}"
                        alt="Payment Gateway integration in Bangladesh" width="500" height="500" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section_title text-start">
                        Smart Access Control And Attendance System
                    </h2>
                    <p class="text-justify lead">
                        Access control enables you to control who has access to your building. Locks and keys also allow you
                        to secure your building, but when keys are lost or stolen, the inconvenience and expense of changing
                        locks and re-issuing keys can be considerable. Keys may also be copied, creating even more security
                        risks. <br>
                        While the structured cabling system represents a small portion of the overall network investment, it
                        can represent nearly 80% of your network efficiency. It’s also the bedrock upon which any
                        organization is built.
                        <br>
                        Electronic access control provides the most efficient and convenient way of securing your building
                        and assets. Installing an access control system means that you will never have to change a lock
                        again. Tokens are issued to allow access through the controlled doors, and are easily barred from
                        the system if they are lost, stolen or just not returned by someone who leaves your company. Barred
                        tokens will not allow access through the controlled doors.Once an access control system is
                        installed, all doors controlled by the system will automatically lock when the door is closed.
                        Anyone without a PIN or access token is unable to enter. If necessary, doors may be set to unlock
                        during a designated time frame.
                    </p>
                </div>
            </div>
        </div>
    </section>
@include('frontend.component.footer')