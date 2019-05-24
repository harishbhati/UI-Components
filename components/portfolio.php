<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body class="inner-scroll">
        <?php include 'header.php'; ?>
        <section class="sidebar-content-holder sidebar-left">
            <?php include 'sidebar.php'; ?>
            <main class="content nicescroll-block">
                <div class="page-title-block">
                    <h1 class="page-title">Portfolio Block</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Portfolio</h3>
                            <p>A Portfolio block which are used to filter block catagory.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <section class="sidebar-content-holder sidebar-left box-shadow">
                                    <section class="portfolio">
                                        <input type="radio" id="reset" name="color" checked/>
                                        <label for="reset">All</label>
                                        
                                        <input type="radio" id="tile1" name="color" />
                                        <label for="tile1">Web Design</label>
                                        
                                        <input type="radio" id="tile2" name="color"/>
                                        <label for="tile2">Web Development</label>
                                        
                                        <input type="radio" id="tile3" name="color"/>
                                        <label for="tile3">Mobile</label>
                                        
                                        <div class="tile tile1"><img src="https://themeforest.img.customer.envatousercontent.com/files/145321/01_Homepage.__large_preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&max-h=8000&max-w=590&s=5bb15f95397f5a6f51c82c860f5f7205"></div>
                                        <div class="tile tile1"><img src="https://spyrestudios.com/wp-content/uploads/web-designer-portfolio-ryan-scherf-700.png"></div>
                                        <div class="tile tile1"><img src="https://themeforest.img.customer.envatousercontent.com/files/238869474/Preview+Images/0_preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=b1be19f26dee2af80b1a193b4bddf939"></div>
                                        <div class="tile tile1"><img src="https://themeforest.img.customer.envatousercontent.com/files/145321/01_Homepage.__large_preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&max-h=8000&max-w=590&s=5bb15f95397f5a6f51c82c860f5f7205"></div>
                                        <div class="tile tile2"><img src="https://www.eternalorganizer.com/wp-content/uploads/2017/09/Web-1.jpg"></div>
                                        <div class="tile tile2"><img src="http://www.broadwavestudios.com/wp-content/uploads/2012/08/technology_hero.jpg"></div>
                                        <div class="tile tile2"><img src="https://www.eternalorganizer.com/wp-content/uploads/2017/09/Web-1.jpg"></div>
                                        <div class="tile tile2"><img src="https://www.eternalorganizer.com/wp-content/uploads/2017/09/Web-1.jpg"></div>
                                        <div class="tile tile2"><img src="http://www.broadwavestudios.com/wp-content/uploads/2012/08/technology_hero.jpg"></div>
                                        <div class="tile tile1"><img src="http://www.pavan.org/images/portfolio/meatthebrand.jpg"></div>
                                        <div class="tile tile3"><img src="https://boostonemobile.com/wp-content/uploads/2014/08/mobile-technology.jpg"></div>
                                        <div class="tile tile3"><img src="http://www.businessofapps.com/wp-content/uploads/2017/09/konstnat_tech_future_-mobile_tech.jpg"></div>
                                        <div class="tile tile3"><img src="http://img.cdn2.vietnamnet.vn/Images/english/2015/08/25/07/20150825072635-mobility.jpg"></div>
                                        <div class="tile tile3"><img src="https://boostonemobile.com/wp-content/uploads/2014/08/mobile-technology.jpg"></div>
                                        <div class="tile tile3"><img src="http://www.businessofapps.com/wp-content/uploads/2017/09/konstnat_tech_future_-mobile_tech.jpg"></div>
                                        <div class="tile tile1"><img src="https://spyrestudios.com/wp-content/uploads/web-designer-portfolio-ryan-scherf-700.png"></div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
                        &lt;section class=&quot;portfolio&quot;&gt;
                            &lt;input type=&quot;radio&quot; id=&quot;reset&quot; name=&quot;color&quot; checked/&gt;
                            &lt;label for=&quot;reset&quot;&gt;All&lt;/label&gt;
                            
                            &lt;input type=&quot;radio&quot; id=&quot;tile1&quot; name=&quot;color&quot; /&gt;
                            &lt;label for=&quot;tile1&quot;&gt;Web Design&lt;/label&gt;
                            
                            &lt;input type=&quot;radio&quot; id=&quot;tile2&quot; name=&quot;color&quot;/&gt;
                            &lt;label for=&quot;tile2&quot;&gt;Web Development&lt;/label&gt;
                            
                            &lt;input type=&quot;radio&quot; id=&quot;tile3&quot; name=&quot;color&quot;/&gt;
                            &lt;label for=&quot;tile3&quot;&gt;Mobile&lt;/label&gt;
                            
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile2&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile2&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile2&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile2&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile2&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile3&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile3&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile3&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile3&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile3&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;tile tile1&quot;&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/section&gt;
                        </pre>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>