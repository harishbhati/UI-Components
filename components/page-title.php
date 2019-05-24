<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
    <body class="inner-scroll">
        <?php include 'header.php'; ?>
        <section>
        <section class="sidebar-content-holder sidebar-left">
        <?php include 'sidebar.php'; ?>
            <main class="content nicescroll-block">
                <div class="page-title-block">
                    <h1 class="page-title">Page Title</h1>
                </div>
                <section class="medium-spacing">
                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Title With Border Left</h3>
                            <p>A title which have border bottom with left alignment.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <h2 class="section-title title-left">About Us</h2>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;h2 class=&quot;section-title title-left&quot;&gt;About Us&lt;/h2&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                    </div>

                    <div class="large-spacing">
                        <div class="outputs">
                            <h3>Title With Border Center</h3>
                            <p>A title which have border bottom with center alignment.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <h2 class="section-title title-center text-center">Our Team Members</h2>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;h2 class=&quot;section-title title-center text-center&quot;&gt;Our Team Members&lt;/h2&gt;
&lt;/div&gt;
                            </pre>
                        </div>

                        <div class="large-spacing">
                        <div class="outputs">
                            <h3>Title With Box Border</h3>
                            <p>A title which have border bottom with center box.</p>
                            <p><strong>Output:</strong></p>
                            <div class="container-fixed">
                                <h2 class="section-box-title box-title text-center">Our Team Members
                                    <span class="border-box"></span>
                                </h2>
                            </div>
                            <p><strong>Code Example:</strong></p>
                            <pre class="markup">
&lt;div class=&quot;container-fixed&quot;&gt;
    &lt;h2 class=&quot;section-box-title box-title text-center&quot;&gt;Our Team Members
        &lt;span class=&quot;border-box&quot;&gt;&lt;/span&gt;
    &lt;/h2&gt;
&lt;/div&gt;
                            </pre>
                        </div>
                    </div>
                </section>
        </section>
        </main>
        </section>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
    </body>
</html>