@include('frontend.component.header') 
@include('frontend.component.nav') 
@include('frontend.component.background') 
  
     
         <div class="container">
                <div class="row align-items-center justify-content-center" style="padding: 100px 0">
                    <div class="col-lg-10 text-center">
                        <h1 class="slide-title">
                            <span class="primary_text">Why Us</span>
                        </h1>
                    </div>
                </div>
            </div>
        <section class="position-relative style_2" style="background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
            <div class="container">
                <div class="row align-items-center" style="padding-bottom: 75px">
                    <div class="col-lg-7" style="z-index: 0">
                        <div class="mt-3">
                            <p class="lead text-justify pt-4" style="font-size: 23px">
                                "Why settle for ordinary when you can experience extraordinary? At CSL Service, we redefine IT solutions with cutting-edge technology, tailored strategies, and a relentless commitment to your success. From robust software development to seamless integration, we empower businesses to thrive in the digital age. Choose us where innovation meets excellence, and your vision becomes reality." - Why Choose Us!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end d-none d-lg-block" title="Why Global Informatics Limited">
                        <img class="" style="max-width:120%;" loading="lazy" src="{{ url('build/assets/images/whyus/Why%20Us.svg')}}" alt="Why Global Informatics Limited" width="900" height="600" data-aos="fade-up" data-aos-delay="300"/>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div>
        <section class="style_2" style="padding: 75px 0; background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
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
                            <!-- <i class="fas fa-coffee" style="font-size: 40px;"></i> -->
                            <strong style="font-size: 40px;" data-to="1000"></strong>
                            <h3>Projects</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <!-- <i class="far fa-chart-bar" style="font-size: 40px;"></i> -->
                            <strong style="font-size: 40px;" data-to="50"></strong>
                            <h3>Team Members</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include('frontend.component.footer')

