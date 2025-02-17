<!-- Site footer -->
<style>
    .site-footer {
        background-color: #00568d;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #fff;
    }

    .site-footer hr {
        border-top-color: #fff;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #000;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #fff;
    }

    .site-footer a:hover {
        color: #010101;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #ffffff
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #fdfdfd;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #ffffff
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #ffffff;
        font-weight: 700;
        font-size: 13px
    }

    .social-icons a {
        background-color: #ffffff;
        color: #ffffff;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #29aafe
    }

    .social-icons.size-sm a {
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998
    }

    .social-icons a.twitter:hover {
        background-color: #00aced
    }

    .social-icons a.linkedin:hover {
        background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
        background-color: #ea4c89
    }

    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }

    }
</style>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h6 class="">Useful Links</h6>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-0">
                        <!-- <i class="fas fa-angle-right text-color-light"></i> -->
                        <a class="text-color-light" style="margin-left: 10px;" href="{{Route('About-Us')}}">About Us</a>
                    </li>
                    
                    <li class="mb-0">
                        <!-- <i class="fas fa-angle-right text-color-light"></i> -->
                        <a class="text-color-light" style="margin-left: 10px;" href="{{ Route('Why-us') }}">Why Us</a>
                    </li>
                    <li class="mb-0">
                        <!-- <i class="fas fa-angle-right text-color-light"></i> -->
                        <a class="text-color-light" style="margin-left: 10px;" href="{{ Route('clients') }}">Clients</a>
                    </li>
                    <li class="mb-0">
                        <!-- <i class="fas fa-angle-right text-color-light"></i> -->
                        <a class="text-color-light" style="margin-left: 10px;"
                            href="{{ Route('partnars') }}">Partners</a>
                    </li>
                    <li class="mb-0">
                        <!-- <i class="fas fa-angle-right text-color-light"></i> -->
                        <a class="text-color-light" style="margin-left: 10px;" href="{{ Route('Contact-us') }}">Let's
                            Talk</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h6 class="">Address</h6>
                <p class="text-justify">3rd Floor, Hannan Plaza, House: 02,
Road: 01/A, Sector: 09, Uttara,
Dhaka-1230
</p>
            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h6 class="">Contact Info</h6>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-2">
                        <img style="height: 25px;" src="{{ url('build/assets/images/footer/email.png')}}"
                            alt=" Mail">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="mailto:info@cslservicebd.com">info@cslservicebd.com</a>
                    </li>
                    <li class="mb-2">
                        <img style="height: 25px;"
                            src="{{ url('build/assets/images/footer/old-typical-phone.png')}}"
                            alt="IP Phone">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="tel:+8801893115555">+880 1893-11 55 55</a>
                    </li>
                    <li class="mb-0">
                        <img style="height: 25px;" src="{{ url('build/assets/images/footer/phone-call.png')}}"
                            alt=" Mobile">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="tel:+8801893115555">+880 1893-11 55 55</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h6 class="">Social Media</h6>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-2">
                        <img style="height: 25px;" src="{{ url('build/assets/images/footer/facebook.png')}}"
                            alt="">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="#">Facebook</a>
                    </li>
                    <li class="mb-2">
                        <img style="height: 25px;" src="{{ url('build/assets/images/footer/linkedin.png')}}"
                            alt="">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="#">LinkedIn</a>
                    </li>
                    <li class="mb-0">
                        <img style="height: 25px;" src="{{ url('build/assets/images/footer/youtube.png')}}"
                            alt="">
                        <a target="_blank" class="text-color-light" style="margin-left: 10px;"
                            href="#">Youtube</a>
                    </li>
                </ul>
            </div>


        </div>
        <hr>
    </div>
    <div id="scroll-top" class="d-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-up-short mt-1"
            viewbox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 12a.5.5 0 00.5-.5V5.7L10.6 8a.5.5 0 00.8-.8l-3-3a.5.5 0 00-.8 0l-3 3a.5.5 0 10.8.8l2.1-2.2v5.8a.5.5 0 00.5.5z">
            </path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="row py-4 text-center">
                <p class="copyright-text">Copyright &copy; 2025 All Rights Reserved By
                    <a href="#">CSL Service.</a>
                </p>
            </div>
        </div>
    </div>
</footer>
    <script src="{{ url('build/assets/js/lib.js') }}" ></script>
<script defer="" src="{{ url('build/assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 600, // Animation duration
        once: true, // Whether animation should happen only once while scrolling
    });

    /* Window Load START */
    $(window).on('load', function() {
        // Hide the loading area when the page is fully loaded
        setTimeout(function(){
            $('#loading-area').fadeOut();
        }, 1000);

    });
/*  Window Load END */
</script>

        <script>
        // Function to animate counters
        function animateCounter(counter) {
            const target = +counter.getAttribute('data-to');
            const increment = target / 200; // Speed of counting

            let currentCount = 0;
            const updateCount = () => {
                currentCount += increment;
                if (currentCount < target) {
                    counter.innerText = Math.ceil(currentCount);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target + '+';
                }
            };
            updateCount();
        }

        // IntersectionObserver to detect when counters are in view
        const counters = document.querySelectorAll('.counter strong');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter); // Stop observing once animated
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is visible
        });

        counters.forEach(counter => {
            observer.observe(counter); // Start observing each counter
        });
    </script>

    <!-- Parallax Script (using jQuery) -->
    <script>
        $(document).ready(function() {
            // Initialize parallax
            $('[data-plugin-parallax]').each(function() {
                var $this = $(this);
                var speed = $this.data('plugin-options') ? $this.data('plugin-options').speed : 0.5;

                $(window).on('scroll', function() {
                    var scrollTop = $(window).scrollTop();
                    var offset = -(scrollTop * speed);
                    $this.find('.parallax-background').css({
                        'transform': 'translate3d(0, ' + offset + 'px, 0)'
                    });
                });
            });
        });
    </script>



</body>


<!-- Mirrored from globalinformatics.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 04:43:13 GMT -->
</html>
