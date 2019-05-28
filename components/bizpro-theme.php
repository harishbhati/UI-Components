<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <!--Start Header-->
        <header class="header deepspace box-shadow tiny-tb-spacing">
            <div class="container-fixed">
                <div class="header-inner-holder text-white">
                    <a class="logo text-white" href="#">
                        <h2 class="logo-name m-0">BizPro</h2>
                    </a>
                    <nav  class="navbar">
                        <ul class="nav horizontal">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!--End Header-->
        <!--Start Slider-->
        <section class="slider" id="home">
            <input type="radio" name="slider" id="slide1" checked />
            <input type="radio" name="slider" id="slide2" />
            <div class="slides">
                <div class="inner">
                    <article>
                        <img src="../images/slide-1.jpg" alt="slide1"/>
                    </article>
                    <article>
                        <img src="../images/slide-2.jpg" alt="slide2"/>
                    </article>
                </div>
            </div>
            <div class="active">
                <label for="slide1"></label>
                <label for="slide2"></label>
            </div>
        </section>
        <!--End Slider-->
        <!--Start About-->
        <section class="about-us medium-tb-spacing" id="about">
            <div class="container-fixed">
                <div class="about-title">
                    <h2 class="section-title title-center text-center">ABOUT OUR BIZPRO</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                    </p>
                </div>
                <div class="grid-row">
                    <div class="col-4">
                        <div class="small-spacing text-center border border-black">
                            <div class="icon-block font-x2 rounded bg-black-light text-white">
                                <span class="icon-display"></span>
                            </div>
                            <h3>Web Designing</h3>
                            <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="#" title="More Detail" class="button basic black inverted">More Detail</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="small-spacing text-center border border-black">
                            <div class="icon-block font-x2 rounded bg-black-light text-white">
                                <span class="icon-codepen"></span>
                            </div>
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="#" title="More Detail" class="button basic black inverted">More Detail</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="small-spacing text-center border border-black">
                            <div class="icon-block font-x2 rounded bg-black-light text-white">
                                <span class="icon-mobile"></span>
                            </div>
                            <h3>Mobile Applications</h3>
                            <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="#" title="More Detail" class="button basic black inverted">More Detail</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="small-spacing text-center border border-black">
                            <div class="icon-block font-x2 rounded bg-black-light text-white">
                                <span class="icon-lifebuoy"></span>
                            </div>
                            <h3>Digital Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="#" title="More Detail" class="button basic black inverted">More Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Start Services-->
        <section class="services medium-tb-spacing bg-black-light" id="services">
            <div class="container-fixed">
                <div class="services-title text-white">
                    <h2 class="section-title title-center text-center">SERVICES WE PROVIDE</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                    </p>
                </div>
                <div class="grid-row">
                    <div class="col-3">
                        <div class="large-tb-spacing text-center border border-white text-white">
                            <div class="font-x2">
                                <span class="icon-display"></span>
                            </div>
                            <h3>Web Designing</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="large-tb-spacing text-center border border-white text-white">
                            <div class="font-x2">
                                <span class="icon-codepen"></span>
                            </div>
                            <h3>Web Development</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="large-tb-spacing text-center border border-white text-white">
                            <div class="font-x2">
                                <span class="icon-mobile"></span>
                            </div>
                            <h3>Mobile Applications</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Services-->
        <!--Start Portfolio-->
        <section class="portfolio-section medium-tb-spacing" id="portfolio">
            <div class="container-fixed">
                <div class="portfolio-title">
                    <h2 class="section-title title-center text-center">OUR AWESOME PROJECTS</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                    </p>
                </div>
                <div class="portfolio">
                    <input type="radio" id="reset" name="color" checked/>
                    <label for="reset">All</label>
                    
                    <input type="radio" id="tile1" name="color" />
                    <label for="tile1">Web Design</label>
                    
                    <input type="radio" id="tile2" name="color"/>
                    <label for="tile2">Web Development</label>
                    
                    <input type="radio" id="tile3" name="color"/>
                    <label for="tile3">Mobile</label>
                    
                    <div class="tile tile1"><img src="../images/1.jpg" title="portfolio 1"></div>
                    <div class="tile tile1"><img src="../images/2.jpg" title="portfolio 2"></div>
                    <div class="tile tile1"><img src="../images/3.jpg" title="portfolio 3"></div>
                    <div class="tile tile2"><img src="../images/4.jpg" title="portfolio 4"></div>
                    <div class="tile tile2"><img src="../images/5.jpg" title="portfolio 5"></div>
                    <div class="tile tile2"><img src="../images/6.jpg" title="portfolio 6"></div>
                    <div class="tile tile3"><img src="../images/7.jpg" title="portfolio 7"></div>
                    <div class="tile tile3"><img src="../images/8.jpg" title="portfolio 8"></div>
                    <div class="tile tile3"><img src="../images/9.jpg" title="portfolio 9"></div>
                </div>
            </div>
        </section>
        <footer class="bg-black-light">
            <div class="container-fixed text-center tiny-tb-spacing">
                <h4 class="text-orange font-x3">BizPro</h4>
                <p class="text-white tiny-tb-spacing">Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top - $('header').height()
                    }, 1000);
                }
                }
            });
        </script>
    </body>
</html>