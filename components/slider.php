<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body class="inner-scroll">
        <?php include 'header.php'; ?>
        <section class="sidebar-content-holder sidebar-left">
            <?php include 'sidebar.php'; ?>
            <main class="content nicescroll-block">
                <div class="page-title-block">
                    <h1 class="page-title">Slider Block</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Slider 1</h3>
                            <p>A Slider block which have only bullets controls.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fluid">
                                <section class="sidebar-content-holder sidebar-left box-shadow">
                                    <section class="slider">
                                        <input type="radio" name="slider" id="slide1" checked />
                                        <input type="radio" name="slider" id="slide2" />
                                        <input type="radio" name="slider" id="slide3" />
                                        <input type="radio" name="slider" id="slide4" />
                                        <input type="radio" name="slider" id="slide5" />
                                        <div class="slides">
                                            <div class="inner">
                                                <article>
                                                    <img src="http://lorempixel.com/600/400/food" />
                                                </article>
                                                <article>
                                                    <img src="http://lorempixel.com/600/400/" />
                                                </article>
                                                <article>
                                                    <img src="http://lorempixel.com/600/400/sports" />
                                                </article>
                                                <article> 
                                                    <img src="http://lorempixel.com/600/400/cats" />
                                                </article>
                                                <article>
                                                    <img src="http://lorempixel.com/600/400/fashion" />
                                                </article>
                                            </div>
                                        </div>
                                        <div class="active">
                                            <label for="slide1"></label>
                                            <label for="slide2"></label>
                                            <label for="slide3"></label>
                                            <label for="slide4"></label>
                                            <label for="slide5"></label>
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                        <p><strong>Code Example:</strong></p>
                        <pre class="markup">
&lt;section class=&quot;slider&quot;&gt;
    &lt;input type=&quot;radio&quot; name=&quot;slider&quot; id=&quot;slide1&quot; checked /&gt;
    &lt;input type=&quot;radio&quot; name=&quot;slider&quot; id=&quot;slide2&quot; /&gt;
    &lt;input type=&quot;radio&quot; name=&quot;slider&quot; id=&quot;slide3&quot; /&gt;
    &lt;input type=&quot;radio&quot; name=&quot;slider&quot; id=&quot;slide4&quot; /&gt;
    &lt;input type=&quot;radio&quot; name=&quot;slider&quot; id=&quot;slide5&quot; /&gt;
    &lt;div class=&quot;slides&quot;&gt;
        &lt;div class=&quot;inner&quot;&gt;
            &lt;article&gt;
                &lt;img src=&quot;http://lorempixel.com/600/400/food&quot; /&gt;
            &lt;/article&gt;
            &lt;article&gt;
                &lt;img src=&quot;http://lorempixel.com/600/400/&quot; /&gt;
            &lt;/article&gt;
            &lt;article&gt;
                &lt;img src=&quot;http://lorempixel.com/600/400/sports&quot; /&gt;
            &lt;/article&gt;
            &lt;article&gt; 
                &lt;img src=&quot;http://lorempixel.com/600/400/cats&quot; /&gt;
            &lt;/article&gt;
            &lt;article&gt;
                &lt;img src=&quot;http://lorempixel.com/600/400/fashion&quot; /&gt;
            &lt;/article&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;active&quot;&gt;
        &lt;label for=&quot;slide1&quot;&gt;&lt;/label&gt;
        &lt;label for=&quot;slide2&quot;&gt;&lt;/label&gt;
        &lt;label for=&quot;slide3&quot;&gt;&lt;/label&gt;
        &lt;label for=&quot;slide4&quot;&gt;&lt;/label&gt;
        &lt;label for=&quot;slide5&quot;&gt;&lt;/label&gt;
    &lt;/div&gt;
&lt;/section&gt;
                        </pre>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>