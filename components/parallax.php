<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <section>
            <?php include 'sidebar.php'; ?>
            <main class="content">
                <div class="page-title-block">
                    <h1 class="page-title">Parallax</h1>
                </div>
                <section class="large-spacing">
                    <h3>Fixed Parallax</h3>
                    <p>Use a container element and add a background image to the container with a specific height.
                        To create the actual parallax effect use background class 'parallax-fixed'</p>
                    <p><strong>Output:</strong></p>
                    <div class="container-fluid">
                        <div class="parallax-fixed parallax-top parallax-largespace">
                            <h2 class="text-white text-center">Fixed Parallax</h2>
                        </div>
                    </div>
                    <p><strong>Code Example:</strong></p>
                    <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;parallax-fixed parallax-top parallax-largespace&quot;&gt;
        &lt;h2 class=&quot;text-white&quot;&gt;Fixed Parallax&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </pre>
                </section>
                <section class="large-spacing">
                    <h3>Scroll Parallax</h3>
                    <p>Use a container element and add a background image to the container with a specific height.
                        To create the actual parallax effect use background class 'parallax-scroll'</p>
                    <p><strong>Output:</strong></p>
                    <div class="container-fluid">
                        <div class="parallax-scroll parallax-bottom parallax-mediumspace">
                            <h2 class="text-white text-center">Scroll Parallax</h2>
                        </div>
                    </div>
                    <p><strong>Code Example:</strong></p>
                    <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;parallax-scroll parallax-bottom parallax-mediumspace&quot;&gt;
        &lt;h2 class=&quot;text-white&quot;&gt;Scroll Parallax&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </pre>
                </section>
                <section class="large-spacing">
                    <h3>Contain Parallax</h3>
                    <p>Use a container element and add a background image to the container with a specific height.
                        To create the actual parallax effect use background class 'contain-parallax'</p>
                    <p><strong>Output:</strong></p>
                    <div class="container-fluid">
                        <div class="parallax-contain parallax-center parallax-smallspace">
                            <h2 class="text-white text-center">Scroll Parallax</h2>
                        </div>
                    </div>
                    <p><strong>Code Example:</strong></p>
                    <pre class="markup">
&lt;div class=&quot;container-fluid&quot;&gt;
    &lt;div class=&quot;parallax-contain parallax-center parallax-smallspace&quot;&gt;
        &lt;h2 class=&quot;text-white&quot;&gt;Contain Parallax&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </pre>
                </section>
            </main>
        </section>
        <?php include 'footer.php'; ?>
        <?php include 'script.php'; ?>
    </body>
</html>