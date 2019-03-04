<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
        <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Sticky</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Sticky Top</h3>
                            <p>Sticky content depending on the scroll direction. When scrolling down content will be stuck to the top of the viewport.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <header class="header deepspace box-shadow sticky-top">
                                    <div class="container-fluid">
                                        <div class="header-inner-holder text-white">
                                            <a class="logo text-white" href="#">
                                                <h2 class="logo-name m-0">Logo</h2>
                                            </a>
                                            <nav  class="navbar">
                                                <ul class="nav horizontal">
                                                    <li class="active"><a href="#">Home</a></li>
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Portfolio</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </header>
                                <div class="main-content small-spacing">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus urna sit amet sollicitudin venenatis. Aenean odio tortor, varius vitae molestie eu, ultricies vel lacus. Nam viverra fermentum dapibus. Nulla at semper diam. Phasellus sit amet hendrerit sapien, non semper felis. Morbi augue leo, mattis nec leo sed, malesuada porta dui. Maecenas pretium eros quis lorem luctus gravida.</p>
                                    <p>Sed gravida quam odio, euismod accumsan mauris ornare quis. Duis sed condimentum justo. Phasellus ac dui eget velit bibendum viverra. Aenean porttitor commodo diam, quis interdum mi sagittis lobortis. Donec id ipsum dignissim, pharetra nunc sit amet, porttitor elit. Donec iaculis elit et enim interdum, ac laoreet lorem consequat. Sed eu elit ut quam pellentesque cursus. Integer sed condimentum est. Integer tempor placerat bibendum. Sed ut semper arcu, at porttitor nibh. Fusce vulputate pharetra tellus a laoreet. Cras imperdiet enim sed turpis adipiscing placerat. Vestibulum ut rhoncus mauris. In egestas ullamcorper dolor vitae suscipit. Curabitur non orci rutrum, iaculis ligula quis, sollicitudin neque. Aliquam dapibus dignissim tincidunt.</p>
                                    <p>Suspendisse at urna mauris. Vivamus eu lectus et quam viverra accumsan quis nec ligula. Aliquam sed mi sit amet arcu convallis bibendum id eu lorem. Sed pretium eget nibh egestas consectetur. Sed adipiscing, libero sed molestie laoreet, arcu tortor elementum ligula, nec commodo ipsum augue ut tellus. Morbi nibh mauris, facilisis vel bibendum vehicula, dignissim in tortor. Suspendisse augue urna, vestibulum at orci nec, scelerisque cursus mi. Proin congue eget justo et mattis.</p>
                                </div>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;header class=&quot;header deepspace box-shadow sticky-top&quot;&gt;
        &lt;div class=&quot;container-fluid&quot;&gt;
            &lt;div class=&quot;header-inner-holder text-white&quot;&gt;
                &lt;a class=&quot;logo text-white&quot; href=&quot;#&quot;&gt;
                    &lt;h2 class=&quot;logo-name m-0&quot;&gt;Logo&lt;/h2&gt;
                &lt;/a&gt;
                &lt;nav  class=&quot;navbar&quot;&gt;
                    &lt;ul class=&quot;nav horizontal&quot;&gt;
                        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/nav&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/header&gt;
    &lt;div class=&quot;main-content small-spacing&quot;&gt;
        &lt;p&gt;Tetx...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </pre>
                        </div>

                    <div class="outputs">
                            <h3>Sticky Bottom</h3>
                            <p>Sticky content depending on the scroll direction. When scrolling up content will be stuck to the bottom of the viewport.</p>
                            <p><strong>Output:</strong></p>
                                <div class="container-fixed">
                                <div class="main-content small-spacing">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus urna sit amet sollicitudin venenatis. Aenean odio tortor, varius vitae molestie eu, ultricies vel lacus. Nam viverra fermentum dapibus. Nulla at semper diam. Phasellus sit amet hendrerit sapien, non semper felis. Morbi augue leo, mattis nec leo sed, malesuada porta dui. Maecenas pretium eros quis lorem luctus gravida.</p>
                                <p>Sed gravida quam odio, euismod accumsan mauris ornare quis. Duis sed condimentum justo. Phasellus ac dui eget velit bibendum viverra. Aenean porttitor commodo diam, quis interdum mi sagittis lobortis. Donec id ipsum dignissim, pharetra nunc sit amet, porttitor elit. Donec iaculis elit et enim interdum, ac laoreet lorem consequat. Sed eu elit ut quam pellentesque cursus. Integer sed condimentum est. Integer tempor placerat bibendum. Sed ut semper arcu, at porttitor nibh. Fusce vulputate pharetra tellus a laoreet. Cras imperdiet enim sed turpis adipiscing placerat. Vestibulum ut rhoncus mauris. In egestas ullamcorper dolor vitae suscipit. Curabitur non orci rutrum, iaculis ligula quis, sollicitudin neque. Aliquam dapibus dignissim tincidunt.</p>
                                <p>Suspendisse at urna mauris. Vivamus eu lectus et quam viverra accumsan quis nec ligula. Aliquam sed mi sit amet arcu convallis bibendum id eu lorem. Sed pretium eget nibh egestas consectetur. Sed adipiscing, libero sed molestie laoreet, arcu tortor elementum ligula, nec commodo ipsum augue ut tellus. Morbi nibh mauris, facilisis vel bibendum vehicula, dignissim in tortor. Suspendisse augue urna, vestibulum at orci nec, scelerisque cursus mi. Proin congue eget justo et mattis.</p>
                                </div>
                                <header class="header deepspace box-shadow sticky-bottom">
                                    <div class="container-fluid">
                                        <div class="header-inner-holder text-white">
                                            <a class="logo text-white" href="#">
                                                <h2 class="logo-name m-0">Logo</h2>
                                            </a>
                                            <nav  class="navbar">
                                                <ul class="nav horizontal">
                                                    <li class="active"><a href="#">Home</a></li>
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Portfolio</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </header>
                            </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;div class=&quot;main-content small-spacing&quot;&gt;
        &lt;p&gt;Tetx...&lt;/p&gt;
    &lt;/div&gt;
    &lt;header class=&quot;header deepspace box-shadow sticky-bottom&quot;&gt;
        &lt;div class=&quot;container-fluid&quot;&gt;
            &lt;div class=&quot;header-inner-holder text-white&quot;&gt;
                &lt;a class=&quot;logo text-white&quot; href=&quot;#&quot;&gt;
                    &lt;h2 class=&quot;logo-name m-0&quot;&gt;Logo&lt;/h2&gt;
                &lt;/a&gt;
                &lt;nav  class=&quot;navbar&quot;&gt;
                    &lt;ul class=&quot;nav horizontal&quot;&gt;
                        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/nav&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/header&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>