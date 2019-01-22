<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <!-- header ends -->
        <?php include 'header.php'; ?>
        <section class="fullscreen-hero-banner flex flex-center flex-middle">
            <div class="banner-content">
                <span class="rounded heading-circle bg-white flex flex-middle flex-center big-btn">WUI</span>
                <h2>WebUIKit</h2>
                <p>A lightweight and modular front-end framework <br>for developing fast and powerful web interfaces.</p>
                <div class="btn-group">
                    <a href="buttons.php" class="button btn-olive border-rounded medium-btn">Get Started</a>
                    <a href="https://github.com/harishbhati/UI-Components" class="button basic white border-rounded medium-btn">Github</a>
                </div>
            </div>
            <canvas id="particles-js" class="background"></canvas>
        </section>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="http://www.themesindustry.com/html/webox/js/particles.min.js"></script>
        <script>
                jQuery(function ($) {
                   "use strict";
                   /* Initializing Particles */
                         Particles.init({
                            selector: '#particles-js',
                            color: '#ffffff',
                            connectParticles: false,
                            sizeVariations: 8,
                            maxParticles: 200,
                         });
                });
        </script>
    </body>
</html>